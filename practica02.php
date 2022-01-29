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
			<p class="title">
			Datos del entrevistado
			</p>
		</div>
	</section>
	<section class="section is-medium columns">
		<div class="column is-two-fifths"></div>
			<form action="guardar.php" method="post">
				<div>
					<label>Nombre(s)</label>
					<input class="input is-primary" type="text" name="nombre" required>
				</div>
				<div>
					<label>Apellido Paterno</label>
					<input class="input is-primary" type="text" name="ap_paterno" required>
				</div>
				<div>
					<label>Apellido Materno</label>
					<input class="input is-primary" type="text" name="ap_materno" required>
				</div>
				<div>
					<label>Cargo al que aspira</label>
					<input class="input is-primary" type="text" name="cargo" required>
				</div>
				<div>
					<label>RFC</label>
					<input class="input is-primary" type="string" name="rfc" required>
				</div>
				<div>
					<label>Curp</label>
					<input class="input is-primary" type="string" name="curp" required>
				</div>
				<div>
					<label>Domicilio</label>
					<input class="input is-primary" type="text" name="domicilio" required>
				</div>
				<div>
					<label>Telefono</label>
					<input class="input is-primary" type="number" name="telefono" required>
				</div>
				<div>
					<label>Correo</label>
					<input class="input is-primary" type="string" name="correo" required>
				</div>
				<div>
					<label>Sexo</label>
					<input class="input is-primary" type="text" name="sexo" required>
				</div>
				<div>
					<label>Fecha de nacimiento</label>
					<input class="input is-primary" type="string" name="fecha_nacimiento" required>
				</div>
				<div>
					<label>Estado civil</label>
					<input class="input is-primary" type="text" name="estado_civil" required>
				</div>
				<div>
					<label>Escolaridad</label>
					<input class="input is-primary" type="input is-primary" name="escolaridad" required>
				</div>
				<div>
					<label>Referencia familiar</label>
					<input class="input is-primary" type="text" name="referencia" required>
				</div>
				<div>
					<input class="button is-primary" type="submit" name="Guardar">
				</div>
			</form>
	</section>
</body>
</html>