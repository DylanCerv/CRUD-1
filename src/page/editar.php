<?php 
require_once "template/header.php";
require_once "template/footer.php";
?>


<?php

if (!isset($_GET['codigo'])){
    header('Location: index.php?mensaje=error');
    exit();
}



include_once "../conexion/conexion.php";
$codigo = $_GET['codigo'];
$sentencia = $DB->prepare('SELECT * FROM persona WHERE id_codigo = ?;');
$sentencia->execute([$codigo]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($persona);

?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <b>Editar Datos</b>
                </div>
                <form class="p-4" method="POST" action="../validation/edit-proceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required value="<?php echo $persona->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad</label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required value="<?php echo $persona->edad; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pais</label>
                        <input type="text" class="form-control" name="txtPais" autofocus required value="<?php echo $persona->pais; ?>">
                    </div>
                    <!--PARA LOS BOTONES-->
                    <div class="d-grid">
                        <input type="hidden" name="codigo" value="<?php echo $persona->id_codigo; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



