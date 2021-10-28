<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body style="background-image: url(../img/img1.jpg);">
    <div id="menu">
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="../pages/homePage.php">Tales Application</a>
                <button class="navbar-toggler bg-danger" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="nav-link active" href="../controllerAndModel/llamarVideos/llamarCuentosController.php">Cuentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../controllerAndModel/llamarVideos/llamarCancionesController.php">canciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../pages/loginPage.php">Series</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../pages/loginPage.php">Aprendizaaje</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../pages/loginPage.php">ingles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../pages/loginPage.php">Actividades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../pages/loginPage.php">Cerrar Sesion</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div id="contenido" class="container-fluid text-white">

        <div class="row bg-dark bg-opacity-50">


            <?php
            $jsondatos = $_POST["objeto"];
            $j = json_decode($jsondatos, true);

            $i = 0;
            foreach ($j["videos"] as $key => $value) {
                if ($value["categoria"] == "serie") {

                    echo '<div class="col-xxl-3 col-xl-4 col-lg-6 col-lg-9 col-md-12" >';

                    echo '<div id="nombre' . $i . '" class="text-white" style="height: 50px;" >' . $value["nombre"] . '</div>';
                    echo '<iframe id=iframe' . $i . ' allowfullscreen src="' . $value["codigo"] . '" width="420" height="240" frameborder="0"></iframe>';
                    echo '<button id="btnVisualizar' . $i . '"  type="button" class="btn btn-primary">Inciar Visualizacion</button>';
                    echo '<button id="btnEliminar' . $i . '" type="button" class="btn btn-primary">Eliminar</button>';


                    echo '</div>';
                };


                $i++;
            }
            ?>



        </div>
    </div>

    <div hidden id="paraVisualizar">

            <form action="../pages/visualizador.php" method="POST">
                <input type="text" id="nombrefForm2" name="nombre">
                <input type="text" id="codigoForm2" name="codigo">
                <input type="text" id="plataformaForm2" name="plataforma">
                <button id="btnFantasma2" type="submit"></button>

            </form>

        </div>

    <script src="../js/funciones.js"></script>
    <script src="../js/SelecionaContenido.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


</body>

</html>