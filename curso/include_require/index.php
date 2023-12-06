<?php
function suma($numero1, $numero2)
{
    return $numero1 + $numero2;
}
# si hay error no rompe toda la página
include 'vista.php';

# si solo lo quiero traer una vez
include_once 'vista.php';

# si hay error rompe toda la página
require 'vista.php';
