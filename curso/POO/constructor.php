<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrar_info()
    {
        echo $this->nombre . " tiene " . $this->edad . " años y es de $this->pais";
    }
}

$daniel = new Persona("daniel", 25, "México");
// $daniel->nombre = "daniel";
// $daniel->edad = 25;
// $daniel->pais = "México";
$daniel->mostrar_info();

echo "<br/>";

$alejandro = new Persona("Alejandro", 22, "Nicaragua");
// $alejandro->nombre = "Alejandro";
// $alejandro->edad = 22;
// $alejandro->pais = "Nicaragua";
$alejandro->mostrar_info();
?>