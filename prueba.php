<?php
error_reporting(0);
$gestor = set_error_handler(array('clsErrores','gestorErrores'));

require ('clsErrores.php');
$errores = new clsErrores();

echo $x;
?>