<?php
/*
 * This controller is the main controller
 * It will init routes for : 
 * 1- default (homepage)
 * 2- authentication (user connection)
 * 3 - admin dashboard (admin home)
 * 4 - user dashboard (user home)
 * 5 - client dashboard (client home)
 * 
 * And redirect to subcontrollers for each part
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    
    /**
     * Matches /auth
     * @Route("/auth", name="authentication")
     */
    public function authAction(){
        return $this->render('auth/authentication.html.twig');   
    }
    
    
    
}
