<?php

    session_start();

    if (!isset($_SESSION['autenticado'])) {
        echo '<script>alert("DEBE INICIAR SESION PARA ACCEDER A ESTA INTERFAZ")</script>';
        echo "<script>location.href='../index.php'</script>";
    }

    if ($_SESSION['rol']!="Administrador") {
        echo '<script>alert("SU ROL NO TIENE ACCESO A ESTA INTERFAZ")</script>';
        echo "<script>location.href='../index.php'</script>";
    }


?>