<?php

include "loginModel.php";

$userEmail = $_POST['email'];
$password = $_POST['password2'];

if(!empty($userEmail) && !empty($password)){
    $id = connection($userEmail, $password);
        
        if ($id > 0){
            
            
            session_start();
            $_SESSION["user"]=$userEmail;
            $_SESSION["ID"]=$id;
            
            
            header("location:../../pages/homePage.php"); 
           
        } else {
            header("location:../../pages/loginPage.php"); 
            die();
        }


} else {
    die();
    header("location:../../pages/loginPage.php");

}
