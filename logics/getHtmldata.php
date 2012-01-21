<?php

include_once 'Db.php';
include_once 'newfunctions.php';

$princi = Db::SqlQuery("select* from reports where report_id = '{$_GET["id"]}'");
$output = "";
if($dat = mysql_fetch_array($princi)){

    $output = $dat["HtmlBody"];

}

echo $output;

?>
