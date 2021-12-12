<?php require_once "header.php"; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container bg-light">
        <h1 class="display-4  text-center"><i class="fas fa-user"></i> Agregar registro nuevo</h1>
        <form action="procesos/agregar.php" method="post" class="mt-5">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required autocomplete="off" placeholder="Nombre Ej. Daniel">
            <label for="apellidoP">Apellido Paterno</label>
            <input type="text" name="apellidoP" class="form-control" required autocomplete="off" placeholder="Apellido Paterno Ej. Perez">
            <label for="apellidoM">Apellido Materno</label>
            <input type="text" name="ApellidoM" class="form-control" required autocomplete="off" placeholder="Apellido Materno Ej. Jimenez">
            <label for="FechaNac">Fecha de nacimiento</label>
            <input type="date" name="FechaNac" class="form-control mb-3" required autocomplete="off">

            <button class="btn btn-primary mt-3 container-fluid">Agregar</button>
            <button class="btn btn-warning mt-3 container-fluid"><i class="fas fa-backward"></i> Regresar</button></a>

        </form>
        <div class="col-3"><a href="index.php" class="text-info">
            
        </div>
        <p class="lead"></p>
    </div>
</div>
<?php require_once "scripts.php"; ?>