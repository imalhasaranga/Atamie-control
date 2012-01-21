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
                    <div class="imgblock"></div>
                </div>
                <!--[if IE 7]> <link rel="stylesheet" type="text/css" href="css/ie7.css" /> <![endif]-->
                <div class="categories">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>



            <div class="content">





                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt; View Staff</div>
                <div class="text"><br/>


                    <?php

                    $princi = Db::SqlQuery("select* from user_main join principal on user_id = principal_id join branch on branch.branch_id = principal.branch_id  ");
                    
                        ?>
                    <table width="624"  border="0"  cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="172" height="37" ><strong>&gt;&gt; Principals</strong></td>
                            <td width="108">&nbsp;</td>
                            <td width="146" style="vertical-align:top">&nbsp;</td>
                            <td width="93" style="vertical-align:top">&nbsp;</td>
                            <td width="91" style="vertical-align:top">&nbsp;</td>
                        </tr>


                        <tr>
                            <td height="41" bgcolor="#D4D4D4">&nbsp; Name</td>
                            <td bgcolor="#D4D4D4" align="center">&nbsp;Branch</td>
                            <td bgcolor="#D4D4D4" align="center" >&nbsp;email</td>
                            <td bgcolor="#D4D4D4"  align="center">&nbsp;Joined Date</td>
                            <td bgcolor="#D4D4D4" >&nbsp;image</td>
                        </tr>
                        <tr>
                            <td height="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                        </tr>
                        <?php  while($valsk1 = mysql_fetch_array($princi)) {  ?>
                        <tr >
                          <td height="69" style="vertical-align:top; border-bottom:dashed; border-bottom-width:thin">&nbsp;<?php $vo =$valsk1["Fname"]." ".$valsk1["Lname"]; echo "{$vo}";  ?></td>
                          <td style="vertical-align:top; border-bottom:dashed; border-bottom-width:thin"  align="center">&nbsp;<?php echo "{$valsk1["branch_name"]}";  ?></td>
                            <td style="vertical-align:top; border-bottom:dashed; border-bottom-width:thin" align="center"><?php echo "{$valsk1["email"]}";  ?></td>
                            <td style="vertical-align:top; border-bottom:dashed; border-bottom-width:thin" align="center"><?php echo "{$valsk1["joinddate"]}";  ?></td>
                            <td style="vertical-align:middle; border-bottom:dashed; border-bottom-width:thin" align="center"><img src="<?php echo "{$valsk1["image"]}";  ?>" width="70" height="69" alt="picturer"/></td>
                        </tr>
                        <?php }  ?>
                        <tr>
                            <td height="17">&nbsp;</td>
                          <td>&nbsp;</td>
                            <td style="vertical-align:top">&nbsp;</td>
                            <td style="vertical-align:top">&nbsp;</td>
                            <td style="vertical-align:top">&nbsp;</td>
                        </tr>

                    </table>




  <?php

                    $lectu = Db::SqlQuery("select* from user_main join lecturer on user_id = lecturer_id join branch on branch.branch_id = lecturer.branch_id  ");
                    
                        ?>
                    <table width="619"  border="0"  cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="175" height="42"><strong>&gt;&gt; Lecturers</strong></td>
                            <td width="112">&nbsp;</td>
                            <td width="103" style="vertical-align:top">&nbsp;</td>
                            <td width="229" style="vertical-align:top">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="42" bgcolor="#D4D4D4">&nbsp;Name</td>
                            <td bgcolor="#D4D4D4" align="center">&nbsp;Branch</td>
                            <td bgcolor="#D4D4D4" align="center">&nbsp;Joined Date</td>
                            <td bgcolor="#D4D4D4" align="center">&nbsp; Subject(s)</td>
                        </tr>
                        <?php  while($valsk2 = mysql_fetch_array($lectu)) { ?>
                        <tr>
                            <td height="32" style="border-bottom:dashed; border-bottom-width:thin">&nbsp;<?php $vo =$valsk2["Fname"]." ".$valsk2["Lname"]; echo "{$vo}";  ?></td>
                            <td align="center" style="border-bottom:dashed; border-bottom-width:thin">&nbsp;<?php echo "{$valsk2["branch_name"]}";  ?></td>
                            <td align="center" style="border-bottom:dashed; border-bottom-width:thin">&nbsp;<?php echo "{$valsk2["joinddate"]}";  ?></td>
                            <td align="center" style="border-bottom:dashed; border-bottom-width:thin">&nbsp;<?php echo "{$valsk2["subject_teaches"]}";  ?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td height="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="vertical-align:top">&nbsp;</td>
                            <td style="vertical-align:top">&nbsp;</td>
                        </tr>
                    </table>


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
    </body>
</html>