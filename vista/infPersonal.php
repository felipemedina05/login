<?php
session_start();
if (!isset($_SESSION["user"])){
 echo "logueate por favor";
   header("Location: /index.php");
  die();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>personal info</title>
</head>

<body>
    <ul>
        <li><button>My Profile</button></li>
        <li><button>Group Chat</button></li>
        <li><a href="/controlador/logout.php"><button>logout</button></a></li>
    </ul>

    <div>
        <h1>Personal info</h1>
        <p>Basic info, like your name and photo</p>
        <div>
            <p>Profile</p>
            <br>
            <p>Some info may be visible to other people</p> <a href="/controlador/edit.php"><button>Edit</button></a>
            <div>
             <p>photo '$photo'/p>
            </div>

            
        </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>