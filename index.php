<?php require_once "header.php"; ?>

<?php 
    require_once "clases/crud.php";
    $objeto = new crud();
    $datos = $objeto -> mostrar();
    echo "<pre>";
    // print_r($datos);
    echo "</pre>";
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container bg-light">
        <h1 class="display-4 text-center"> <i class="fas fa-address-book"></i> Crud con PHP y MongoDB</h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-sm table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Apellido Materno</th>
                    <th>Apellido Paterno</th>
                    <th>Fecha de nacimiento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php foreach ($datos as $key): 
                        $idMongo = new MongoDB\BSON\ObjectId($key->_id);
                    ?>
                    <tr>
                    <td><?php echo $key -> nombre; ?></td>
                    <td><?php echo $key -> paterno;?></td>
                    <td><?php echo $key -> materno;?></td>
                    <td><?php echo $key -> fecha_nacimiento;?></td>
                    <form action="actualizar.php" method="POST">
                        <input type="text" name="_idActualizar" hidden value="<?php echo $idMongo; ?>">
                    <td><button class ="btn btn-warning"> Editar </button></td>
                    <td>
                    </form>
                        <form action="eliminar.php" method="POST">
                            <input type="text" name="_id" hidden value="<?php echo $idMongo ?>">
                            <button class ="btn btn-danger" type="submit"> Eliminar </button>
                        </form>
                    </td>
                    <?php endforeach; ?>
                </tbody>                
            </table>
            <button class="btn btn-success">
                <a href="agregar.php" class="text-light"><i class="fas fa-user-plus"></i>
                    Agregar Persona
                </a>
            </button>
        </div>
    </div>
</div>

<?php require_once "scripts.php"; ?>