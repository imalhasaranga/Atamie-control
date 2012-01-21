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
			
			
			window.onload = function(){
	
	 var k = document.getElementById("branch");
	 k.selectedIndex = <?php echo ($_GET["a"]-1) ?>
	}
        </script>


        <?php
        $gn = "false";
        if(isset ($_GET["sved"])){
            
            $gn = "true";
          } ?>
        <script type="text/javascript">
	$(function() {
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
	
		$( "#dialog-message" ).dialog({
                        autoOpen: <?php  echo $gn ?>,
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





                <div class="textheading" style="font-size:18px;"><?php echo $_SESSION["name"]; ?> &gt; Manage Payments</div>
                <div class="text"><br/>


                    <?php

                    $princi = Db::SqlQuery("select* from user_main join principal on user_id = principal_id join branch on branch.branch_id = principal.branch_id where branch.branch_id ='{$_GET["a"]}'   ");

                    ?>
                    <form action="logics/payments.php" method="post" >
                    <table width="620" border="0" cellpadding="0" cellspacing="0" style="border-bottom:dotted; border-bottom-width:thin">
                        <tr>
                            <td width="176" height="35">Branch :

                          <?php     $branch = Db::SqlQuery("select* from branch"); ?>

                                <select name="branch" onchange="movewindow(this)" id="branch" >
                                    <?php while($brn = mysql_fetch_array($branch)){ ?>
                                    <option value="<?php echo $brn["branch_id"];  ?>"><?php echo $brn["branch_name"];  ?></option>
                                    <?php } ?>
                                   
                                </select>



                            </td>
                          <td width="175">&nbsp;</td>
                            <td width="138">Manage Payments for : </td>
                            <td width="131"><span class="field_container">
                                    <select name="month" id="month" class="" >

                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                </span><span class="field_container">
                                    <select name="year" >
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
                        </tr>
                    </table>
                    <table width="624"  border="0"  cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="71" height="24" ><strong>Principal</strong></td>
                        <td width="178">&nbsp;</td>
                            <td width="115" style="vertical-align:top">&nbsp;</td>
                            <td width="121" style="vertical-align:top">&nbsp;</td>
                            <td width="139" style="vertical-align:top">&nbsp;</td>
                        </tr>


                        <tr>
                            <td height="41" bgcolor="#D4D4D4" align="center">image</td>
                            <td bgcolor="#D4D4D4" >Name</td>
                            <td bgcolor="#D4D4D4" align="center" >Joined Date</td>
                            <td bgcolor="#D4D4D4"  align="center">&nbsp;email</td>
                            <td bgcolor="#D4D4D4"  align="center">Amount</td>
                        </tr>
                        <tr>
                            <td height="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                            <td style="vertical-align:top"></td>
                        </tr>
                        <?php  if($valsk1 = mysql_fetch_array($princi)) {  ?>
                        <input type="hidden" name="princiid" value="<?php echo "{$valsk1["user_id"]}";  ?>" />
                        <tr >
                            <td height="44" style="vertical-align:middle; border-bottom:dashed; border-bottom-width:thin; " align="center"><img src="<?php echo $valsk1["image"];  ?>" width="60" height="50" alt="propic" /></td>
                            <td style="vertical-align:middle; border-bottom:dashed; border-bottom-width:thin"  >&nbsp;<?php $vo =$valsk1["Fname"]." ".$valsk1["Lname"];
    echo "{$vo}";  ?></td>
                            <td style="vertical-align:middle; border-bottom:dashed; border-bottom-width:thin" align="center"><?php echo "{$valsk1["joinddate"]}";  ?></td>
                            <td style="vertical-align:middle; border-bottom:dashed; border-bottom-width:thin" align="center"><?php echo "{$valsk1["email"]}";  ?></td>
                            <td style="vertical-align:middle; border-bottom:dashed; border-bottom-width:thin" align="center"><input  type="text" id="pri" name="priamou" size="15" value="30000" style="width:65px;"/></td>
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

                    $lectu = Db::SqlQuery("select* from user_main join lecturer on user_id = lecturer_id join branch on branch.branch_id = lecturer.branch_id  where branch.branch_id ='{$_GET["a"]}' ");
                    $count = 0;
?>
                  <table width="624"  border="0"  cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="67" height="27"><strong>Lecturers</strong></td>
                          <td width="181">&nbsp;</td>
                            <td width="116" style="vertical-align:top">&nbsp;</td>
                            <td width="260" style="vertical-align:top">&nbsp;</td>
                        </tr>
                        <tr>
                            <td height="42" bgcolor="#D4D4D4" align="center">image</td>
                            <td bgcolor="#D4D4D4" >&nbsp;Name</td>
                            <td bgcolor="#D4D4D4" align="center">Joined Date</td>
                            <td bgcolor="#D4D4D4" align="center">&nbsp;Amount</td>
                        </tr>
<?php  while($valsk2 = mysql_fetch_array($lectu)) { ++$count; ?>
                      <input type="hidden" value="<?php echo $valsk2["user_id"]; ?>" name="lec<?php echo $count; ?>" />
                        <tr>
                            <td height="40" style="border-bottom:dashed; border-bottom-width:thin; vertical-align:middle" align="center"><img src="<?php  echo $valsk2["image"] ;?>" width="44" height="35" alt="propic" /></td>
                  <td  style="border-bottom:dashed; border-bottom-width:thin">&nbsp;<?php $vo =$valsk2["Fname"]." ".$valsk2["Lname"];
    echo "{$vo}";  ?></td>
                            <td align="center" style="border-bottom:dashed; border-bottom-width:thin"><?php echo "{$valsk2["joinddate"]}";  ?></td>
                            <td align="center" style="border-bottom:dashed; border-bottom-width:thin">&nbsp;
                                <input  type="text" name="am<?php echo $count; ?>" id="textfield" size="15" value="10000" style="width:65px;" /></td>
                        </tr>
    <?php }  ?>
                      <input type="hidden" value="<?php echo $count; ?>" name="leccount" />
                        <tr>
                            <td height="17">&nbsp;</td>
                            <td>&nbsp;</td>
                            <td style="vertical-align:top">&nbsp;</td>
                            <td style="vertical-align:top">&nbsp;</td>
                        </tr>
                    </table>
                    
                    <table width="619">
                    <tr>
                    <td width="57" height="38">&nbsp;</td>
                    <td width="325">Click &quot;Create&quot; to Save the payment report of this branch </td>
                    <td width="221" align="center"><input type="submit" value="   Create   " /></td>
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
        
     

<div id="dialog-message" title="Payment Details">
	<p>
		<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
		Payment Report has successfully Saved to the data base!!! 
	</p>
	<p>
		Reports will now be availavle for all the principals,
	</p>
</div>






        
    </body>
</html>