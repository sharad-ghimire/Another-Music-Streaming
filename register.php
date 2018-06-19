<?php

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


if(isset($_POST['loginButton'])){


	
}

if(isset($_POST['registerButton'])){
	$username  = sanitizeFormUsername($_POST['username']);
	$firstName  = sanitizeFormString($_POST['firstName']);
	$lastName  = sanitizeFormString($_POST['lastName']);
	$email  = sanitizeFormString($_POST['email']);
	$emailConfirm  = sanitizeFormString($_POST['emailConfirm']);
	$password  = sanitizeFornPassword($_POST['password']);
	$passwordConfirm  = sanitizeFornPassword($_POST['passwordConfirm']);
	


	
} 

?>

<html>

<head>
	<title>Another Music Streaming</title>
</head>

<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>

		</form>

		<form action="register.php" id="registerForm" method="POST">
			<h2>Create your free account</h2>
			<p>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" placeholder="Username" required>
			</p>
			<p>
				<label for="firstName">First Name</label>
				<input type="text" id="firstName" name="firstName" placeholder="firstName" required>
			</p>
			<p>
				<label for="lastName">Last Name</label>
				<input type="text" id="lastName" name="lastName" placeholder="lastName" required>
			</p>
			<p>
				<label for="email">Email</label>
				<input type="email" id="email" name="email" placeholder="email" required>
			</p>
			<p>
				<label for="emailConfirm">Confirm Email</label>
				<input type="email" id="emailConfirm" name="emailConfirm" placeholder="emailConfirm" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder="Password" required>
			</p>
			<p>
				<label for="passwordConform">Confirm Password</label>
				<input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="passwordConfirm" required>
			</p>
			<button type="submit" name="registerButton">Sign Up</button>
		</form> 
	</div>

</body>

</html>