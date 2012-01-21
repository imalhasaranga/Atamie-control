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




        <script type="text/javascript">
            $(document).ready(function() {
                $('#slider1').s3Slider({
                    timeOut: 4000
                });
            });
        </script>


        <?php
        $gn = "false";
        if(isset ($_GET["sved"])) {
        $gn = "true";
              } ?>
        <script type="text/javascript">
            $(function() {
                // a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
                $( "#dialog:ui-dialog" ).dialog( "destroy" );

                $( "#dialog-message" ).dialog({
                    autoOpen: <?php echo $gn ?>,
                    modal: true,
                    width :500,
                    buttons: {
                        Ok: function() {
                            $( this ).dialog( "close" );
                        }
                    }
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

        </style>
    </head>
    <body>
        <?php
        include_once 'logics/Db.php';
        include_once 'logics/newfunctions.php';

        $count = 0;
        $page = "createtimetable.php";
        $result = Db::SqlQuery("SELECT* FROM  branch ORDER BY branch_id ASC LIMIT 4");
        while($out = mysql_fetch_array($result)) {
            ++$count;
            if($count ==1 ) {
                ?>

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





                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt; Time Tables &gt; Create Time Table</div>
                <div class="text">
                    <p>Creating Time Table For Atamie <?php echo $_GET["name"] ?> Branch                    </p>


                    <form action="logics/createTimeTablelogici.php" method="post"  onsubmit="return removecolor();">
                        <input type="hidden" name="branch" value="<?php echo $_GET["id"] ?>" />
                        <table width="620" border="0"  style="border-bottom:thin; border-bottom-style:dotted; border-top:thin; border-top-style:dotted">
                            <tr>
                                <td width="10" height="37">&nbsp;</td>
                                <td width="81">For the Year </td>
                                <td width="69"><span class="field_container">
                                        <select name="year" style="width:100%">
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </span></td>
                                <td width="90">, For the Grade </td>
                                <td width="58"><select name="grade" style="width:100%">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select></td>
                                <td width="286">Time Table Name <input type="text" name="tname" style="width:170px;"/></td>
                            </tr>
                            <tr>
                                <td height="29">&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td align="right" style="vertical-align:top"><em> &nbsp;&nbsp;(ex : A/L Maths Stream Time Table )</em></td>
                            </tr>
                        </table>
                        <table width="618" border="0"  style="border-bottom:thin; border-bottom-style:dotted; border-top:thin; border-top-style:dotted">
                            <tr>
                                <td width="9" height="29">&nbsp;</td>
                                <td width="153">Select The Lecturer</td>
                                <td width="154">

                                    <select id="teacher" onchange="addTeacher(this)">
                                        <?php

                                        $userdetails = Db::SqlQuery("select* from user_main join lecturer on user_id = lecturer_id ");
                                        while($valsk = mysql_fetch_array($userdetails)) {
                                            ?>

                                        <option value="<?php echo $valsk["user_id"];  ?>"><?php echo $valsk["Fname"]." ".$valsk["Lname"];  ?> </option>


                                            <?php } ?>
                                    </select></td>
                                <td width="122">Select The Subject</td>
                                <td width="158" align="center">
                                    <select name="teacher" id="teacher2" onchange="addSubject(this)">
                                        <option >Maths</option>
                                        <option >Science</option>
                                        <option >English</option>
                                        <option >Social Science</option>
                                        <option >History</option>
                                        <option >Art</option>
                                        <option >Music</option>
                                        <option >Sinhala</option>
                                        <option >Art</option>
                                        <option >commerce</option>
                                        <option >IT</option>

                                    </select></td>
                            </tr>
                        </table>

                        <br/>
                        <table width="100%" height="263" border="1" cellspacing="1" align="center">
                            <tr align="center">
                                <td width="20%" height="41" bgcolor="#EBFFAE">Mon</td>
                                <td width="20%" bgcolor="#EBFFAE" >Tue</td>
                                <td width="20%" bgcolor="#EBFFAE">Wed</td>
                                <td width="20%" bgcolor="#EBFFAE" >Thu</td>
                                <td width="20%" bgcolor="#EBFFAE">Fri</td>
                            </tr>
                            <tr >
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="motsub1" />
                                    <input type="hidden" name="motid1" />
                                    <input type="hidden" name="motna1" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="tutsub1" />
                                    <input type="hidden" name="tutid1" />
                                    <input type="hidden" name="tutna1" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >


                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="wetsub1" />
                                    <input type="hidden" name="wetid1" />
                                    <input type="hidden" name="wetna1" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="thtsub1" />
                                    <input type="hidden" name="thtid1" />
                                    <input type="hidden" name="thtna1" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="frtsub1" />
                                    <input type="hidden" name="frtid1" />
                                    <input type="hidden" name="frtna1" />
                                </td>
                            </tr>
                            <tr >
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="motsub2" />
                                    <input type="hidden" name="motid2" />
                                    <input type="hidden" name="motna2" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="tutsub2" />
                                    <input type="hidden" name="tutid2" />
                                    <input type="hidden" name="tutna2" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >


                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="wetsub2" />
                                    <input type="hidden" name="wetid2" />
                                    <input type="hidden" name="wetna2" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="thtsub2" />
                                    <input type="hidden" name="thtid2" />
                                    <input type="hidden" name="thtna2" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="frtsub2" />
                                    <input type="hidden" name="frtid2" />
                                    <input type="hidden" name="frtna2" />
                                </td>
                            </tr>
                            <tr >
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="motsub3" />
                                    <input type="hidden" name="motid3" />
                                    <input type="hidden" name="motna3" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="tutsub3" />
                                    <input type="hidden" name="tutid3" />
                                    <input type="hidden" name="tutna3" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >


                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="wetsub3" />
                                    <input type="hidden" name="wetid3" />
                                    <input type="hidden" name="wetna3" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="thtsub3" />
                                    <input type="hidden" name="thtid3" />
                                    <input type="hidden" name="thtna3" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="frtsub3" />
                                    <input type="hidden" name="frtid3" />
                                    <input type="hidden" name="frtna3" />
                                </td>
                            </tr>
                            <tr >
                                <td height="36" colspan="5" align="center" bgcolor="#EBFFAE" style="font-size:16px">Interval</td>

                            </tr>
                            <tr >
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="motsub4" />
                                    <input type="hidden" name="motid4" />
                                    <input type="hidden" name="motna4" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="tutsub4" />
                                    <input type="hidden" name="tutid4" />
                                    <input type="hidden" name="tutna4" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >


                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="wetsub4" />
                                    <input type="hidden" name="wetid4" />
                                    <input type="hidden" name="wetna4" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="thtsub4" />
                                    <input type="hidden" name="thtid4" />
                                    <input type="hidden" name="thtna4" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="frtsub4" />
                                    <input type="hidden" name="frtid4" />
                                    <input type="hidden" name="frtna4" />
                                </td>
                            </tr>
                            <tr >
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="motsub5" />
                                    <input type="hidden" name="motid5" />
                                    <input type="hidden" name="motna5" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="tutsub5" />
                                    <input type="hidden" name="tutid5" />
                                    <input type="hidden" name="tutna5" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >


                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="wetsub5" />
                                    <input type="hidden" name="wetid5" />
                                    <input type="hidden" name="wetna5" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="thtsub5" />
                                    <input type="hidden" name="thtid5" />
                                    <input type="hidden" name="thtna5" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="frtsub5" />
                                    <input type="hidden" name="frtid5" />
                                    <input type="hidden" name="frtna5" />
                                </td>
                            </tr>
                            <tr >
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="motsub6" />
                                    <input type="hidden" name="motid6" />
                                    <input type="hidden" name="motna6" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="tutsub6" />
                                    <input type="hidden" name="tutid6" />
                                    <input type="hidden" name="tutna6" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >


                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="wetsub6" />
                                    <input type="hidden" name="wetid6" />
                                    <input type="hidden" name="wetna6" />

                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="thtsub6" />
                                    <input type="hidden" name="thtid6" />
                                    <input type="hidden" name="thtna6" />
                                </td>
                                <td height="32" style="vertical-align:middle" align="center" onclick="getitmenChange(this)" >

                                    <p ></p>
                                    <p ></p>
                                    <input type="hidden" name="frtsub6" />
                                    <input type="hidden" name="frtid6" />
                                    <input type="hidden" name="frtna6" />
                                </td>
                            </tr>
                        </table>
                        <table width="621" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="126">&nbsp;</td>
                                <td width="211">&nbsp;</td>
                                <td width="157">&nbsp;</td>
                                <td width="127">&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>Save Changes and Send This </td>
                                <td><input type="submit" value="  Send Time Table " /></td>
                                <td>&nbsp;</td>
                            </tr>
                        </table>
                        <br/>

                    </form>

                </div>
                <div class="text"> </div>


            </div>


            <div id="footer">
                <!--<ul>-->
                <p><!--</ul>-->  </p>
            </div>
            <div id="copyright">


            </div>
        </div>


        <div id="dialog-message" title="Payment Details">
            <p>
                <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
		Time Talbe has successfully Saved to the data base!!!
            </p>
            <p>
		Time Table will now be availavle for all the principals,
            </p>
        </div>


    </body>
</html>