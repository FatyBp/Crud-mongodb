
<?php 
  require_once "clases/crud.php";
  $crud = new Crud();
  $id = $_POST['_idActualizar'];
  $datos = $crud -> obtenerDocumento($id);
  // echo $id;
  $idMongo = new MongoDB\BSON\ObjectId($datos -> _id);
?>

<?php require_once "header.php"; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container bg-light">
        <h1 class="display-4  text-center"><i class="fas fa-user"></i> Actualizar registro</h1>
        <form action="" method="post" class="mt-5">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="<?php echo $datos -> nombre; ?>">
            <label for="apellidoP">Apellido Paterno</label>
            <input type="text" name="apellidoP" class="form-control" required value="<?php echo $datos -> paterno; ?>">
            <label for="apellidoM">Apellido Materno</label>
            <input type="text" name="ApellidoM" class="form-control" required value="<?php echo $datos -> materno; ?>">
            <label for="FechaNac">Fecha de nacimiento</label>
            <input type="date" name="FechaNac" class="form-control" required value="<?php echo $datos -> fecha_nacimiento; ?>">
            <button class="btn btn-primary mt-3 container-fluid">Actualizar</button>
        </form>
        <div class="col-3"><a href="index.php" class="text-info"><button class="btn btn-warning mt-3 container-fluid"><i class="fas fa-backward"></i> Regresar</button></a></div>
        <p class="lead"></p>
    </div>
</div>
<?php require_once "scripts.php"; ?>