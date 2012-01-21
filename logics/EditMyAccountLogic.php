<?php
include_once 'newfunctions.php';
include_once 'Db.php';
session_start();


$fname = Secure_mysql($_POST["fname"]);
$mname = Secure_mysql($_POST["Mname"]);
$lname = Secure_mysql($_POST["Lname"]);
$birthday1 = Secure_mysql($_POST["DoB"]);
$sex = Secure_mysql($_POST["sex"]);
$tel = Secure_mysql($_POST["ContactNuber"]);
$Address = Secure_mysql($_POST["Address"]);
$email = Secure_mysql($_POST["email"]);

$imgstat = Secure_mysql($_POST["imgback"]);
$imagename = "";

if (($_FILES["imagefile"]["type"] == "image/gif")|| ($_FILES["imagefile"]["type"] == "image/jpeg")|| ($_FILES["imagefile"]["type"] == "image/pjpeg")) {

    $imagename =  $_FILES["imagefile"]["name"] = date("Y-m-d").$_SESSION["email"].$_FILES["imagefile"]["name"] ;
    move_uploaded_file($_FILES["imagefile"]["tmp_name"],realpath("/wamp/www/Atamie-control/images/prifileimages")."/".$imagename);
    $imagename = "images/prifileimages/".$imagename;
}else {
    $imagename = $imgstat;
}


$type = $_POST["type"];
$isactive = $type == "3" ? "3" : "1";
$sex = $sex == "Male" ? "1" :"3";

Db::SqlQuery("update user_main set Fname ='{$fname}',
               Lname = '{$lname}',
               Mname = '{$mname}',
               Address = '{$Address}',
               sex = '{$sex}',
               DoB = '{$birthday1}',
               ContactNuber = '{$tel}',
               is_active = '{$isactive}',
               email = '{$email}',
               image = '{$imagename}'
               where user_id = '{$_SESSION["user_id"]}'
        ");


if($type == "1") {
    $achivements = Secure_mysql($_POST["achivements"]);
    Db::SqlQuery("update director set
               achivements = '{$achivements}'
               where Director_id = '{$_SESSION["user_id"]}'
            ");
}else if($type == "2") {
    $description = Secure_mysql($_POST["description"]);

    Db::SqlQuery("update principal set
               description = '{$description}'
               where principal_id = '{$_SESSION["user_id"]}'
            ");

}else if($type == "3") {
    $subject_teaches = Secure_mysql($_POST["subject_teaches"]);
    $qualification = Secure_mysql($_POST["qualification"]);
    $experience = Secure_mysql($_POST["experience"]);

    Db::SqlQuery("update lecturer set
               subject_teaches = '{$subject_teaches}',
               qualification = '{$qualification}',
               experience = '{$experience}'

               where lecturer_id = '{$_SESSION["user_id"]}'

            ");

session_start();
session_destroy();
redirect("../index.php");
}


redirect("../profile.php");
?>
