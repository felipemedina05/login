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


    <title>personal info</title>
</head>

<body>

    <img src="<?= $Photo?>" alt="perfil">
    <div class="dropdown">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="#">My Profile</a>
            <a href="#">Group Chat</a>
            <a href="/controlador/logout.php"">logout</a>
        </div>
    </div>
    
    <div>
        <h1>Personal info</h1>
        <p>Basic info, like your name and photo</p>
        <div>

            <label for=" Profile"></label>
                <input type="text" value="Profile">
                <p>Some info may be visible to other people</p> <a href="/vista/edicion.php"><button>Edit</button></a>
        </div>

        <form>
            <label for="Photo">Photo</label>
            <img src="<?= $Photo?>" alt="perfil">
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
            <input type="text" name="Contrasena" placeholder="********">
            <br>


        </form>



    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>