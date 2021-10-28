<?php
include "GuardarVideoModel.php";

$nombre=$_POST["nombre"];
$codigo = $_POST["codigo"];
$plataforma = $_POST["plataforma"];
$categoria = $_POST["clasificacion"];

if (!empty($nombre) && !empty($codigo) && !empty($plataforma) && !empty($categoria)) {
   

    $id_guardar = guardarVideo($nombre, $codigo, $plataforma, $categoria);
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
