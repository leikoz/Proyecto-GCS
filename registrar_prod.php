<?php
	include("con_db.php");

	if (isset($_POST['registrarP']))
	{
		if(strlen($_POST['iddP']) >= 1 && //Verifica campos nulos
			strlen($_POST['nameP']) >= 1 &&
			strlen($_POST['lab']) >= 1 &&
			strlen($_POST['idF']) >= 1 &&
			strlen($_POST['precio']) >= 1 && 
			strlen($_POST['descripcion']) >= 1 )
		{
			$id 	= trim($_POST['iddP']);
			$name 	= trim($_POST['nameP']);
			$lab	= trim($_POST['lab']);
			$idf 	= trim($_POST['idF']);
			$precio	= trim($_POST['precio']);
			$desc 	= trim($_POST['descripcion']);

			$consulta = "INSERT INTO producto(id_producto, nombre, laboratorio, id_farmacia, precio, descripcion) VALUES ('$id','$name','$lab','$idf','$precio','$desc')";
			$resultado = mysqli_query($conex,$consulta);

			if($resultado){
				?>
					<h3 class="ok">¡Se ha registro la farmacia con éxito!</h3>
				<?php
				header("Location: index.html");
			}
			else{
				?>
					<h3 class="bad">¡Ups ha ocurrido un error!</h3>
				<?php
			}	

		}
		else{
			?>
				<h3 class="bad">¡Por favor complete los campos!</h3> 
			<?php
		}

	}
?>