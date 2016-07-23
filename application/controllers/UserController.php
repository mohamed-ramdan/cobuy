<?php

class UserController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function createAction()
    {
        // action body
        $this->view->form  = new Application_Form_UserForm();
    }

    public function retrieveAction()
    {
        // action body
    }

    public function updateAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }


}









