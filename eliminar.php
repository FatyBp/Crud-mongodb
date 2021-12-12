<?php require_once "header.php"; ?>

 <?php 
    $id = $_POST ('_id');
    require_once "./clases/crud.php";
    $crud = new crud();
    $datos = $crud -> obtenerDocumento($id);
    $idMongo = new MongoDB\BSON\ObjectId($datos ->_id);
?>


<div class="jumbotron jumbotron-fluid">
    <div class="container bg-light">
        <h1 class="display-4  text-center">
            <i class="fas fa-address-book"></i>Eliminar Registro
        </h1>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Advertencia</h4>
            <p>Estas seguro de eliminar este registro!!!</p>
            <hr>
            <table class="table table-hover table-sm table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido Materno</th>
                    <th>Apellido Paterno</th>
                    <th>Fecha de nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $key -> nombre; ?></td>
                    <td><?php echo $key -> paterno;?></td>
                    <td><?php echo $key -> materno;?></td>
                    <td><?php echo $key -> fecha_nacimiento;?></td>
                    </tr>
                </tbody>
            </table>
            <p class="mb-0">
                <button class="btn btn-primary container-fluid  text-white">Eliminar</button>
            </p>
            <div class="col-3 mb-3">
                <a href="index.php" class="text-info">
                    <button class="btn btn-warning mt-3 container-fluid">
                        <i class="fas fa-backward"></i> Regresar
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>

<?php require_once "scripts.php" ?>