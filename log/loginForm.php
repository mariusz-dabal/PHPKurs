<?php 
	session_start();
	if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == 1) {
		header('Location: home.php');
	} 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Document</title>
		<style>
			body {
				background: #dfdfdf;
			}

			h1 {
				color: red;
				text-align: center;
			}

			form {
				margin: 30px auto;
				width: 50%;
			}

			input {
				margin-top: 1em;
				width: 100%;
				display: block;
			}
		</style>
	</head>
	<body>
		<h1>Logowanie</h1>
		<form method="POST" action="login.php">
			<input type="email" name="email" id="email" placeholder="Email" />
			<input
				type="password"
				name="password"
				id="password"
				placeholder="Hasło"
			/>

			<input type="submit" value="Submit" />
		</form>
	</body>
</html>
