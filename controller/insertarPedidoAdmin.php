<?php

// Enlazamos las dependencias necesarias conexion a la base de datos
//y las consultas que realizará el insertar en la tabla
require_once('../model/conexion.php');
require_once('../model/consultasAdmin.php');

// capturamos en variables los valores enviados por el name a traves del metodo POST
// del formulario de registro

$codigo =$_POST['codigo'];
$nombreCliente =$_POST['nombreCliente'];
$apellidoCliente =$_POST['apellidoCliente'];
$nombreProducto =$_POST['nombreProducto'];
$presentacion =$_POST['presentacion'];
$cantidad =$_POST['cantidad'];
$total =$_POST['total'];


//validamos que los campos esten completos
if (strlen($codigo)>0 && !is_numeric($nombreCliente) && !preg_match("/[0-9]/",($nombreCliente)) && !is_numeric($apellidoCliente) && !preg_match("/[0-9]/",($apellidoCliente)) && !is_numeric($nombreProducto) && !preg_match("/[0-9]/",($nombreProducto)) && strlen($presentacion)>0 && strlen($cantidad)>0 && strlen($total)>0) {
    
        
        
        //convertimos la clase consultasE de modelo, en un objeto
        $objetoInsertarPedido = new consultasAdmin();

        //enviamos los datos ala funcion registrar User perteneciente a la clase consultasE
        $result = $objetoInsertarPedido->registrarPedido($codigo,$nombreCliente,$apellidoCliente,$nombreProducto,$presentacion,$cantidad,$total);

    

}else{
    echo '<script>alert("Por favor, complete los campos correctamente para registrar el pedido")</script>';
    echo "<script>location.href='../view/admin/registrarPedido.php'</script>";
}

?>