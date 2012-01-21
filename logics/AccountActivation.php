<?php
include_once 'newfunctions.php';
include_once 'Db.php';


$email = Secure_mysql($_GET["email"]);
$pass = Secure_mysql($_GET["pass"]);

Db::SqlQuery("update login set isActive='1'
               where email ='{$email}' && pass = '{$pass}'
               ");

Db::close();
redirect("/ComputerShopn/index.php");


?>
