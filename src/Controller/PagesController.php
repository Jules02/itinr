<?php
/**
 * Created by PhpStorm.
 * User: juloc
 * Date: 22/02/2018
 * Time: 20:51
 */

namespace App\Controller;

use App\Entity\Path;
use App\Form\PathType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Twig\Environment;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PagesController extends Controller
{

    /**
     * @Route("/")
     * @param Environment $twig
     * @return Response
     */
    public function index (Environment $twig) {
        return new Response($twig->render('content/welcome.html.twig'));
    }

    /**
     * @Route("/concepteur", name="concepteur")
     * @Method({"GET", "POST"})
     * @param Environment $twig
     * @return Response
     */
    public function concepteur (Environment $twig, Request $request, FormFactoryInterface $formFactory, RegistryInterface $doctrine) {
        $path = new Path();

        $form = $this->createForm(PathType::class, $path);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $path = $form->getData();

            $user = $this->getUser();

            if(null === $user){
                $noms = array(
                    1 => "Superman",
                    2 => "Batman",
                    3 => "Black Panther",
                    4 => "Antman",
                    5 => "Ironman",
                    6 => "Wonder Woman",
                    7 => "Deadpool",
                    8 => "Dr Strange",
                    9 => "Batgirl",
                );

                $nbNom = rand(1, 9);
                $nom = $noms[$nbNom];

                $path->setAuteur($nom);
            }else{
                $path->setAuteur($user->getUsername());
            }

            $em = $doctrine->getEntityManager();
            $em->persist($path);
            $em->flush();

            $this->addFlash('pathSaved', "Parcours enregistré avec succès !");
        }


        return new Response($twig->render('content/concepteur.html.twig', [
            'form' => $form->createView()
        ]));
    }

    /**
     * @Route("/apropos", name="apropos")
     * @param Environment $twig
     * @return Response
     */
    public function apropos (Request $request, Environment $twig, RegistryInterface $doctrine, FormFactoryInterface $formFactory) {
        $path = new Path();

        $formBuilder = $formFactory->createBuilder(PathType::class, $path);

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);

            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isSubmitted() && $form->isValid()) {
                // On enregistre notre objet $advert dans la base de données, par exemple
                $em = $doctrine->getEntityManager();
                $em->persist($path);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

                // On redirige vers la page de visualisation de l'annonce nouvellement créée
                return new Response($twig->render('content/aide.html.twig', [
                    'id' => $path->getId()
                ]));
            }
        }

        return new Response($twig->render('content/apropos.html.twig', [
            'form' => $form->createView()
        ]));
    }

    /**
     * @Route("/chercher/{id}", name="chercher")
     * @param Environment $twig
     * @return Response
     */
    public function chercher (Request $request, Environment $twig, RegistryInterface $doctrine, $id) {
        $path = $doctrine->getRepository(Path::class)->find($id);

        return new Response($twig->render('content/chercher.html.twig', [
            'path' => $path
        ]));
    }

    /**
     * @Route("/aide", name="aide")
     * @param Environment $twig
     * @return Response
     */
    public function aide (Environment $twig, RegistryInterface $doctrine) {
        $path = $doctrine->getRepository(Path::class)->find(id);

        return new Response($twig->render('content/aide.html.twig', [
            'path' => $path
        ]));
    }

    /**
     * @Route("/contact", name="contact")
     * @param Environment $twig
     * @return Response
     */
    public function contact (Request $request, Environment $twig, RegistryInterface $doctrine, FormFactoryInterface $formFactory) {
        $path = new Path();

        $formBuilder = $formFactory->createBuilder(FormType::class, $path);

        $form = $formBuilder
            ->add('path',        TextType::class)
            ->add('titre',       TextType::class)
            ->add('typeSport',   TextType::class)
            ->add('description', TextType::class)
            ->add('image',       TextType::class)
            ->add('note',        IntegerType::class)
            ->add('autre_filtre',TextType::class)
            ->add('save',        SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $path = $form->getData();

            $em = $doctrine->getEntityManager();
            $em->persist($path);
            $em->flush();

            return new Response($twig->render('content/aide.html.twig'));
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
     * @Route("/profil", name="profil")
     * @param Environment $twig
     * @return Response
     */
    public function profil (Environment $twig) {
        return new Response($twig->render('content/profil.html.twig'));
    }

    /**
     * @Route("/profil/modifier", name="modifier_profil")
     * @param Environment $twig
     * @return Response
     */
    public function modifier (Environment $twig) {
        return new Response($twig->render('content/modifier_profil.html.twig'));
    }
}