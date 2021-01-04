<?php session_start();

    if(isset($_SESSION['NoCtrl'])) {
        header('location: index.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $NoCtrl = $_POST['NoCtrl'];
        $clave = $_POST['clave'];
        $clave2 = $_POST['clave2'];
        
        $clave = hash('sha512', $clave);
        $clave2 = hash('sha512', $clave2);
        
        $error = '';
        
        if (empty($correo) or empty($usuario) or empty($clave) or empty($clave2)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=login_tuto', 'root', '12345');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM login WHERE NoCtrl = :NoCtrl LIMIT 1');
            $statement->execute(array(':NoCtrl' => $NoCtrl));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i>Este usuario ya existe</i>';
            }
            
            if ($clave != $clave2){
                $error .= '<i> Las contraseñas no coinciden</i>';
            }
            
            
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO login (id, correo, usuario,NoCtrl, clave) VALUES (null, :correo, :usuario, :NoCtrl, :clave)');
            $statement->execute(array(
                
                ':correo' => $correo,
                ':usuario' => $usuario,
                ':NoCtrl' => $NoCtrl,
                ':clave' => $clave
                
            ));
            
            $error .= '<i style="color: green;">Usuario registrado exitosamente</i>';
        }
    }


    require 'frontend/register-vista.php';

?>