<?php

$nombreBD= 'id18453814_proyectos'; //crud_registro_persona
$userName = 'id18453814_root';
$password = '[WvqoiwXk0*]R<*%';

try {
    $conexion = new PDO(
        'mysql:host=localhost;
        dbname='.$nombreBD,
        $userName,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

} catch (PDOException $e) {
    echo "ERROR: ".$e->getMessage();
}

?>
