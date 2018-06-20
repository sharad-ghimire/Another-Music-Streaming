<?php 
	include("includes/classes/Account.php");
	$account = new Account();


	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");
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
				<?php echo $account->getError("Username must be between 5 and 25")  ?>
				<label for="username">Username</label>
				<input type="text" id="username" name="username" placeholder="Username" required>
			</p>
			<p>
				<?php echo $account->getError("First Name must be between 5 and 25")  ?>
				<label for="firstName">First Name</label>
				<input type="text" id="firstName" name="firstName" placeholder="firstName" required>
			</p>
			<p>
				<?php echo $account->getError("Last Name must be between 5 and 25")  ?>	
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