<?php

class Usuario {
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrar_nombre(){
        echo "su nombre es: $this->nombre" . "<br/>";
        return $this;
    }

    public function mostrar_correo(){
        echo "su correo es: $this->correo" . "<br/>";
        return $this;
    }
}

// asi se púeden encadenar tantos m¿etodos se requiera de una clase
$mariana = new Usuario("Manriana", "correo@mariana");
$mariana->mostrar_nombre()->mostrar_correo();

?>