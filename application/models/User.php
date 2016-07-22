<?php

/**
 * User Model class to sync with users table in database.
 * @author Mohamed Ramadan <mramadan181291@gmail.com>
 */
class Application_Model_User extends Zend_Db_Table_Abstract
{
    // Table name "users"
    protected $_name = "users";
    
    
    /**
     * list all users from the table into an array.
     * @return array of all users in the database table.
     */
    function listUsers()
    {
        return $this->fetchAll()->toArray();
    }
    
    
    /**
     * userDetail function to provide specific user info based on his id.
     * @param int user $id
     * @return array of user's data.
     */
    function userDetails($id)
    {
        return $this->find($id)->toArray();
    }
    
    
    /**
     * addNewUser takes users information and save(insert) it to database.
     * @param array $userData from form submission.
     */
    function addNewUser($userData)
    {
        // create table row
        $row = $this->createRow();
        //fname is the same as the column name is database table.
        $row->fname = $userData['fname'];
        //lname is the same as the column name is database table.
        $row->lname = $userData['lname'];
        //gender is the same as the column name is database table.
        $row->gender = $userData['gender'];
        //mail is the same as the column name is database table.
        $row->mail = $userData['mail'];
        
        // Other elements here pending Form and database creation.
        
        
        // save (insert) into the table.
        $row->save();
    }
    
    

}

