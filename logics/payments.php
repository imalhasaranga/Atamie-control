<?php

include_once 'Db.php';
include_once 'newfunctions.php';

$branch1 = $_POST["branch"];
$month = $_POST["month"];
$year = $_POST["year"];
$priciid = $_POST["princiid"];
$princiamu = $_POST["priamou"];

$leccount = $_POST["leccount"];

Db::SqlQuery("insert into lecturer_payments(user_id,year,month,amount) values('{$priciid}','{$year}','{$month}','{$princiamu}')");



$gientable = " <table width='100%'  border='0'  cellpadding='0' cellspacing='0'>
                        <tr>
                            <td width='67' height='42'><strong>Lecturers</strong></td>
                            <td width='181'>&nbsp;</td>
                            <td width='116' style='vertical-align:top'>&nbsp;</td>
                            <td width='260' style='vertical-align:top'>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height='42' bgcolor='#D4D4D4' align='center'>image</td>
                            <td bgcolor='#D4D4D4' >&nbsp;Name</td>
                            <td bgcolor='#D4D4D4' align='center'>Joined Date</td>
                            <td bgcolor='#D4D4D4' align='center'>&nbsp;Amount</td>
                        </tr>";

  

for($i= 1; $i <= $leccount; ++$i) {
    $uid = $_POST["lec".$i];
    $uamu = $_POST["am".$i];
    Db::SqlQuery("insert into lecturer_payments(user_id,year,month,amount) values('{$uid}','{$year}','{$month}','{$uamu}')");


      $lectu = Db::SqlQuery("select* from user_main join lecturer on user_id = lecturer_id join branch on branch.branch_id = lecturer.branch_id  where user_main.user_id = '{$uid}' ");
      $tablerpart = "";
      if($valsk2 = mysql_fetch_array($lectu)) {


             $tablerpart = "<tr>
                            <td height='44' style='border-bottom:dashed; border-bottom-width:thin; vertical-align:middle' align='center'><img src='".$valsk2["image"]."' width='44' height='35' alt='propic' /></td>
                            <td  style='border-bottom:dashed; border-bottom-width:thin'>&nbsp;".$valsk2["Fname"]." ".$valsk2["Lname"]."</td>
                            <td align='center' style='border-bottom:dashed; border-bottom-width:thin'>".$valsk2["joinddate"]."</td>
                            <td align='center' style='border-bottom:dashed; border-bottom-width:thin'>&nbsp;".$uamu."</td>
                        </tr>";

      }
      $gientable .= $tablerpart;
}


$gientable .= "<tr>
                  <td height='17'>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td style='vertical-align:top'>&nbsp;</td>
                  <td style='vertical-align:top'>&nbsp;</td>
               </tr>
            </table>";





$principal = "";
 $princi = Db::SqlQuery("select* from user_main join principal on user_id = principal_id join branch on branch.branch_id = principal.branch_id where user_main.user_id ='$priciid'    ");
 if($valsk1 = mysql_fetch_array($princi)) {

     $principal = "<table width='100%'  border='0'  cellpadding='0' cellspacing='0'>
                        <tr>
                            <td width='71' height='37' ><strong>Principal</strong></td>
                            <td width='178'>&nbsp;</td>
                            <td width='115' style='vertical-align:top'>&nbsp;</td>
                            <td width='121' style='vertical-align:top'>&nbsp;</td>
                            <td width='139' style='vertical-align:top'>&nbsp;</td>
                        </tr>
                        <tr>
                            <td height='41' bgcolor='#D4D4D4' align='center'>image</td>
                            <td bgcolor='#D4D4D4' >Name</td>
                            <td bgcolor='#D4D4D4' align='center' >Joined Date</td>
                            <td bgcolor='#D4D4D4'  align='center'>&nbsp;email</td>
                            <td bgcolor='#D4D4D4'  align='center'>Amount</td>
                        </tr>
                        <tr>
                            <td height='17'>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style='vertical-align:top'></td>
                            <td style='vertical-align:top'></td>
                            <td style='vertical-align:top'></td>
                        </tr>
                        <tr >
                            <td height='44' style='vertical-align:middle; border-bottom:dashed; border-bottom-width:thin;' align='center'><img src='".$valsk1["image"]."' width='60' height='50' alt='propic' /></td>
                            <td style='vertical-align:middle; border-bottom:dashed; border-bottom-width:thin'  >&nbsp;".$valsk1["Fname"]." ".$valsk1["Lname"]."</td>
                            <td style='vertical-align:middle; border-bottom:dashed; border-bottom-width:thin' align='center'>".$valsk1["joinddate"]."</td>
                            <td style='vertical-align:middle; border-bottom:dashed; border-bottom-width:thin' align='center'>".$valsk1["email"]."</td>
                            <td style='vertical-align:middle; border-bottom:dashed; border-bottom-width:thin' align='center'>".$princiamu."</td>
                        </tr>
                            <tr>
                            <td height='17'>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td s>&nbsp;</td>
                        </tr>
                    </table>";

 }
 
session_start();

 $date = date("Y-m-d");

$title = "Payment Report Released :".$year."-".$month;
$descript = "Atamie International school Payment Reports has Released been on ".$date." and they are now available for all Atamie staff and princiapls";
$gienttable = Secure_mysql($principal.$gientable);

Db::SqlQuery("insert into reports(Director_id,branch_id,title,description,is_active,date,HtmlBody)
    values('{$_SESSION["user_id"]}','$branch1','$title','$descript','1','{$date}','$gienttable' )");


//
redirect("../payments.php?sved=1&a=1");

?>
