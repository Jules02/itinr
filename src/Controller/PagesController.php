<?php
/**
 * Created by PhpStorm.
 * User: juloc
 * Date: 22/02/2018
 * Time: 20:51
 */

namespace App\Controller;

use App\Entity\Path;
use App\Form\PathType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PagesController
{

    /**
     * @Route("/")
     * @param Environment $twig
     * @return Response
     */
    public function index (Environment $twig) {
        return new Response($twig->render('content/welcome.html.twig'));
    }

    /**
     * @Route("/concepteur")
     * @param Environment $twig
     * @return Response
     */
    public function concepteur (Environment $twig, RegistryInterface $doctrine) {
        $path = $doctrine->getRepository(Path::class)->find(1);

        return new Response($twig->render('content/concepteur.html.twig', [
            'path' => $path
        ]));
    }

    /**
     * @Route("/apropos")
     * @param Environment $twig
     * @return Response
     */
    public function apropos (Request $request, Environment $twig, RegistryInterface $doctrine, FormFactoryInterface $formFactory) {
        $paths = $doctrine->getRepository(Path::class)->find(21);
        $form = $formFactory->createBuilder(PathType::class, $paths[0])->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $doctrine->getEntityManager()->flush();
        }

        return new Response($twig->render('content/apropos.html.twig', [
            'paths' => $paths,
            'form' => $form->createView()
        ]));
    }

    /**
     * @Route("/chercher")
     * @param Environment $twig
     * @return Response
     */
    public function chercher (Request $request, Environment $twig, RegistryInterface $doctrine, FormFactoryInterface $formFactory) {
        $path = $doctrine->getRepository(Path::class)->find(25);

        return new Response($twig->render('content/chercher.html.twig', [
            'path' => $path
        ]));
    }

    /**
     * @Route("/aide")
     * @param Environment $twig
     * @return Response
     */
    public function aide (Environment $twig) {
        return new Response($twig->render('content/aide.html.twig'));
    }

    /**
     * @Route("/contact")
     * @param Environment $twig
     * @return Response
     */
    public function contact (Environment $twig) {
        return new Response($twig->render('content/contact.html.twig'));
    }

}