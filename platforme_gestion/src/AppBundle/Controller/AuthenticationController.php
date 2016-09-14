<?php

/* 
 * Controller for authentcation.
 * Verify data of
 * -Create enterprise with Admin
 * -auth enterprise : admin, user, client
 * 
 * All of creation users/clients will be done by the enterprise admins
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AuthenticationController extends Controller
{
    /**
     * @Route("/auth/create", name="submit")
     */
    public function submitEnterprise(){
        //button -> save enterprise with admin
    }
    
    /**
     * @Route("/{enterprise}/{usr}", name="login")
     */
    public function login($enterprise, $usr){
        //will connect the user/admin/client 
        //check user name, password
    }
    
    /**
     * @Route("/{enterprise}/logout", name="logout")
     */
    public function logout($enterprise){
        //disconnect user/admin/client
        //redirect on /
    }
    
}