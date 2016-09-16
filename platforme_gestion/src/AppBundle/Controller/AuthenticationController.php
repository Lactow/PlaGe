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
     * will create ONE ENTERPRISE
     * @Route("/entreprise/auth/create", name="submit")
     */
    public function submitEnterprise(){
        //button -> save enterprise with admin
    }
    
    /**
     * will log any user (admin, user, client) FOR ONE ENTERPRISE
     * @Route("/enterprise/auth", name="auth")
     */
    public function authentication(){
        //will connect the user/admin/client 
        //check user name, password
        /*if($this->get('request')->getMethode() == 'POST'){
            return $this->render('auth/authentication.html.twig', array(
                'title_connexion' => 'Hello',
                'login' => 'Email address',
                'password' => 'Password'
                ));
        }*/
        

        return $this->render('auth/authentication.html.twig', array(
                'title_connexion' => 'Sign in to your enterprise space',
                'login' => 'Email address',
                'password' => 'Password'
                ));
    }
    /**
     * will log any user (admin, user, client) FOR ONE ENTERPRISE
     * @Route("/enterprise/auth_check", name="auth_check")
     */
    public function authentication_check(Request $request){
        if($request->isMethod('POST')){
            switch ($request->get('email')) {
                case 'client':
                    return $this->redirect($this->generateUrl('Client view'));
                    break;
                case 'admin':
                    return $this->redirect($this->generateUrl('Admin view'));
                    break;
                case 'utilisateur':
                    return $this->redirect($this->generateUrl('User view'));
                    break;
                default:
                    //Page access denied
                    break;
            }
        }
    }
    /**
     * will logout any user (admin, user, client) FOR ONE ENTERPRISE
     * @Route("/enterprise/logout", name="logout")
     */
    public function logout(){
        //disconnect user/admin/client
        //redirect on /
    }
}