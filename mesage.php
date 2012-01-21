
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
        <meta name="description" content=" business solution" />
        <meta name="keywords" content="web, development, solution" />





        <script type="text/javascript" src="scripts/jscriptvali1.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="Jquery/ui-lightness/jquery-ui-1.8.16.custom.css" type="text/css" />
        <script type="text/javascript" src="scripts/JQUERY/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/JQUERY/s3Slider.js"></script>
        <script type="text/javascript" src="Jquery/js/jquery-ui-1.8.16.custom.min.js"></script>




        <script type="text/javascript">
            $(document).ready(function() {
                $('#slider1').s3Slider({
                    timeOut: 4000
                });
            });



            function getAjax(b,a,c){

                $.ajax({
                    url: 'logics/SignUpLogic.php?pass='+a+'&user='+b+'&date='+c,
                    success: function(data) {
                        b.src = "img/done.png";
                        b.height = "20";
                        b.width = "20";
                        b.style.cursor = "default";
                        b.onclick = "";

                    }
                });
            }


            $(function() {

                $( "#dialog:ui-dialog" ).dialog( "destroy" );

                $( "#dialog-message" ).dialog({
                    width : 410,

                    autoOpen: true,
                    modal: true,
                    buttons: {

                        "Send Message": function() {

                            $(this).dialog("close");
                            var type = document.getElementById("typeo").value;
                            if(type == "1"){
                                document.getElementById("ty1").submit();
                            }else if(type == "2" ){

                                document.getElementById("ty2").submit();
                            }else if(type == "3"){

                                document.getElementById("ty3").submit();
                            }

                        },

                        "Dont Send": function() {

                            window.location = "profile.php";

                        }
                    }
                });
            });



            $(function() {
                $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
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
                width: 1000px; 
                height: 350px; 
                position: relative; 
                overflow: hidden; 
            }

            #slider1Content {
                width: 720px; 
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

        </style>
    </head>
    <body>






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

                        <li></li></ul>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>



            <div class="content">




                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt;Add New  Lecturer</div>
                <div class="text">
                    <p>&nbsp;</p>
                    <p><br/>
                    </p>
                </div>
                <div class="text"> </div>

                <?php// } ?>
            </div>


            <div id="footer">

                <p></p>
            </div>
            <div id="copyright">


            </div>
        </div>

        <input type="hidden" id="typeo" value="<?php echo $_SESSION["type"] ?>" />

        <?php

        include_once 'logics/Db.php';
        include_once 'logics/newfunctions.php';


        $type = $_SESSION["type"];


        if( $type == "3") {


            ?>
        <!-- time Messaging for teachers -->

        <div id="dialog-message" title="Complaints/Messages">
            <form action="logics/sendmsg.php?ty=3" method="post" id="ty3">
                <input type="hidden" value="<?php echo $_SESSION["user_id"] ?>" name="who" />
                <table width="390" height="229" border="0">
                    <tr>
                        <td width="25" height="36">&nbsp;</td>
                        <td width="84">To Principal</td>
                        <td width="206" align="center"><input type="checkbox" name="dir2" value="true" /></td>
                        <td width="57">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="28">&nbsp;</td>
                        <td>To Director</td>
                        <td align="center"><input type="checkbox" name="dir1" value="true" /></td>
                        <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="60">&nbsp;</td>
                        <td>Title</td>
                        <td><input type="text"   style="width:100%" name="title1"/></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="73">&nbsp;</td>
                        <td>Message</td>
                        <td><textarea style="width:100%; height:60px;" name="text1"></textarea></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>

                        <td colspan="4">&nbsp;</td>


                    </tr>
                </table>
            </form>
        </div>

            <?php }else if( $type == "2") {  ?>
        <div id="dialog-message" title="Message Sending">
            <form action="logics/sendmsg.php?ty=2" method="post" id="ty2">
                <table width="385" height="248" border="0">
                    <tr>
                        <td width="19" height="36">&nbsp;</td>
                        <td width="98">To Director</td>
                        <td width="208" align="center"><input type="checkbox" name="dir2" value="true" /></td>
                        <td width="42">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="28">&nbsp;</td>
                        <td>Other recipents</td>


                        <td align="center">


                            <select style="width:100%" name="teacher">
                                <option value="0">Select</option>
                                    <?php
                                   
                                    $outo = Db::SqlQuery("SELECT* FROM user_main JOIN lecturer ON user_id = Lecturer_id WHERE branch_id = (SELECT branch_id FROM principal WHERE Principal_id = '{$_SESSION["user_id"]}')");
                                  
                                    while($outk = mysql_fetch_array($outo)) {
                                        ?>
                                <option value="<?php echo $outk["user_id"] ?>"><?php echo $outk["Fname"]." ".$outk["Lname"] ?></option>
                                        <?php } ?>
                            </select>

                        </td>
                        <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="57">&nbsp;</td>
                        <td>Title</td>
                        <td><input type="text" name="title1" style="width:100%"/></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="73">&nbsp;</td>
                        <td>Message</td>
                        <td><textarea style="width:100%; height:60px;" name="text1"></textarea></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>

                        <td colspan="4">&nbsp;</td>


                    </tr>
                </table>
            </form>
        </div>
            <?php } else if( $type == "1") {  ?>
        <div id="dialog-message" title="Message Sending">
            <form action="logics/sendmsg.php?ty=1" method="post" id="ty1">
                <table width="385" height="355" border="0">

                        <?php $outo = Db::SqlQuery("select* from user_main join principal on user_id = principal_id order by principal_id asc limit 4");
                        $ko =0;
                        while($outk = mysql_fetch_array($outo)) {
                            ?>
                    <tr>
                        <td width="24" height="60">&nbsp;</td>
                        <td width="64" align="center"><img src="<?php echo $outk["image"]  ?>" width="43" height="42" /></td>
                        <td width="207" ><?php echo $outk["Fname"]." ".$outk["Lname"]  ?></td>
                        <td width="34"><input type="checkbox" name="pri<?php echo ++$ko ?>" value="<?php echo $outk["user_id"] ?>" /></td>
                        <td width="34">&nbsp;</td>
                    </tr>
                            <?php } ?>
                    <tr>
                        <td height="57">&nbsp;</td>
                        <td>Title</td>
                        <td colspan="2"><input type="text" name="title1" style="width:100%" /></td>

                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td height="73">&nbsp;</td>
                        <td>Message</td>
                        <td colspan="2"><textarea style="width:100%; height:60px;" name="text1"></textarea></td>

                        <td>&nbsp;</td>
                    </tr>
                    <tr>

                        <td colspan="5">&nbsp;</td>


                    </tr>
                </table>
            </form>
        </div>
            <?php } ?>
    </body>
</html>