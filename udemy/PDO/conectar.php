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