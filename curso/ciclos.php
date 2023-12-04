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

for($i = 0; $i < count($meses); $i++){
    echo $meses[$i] . "<br/>";
}


echo "<br/>";
$counter = 0;
while($counter < count($meses)){
    echo $meses[$counter] . "<br />";
    $counter++;
}
