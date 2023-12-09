<?php
// ??
$nombre = isset($_GET["nombre"]) ? 
$_GET['nombre'] : "Anonimo";

$nombre2 = $_GET["nombre2"] ?? "Anomino2";

echo $nombre;
echo $nombre2;
