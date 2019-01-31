<?php

    class DataBase{

        public function insertarProducto($nombre,$descripcion,$categoria,$precio){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "insert into producto (nombre, descripcion, categoria, precio) values (:nombre, :descripcion, :categoria, :precio)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':descripcion', $descripcion);
            $statement->bindParam(':categoria', $categoria);
            $statement->bindParam(':precio', $precio);
              
            if(!$statement){
                return "Error no se puede realizar la carga";
            }else{
                $statement->execute();
                    return "La inserción se realizó con éxito";
                }
        }

        public function consultarProductos(){
            $array = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "select * from producto";
            $statement=$conexion->prepare($sql);
            $statement->execute();
            while($resultado = $statement->fetch()){
                $array[] =$resultado;
            }
            return $array;

        }

        public function eliminarProducto($id){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "delete from produto where id = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id',$id);
            if(!$statement){
                return "No se puede borrar";
            }else{
                $statement->execute();
                return "El registro fue eliminado exitosamente";
            }
    
        }

        public function buscarProducto($nombre){
            $array = null;
            $modelo = new Conexion();
            $conexion = $modelo -> get_conexion();
            $nombre = "%".$nombre."%";
            $sql = "select * from producto where nombre like :nombre";
            $statement = $conexion -> prepare($sql);
            $statement -> bindParam(':nombre', $nombre);
            $statement -> execute();
            while($resultado = $statement -> fetch()){
                $array[] = $resultado;
            }
            return $array;
        }

        public function recuperarProductos($id){
            $array = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "select * from producto where id = :id";
            $statement=$conexion->prepare($sql);
            $statement->bindParam(':id',$id);
            $statement->execute();
            while($resultado = $statement->fetch()){
                $array[] =$resultado;
            }
            return $array;
        }

        public function modificarProducto($campo, $valor, $id){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql = "update producto set $campo = :valor where id = :id";
            $statement=$conexion->prepare($sql);
            $statement -> bindParam(':valor', $valor);
            $statement -> bindParam(':id', $id);
            if(!$statement){
                return "No se pudo modificar";
            }else{
                $statement->execute();
                    return "Datos actualizados exitosamente";
            }              
            
        }
      
    }
?>