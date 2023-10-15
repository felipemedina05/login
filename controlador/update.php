<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    extract($_POST);
    require_once($_SERVER["DOCUMENT_ROOT"] . './modelo/conexion.php');

    $Photo !== "" && $mysqli->query("UPDATE usuarios SET Photo = '$Photo' WHERE Email = '$Email'");
    $Nombre !== "" && $mysqli->query("UPDATE usuarios SET Nombre = '$Nombre' WHERE Email = '$Email'"); 
    $Bio !== "" && $mysqli->query("UPDATE usuarios SET Bio = '$Bio' WHERE Email = '$Email'");
    $Phone !== "" && $mysqli->query("UPDATE usuarios SET Phone = '$Phone' WHERE Email = '$Email'");
    $Email !== "" && $mysqli->query("UPDATE usuarios SET Email = '$Email' WHERE Email = '$Email'");
    if($Contrasena !== ""){
        $hash =password_hash($Contrasena, PASSWORD_DEFAULT); 
        $mysqli->query("UPDATE usuarios SET Contrasena = '$hash' WHERE Email = '$Email'");
    };
    header("Location:/vista/infPersonal.php");
   
}  else{
    echo "no esta ingresando desde POST";
}

?>