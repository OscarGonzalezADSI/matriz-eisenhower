<?php

include_once "../modelo/matriz.php";
include_once "../vista/componentes/matriz.php";

$matriz = new Matriz();
if (isset($_POST['notas'])) {
	$matriz->modificartMatriz();
}
$arreglo = $matriz->viewRowMatriz(1);
verMatriz($arreglo);
