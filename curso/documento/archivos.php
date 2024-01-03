<?php

// $resultado = file_exists("documento.txt");
// var_dump($resultado);

// echo file_get_contents("documento.txt");

// echo "<br />";

file_put_contents("documento.txt", "Hola mundo \n ", FILE_APPEND);

file_put_contents("documento.txt", "");
for ($i=1; $i <= 10; $i++) { 
    file_put_contents("documento.txt", "$i \n", FILE_APPEND);
}

$archivo = file("documento.txt"); 

echo "<pre>";
print_r($archivo);
echo "</pre>";

echo $archivo[5];

?>