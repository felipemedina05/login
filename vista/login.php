<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Login</title>
</head>

<body>

    <div class="contenedor">

        <head class="titulo"> <img src="../assets/devchallenges.svg" alt="logo"> </head>
        <div>
            <p class="login">Login</p>
        </div>
        <form class="form" action="/controlador/login.php" method="POST">
            <label for="email" class="material-symbols-outlined" > mail </label>
            <input type="text" name="email" require placeholder="Email" >
            <br>
            <label for="password" class="material-symbols-outlined" > lock </label>
            <input type="password" name="contrasena" require placeholder="Password" >
            <br>
            <button type="submit">Login</button>
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
            <p>Don’t have an account yet? <a href="../vista/registro.php"> Register</a></p>
        </div>
        
    </div>
    <footer class="footer">
        <div><p>created by Andres</p>
        <p>devChallenges.io</p></div>
    </footer>