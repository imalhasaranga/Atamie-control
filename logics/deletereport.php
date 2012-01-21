<?php



include_once 'Db.php';
include_once 'newfunctions.php';
$id = $_GET["id"];
$title = $_GET["title"];

if(strpos($title, "Released")){

    $ary = explode(":",$title);


        $datav = trim($ary[1])."";

        $ary1 = explode("-",$datav);


            
            Db::SqlQuery("Delete from lecturer_payments where year = '$ary1[0]' && month = '$ary1[1]' ");


    

}

    Db::SqlQuery("Delete from reports where report_id = '$id'");

redirect("../reports.php");


?>
