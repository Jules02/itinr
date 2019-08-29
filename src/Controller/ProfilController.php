<?php

namespace App\Controller;

use App\Entity\Path;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Twig\Environment;

class ProfilController extends AbstractController
{
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

            return $this->redirectToRoute('recherche-utilisateur');
        }
    }

    /**
     * @Route("/profil/{username}/modifier_profil", name="modifier_profil")
     */
    public function modifier_profil (Request $request, UserPasswordEncoderInterface $passwordEncoder, $username) {
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

            return $this->redirectToRoute('profil', array('username' => $username));
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
     * @Route("/profil/{username}/delete", name="delete_profil")
     */
    public function delete_profil (RegistryInterface $doctrine, $username) {
        if($this->getUser()){
            $userId = $this->getUser()->getId();

            if($username === $this->getUser()->getUsername()){
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
        }else{
            $this->addFlash('notice', 'Nope petit malin ;)');

            return $this->redirectToRoute('concepteur');
        }
    }
}
