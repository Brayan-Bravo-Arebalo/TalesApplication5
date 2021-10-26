

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visualizacion</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>

<body style="background-image: url(../img/img1.jpg);">
    <?php
    
    $nombre = $_POST["nombre"];
    $codigo = $_POST["codigo"];
    
    ?>
    <div class="container">
        <button id="volver" type="button" class="btn btn-light">volver a la pagina principal</button>

        <div class="justify-content-center align-items-center">
            <iframe src="<?=$codigo."?autoplay=1"?>" width="1280" height="720" allow="accelerometer; autoplay=1;"  frameborder="0"></iframe>
        </div>

    </div>



    <script src="../js/visualizador.js"></script>
</body>

</html>