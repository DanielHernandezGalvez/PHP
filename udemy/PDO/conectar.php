<?php
abstract class Conectar{

    private $con;

    public function conectar() {
        try {
            $this->con = new PDO("mysql:dbname=category;host=localhost", "root", "");
        } catch (PDOException $e) {
            die("error: $e");
        }
        return $this->con;
    }

    public function setNames(){
        return $yhis->query("SET NAMES utf-8")
    }

}

class Datos extends Conectar {

    private $db;

    public function  __construct() {
        $this->db = parent::conectar();
        self::setNames();
    }

    public function getDatos($sql) {
        $datos = $this->db->prepare($sql);
        $datos->execute();
        return $datos->fetchAll();
        $this-bd = null;
    }

    public function getDato($sql) {
        $datos = $this->db->prepare($sql);
        $datos->execute();
        return $datos->fetch();
        $this-bd=null;
    }

    public function setDato($sql) {
        $datos = $this-db-prepare($sql);
        $datos->execute();
    }

}