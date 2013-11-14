<?php
 include '../../../core.php';
 
 $db = App::$base;
 $sql = 'select equipo.nombre,equipo.id_equipo from equipo  order by nombre';
 $rs = $db->dosql($sql);  // ejecutar el SQL
 $h="hola";
// echo"<form id = 'buscar'>";
 echo "<select >";
 while (!$rs->EOF) // mientras no llegue al final 
 {   echo "<option name='equipo' value='".$rs->fields['id_equipo']."'>".$rs->fields['nombre']."</option>";
     //.' '.$rs->fields['estrellas'].'<BR>';   mostrar campos   echo $rs->fields[0].' '.$rs->fields[1].'<BR>';  
	  // avanzar
		$rs->MoveNext();
		}
/*echo "</select>";
echo "<button type='submit'> Buscar</button>";
echo "</form>";*/
?>
  
