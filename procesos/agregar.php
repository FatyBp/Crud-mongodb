<?php 
require_once "../clases/crud.php";
$crud = new crud();
$datos =array(
    "nombre" =>$_POST['nombre'],
    "paterno" =>$_POST['apellidoP'],
    "materno" =>$_POST['ApellidoM'],
    "fecha_nacimiento" =>$_POST['FechaNac']
);
$respuesta = $crud -> insertarDatos($datos);
if ($respuesta ->getInsertedId() > 0){
    header("location:../index.php");
}else{
    print_r($respuesta);
}
?>



