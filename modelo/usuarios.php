<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . "./conexion.php");

function all ()
{
    global $mysqli ;
    $respuesta = $mysqli->query("SELECT * FROM  usuarios");
    $data = $respuesta->fetch_all(MYSQLI_ASSOC);

    return $data ;

}