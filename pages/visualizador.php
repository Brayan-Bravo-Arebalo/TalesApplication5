<?php
session_start();
if (isset($_SESSION["user"])) {
} else {
    header("location:../pages/loginPage.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visualizacion</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>

<body style="background-image: url(../img/fondo1.jpg);">
    <?php

   
    $codigo = $_POST["codigo"];

    
    $codigo1 = $_POST["codigo1"];

    
    $codigo2 = $_POST["codigo2"];

   
    $codigo3 = $_POST["codigo3"];

    ?>
    <div class="container">
        <button id="volver" type="button" class="btn btn-light">volver a la pagina principal</button>

        <div class="justify-content-center align-items-center">
            <iframe src="<?= $codigo . "?autoplay=1" ?>" width="1280" height="720" allow="accelerometer; autoplay=1;" frameborder="0"></iframe>
        </div>

    </div>

    <div id="contenido" class="conatiner">
        <div class="row">

            <div class="col-xxl-4 col-sm-12 col-md-6 col-xl-6">
                <iframe src="<?= $codigo1 ?>" width="420" height="240" allow="accelerometer; autoplay=1;" frameborder="0"></iframe>
            </div>
            <div class="col-xxl-4 col-sm-12 col-md-6 col-xl-6">
                <iframe src="<?= $codigo2  ?>" width="420" height="240" allow="accelerometer; autoplay=1;" frameborder="0"></iframe>
            </div>
            <div class="col-xxl-4 col-sm-12 col-md-6 col-xl-6">
                <iframe src="<?= $codigo3 ?>" width="420" height="240" allow="accelerometer; autoplay=1;" frameborder="0"></iframe>
            </div>

        </div>

    </div>



    <script src="../js/visualizador.js"></script>
</body>

</html>