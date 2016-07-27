<?php

class ProductController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $form = new Application_Form_CreataProductForm();
        $this->view->form = $form;
    }

    public function createAction()
    {
        // action body
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

    public function showAction()
    {
        // action body
        $form = new Application_Form_ProductForm();
        $this->view->form = $form;
        
    }


}











