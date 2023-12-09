<?php

// print_r($_POST);

if (!$_POST) {
    header('Location: http://php.test:8080/curso/formularios/?nombre=');
}
# informacion delicada con post, si no hay problema con get
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos'];

echo "hola $nombre eres $sexo ";

// $nombre = $_GET['nombre'];
// echo htmlspecialchars($nombre); // con esto se evitan los riesgos
