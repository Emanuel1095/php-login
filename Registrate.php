<?php
	require 'database.php';

	$message = '';

	if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name'])) {
		$sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
		$stmt = $conn->prepare($sql);	
		$stmt->bindParam(':name', $_POST['name']);
		$stmt->bindParam(':email', $_POST['email']);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$stmt->bindParam(':password', $password);
		
		if ($stmt -> execute()) {
			$message = 'Felicitaciones Se Ha Registrado Correctamente, Quiere <a href="Iniciar Sesion.php">Iniciar Sesion?</a>';
		}	else {
			$message = 'Lo Siento, Vuelva a Intentarlo';
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registrate</title>
		<link rel="stylesheet" type="text/css" href="CSS\Style_Sesion.css">
	</head>
	<body>
		<form action="Registrate.php" method="post">
			<div id="Registro">	
				<h1>Registrate</h1>
				<?php if (!empty($message)): ?>
					<p><?= $message ?></p>
				<?php endif; ?>	
				<label>Nombre:</label><br>
				<input type="name" name="name" placeholder="Nombre"><br>

				<label>Email:</label><br>
				<input type="email" name="email" placeholder="Email"><br>

				<label>Contraseña:</label><br>
				<input type="password" name="password" placeholder="Contraseña"><br>

				<br>
				<input type="submit" value="Registrarme"><br>
			</div>
		</form>
	</body>
</html>