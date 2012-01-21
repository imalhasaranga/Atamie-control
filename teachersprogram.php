<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <link rel="SHORTCUT ICON" href="http://oheon.dev.conkurent/templates/business/17/favicon.ico" type="image/x-icon" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <meta name="description" content=" business solution" />
        <meta name="keywords" content="web, development, solution" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="scripts/jscriptvali1.js"></script>
        <script type="text/javascript" src="scripts/JQUERY/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/JQUERY/s3Slider.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#slider1').s3Slider({
                    timeOut: 4000
                });
            });
        </script>
        <title>Atami control Panel</title>
        <style type="text/css">
            #apDiv1 {
                position:absolute;
                left:648px;
                top:639px;
                width:301px;
                height:267px;
                z-index:1;
            }


            #slider1 {
                width: 1000px; /* important to be same as image width */
                height: 350px; /* important to be same as image height */
                position: relative; /* important */
                overflow: hidden; /* important */
            }

            #slider1Content {
                width: 720px; /* important to be same as image width or wider */
                position: absolute;
                top: 0;
                margin-left: 0;
            }
            .slider1Image {
                float: left;
                position: relative;
                display: none;
            }
            .slider1Image span {
                position: absolute;
                font: 10px/15px Arial, Helvetica, sans-serif;
                padding: 10px 13px;
                width: 694px;
                background-color: #000;
                filter: alpha(opacity=70);
                -moz-opacity: 0.7;
                -khtml-opacity: 0.7;
                opacity: 0.7;
                color: #fff;
                display: none;
            }
            .clear {
                clear: both;
            }
            .slider1Image span strong {
                font-size: 14px;
            }
            .left {
                top: 0;
                left: 0;
                width: 200px !important;
                height: 340px;
            }
            .right {
                right: 0;
                bottom: 0;
                width: 190px !important;
                height: 320px;
            }
            ul { list-style-type: none;}

            #branch2 {
                position:absolute;
                left:561px;
                top:788px;
                width:433px;
                height:126px;
                z-index:10;
            }
            #Branches {
	position:absolute;
	left:585px;
	top:657px;
	width:177px;
	height:151px;
	z-index:11;
            }
            #Branches1 {
	position:absolute;
	left:964px;
	top:673px;
	width:182px;
	height:151px;
	z-index:11;
            }
            #Branches2 {
	position:absolute;
	left:619px;
	top:1039px;
	width:165px;
	height:151px;
	z-index:11;
            }
            #Branches3 {
	position:absolute;
	left:851px;
	top:976px;
	width:201px;
	height:151px;
	z-index:11;
            }
        </style>
    </head>
    <body>

        <div id="branch2" style="vertical-align:middle; font-size:36px; font-weight: bold; color:#7F7F7F; font-family: Arial, Helvetica, sans-serif;" align="center">
            <p>Teachers Programs</p>
            <p>Time Talbe</p>
        </div>
        <?php
        include_once 'logics/Db.php';
        include_once 'logics/newfunctions.php';

        $count = 0;
        $page = "createprogrmtim.php";
        $result = Db::SqlQuery("SELECT* FROM  branch ORDER BY branch_id ASC LIMIT 4");
        while($out = mysql_fetch_array($result)) {
            ++$count;
            if($count ==1 ) {
                ?>
        <div id="Branches"  style="vertical-align:middle; font-size: 20px; color: #963;"><p><a href="<?php echo $page."?id=".$out["branch_id"]."&name=".$out["branch_name"];  ?>" style="color:white"><?php  echo $out["branch_name"] ?></a></p></div>
                <?php
            }else if($count ==2 ) {

                ?>
<div id="Branches1"  style="vertical-align:middle; font-size: 20px; color: #963;"><p><a href="<?php echo $page."?id=".$out["branch_id"]."&name=".$out["branch_name"];  ?>" style="color:white"><?php  echo $out["branch_name"] ?></a></p></div>
                <?php
            }else if($count ==3 ) {

                ?>
<div id="Branches2"  style="vertical-align:middle; font-size: 20px; color: #963;"><p><a href="<?php echo $page."?id=".$out["branch_id"]."&name=".$out["branch_name"];  ?>" style="color:white"><?php  echo $out["branch_name"] ?></a></p></div>
                <?php
            }else if($count ==4 ) {

                ?>
<div id="Branches3"  style="vertical-align:middle; font-size: 20px; color: #963;"><p><a href="<?php echo $page."?id=".$out["branch_id"]."&name=".$out["branch_name"];  ?>" style="color:white"><?php  echo $out["branch_name"] ?></a></p></div>
                <?php
            }

        }
        ?>





<div id="container">
            <!--<div id="blue_line"></div>-->
            <div id="header">




                <?php include("Parts/top.php");
                include_once 'logics/newfunctions.php';




                if($status1 != "loged") {

                    redirect("index.php");
                }

                ?>

            </div>
            <div id="slider1" style=" margin-left: -39px;">
                <?php include("Parts/header.php") ?>
            </div>

            <div class="menu">

                <?php include("Parts/topmenubar.php") ?>
                <div class="cler"></div>
            </div>

            <div class="news">
                <div class="imgblock"><center><span>Actions You can Perform</span></center></div>
                <?php include("Parts/left.php") ?>

                <div class="imgblock">
                    <div class="imgblock"><span>Options</span></div>
                </div>
                <!--[if IE 7]> <link rel="stylesheet" type="text/css" href="css/ie7.css" /> <![endif]-->
                <div class="categories">
                    <ul>
                        <li><a href="editprofile.php" title="Consectetuer">Edit Profile</a></li>
                        <li><a  onclick="showpaswordcchange()" style="cursor:pointer">Change password</a></li>
                    </ul>
                <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>



            <div class="content">

                <?php

                // $userdetails = Db::SqlQuery("select* from user_main where user_id='{$_SESSION["user_id"]}'");
                //   if($valsk = mysql_fetch_array($userdetails)) {
                ?>



                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt; Time Tables</div>
                <div class="text">
                    <p>Select the Branch Below to continue,</p>
                    <p><br/>
                        <img src="images/swirly_circles1.jpg" width="623" height="577" /></p>
                </div>
                <div class="text"> </div>

                <?php// } ?>
            </div>


            <div id="footer">
                <!--<ul>-->
                <p><!--</ul>-->  </p>
            </div>
            <div id="copyright">


            </div>
        </div>
    </body>
</html>