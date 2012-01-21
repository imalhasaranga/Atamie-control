<?php

include_once 'Db.php';
include_once 'newfunctions.php';
//create session or getting excisting value
session_start();


// secure_mysql function is written to escape from mysql injecsion
// and other hacks

$username1 = Secure_mysql($_POST["username"]);
$pass = Secure_mysql($_POST["password"]);


$resultarry = Db::SqlQuery("select* from user_main where username = '{$username1}' && password = '{$pass}'");

if($resultarry = mysql_fetch_array($resultarry)){

    if($resultarry["is_active"] == "1"){
            $_SESSION["user_id"] = $resultarry["user_id"];
            $_SESSION["username"] = $resultarry["username"];
            $_SESSION["password"] = $resultarry["password"];
            $_SESSION["email"] = $resultarry["email"];
            $_SESSION["status"] = "loged";
            $_SESSION["type"] = $resultarry["type"];
            $_SESSION["name"] = $resultarry["Fname"]." ".$resultarry["Lname"];
            redirect("../profile.php");

    }else{

            $_SESSION["status"] = "Account is in a Deactivated state";
            redirect("../index.php");
    }

}else{
            $_SESSION["status"] = "sorry login failed, Please check login details";
            redirect("../index.php");

}


Db::close();

?>
