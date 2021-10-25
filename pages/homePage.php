<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body style="background-image: url(../img/img1.jpg);">
    <div id="menu">
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Tales Application</a>
                <button class="navbar-toggler bg-danger" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">
                                option
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">option</a></li>
                                <li><a class="dropdown-item" href="#">option</a></li>
                                <li><a class="dropdown-item" href="#">option</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown">
                                Cuenta
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Configurar</a></li>
                                <li><a class="dropdown-item" href="#">cerrar sesion</a></li>

                            </ul>
                        </li>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div id="contenido" class="container-fluid text-white">

        <div class="row">
            <div class="col-1 bg-dark bg-opacity-75">

                <div class="row  align-items-center justify-content-center">
                    <div class="row">
                        <h5>Lista de reproduciones</h5>
                    </div>
                    <div class="row ">
                        <div class="btn-group-vertical">
                            <button type="button" class="btn btn-warning">lista1</button>
                            <button type="button" class="btn btn-info">lista2</button>
                            <button type="button" class="btn btn-light">lista3</button>

                        </div>
                        <button type="button" class="btn btn-danger">+</button>
                    </div>

                </div>

            </div>

            <div class="col-11 bg-dark bg-opacity-50">
                <br>
                <br>
                <div class="row border">


                    <div class="col-9">
                        <h5>Sector de busqueda</h5>
                        <form class="d-flex" method="POST" action="homePage.php" g>
                            <input id="buscar" name="busqueda" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button id="buscador" class="btn btn-outline-success" type="submit">buscar</button>
                        </form>




                        <div id="busquedaYoutube" class="row">

                            <?php

                            //error_reporting(0);
                            $api_youtube = "AIzaSyCWH11RXJ_WdQkEl6k_q9lrf7RII-0r2-Q";

                            $url_youtube = "https://www.googleapis.com/youtube/v3/search";

                            if ($_POST["busqueda"] == "") {
                                $busqueda = "canciones infantiles";
                            } else {
                                $busqueda = $_POST["busqueda"];
                            }

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

                            $i = 1;

                            if (strlen($busqueda) > 2) {

                                foreach ($phpObj["items"] as $key => $value) {

                                    $url_video = 'https://www.youtube.com/embed/' . $value["id"]["videoId"];
                                    echo '<br><br>';
                                    echo '<div id="busqueda' . $i . '" class="col-4">';
                                    echo    '<h6 id="nombre' . $i . '">' . $value["snippet"]["title"] . ' </h6>';

                                    echo    '<div class="btn-group" role="group" aria-label="Basic example">
                                            <button id="visualizar' . $i . '"  type="button" class="btn btn-primary">Inciar Visualizacion</button>
                                            <button id="guardar' . $i . '" type="button" class="btn btn-primary">Guardar</button>
                                        </div>';

                                    echo    '<iframe id=iframe' . $i . ' allowfullscreen src="' . $url_video . '" width="420" height="240" frameborder="0"></iframe>';
                                    echo '</div>';
                                    $i++;
                                }
                            }



                            ?>

                        </div>




                    </div> <br>


                    <div class="col-3">
                        <div>
                            <h5>Buscar video a traves de link</h5>
                        </div>
                        <form class="d-flex">
                            <input id="link" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button id="buscadorContenido" class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Inciar Visualizacion</button>
                            <button type="button" class="btn btn-primary">Guardar</button>

                        </div>
                        <iframe id="iframe1" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe>
                    </div>

                </div>
                <br>
                <div class="row border">
                    <div>Ya Guardado <button type="button" class="btn btn-primary">Todos El Contenido</button> </div>
                    <div class="col-3 border"><iframe id="iframeGuardado1" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe></iframe></div>
                    <div class="col-3 border"><iframe id="iframeGuardado2" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe></iframe></div>
                    <div class="col-3 border"><iframe id="iframeGuardado3" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe></iframe></div>
                    <div class="col-3 border"><iframe id="iframeGuardado4" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe></iframe></div>
                    <div class="col-3 border"><iframe id="iframeGuardado5" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe></iframe></div>
                    <div class="col-3 border"><iframe id="iframeGuardado6" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe></iframe></div>
                </div>
            </div>
        </div>

    </div>

    <template id="iframes">
        <iframe id="iframe1" allowfullscreen src="" width="420" height="240" frameborder="0"></iframe>
    </template>

    <div hidden>
        <form action="../controllerAndModel/guardarVideo/GuardarVideoController.php" method="POST">
            <input type="text" id="nombrefForm" name="nombre">
            <input type="text" id="codigoForm" name="codigo">
            <input type="text" id="plataformaForm" name="plataforma">
            <button id="btnFantasma" type="submit"></button>

        </form>


    </div>
                         <!--   
    <div hidden>
        
        <form action="" method="POST">
            <input type="text" id="nombrefForm2" name="nombre">
            <input type="text" id="codigoForm2" name="codigo">
            <input type="text" id="plataformaForm2" name="plataforma">
            <button id="btnFantasma2" type="submit"></button>

        </form>
        


    </div>
                        -->









    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/homePage.js"></script>

</body>

</html>