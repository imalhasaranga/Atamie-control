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





                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt; View School Time Table</div>
                <div class="text"><br/>


                    <?php

                    $year = "";
                    $grade = "";
                    $theme ="";


                    if(isset ($_POST["year"])){
                        $year = $_POST["year"];
                        $grade = $_POST["grade"];

                        $theme = "Atamie school Time Table for Year $year Grade $grade";
                        $tetime = "Teachers Program Time Table";
                    }



                    $branchid ="";
                    $branchname = "";
                    $result = Db::SqlQuery("SELECT principal.branch_id,branch_name FROM principal join branch on principal.branch_id = branch.branch_id WHERE Principal_id = '{$_SESSION["user_id"]}' ");
                    if($da = mysql_fetch_array($result)) {

                        $branchid = $da["branch_id"];
                        $branchname = $da["branch_name"];
                    }

                   

                    $princi = Db::SqlQuery("select* from reports where branch_id ='$branchid' && title = '$theme'");
                    ?>
                    <form action="schooltimeview.php" method="post" >
                        <table width="620" border="0" cellpadding="0" cellspacing="0" style="border-bottom:dotted; border-bottom-width:thin">
                            <tr>
                                <td width="279" height="44">Branch : <?php echo $branchname ?>
                                </td>
                                <td width="121">View  Time Table for  </td>
                                <td width="156"><span class="field_container">
                                  Year 
                                  &nbsp;<select name="year" >
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
                                , Grade</span></td>
                                <td width="64"><select name="grade" >
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
                            </tr>
                        </table>
                        
                        <?php
                        if($da = mysql_fetch_array($princi)){


                            echo $da["HtmlBody"];
                        }

                        ?>
                      <table width="621" border="0">
                        <tr>
    <td width="204">&nbsp;</td>
    <td width="67">&nbsp;</td>
    <td width="144">&nbsp;</td>
    <td width="178">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Search</td>
    <td><input type="submit" value=" Search >> " /></td>
    <td>&nbsp;</td>
  </tr>
</table>


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








    </body>
</html>