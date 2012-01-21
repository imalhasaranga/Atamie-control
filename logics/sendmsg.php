<?php

include_once 'Db.php';
include 'newfunctions.php';
session_start();


Function send_sms($phone,$message) {


  $gatewayURL  =   'http://localhost:9501/ozeki?';
  $request = 'login=admin';
  $request .= '&password=abc123';
  $request .= '&action=sendMessage';
  $request .= '&messageType=SMS:TEXT';
  $request .= '&recepient='.urlencode($phone);
  $request .= '&messageData='.urlencode($message);

  $url =  $gatewayURL . $request;

  //Open the URL to send the message
   file($url);


}

function  sendprincimsg($princi1,$msg,$user) {

    $princ = Db::SqlQuery("select* from user_main where user_id= '$princi1' ");
    if($a = mysql_fetch_array($princ)) {
        send_sms($a["ContactNuber"],$msg." by ".$user);
    }
}

$user = "";
$data = Db::SqlQuery("select* from user_main where user_id= '{$_SESSION["user_id"]}' ");
if($out = mysql_fetch_array($data)) {
    $user = $out["Fname"]." ".$out["Lname"];
}

$dirnuber = "";
$data = Db::SqlQuery("select* from director join user_main on director_id = user_id order by director_id asc limit 1");
if($out = mysql_fetch_array($data)) {

    $dirnuber  = $out["ContactNuber"];
}

$type = $_GET["ty"];

if($type == "1") {

    $princi1 = isset ($_POST["pri1"]) ? $_POST["pri1"] : "r" ;
    $princi2 = isset ($_POST["pri2"]) ? $_POST["pri2"] : "r" ;
    $princi3 = isset ($_POST["pri3"]) ? $_POST["pri3"] : "r" ;

    $title = $_POST["title1"];
    $text = $_POST["text1"];
    $message = $title."-".$text;

    if($princi1 != "r") {

        sendprincimsg($princi1,$message,$user);

    }if

    ($princi2 != "r") {
        sendprincimsg($princi2,$message,$user);

    }if

    ($princi3 != "r") {

        sendprincimsg($princi3,$message,$user);
    }

}else if($type == "2") {



    $dir = isset ($_POST["dir2"]) ? $_POST["dir2"] : "r" ;

    $title = $_POST["title1"];
    $text = $_POST["text1"];
    $teacher = $_POST["teacher"];
    $message = $title."-".$text;
    if($dir == "true") {

        send_sms($dirnuber,$message." by ".$user);

    }if

    ($teacher != "0") {

        $princ = Db::SqlQuery("select* from user_main where user_id= '$teacher' ");
        if($a = mysql_fetch_array($princ)) {
            send_sms($a["ContactNuber"],$message." by ".$user);
        }
    }


}else if($type == "3") {

    $who = $_POST["who"];
    $princi = isset ($_POST["dir2"]) ? $_POST["dir2"] : "r" ;
    $dir = isset($_POST["dir1"]) ? $_POST["dir1"] : "r";
    $title = $_POST["title1"];
    $text = $_POST["text1"];
    $message = $title."-".$text;
    if($princi == "true") {


        $data = Db::SqlQuery("select* from principal join user_main on principal_id = user_id where branch_id = (select branch_id from user_main where user_id ='{$_SESSION["user_id"]}' )");
        if($out = mysql_fetch_array($data)) {

            $principal  = $out["ContactNuber"];
            send_sms($principal,$message." by ".$user);
        }


    }if

    ($dir == "true") {

        send_sms($dirnuber,$message." by ".$user);
    }

}

redirect("../profile.php")

?>
