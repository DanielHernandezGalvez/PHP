<?php
require_once("conectar.php");
$d = new Datos();

// Assuming your table name is 'pdo' and no join is needed
$sql = "SELECT id, name, type, description FROM pdo ORDER BY id DESC;";
$datos = $d->getDatos($sql);

print_r($datos);
?>
