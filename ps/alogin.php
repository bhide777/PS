<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "database.php";
session_start();
// Admin login

if(isset($_POST['submit']))
{
$auser = $_POST['uname'];
$apass = $_POST['psw'];
$sql = "SELECT 'aid' FROM admin WHERE username='$auser' AND adminpass='$apass'";
$result = mysqli_query($mysqli,$sql);
// $row = mysqli_num_rows($result);
if(mysqli_num_rows($result)==1){
    $_SESSION['aname'] = $auser;
    $_SESSION['status'] = "Login successful";
    $_SESSION['status_code'] = "Success";
    ?>
    <script>
    //  alert("Successful");
    swal("Login successful!", "Good job", "success");</script>
    <?php
header("location: admin.php");
}
else{
    $_SESSION['status'] = "Login unsuccessful";
    $_SESSION['status_code'] = "Fail";
        header("location: index.php");
}
}

// student login

if(isset($_POST['ssubmit']))
{
$susn = $_POST['usn'];
$stupass = $_POST['spsw'];
$sql = "SELECT 'usn' FROM student WHERE usn='$susn' AND spass='$stupass'";
$result = mysqli_query($mysqli,$sql);
// $row = mysqli_num_rows($result);
if(mysqli_num_rows($result)==1){
    $_SESSION['s_usn']=$susn;
    $_SESSION['status'] = "Login successful";
    $_SESSION['status_code'] = "Success";
header("location: student.php");
}
else{
    $_SESSION['status'] = "Login unsuccessful";
    $_SESSION['status_code'] = "Fail";
        header("location: index.php");
}
}


// faculty login

if(isset($_POST['fsubmit']))
{
$fname = $_POST['fname'];
$fpass = $_POST['fpsw'];
$sql = "SELECT 'fname' FROM faculty WHERE fname='$fname' AND pass='$fpass'";
$result = mysqli_query($mysqli,$sql);
// $row = mysqli_num_rows($result);
if(mysqli_num_rows($result)==1){
    $_SESSION['aname']=$fname;
    $_SESSION['status'] = "Login successful";
    $_SESSION['status_code'] = "Success";
header("location: faculty.php");
}
else{
    
    $_SESSION['status'] = "Login unsuccessful";
    $_SESSION['status_code'] = "Fail";
        header("location: index.php");
}
}




mysqli_close($mysqli);
?>