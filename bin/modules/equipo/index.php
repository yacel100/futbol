<html>
 <header>
 <?php 
    include '../../../core.php';
   ?>
 
 <script type="text/javascript" src="../../../lib/jquery/jquery-1.7.2.min.js"></script>
 <script type="text/javascript" src="peticion_decripcion.js"></script>
 <link rel="stylesheet" type="text/css" href="style.css">
 </header>
<body>

<?php
 include '../../util/ajax_response.php';
 ?>
<?php
 include '../../../core.php';
 
 $db = App::$base;
 $sql = 'select equipo.nombre,equipo.id_equipo from equipo  order by nombre';
 $rs = $db->dosql($sql);  // ejecutar el SQL
 echo"<div id='combo'>";
 echo "<select id='miselect'>";
 echo"<option >Selecciona un equipo</option>";
 while (!$rs->EOF) // mientras no llegue al final 
 {   echo "<option name='equipo' value='".$rs->fields['id_equipo']."'>".$rs->fields['nombre']."</option>";
     //.' '.$rs->fields['estrellas'].'<BR>';   mostrar campos   echo $rs->fields[0].' '.$rs->fields[1].'<BR>';  
	  // avanzar
		$rs->MoveNext();
		}
echo "</select>";
 echo"</div>";
/*echo "<button type='submit'> Buscar</button>";
echo "</form>";*/
?>
<div id="caja">
<div id="equipo" >
<h1></h1>
</div>    

<div id="estrellas">
</div>
<div id="imagen">
</div>
<div id="result">
</div>
</div>  

</body>
</html>