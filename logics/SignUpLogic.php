<?php
include_once 'Db.php';
include_once 'newfunctions.php';
session_start();

$user = $_GET["user"];
$pass = $_GET["pass"];
$date = $_GET["date"];
$branch = "";
$result = Db::SqlQuery("SELECT branch_id FROM principal WHERE Principal_id = '{$_SESSION["user_id"]}' ");
if($da = mysql_fetch_array($result)){

    $branch = $da["branch_id"];
}

Db::SqlQuery("insert into user_main(is_active,type,username,password,joinddate) values('1','3','$user','$pass','$date') ");
$var = mysql_insert_id();
Db::SqlQuery("insert into lecturer(Lecturer_id,branch_id) values('$var','$branch')");

?>