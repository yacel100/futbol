<?php

include('../Narracion.php');


$idEncuentro = $_GET['encuentro'];
$idEvento = $_GET['evento'];
$comentario = $_GET['com'];
$tiempo = $_GET['tim'];

$n = new Narracion(null, $idEncuentro, $idEvento, $comentario, $tiempo);

$n->GuardarNarracion();

?>