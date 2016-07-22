<?php

class Application_Form_UserForm extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $firstName = new Zend_Form_Element_Text("firstName");
        $firstName->setLabel('First Name: ');
        $firstName->setRequired();
        
        // this line class="form-element" is just CSS design.
        $firstName->setAttrib("class", "form-element");
        
        
        // Define other elements here with the same way
        
        
        
        
        $submit = new Zend_Form_Element_Submit("submit");
        $submit->setValue("Save");
        $submit->setAttrib("class", "btn btn-success");
        
        
        $reset = new Zend_Form_Element_Reset("reset");
        $reset->setValue("Cancel");
        $reset->setAttrib("class", "btn btn-danger");
        
        
        
        
        // add form elements 
        $this->addElements(array(
            $firstName,
            //other elements here ...
            $submit,
            $reset
        ));
        
        
    }


}

