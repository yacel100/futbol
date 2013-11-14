<?
include '../../../core.php';

function cargar_equipos(){
	$db = App::$base;
	$sql = 'select id_equipo, nombre from equipo order by nombre';
	$rs = $db->dosql($sql);
	
	$cad = "<option value=\"\"></option>";
	
	while (!$rs->EOF)
	{
		$cad .= "<option value='".$rs->fields['id_equipo']."'>".$rs->fields['nombre']."</option>"; 
		$rs->MoveNext();
	}
	
	return $cad;
}
?>




