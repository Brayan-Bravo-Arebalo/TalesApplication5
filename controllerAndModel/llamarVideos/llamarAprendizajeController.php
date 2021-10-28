<?php

include "llamarVideosModel.php";


$valores = buscar();
if (!empty($valores)) {
    $mostrarValores = json_decode($valores);
    echo "<div hidden >" . $valores . " </div>";
    echo '<div hidden>';
    echo '<form action="../../pages/aprendizaje.php" method="POST">
            <input type="text" id="objeto" name="objeto">
            <button id="btnFantasma2" type="submit"></button>
        </form>';
    echo '</div>';






    echo '<script src="../../js/mostrarVideos.js"></script>';



    die();
} else {
    echo "error";
    die();
}
