<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeController extends AbstractController
{
    #[Route('/vehicules', name: 'app_vehicule')]
    public function index(): Response
    {
        return $this->render('Vehicules/index.html.twig', [
            'controller_name' => 'VehiculeController',
        ]);
    }
}
