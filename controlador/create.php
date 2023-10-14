<?php
if ($_SERVER["REQUEST_METHOD"]=== "POST"){
    extract($_POST);
     require_once($_SERVER["DOCUMENT_ROOT"] . '../modelo/conexion.php'); 
    
    try {
        if (isset($email, $contrasena)&& $email !== "" && $contrasena !== ""){
            $response = $mysqli->query("INSERT INTO usuarios(Email, Contrasena) VALUES ('$email','$contrasena');");
            
            header("Location:/vista/infPersonal.php");
                     
        } else {
            header("Location:/vista/registro.php");
        }
    } catch (mysqli_sql_exception $e) {
        if ($mysqli->errno === 1062){
            echo "el correo ya esta en usuo" ;
        }else {
            echo "error : " . $e->getMessage();
        }
    }

 } else {
    echo "ingresa desde POST";
}

 
