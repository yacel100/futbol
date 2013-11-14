<?php 
 include '../../../core.php';
  include_once Config::$home_bin.Config::$ds.'db'.Config::$ds.'active_table.php';
  
  
 $usuario = $_POST['txtusuario'];
 $clave = $_POST['txtclave'];
 // var_dump(App::$base);

  $user = atable::Make('usuarios');
  $user->load("usuario = '$usuario'");
  if ($clave == $user->clave)
   echo 'usuario valido';
  else
   echo 'usuario o clave incorrecto';
  

?>
