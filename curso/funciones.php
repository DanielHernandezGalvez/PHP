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

# Área de un triángulo
function calcular_area_triangulo($base, $altura) {
    $resultado = ($base * $altura) / 2;
    return $resultado;
}

echo calcular_area_triangulo(10, 10);

?>