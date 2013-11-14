<?
 include '../../core.php';
 include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php';

 function ver($id)
 {
  $muni = atable::Make('pregunta');
  $muni->load("id_pregunta = $id");
  echo "{$muni->id_pregunta} - {$muni->descripcion}";
 }

 ver(1);
?>
