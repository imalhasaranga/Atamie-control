<?php


session_start();
include_once 'newfunctions.php';
include_once 'Db.php';

$password = $_SESSION["password"];
$usrid = $_SESSION["user_id"];
$pass = $_POST["pass"];
$pass1 = $_POST["pass1"];



if( $password == $pass && $pass1 != ''){

    Db::SqlQuery("update user_main set password = '{$pass1}' where user_id = '{$usrid}'");

redirect("../profile.php?abc=a");
}else{
    
   redirect("../profile.php?abc=b");
}






?>
