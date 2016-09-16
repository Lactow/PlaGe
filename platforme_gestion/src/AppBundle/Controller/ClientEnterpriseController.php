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
                    'type_connection' => 'client',
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
		return $this->render('project/project_dash.html.twig', array(
                    'type_connection' => 'client',
                    'descriptif_projet' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris molestie, lorem in dapibus tincidunt, tellus turpis lobortis est, vel tristique arcu ipsum vitae tortor. Pellentesque laoreet congue felis, at vehicula massa volutpat sit amet. Aliquam erat volutpat. Nulla eu tristique velit. Vestibulum feugiat in eros a pulvinar. Donec nibh dolor, ullamcorper at turpis vitae, aliquet ultrices tellus. Sed hendrerit et dui a luctus. Ut felis sapien, interdum eu sollicitudin at, feugiat id eros. Praesent in dolor ante. Aliquam sodales imperdiet porttitor.',
                    'personns' => array(
                    		'0' => array(
                    			'nom' => 'Jean',
                    			'prenom' => 'Darc',
                    			'post' => 'Chef de projet'),
                    		'1' => array(
                    			'nom' => 'Duck',
                    			'prenom' => 'Daffy',
                    			'post' => 'Commercial'),
                    		'2' => array(
                    			'nom' => 'Duck',
                    			'prenom' => 'Donald',
                    			'post' => 'Chef technique'),
                    		'3' => array(
                    			'nom' => 'Porc',
                    			'prenom' => 'Cinet',
                    			'post' => 'Developpeur'),
                    		'4' => array(
                    			'nom' => 'Mickey',
                    			'prenom' => 'Lesourisso',
                    			'post' => 'Developpeur'),
                    		),
                    'bugs' => array(
                    		'0' => array(
                    			'title' => 'test0',
                    			'descriptif' => 'dsdqsdsqdsqdsqdqs',
                    			'datecreate' => '00/00/2000',
                    			'progress' => '10%'),
                    		'1' => array(
                    			'title' => 'test1',
                    			'descriptif' => 'fdfsdfdsfsdfsdfsd',
                    			'datecreate' => '01/01/2001',
                    			'progress' => '20%'),
                    		'2' => array(
                    			'title' => 'test2',
                    			'descriptif' => 'dsqdsqdsqdsqfdgdgd',
                    			'datecreate' => '03/03/2003',
                    			'progress' => '30%'),
                    		'3' => array(
                    			'title' => 'test3',
                    			'descriptif' => 'dsdqsdsqffdfd',
                    			'datecreate' => '04/04/2004',
                    			'progress' => '40%'),
                    		'4' => array(
                    			'title' => 'test4',
                    			'descriptif' => 'dsqfggdsgqfdgfdgfdsgsfdgdfs',
                    			'datecreate' => '05/05/2005',
                    			'progress' => '50%'),
                    		),
                    'docs' => array(
                    		'0' => array(
                    			'title' => 'test0',
                    			'descriptif' => 'http://wikiwiki.fr/hello',
                    			'datecreate' => '00/00/2000'),
                    		'1' => array(
                    			'title' => 'test1',
                    			'descriptif' => 'http://wikiwiki.fr/hello',
                    			'datecreate' => '01/01/2001'),
                    		'2' => array(
                    			'title' => 'test2',
                    			'descriptif' => 'http://wikiwiki.fr/hello',
                    			'datecreate' => '03/03/2003'),
                    		'3' => array(
                    			'title' => 'test3',
                    			'descriptif' => 'http://wikiwiki.fr/hello',
                    			'datecreate' => '04/04/2004'),
                    		'4' => array(
                    			'title' => 'test4',
                    			'descriptif' => 'http://wikiwiki.fr/hello',
                    			'datecreate' => '05/05/2005'),
                    		)
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