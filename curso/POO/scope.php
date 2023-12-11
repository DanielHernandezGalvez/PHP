<?php 

// Protected solo puede ser accedide dentro de su clase y otras que heredaron

// Private solo podemos acceder al correo dentro de la clase que fue creada
    class Usuario {
        public $nombre;
        protected $correo;

        function __construct($nombre, $correo){
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        public function mostrar_info(){
            return $this->correo;
        }
    }

class Miembro extends Usuario {
    public function mostrar_correo(){
        return "este es el correo $this->correo";
    }
}

$daniel = new Miembro("daniel", "correo@correo");
echo $daniel->mostrar_correo();
?>