<?php

// src/OuisendAdminBundle/Controller/HelloController.php

namespace OuisendAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
    public function indexAction()
    {
    	// Version 1 du tuto
        // return new Response("Ghost World !");
        
        return $this->render('OuisendAdminBundle:Hello:hello-world.html.twig', array('nom' => 'winzou'));
    }
}
