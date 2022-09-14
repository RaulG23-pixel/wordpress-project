<?php
function createPath($file){
    $string = join(DIRECTORY_SEPARATOR, array(__DIR__,$file));
    return $string;
}

$paths = [
    "formulario" => __DIR__ . "/formulario.php",
    "productos" => __DIR__ . "/productos.php"
];