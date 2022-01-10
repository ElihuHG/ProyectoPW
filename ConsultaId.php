<?php
 require_once("autoload.php");
 $consultaid = new Acciones();
 $resultado = $consultaid -> ConsultaId(1);
print_r("<pre>");
print_r($resultado);
print_r("</pre>");
?>