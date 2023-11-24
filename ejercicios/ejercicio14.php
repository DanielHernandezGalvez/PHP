<?php

/**
 * Escriber un programa que compruebe si una variable está vacía,
 * rellenarla con texto en minúscuas y mostrarlo convertido a mayusculas
 * en negritas
 */

 $texto = "";

 if(empty($texto)) {
    $texto = strtoupper("Texto de relleno");
    echo "<strong>{$texto}</strong>";
 } else {
  echo "Esta relleno";
 }