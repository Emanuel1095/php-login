<?php
	
	session_start();

	if (isset($_SESSION['user_id'])) {
		header('Location:  /php-login');
	}

	require 'database.php';

	

	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		$records = $conn->prepare('SELECT id, email, password FROM users WHERE email=:email');
		$records->bindParam(':email', $_POST['email']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);

		$message = "";

		if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
			$_SESSION['user_id'] = $results['id'];
			header('Location:  /php-login');
		} else {
			$message = 'Lo siento esos datos no existen, vuelva a ingresar sus datos <br>';
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Iniciar Sesion</title>
		<link rel="stylesheet" type="text/css" href="CSS\Style_Sesion.css">
	</head>
	<body>
	

		<form action="Iniciar Sesion.php" method="post">
			<div class="Iniciar-Sesion">
				
				<h1>Iniciar Sesion</h1>
				<?php if (!empty($message)) : ?>
					<p><?= $message ?></p>
				<?php endif; ?>	
				<label>Email:</label><br>
				<input type="email" name="email" placeholder="Ingresa tu Email"><br>

				<label>Contraseña:</label><br>
				<input type="password" name="password" placeholder="Contraseña"><br>

				<input type="submit" name="enviar" value="Iniciar Sesion">
			</div>
		</form>
	</body>
</html>