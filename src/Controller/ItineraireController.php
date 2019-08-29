<?php

namespace App\Controller;

use App\Entity\Path;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ItineraireController extends AbstractController
{
    /**
     * @Route("/itineraire/{slug}", name="itineraire")
     * @param Environment $twig
     * @return Response
     */
    public function itineraire (Environment $twig, RegistryInterface $doctrine, $slug) {
        $path = $doctrine->getRepository(Path::class)->findOneBySlug($slug);

        if($path != null){
            return new Response($twig->render('content/itineraire.html.twig', [
                'path' => $path
            ]));
        }else{
            $this->addFlash('error', "Aucun itinéraire ne correspond à cette adresse");
            return $this->redirectToRoute('concepteur');
        }
    }

    /**
     * @Route("/delete_path/{id}", name="delete_path")
     * @param Environment $twig
     * @return Response
     */
    public function delete_itineraire (RegistryInterface $doctrine, $id) {
        if($this->getUser()){
            $path = $doctrine->getRepository(Path::class)->find($id);

            $pathAuteur = $path->getAuteur();

            if($pathAuteur == $this->getUser()->getUsername()){
                $em = $doctrine->getEntityManager();
                $em->remove($path);
                $em->flush();

                $this->addFlash('deleted', 'Votre itinéraire a bien été supprimé');

                return $this->redirectToRoute('concepteur');
            }else{
                $this->addFlash('notice', "Ce n'est pas votre itinéraire");

                return $this->redirectToRoute('concepteur');
            }
        }else{
            $this->addFlash('notice', "Vous n'êtes pas connecté");

            return $this->redirectToRoute('concepteur');
        }
    }
}
