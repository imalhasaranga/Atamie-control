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

              <?php


                    if(isset ($_POST["branch"])) {
                       $branch = $_POST["branch"];
                        $grade =  $_POST["grade"];


            ?>

            window.onload = function(){

                var grade = "<?php echo $grade;?>";
                var branchno = "<?php echo $branch;?>";
                var combo1 = document.getElementById("grade");
                
                for(var l =0; l< combo1.options.length; ++l){

                    if ( combo1.options[l].text == grade ) {
                        combo1.options[l].selected = true;
                       break;
                    }

                }


                var combo2 = document.getElementById("branch2");
                
                for(var l1 =0; l1< combo2.options.length; ++l1){
                    
                    if ( combo2.options[l1].value == branchno ) {
                        combo2.options[l1].selected = true;
                        break;
                    }
                }

            }

       
<?php } ?>
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





                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt; Reports</div>
                <div class="text"><br/>


                    <?php

                    $branch ="";
                    $grade = "";
                    if(!isset ($_POST["branch"])) {
                        $branch = "1";
                        $grade = "01";

                    }else {

                        $branch = $_POST["branch"];
                        $grade =  $_POST["grade"];
                    }




                    $reso = Db::SqlQuery("select* from resources where branch_id = '$branch'  && grade = '$grade' ");

                    ?>
                    <table width="624"  border="0"  cellpadding="0" cellspacing="0" style="border-top:dotted; border-top-width:thin">
                        <form action="viewclasresors.php" method="post" >
                            <tr>
                                <td height="55" colspan="2"><strong>&gt;&gt; View Class Resources</strong></td>

                                <td width="157" style="vertical-align:middle">Branch
                                    <?php     $branch = Db::SqlQuery("select* from branch"); ?>

                                    <select name="branch"  id="branch2" >
                                        <?php while($brn = mysql_fetch_array($branch)) { ?>
                                        <option value="<?php echo $brn["branch_id"];  ?>"><?php echo $brn["branch_name"];  ?></option>
                                            <?php } ?>

                                    </select></td>
                                <td width="199" style="vertical-align:middle" >Grade   &nbsp;
                                    <select name="grade" id="grade" >
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
                                    </select>                         &nbsp;  &nbsp;     <input type="submit" value="Search" /></td>
                            </tr>
                        </form>
                        <tr>
                            <td width="51" height="17" bgcolor="#666666">&nbsp;</td>
                            <td width="217" align="left" bgcolor="#666666">&nbsp;</td>
                            <td bgcolor="#666666" align="center" >&nbsp;</td>
                            <td bgcolor="#666666"  align="center">&nbsp;</td>
                        </tr>
                        <tr>
                            <td width="51" height="41" bgcolor="#D4D4D4">&nbsp;</td>
                            <td width="217" align="left" bgcolor="#D4D4D4">Name of The Resource</td>
                            <td bgcolor="#D4D4D4" align="center" >&nbsp;</td>
                            <td bgcolor="#D4D4D4"  align="center">Amount Abailable</td>
                        </tr>
                        <tr>
                            <td height="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                        </tr >
                        <?php  while($valsk1 = mysql_fetch_array($reso)) {  ?>
                        <tr    valign="middle" >
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2"><img src="img/reso.png" alt="reso" width="16" height="16" /></td>
                            <td height="30"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2" colspan="2">&nbsp;<?php echo $valsk1["resoname"];  ?>
                            </td>

                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2"><?php echo "{$valsk1["qty"]}";  ?></td>

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

    </body>
</html>