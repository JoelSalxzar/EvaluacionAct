<?php session_start();

    if(isset($_SESSION['NoCtrl'])) {
        header('location: principal.php');
    }else{
        header('location: login.php');
    }


?>