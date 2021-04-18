<?php

	session_start();

	include("con_db.php");

	if(!$conex){
		die("no hay conexión: ".mysqli_connect_error());
	}

	

	if(strlen($_POST['id']) >= 1 && //Verifica campos nulos
			strlen($_POST['contraseña']) >= 1 ){

		$cc = $_POST['id'];
		$pass 	= $_POST['contraseña'];
		
		$resultado = mysqli_query($conex,"SELECT * FROM persona WHERE cc = '$cc' AND contra = '$pass' ");
		
		$filas = mysqli_num_rows($resultado);

		if($filas)
		{		

			$_SESSION['variable']=$cc;	
			header("Location: home.php");
		}
		else{		

			echo '<script type="text/javascript">alert("Datos Incorrectos");
			window.location.href="login.html";
			</script>';
		}	
	}
	else{
		echo '<script type="text/javascript">alert("Complete los campos");
			window.location.href="login.html";
			</script>';
	}


?>	