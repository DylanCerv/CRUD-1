<?php

//print_r($_POST);

if (empty($_POST['oculto']) OR empty($_POST['txtNombre']) OR empty($_POST['txtEdad']) OR empty($_POST['txtPais']))
    {
    header('Location: index.php?mensaje=falta-datos');
    exit();
}



require_once "model/conexion.php";
$nombre = $_POST['txtNombre'];
$edad = $_POST['txtEdad'];
$pais = $_POST['txtPais'];

$sentencia = $conexion->prepare('INSERT INTO persona(nombre, edad, pais) VALUES(?,?,?);');
$ejecutar = $sentencia->execute([$nombre,$edad,$pais]);

if ($ejecutar === TRUE) {
    header('Location: index.php?mensaje=registrado');
}else {
    header('Location: index.php?mensaje=error');
    exit();
}


?>