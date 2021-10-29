<?php
    include '../eliminarVideo/eliminarVideoModel.php';
    
    $id = $_POST["idEliminar"];
    
    if(!empty($id)){
        
        $eliminada = eliminar($id);
        
        
        if ($eliminada > 0){
            echo 'alert("eliminado con exito");';
            die();
        } else {
            echo 'alert("error al eliminar");';
            
            die();
              
        }
    } else {
        echo 'alert("error al eliminar");';
        die();
    }  
?>