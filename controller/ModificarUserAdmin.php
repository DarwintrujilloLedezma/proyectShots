<?php

    // Enlazamos las dependencias necesarias conexion a la base de datos
//y las consultas que realizará el update en la tabla
require_once('../model/conexion.php');
require_once('../model/consultasAdmin.php');

// capturamos en variables los valores enviados por el name a traves del metodo POST
// del formulario de registro

$identificacion =$_POST['identificacion'];
$tipoDoc =$_POST['tipoDoc'];
$nombres =$_POST['nombres'];
$apellidos =$_POST['apellidos'];
$telefono =$_POST['telefono'];
$fechaNacimiento =$_POST['fechaNacimiento'];
$correo =$_POST['correo'];
$rol =$_POST['rol'];
$estado =$_POST['estado'];

if (strlen($identificacion)>0 && strlen($tipoDoc)>0 && strlen($nombres)>0 && strlen($apellidos)>0 && strlen($telefono)>0 && strlen($fechaNacimiento)>0 && strlen($correo)>0 && strlen($rol)>0 && strlen($estado)>0) {
    $objetoConsultas = new consultasAdmin();
    $result = $objetoConsultas->modificarUser($identificacion, $tipoDoc, $nombres, $apellidos, $telefono, $fechaNacimiento, $correo, $rol, $estado);

} else {
    echo '<script>alert("COMPLETE LOS CAMPOS")</script>';
    echo "<script>location.href='../view/admin/homeAdmin.php'</script>";
                
}
 

?>