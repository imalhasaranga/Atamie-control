<?php

include_once 'Db.php';
include_once 'newfunctions.php';

$branchid = $_POST["branchid"];
$textarea = trim($_POST["resources"]);
$grade = $_POST["grade"];

$count = 0;
$out = Db::SqlQuery("select* from resources where branch_id = '$branchid' && grade = '$grade'");
if(mysql_fetch_array($out)) {

    $count = 1;
}



if($count == 1) {

  
Db::SqlQuery("delete from resources where branch_id = '$branchid' && grade = '$grade'");

}





$ary = explode("\n",$textarea);
    for($i = 0; $i < sizeof($ary); ++$i) {

        $datav = trim($ary[$i])."";

        $ary1 = explode("-",$datav);
          

            Db::SqlQuery("insert into resources(branch_id,resoname,qty,grade) values('$branchid','$ary1[0]','$ary1[1]','$grade') ");

    }

    redirect("../classresourses.php")


?>
