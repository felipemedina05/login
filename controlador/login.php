<?php

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
    require_once($_SERVER["DOCUMENT_ROOT"] . '../modelo/conexion.php');
    
    extract($_POST);
    $response = $mysqli->query("SELECT * FROM usuarios WHERE Email = '$email';");

    if ($response->num_rows === 1) {
        $datos = $response->fetch_assoc();
        
        if(password_verify($contrasena, $datos["Contrasena"])){
            session_start();
            $_SESSION["user"] = $datos;
            header("Location: /vista/infPersonal.php");
        }else {
            echo "contraseña errada";
        }
        
    } else {
        echo '<script>alert("contraseña errada.");</script>';
      } 
   
}  else{
    echo "no esta ingresando desde POST";
}

?>