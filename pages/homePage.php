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
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body style="background-image: url(../img/fondo3.jpg);">
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
                                <a class="nav-link active" href="../controllerAndModel/llamarVideos/llamarCancionesController.php">Canciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../controllerAndModel/llamarVideos/llamarSeriesController.php">Series</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../controllerAndModel/llamarVideos/llamarAprendizajeController.php">Aprendizaje</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../controllerAndModel/llamarVideos/llamarInglesController.php">Ingl??s</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../controllerAndModel/llamarVideos/llamarActividadesController.php">Actividades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="../pages/cerrarSesion.php">Cerrar Sesion</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid border bg-dark bg-opacity-50">
        <div class=" row border text-white text-center">
            <div class="row">
                <h2>Sector de busqueda</h2>
                <form class="d-flex" method="POST" action="homePage.php">
                    <input id="buscar" name="busqueda" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button id="buscador" class="btn btn-outline-success" type="submit">buscar</button>
                </form>

            </div>
            <div id="contenido" class="row">

                <?php
                
                error_reporting(0);
                $api_youtube = "AIzaSyCWH11RXJ_WdQkEl6k_q9lrf7RII-0r2-Q";

                $url_youtube = "https://www.googleapis.com/youtube/v3/search";
                /*
                if ($_POST["busqueda"] == "") {
                 $busqueda = "canciones infantiles";
                } else {
                $busqueda = $_POST["busqueda"];
                }*/

                $busqueda = $_POST["busqueda"];

                $busqueda = strtr($busqueda, " ", "+");

                $regionCode = "Cl";


                $type = "video";

                $part = "id,snippet";

                $url = $url_youtube;
                $url .= "?key=" . $api_youtube;
                $url .= "&part=" . $part;
                $url .= "&order=relevance";
                $url .= "&q=" . $busqueda;
                $url .= "&regioncode=" . $regionCode;
                $url .= "&type=" . $type;

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);

                $phpObj = json_decode($result, true);

                $i = 0;

                if (strlen($busqueda) > 2) {

                    foreach ($phpObj["items"] as $key => $value) {

                        $url_video = 'https://www.youtube.com/embed/' . $value["id"]["videoId"];
                        
                        echo '<div id="busqueda' . $i . '" class="col-xxl-4 col-md-12 col-xl-6">';
                        echo    '<h6 id="nombre' . $i . '" style="height: 50px;" >' . $value["snippet"]["title"] . ' </h6>';

                        echo    '<iframe id=iframe' . $i . ' allowfullscreen src="' . $url_video . '" width="420" height="240" frameborder="0"></iframe>';
                        echo '<div class="col-12" >';
                        echo    '<nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="container-fluid">
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            
                                        </div>
                                    </div>
                                </nav>';
                        echo '</div>';        

                        echo '<nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav">
                          <button id="btnVisualizar' . $i . '"  type="button" class="btn btn-primary">Inciar Visualizacion</button>
                          <li id="btnGuardar' . $i . '" class="nav-item dropdown btn btn-primary">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Guardar
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a id="btnGuardarCuentos' . $i . '" class="dropdown-item" href="#">cuento</a></li>
                                  <li><a id="btnGuardarCancion' . $i . '" class="dropdown-item" href="#">cancion</a></li>
                                  <li><a id="btnGuardarSeries' . $i . '" class="dropdown-item" href="#">Series</a></li>
                                  <li><a id="btnGuardarAprendisaje' . $i . '" class="dropdown-item" href="#">Aprendizaje</a></li>
                                  <li><a id="btnGuardarIngles' . $i . '" class="dropdown-item" href="#">Ingles</a></li>
                                  <li><a id="btnGuardarActividades' . $i . '" class="dropdown-item" href="#">Actividades</a></li>
                              </ul>
                          </li>
                      </ul>
                          </div>
                        </div>
                      </nav>';

                        
                        echo '</div>';
                        $i++;
                    }
                }
                ?>

            </div>
            <div class="row ">
                <div>
                    <form action="../controllerAndModel/llamarVideos/llamarVideosController.php" method="POST">

                        <button type="submit" class="btn btn-primary">ir a contenido guardado</button>

                    </form>


                </div>
            </div>

        </div>

    </div>


    <!--

    <div class="container-fluid text-white">

        <div class="row">

            <div style="height: 100px;"></div>

            <div class="col-11 bg-dark bg-opacity-50">
                <br>
                <br>
                <div class="row">


                    <div class="col-9">
                        <h5>Sector de busqueda</h5>
                        <form class="d-flex" method="POST" action="homePage.php">
                            <input id="buscar" name="busqueda" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button id="buscador" class="btn btn-outline-success" type="submit">buscar</button>
                        </form>




                        <div id="contenido" class="row">

                            <?php
                            error_reporting(0);
                            $api_youtube = "AIzaSyCWH11RXJ_WdQkEl6k_q9lrf7RII-0r2-Q";

                            $url_youtube = "https://www.googleapis.com/youtube/v3/search";
                            /*
                            if ($_POST["busqueda"] == "") {
                                $busqueda = "canciones infantiles";
                            } else {
                                $busqueda = $_POST["busqueda"];
                            }*/

                            $busqueda = $_POST["busqueda"];

                            $busqueda = strtr($busqueda, " ", "+");

                            $regionCode = "Cl";


                            $type = "video";

                            $part = "id,snippet";

                            $url = $url_youtube;
                            $url .= "?key=" . $api_youtube;
                            $url .= "&part=" . $part;
                            $url .= "&order=relevance";
                            $url .= "&q=" . $busqueda;
                            $url .= "&regioncode=" . $regionCode;
                            $url .= "&type=" . $type;

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_HEADER, false);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            $result = curl_exec($ch);

                            $phpObj = json_decode($result, true);

                            $i = 0;

                            if (strlen($busqueda) > 2) {

                                foreach ($phpObj["items"] as $key => $value) {

                                    $url_video = 'https://www.youtube.com/embed/' . $value["id"]["videoId"];
                                    echo '<br><br>';
                                    echo '<div id="busqueda' . $i . '" class="col-4">';
                                    echo    '<h6 id="nombre' . $i . '" style="height: 50px;" >' . $value["snippet"]["title"] . ' </h6>';

                                    echo     '<nav class="navbar navbar-expand-lg navbar-light">
                                                <div class="container-fluid">
                                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                        <ul class="navbar-nav">
                                                            <button id="btnVisualizar' . $i . '"  type="button" class="btn btn-primary">Inciar Visualizacion</button>
                                                            <li id="btnGuardar' . $i . '" class="nav-item dropdown btn btn-primary">
                                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Guardar
                                                                </a>
                                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                                    <li><a id="btnGuardarCuentos' . $i . '" class="dropdown-item" href="#">cuento</a></li>
                                                                    <li><a id="btnGuardarCancion' . $i . '" class="dropdown-item" href="#">cancion</a></li>
                                                                    <li><a id="btnGuardarSeries' . $i . '" class="dropdown-item" href="#">Series</a></li>
                                                                    <li><a id="btnGuardarAprendisaje' . $i . '" class="dropdown-item" href="#">Aprendizaje</a></li>
                                                                    <li><a id="btnGuardarIngles' . $i . '" class="dropdown-item" href="#">Ingles</a></li>
                                                                    <li><a id="btnGuardarActividades' . $i . '" class="dropdown-item" href="#">Actividades</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>';


                                    echo    '<iframe id=iframe' . $i . ' allowfullscreen src="' . $url_video . '" width="420" height="240" frameborder="0"></iframe>';
                                    echo '</div>';
                                    $i++;
                                }
                            }
                            ?>

                        </div>




                    </div> <br>

                </div>
                <br>
                
            </div>



        </div> -->

    <template id="iframes">
        <iframe id="iframe1" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe>
    </template>

    <div hidden id="paraGuardar">
        <form action="../controllerAndModel/guardarVideo/GuardarVideoController.php" method="POST">
            <input type="text" id="nombrefForm" name="nombre">
            <input type="text" id="codigoForm" name="codigo">
            <input type="text" id="plataformaForm" name="plataforma">
            <input type="text" id="clasificacion" name="clasificacion">
            <button id="btnFantasma" type="submit"></button>

        </form>

    </div>



    <div hidden id="paraVisualizar">

        <form action="../pages/visualizador.php" method="POST">
            <input type="text" id="nombrefForm2" name="nombre">
            <input type="text" id="codigoForm2" name="codigo">
            <input type="text" id="plataformaForm2" name="plataforma">

            <input type="text" id="nombrefForm3" name="nombre1">
            <input type="text" id="codigoForm3" name="codigo1">
            <input type="text" id="plataformaForm3" name="plataforma1">

            <input type="text" id="nombrefForm4" name="nombre2">
            <input type="text" id="codigoForm4" name="codigo2">
            <input type="text" id="plataformaForm4" name="plataforma2">

            <input type="text" id="nombrefForm5" name="nombre3">
            <input type="text" id="codigoForm5" name="codigo3">
            <input type="text" id="plataformaForm5" name="plataforma3">
            <button id="btnFantasma2" type="submit"></button>

        </form>

    </div>







                            
    <script src="../js/funciones.js"></script>
    <script src="../js/SelecionaContenido.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>


</body>

</html>