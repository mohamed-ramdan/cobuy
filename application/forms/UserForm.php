
<?php

class Application_Form_UserForm extends Zend_Form
{

    public function init()
    {
        /* 
         * Form Elements & Other Definitions Here ... 
         */
        
        //userID element should be auto incermented by DB 
        $userID = new Zend_Form_element_Hidden('userID');
        
        
        //Fisrt Name element creation
        $firstName = new Zend_Form_Element_Text("firstName");
        //Fisrt Name label
        $firstName->setLabel('First Name: ');
        // First Name is required
        $firstName->setRequired();
        // filter to remove any spaces before or after the text 
        $firstName->addFilter('StringTrim');
        
        //Last Name element creation
        $lastName = new Zend_Form_Element_Text("lastName");
        //Last Name label
        $lastName->setLabel('Last Name: ');
        // Last Name is required
        $lastName->setRequired();
        // filter to remove any spaces before or after the text 
        $lastName->addFilter('StringTrim');
        
        //E-Mail element creation
        $email = new Zend_Form_Element_Text("email");
        //E-Mail label
        $email->setLabel('E-Mail: ');
        //E-Mail is required
        $email->setRequired();
        // filter to remove any spaces before or after the text 
        $email->addFilter('StringTrim');
        // Validation to check if the input is a valid E-Mail address
        $validator = new Zend_Validate_EmailAddress();
        if ($validator->isValid($email)) 
        {
            // email appears to be valid
        } 
        else
        {
            // email is invalid; print the reasons
            foreach ($validator->getMessages() as $message) 
            {
                echo "$message\n";
            }
        }
        $email->addValidator($validator);
        
        //Address element creation
        $address = new Zend_Form_Element_Text("address");
        //E-Mail label
        $address->setLabel('Address: ');
        //E-Mail is required
        $address->setRequired();
        // filter to remove any spaces before or after the text 
        $address->addFilter('StringTrim');
        
        //Password element creation
        $password = new Zend_Form_Element_Password("password");
        //Password label
        $password->setLabel('Password: ');
        //Password is required
        $password->setRequired();
        // valitation to asure that the minimum linth is 8 chars
        $password->addValidator('StringLength', false, array(8));
        
        //Confirm Password element creation
        $confirmPassword = new Zend_Form_Element_Password("confirmPassword");
        //Confirm Password label
        $confirmPassword->setLabel('Confirm Password: ');
        //Confirm Password is required
        $confirmPassword->setRequired();
        // valitation to asure that the minimum linth is 8 chars
        $confirmPassword->addValidator('StringLength', false, array(8));

        //mobil1 element creation
        $mobil1 = new Zend_Form_Element_Text("mobil1");
        //mobil1 label
        $mobil1->setLabel('Mobile Number: ');
        //mobil1 is required
        $mobil1->setRequired();
        // filter to remove any spaces before or after the text 
        $mobil1->addFilter('StringTrim');
        // Validation to check if the input is a valid mobile number
        $mobil1->addValidators(array('Digits',
            array(
                'regex', false,
                array(
                    'pattern' => '/(?([0-9]{3}))?([ .-]?)([0-9]{3})\2([0-9]{4})/',
                    'messages' => 'This is not a mobile number!'))));
        
        //mobil2 element creation
        $mobil2 = new Zend_Form_Element_Text("mobil2");
        //mobil2 label
        $mobil2->setLabel('Another Mobile Number: ');
        //mobil1 is not required
        //$mobil2->setRequired();
        // filter to remove any spaces before or after the text 
        $mobil2->addFilter('StringTrim');
        // Validation to check if the input is a valid mobile number
        $mobil2->addValidators(array('Digits',
            array(
                'regex', false,
                array(
                    'pattern' => '/(?([0-9]{3}))?([ .-]?)([0-9]{3})\2([0-9]{4})/',
                    'messages' => 'This is not a mobile number!'))));

        //photo element creation
        $photo = new Zend_Form_Element_File('photo', array(
            'label' => 'Picture',
            'required' => true,
            'MaxFileSize' => 2097152, // 2097152 BYTES = 2 MEGABYTES
            'validators' => array(
                array('Count', false, 1),
                array('Size', false, 2097152),
                array('Extension', false, 'gif,jpg,png'),
            )
        ));
        
        /*Product Owner that will do the product configuration
         * Yes means that this user is product owner and he will do the product configuration 
         * No means that this user is not product owner and he will share the price with other user
         * Default value is No
         */
        // Product Owner radio creation
        $is_product_owner = new Zend_Form_Element_Radio("productOwner");
        // Product Owner label
        $is_product_owner->setLabel("are you the Product Owner?");
        // add Yes option
        $is_product_owner->addMultiOption("Yes", "true");
        // add No option
        $is_product_owner->addMultiOption("No", "false");
        // Set default value
        $is_product_owner->setValue("No");
        // Product Owner Radio is requried
        $is_product_owner->setRequired();
        
        /*
         * Is Blocked and Is Admin attributes will handled by the system
         */
        
        //Submit button creation
        $submit = new Zend_Form_Element_Submit("submit");
        //Submit button value
        $submit->setValue("Save");        
        
        //Reset button creation
        $reset = new Zend_Form_Element_Reset("reset");
        //Reset button value
        $reset->setValue("Cancel");
        
        /*
         * Add the Elements to the User Form
         */ 
        $this->addElements(array(
            $userID,
            $firstName,
            $lastName,
            $address,
            $email,
            $password,
            $confirmPassword,
            $mobil1,
            $mobil2,
            $photo,
            $is_product_owner,
            $submit,
            $reset
        ));
        
                
        /*
         * CSS Designs
         */
        // this line class="form-element" is just CSS design.
//        $firstName->setAttrib("class", "form-element");
//        $lastName->setAttrib("class", "form-element");
//        $email->setAttrib("class", "form-element");
//        $submit->setAttrib("class", "btn btn-success");
//        $reset->setAttrib("class", "btn btn-danger");
        
    } 
}