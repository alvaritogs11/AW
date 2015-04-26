<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="img/instatube.ico" />
		<link rel="stylesheet" href="css/index.css">
		<title>InstaTube</title>
	</head>
	<body>
		<?php include 'cabecera.php'; 
			include 'contenidoVideo.php'; 
			if ($_SESSION ['isLogin'])
				include 'barraLateral.php';
			include 'pie.php'; 
		?>
	</body>
</html>