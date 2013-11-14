<html>
 <header>
 <?php
 include '../../../../core.php';
?>
 <script type="text/javascript" src="../../../../lib/jquery/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="peticion_narracion.js"></script>
 <link rel="stylesheet" type="text/css" href="style.css">
 <!--<link rel="stylesheet" type="text/css" href="csstyle.css">-->
 </header>
<body>

<?php
 include '../../../util/ajax_response.php';
 ?>
<?php
 include '../../../../core.php';
 
 $db = App::$base;
 $sql = 'SELECT 
  encuentro.id_encuentro,
  equipo.nombre as local,
  equipo1.nombre as visitante
FROM
  encuentro
  INNER JOIN equipo ON (encuentro.id_equipo_local = equipo.id_equipo)
  INNER JOIN equipo equipo1 ON (encuentro.id_equipo_visitante = equipo1.id_equipo)';
 $rs = $db->dosql($sql);  // ejecutar el SQL
 echo"<div id='combo'>";
 echo "<select id='miselect'>";
 echo"<option >Selecciona un partido</option>";
 while (!$rs->EOF) // mientras no llegue al final 
 {   echo "<option name='equipo' value='".$rs->fields['id_encuentro']."'>".$rs->fields['local']." VS ".$rs->fields['visitante']."</option>";
     //.' '.$rs->fields['estrellas'].'<BR>';   mostrar campos   echo $rs->fields[0].' '.$rs->fields[1].'<BR>';  
	  // avanzar
		$rs->MoveNext();
		}
echo "</select>";
 echo"</div>";
/*echo "<button type='submit'> Buscar</button>";
echo "</form>";*/
?>

<div id="carga" >
</div>
<div id="content" >
<table id="presentacion" >

</table>
</div>

</body>
</html>