<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        include '../services/session.php';
        session_start();
        echo '<h1>Bienvenido '.$_SESSION['email'].'</h1>';
        echo '<a href="../services/logout_proc.php">Cerrar Sesión</a>';
    ?>
    <h3>Home</h3>
</body>
</html>