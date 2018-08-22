<?php
/**
 * Created by PhpStorm.
 * User: juloc
 * Date: 22/02/2018
 * Time: 20:51
 */

namespace App\Controller;

use App\Entity\Path;
use App\Entity\User;
use App\Form\ChercherType;
use App\Form\ContactType;
use App\Form\PathType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Cookie;

class PagesController extends Controller
{

    /**
     * @Route("/")
     */
    public function index () {
        return $this->redirectToRoute('concepteur');
    }

    /**
     * @Route("/concepteur", name="concepteur")
     * @Method({"GET", "POST"})
     * @param Environment $twig
     * @return Response
     */
    public function concepteur (Environment $twig, Request $request, RegistryInterface $doctrine) {
        $cookieTuto = $request->cookies->get('tuto');

        $path = new Path();

        $form = $this->createForm(PathType::class, $path);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $path = $form->getData();

            if(null !== $path->getImage()){
                $file = $path->getImage();

                $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();

                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );

                $path->setImage($fileName);
            }

            $user = $this->getUser();

            if(null === $user){
                $noms = array(
                    1 => "Rey",
                    2 => "Dark Vador",
                    3 => "Luke",
                    4 => "Boba Fett",
                    5 => "Chewbi",
                    6 => "Dark Maul",
                    7 => "Palpatine",
                    8 => "Han Solo",
                    9 => "JarJar Binks",
                    10 => "Obi-Wan Kenobi",
                    11 => "Leia",
                    12 => "Yoda",
                    13 => "Jabba le Hutt",
                    14 => "Kylo Ren",
                    15 => "R2-D2",
                    16 => "C-3PO"
                );

                $nbNom = rand(1, 16);
                $nom = $noms[$nbNom];

                $path->setAuteur($nom . " (anonyme)");
            }else{
                $path->setAuteur($user->getUsername());
            }

            $em = $doctrine->getEntityManager();
            $em->persist($path);
            $em->flush();

            $this->addFlash('pathSaved', "Parcours enregistré avec succès !");

            return $this->redirectToRoute('itineraire', array('id' => $path->getId()));
        }

        if($cookieTuto){
            $renderArray = [
                'form' => $form->createView(),
                'tuto' => false
            ];
        }else{
            $renderArray = [
                'form' => $form->createView(),
                'tuto' => true
            ];

            $response = new Response();
            $response->headers->setCookie(new Cookie('tuto', 1, strtotime('+10 years' )));
            $response->sendHeaders();
        }

        return new Response($twig->render('content/concepteur.html.twig', $renderArray));
    }

    /**
     * @Route("/delete_path/{id}", name="delete_path")
     * @param Environment $twig
     * @return Response
     */
    public function delete_path (RegistryInterface $doctrine, $id) {
        if($this->getUser()){
            $path = $doctrine->getRepository(Path::class)->find($id);

            $pathAuteur = $path->getAuteur();

            if($pathAuteur == $this->getUser()->getUsername()){
                $em = $doctrine->getEntityManager();
                $em->remove($path);
                $em->flush();

                $this->addFlash('deleted', 'Votre itinéraire a bien été supprimé');

                return $this->redirectToRoute('concepteur');
            }else{
                $this->addFlash('notice', "Ce n'est pas votre itinéraire");

                return $this->redirectToRoute('concepteur');
            }
        }else{
            $this->addFlash('notice', "Vous n'êtes pas connecté");

            return $this->redirectToRoute('concepteur');
        }
    }

    /**
     * @return string
     */
    private function generateUniqueFileName(){
        return md5(uniqid());
    }

    /**
     * @Route("/apropos", name="apropos")
     * @param Environment $twig
     * @return Response
     */
    public function apropos (Request $request, Environment $twig, RegistryInterface $doctrine, FormFactoryInterface $formFactory) {
        return new Response($twig->render('content/apropos.html.twig'));
    }

    /**
     * @Route("/itineraire/{id}", name="itineraire")
     * @param Environment $twig
     * @return Response
     */
    public function itineraire (Environment $twig, RegistryInterface $doctrine, $id) {
        $path = $doctrine->getRepository(Path::class)->find($id);

        if($path != null){
            return new Response($twig->render('content/itineraire.html.twig', [
                'path' => $path
            ]));
        }else{
            $this->addFlash('error', "Aucun itinéraire ne correspond à cette adresse");
            return $this->redirectToRoute('concepteur');
        }
    }

    /**
     * @Route("/recherche", name="chercher")
     * @param Environment $twig
     * @return Response
     */
    public function chercher (Environment $twig, Request $request, RegistryInterface $doctrine) {
        $form = $this->createForm(ChercherType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $valeurs = $form->getData();

            $recherchePreciseArray = $valeurs["recherchePrecise"];

            $criteresArray = [
                'placeId' => $valeurs["placeId"],
                'typeSport' => $valeurs['typeSport'],
                'auteur' => $recherchePreciseArray['parAuteur'],
                'titre' => $recherchePreciseArray['parTitre']
            ];

            if(empty($valeurs["lieu"]) && empty($valeurs["placeId"]) && empty($valeurs["typeSport"]) && empty($recherchePreciseArray['parAuteur']) && empty($recherchePreciseArray['parTitre'])){
                $this->addFlash('error', "Vous n'avez rien rentré");
                return new Response($twig->render('content/chercher.html.twig', [
                    'form' => $form->createView()
                ]));
            }

            $criteresArray = array_filter($criteresArray);

            $pathRepository = $doctrine->getRepository(Path::class);
            $resultatPath = $pathRepository->findBy(
                $criteresArray, // Critere
                array(),        // Tri
                100,                              // Limite
                0                               // Offset
            );

            if(empty($resultatPath)){
                $this->addFlash('error', 'Aucun itinéraire ne correspond à vos critères');
            }else{
                $resultatPathNb = count($resultatPath);
                return new Response($twig->render('content/resultatsChercher.html.twig', [
                    'resultatPath' => $resultatPath,
                    'resultatPathNb' => $resultatPathNb
                ]));
            }
        }

        return new Response($twig->render('content/chercher.html.twig', [
            'form' => $form->createView()
        ]));
    }

    /**
     * @Route("/aide", name="aide")
     * @param Environment $twig
     * @return Response
     */
    public function aide (Environment $twig) {
        return new Response($twig->render('content/aide.html.twig'));
    }

    /**
     * @Route("/contact", name="contact")
     * @param Environment $twig
     * @return Response
     */
    public function contact (Request $request, Environment $twig, \Swift_Mailer $mailer) {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $subject = $data['objet'];
            $body = "Message de: " . $data['email'] . "<br/>" . $data['contenu'];

            $message = (new \Swift_Message())
                ->setSubject($subject)
                ->setTo('julesdupont02@gmail.com')
                ->setFrom('moveetest@gmail.com')
                ->setBody($body, 'text/html')
            ;

            $mailer->send($message);

            $this->addFlash('mailsent', 'Email bien envoyé ! Nous vous répondrons le plus rapidement possible');
        }

        return new Response($twig->render('content/contact.html.twig', [
            'form' => $form->createView()
        ]));
    }

    /**
     * @Route("/admin", name="admin")
     * @param Environment $twig
     * @return Response
     */
    public function admin (Environment $twig) {
        return new Response($twig->render('security/admin.html.twig'));
    }

    /**
     * @Route("/profil/{username}", name="profil")
     * @param Environment $twig
     * @return Response
     */
    public function profil (Environment $twig, RegistryInterface $doctrine, $username) {
        $user = $this->getUser();
        $userRepository = $doctrine->getRepository(User::class);
        $user = $userRepository->findOneByUsername($username);

        $pathRepository = $doctrine->getRepository(Path::class);
        $resultatPath = $pathRepository->findByAuteur(
            $username,
            array(),
            100,
            0
        );

        $nbPaths = count($resultatPath);

        if($user ==! null){
            if($user === $this->getUser()){
                if(empty($resultatPath)){
                    return new Response($twig->render('content/monprofil.html.twig'));
                }else{
                    return new Response($twig->render('content/monprofil.html.twig', [
                        'resultatPath' => $resultatPath,
                        'nbPaths' => $nbPaths
                    ]));
                }
            }else{
                if(empty($resultatPath)){
                    return new Response($twig->render('content/profil.html.twig', [
                        'user' => $user
                    ]));
                }else{
                    return new Response($twig->render('content/profil.html.twig', [
                        'resultatPath' => $resultatPath,
                        'nbPaths' => $nbPaths,
                        'user' => $user
                    ]));
                }
            }
        }else{
            $this->addFlash('error', 'Cette adresse ne correspond à personne');

            return $this->redirectToRoute('chercher-utilisateur');
        }
    }

    /**
     * @Route("/conditions-generales", name="conditions")
     * @param Environment $twig
     * @return Response
     */
    public function conditions (Environment $twig) {
        return new Response($twig->render('content/conditions.html.twig'));
    }

    /**
     * @Route("/licences", name="licences")
     * @param Environment $twig
     * @return Response
     */
    public function licences (Environment $twig) {
        return new Response($twig->render('content/licences.html.twig'));
    }
}