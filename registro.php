<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/main.css">	

	<title>Sign Up</title>
</head>
<body>
	<!---------- || Formulario Registro || ---------->

	<form method="post" class="form-sign-up"> 

        <a class= "btn_atras" href="index.html"><</a>

		<div class="divlogoReg" align="center">
			<img src="img/logo.PNG " width="250" height="250" align="center">
		</div>

		<input class="controls" type="text" name = "nombre" id = "Nombre" placeholder="Ingrese su nombre">
		<input class="controls" type="text" name = "cc" id = "cc" placeholder="Ingrese su cedula">
		<input class="controls" type="password" name = "Contraseña" id = "password" placeholder="Ingrese su contraseña">
		<input class="controls" type="password" name = "RContraseña" id = "rpassword" placeholder="Confirme su contraseña">
		<input class="controls" type="email" name = "Email" id = "Email" placeholder="Ingrese su correo">
		<input class="controls" type="email" name = "REmail" id = "REmail" placeholder="Confirme su correo">
		<input class="controls" type="number" name = "cel" id = "cel" placeholder="Número celular">
		<input class ="botons" type="submit" name = "registrar" value="Registrarse"/>

	</form>
	<?php
	include("registrar.php")
	?>
</body>
</html>