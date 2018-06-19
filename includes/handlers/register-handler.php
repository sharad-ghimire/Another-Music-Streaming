<?php

//Sanitization
function sanitizeFormUsername($inputText){
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ","", $inputText); //replace space with empty string
	return $inputText;
}

function sanitizeFormString($inputText){
	$firstName = strip_tags($firstName); 
	$firstName = str_replace(" ","", $firstName);
	$firstName = ucfirst(strtolower($firstName))
	return $inputText;
}

function sanitizeFormPassword($inputText){
	$firstName = strip_tags($firstName); 
	return $inputText;
}

//Validations
function validateUsername($user) {

}

function validateFirstName($fn) {
	
}

function validateLastName($ln) {
	
}

function validateEmails($em, $emConfirm) {
	
}

function validatePasswords($pw, $pwConfirm) {
	
}




if(isset($_POST['registerButton'])){
	$username  = sanitizeFormUsername($_POST['username']);
	$firstName  = sanitizeFormString($_POST['firstName']);
	$lastName  = sanitizeFormString($_POST['lastName']);
	$email  = sanitizeFormString($_POST['email']);
	$emailConfirm  = sanitizeFormString($_POST['emailConfirm']);
	$password  = sanitizeFornPassword($_POST['password']);
	$passwordConfirm  = sanitizeFornPassword($_POST['passwordConfirm']);
	
	validateUsername($username);
	validateFirstName($firstName);
	validateLastName($lastName);
	validateEmails($email, $emailConfirm);
	validatePasswords($password, $passwordConfirm)









}







?>