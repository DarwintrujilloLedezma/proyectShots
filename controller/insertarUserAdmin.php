<?php

// Enlazamos las dependencias necesarias conexion a la base de datos
//y las consultas que realizará el insertar en la tabla
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
$clave =$_POST['identificacion'];
$rol =$_POST['rol'];
$estado =$_POST['estado'];

//validamos que los campos esten completos
//if (strlen($identificacion)>0 && strlen($tipoDoc)>0 && strlen($nombres)>0 && strlen($apellidos)>0 && strlen($telefono)>0 && strlen($fechaNacimiento)>0 && strlen($correo)>0 && strlen($clave)>0  && strlen($rol)>0 && strlen($estado)>0) {
    if(strlen($identificacion)>6 && strlen($tipoDoc)>0 && !is_numeric($nombres) && !preg_match("/[0-9]/",($nombres)) && !is_numeric($apellidos) && !preg_match("/[0-9]/",($apellidos)) && strlen($telefono)>0 && strlen($fechaNacimiento)>0 && strlen($correo)>0 && strlen($clave)>6 && strlen($rol)>0 && strlen($estado)>0){
     
    //confirmamos que las claves concuerden
   
        //encriptamos la clave
        $passmd= md5($clave);
        
        //convertimos la clase consultasE de modelo, en un objeto
        $objetoConsultas = new consultasAdmin();

        //enviamos los datos ala funcion registrar User perteneciente a la clase consultasE
        $result = $objetoConsultas->registrarUser($identificacion,$tipoDoc,$nombres,$apellidos,$telefono,$fechaNacimiento,$correo,$passmd,$rol,$estado);

    

}else{
    echo '<script>alert("Por favor, complete los campos correctamente para registrarse")</script>';
    echo "<script>location.href='../view/admin/registrarUser.php'</script>";
}

?>