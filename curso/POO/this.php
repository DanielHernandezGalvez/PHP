<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrar_info()
    {
        echo $this->nombre . " tiene " . $this->edad . " años y es de $this->pais";
    }
}

// $daniel = new Persona;
$daniel->nombre = "daniel";
$daniel->edad = 25;
$daniel->pais = "México";
$daniel->mostrar_info();

echo "<br/>";

// $alejandro = new Persona;
$alejandro->nombre = "Alejandro";
$alejandro->edad = 22;
$alejandro->pais = "Nicaragua";
$alejandro->mostrar_info();
?>