<?php

class Persona {
    public static $dia = "7 ded septiembre";

    public static function saludo($nombre = null) {
        if($nombre) {

            return "hola $nombre";
        } else {
            return "hola, buen día";
        }
    }
}

// $daniel = new Persona;
echo Persona::$dia;
echo "<br />";
echo Persona::saludo("daniel");