<?php 
require_once "template/header.php";
require_once "template/footer.php";
require_once "model/conexion.php";
?>

<?php 



$sentencia = $conexion -> query('SELECT * FROM persona');
$persona = $sentencia -> fetchAll(PDO::FETCH_OBJ);
//print_r($persona);


?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    <b>Lista de Personas</b>
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Pais</th>
                                <th class="text-center" scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($persona as $datos){ //persona es el nombre de la tabla de la BD
                            ?>
                            <tr>
                                <td scope="row"><?php echo $datos->id_codigo; ?></td> <!--IMPRIMIMOS EL TADO DE LA COLUMNA DESEADA-->
                                <td><?php echo $datos->nombre; ?></td>
                                <td><?php echo $datos->edad; ?></td>
                                <td><?php echo $datos->pais; ?></td>
                                <td class="text-center">Editar</td>
                                <td class="text-center">Eliminar</td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <b>Ingresar Datos</b>
                </div>
                <form action="" class="p-4" method="POST" action="registro.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad</label>
                        <input type="number" class="form-control" name="txtEdad" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pais</label>
                        <input type="text" class="form-control" name="txtSigno" autofocus>
                    </div>
                    <!--PARA LOS BOTONES-->
                    <div class="d-grid">
                    <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</div>