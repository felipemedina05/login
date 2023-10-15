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


    <title>Edit personal info</title>
</head>

<body>

    <header><img src="<?= $Photo?>" alt="perfil">
        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <a href="#">My Profile</a>
                <a href="#">Group Chat</a>
                <a href="/controlador/logout.php"">logout</a>
        </div>
    </div>
   </header>
    <img src=" <?= $Photo?>" alt="perfil">
                    <div class="dropdown">
                        <button class="dropbtn">Menu</button>
                        <div class="dropdown-content">
                            <a href="#">My Profile</a>
                            <a href="#">Group Chat</a>
                            <a href="/controlador/logout.php"">logout</a>
        </div>
    </div>
   
    <a href=" /vista/infPersonal.php">
                                < Back</a>
                                    <div>
                                        <h1>Change Info</h1>
                                        <p>Changes will be reflected to every services</p>

                                        <form action="/controlador/update.php" method="post"
                                            enctype="multipart/form-data">

                                            <img src="<?= $Photo?>" alt="perfil">
                                            <input type="file" name="Photo">
                                            <br>
                                            <label for="Nombre">Nombre</label>
                                            <input type="text" name="Nombre" value="<?= $Nombre?>" require>
                                            <br>
                                            <label for="Bio">Bio</label>
                                            <input type="text" name="Bio" value="<?= $Bio?>" require>
                                            <br>
                                            <label for="Phone">Phone</label>
                                            <input type="text" name="Phone" value="<?= $Phone?>" require>
                                            <br>
                                            <label for="Email">Email</label>
                                            <input type="text" name="Email" value="<?= $Email?>" require>
                                            <br>
                                            <label for="Password">Password</label>
                                            <input type="text" name="Contrasena" value="">
                                            <br>

                                            <button type="submit">Save</button>
                                        </form>



                                    </div>