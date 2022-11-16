<?php

    class consultasAdmin {
        public function registrarUser($identificacion,$tipoDoc,$nombres,$apellidos,$telefono,$fechaNacimiento,$correo,$passmd,$rol,$estado){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();


            $sql = "SELECT * FROM users WHERE identificacion=:identificacion OR correo=:correo";
            $result = $conexion->prepare($sql);

            $result->bindParam(":identificacion", $identificacion);
            $result->bindParam(":correo", $correo);

            $result->execute();

            $f = $result->fetch();

            if ($f) {
                echo '<script>alert("LOS DATOS A REGISTRAR YA EXISTEN EN EL SISTEMA")</script>';
                echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
            }else{
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
                    echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
                }
            }







            //$sql = "SELECT * FROM users WHERE identificacion=:identificacion OR correo=:correo";
            
            
        }

        public function mostrarUsers(){
            
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $consultar = "SELECT * FROM users";
            $result = $conexion->prepare($consultar);
            $result->execute();

            while ($arreglo = $result->fetch()) {
                $f[]= $arreglo;
            }
            return $f;
        }

        public function buscarUser($id_user){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $consultar = "SELECT * FROM users WHERE identificacion=:id_user";
            $result = $conexion->prepare($consultar);
            $result->bindParam(':id_user', $id_user);
            $result->execute();

            while ($arreglo = $result->fetch()) {
                $f[]= $arreglo;
            }
            return $f;
        }

        public function modificarUser($identificacion, $tipoDoc, $nombres, $apellidos, $telefono, $fechaNacimiento, $correo, $rol, $estado){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $modificar = "UPDATE users SET identificacion =:identificacion, tipoDoc=:tipoDoc, nombres =:nombres, apellidos =:apellidos, telefono =:telefono, fechaNacimiento =:fechaNacimiento, correo =:correo, rol =:rol, estado =:estado WHERE identificacion=:identificacion";

            $result = $conexion->prepare($modificar);

            $result->bindParam(':identificacion',$identificacion);
            $result->bindParam(':tipoDoc',$tipoDoc);
            $result->bindParam(':nombres',$nombres);
            $result->bindParam(':apellidos',$apellidos);
            $result->bindParam(':telefono',$telefono);
            $result->bindParam(':fechaNacimiento',$fechaNacimiento);
            $result->bindParam(':correo',$correo);
            $result->bindParam(':rol',$rol);
            $result->bindParam(':estado',$estado);

            $result->execute();

            echo '<script>alert("MODIFICACION EXITOSA")</script>';
            echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
     
            
        }

        public function eliminarUser($id_user){
            $f = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $eliminar = "DELETE FROM users WHERE identificacion=:id_user";
            $result= $conexion->prepare($eliminar);
            $result->bindParam(":id_user", $id_user);
            $result->execute();
            echo '<script>alert("USUARIO ELIMINADO")</script>';
            echo "<script>location.href='../view/admin/verUsers.php'</script>";
            
        }

        public function registrarProducto($codigo, $nombreProducto, $presentacion, $cantidad, $ubicacion, $precioUnitario, $total, $proveedor){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $sql ="INSERT INTO productos (codigo, nombreProducto, presentacion, cantidad, ubicacion, precioUnitario, total, proveedor) VALUES(:codigo,:nombreProducto,:presentacion,:cantidad,:ubicacion,:precioUnitario,:total,:proveedor)";

            $statament = $conexion->prepare($sql);

            $statament->bindParam(':codigo', $codigo);
            $statament->bindParam(':nombreProducto', $nombreProducto);
            $statament->bindParam(':presentacion', $presentacion);
            $statament->bindParam(':cantidad', $cantidad);
            $statament->bindParam(':ubicacion', $ubicacion);
            $statament->bindParam(':precioUnitario', $precioUnitario);
            $statament->bindParam(':total', $total);
            $statament->bindParam(':proveedor', $proveedor);

            if (!$statament) {
                echo '<script>alert("ERROR EN EL SISTEMA")</script>';
                echo "<script>location.href='../index.php'</script>";
            
            }else{
                $statament->execute();
                echo '<script>alert("REGISTRO EXITOSO")</script>';
                echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
            }
        }

        public function mostrarProductos(){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $consultar = "SELECT * FROM productos";
            $result = $conexion->prepare($consultar);
            $result->execute();

            while ($arreglo = $result->fetch()) {
                $f[]= $arreglo;
            }
            return $f;
        }

        public function eliminarProducto($id_producto){
            $f = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $eliminar = "DELETE FROM productos WHERE codigo=:id_producto";
            $result= $conexion->prepare($eliminar);
            $result->bindParam(":id_producto", $id_producto);
            $result->execute();
            echo '<script>alert("PRODUCTO ELIMINADO")</script>';
            echo "<script>location.href='../view/admin/verProductos.php'</script>";
        }

        public function registrarVenta($codigo, $nombreProducto, $cantidad, $ValorUnitario, $ubicacion, $valorTotal){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $sql ="INSERT INTO ventas (codigo, nombreProducto, cantidad, valorUnitario, ubicacion, valorTotal) VALUES(:codigo,:nombreProducto,:cantidad,:valorUnitario,:ubicacion,:valorTotal)";

            $statament = $conexion->prepare($sql);

            $statament->bindParam(':codigo', $codigo);
            $statament->bindParam(':nombreProducto', $nombreProducto);
            $statament->bindParam(':cantidad', $cantidad);
            $statament->bindParam(':valorUnitario', $ValorUnitario);
            $statament->bindParam(':ubicacion', $ubicacion);
            $statament->bindParam(':valorTotal', $valorTotal);

            if (!$statament) {
                echo '<script>alert("ERROR EN EL SISTEMA")</script>';
                echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
            
            }else{
                $statament->execute();
                echo '<script>alert("REGISTRO EXITOSO")</script>';
                echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
            }
        }

        public function mostrarVentas(){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $consultar = "SELECT * FROM ventas";
            $result = $conexion->prepare($consultar);
            $result->execute();

            while ($arreglo = $result->fetch()) {
                $f[]= $arreglo;
            }
            return $f;   
        }


        public function registrarPedido($codigo, $nombreCliente, $apellidoCliente, $nombreProducto, $presentacion, $cantidad, $total){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $sql ="INSERT INTO pedidos (codigo, nombreCliente, apellidoCliente, nombreProducto, presentacion, cantidad, total) VALUES(:codigo,:nombreCliente,:apellidoCliente,:nombreProducto,:presentacion,:cantidad,:total)";

            $statament = $conexion->prepare($sql);

            $statament->bindParam(':codigo', $codigo);
            $statament->bindParam(':nombreCliente', $nombreCliente);
            $statament->bindParam(':apellidoCliente', $apellidoCliente);
            $statament->bindParam(':nombreProducto', $nombreProducto);
            $statament->bindParam(':presentacion', $presentacion);
            $statament->bindParam(':cantidad', $cantidad);
            $statament->bindParam(':total', $total);

            if (!$statament) {
                echo '<script>alert("ERROR EN EL SISTEMA")</script>';
                echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
            
            }else{
                $statament->execute();
                echo '<script>alert("REGISTRO EXITOSO")</script>';
                echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
            }
        }

        public function mostrarPedidos(){
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $consultar = "SELECT * FROM pedidos";
            $result = $conexion->prepare($consultar);
            $result->execute();

            while ($arreglo = $result->fetch()) {
                $f[]= $arreglo;
            }
            return $f;
        }

        public function eliminarPedido($id_pedido){
            $f = null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();

            $eliminar = "DELETE FROM pedidos WHERE codigo=:id_pedido";
            $result= $conexion->prepare($eliminar);
            $result->bindParam(":id_pedido", $id_pedido);
            $result->execute();
            echo '<script>alert("PEDIDO ELIMINADO")</script>';
            echo "<script>location.href='../view/admin/verPedidos.php'</script>";
        }
    }

    

?>