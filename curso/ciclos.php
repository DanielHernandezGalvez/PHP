<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Hola mundo <br/>";
}

echo "<br/>";

for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br/>";
}

echo "<br/>";

$x = 1;
while ($x <= 10) {
    echo "$x <br/>";
    $x++;
}

echo "<br/>";

$meses = array(
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
);

for ($i = 0; $i < count($meses); $i++) {
    echo $meses[$i] . "<br/>";
}

# while permite iterar con variables externas
echo "<br/>";
$counter = 0;
while ($counter < count($meses)) {
    echo $meses[$counter] . "<br />";
    $counter++;
}

# do while siempre se ejecuta aunque sea una vez
echo "<br/> Do While <br/>";

$i = 1;
do {
    echo $i . "<br />";
    $i++;
} while ($i <= 10);

$alejandro = array(
    "tel" => 331023392,
    "edad" => 34,
    "pais" => "mexico"
);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>Meses</h1>
    <ul>
        <?php
        foreach ($meses as $mes) {
            echo "<li>" . $mes . "</li>";
        }
        echo "<br/>";
        foreach ($alejandro as $dato => $valor) {
            echo "<li>" . $dato . ": " . $valor . "</li>";
        }
        ?>
    </ul>
</body>

</html>

<?php

$paises = array("mexico", "argentina", "colombia", 
"ecuador", "españa", "paraguay", "peru");

foreach($paises as $pais) {
    echo $pais . "<br />";

    if($pais == "colombia") {
        break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Paises Latinoamericanos</h2>
    <?php 
        foreach($paises as $pais){
            if ($pais == "españa") {
                continue;
            }
            echo $pais . "<br/>";
        }

    ?>
</body>
</html>