<?php

class Application_Form_ProductForm extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        
        // setMethod to post
        $this->setMethod("POST");
        
        $url = new Zend_Form_Element_Text("url");
        $url->setRequired()->setAttrib("class", "form-control");
        
        $submit = new Zend_Form_Element_Submit("submit");
        $submit->setValue("Request! ");
        $submit->setAttrib("class", "btn btn-primary");
        
        $this->addElements(array(
            $url,
            $submit
        ));
    }


}
 
