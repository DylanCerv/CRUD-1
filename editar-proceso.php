<?php

//print_r($_POST);

if(!isset($_POST['codigo'])) {
    header('Location: index.php?mensaje=error');
}

include "model/conexion.php";

$codigo = $_POST['codigo'];
$nombre = $_POST['txtNombre'];
$edad = $_POST['txtEdad'];
$pais = $_POST['txtPais'];

$sentencia = $conexion->prepare('UPDATE persona SET nombre=?, edad=?, pais=? WHERE id_codigo=?;');
$ejecutar = $sentencia->execute([$nombre,$edad,$pais,$codigo]);


if ($ejecutar===TRUE) {
    header('Location: index.php?mensaje=editado');
    exit();
} else {
    header('Location: index.php?mensaje=error');
    exit();
}



?>