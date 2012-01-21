<?php
session_start();
include_once 'newfunctions.php';
include_once 'Db.php';

$itemid= $_POST["itemid"];
$userid= $_SESSION["userid"];

Db::SqlQuery("insert into user_bysproduct(Userloginid,ProductsproId) values('{$userid}' , '{$itemid}')");
redirect("/ComputerShopn/CompletProduct.php?itmid={$itemid}");



?>
