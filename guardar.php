<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A1U1 Práctica01</title>
	<!--Incluir bulma.min.css-->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
	<section class="hero is-primary">
		<div class="hero-body">
			<p class="title">Datos del entrevistado</p>
		</div>
	</section>
	<section class="section is-medium columns">
		<div class="column"></div>
		<div class="column is-two-fifths">
			<?php

				$nombre = $_POST['nombre'];
				$ap_paterno = $_POST['ap_paterno'];
				$ap_materno = $_POST['ap_materno'];
				$cargo = $_POST['cargo'];
				$rfc = $_POST['rfc'];
				$curp = $_POST['curp'];
				$domicilio = $_POST['domicilio'];
				$telefono = $_POST['telefono'];
				$correo = $_POST['correo'];
				$sexo = $_POST['sexo'];
				$fecha_nacimiento = $_POST['fecha_nacimiento'];
				$estado_civil = $_POST['estado_civil'];
				$escolaridad = $_POST['escolaridad'];
				$referencia = $_POST['referencia'];

				echo "<h1 class='is subtitle'>";
				echo "Datos guardados correctamente" . "<br>";
				echo "Nombre: " . $nombre . "<br>";
				echo "Apellido paterno: " . $ap_paterno . "<br>";
				echo "Apellido materno: " . $ap_materno . "<br>";
				echo "Cargo al que aspira: " . $cargo . "<br>";
				echo "RFC: " . $rfc . "<br>";
				echo "Curp: " . $curp . "<br>";
				echo "Domicilio: " . $domicilio . "<br>";
				echo "Teléfono: " . $telefono . "<br>";
				echo "Correo: " . $correo . "<br>";
				echo "Sexo: " . $sexo . "<br>";
				echo "Fecha de nacimiento: " . $fecha_nacimiento . "<br>";
				echo "Estado civil: " . $estado_civil . "<br>";
				echo "Escolaridad: " . $escolaridad . "<br>";
				echo "Referencia: " . $referencia . "<br>";
				echo "</h1>";
			?>

		</div>
		<div class="column"></div>
	</section>
</body>
</html>

