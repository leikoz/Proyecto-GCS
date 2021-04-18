<?php
	include("con_db.php");	

	if (isset($_POST['registrar']))
	{
		if(strlen($_POST['nombre']) >= 1 && //Verifica campos nulos
			strlen($_POST['cc']) >= 1 &&
			strlen($_POST['Contraseña']) >= 1 &&
			strlen($_POST['RContraseña']) >= 1 &&
			strlen($_POST['Email']) >= 1 &&
			strlen($_POST['REmail']) >= 1 &&
			strlen($_POST['cel']) >= 1)
		{

			if(strlen($_POST['Contraseña']) === strlen($_POST['RContraseña'])){ //contraseñas coinciden

				if(strlen($_POST['Email']) === strlen($_POST['REmail'])){ //correos Coinciden

					$nombre = trim($_POST['nombre']);
					$cc 	= trim($_POST['cc']);
					$passw	= trim($_POST['Contraseña']);
					$email 	= trim($_POST['Email']);
					$cel	= trim($_POST['cel']);

					$consulta = "INSERT INTO persona(cc, nombre, direccion, cel, contra) VALUES ('$cc','$nombre','$email','$cel','$passw')";
					$resultado = mysqli_query($conex,$consulta);

					if($resultado){
						?>
							<h3 class="ok">¡Te has registrado correctamente!</h3>

						<?php
						header("Location: home.php");
					}
					else{
						?>
							<h3 class="bad">¡Ups ha ocurrido un error!</h3>
						<?php
					}
				}
				else
				{
					?>
						<h3 class="bad">¡Los correos no coinciden!</h3> 
					<?php
				}
			}
			else
			{
				?>
					<h3 class="bad">¡Las contraseñas no coinciden!</h3> 
				<?php
			}
		}else
		{
			?>
				<h3 class="bad">¡Por favor complete los campos!</h3> 
			<?php
		}
	}
?>