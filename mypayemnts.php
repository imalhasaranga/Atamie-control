
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>

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




                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt;View My Payments</div>
                <div class="text">
                    <table width="624"  border="0"  cellpadding="0" cellspacing="0" style="border-top:dotted; border-top-width:thin">
                        <form action="viewclasresors.php" method="post" >
                            <tr>
                                <td height="54" colspan="2">&nbsp;<?php echo $_SESSION["name"]; ?>'s  All the Payment Reports </td>
                                <td width="27" style="vertical-align:middle">&nbsp;</td>
                                <td width="115" style="vertical-align:middle" >&nbsp;</td>
                            </tr>
                        </form>
                        <tr>
                            <td width="80" height="17" bgcolor="#666666">&nbsp;</td>
                            <td width="402" align="left" bgcolor="#666666">&nbsp;</td>
                            <td bgcolor="#666666" align="center" >&nbsp;</td>
                            <td bgcolor="#666666"  align="center">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="41" bgcolor="#D4D4D4">&nbsp;</td>
                            <td align="left" bgcolor="#D4D4D4">Payment  Year-Month</td>
                            <td bgcolor="#D4D4D4" align="center" >&nbsp;</td>
                            <td bgcolor="#D4D4D4"  align="center">Amount</td>
                        </tr>
                        <tr>
                            <td height="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                        </tr >
                        <?php
                        include_once 'logics/Db.php';
                        include_once 'logics/newfunctions.php';

                        $count = 0;
                        $page = "createtimetable.php";
                        $result = Db::SqlQuery("SELECT* FROM   lecturer_payments where user_id = '{$_SESSION["user_id"]}' order by payment_id desc");

                        ?>


                        <?php  while($valsk1 = mysql_fetch_array($result)) {  ?>
                        <tr    valign="middle" >
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2"><img src="img/coins.png" alt="reso" width="16" height="16" /></td>
                            <td height="30"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $valsk1["year"]." - ".$valsk1["month"];  ?></td>
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2"><?php echo "{$valsk1["amount"]}";  ?></td>
                        </tr>
                            <?php }  ?>
                    </table>
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
    </body>
</html>