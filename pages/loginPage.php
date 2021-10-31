<?php
    session_start();
    if(isset($_SESSION["user"])){
      header("location:../pages/cerrarSesion.php");
    } else {

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>


<body style="background-image: url(../img/cuento.jpg);">
    <div class=" m-0 vh-100 row justify-content-center align-items-center ">

        <div class="bg-dark bg-opacity-25 text-white col-md-5 justify-content-center align-items-center">

            <br><br>
            <form class="text-center" action="../controllerAndModel/login/loginController.php" method="POST">
            <div class="mb-3">
                  <label for="email" class="form-label">Correo</label>
                  <input type="email" id="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password"  name="password" class="form-control" id="password">
                  
                </div>
                <button onclick="login()" class="btn btn-primary">Iniciar Sesión</button>
                <div hidden>
                  <button id="btnLogin" type="submit">login</button>
                  <input type="password2"  name="password2" class="form-control" id="password2">

                </div>
              </form>

              <br><br>
        </div>
    </div>

    <script src="../js/md5.js"></script>
    <script src="../js/login.js"></script>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>


</html>