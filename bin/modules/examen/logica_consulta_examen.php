<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php 
 $examen = $_POST['txtExamen'];
  include '../../../core.php';
 
 $db = App::$base;
 $sql = "SELECT 
  examen.id_examen,
  examen.descripcion
  FROM examen
  WHERE
  descripcion like '%$examen%' 
  ";
  
  
 $rs = $db->dosql($sql);  // ejecutar el SQL
 $res = '<table border=1>';
 while (!$rs->EOF) // mientras no llegue al final 
 {
	$res .=  '<tr><td>'.$rs->fields['descripcion'].'</td></tr>';
	$rs->MoveNext();  // avanzar
 }
 $res .= '</table>';
 
 echo $res;
?>
</body>
</html>
