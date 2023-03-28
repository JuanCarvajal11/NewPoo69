
<?php

require_once("poo.php");

$palabra = "Parangaricutirimícuaro";
$valor1 = 4.5;
$valor2 = 46743;

$variables = new Variables();
$variables->guardaVariable($palabra, $valor1, $valor2);
$variables->tipoVariable();
// $variables->determinarA();
// $variables->mostrarnumero3();
// $variables->mostrar_mensajes();
