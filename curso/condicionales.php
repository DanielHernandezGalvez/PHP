<?php
/*
== igualdad
!= diferencia 
% modulo igual que en javascript
*/
$autenticado = "puede pasar";

if ($autenticado == "puede pasar") {
    echo "<h1>puedes pasar</h1>";
} else {
    echo "<h1> no puedes pasar</h1>";
};
/**
 * ||, OR, xor &&
 */
$edad = 16;

if ($edad >= 18) {
    echo "bienvenido";
} else {
    echo "No eres mayor de edad";
}

$mes = "diciembre";

if ($mes == "diciembre") {
    echo "feliz diciembre";
} else if ($mes == "enero") {
    echo 'feliz año nuevo';
} else {
    echo "el mes no tiene celebración";
}

# switch

switch ($mes) {
    case 'diciembre';
        echo "feliz navidad";

    case "enero";
        echo "feliz año nuevo";

        break;
    default:
        echo "default";
}

# operador ternario
$tiempo = "nublado";
$tiempo = (isset($tiempo)) ? $tiempo : "El usuario no estableció su edad" ;
echo "edad $tiempo";
isset($tiempo); // saber si una variable tiene un valor o no
