<?php

    if (isset($_SESSION['email'])) {
        echo '<h1>Bienvenido '.$_SESSION['email'].'</h1>';
        echo '<a href="../services/logout_proc.php">Cerrar Sesión</a>';
    }else{
        header('Location:../index.php');
    }