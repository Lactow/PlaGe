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

class EnterpriseController extends Controller
{
    /**
     * Matches / all enterprises
     * route /{enterprise}
     * 
     * @Route("/enterprise", name="Your enterprise")
     */
    public function enterpriseOverview(){
        return $this->render('enterprise/enterprise_index.html.twig', array(
            'enterprise_name' => 'PlaGE Corporation',
            'project_name'=> 'PlaGe',
            'dead_line'=> '14/02/2110',
            'progress'=>'10%',
            'progress_bar'=>'][-|*|------------------]>'
        ));
    }
    
    /**
     * @Route("/enterprise/dashboard", name="dashboard")
     */
    public function indexAction(){
        return $this->render('enterprise/dashboard.html.twig', array(
           'var'=>'blah'
        ));
    }
}