<?php

/*
 * This controller is user controller
 * Will init : 
 * default_user view (his projects, his tasks)
 * user_project view
 * user_create_project (or edit)o
 * 
 * user_tasks_project_view  o
 * user_task_edit o
 * 
 * user_budget o
 * user_budget_management o 
 * 
 * user_calendar o
 * 
 * 
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserEnterpriseController extends Controller {

    /**
     * 
     * @Route("/enterprise/user", name="User view")
     */
    public function UserView() {

        return $this->render('enterprise/user/default_user.html.twig', array(
                    'enterprise_name' => 'PlaGE Corporation'
        ));
    }

    /**
     * will take project id
     * 
     * @Route("/enterprise/user/project", name="Project View")
     */
    public function ProjectDashboard() {
        //This return one project selected 
        return $this->render('enterprise/user/project_dash.html.twig');
    }

    /**
     * wil take id project
     * @Route("/enterprise/user/project/tasks", name="Tasks view")
     * 
     */
    public function viewProjectTasks() {

        return $this->render('enterprise/user/project_tasks.html.twig');
    }

    /**
     * @Route("/enterprise/user/project/task/id", name="Task ID")
     * 
     */
    public function viewOneTask(){
        return $this->render("enterprise/user/task.html.twig");
    }
    /**
     * will take id projetc, id task
     * @Route("/enterprise/user/project/task/edit", name="One task")
     */
    public function editTask() {
        return $this->render('enterprise/user/task_form.html.twig');
    }

    /**
     * @Route("/enterprise/user/project/calendar", name="Project Calendar")
     */
    public function viewCalendar(){
        return $this->render('enterprise/user/calendar.html.twig');
    }

}
