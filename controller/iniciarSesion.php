<?php

    // Enlazamos las dependencias necesarias conexion a la base de datos
//y las consultas que realizará el insertar en la tabla
    require_once('../model/conexion.php');
    require_once('../model/validarSesion.php');

    $correo=$_POST['correo'];
    $clave=md5($_POST['clave']);

    $objetoConsultas = new validarSesion();
    $result = $objetoConsultas->iniciarSesion($correo, $clave);




?>