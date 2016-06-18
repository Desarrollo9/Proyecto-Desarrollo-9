<?php

	$nombre=$_POST['nombre'];
	$cedula=$_POST['cedula'];
	$edad=$_POST['edad'];
	$sexo=$_POST['sexo'];
	$email= $_POST['email'];




	require("conect.php");



				mysql_query("INSERT INTO Expedientes VALUES('','$nombre','$cedula','$edad','$sexo','$email')");


					mysql_close($link);


?>
					<!DOCTYPE html>
					<html>
					<head>
						<link rel="stylesheet" href="../Proyecto-Desarrollo-9/_assets/_assets/css/jquery.mobile-1.4.5.min.css">
						<link rel="stylesheet" href="../Proyecto-Desarrollo-9/_assets/css/themes/default/jquery.mobile-1.4.5.min.css">
						<link rel="stylesheet" href="../Proyecto-Desarrollo-9/_assets/css/jqm-demos.css">
						<link rel="shortcut icon" href="../Proyecto-Desarrollo-9/_assets/favicon.ico">
						<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
						<script src="../Proyecto-Desarrollo-9/_assets/js/jquery.js"></script>
						<script src="../Proyecto-Desarrollo-9/_assets/js/index.js"></script>
						<script src="../Proyecto-Desarrollo-9/_assets/js/jquery.mobile-1.4.5.min.js"></script>
					<title>Page Title</title>
					</head>
					<body>


					<section id="pagina1" data-role="page">
						<!-- /header -->
						<header data-role="header">
							<h1>Encabezado Pagina 1</h1>
							-------

						</header><!-- /header -->
						<article role="main" class="ui-content">
							<p>Contenido Pagina 1 </p>
						<script language="javascript">alert("Se ha registrado con exito");</script>

							<a href="multiples.php" data-rel="multiples.php" data-transition="fade"> Regresar </a></br>

						</article><!-- /content -->
						<footer data-role="footer">
							<h1>Pie de Pagina 1 </h1>
						</footer><!-- /footer -->
					</section><!-- /page -->
			



	echo '<a href="./multiples.php" title="">Regresar a la página anterior</a>';
