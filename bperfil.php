<?php

	$inc = include("con_db.php");

	session_start();

	$cc = $_SESSION['variable'];

	$resultado = $conex->query("SELECT * FROM persona WHERE cc = '$cc'") or die("Error: {$conex->error}\n");

	if ($resultado) {
		
		$row = $resultado->fetch_array();

		$nombre = $row['nombre'];
		$email = $row['direccion'];
	}

	?>
		<div margin-top= "100px">
			<h2><?php echo $nombre;?></h2>
			<h2><?php echo $email; ?></h2>
		</div>

	<?php

?>