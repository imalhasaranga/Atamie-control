
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
                    width : 390,

                    autoOpen: true,
                    modal: true,
                    buttons: {

                        "Add": function() {

                            $(this).dialog("close");
                            window.location = "profile.php";
                            var user = document.getElementById("user").value;
                            var pas = document.getElementById("pass").value;
                            var date = document.getElementById("datepicker").value;
                            getAjax(user,pas,date);
                        },

                        "Cancel": function() {

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
        <div id="dialog-message" title="Add New Lecturer">

            <table width="368" height="172" border="0">
                <tr>
                    <td width="25" height="49">&nbsp;</td>
                    <td width="111">User Name</td>
                    <td width="179"><input type="text" id="user"/></td>
                    <td width="35">&nbsp;</td>
                </tr>
                <tr>
                    <td height="32">&nbsp;</td>
                  <td>Password</td>
                    <td><input type="text" id="pass"/></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td height="43">&nbsp;</td>
                    <td>Joind Date</td>
                    <td><input type="text"  id="datepicker"/></td>
                    <td>&nbsp;</td>
                </tr>
          <tr>

                    <td colspan="4">by clicking &quot;Add&quot; this user will be save to the system and he/she will be able to change details later </td>


                </tr>
            </table>
        </div>
    </body>
</html>