<?php
include "database.php";
$usn = $_SESSION['s_usn'];
$ret = "SELECT * FROM student WHERE usn='$usn' ";
$ret_result = mysqli_query($mysqli,$ret);
if(mysqli_num_rows($ret_result)){
    while($row=$ret_result->fetch_assoc()){
        $student_name = $row['studentname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
  .sidenav {
    height: 100%;
    width: 275px;
    position: fixed;
    z-index: 1;
    top: 85px;
    left: 0;
    background-color:#c0b7b7;
    overflow-x: hidden;
    padding-top: 20px;
  }
  </style>
</head>
<body>
<script>swal("Login successful!", "Good job", "success");</script>
    <div id="navbar">
        <div id="logo">
            <img src="bmsce.png" alt="bmsce">
        </div>
        <div class="main1">BMS College Of Engineering</div>
            <div class="mainadmin" style="margin-right: 114px;">Welcome <?php echo $student_name; ?> </div>
        
            <div class="nav" style="margin-top: -15px;">
                <div class="anav" style="margin-top: 20px;">  <a href="#">Proctor Dairy</a></div>
          <div class="anav" style="margin-top: 20px;">  <a href="#">Message</a></div>
            <!-- <div class="dropdown">
                <div class="dropbtn">Students
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="dropdown-content">
                    <a href="#">First year</a>
                    <a href="#">Second year</a>
                    <a href="#">Final year</a>
                </div>
            </div> -->
            <!-- <a href="#">Students</a></li> -->
            <div class="anav"  style="margin-top: 20px;"><a href="#">Notifications</a></div>
            <div class="anav"  style="margin-top: 20px;"><a href="logout.php">Logout</a></div>   
        </div>
        
            </div>
            <div class="sidenav">
             <div  style="margin-left: 25px; margin-bottom: 35px" >
               <img src="st.png" height="200px" width="200px">
             
             </div>
             <div style="margin-left: 15px">
             <?php
             echo "<h3>Name: ".$student_name."<br>"; 
             echo "USN: ".$row['usn']."<br>";
             echo "Email: ".$row['email']."<br>";
             echo "Year: ".$row['syear']."<br>";
             $proctor = $row['fid'];
             $ret2 = "SELECT fname FROM faculty WHERE fid='$proctor'";
             $ret2_res = mysqli_query($mysqli,$ret2);
             if($ret2_res)
             {
                 while($row2=mysqli_fetch_assoc($ret2_res)){
                    echo"Proctor: ".$row2['fname']."</h3>";
                 }
             }
             
            }
               }
               ?>
            </div>
            </div>
            </body>
    
    </html>