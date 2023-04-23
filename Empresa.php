<!DOCTYPE html>
<html>
<head>
	<title>Empresa</title>
</head>
<body>
	<h1>Sueldo de Vendedor</h1>

	<form method="post">
		<label for="importe">Importe total vendido del mes:</label>
		<input type="number" id="importe" name="importe"><br><br>

		<label for="hijos">Cantidad de hijos en edad escolar:</label>
		<input type="number" id="hijos" name="hijos"><br><br>

		<input type="submit" value="Calcular">
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$importe = $_POST['importe'];
			$hijos = $_POST['hijos'];

			$comision = $importe * 0.075;
			$bonificacion = $hijos * 50;
			$sueldo_bruto = 600 + $comision + $bonificacion;
			$descuento = $sueldo_bruto * 0.11;
			$sueldo_neto = $sueldo_bruto - $descuento;

			echo "<h2>Resultados:</h2>";
			echo "<p>Comisión: S/. " . $comision . "</p>";
			echo "<p>Bonificación: S/. " . $bonificacion . "</p>";
			echo "<p>Sueldo bruto: S/. " . $sueldo_bruto . "</p>";
			echo "<p>Descuento: S/. " . $descuento . "</p>";
			echo "<p>Sueldo neto: S/. " . $sueldo_neto . "</p>";
		}
	?>
</body>
</html>
