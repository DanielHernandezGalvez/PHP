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

$kramer = array(
    "tel" => 3319923923,
    "edad" => 26, "apellido" =>
    "Mr Crowley",
    "País" => "México"
);

echo "<br />";
echo "<br />";
$kramer["tel"] = 2524;
echo $kramer["tel"] . "<br />";
echo $kramer["edad"] . "<br />";
echo $kramer["apellido"] . "<br />";
echo $kramer["País"] . "<br />";

# Array multidimensional

$amigos = array(
    array("nombre" => "dinz", 20, array("sangre" => "o+")),
    array("alexis", 26),
    array("Tocayo", 50),
    array("Sonia", 24)
);

echo $amigos[0][1]["sangre"] . "<br />";
echo $amigos[0]["nombre"] . "<br />";
echo $amigos[2][0] . "<br />";

echo count($amigos);

$ultimo = count($amigos) - 1;
echo "<br />";
$amigos[$ultimo];

echo "<br />";

$meses = array(
    "enero",
    'febrero',
    'marzo',
    'abril',
    'mayo',
    'junio',
    'julio',
    'agosto',
    'septiembre',
    'octubre',
    'noviembre',
    'diciembre'
)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>

<body>

    <h1>Meses del año</h1>
    <ul>
        <?php
        foreach ($meses as $mes) {
            echo "<li>" . $mes . "</li>";
        }
        ?>
    </ul>
</body>

</html>