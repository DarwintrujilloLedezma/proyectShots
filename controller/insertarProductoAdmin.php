<?php

// Enlazamos las dependencias necesarias conexion a la base de datos
//y las consultas que realizará el insertar en la tabla
require_once('../model/conexion.php');
require_once('../model/consultasAdmin.php');

// capturamos en variables los valores enviados por el name a traves del metodo POST
// del formulario de registro

$codigo =$_POST['codigo'];
$nombreProducto =$_POST['nombreProducto'];
$presentacion =$_POST['presentacion'];
$cantidad =$_POST['cantidad'];
$ubicacion =$_POST['ubicacion'];
$precioUnitario =$_POST['precioUnitario'];
$total =$_POST['total'];
$proveedor =$_POST['proveedor'];


//validamos que los campos esten completos
if (strlen($codigo)>0 && !is_numeric($nombreProducto) && !preg_match("/[0-9]/",($nombreProducto)) && strlen($presentacion)>0 && strlen($cantidad)>0 && strlen($ubicacion)>0 && strlen($precioUnitario)>0 && strlen($total)>0 && strlen($proveedor)>0) {
    
        
        
        //convertimos la clase consultasE de modelo, en un objeto
        $objetoInsertarProducto = new consultasAdmin();

        //enviamos los datos ala funcion registrar User perteneciente a la clase consultasE
        $result = $objetoInsertarProducto->registrarProducto($codigo,$nombreProducto,$presentacion,$cantidad,$ubicacion,$precioUnitario,$total,$proveedor);

    

}else{
    echo '<script>alert("Por favor, complete los campos correctamente para registrar el producto")</script>';
    echo "<script>location.href='../view/admin/registrarProducto.php'</script>";
}

?>