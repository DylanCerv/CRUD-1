<?php


// $userName = "root";
// $password = "root" ;
// $name_BD = "crud_registro_persona";


$nombreBD= 'id18453814_proyectos'; //crud_registro_persona
$userName = 'id18453814_root';
$password = '*z~4)+]MV>oD^#GQ';


try {
    $DB = new PDO(
        'mysql:host=localhost;'. //PARA LA CONEXION DE LA BASE DE DATOS DE 000webhost.com
        // 'mysql:host=localhost:3307;
        'dbname='.$nombreBD,
        $userName,
        $password
    );
} catch (PDOException $e) {
    echo "Conexion Fallida: ".$e->getMessage();
}
