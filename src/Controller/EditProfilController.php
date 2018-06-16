<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EditProfilController extends Controller
{
    /**
     * @Route("/profil/modifier", name="modifier_profil")
     */
    public function modifier (Request $request, UserPasswordEncoderInterface $passwordEncoder) {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);

        $genre = $user->getGenre();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $password = $passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('edited', 'Vos modifications ont bien été appliquées');

            return $this->redirectToRoute('profil');
        }

        return $this->render(
            'content/modifier_profil.html.twig',
            array(
                'form' => $form->createView(),
                'genre' => $genre
            )
        );
    }
}
