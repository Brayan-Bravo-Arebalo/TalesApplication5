<?php

include "llamarVideosModel.php";


$valores = buscar();
if (!empty($valores)) {
    $mostrarValores = $valores;
    
    
    die();
} else {
 echo "error";
    die();
}
