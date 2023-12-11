<?php

// nos permiten no poder acceder a una clase amenos que la heredemos
abstract class Persona {
    public function saludo(){
        return "hola";
    }
}

class Estudiante extends Persona {

}

$carlos = new Estudiante;
echo $carlos->saludo();