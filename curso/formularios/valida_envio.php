<?php
if($_SERVER['REQUEST_METHOD'] == "GET"){
    echo "se eviaron por get";
} else {
    echo "se enviaron por post";
}
?>