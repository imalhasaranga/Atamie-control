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
	top:721px;
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
#message {
	position:absolute;
	left:311px;
	top:17px;
	width:268px;
	height:12px;
	z-index:1;
}
</style>
</head>
<body>

<div id="apDiv1">

<object type="application/x-shockwave-flash" width="303" height="251" wmode="transparent" data="video/flvplayer.swf?file=a.flv">
            <param name="movie" value="video/flvplayer.swf?a.flv" />
            <param name="wmode" value="transparent" />
        </object>
        <span style="font-weight:bold; color:#999; font-size:10px;"><center>Atamie theme song</center></span>
</div>
<div id="container">
  <!--<div id="blue_line"></div>-->
  <div id="header">
    <?php include("Parts/top.php") ?>
  </div>
<div id="slider1" style=" margin-left: -39px;">
        <?php include("Parts/header.php") ?>
    </div>
  
  <div class="menu">
   <?php include("Parts/topmenubar.php") ?>
  </div>

  <div class="news10" >
    <div class="imgblock" ><span>&gt;&gt; News for Branches </span></div>
    
    <div class="categories" style="margin-left:1px;">
    <table width="23"  cellpadding="5">
                                    <tbody>
                                        <tr >
                                            <td >
                                                <marquee height="300" width="240" scrollamount="1" scrolldelay="1" direction="up" onmouseover="this.stop()" onmouseout="this.start()">

                                                    <?php

                                                    include_once 'logics/Db.php';
                                                    include_once 'logics/newfunctions.php';
                                                    $result = Db::SqlQuery("select* from reports order by report_id desc limit 8");
                                                    while($out = mysql_fetch_array($result)){

                                                    ?>




                                                    <div align="left" style="margin: 0px;"><a style="color: #666666; font-size: 11px; text-decoration: none;font-family:Arial, Helvetica, sans-serif;"><?php echo $out["description"]; ?></a></div>
                                                    <br/>


                                                    <?php } ?>
                                                </marquee>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                  </div>              
                                
                                <div class="imgblock">
      <div class="imgblock"><span>&gt;&gt;&gt;&gt;</span></div>
    </div>
    <div class="categories">
        <ul>
        <li><a href="profile.php" title="">My Profile</a></li>
        <li><a href="index.php" title="">Atamie Home</a></li>
        
        
      </ul>
    </div>
    
    <p><br />
    </p>
    <!--[if IE 7]> <link rel="stylesheet" type="text/css" href="css/ie7.css" /> <![endif]--><!--<div class="news_end"></div>-->
  </div>
  

  
  <div class="content">
  <div class="textheading">
  Atami International</div>
    <div class="text">
      <p>Atamie International School was founded by Dr. Azard Uduman came on the 9th January 2003 with a student base of twelve. Today with the best service of the teachers, management and the supervisors, atamie inclusive of its school branches functions with more then one thousand five hundred students.</p>
      <p>Atamie International School maintains a multicultural, multi-ethnic, multi religious environment where citizens of Sri Lanka are brought together under one school flag, one national flag and a feeling of togetherness. Atamie International students are well guided by qualified academic panels which also understand the differences of each student and provide the true spirit of understanding to unite, think and work together in order to achieve common and personal goals in their life.</p>
      
    </div>
  
  <div class="text">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></div>
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