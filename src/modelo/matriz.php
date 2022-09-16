<?php

class Matriz
{
	function viewRowMatriz($id_plan)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
			id_plan,
			notas,
			largoplazo,
			medianoplazo,
			cortoplazo
			FROM matriz
			WHERE id_plan = :id_plan";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":id_plan", $id_plan);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
		}
		return $arreglo;
	}
	
	function modificartMatriz()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$id_plan = 1;
		$notas = $_POST['notas'];
		$largoplazo = $_POST['largoplazo'];
		$medianoplazo = $_POST['medianoplazo'];
		$cortoplazo = $_POST['cortoplazo'];
		$sql = "UPDATE matriz SET 
			notas=:notas,
			largoplazo=:largoplazo,
			medianoplazo=:medianoplazo,
			cortoplazo=:cortoplazo
			WHERE id_plan = :id_plan;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_plan", $id_plan);
		$reg->bindParam(":notas", $notas);
		$reg->bindParam(":largoplazo", $largoplazo);
		$reg->bindParam(":medianoplazo", $medianoplazo);
		$reg->bindParam(":cortoplazo", $cortoplazo);
		$reg->execute();
	}
}
