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
                    'view_extension' => 'dash',
                    'enterprise_name'=>'PlaGe Corporation',
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

	/**
	 *
	 *@Route("/enterprise/client/project", name="Client project")
	 */
	function ProjectDashboard(){
		return $this->render('enterprise/dashboard.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
	/**
	 *
	 *@Route("/enterprise/client/project/doc", name="doc view client")
	 */
	function docView(){
		return $this->render('enterprise/doc/doc_view.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
	/**
	 *
	 *@Route("/enterprise/client/project/bug/add", name="bug form")
	 */
	function bugReport(){
		return $this->render('enterprise/bug/bug_form.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
	/**
	 *
	 *@Route("/enterprise/client/project/contact", name="contact client")
	 */
	function contactView(){
		return $this->render('general/contact.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
	/**
	 *
	 *@Route("/enterprise/client/project/buglist", name="bug")
	 */
	function bugListView(){
		return $this->render('enterprise/bug/bug_view.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
	}
}