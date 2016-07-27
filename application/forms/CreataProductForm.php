<?php

class Application_Form_CreataProductForm extends Zend_Form
{

    public function init()
    {
        $this->setMethod("POST");
        
        $name = new Zend_Form_Element_Text('productName');
        $name->setAttrib("class", "form-control");
        $name->setLabel("Product: ");
        
        $description = new Zend_Form_Element_Textarea("productDescription");
        $description->setAttribs(array(
            "rows"=>"5",
            "class"=>"form-control"
            
        ));
        $description->setLabel("Description: ");
        
        $photo = new Zend_Form_Element_Hidden("productPhoto");
        
        $price = new Zend_Form_Element_Text("productPrice");
        $price->setAttrib("class", "form-control");
        $price->setLabel("Price: ");
        
        
        $submit = new Zend_Form_Element_Submit("submit");
        $submit->setValue("Request! ");
        $submit->setAttrib("class", "btn btn-warning");
        
        
        $reset = new Zend_Form_Element_Submit("reset");
        $reset->setValue("Cancel! ");
        $reset->setAttrib("class", "btn btn-danger");
        
        
        $this->addElements(array(
            $name,
            $description,
            $photo,
            $price,
            $submit,
            $reset
        ));
    }


}

