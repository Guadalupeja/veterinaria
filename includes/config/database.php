<?php

function conectarDB () : mysqli {
    $db = mysqli_connect("localhost", "root", "root", "veterinaria");

    if(!$db) {
        echo "error, no se pudo conectar";
        exit;
    }

    return $db;
   
}