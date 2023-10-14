<?php 
require_once ('../modelo/conexion.php');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Registro</title>
</head>


<body>
    <div>

        <head> <img src="../assets/devchallenges-light.svg" alt="logo"> </head>
        <div>
            <p>Join thousands of learners from around the world</p>
            <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
        </div>
        <form action="/controlador/create.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" require>
            <br>
            <label for="contrasena">Password</label>
            <input type="password" name="contrasena" require>
            <br>
            <button type="submit">Submit</button>
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
        <p>Adready a member? <a href="../vista/login.php">Login</a></p>
    </div>
    <p>created by Andres</p><p>devChallenges.io</p>


    <!-- <form action="/controlador/create.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 -->
</body>

</html>