<?php
    function guardarVideo($nombre, $codigo, $plataforma){
        try{
            include "../config.php";
            $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=". $port, $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn ->prepare("INSERT INTO VIDEOS (NOMBRE, CODIGO, PLATAFORMA) VALUE (:nombre , :codigo , :plataforma)");
            
            $stmt ->bindParam(":nombre",$nombre);
            $stmt ->bindParam(":codigo",$codigo);
            $stmt ->bindParam(":plataforma",$plataforma);
            
            $stmt ->execute();
            
            $value = $stmt->fetch(PDO::FETCH_OBJ);
            
            $conn= null;
            
            return $value;


        } catch (Exception $e) {
            echo "conexion fallida: " . $e->getMessage();
        }

    }
