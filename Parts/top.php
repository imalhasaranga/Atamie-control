 <a href="#" title="logo"><img class="logo" src="img/middle_line1.jpg" alt="logo" /></a>


 <?php
 $indi = 0;
 session_start();
 include_once 'logics/Db.php';
  include_once 'logics/newfunctions.php';
 $status1 = "";
 if(isset ($_SESSION["status"])){
     $status1 = $_SESSION["status"];
      if($_SESSION["status"] == "loged"){
     
          $indi = 1;
      }

      
 }?>

 <?php if($indi == 0){ ?>
 <form action="logics/SignInLogic.php" method="post" id="form1">
     <p class="what" ><input type="text" id="search_input1"  style="float:left; width:110px; margin-left:3px; color:#999; font-style:italic" onclick="onccorrect1(this)" value="username" name="username"/><input type="text" id="search_input" value="password"  style="width:110px; margin-left:3px; color:#999; font-style:italic" onkeypress="onccorrect(this)" onclick="onccorrect(this)" name="password" />
          <input type="image"   src="img/search_button1.jpg" class="input" value=""  id="searchTop" name="search_top" onclick="document.getElementById('form1').submit()" /></p>
    </form>
    <?php } else { ?>
 <form action="logics/LogOutLogic.php" method="get" id="form2">
     <p class="what" >
          <input type="image"   src="img/search_button2.jpg" class="input" value=""  id="searchTop" name="search_top" onclick="document.getElementById('form2').submit()" />
     </p>
    </form>

 <?php } ?>
    <?php
    
    if(isset ($_SESSION["status"])){
        if($_SESSION["status"] != "loged"){
        ?>
    }
    <div id="message" style="color:red; font-size:9px; font-weight:500; text-align:right"><?php  echo "{$_SESSION["status"]}"; ?></div>
    <?php } } ?>




  