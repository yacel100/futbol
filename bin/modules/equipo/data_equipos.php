<?php
 include '../../../core.php';
 include Config::$home_bin.'util/ajax_response.php';
 
 class Equipo
 {
   public $equipo;
   public $estrellas;
   public $code;
   
   public function __construct()
   {
    $db = App::$base;
 
 $id = $_GET['id'];
 // $id =1;
 
 $sql = "SELECT  equipo.nombre, equipo.estrellas FROM  equipo WHERE equipo.id_equipo = $id ORDER BY  equipo.nombre";
 $rs = $db->dosql($sql);  // ejecutar el SQL
 
 $this->code = 0;
 if (!$rs->EOF) // mientras no llegue al final 
 {
	$this->equipo = $rs->fields['nombre'];
	$this->estrellas = $rs->fields['estrellas'];
	$this->code = 1;
 }
}
}	


  $eq = new Equipo();
  $r = new Result($eq, $eq->code);
  echo $r->getJSON();

?>
