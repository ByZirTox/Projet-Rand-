<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class AdminRapportController extends AbstractController
{
    #[Route('/admin/rapport', name: 'app_admin_rapport')]
    public function index(ChartBuilderInterface $chartBuilder): Response
    {
        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);

        $chart->setData([
            'labels' => ['FCTVA', 'Amendes', 'Accidents', 'Carburant', 'Bonus Eco', 'Prix Location', 'Assurance', 'Entretiens', 'Prix d\'achat'],
            'datasets' => [
                [
                    'type' => 'doughnut', 
                    'label' => 'Rapport trimestriel',
                    'backgroundColor' => ['rgb(255,55,55)','rgb(230,150,34)', 'rgb(255,8,8)','rgb(35,155,14)','rgb(45,255,8)','rgb(9,20,164)','rgb(27,241,255)','rgb(255,163,12)','rgb(200,0,200)'],
                    'data' => [15, 100, 155, 85, 235,500,348,823,1],
                    'borderColor' => 'rgb(208, 208, 208)',
                ],
            ],
        ]);
        return $this->render('admin_rapport/index.html.twig', [
            'chart' => $chart,
        ]);
    }
}
