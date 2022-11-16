<?php

    class consultasE {
        public function registrarUser($identificacion,$tipoDoc,$nombres,$apellidos,$telefono,$fechaNacimiento,$correo,$passmd,$rol,$estado){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            //$sql = "SELECT * FROM users WHERE identificacion=:identificacion OR correo=:correo";
            
            $sql ="INSERT INTO users (identificacion, tipoDoc, nombres, apellidos, telefono, fechaNacimiento, correo, clave, rol, estado) VALUES(:identificacion,:tipoDoc,:nombres,:apellidos,:telefono,:fechaNacimiento,:correo,:clave,:rol,:estado)";
            
            $statament = $conexion->prepare($sql);

            $statament->bindParam(':identificacion', $identificacion);
            $statament->bindParam(':tipoDoc', $tipoDoc);
            $statament->bindParam(':nombres', $nombres);
            $statament->bindParam(':apellidos', $apellidos);
            $statament->bindParam(':telefono', $telefono);
            $statament->bindParam(':fechaNacimiento', $fechaNacimiento);
            $statament->bindParam(':correo', $correo);
            $statament->bindParam(':clave', $passmd);
            $statament->bindParam(':rol', $rol);
            $statament->bindParam(':estado', $estado);

            if (!$statament) {
                echo '<script>alert("ERROR EN EL SISTEMA")</script>';
                echo "<script>location.href='../index.php'</script>";
            
            }else{
                $statament->execute();
                echo '<script>alert("REGISTRO EXITOSO")</script>';
                echo "<script>location.href='../index.php'</script>";
            }
   
        
        
        
        
        }
    }

?>