<!DOCTYPE html>
<html>
<head>
	<title>Fabrica de Gaseosas</title>
</head>
<body>
	<h1>Compra de Gaseosas</h1>

	<form method="post">
		<label for="precioActual">Precio actual de la gaseosa:</label>
		<input type="number" step="0.01" min="0" name="precioActual" required><br><br>
		<label for="cantidad">Cantidad de gaseosas:</label>
		<input type="number" step="1" min="1" name="cantidad" required><br><br>
		<button type="submit">Calcular</button>
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// Datos de entrada
			$precioActual = $_POST['precioActual'];
			$cantidad = $_POST['cantidad'];
			$tasaDescuento = 0.07; // Tasa de descuento

			// Cálculo del nuevo precio de la gaseosa
			$nuevoPrecio = $precioActual * 0.95;

			// Cálculo del importe de la compra
			$importeCompra = $cantidad * $nuevoPrecio;

			// Cálculo del importe del descuento
			$importeDescuento = $importeCompra * $tasaDescuento;

			// Cálculo del importe a pagar
			$importeAPagar = $importeCompra - $importeDescuento;

			// Cálculo del obsequio
			$obsequio = $cantidad * 2;

			// Mostramos los resultados
			echo "<p>Precio actual de la gaseosa: $precioActual pesos</p>";
			echo "<p>Nuevo precio de la gaseosa: $nuevoPrecio pesos</p>";
			echo "<p>Cantidad de gaseosas: $cantidad unidades</p>";
			echo "<p>Importe de la compra: $importeCompra pesos</p>";
			echo "<p>Tasa de descuento: " . ($tasaDescuento * 100) . "%</p>";
			echo "<p>Importe del descuento: $importeDescuento pesos</p>";
			echo "<p>Importe a pagar: $importeAPagar pesos</p>";
			echo "<p>Obsequio: $obsequio caramelos</p>";
		}
	?>
</body>
</html>
