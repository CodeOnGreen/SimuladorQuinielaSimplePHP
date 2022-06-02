<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simulador quiniela</title>
</head>
<body>

	<?php
	$pronosticos = ['1','X','2'];
	$partidos = array();
	for ($p=0;$p<10;$p++) {
		$resultado = rand(0,2);
		$partidos[] = $pronosticos[$resultado];
	}
	var_dump($partidos);

	//Creamos un array con la combinación ganadora de la quiniela:
	$combinacion_ganadora = ['1','1','2','X','1','X','1','2','1','X'];

	//Comprobar el número de aciertos:
	$aciertos = 0;
	for ($p=0;$p<10;$p++) {
		if ($partidos[$p] == $combinacion_ganadora[$p]) {
			$aciertos++;
		}
	}

	?>

	<table width="300px" border="1">
		<tr>
			<td>Partido</td>
			<td>Pronóstico</td>
			<td>Ganadora</td>
			<td>Aciertos</td>
		</tr>
		<?php for ($p=0;$p<10;$p++) { ?>
			<tr>
				<td>Equipo Casa - Equipo Fuera</td>
				<td><?php echo $partidos[$p] ?></td>
				<td><?php echo $combinacion_ganadora[$p] ?></td>
				<?php if ($partidos[$p] == $combinacion_ganadora[$p]) { ?>
					<td bgcolor="Green">Acierto</td>
				<?php } else { ?>
					<td>Fallo</td>
				<?php } ?>
			</tr>
		<?php } ?>
	</table>

	<p>El número de aciertos es: <?php echo $aciertos ?></p>

</body>
</html>