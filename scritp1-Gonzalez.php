<?php
/**
* Aplicacion calculadora simple
* @author IES Cristobal Monroy
* @version 1.0
* @acces Public
*/


/**
* parametros de entrada
* @param int $num1 numero 1
* @param int $num2 numero 2
* 
* @return int suma de los dos numeros
*/

function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
* parametros de entrada
* @param int $num1 numero 1
* @param int $num2 numero 2
* 
* @return int resta de los dos numeros
*/


function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
* parametros de entrada
* @param int $num1 numero 1
* @param int $num2 numero 2
* 
* @return int multiplicacion de los dos numeros
*/

function multiplicar($num1, $num2) {
  return $num1 * $num2;
}

/**
* parametros de entrada
* @param int $num1 numero 1
* @param int $num2 numero 2
* @return int division de los dos numeros y String mensaje de error cuando la @var $num2 sea igual a 0
*/

function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}

?>
