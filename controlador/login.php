<?php

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    require_once($_SERVER["DOCUMENT_ROOT"] . '../vista/registro.php');
    

    extract($_POST);

    $response = $mysqli->query("SELECT * FROM usuarios WHERE email = '$email' AND contrasena = '$contrasena'");

  

 if ($response->num_rows === 1) {
        session_start();
        $_SESSION["user"] = $response->fetch_assoc();
        header("Location:/vista/infPersonal.php");
    } else {
        echo '<script>alert("contraseña errada.");</script>';
        
        } 


}else{
    echo "no esta ingresando desde POST";
}