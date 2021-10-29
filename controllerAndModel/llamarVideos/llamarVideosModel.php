<?php 
    function buscar(){
        try{
            include "../config.php";
            $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=". $port, $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn->prepare("SELECT * FROM videos");
            
            
            $stmt ->execute();
            $userData = array();
 
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
             
             $userData['videos'][] = $row;
            }
            
            
            $value = json_encode($userData);
            
            $conn= null;
           
            return $value;
        } catch (Exception $e) {
            echo "conexion fallida: " . $e->getMessage();
        }


    }