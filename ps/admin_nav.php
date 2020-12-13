<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="table_style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

  
</head>

<body>
<!-- <script>swal("Good job!", "You Logged in!", "success"); -->
<div id="navbar">
        <div id="logo">
            <img src="bmsce.png" alt="bmsce">
        </div>
        <div class="main1">BMS College Of Engineering</div>
            <div class="mainadmin">Welcome Admin</div>
        
            <div class="nav">
                <div class="anav" style="margin-top: 20px;">  <a href="allocate.php">Allocate</a></div>
          <div class="anav" style="margin-top: 20px;">  <a href="faculty_list.php">Faculties</a></div>
            <div class="dropdown">
                <div class="dropbtn">Students
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="dropdown-content">
                    <a href="student_list1.php">First year</a>
                    <a href="student_list2.php">Second year</a>
                </div>
            </div>
            <!-- <a href="#">Students</a></li> -->
            <div class="anav"  style="margin-top: 20px;"><a href="#">Notifications</a></div>
            <div class="anav"  style="margin-top: 20px;"><a href="logout.php">Logout</a></div>   
        </div>
        
            </div>
           
</body>
</html>
<?php
 include("footer.php")
 ?>
