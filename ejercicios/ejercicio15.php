<?php

/**
 * Crea un script PHP que tenga tres variables, una de tipo array, 
 * otra tipo string y otra boleana y que imprima un mensaje segpun 
 * el tipo de variable que sea
 */

$matriz = array("hola", true, 4);
$verdadero = true;
$texto = "texto";

if (is_array($matriz)) {
    echo "El array es un array <br>";
}
if (is_bool($verdadero)) {
    echo "el bool es bool <br>";
}
if (is_string($texto)) {
    echo "texto es un string";
}
