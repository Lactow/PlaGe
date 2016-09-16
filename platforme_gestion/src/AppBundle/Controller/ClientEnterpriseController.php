<?php 

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ClientEnterpriseController extends Controller {
	/**
     * 
     * @Route("/enterprise/client", name="Client view")
     */
	function ClientView(){
		return $this->render('enterprise/client/default_client.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation',
                    'view_extension' => 'dash'
        ));
        
	}

	/**
	 *
	 *@Route("/enterprise/client/projet", name="Client projet")
	 */
	function ProjectDashboard(){
		return $this->render('enterprise/dashboard.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
	/**
	 *
	 *@Route("/enterprise/client/projet/doc", name="doc view client")
	 */
	function docView(){
		return $this->render('enterprise/doc/doc_view.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
	/**
	 *
	 *@Route("/enterprise/client/projet/bug/add", name="bug form")
	 */
	function bugReport(){
		return $this->render('enterprise/bug/bug_form.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
	/**
	 *
	 *@Route("/enterprise/client/projet/contact", name="contact client")
	 */
	function contactView(){
		return $this->render('general/contact.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
	/**
	 *
	 *@Route("/enterprise/client/projet/buglist", name="bug")
	 */
	function bugListView(){
		return $this->render('enterprise/bug/bug_view.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
}