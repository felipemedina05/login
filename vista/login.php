<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<div>

        <head> <img src="../assets/devchallenges-light.svg" alt="logo"> </head>
        <div>
            <p>Login</p>
        </div>
        <form action="/controlador/login.php" method="POST">
            <label for="email">Email</label>
            <input type="text" name="email" >
            <br>
            <label for="contrasena">Password</label>
            <input type="password" name="contrasena" >
            <br>
            <button type="submit">Login</button>
        </form>

        <div>
          <p> or continue with these social profile</p>
          <br>
          <div>
            <img src="../assets/Google.svg" alt="Gmail">
            <img src="../assets/Facebook.svg" alt="Facebook">
            <img src="../assets/Twitter.svg" alt="Twiter">
            <img src="../assets/Gihub.svg" alt="Github">
          </div>

        </div>
        <p>Don’t have an account yet? <a href="../vista/registro.php"> Register</a></p>
    </div>
    <p>created by Andres</p><p>devChallenges.io</p>
    
</body>
</html>