<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home")
     */
    public function homepage()
    {
        return new Response('home');
    }

    public function show()
    {
        return new Response('item');
    }
}