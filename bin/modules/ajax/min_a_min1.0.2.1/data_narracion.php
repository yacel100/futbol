<?php
 include '../../../../core.php';
 include Config::$home_bin.'util/ajax_response.php';
 
 class narracion
 {
   public $img_evento;
   public $descripcion;
   public $comentario;
   public $tiempo;
   
   public $code;
   
   public function __construct()
   {
    $db = App::$base;
 
 $id_encuentro = $_GET['id'];
 // $id =1;
 
 $sql = "SELECT  evento.imagen,evento.descripcion,comentario,tiempo FROM  narracion,evento WHERE id_evento=cod_evento and cod_encuentro=$id_encuentro ";
 $rs = $db->dosql($sql);  // ejecutar el SQL
 
 $this->code = 0;
 while (!$rs->EOF) // mientras no llegue al final 
 {
	$this->img_evento = $rs->fields['imagen'];
	$this->descripcion = $rs->fields['descripcion'];
	$this->comentario = $rs->fields['comentario'];
	$this->tiempo = $rs->fields['tiempo'];
	$this->code = 1;
	$rs->MoveNext();
 }
}
}	


  $n = new narracion();
  $r = new Result($n, $n->code);
  echo $r->getJSON();

?>
