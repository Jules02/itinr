<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RechercheUtilisateurType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

class RechercheUtilisateurController extends AbstractController
{
    /**
     * @Route("/recherche-utilisateur", name="recherche-utilisateur")
     */
    public function chercher_utilisateur(Environment $twig, Request $request, RegistryInterface $doctrine) {
        $form = $this->createForm(RechercheUtilisateurType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $userRepository = $doctrine->getRepository(User::class);
            $user = $userRepository->findOneByUsername($data["username"]);

            if($user){
                return $this->redirectToRoute('profil', array('username' => $user->getUsername()));
            }else{
                $this->addFlash('error', "Aucun utilisateur n'a été trouvé");
            }
        }

        return new Response($twig->render('content/recherche_utilisateur.html.twig', [
            'form' => $form->createView()
        ]));
    }
}