<?php
	include("con_db.php");

	if (isset($_POST['registrarF']))
	{
		if(strlen($_POST['iddF']) >= 1 && //Verifica campos nulos
			strlen($_POST['nameF']) >= 1 &&
			strlen($_POST['telF']) >= 1 &&
			strlen($_POST['dirF']) >= 1)
		{
			$id = trim($_POST['iddF']);
			$name 	= trim($_POST['nameF']);
			$tel	= trim($_POST['telF']);
			$dir 	= trim($_POST['dirF']);			

			$consulta = "INSERT INTO farmacia(id_farma, nombre, tel, direccion) VALUES ('$id','$name','$tel','$dir')";
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