<?php
 include '../../../core.php';
 include Config::$home_bin.'util/ajax_response.php';
 $r = new Result('Este es un ejemplo');
 echo $r->getJSON();
?>