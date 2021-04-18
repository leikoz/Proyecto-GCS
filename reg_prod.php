<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/main.css">	
	<title>Registro de Productos</title>
</head>
<body>

	<!----------------- || Registro Productos || ----------------->

	<form method="post" class="form-reg_prod">

		<a class= "btn_atras" href="index.html"><</a>

		
		<input class="controls" type="text" name = "iddP" id = "iddP" placeholder= "Ingrese el Id">
		<input class="controls" type="text" name = "nameP" id = "nameP" placeholder="Nombre Producto">
		<input class="controls" type="text" name = "lab" id = "lab" placeholder="Nombre laboratorio">
		<input class="controls" type="text" name = "idF" id = "idF" placeholder="Id Farmacia">
		<input class="controls" type="number" name = "precio" id = "precio" placeholder="Precio">
		<input class="controls" type="text" name = "descripcion" id = "descripcion" placeholder="Ingrese la descripcion">
		<input class ="botons" type="submit" name = "registrarP" value="Registrar Farmacia"/>


	</form>
	<?php
	include("registrar_prod.php")
	?>


</body>
</html>