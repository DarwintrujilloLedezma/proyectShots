<?php

    //enlazamos con las dependencias

    require_once("../model/conexion.php");
    require_once("../model/consultasAdmin.php");
    

    if (isset($_GET['id_producto'])) {
        $id_producto= $_GET['id_producto'];
        $objetoConsultas = new consultasAdmin();
        $result = $objetoConsultas->eliminarProducto($id_producto);
        
    }



?>