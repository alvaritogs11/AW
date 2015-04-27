<?php session_start(); 
	$_SESSION ['isLogin'] = false;
	$_SESSION ['isAdmin'] = false;
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="img/instatube.ico" />
		<?php
			if (!$_SESSION ['isLogin'])	
				echo '<link rel="stylesheet" href="css/index.css">';
			else{
				if (!$_SESSION ['isAdmin'])
					echo '<link rel="stylesheet" href="css/indexLogin.css">';
				else
					echo '<link rel="stylesheet" href="css/indexAdmin.css">';
			}
		?>
		<title>InstaTube</title>
	</head>
	<body>
		<?php include 'cabecera.php'; 
			include 'contenidoIndex.php'; 
			if ($_SESSION ['isLogin'])
				include 'barraLateral.php';
			include 'pie.php'; 
		?>
	</body>
</html>