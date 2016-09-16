<?php

/*
 * This controller is admin controller
 * Will init : 
 * default_admin view (dash projects + all tasks)oo 
 * admin_project view o o
 * admin_create_project (or edit)o
 * 
 * admin_tasks_project_view  o
 * admin_task_edit o
 * 
 * admin_budget o
 * admin_budget_management o 
 * 
 * admin_calendar o
 * 
 * admin_users_management o
 * admin_user_edit (create/edit) o
 * admin_user_roles (create/edit roles, like : dev, CM, commercial, chef projet,...)o
 * 
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminEnterpriseController extends Controller {

    /**
     * 
     * @Route("/enterprise/admin", name="Admin view")
     */
    public function AdminView() {

        return $this->render('enterprise/administrator/default_admin.html.twig', array(
                    'type_connection' => 'client',
                    'enterprise_name' => 'PlaGe Corporation',
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
     * @Route("/enterprise/admin/project", name="Dash view")
     */
    public function ProjectDashboard() {
        //This return one project selected 
        return $this->render('enterprise/administrator/default_admin.html.twig', array(
                    'type_connection' => 'admin',
                    'enterprise_name' => 'PlaGe Corporation',
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
     * @Route("/enterprise/admin/project/create", name="Create Project")
     */
    public function createProject() {

        return $this->render('enterprise/administrator/project_create.html.twig');
    }

    /**
     * wil take id project
     * @Route("/enterprise/admin/project/tasks", name="View All Tasks")
     */
    public function viewProjectTasks() {

        return $this->render('enterprise/administrator/project_tasks.html.twig');
    }

    /**
     * will take id projetc, id task
     * @Route("/enterprise/admin/project/task", name="One task")
     */
    public function viewTask() {
        return $this->render('enterprise/administrator/task.html.twig');
    }

    /**
     * will take id projetc, id task
     * @Route("/enterprise/admin/project/task/edit", name="Edit task")
     */
    public function editTask() {
        return $this->render('enterprise/administrator/task_form.html.twig');
    }

    /**
     * view all users in enterprise
     * 
     * @Route("/enterprise/admin/users")
     */
    public function viewUsers() {
        return $this->render('enterprise/administrator/users.html.twig');
    }

    /**
     * edit/create user
     * @Route("/enterprise/admin/user/edit", name="Edit User")
     */
    public function editUser() {
        return $this->render('enterprise/administrator/user_form.html.twig');
    }

    /**
     * @Route("/enterprise/admin/user/roles", name="User Roles")
     */
    public function viewRoles() {
        return $this->render('enterprise/administrator/roles.html.twig');
    }

    /**
     * @Route("/enterprise/admin/user/role/edit", name="Edit Role")
     */
    public function editRole() {
        return $this->render('enterprise/administrator/role_form.html.twig');
    }

    /**
     * @Route("/enterprise/admin/project/calendar", name="Project Calendar")
     */
    public function viewCalendar() {
        return $this->render('enterprise/administrator/calendar.html.twig');
    }

    /**
     * @Route("/enterprise/admin/project/budget", name="Project Budget")
     */
    public function viewBudget() {
        return $this->render('enterprise/administrator/budget.html.twig');
    }

    /**
     * @Route("/enterprise/admin/project/budget-management", name="Budget Management")
     */
    public function editBudget() {
        return $this->render('enterprise/administrator/budget_management.html.twig');
    }

}
