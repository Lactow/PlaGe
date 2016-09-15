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

class EnterpriseController extends Controller {

    /**
     * 
     * @Route("/enterprise", name="PlaGe")
     */
    public function enterpriseView(){
       // $breadcrumbs = $this->get("white_october_breadcrumbs");
    // Simple example
    //$breadcrumbs->addItem("Home", $this->get("router")->generate("/enterprise"));

    // Example without URL
    //$breadcrumbs->addItem("Some text without link");
    
      return $this->render('enterprise/enterprise.html.twig',
              array(
                  'enterprise_name' => 'PlaGE Corporation'
                 
                  
              ));  
    }
    
    /**
     * Matches / all enterprises
     * route /{enterprise}/dashboard
     * 
     * @Route("/enterprise/dashboard", name="Dashboard PlaGe")
     */
    public function enterpriseDashboard() {
        //This return is a fake enterprise
        return $this->render('enterprise/dashboard.html.twig', array(
                    
                    'project_name' => 'PlaGe',
                    'project_dead_line' => '14/02/2110',
                    'project_progress' => '10%',
                    'project_progress_bar' => '][-|*|------------------]>',
                    'items' => array(
                        'wiki' => array(
                            'name' => 'Wiki Enterprise',
                            'link' => 'http://www.wikipedia.org/wiki'
                        ),
                        'official_doc' => array(
                            'name' => 'Enterprise Official Document',
                            'link' => 'http://www.github.com'
                        )
                    ),
                    'admins' => array(
                        'Blah' => array(
                            'name' => 'Blah Bleh',
                            'mail' => 'admin-blah@pla_ge.com'
                        )
                    )
        ));
    }

}
