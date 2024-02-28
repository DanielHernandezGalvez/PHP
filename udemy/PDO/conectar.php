<?php
abstract class Conectar {

    private $con;

    public function conectar() {
        try {
            $this->con = new PDO("mysql:dbname=pdo;host=localhost;charset=utf8mb4", "root", "");
        } catch (PDOException $e) {
            die("error: $e");
        }
        return $this->con;
    }

    public function setNames(){
        return $this->con->query("SET NAMES utf-8");
    }

}

class Datos extends Conectar {

    private $db;

    public function __construct() {
        $this->db = parent::conectar();
        self::setNames();
    }

    public function getDatos($sql) {
        $datos = $this->db->prepare($sql);
        $datos->execute();
        $result = $datos->fetchAll(); // Store the result before closing connection
        $this->db = null; // Close connection here (optional)
        return $result;
    }

    public function getDato($sql) {
        $datos = $this->db->prepare($sql);
        $datos->execute();
        $result = $datos->fetch(); // Store the result before closing connection
        $this->db = null; // Close connection here (optional)
        return $result;
    }

    public function setDato($sql) {
        $datos = $this->db->prepare($sql);
        $datos->execute();
    }

}
