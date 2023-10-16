<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/login.css">
        <link rel="stylesheet" href="/style/registro.css">

    <title>Registro</title>
</head>


<body>
    <div class="contenedor">

        <head> <img src="../assets/devchallenges.svg" alt="logo"> </head>
        <div class="descripcion">
            <p class="titulo">Join thousands of learners from around the world</p>
            <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
        </div>

        
            
        <form action="/controlador/create.php" method="POST">
        <label for="email" class="material-symbols-outlined" >  </label>
            <input type="email" name="email" require placeholder="Email">
            <br>
            <label for="contrasena" class="material-symbols-outlined"></label>
            <input type="password" name="contrasena" require placeholder="Password">
            <br>
            <button type="submit">Submit</button>
        </form>

        <div class="alternative">
            <p> or continue with these social profile</p>
            <br>
            <div>
                <img src="../assets/Google.svg" alt="Gmail">
                <img src="../assets/Facebook.svg" alt="Facebook">
                <img src="../assets/Twitter.svg" alt="Twiter">
                <img src="../assets/Gihub.svg" alt="Github">
            </div>
            <p>Adready a member?<a href="../vista/login.php"> Login</a></p>
        </div>
    </div>
    <p>created by Andres</p><p>devChallenges.io</p>


</body>

</html>