<?php
include_once 'base.php';

Class BaseDemo
{
 public static function get()
 {
  $base = new base();
  //$base->debug_on(true);
  $base->setup(Config::$host, Config::$user, Config::$pass, Config::$base);
  $base->record_style('fields');
  return $base;
 }
} 

?>
