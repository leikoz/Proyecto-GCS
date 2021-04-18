<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/main.css">	
	<title>Registro de Farmacias</title>
</head>
<body>

	<form method="post" class="form-Registro_Farmacia">

		<h3>Registro de Farmacias</h3>

		<a class= "btn_atras" href="index.html"><</a>

		<input class="controls" type="text" name = "iddF" id = "iddF" placeholder= "Ingrese el Id">
		<input class="controls" type="text" name = "nameF" id = "nameF" placeholder="Nombre Farmacia">
		<input class="controls" type="text" name = "telF" id = "telF" placeholder="Tel Farmacia">
		<input class="controls" type="text" name = "dirF" id = "dirF" placeholder="Dir. Farmacia">
		<input class ="botons" type="submit" name = "registrarF" value="Registrar Farmacia"/>

	</form>
	
	<?php
		include("registrar_farm.php")
	?>

</body>
</html>