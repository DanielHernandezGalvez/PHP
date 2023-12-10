<?php
# sin POO
// $nombre = "Dani";
// $edad = 26;
// $pais = "Mèxico";

// echo $nombre;

// $nombre2 = "Alejandro";
// $edad2 = 26;
// $pais2 = "Costa rica";

# Con POO

// una clase es como una plantilla

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrar_informacion() {
        echo "Hola mundo";
    }
}

$daniel = new Persona;
$daniel->nombre = "Daniel Alejandro";
$daniel->edad = 23;
$daniel->pais = "Monclova";

$daniel->mostrar_informacion();

echo $daniel->nombre . " tiene " . $daniel->edad . " años.";

$alejandro = new Persona;
$alejandro->nombre = "alejandro";
$alejandro->edad = 20;
$alejandro->pais = "Colombia";
