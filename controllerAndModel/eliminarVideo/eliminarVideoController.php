<?php
    include '../eliminarVideo/eliminarVideoModel.php';
    
    $id = $_POST["idEliminar"];
    
    if(!empty($id)){
        
        $eliminada = eliminar($id);
        
        
        if ($eliminada > 0){
            
            echo '<script> let a = alert("eliminado con exito");
                if(a){
                    window.location.href = "../../pages/homePage.php";
                } else {
                    window.location.href = "../../pages/homePage.php";
                }
             </script>';
            die();
        } else {
            echo '<script> alert("error al eliminar"); </script>';
            header("location:../../pages/homePage.php"); 
            
            die();
              
        }
    } else {
        echo '<script> alert("error al eliminar"); </script>';
            header("location:../../pages/homePage.php"); 
        die();
    }
