<?php
 include '../../../../core.php';
 include Config::$home_bin.'util/ajax_response.php';
 
  
 $id_encuentro = $_GET['id'];
 $db = App::$base;
 //$id_encuentro =1;
 
 $sql = "SELECT  evento.imagen,evento.descripcion,comentario,tiempo FROM  narracion,evento WHERE id_evento=cod_evento and cod_encuentro=$id_encuentro order  by tiempo desc ";
 $rs = $db->dosql($sql);  // ejecutar el SQL
 
 
 while (!$rs->EOF) // mientras no llegue al final 
 {
    $narracion[] = array('imgevento' => utf8_decode($rs->fields['imagen']), 'descripcion' => utf8_decode($rs->fields['descripcion']),'comentario'=>$rs->fields['comentario'],'tiempo'=>$rs->fields['tiempo']);
	$rs->MoveNext();
	
 }
 //$narracion[]=array('status'=>'1');

    $r=json_encode($narracion);
 //$s=json_encode($status);
  echo $r;
  //echo$s;
  

?>

