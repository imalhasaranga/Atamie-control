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


<div id="container">
  <!--<div id="blue_line"></div>-->
  <div id="header">
  
    <?php include("Parts/top.php") ?>
  </div>
 <div id="slider1" style=" margin-left: -39px;">
      <?php include("Parts/header.php") ?>
    </div>
  <div class="menu">
    <ul>
      <li class="active"><a href="#" title="About Us">About Us</a></li>
      <li><a href="#" title="Solutions">Solutions</a></li>
      <li><a href="#" title="Clients">Clients</a></li>
      <li><a href="#" title="Support">Support</a></li>
      <li><a href="#" title="Products">Products</a></li>
      <li><a href="#" title="Technologies">Technologies</a></li>
      <li><a href="#" title="Company news">Company news</a></li>
      <li><a href="#" title="Testomonials">Testimonials</a></li>
      <li><a href="#" title="Contact Us">Contact Us</a></li>
    </ul>
    <div class="cler"></div>
  </div>

  <div class="news">
    <div class="imgblock"><span>News for Branches </span></div><br />
    <a href="#" title="12.12.2009" class="datenews">12.12.2009</a>
    <div class="textnews">
      Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
      Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
      lobortis nisl ut aliquip ex ea commodo consequat.<br />
      <a href="#" title="read">read more &#62;&#62;</a>
    </div>
  <a href="#" title="12.12.2009" class="datenews">12.12.2009</a>
    <div class="textnews">
      Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
      Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
      lobortis nisl ut aliquip ex ea commodo consequat.<br/>
      <a href="#" title="read">read more &#62;&#62;</a>
    </div>
     <a href="#" title="12.12.2009" class="datenews">12.12.2009</a>
    <div class="textnews1">
      Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
      Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
      lobortis nisl ut aliquip ex ea commodo consequat.<br/>
      <a href="#" title="read">read more &#62;&#62;</a><br/><br/>
    </div>
    
    <div class="imgblock">
      <div class="imgblock"><span>Categories</span></div>
    </div>
 <!--[if IE 7]> <link rel="stylesheet" type="text/css" href="css/ie7.css" /> <![endif]--> 
    <div class="categories">
      <ul>
        <li><a href="#" title="Aenean nonummy">Aenean nonummy</a></li>
        <li><a href="#" title="Consectetuer">Consectetuer</a></li>
        <li><a href="#" title="Cum sociis natoque">Map sociis natoque</a></li>
        <li><a href="#" title="Fuscesu scipit">Fuscesu scipit</a></li>
        <li><a href="#" title="Hendrerit mauris">Hendrerit mauris</a></li>
        <li><a href="#" title="Loremip sum dolor">Loremip sum dolor</a></li>
        <li><a href="#" title="Phasellus porta">Phasellus porta</a> </li>
        <li><a href="#" title="Praesen tvestibulum">Praesen tvestibulum</a></li>
      </ul>
    </div>

    <div class="imgblock">
      <div class="imgblock"><span>Profiles</span></div>
    </div>
      <div class="categories">
        <ul>
        <li><a href="#" title="Development blog">Development blog</a></li>
        <li><a href="#" title="Documentation">Documentation</a></li>
        <li><a href="#" title="Plugins">Plugins</a></li>
        <li><a href="#" title="Suggest ideas">Suggest ideas</a></li>
        <li><a href="#" title="Suppoprt forum">Suppoprt forum</a></li>
        <li><a href="#" title="Themes">Themes</a></li>
        <li><a href="#" title="WordPress Planet">WordPress Planet</a> </li>
      </ul>
    </div>
      <!--<div class="news_end"></div>-->
  </div>
  

  
  <div class="content">
  <div class="textheading">
  Welcome </div>
    <div class="text">
      <p>Welcome to the world of Atamie education, with international standards and a local culture. Atamie International School promises a bright future to all our students. The most significant aim of our school is discipline and academic progress of our children.</p>
      <p>We want your son or daughter to leave Atamie International School not only with the best possible academic qualifications and with the key skills essential for success in Higher Education and the world of work, but also with the personal qualities, good ethics and interests necessary for a happy, fulfilling life and the foundation to be a responsible citizen as true sons and daughters of mother Lanka.</p>
      <p>May your intellectual abilities grow as you navigate our website.    </p>
    </div>
  <div class="dash"> 
  </div>
  <div class="textheading">
  Our Solution
  </div>
  <div class="text">
    <p>Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat
    lacinia fermentum. Proin ullamcorper urna et felis.<br />
    Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam
    erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. 
    Duis ac turpis. Integer rutrum ante eu lacus. Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget 
    nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
    
    <p>Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat
    lacinia fermentum. Proin ullamcorper urna et felis.<br />
    Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam
    erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. 
    Duis ac turpis. Integer rutrum ante eu lacus. Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget 
    nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros.</p>
  </div>
  
        
  <img class="img1" src="images/picture.jpg" alt="" title="Our solutions for Your Business" />
  <div class="dash"> 
  </div>
  <div class="textheading">
  Partners
  </div>
   <div class="text">
     <p>Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat
    lacinia fermentum. Proin ullamcorper urna et felis.<br />
    Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam
    erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. 
    Duis ac turpis. Integer rutrum ante eu lacus. Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget 
    nibh. Etiam cursus leo el metus. Nulla facilisi. Aenean nec eros.</p>
   </div>
   </div>
   
    
  <div id="footer">
    <!--<ul>-->
      <p><a href="#" title="About Us">About Us</a></p>
      <p><a href="#" title="Solutions">Solutions</a></p>
      <p><a href="#" title="Clients">Clients</a></p>
      <p><a href="#" title="Support">Support</a></p>
      <p><a href="#" title="Products">Products</a></p>
      <p><a href="#" title="Technologies">Technologies</a></p>
      <p><a href="#" title="Company news">Company news</a></p>
      <p><a href="#" title="Testimonials">Testimonials</a></p>
      <p><a href="#" title="Contact Us">Contact Us</a></p>
    <!--</ul>-->
  </div>
	<div id="copyright">
            
              
	</div> 
  </div>
</body>
</html>