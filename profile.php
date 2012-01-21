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
       
        </style>
    </head>
<body>
        
        <div id="container">
            <!--<div id="blue_line"></div>-->
      <div id="header">




                <?php include("Parts/top.php");
                include_once 'logics/newfunctions.php';

                if(isset ($_GET["abc"])){

                    if($_GET["abc"] == 'a'){

                    showMessage("Your Password Has changed");

                    }else if($_GET["abc"] == 'b'){

                        showMessage("Sorry either your new password is empty or or Passwords are not matching, Password changeing failled");
                    }


                    

                }


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

                $userdetails = Db::SqlQuery("select* from user_main where user_id='{$_SESSION["user_id"]}'");
                if($valsk = mysql_fetch_array($userdetails)) {
                    ?>



                <div class="textheading" style="font-size:18px;">
                    Welcome <?php $d = $valsk["Fname"]." ".$valsk["Lname"];
    echo "$d"; ?> </div>
                <div class="text"><br/><table width="600"  border="0"  cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="10" height="274">&nbsp;</td>
                      <td width="382"><table width="382" height="278" border="0">
                                    <tr>
                                        <td width="129" height="46">&nbsp;&nbsp;First Name</td>
                                        <td width="243">:&nbsp;<?php echo "{$valsk["Fname"]}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td height="45">&nbsp;&nbsp;Middle Name</td>
                                        <td>:&nbsp;<?php echo "{$valsk["Mname"]}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td height="38">&nbsp;&nbsp;Last Name</td>
                                        <td>:&nbsp;<?php echo "{$valsk["Lname"]}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td height="29">&nbsp;&nbsp;Sex </td>
                                        <td>:&nbsp;<?php $deo =$valsk["sex"] == '1' ? "Male" : "Female"; echo "{$deo}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td height="37" >&nbsp;&nbsp;Date Of Birth </td>
                                        <td >:&nbsp;<?php echo "{$valsk["DoB"]}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td height="29" style="color:#999; font-style:italic; font-size:14px;" colspan="2">Contact Information </td>
                                       
                                    </tr>
                                    <tr>
                                        <td height="38">&nbsp;&nbsp;Contact Number </td>
                                        <td>:&nbsp;<?php echo "{$valsk["ContactNuber"]}"; ?></td>
                                    </tr>
                </table>
</td>
                            <td width="200" style="vertical-align:top"><img src="<?php echo "{$valsk["image"]}"; ?>" width="200" height="222" alt="propic" /></td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="2" style="vertical-align:top"><table width="583"  border="0" style="vertical-align:top; float:left;">
                                    <tr>
                                        <td width="131" height="44" style="vertical-align:top">&nbsp;&nbsp;Address</td>
                                        <td width="442" style="vertical-align:top">:&nbsp;<?php echo "{$valsk["Address"]}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td height="31" style="vertical-align:top">&nbsp;&nbsp;Email</td>
                                        <td style="font-style:italic; vertical-align:top">&nbsp;<?php echo "{$valsk["email"]}" ?></td>
                                    </tr>
                                    <tr>
                                        <td height="43" style="color:#999; font-style:italic; font-size:14px;" colspan="2">About &nbsp;&nbsp;<a href="#"> <?php $d = $valsk["Fname"]." ".$valsk["Lname"]; echo "{$d}";?></a></td>
                                    </tr>

                                        <?php
                                        $v = $valsk["type"];
                                        $v1 ='';
                                        if($v == '1') {

                                            $v1 = "director where Director_id";

                                        }else if($v == '2') {
                                            $v1 = "principal where Principal_id";

                                        }else if($v == '3') {

                                            $v1 = "Lecturer where Lecturer_id";

                                        }
                                        $uother = Db::SqlQuery("select* from ".$v1."='{$_SESSION["user_id"]}'");
                                       
                                        if($uother1 = mysql_fetch_array($uother)) {

        ?>


        <?php if($v == '1') {  ?>
                                    <tr>
                                        <td height="52" style="vertical-align:top">&nbsp;&nbsp;Achievements</td>
                                        <td style="vertical-align:top">:&nbsp;<?php echo "{$uother1["achivements"]}"; ?></td>
                                    </tr>

            <?php } else if($v == '2') {?>

                                    <tr>

                                        <td height="50" style="vertical-align:top">&nbsp;&nbsp;Description </td>
                                        <td style="vertical-align:top">:&nbsp;<?php echo "{$uother1["description"]}"; ?></td>

                                    </tr>

            <?php }else if($v == '3') { ?>
                                    <tr>
                                        <td height="39">&nbsp;&nbsp;Subject(s)</td>
                                        <td>:&nbsp;<?php echo "{$uother1["subject_teaches"]}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td height="45">&nbsp;&nbsp;Qualifications </td>
                                        <td>:&nbsp;<?php echo "{$uother1["qualification"]}"; ?></td>
                                    </tr>
                                    <tr>
                                        <td height="40">&nbsp;&nbsp;Experience</td>
                                        <td>:&nbsp;<?php echo "{$uother1["experience"]}"; ?></td>
                                    </tr>

                                            <?php
            }
                                        }

    ?>
                                </table></td>

                            
                        </tr>
                    </table>
                    
                    <form action="logics/changepassword.php" method="post" >
                    <table width="589" height="95" border="0" cellpadding="0" cellspacing="0" style="visibility:hidden; border-top:dashed; border-top-width:thin" id="passwordp" >
                      <tr>
                            <td width="71" height="41">&nbsp;</td>
            <td width="162" style="vertical-align:bottom"><strong>Current password</strong></td>
                            <td width="170" style="vertical-align:bottom"><input type="password" name="pass" /></td>
                            <td width="186">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="35">&nbsp;</td>
                            <td><strong>New Password</strong></td>
                            <td><input type="password" name="pass1"/></td>
                            <td><input type="submit" value="   Change >> "/></td>
                        </tr>
                        <tr>
                            <td height="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                    </form>
                </div>
                <div class="text"> </div>

    <?php } ?>
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