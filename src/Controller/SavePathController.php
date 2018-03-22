<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\RegistryInterface;
use App\Entity\Path;

class SavePathController extends Controller
{
    /**
     * @Route("/savePath", name="savePath")
     */
    public function index(RegistryInterface $doctrine, Request $request)
    {
        $pathString = $request->request->get('pathString');

        $path = new Path();
        $path->setPath($pathString);

        $em = $doctrine->getEntityManager();
        $em->persist($path);
        $em->flush();

        return new Response();
    }
}
