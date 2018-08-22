<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\Session\Session;

class EditProfilController extends Controller
{
    /**
     * @Route("/profil/modifier_profil", name="modifier_profil")
     */
    public function modifier_profil (Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('edited', 'Vos modifications ont bien été appliquées');

            return $this->redirectToRoute('profil', array('username' => $user->getUsername()));
        }

        return $this->render(
            'content/modifier_profil.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/newAvatar", name="newAvatar")
     */
    public function newAvatar ()
    {
        $user = $this->getUser();
        $username = $user->getUsername();

        $avatarNb = rand(1, 22);
        $user->setImage("images/avatar/avatar (" . $avatarNb . ").png");

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $this->addFlash('success', 'Vous avez un nouvel avatar ;)');

        return $this->redirectToRoute('profil', array('username' => $username));
    }

    /**
     * @Route("/profil/delete", name="delete_profil")
     */
    public function delete_profil (RegistryInterface $doctrine) {
        if($this->getUser()){
            $userId = $this->getUser()->getId();

            $session = $this->get('session');
            $session = new Session();
            $session->invalidate();

            $userRepository = $doctrine->getRepository(User::class);
            $userEntity = $userRepository->find($userId);

            $em = $doctrine->getEntityManager();
            $em->remove($userEntity);
            $em->flush();

            $this->addFlash('deleted', 'Votre compte et vos itinéraires ont bien été supprimés :(');

            return $this->redirectToRoute('concepteur');
        }else{
            $this->addFlash('notice', 'Nope petit malin ;)');

            return $this->redirectToRoute('concepteur');
        }
    }
}
