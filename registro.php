<?php

	$nombre=$_POST['nombre'];
	$cedula=$_POST['cedula'];
	$edad=$_POST['edad'];
	$sexo=$_POST['sexo'];
	$email= $_POST['email'];




	require("conect.php");



				mysql_query("INSERT INTO Expedientes VALUES('','$nombre','$cedula','$edad','$sexo','$email')");

					echo ' <script language="javascript">alert("Se ha registrado con exito");</script> ';
					mysql_close($link);

	echo '<a href="./DatosG.html" title="">Regresar a la página anterior</a>';

?>
