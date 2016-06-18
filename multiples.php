<!DOCTYPE html>
<html>
<head>
<!--	<link rel="stylesheet" href="../Proyecto-Desarrollo-9/_assets/_assets/css/jquery.mobile-1.4.5.min.css">-->
	<link rel="stylesheet" href="../Proyecto-Desarrollo-9/_assets/css/themes/default/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="../Proyecto-Desarrollo-9/_assets/_assets/css/jqm-demos.css">
	<link rel="shortcut icon" href="../Proyecto-Desarrollo-9/_assets/favicon.ico">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="../Proyecto-Desarrollo-9/_assets/js/jquery.js"></script>
	<script src="../Proyecto-Desarrollo-9/_assets/_assets/js/index.js"></script>
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
		<a href="#pagina2" data-rel="dialog" data-transition="flow" onsubmit="this.reset()" > Pagina2 </a></br>
		<a href="#pagina3" data-rel="dialog" data-transition="turn"> Pagina3 </a>
	</article><!-- /content -->
	<footer data-role="footer">
		<h1>Pie de Pagina 1 </h1>
	</footer><!-- /footer -->
</section><!-- /page -->

<section id="pagina2" data-role="page">
	<header data-role="header">
		<h1>Datos Generales

			<form action="registro.php" method="post">
				<br />
				<br />
		Nombre:<input type="nombre" maxlength="25" size="25" name="nombre" />
		<br />
		<br />
		Cedula:<input type="cedula" maxlength="25" size="25" name="cedula" />
		<br />
		<br />
		Edad:<input type="edad" maxlength="25" size="25" name="edad" />
		<br />
		<br>
		Sexo
		<br />
		<br>
		<input type="radio" name="sexo" value="Hombre" checked> Hombre
		<br/>
		<br />
		<input type="radio" name="sexo" value="Mujer"> Mujer
		<br />
		<br/>
		Email:
		<input type="email" maxlength="35" size="25" name="email" />
		<br />
		<br>
		<input  type="submit" value="Registrar"data-transition="flip" onsubmit="this.reset()"/>
		<input type="reset" value="Borrar" data-transition="pop"</a> </form></h1>
	</header><!-- /header -->
	<article role="main" class="ui-content">
		<p>Contenido 2</p>
		<br/>
		<a href="#pagina1"> Regresar</a>
	</article><!-- /content -->
	<footer data-role="footer">
		<h1>Pie de Pagina 2</h1>
	</footer><!-- /footer -->
</section><!-- /page -->

<section id="pagina3" data-role="page">
	<header data-role="header">
		<h1>Pagina 3</h1>
	</header><!-- /header -->
	<article role="main" class="ui-content">
		<p>Contenido Pagina 3</p>
		<br/>
		<a href="#pagina1"> Regresar</a>
	</article><!-- /content -->
	<footer data-role="footer">
		<h1>Footer 3</h1>
	</footer><!-- /footer -->
</section><!-- /page -->
</body>
</html>
