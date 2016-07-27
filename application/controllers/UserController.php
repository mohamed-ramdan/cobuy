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
        $form = new Application_Form_UserForm();
        $request = $this->getRequest();
        if($request->isPost())
        {
            if($form->isValid($request->getPost()))
            {
                $userModel = new Application_Model_User();
                $userModel->addNewUser($request->getParams());
                $this->redirect('/user/retrieve');
            }
        }
        $this->view->form  = $form;
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









