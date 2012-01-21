<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <link rel="SHORTCUT ICON" href="http://oheon.dev.conkurent/templates/business/17/favicon.ico" type="image/x-icon" />
        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <meta name="description" content=" business solution" />
        <meta name="keywords" content="web, development, solution" />

        <script type="text/javascript" src="scripts/jscriptvali1.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" />       
        <link rel="stylesheet" href="Jquery/ui-lightness/jquery-ui-1.8.16.custom.css" type="text/css" />


        <script type="text/javascript" src="scripts/JQUERY/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/JQUERY/s3Slider.js"></script>

        <script type="text/javascript" src="Jquery/js/jquery-ui-1.8.16.custom.min.js"></script>



        <script>
            $(function() {
                $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
            });

        </script>

        <script>
            $(function() {
                // a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
                $( "#dialog:ui-dialog" ).dialog( "destroy" );

                $( "#dialog-confirm" ).dialog({
                    resizable: false,
                    autoOpen: false,
                    width: 600,
                    height:140,
                    modal: true,
                    buttons: {
                        "Yes, Save Details": function() {
                            $( this ).dialog( "close" );
                            document.getElementById("editusr").submit();
                        },
                       "No, Cancel": function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });
            });


            function opendiolo(){

                $('#dialog-confirm').dialog('open');
                return false;
            }
        </script>

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

                if(isset ($_GET["abc"])) {

                    if($_GET["abc"] == 'a') {

                        showMessage("Your Password Has changed");

                    }else if($_GET["abc"] == 'b') {

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
                        <li><a href="#" title="Consectetuer">Edit Profile</a></li>
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



                <div class="textheading" style="font-size:18px;"><?php $d = $valsk["Fname"]." ".$valsk["Lname"];
                        echo "$d"; ?> &gt; Edit Profile</div>
                <div class="text"><br/>
                    <form method="post" enctype="multipart/form-data" action="logics/EditMyAccountLogic.php" id="editusr" >

                        <table width="600"  border="0"  cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="10" height="274">&nbsp;</td>
                                <td width="382"><table width="382" height="278" border="0">
                                        <tr>
                                            <td width="129" height="46">&nbsp;&nbsp;First Name</td>
                                            <td width="243">:&nbsp;<input type="text" name="fname" value="<?php echo "{$valsk["Fname"]}"; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td height="45">&nbsp;&nbsp;Middle Name</td>
                                            <td>:&nbsp;<input type="text" name="Mname" value="<?php echo "{$valsk["Mname"]}"; ?>"/></td>
                                        </tr>
                                        <tr>
                                            <td height="38">&nbsp;&nbsp;Last Name</td>
                                            <td>:&nbsp;<input type="text" name="Lname"  value="<?php echo "{$valsk["Lname"]}"; ?>"/></td>
                                        </tr>
                                        <tr>
                                            <td height="29">&nbsp;&nbsp;Sex </td>
                                            <td>
                                                :&nbsp;<select name="sex">
                                                        <?php  if($valsk["sex"] == 1) { ?>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                            <?php }else { ?>

                                                    <option>Female</option>
                                                    <option>Male</option>
                                                            <?php } ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="37" >&nbsp;&nbsp;Date Of Birth </td>
                                            <td >:&nbsp;<input type="text" name="DoB" value="<?php echo "{$valsk["DoB"]}"; ?>" id="datepicker"  /></td>
                                        </tr>
                                        <tr >
                                            <td colspan="2" height="29" style="color:#999; font-style:italic; font-size:14px;">Contact Information </td>

                                        </tr>
                                        <tr>
                                            <td height="38">&nbsp;&nbsp;Contact Number </td>
                                            <td>:&nbsp;<input type="text" name="ContactNuber" value="<?php echo "{$valsk["ContactNuber"]}"; ?>"/></td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="200" style="vertical-align:top"><img src="<?php echo "{$valsk["image"]}"; ?>" width="200" height="222" alt="propic" />
                                    <input type="file"  name="imagefile"/>
                                    <input type="hidden" name="imgback" value="<?php echo "{$valsk["image"]}"; ?>"/>
                                </td>

                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="2" style="vertical-align:top"><table width="583"  border="0" style="vertical-align:top; float:left; color: #03C; font-style: italic;">
                                        <tr>
                                            <td width="134" height="44" style="vertical-align:top">&nbsp;&nbsp;Address</td>
                                            <td width="439" style="vertical-align:top"><textarea name="Address" cols="28" rows="4"><?php echo "{$valsk["Address"]}"; ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td height="31" style="vertical-align:top">&nbsp;&nbsp;Email</td>
                                            <td style="font-style:italic; vertical-align:top">&nbsp;<input type="text" name="email" value="<?php echo "{$valsk["email"]}" ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td height="43" colspan="2" style="color:#999; font-style:italic; font-size:14px;" >About &nbsp;&nbsp;<a href="#"> <?php $d = $valsk["Fname"]." ".$valsk["Lname"];
    echo "{$d}";?></a></td>
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
                                            <td height="57" style="vertical-align:top">&nbsp;&nbsp;Achievements</td>
                                          <td style="vertical-align:top"><textarea name="achivements" cols="40" rows="3"><?php echo "{$uother1["achivements"]}"; ?></textarea></td>
                                        </tr>

            <?php } else if($v == '2') {?>

                                        <tr>

                                            <td height="40" style="vertical-align:top">&nbsp;&nbsp;Description </td>
                                          <td style="vertical-align:top"><textarea name="description" cols="40" rows="3"><?php echo "{$uother1["description"]}"; ?></textarea></td>

                                        </tr>

            <?php }else if($v == '3') { ?>
                                        <tr>
                                            <td height="39">&nbsp;&nbsp;Subject(s)</td>
                                            <td><textarea name="subject_teaches" cols="40" rows="2"><?php echo "{$uother1["subject_teaches"]}"; ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td height="45">&nbsp;&nbsp;Qualifications </td>
                                            <td><textarea name="qualification" cols="40" rows="5"><?php echo "{$uother1["qualification"]}"; ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td height="40">&nbsp;&nbsp;Experience</td>
                                            <td width="439" height="2"><textarea name="experience" cols="40" rows="2"><?php echo "{$uother1["experience"]}"; ?></textarea></td>
                                        </tr>

                                                    <?php
                                                }
                                            }

    ?>   <input type="hidden" name="type" value="<?php echo "{$v}"; ?>" />
                                        <tr>
                                            <td height="29" >&nbsp;</td>
                                            <td><a id="dialog_open"  onclick="opendiolo()" style="cursor:pointer"><strong>Save Changes</strong></a></td>
                                        </tr>


                                    </table></td>


                            </tr>
                        </table>
                    </form>
                    <form action="logics/changepassword.php" method="post" >
                        <table width="589" height="107" border="0" cellpadding="0" cellspacing="0" style="visibility:hidden; border-top:dashed; border-top-width:thin" id="passwordp" >
                            <tr>
                                <td width="71" height="53">&nbsp;</td>
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
        <div class="demo">

            <div id="dialog-confirm" title="Save Changes">

                <?php
                if($v == '1' || $v == '2') {

                    $v1 = "By proceeding you will change your current details, Are you sure you want to Proceed ??? ";

                }


                else if($v == '3') {

                    $v1 = "if you proceed your Account will go to a deactive state till the changes are approved by your principal";

                }


?>

                <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><?php echo "{$v1}"; ?></p>
            </div>

        </div>
    </body>
</html>