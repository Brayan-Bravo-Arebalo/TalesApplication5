<?php
include "GuardarVideoModel.php";

$nombre=$_POST["nombre"];
$codigo = $_POST["codigo"];
$plataforma = $_POST["plataforma"];

if (!empty($nombre) && !empty($codigo) && !empty($plataforma)) {
   

    $id_guardar = guardarVideo($nombre, $codigo, $plataforma);
    if ($id_guardar = 1) {
        
        echo "cambio echo";
        header("location:../../pages/homePage.php");
        die();
    } else {
        header("location:../../pages/homePage.php");
        die();
    }
} else {
    header("location:../../pages/homePage.php");
    die();
}
