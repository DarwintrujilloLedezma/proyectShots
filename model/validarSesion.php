<?php
    class validarSesion{

        public function iniciarSesion($correo, $clave){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $sql = "SELECT * FROM users WHERE correo=:correo";
            $result = $conexion->prepare($sql);
            $result->bindParam(":correo", $correo);
            $result->execute();

            if ($f = $result->fetch()) {
                
                if ($clave == $f['clave']) {
                    
                    if ($f['estado'] == "Activo") {
                        
                        //inidica que acabamos de iniciar sesion
                        session_start();
                        $_SESSION['id'] = $f['identificacion'];
                        $_SESSION['rol'] = $f['rol'];
                        $_SESSION['autenticado'] = "SI" ;

                        if ($f['rol']== "Administrador") {
                            echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script>';
                            echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
                        }

                        if ($f['rol']== "Empleado") {
                            echo '<script>alert("BIENVENIDO EMPLEADO")</script>';
                            echo "<script>location.href='../view/admin/homeEmpleado.php'</script>";
                        }

                        if ($f['rol']== "Cliente") {
                            echo '<script>alert("BIENVENIDO Cliente")</script>';
                            echo "<script>location.href='../view/cliente/homeCliente.php'</script>";
                        }


                    }else{
                        echo '<script>alert("CUENTA INACTIVA O BLOQUEADA, CONTACTE AL ADMINISTRADOR")</script>';
                        echo "<script>location.href='../index.php'</script>";
                    }

                }else{
                    echo '<script>alert("CONTRASEÑA INCORRECTA, VERIFIQUE LOS DATOS")</script>';
                    echo "<script>location.href='../index.php'</script>";
                }

            }else{
                echo '<script>alert("CORREO NO ENCONTRADO, VERIFIQUE LOS DATOS O REGISTRESE")</script>';
                echo "<script>location.href='../index.php'</script>";
            }


        }



    }



?>