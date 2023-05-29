<?php
/** Aplicacion calculadora completa con varias funciones como sumar, restar, multiplicar o division
* @author IES Cristobal Monroy
* @version 2.0
* @category Matematicas
*/

/**
*@param $num1
*@param $num2
*@return int suma de los dos numeros
*@version 1.0
*/
class Calculadora {
  
  public static function sumar($num1, $num2) {
    return $num1 + $num2;
  }

/*
*@param $num1
*@param $num2
*@return int resta de los dos numeros
*@version 1.0
*/

  public static function restar($num1, $num2) {
    return $num1 - $num2;
  }

/*
*@param $num1
*@param $num2
*@return int multiplicafion de los dos numeros
*@version 1.0
*/

  public static function multiplicar($num1, $num2) {
    return $num1 * $num2;
  }

/*
*@param $num1
*@param $num2
*@return int division de los dos numeros
*@return String devuelve un mensaje de error si la variable $num2 es igual a 0
*@version 1.0
*/
  public static function dividir($num1, $num2) {
    if ($num2 == 0) {
      return "Error: No se puede dividir entre cero.";
    } else {
      return $num1 / $num2;
    }
  }
  
}

?>
