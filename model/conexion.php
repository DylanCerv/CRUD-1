<?php

$nombreBD= 'crud_registro_persona';
$userName = 'root';
$password = 'root';

try {
    $conexion = new PDO(
        'mysql:host=localhost:3307;
        dbname='.$nombreBD,
        $userName,
        $password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

} catch (PDOException $e) {
    echo "ERROR: ".$e->getMessage();
}

?>
