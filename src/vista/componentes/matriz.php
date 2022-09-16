<?php 
function verMatriz($arreglo)
{
?>
	<html>
	<head>
	<link rel="stylesheet" href="../librerias/css/matriz.css">
	<script src="../librerias/js/matriz.js"></script>
	</head>
	</body>
	<h1>Matriz de Eisenhower</h1>
	<form action="./index.php" method="post">
		<table>
		<tr>
			<td class="contenido" style="background-color:#9c27b0;">
				<h2>
					no urgente pero importante
				</h2>
				<textarea name="notas" id="notas"><?php echo $arreglo[0]['notas']; ?></textarea>
			<td>
			<td class="contenido" style="background-color:#13a930;">
				<h2>
					urgente e importante
				</h2>
				<textarea name="largoplazo" id="largoplazo"><?php echo $arreglo[0]['largoplazo']; ?></textarea>
			<td>
		</tr>
		</table>
		<table>
		<tr>
			<td class="contenido" style="background-color:#f44336;">
				<h2>no urgente y no importante</h2>
				<textarea name="medianoplazo" id="medianoplazo"><?php echo $arreglo[0]['medianoplazo']; ?></textarea>
			<td>
			<td class="contenido" style="background-color:#f79104;">
				<h2>
					urgente pero no tan importante
				</h2>
				<textarea name="cortoplazo" id="cortoplazo"><?php echo $arreglo[0]['cortoplazo']; ?></textarea>
			<td>
		</tr>
		</table>
		<input type='submit' id="submit" value='enviar'>
	</form>
	</body>
	</html>
<?php
}
