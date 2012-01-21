<?php

include_once 'Db.php';
include_once 'newfunctions.php';
session_start();

$branch = $_POST["branch"];
$year = $_POST["year"];
$Tname = $_POST["tname"];

Db::SqlQuery("SET FOREIGN_KEY_CHECKS = 0");

$gienttable = "<table width='100%'  border='1' cellspacing='0' align='center'>
                            <tr align='center'>
                                <td width='20%' height='41' bgcolor='#FCE2D8'>Saterday</td>
                                <td width='20%' bgcolor='#FCE2D8' >Sunday</td>
                            </tr>";


"
                            <tr >
                                <td  align='center' bgcolor='#FEF3DA' style='vertical-align:middle' >

                                    <p ></p>
                                    <p ></p>
                                </td>
                                 <td  align='center' bgcolor='#FEF3DA' style='vertical-align:middle' >

                                    <p ></p>
                                    <p ></p>

                                </td>
                            </tr>

                           </table>";




for($i = 1; $i<= 6; ++$i) {



    $midledata = "<tr >";


    for($j =1; $j<=2;  ++$j) {

        $subject = "";
        $teacher = "";
        $day = "";
        


        switch($j) {
            case 1:
                $subject = $_POST["motsub".$i];
                
                $day = "Saturday";
                $teaname = $_POST["motna".$i];
                break;
            case 2:
                $day = "Sunday";
                $subject = $_POST["tutsub".$i];
                
                $teaname = $_POST["tutna".$i];
                break;
           

        }
 
        
        
   $midledata .= "<td  align='center' bgcolor='#FEF3DA' style='vertical-align:middle' >

                                   <p >".$subject."</p>
                                <p >".$teaname."</p>
                                </td>";

        $teacher = $teacher == "" ? "0" : $teacher;

        Db::SqlQuery("insert into trainingprogram(branch_id,Director_id,year,subject,program,Day)

        values('$branch','{$_SESSION["user_id"]}','$year','$subject','$Tname','$day')");



    }

    $midledata .=" </tr >";
$gienttable .= $midledata;


}

$gienttable .= "</table>";

$date = date("Y-m-d");

$title = "Teachers Program Time Table ";
$descript = "Teachers Program Time Table has Released been on ".$date;
$gienttable = Secure_mysql($gienttable);

Db::SqlQuery("insert into reports(Director_id,branch_id,title,description,is_active,date,HtmlBody)
    values('{$_SESSION["user_id"]}','$branch','$title','$descript','1','{$date}','$gienttable' )");




redirect("../createprogrmtim.php?sved=1&id=1&name=Wattala");

?>
