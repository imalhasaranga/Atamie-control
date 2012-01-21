<?php
session_start();
include_once 'Db.php';
include_once 'newfunctions.php';

$item  = Secure_mysql($_POST["item"]);
$qtyhaving = Secure_mysql($_POST["qty"]);
$itemType = Secure_mysql($_POST["itemtype"]);
$priceofone = Secure_mysql($_POST["price11"]);
$prodescription = Secure_mysql($_POST["productdesctiption"]);
//$iamge = Secure_mysql($_POST["prodimg"]);

$imagename = "defaultproduct.gif";

if (($_FILES["prodimg"]["type"] == "image/gif")|| ($_FILES["prodimg"]["type"] == "image/jpeg")|| ($_FILES["prodimg"]["type"] == "image/pjpeg")) {

        $imagename =  $_FILES["prodimg"]["name"] = date("Y-m-d").$_SESSION["email"].$_FILES["prodimg"]["name"] ;
        move_uploaded_file($_FILES["prodimg"]["tmp_name"],realpath("/wamp/www/ComputerShopn/images/productImages")."/".$imagename);
}

$added = date("Y-m-d");
$userlogid = $_SESSION["userid"];

Db::SqlQuery("insert into
    products(proname,qtyhaving,image,description,added,userlogid,itemType,price)
    values('{$item}','{$qtyhaving}','{$imagename}','{$prodescription}','{$added}','{$userlogid}','{$itemType}','{$priceofone}')
    ");


Db::close();

 redirect("/ComputerShopn/index.php");

?>
