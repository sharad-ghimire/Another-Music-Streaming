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
	$firstName = ucfirst(strtolower($firstName));
	return $inputText;
}

function sanitizeFormPassword($inputText){
	$firstName = strip_tags($firstName); 
	return $inputText;
}

if(isset($_POST['registerButton'])){
	$username  = sanitizeFormUsername($_POST['username']);
	$firstName  = sanitizeFormString($_POST['firstName']);
	$lastName  = sanitizeFormString($_POST['lastName']);
	$email  = sanitizeFormString($_POST['email']);
	$emailConfirm  = sanitizeFormString($_POST['emailConfirm']);
	$password  = sanitizeFormPassword($_POST['password']);
	$passwordConfirm  = sanitizeFormPassword($_POST['passwordConfirm']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $emailConfirm, $password, $passwordConfirm);

	if($wasSuccessful == true) {
		header("Location: index.php");
	}

	
}
?>