<?
 include '../../core.php';
 
 $db = App::$base;
 $sql = 'select id_examen, descripcion from pregunta';
 $rs = $db->dosql($sql);  // ejecutar el SQL
 
 while (!$rs->EOF) // mientras no llegue al final 
 {
	echo $rs->fields['id_examen'].' '.$rs->fields['descripcion'].'<BR>';  // mostrar campos   echo $rs->fields[0].' '.$rs->fields[1].'<BR>';  
	$rs->MoveNext();  // avanzar
 }
?>
