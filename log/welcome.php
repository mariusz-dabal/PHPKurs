<?php 
	session_start();
	if (isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == 1) {
		$firstName = $_SESSION["firstName"];
		$lastName = $_SESSION["lastName"];
	} else {
		header('Location: loginForm.php');
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
				color:tomato;
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
		<?php echo "<h1>Witaj {$firstName} {$lastName}</h1>" ?>
	</body>
</html>
