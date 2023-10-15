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

    <title>Edit personal info</title>
</head>

<body>
    <ul>
        <li><button>My Profile</button></li>
        <li><button>Group Chat</button></li>
        <li><a href="/controlador/logout.php"><button>logout</button></a></li>
    </ul>
    <a href="/vista/infPersonal.php">  < Back</a>
    <div>
        <h1>Change Info</h1>
        <p>Changes will be reflected to every services</p>
        
        <form action="/controlador/update.php" method="post">
          <label for="Photo">Photo</label>
          <input type="text" name="Photo" value="<?= $Photo?>">
          <br>
          <label for="Nombre">Nombre</label>
          <input type="text" name="Nombre" value="<?= $Nombre?>">
          <br>
          <label for="Bio">Bio</label>
          <input type="text" name="Bio" value="<?= $Bio?>">
          <br>
          <label for="Phone">Phone</label>
          <input type="text" name="Phone" value="<?= $Phone?>">
          <br>
          <label for="Email">Email</label>
          <input type="text" name="Email" value="<?= $Email?>">
          <br>
          <label for="Password">Password</label>
          <input type="text" name="Contrasena" value="">
          <br>

          <button type="submit">Save</button>
        </form>



    </div>