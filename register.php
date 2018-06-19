<html>
<head>
	<title>Welcome to Slotify!</title>
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
			<label for="firstName">firstName</label>
			<input type="text" id="firstName" name="firstName" placeholder="firstName" required>
			</p>
			<p>
			<label for="lastName">lastName</label>
			<input type="text" id="lastName" name="lastName" placeholder="lastName" required>
			</p>
			<p>
			<label for="email">email</label>
			<input type="email" id="email" name="email" placeholder="email" required>
			</p>
			<p>
			<label for="emailConform">emailConform</label>
			<input type="email" id="emailConform" name="emailConform" placeholder="emailConform" required>
			</p>
			<p>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Password" required>
			</p>
			<p>
			<label for="passwordConform">Password</label>
			<input type="password" id="passwordConform" name="passwordConform" placeholder="passwordConform" required>
			</p>
			<button type="submit" name="loginButton">Login</button>
		</form>
	</div>

</body>
</html>