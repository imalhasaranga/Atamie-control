
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



            function submitform(){


                document.getElementById("formsub").submit();


            }

    window.onload = function(){ submitform();}
        </script>



        <script type="text/javascript">

<?php


if(isset ($_GET["year"])) {
    $year = $_GET["year"];



    ?>

                window.onload = function(){

                    var grade = "<?php echo $year;?>";

                    var combo1 = document.getElementById("year");

                    for(var l =0; l< combo1.options.length; ++l){

                        if ( combo1.options[l].text == grade ) {
                            combo1.options[l].selected = true;
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
                        <li><a href="#" title="Cum sociis natoque">Map sociis natoque</a></li>
                        <li><a href="#" title="Fuscesu scipit">Fuscesu scipit</a></li>
                        <li><a href="#" title="Hendrerit mauris">Hendrerit mauris</a></li>
                        <li><a href="#" title="Loremip sum dolor">Loremip sum dolor</a></li>
                        <li><a href="#" title="Phasellus porta">Phasellus porta</a> </li>
                        <li><a href="#" title="Praesen tvestibulum">Praesen tvestibulum</a></li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>



            <div class="content">




                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt; View My Time Table</div>
                <div class="text">
                    <table width="624"  border="0"  cellpadding="0" cellspacing="0" style="border-top:dotted; border-top-width:thin">
                        <form action="mytimetable.php" method="get" id="formsub" >
                            <tr>


                                <td height="65" colspan="6" bgcolor="#F4F4F4" style="vertical-align:middle" >&nbsp;&nbsp;Select the year you wish to view your TimeTable&nbsp;&nbsp; &nbsp; <span class="field_container">
                                        <select name="year" style="width:100px;" onchange="submitform()" id="year">

                                            <option value="2005">2004</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011" selected="true" >2011</option>
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

                            </tr>
                        </form>
                        <tr>
                            <td width="48" height="17" bgcolor="#666666">&nbsp;</td>
                            <td width="136" align="left" bgcolor="#666666">&nbsp;</td>
                            <td width="190" align="center" bgcolor="#666666" >&nbsp;</td>
                            <td width="104"  align="center" bgcolor="#666666">&nbsp;</td>
                            <td width="130"  align="center" bgcolor="#666666">&nbsp;</td>
                            <td width="16"  align="center" bgcolor="#666666">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="42" bgcolor="#D4D4D4">&nbsp;</td>
                            <td align="left" bgcolor="#D4D4D4">&nbsp;Subject</td>
                            <td bgcolor="#D4D4D4" align="center" >Main Schedule name</td>
                            <td bgcolor="#D4D4D4"  align="center">Day</td>
                            <td bgcolor="#D4D4D4"  align="center">Time </td>
                            <td bgcolor="#D4D4D4"  align="center">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="17" bgcolor="#D4D4D4">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                        </tr >

                        <?php
                        include_once 'logics/Db.php';
                        include_once 'logics/newfunctions.php';


                        $id = "";
                        if(isset ($_GET["year"])) {

                            $id = $_GET["year"];
                        }

                        $result = Db::SqlQuery("SELECT* FROM school_schdules WHERE lecturar = '{$_SESSION["user_id"]}' && YEAR ='$id' ");

                        ?>

                        <?php  while($valsk11 = mysql_fetch_array($result)) {  ?>
                        <tr>
                            <td height="35" align="center" bgcolor="#D4D4D4"  style="vertical-align:middle;"><img src="img/star.png" alt="star" width="16" height="16" /></td>
                            <td   style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2">&nbsp; <?php  echo $valsk11["subject"];   ?></td>
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2">&nbsp;<?php  echo $valsk11["Titlename"];   ?></td>
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2">&nbsp;<?php  echo $valsk11["Day"];   ?></td>
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2">&nbsp;<?php  echo $valsk11["Timedure"];   ?></td>
                            <td align="center"  style="vertical-align:middle; border-bottom:solid; border-bottom-color:#E7E4E2">&nbsp;</td>
                        </tr >
                            <?php }  ?>
                    </table>

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