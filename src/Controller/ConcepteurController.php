<?php

namespace App\Controller;

use App\Entity\Path;
use App\Form\PathType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ConcepteurController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index () {
        return $this->redirectToRoute('concepteur');
    }

    /**
     * @Route("/concepteur", name="concepteur")
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

            $path->setSlug($path->getTitre());

            $em = $doctrine->getEntityManager();
            $em->persist($path);
            $em->flush();

            $this->addFlash('pathSaved', "Parcours enregistré avec succès !");

            return $this->redirectToRoute('itineraire', array('slug' => $path->getSlug()));
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
}
