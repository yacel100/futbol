<?
 include '../../../core.php';
 include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php';

 function nuevo_examen($descripcion)
 {
  $examen = atable::Make('examen');
  $examen->descripcion = $descripcion;
  $examen->save();
 }

 nuevo_examen($_GET['txtExamen']);
?>
