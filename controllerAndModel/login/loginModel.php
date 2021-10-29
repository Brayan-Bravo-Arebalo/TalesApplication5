<?php
    function connection($userEmail,$pass){
        try{
            include"../config.php";
            $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=". $port, $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn ->prepare("SELECT ID_USARIOS FROM usuarios WHERE USUARIO = :user AND PASS = :pass");
            
            $stmt ->bindParam(":user",$userEmail);
            $stmt ->bindParam(":pass",$pass);
            
            $stmt ->execute();
            
            
            $value = $stmt->fetch(PDO::FETCH_OBJ);
            $conn= null;
            return $value->ID_USUARIOS;


        } catch (Exception $e) {
            echo "conexion fallida: " . $e->getMessage();
        }



    }






?>