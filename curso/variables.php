<?php
$fibonacci = 0.332342343;

# conocer tipo de dato 

// echo gettype($fibonacci);

# constantes
define("PI", 3.1416);
// echo PI;

$semana = array("lunes", "martes", "miercoles", "jueves", "viernes");
$semana[10] = "Dinz kramer";

# Array asociativo 

$kramer = array("tel" => 3319923923, "edad" => 26, "apellido" =>" Mr Crowley", "País" => "México");

echo "<br />";
echo "<br />";
$kramer["tel"] = 2524;
echo $kramer["tel"] . "<br />";
echo $kramer["edad"] . "<br />";
echo $kramer["apellido"] . "<br />";
echo $kramer["País"] . "<br />";