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



    <title>personal info</title>
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
    
    
    <div class=" titulo">
                    <h1>Personal info</h1>
                    <p>Basic info, like your name and photo</p>

            </div>
            <div class="contenedor">

                <div class="profile" id="descripcion">

                    <p> Profile <br> Some info may be visible to other people</p>
                    <br>
                    <a href="/vista/edicion.php"><button>Edit</button></a>
                </div>

                <form class="info">
                    <div class="profile">
                        <label for="Photo">Photo</label>
                        <img src="<?= $Photo?>" alt="perfil">
                    </div>
                    <div class="profile">
                        <label for="Nombre">Nombre</label>
                        <input type="text" name="Nombre" disabled value="<?= $Nombre?>">
                    </div>
                    <div class="profile">
                        <label for="Bio">Bio</label>
                        <input type="text" name="Bio" disabled value="<?= $Bio?>">
                    </div>
                    <div class="profile">
                        <label for="Phone">Phone</label>
                        <input type="text" name="Phone" disabled value="<?= $Phone?>">
                    </div>
                    <div class="profile">
                        <label for="Email">Email</label>
                        <input type="text" name="Email" disabled value="<?= $Email?>">
                    </div>
                    <div class="profile">
                        <label for="Password">Password</label>
                        <input type="text" name="Contrasena" disabled placeholder="********">
                    </div>


                </form>
            </div>


        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

</body>

</html>