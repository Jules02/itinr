<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PagesController extends AbstractController
{
    /**
     * @Route("/apropos", name="apropos")
     * @param Environment $twig
     * @return Response
     */
    public function apropos (Environment $twig) {
        return new Response($twig->render('content/apropos.html.twig'));
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
                ->setFrom('contact@itinr.fr')
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
