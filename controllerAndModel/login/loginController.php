<?php

include "loginModel.php";

$userEmail = $_POST['email'];
$password = $_POST['password'];

if(!empty($userEmail) && !empty($password)){
    $pass_md5 = md5("password");
    $id = connection($userEmail, $pass_md5);
        echo $userEmail;
            echo $pass_md5;
        
        if ($id > 0){
            
            session_start();
            $_SESSION["user"]=$userEmail;
            $_SESSION["ID"]=$id;
            
            
            //header("location:../login/loginCorreco.php"); 
        } else {
            //header("location:../login/loginIncorrecto.php"); 
            die();
        }


} else {
    die();
    //agregar header

}