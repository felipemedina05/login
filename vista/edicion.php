<?php
session_start();
if (!isset($_SESSION["user"])){
 echo "logueate por favor";
   header("Location: /index.php");
  die();
}
?>

<?php


require_once("../controlador/usuarios.php");
$usuario = getByID($_SESSION['user']['id']);

 extract($usuario);
  


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="/style/menu.css">
    <link rel="stylesheet" type="text/css" href="/style/infPersonal.css">
    <link rel="stylesheet" type="text/css" href="/style/edicion.css">


    <title>Edit personal info</title>
</head>

<body>

<header>
        <div><img src="../assets/devchallenges.svg" alt="logo"></div>
        <div><img src="<?= $Photo?>" alt="perfil" class="menuP">
        <div class="dropdown">
            <input class="dropbtn" class="menul" disabled value="<?= $Nombre?> v"></input>
            <div class="dropdown-content">
                <a href="#">My Profile</a>
                <a href="#">Group Chat</a>
                <a id="logout" href="/controlador/logout.php"">logout</a>
        </div></div>
        
    </div>
</header>
   
    <a href=" /vista/infPersonal.php">
                    < Back</a>

                        

                        <div class="contenedor">
                        <div class="titulo2">
                            <h3>Change Info</h3>
                            <p>Changes will be reflected to every services</p>
                        </div>
                            <form action="/controlador/update.php" method="post" enctype="multipart/form-data">
                                <div class="edit">
                                <img src="<?= $Photo?>" alt="perfil">
                                <input  id="file" type="file" name="Photo">
                                </div>
                                <div class="edit">
                                <label for="Nombre" >Nombre</label>
                                <input type="text"  name="Nombre" value="<?= $Nombre?>" require>
                                </div>
                                <div class="edit">
                                <label for="Bio" >Bio</label>
                                <input type="text" id="bio" name="Bio" value="<?= $Bio?>" require>
                                </div>
                                <div class="edit">
                                <label for="Phone" >Phone</label>
                                <input type="text" name="Phone" value="<?= $Phone?>" require>
                                </div>
                                <div class="edit">
                                <label for="Email" >Email</label>
                                <input type="text" name="Email" value="<?= $Email?>" require>
                                </div>
                                <div class="edit">
                                <label for="Password" >Password</label>
                                <input type="text"  name="Contrasena" value="">
                                </div>

                                <button id="save" type="submit">Save</button>
                            </form>



                        </div>