<?php
include_once 'newfunctions.php';
session_start();
session_destroy();
redirect("../index.php");

?>
