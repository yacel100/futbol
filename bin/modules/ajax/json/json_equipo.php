<?php

$id = $_GET['id_equipo'];

include("../Equipo.php");

$e = new Equipo();
echo $e->MostrarEquipo($id);

?>