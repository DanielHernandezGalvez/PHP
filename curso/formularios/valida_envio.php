<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    echo "se eviaron por get";
} else {
    echo "se enviaron por post";
}

if (isset($_POST['submit'])) {
    echo "Se han enviado los datos correctamente";
    print_r($_POST['submit']);
}
