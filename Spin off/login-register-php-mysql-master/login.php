<?php session_start();

    if(isset($_SESSION['NoCtrl'])) {
        header('location: index.php');
    }

    $error = '';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $NoCtrl = $_POST['NoCtrl'];
        $clave = $_POST['clave'];
        $clave = hash('sha512', $clave);
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=login_tuto', 'root', '12345');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        
        $statement = $conexion->prepare('
        SELECT * FROM login WHERE NoCtrl = :NoCtrl AND clave = :clave'
        );
        
        $statement->execute(array(
            ':NoCtrl' => $NoCtrl,
            ':clave' => $clave
        ));
            
        $resultado = $statement->fetch();
        
        if ($resultado !== false){
            $_SESSION['NoCtrl'] = $NoCtrl;
            header('location: principal.php');
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }
    
require 'frontend/login-vista.php';


?>