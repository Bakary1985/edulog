<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AceuilController extends AbstractController
{
    /**
     * @Route("/", name="aceuil")
     */
    public function index()
    {
        return $this->render('aceuil/index.html.twig', [
            'controller_name' => 'AceuilController',
        ]);
    }
}
