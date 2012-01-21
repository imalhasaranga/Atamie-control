<?php


include_once 'Db.php';
include_once 'newfunctions.php';
$id = $_GET["id"];

Db::SqlQuery("update user_main set is_active ='1' where user_id = '$id'");



?>
