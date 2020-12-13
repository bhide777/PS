<?php
include "database.php";
session_start();

// Student register

if(isset($_POST['sregister']))
{
$usn = $_POST['usn'];
$sname = $_POST['sname'];
$syear = $_POST['syear'];
$pass = $_POST['spsw1'];
$cpass = $_POST['spsw2'];
$email = $_POST['smail'];
if($pass == $cpass){
$sql1 = "INSERT INTO student (usn, studentname, syear, spass, email, fid) VALUES ('$usn', '$sname', $syear, '$pass', '$email', '0')";


// $row = mysqli_num_rows($result);
if (mysqli_query($mysqli, $sql1)){
    $_SESSION['s_usn']=$usn;
header("location: student.php");
}
else{
    
    ?>
    <script type="text/javascript">
        alert("Login failed");
</script>
        <?php
        //header("location: index.html");
}
}
else
echo "Password doesnot match";
}


// faculty register

session_start();
if(isset($_POST['fregister']))
{
$fid = $_POST['fid'];
$fname = $_POST['fname'];
$specification = $_POST['specific'];
$qualification = $_POST['qualify'];
$pass = $_POST['fpsw1'];
$cpass = $_POST['fpsw2'];
if($pass == $cpass){
$sql1 = "INSERT INTO faculty (fid, fname, qualification, specification, pass) VALUES ('$fid', '$fname','$qualification','$specification', '$pass')";


// $row = mysqli_num_rows($result);
if (mysqli_query($mysqli, $sql1)){
    $_SESSION['aname']=$fname;
header("location: faculty.php");
}
else{
    
    ?>
    <script type="text/javascript">
        alert("Login failed");
</script>
        <?php
        //header("location: index.html");
}
}
else
echo "Password doesnot match";
}

