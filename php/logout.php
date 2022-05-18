<?php
    // Iniciar sesion con el usuario
    session_start();
    unset($_SESSION['usuario']);
    // Destruye la session
    session_destroy();
    // Dirige al login
    header("location: login.php");
?>