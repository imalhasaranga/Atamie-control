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


            $(function() {

                $( "#dialog:ui-dialog" ).dialog( "destroy" );

                $( "#dialog-message" ).dialog({
                    width : 800,
                    autoOpen: false,
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                });
            });
        </script>

        <script type="text/javascript">


            function getAjax(a){
                
                $.ajax({
                    url: 'logics/getHtmldata.php?id='+a,
                    success: function(data) {
                        $('#dialog-message').html(data);
                        $( "#dialog-message" ).dialog( 'open' );
                    }
                });
			}

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


            .text tr:hover
            {
                color: #000;
                background: #B6B6B6;
            }

            .trne {

                background:#F2F2F2;
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





                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt; Reports</div>
                <div class="text"><br/>


                    <?php

                    $princi = Db::SqlQuery("select* from reports left join branch on reports.branch_id = branch.branch_id order by report_id desc ");

                    ?>
                    <table width="624"  border="0"  cellpadding="0" cellspacing="0">
                        <tr>
                            <td height="37" colspan="2"><strong>&gt;&gt; View Report History</strong></td>

                            <td width="141" style="vertical-align:top">&nbsp;</td>
                            <td width="103" style="vertical-align:top">&nbsp;</td>
                            <td width="73" style="vertical-align:top">&nbsp;</td>
                        </tr>


                        <tr>
                            <td width="26" height="41" bgcolor="#D4D4D4">&nbsp;</td>
                            <td width="281" align="center" bgcolor="#D4D4D4">Title </td>
                            <td bgcolor="#D4D4D4" align="center" >&nbsp;Related Branch</td>
                            <td bgcolor="#D4D4D4"  align="center">&nbsp;Created Date</td>
                            <td bgcolor="#D4D4D4"  align="center">Delete Rep</td>
                        </tr>
                        <tr>
                            <td height="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                        </tr >
                        <?php  while($valsk1 = mysql_fetch_array($princi)) {  ?>
                        <tr  style="cursor:pointer;" class="trne" valign="middle" onclick="getAjax(<?php echo $valsk1["report_id"];  ?>)">
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#FFF"><img src="img/abc.png" alt="msg" width="16" height="16"/></td>
                            <td height="30"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#FFF">&nbsp;<?php $vo =$valsk1["title"];
                                    echo "{$vo}";  ?></td>
                            <td  align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#FFF" >&nbsp;<?php echo $valsk1["branch_name"];  ?></td>
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#FFF"><?php echo "{$valsk1["date"]}";  ?></td>
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#FFF"><a href="logics/deletereport.php?id=<?php echo "{$valsk1["report_id"]}";  ?>&title=<?php echo "{$valsk1["title"]}";  ?>">Delete</a></td>

                        </tr>
                            <?php }  ?>

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
        <div id="dialog-message">
           
        </div>
    </body>
</html>