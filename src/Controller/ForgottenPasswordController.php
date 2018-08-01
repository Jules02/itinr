<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForgottenPasswordController extends Controller
{
    /**
     * @Route("/forgotten-password", name="forgotten_password")
     */
    public function index()
    {
        return $this->render('forgotten_password/index.html.twig', [
            'controller_name' => 'ForgottenPasswordController',
        ]);
    }
}
