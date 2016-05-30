<?php

	$nombre=$_POST['nombre'];
	$cedula=$_POST['cedula'];
	$edad=$_POST['edad'];
	$email= $_POST['email'];




	require("conect.php");



				mysql_query("INSERT INTO Expedientes VALUES('','$nombre','$cedula','$edad','$email')");

					echo ' <script language="javascript">alert("Se ha registrado con exito");</script> ';
					mysql_close($link);






	echo $nombre."<br>";
	echo $cedula."<br>";
	echo $edad."<br>";
	echo $email."<br>";


?>
