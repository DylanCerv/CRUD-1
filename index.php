<?php 
require_once "template/header.php";
require_once "template/footer.php";
?>

<div class="container mt-5">


    <div class="row justify-content-center">

        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center">
                    Lista de Personas
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Signo</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Dylan España</td>
                                <td>17</td>
                                <td>Tauro</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>Dylan España</td>
                                <td>17</td>
                                <td>Tauro</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td>Dylan España</td>
                                <td>17</td>
                                <td>Tauro</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    Ingresar Datos
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
                        <label class="form-label">Signo</label>
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