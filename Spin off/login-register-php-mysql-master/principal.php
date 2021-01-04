<?php session_start();

    if(isset($_SESSION['NoCtrl'])){
        require 'frontend/principal-vista.php';
    }else{
        header ('location: login.php');
    }
        
?>