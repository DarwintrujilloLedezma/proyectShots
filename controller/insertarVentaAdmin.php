<?php

// Enlazamos las dependencias necesarias conexion a la base de datos
//y las consultas que realizará el insertar en la tabla
require_once('../model/conexion.php');
require_once('../model/consultasAdmin.php');

// capturamos en variables los valores enviados por el name a traves del metodo POST
// del formulario de registro

$codigo =$_POST['codigo'];
$nombreProducto =$_POST['nombreProducto'];
$cantidad =$_POST['cantidad'];
$valorUnitario =$_POST['valorUnitario'];
$ubicacion =$_POST['ubicacion'];
$valorTotal =$_POST['valorTotal'];



//validamos que los campos esten completos
if (strlen($codigo)>0 && !is_numeric($nombreProducto) && !preg_match("/[0-9]/",($nombreProducto)) && strlen($cantidad)>0 && strlen($valorUnitario)>0 && strlen($ubicacion)>0 && strlen($valorTotal)>0 ) {
    
        
        
        //convertimos la clase consultasE de modelo, en un objeto
        $objetoInsertarVenta = new consultasAdmin();

        //enviamos los datos ala funcion registrar User perteneciente a la clase consultasE
        $result = $objetoInsertarVenta->registrarVenta($codigo,$nombreProducto,$cantidad,$valorUnitario,$ubicacion,$valorTotal);

    

}else{
    echo '<script>alert("Por favor, complete los campos correctamente para registrar la venta")</script>';
    echo "<script>location.href='../view/admin/registrarVenta.php'</script>";
}

?>