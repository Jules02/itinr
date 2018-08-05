<?php

namespace App\Controller;

use App\Events;
use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Twig\Environment;

class RegistrationController extends Controller
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function registerAction(Environment $twig, Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // Par defaut l'utilisateur aura toujours le rôle ROLE_USER
            $user->setRoles(['ROLE_USER']);

            $avatarNb = rand(1, 22);
            $user->setImage("images/avatar/avatar (" . $avatarNb . ").png");

            // On enregistre l'utilisateur dans la base
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $message = (new \Swift_Message())
                ->setSubject("Inscription réussie !")
                ->setTo($user->getEmail())
                ->setFrom(['moveetest@gmail.com' => "Itin'r"])
            ;

            $body = $twig->render('emails/registred.html.twig', [
                'surname' => $user->getSurname(),
                'username' => $user->getUsername()
            ]);

            $message->setBody($body, 'text/html');

            $mailer->send($message);

            $this->addFlash('registred', 'Inscription réussie. Nous vous avons envoyé un email de bienvenue');

            return $this->redirectToRoute('concepteur');
        }

        return new Response($twig->render('security/inscription.html.twig', [
            'form' => $form->createView()
        ]));
    }
}
