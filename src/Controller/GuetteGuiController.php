<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GuetteGuiController extends Controller
{
    /**
     * @Route("/guette/gui", name="guette_gui")
     */
    public function index()
    {
        return $this->render('guette_gui/index.html.twig', [
            'controller_name' => 'GuetteGuiController',
        ]);
    }
}
