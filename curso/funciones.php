<?php
$nombre = "Daniel";
function saludo($nombre) {
    echo "hola " . $nombre;
};

saludo($nombre);

function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
    // echo $resultado;
}
echo "<br/>";
$resultadi = sumar(3,56);
echo $resultadi;

?>