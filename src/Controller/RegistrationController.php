<?php

namespace App\Controller;

use App\Events;
use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // Par defaut l'utilisateur aura toujours le rôle ROLE_USER
            $user->setRoles(['ROLE_USER']);

            $genre = $user->getGenre();
            if($genre === "homme"){
                $avatarNb = rand(1, 27);
            }elseif($genre === "femme"){
                $avatarNb = rand(1, 19);
            }else{
                $avatarNb = rand(1, 4);
            }
            $user->setImage("images/avatar/" . $genre . "/avatar (" . $avatarNb . ").png");

            // On enregistre l'utilisateur dans la base
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $subject = "Test";
            $body = "Inscription réussie";

            $message = (new \Swift_Message())
                ->setSubject($subject)
                ->setTo($user->getEmail())
                ->setFrom('moveetest@gmail.com')
                ->setBody($body, 'text/html')
            ;

            $mailer->send($message);

            $this->addFlash('registred', 'Inscription réussie. Nous vous avons envoyé un email de bienvenue');

            return $this->redirectToRoute('concepteur');
        }

        return $this->render(
            'security/register.html.twig',
            array('form' => $form->createView())
        );
    }
}
