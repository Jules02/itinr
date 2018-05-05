<?php
/**
 * Created by PhpStorm.
 * User: juloc
 * Date: 22/02/2018
 * Time: 20:51
 */

namespace App\Controller;

use App\Entity\Path;
use App\Form\ContactType;
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
        return new Response($twig->render('content/apropos.html.twig'));
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
    public function aide (Environment $twig) {
        //Affichage de la dernière vidéo de la chaine Youtube
        return new Response($twig->render('content/aide.html.twig'));
    }

    /**
     * @Route("/contact", name="contact")
     * @param Environment $twig
     * @return Response
     */
    public function contact (Request $request, Environment $twig, \Swift_Mailer $mailer, FormFactoryInterface $formFactory) {
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

    /**
     * @Route("/conditions-generales", name="conditions")
     * @param Environment $twig
     * @return Response
     */
    public function conditions (Environment $twig) {
        return new Response($twig->render('content/conditions.html.twig'));
    }
}