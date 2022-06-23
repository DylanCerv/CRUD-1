<?php

// $nombreBD= 'id18453814_proyectos'; //crud_registro_persona
// $userName = 'id18453814_root';
// $password = '[WvqoiwXk0*]R<*%';


$userName = "root";
$password = "root" ;
$name_BD = "crud_registro_persona";




try {
    $DB = new PDO(
        'mysql:host=localhost:3307;
        dbname='.$name_BD,
        $userName,
        $password
    );
} catch (PDOException $e) {
    echo "Conexion Fallida: ".$e->getMessage();
}
