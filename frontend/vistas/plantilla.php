<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="title" content="Tienda Virtual">


	<meta name="descripcion" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit nulla veritatis aliquid dolor, impedit magnam.">
	
	<meta name="keyword" content="Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit. Reprehenderit, nulla veritatis, aliquid dolor, impedit magnam.">

	<title>Tienda Virtual</title>
	<?php

		$icono = ControladorPlantilla::ctrEstiloPlantilla();

		echo '<link rel="icon" href="http://localhost/backend/'.$icono["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		
		//$url = Ruta::ctrRuta();

	?>
	<link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
	
	<link rel="stylesheet" href="vistas/css/plugins/font-awesome.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
	
	<link rel="stylesheet" href="vistas/css/plantilla.css">

	 <link rel="stylesheet" href="vistas/css/cabezote.css"> 
					
	
	<script src="vistas/js/plugins/jquery.min.js"></script>
	
	<script src="vistas/js/plugins/bootstrap.min.js"></script>
	
	

</head>
<body>

<?php 
/*=============================================
=Cabezote           =
=============================================*/
include "modulos/cabezote.php";


 ?>
	
<script src="vistas/js/cabezote.js"></script>
	
</body>
</html>