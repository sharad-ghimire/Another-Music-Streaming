<?php
class Account{
    private $errorArray;

    public function __construct() {
        $this->errorArray = array();


    }

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2 ) {        	
        $this->validateUsername($un);
        $this->validateFirstName($fn);
        $this->validateLastName($ln);
        $this->validateEmails($em, $em2);
        $this->validatePasswords($pw, $pw2);
    }

    private function validateUsername($user) {
        if(strlen($user) > 25 || strlen($user) <5){
            array_push($this->errorArray, "Username must be between 5 and 25");
            return;
        }
        //TODO: check if username exists.

    }

    private function validateFirstName($fn) {
        if(strlen($fn) > 25 || strlen($fn) <2){
            array_push($this->errorArray, "First Name must be between 2 and 25");
            return;
        }
        
    }

    private function validateLastName($ln) {
        if(strlen($ln) > 25 || strlen($ln) <2){
            array_push($this->errorArray, "Last Name must be between 2 and 25");
            return;
        }
        
    }

    private function validateEmails($em, $emConfirm) {
        if($em != $emConfirm){
            array_push($this->errorArray, "Emails dont match");
            return;
        }
        if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
            array_push($this->errorArray, "Email is invalid");
            return;
        }
        //TODO: Check that email  hasn't already been used
        
    }

    private function validatePasswords($pw, $pwConfirm) {
        if($pw != $pwConfirm){
            array_push($this->errorArray, "Passwords don't match");
            return;
        }
        if(preg_match('/[^A-Za-z0-9]/', $pw)){
            array_push($this->errorArray, "Passwords can only contains number and letter");
            return;
        }
        if(strlen($pw) > 30 || strlen($pw) <5){
            array_push($this->errorArray, "Password must be between 5 and 30 characters");
            return;
        }
        
    }



}







?>