<?php

include_once 'Db.php';
include_once 'newfunctions.php';
session_start();

$branch = $_POST["branch"];
$year = $_POST["year"];
$grade = $_POST["grade"];
$Tname = $_POST["tname"];

Db::SqlQuery("SET FOREIGN_KEY_CHECKS = 0");





$gienttable = "<table width='100%' height='263' border='1' cellspacing='1' align='center'>
                        <tr align='center'>
                            <td width='20%' height='41' bgcolor='#EBFFAE'>Mon</td>
                            <td width='20%' bgcolor='#EBFFAE' >Tue</td>
                            <td width='20%' bgcolor='#EBFFAE'>Wed</td>
                            <td width='20%' bgcolor='#EBFFAE' >Thu</td>
                            <td width='20%' bgcolor='#EBFFAE'>Fri</td>
                        </tr>";




for($i = 1; $i<= 6; ++$i) {
    $timedu = "";
    if($i == 1) {

        $timedu = "7:30am - 8:15am";
    }else if($i == 2) {

        $timedu = "8:15am - 9:00am";
    }else if($i == 3) {

        $timedu = "10:30am - 11:15am";
    }else if($i == 4) {

        $timedu = "11:15am - 12:00am";
    }else if($i == 5) {

        $timedu = "12:00am - 12:45pm";
    }else if($i == 6) {

        $timedu = "12:45pm - 1:30pm";
    }



    $midledata = " <tr >";


    for($j =1; $j<=5;  ++$j) {

        $subject = "";
        $teacher = "";
        $day = "";
        $teaname = "";


        switch($j) {
            case 1:
                $subject = $_POST["motsub".$i];
                $teacher = $_POST["motid".$i];
                $day = "Monday";
                $teaname = $_POST["motna".$i];
                break;
            case 2:
                $day = "Tuesday";
                $subject = $_POST["tutsub".$i];
                $teacher = $_POST["tutid".$i];
                $teaname = $_POST["tutna".$i];
                break;
            case 3:
                $day = "Wednesday";
                $subject = $_POST["wetsub".$i];
                $teacher = $_POST["wetid".$i];
                $teaname = $_POST["wetna".$i];
                break;
            case 4:
                $day = "Thursday";
                $subject = $_POST["thtsub".$i];
                $teacher = $_POST["thtid".$i];
                $teaname = $_POST["thtna".$i];
                break;
            case 5:
                $day = "Friday";
                $subject = $_POST["frtsub".$i];
                $teacher = $_POST["frtid".$i];
                $teaname = $_POST["frtna".$i];

                break;

        }

        $midledata .= "<td  style='vertical-align:middle' align='center'  >
                                <p >".$subject."</p>
                                <p >".$teaname."</p>
                            </td>";




        $teacher = $teacher == "" ? "0" : $teacher;

        Db::SqlQuery("insert into school_schdules(branch_id,Director_id,year,lecturar,subject,Timedure,Titlename,Day)

        values('$branch','{$_SESSION["user_id"]}','$year','$teacher','$subject','$timedu','$Tname','$day')");



    }

    $midledata .=" </tr >";
    $gienttable .= $midledata;
    if($i == 3) {
        $gienttable .= "<tr >
                                <td height='36' colspan='5' align='center' bgcolor='#EBFFAE' style='font-size:16px'>Interval</td>

                            </tr>";

        
    }

}

$gienttable .= "</table>";

$date = date("Y-m-d");

$title = "Atamie school Time Table for Year ".$year." Grade ".$grade;
$descript = "Atamie International school Time Table for Year ".$year." has been Released on".$date;
$gienttable = Secure_mysql($gienttable);

Db::SqlQuery("insert into reports(Director_id,branch_id,title,description,is_active,date,HtmlBody)
    values('{$_SESSION["user_id"]}','$branch','$title','$descript','1','{$date}','$gienttable' )");



redirect("../createtimetable.php?sved=1&id=1&name=Wattala");

?>
