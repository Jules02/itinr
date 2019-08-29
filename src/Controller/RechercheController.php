<?php

namespace App\Controller;

use App\Entity\Path;
use App\Form\RechercheType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class RechercheController extends AbstractController
{
    /**
     * @Route("/recherche", name="recherche")
     * @param Environment $twig
     * @return Response
     */
    public function recherche (Environment $twig, Request $request, RegistryInterface $doctrine) {
        $form = $this->createForm(RechercheType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $valeurs = $form->getData();

            $recherchePreciseArray = $valeurs["recherchePrecise"];

            $criteresArray = [
                'pathLocation' => $valeurs['lieu'],
                'typeSportMarche' => $valeurs['typeSportMarche'],
                'typeSportCourse' => $valeurs['typeSportCourse'],
                'typeSportVelo' => $valeurs['typeSportVelo'],
                'typeSportVTT' => $valeurs['typeSportVTT'],
                'typeSportAutre' => $valeurs['typeSportAutre'],
                'auteur' => $recherchePreciseArray['parAuteur'],
                'titre' => $recherchePreciseArray['parTitre']
            ];

            $criteresArray = array_filter($criteresArray);

            if(empty($criteresArray)){
                $this->addFlash('error', "Vous n'avez rien rentré");
                return new Response($twig->render('content/recherche.html.twig', [
                    'form' => $form->createView()
                ]));
            }

            $pathRepository = $doctrine->getRepository(Path::class);
            $resultatPath = $pathRepository->findBy(
                $criteresArray
            );

            if(empty($resultatPath)){
                $this->addFlash('error', 'Aucun itinéraire ne correspond à vos critères');
            }else{
                $resultatPathNb = count($resultatPath);
                return new Response($twig->render('content/resultats_recherche.html.twig', [
                    'resultatPath' => $resultatPath,
                    'resultatPathNb' => $resultatPathNb
                ]));
            }
        }

        return new Response($twig->render('content/recherche.html.twig', [
            'form' => $form->createView()
        ]));
    }
}
