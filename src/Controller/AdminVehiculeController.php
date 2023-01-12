<?php

namespace App\Controller;

use App\Entity\Vehicules;
use App\Repository\VehiculesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminVehiculeController extends AbstractController
{
    #[Route('/admin/vehicules', name: 'app_admin_vehicule')]
    public function viewVehicule(VehiculesRepository $vehiculesRepository): Response
    {
$vehicules = $vehiculesRepository->findAll();

        return $this->render('admin_vehicule/vehiculesIndex.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    #[Route('/admin/conducteurs', name: 'app_admin_conducteurs')]
    public function viewConducteurs(): Response
    {
        return $this->render('admin_vehicule/conducteursIndex.html.twig', [
            'controller_name' => 'AdminVehiculeController',
        ]);
    }

    #[Route('/admin/maintenance', name: 'app_admin_maintenance')]
    public function viewMaintenance(): Response
    {
        return $this->render('admin_vehicule/maintenanceIndex.html.twig', [
            'controller_name' => 'AdminVehiculeController',
        ]);
    }

    #[Route('/admin/amendes', name: 'app_admin_amendes')]
    public function viewAmendes(): Response
    {
        return $this->render('admin_vehicule/amendesIndex.html.twig', [
            'controller_name' => 'AdminVehiculeController',
        ]);
    }

}
