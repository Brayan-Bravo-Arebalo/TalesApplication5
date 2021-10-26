<?php 
    function buscar(){
        try{
            include "../controllerAndModel/config.php";
            $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; port=". $port, $username, $password);
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn->prepare("SELECT * FROM VIDEOS");
            
            
            $stmt ->execute();
            $userData = array();
 
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
             
             $userData['AllUsers'][] = $row;
            }
            
            
            $value = json_encode($userData);
            
            $conn= null;
           
            return $value;
        } catch (Exception $e) {
            echo "conexion fallida: " . $e->getMessage();
        }


    }