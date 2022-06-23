<?php

//print_r($_POST);

if (!isset($_GET['codigo'])) {
    header('Location: index.php?mensaje=error');
}


include "../conexion/conexion.php";
$codigo = $_GET['codigo'];

$sentencia = $DB->prepare('DELETE FROM persona WHERE id_codigo=?;');
$ejecutar = $sentencia->execute([$codigo]);


if ($ejecutar === TRUE) {
    header('Location: ../../index.php?mensaje=eliminado');
}else {
    header('Location: ../../index.php?mensaje=error');
}


?>