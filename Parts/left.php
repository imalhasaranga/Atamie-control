<?php




$type = $_SESSION["type"];


?>
<div class="sidenav">





    
<?php if($type == "1"){  ?>
    <h2> <strong>Scheduling</strong> &gt;&gt;</h2>
    <ul>
        <li><a href="timetable.php">&nbsp;&nbsp;Time Table of School</a></li>
        <li><a href="teachersprogram.php">&nbsp;&nbsp;Time Table of Programs</a></li>
    </ul>

    <h2><strong>Payments &gt;&gt;</strong></h2>
    <ul>
        <li><a href="payments.php?a=1">&nbsp;&nbsp;Manage Payments</a></li>
    </ul>

    <h2> Staff &gt;&gt;</h2>
    <ul>
        <li><a href="viewstaff.php">&nbsp;&nbsp;View Staff</a></li>
        <li><a href="mesage.php">&nbsp;&nbsp;Message to Staff</a></li>
    </ul>

    <h2> Resources Of Schools &gt;&gt;</h2>
    <ul>
        <li><a href="viewclasresors.php">&nbsp;&nbsp;Class Resources</a></li>
    </ul>

    <h2> Report History &gt;&gt;</h2>
    <ul>
        <li><a href="reports.php">&nbsp;&nbsp;View Reports</a></li>
    </ul>
<?php  }else if($type == "2"){ ?>


    <h2> <strong>Time Table</strong> &gt;&gt;</h2>
    <ul>
        <li><a href="schooltimeview.php">&nbsp;&nbsp;View School Tiime Table</a></li>
        <li><a href="programview.php">&nbsp;&nbsp;View Teacher Programs </a></li>

    </ul>

    <h2><strong>Payments &gt;&gt;</strong></h2>
    <ul>
        <li><a href="paymentsviewprinci.php">&nbsp;&nbsp;View lecturer Payment Reports</a></li>
    </ul>

    <h2> Resources &gt;&gt;</h2>
    <ul>

        <li><a href="classresourses.php">&nbsp;&nbsp;Add Resources</a></li>
    </ul>
     <h2> Staff &gt;&gt;</h2>
    <ul>

        <li><a href="newprofile.php">&nbsp;&nbsp;Add New Lecturer</a></li>
         <li><a href="approvelecture.php">&nbsp;&nbsp;Approve Lecturer Details</a></li>
         <li><a href="mesage.php">&nbsp;&nbsp;Message</a></li>
    </ul>
    
 <?php }else if($type == "3"){ ?>



    <h2> <strong>Time Table</strong> &gt;&gt;</h2>
    <ul>
        <li><a href="mytimetable.php">&nbsp;&nbsp;My Time Table</a></li>
       
    </ul>

    <h2><strong>Payments &gt;&gt;</strong></h2>
    <ul>
        <li><a href="mypayemnts.php">&nbsp;&nbsp;View My Payments</a></li>
    </ul>

    <h2> Staff &gt;&gt;</h2>
    <ul>
        
        <li><a href="mesage.php">&nbsp;&nbsp;Complaint</a></li>
    </ul>

    





<?php }?>
</div>




