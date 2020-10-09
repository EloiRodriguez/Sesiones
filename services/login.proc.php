<?php
    include "connection.php";
    if (isset($_POST['email'])) {
        //echo md5($_POST['password']);
        $email=$_POST['email'];
        $passwd=md5($_POST['password']);
        $query='SELECT * FROM tbl_user WHERE email="'.$email.'" AND passwd="'.$passwd.'"';
        echo $query;
        $result=mysqli_query($conn,$query);
        //el usuario existe y su password es correcto
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            session_start();
            $_SESSION['email'] = $row['email'];
            $_SESSION['id_user'] = $row['id_user'];
            header('Location:../view/home.php');
        }else{
            header('Location:../index.php');
        }

    }else{
        header('Location:../index.php');
    }
?>