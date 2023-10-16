<?php
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    extract($_POST);
     require_once($_SERVER["DOCUMENT_ROOT"] . '../modelo/conexion.php'); 
    
    try {
        if (isset($email, $contrasena)&& $email !== "" && $contrasena !== ""){
            $hash = password_hash($contrasena, PASSWORD_DEFAULT);
            $response = $mysqli->query("INSERT INTO usuarios(Email, Contrasena) VALUES ('$email','$hash');");
            
            if ($response) {
                $res = $mysqli->query("SELECT * FROM usuarios WHERE  Email = '$email';");
                session_start();
                $_SESSION["user"]= $res->fetch_assoc();
                header("Location:/vista/infPersonal.php");
            }else {
                echo "creacin fallida";
            }
            
                     
        } else {
            echo "error en registro " ;/* header("Location:/vista/registro.php"); */
        }
    } catch (mysqli_sql_exception $e) {
        if ($mysqli->errno === 1062){
            
            echo"el correo ya esta en uso";
      
            
        }else {
            echo "error : " . $e->getMessage();
        }
    }

 } else {
    echo "ingresa desde POST";
}

 
