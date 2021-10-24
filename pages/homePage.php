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
                    <div class="row"><h5>Lista de reproduciones</h5></div>
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
                <div class="row align-items-center justify-content-center">
                    <div>recoemndaciones</div>
                    <div class="col-3 border"> <iframe src="" frameborder="0"></iframe></div>
                    <div class="col-3 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-3 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-3 border"><iframe src="" frameborder="0"></iframe></div>
                </div>
                <br>
                <div class="row border">
                    <div>busqueda de contendo </div> <br>
                    <div class="col-3 border"> <iframe src="" frameborder="0"></iframe></div>
                    <div class="col-3 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-3 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-3 border"><iframe src="" frameborder="0"></iframe></div>
                </div>
                <br>
                <div class="row border">
                    <div>Ya Guardado <button type="button" class="btn btn-primary">Todos El Contenido</button> </div>
                    <div class="col-2 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-2 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-2 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-2 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-2 border"><iframe src="" frameborder="0"></iframe></div>
                    <div class="col-2 border"><iframe src="" frameborder="0"></iframe></div>
                </div>
            </div>
        </div>








    </div>










    <script src="../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>