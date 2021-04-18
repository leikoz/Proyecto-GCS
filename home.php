<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/main.css">	

	<title>Pharma Home</title>
</head>
<body>

	<!-------------- || Vista Home || --------------->

	<?php
		include("con_db.php");
	?>

	<form action="" method="get" class="form-main"> 

		<a class= "btn_atras" href="login.html"><</a>

		<a class= "btn_perfil" href="perfil.php">P</a>

		<a class= "btn_perfil" href="carrito.php">C</a>
    	
		<div class="divlogohome" align="center">
			<img src="img/name.PNG " width="250" height="120" align="center">
		</div>

		<br><br><br>
		
		<input class= "controls" type="text" name="busqueda"><br>
		<input class="btn_search" type="submit" name="enviar" value="Buscar">

		<br><br><br>

		<?php
			if(isset($_GET['enviar'])){
				$busqueda = $_GET['busqueda'];

				$consulta = $conex->query("SELECT * FROM producto WHERE nombre LIKE '%$busqueda%'") or die("Error: {$conex->error}\n");

				echo "<table align=center width=80%>";
				echo "<tr>";
				echo "<th>Producto</th>";
				echo "<th>Lab.</th>";
				echo "<th>&nbspPrecio</th>";
				echo "<th>&nbspDescripcion</th>";
				echo "</tr>";

				while($row = $consulta->fetch_array()){
					echo "<tr>";
					echo "<td>".$row['nombre'],"</td>";
					echo "<td>&nbsp".$row['laboratorio'],"</td>";
					echo "<td>&nbsp".$row['precio'],"</td>";					
					echo "<td>".$row['descripcion'],"</td>";
					echo "</tr>";					
				}

				echo "</table>";
			}
		?>
		
		<table >		
		</table>	
	</form>

</body>
</html>