<?php 
    require_once "Conexion.php";
    class crud {
        public function insertarDatos($datos){
            try{
                $conexion =conexion::conectar();
                $coleccion = $conexion -> crud;
                $resultado =  $coleccion->insertOne([
                    "nombre" => $datos['nombre'],
                    "paterno" => $datos['paterno'],
                    "materno" => $datos['materno'],
                    "fecha_nacimiento" => $datos['fecha_nacimiento']
                ]);
                return $resultado;
            }catch (\Throwable $th){
               return $th;
            }   
        }
        
        public function obtenerDocumento($id){
            $conexion = conexion::conectar();
            $coleccion = $conexion -> personas;
            try {
                $datos = $coleccion -> findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));
                return $datos;
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function mostrar(){
            try{
                $conexion =conexion::conectar();
                $coleccion = $conexion -> crud;
                $datos =  $coleccion->find();
                return $datos;
            }catch (\Throwable $th){
                return $th;
            }
        }

        public function eliminarDatos($datos){
            try {
                $conexion = conexion::conectar();
                $coleccion = $conexion -> personas;
                $respuesta = $coleccion -> deleteOne(array('_id' => new MongoDB\BSON\ObjectId($datos)));
                return $respuesta;
            } catch (\Throwable $th) {
                throw $th;
            }
        }
         public function actualizar($datos){
                try {
                    $conexion = conexion::conectar();
                    $coleccion = $conexion -> personas;
                    $resultado = $coleccion -> updateOne(
                        ['_id' => new MongoDB\BSON\ObjectId($datos['_id'])],
                        [
                            '$set' => [
                                "nombre" => $datos['nombre'],
                                "paterno" => $datos['paterno'],
                                "materno" => $datos['materno'],
                                "fecha_nacimiento" => $datos['fecha_nacimiento']
                            ],
                        ]
                    );
                    return $resultado;
                } catch (\Throwable $th) {
                    throw $th;
                }
        }
    }
?>