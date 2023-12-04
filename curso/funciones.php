<?php
$nombre = "Daniel";
function saludo($nombre) {
    echo "hola " . $nombre;
};

saludo($nombre);

function sumar($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    echo $resultado;
}
echo "<br/>";
sumar(3,56);

?>