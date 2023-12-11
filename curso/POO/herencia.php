<?php

class Persona
{
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrar_info()
    {
        return $this->nombre . " tiene " . $this->edad . " años y es de $this->pais";
    }
}

class Estudiante extends Persona
{
    public $carrera;
    function __construct($nombre, $edad, $pais, $carrera)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

class Trabajador extends Persona {
    public $trabajo;
    function __construct($nombre, $edad, $pais, $trabajo){
        parent::__construct($nombre, $edad, $pais);
        $this->trabajo = $trabajo;
    }
}

$daniel = new Trabajador("daniel", 26, "mexico", "profesor");
echo $daniel->trabajo;
