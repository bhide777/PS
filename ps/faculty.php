<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<script>swal("Good job!", "You Logged in!", "success");</script>
    <div id="navbar">
        <div id="logo">
            <img src="bmsce.png" alt="bmsce">
        </div>
        <div class="main1">BMS College Of Engineering</div>
            <div class="mainadmin" style="margin-right: 114px;">Welcome Faculty </div>
        
            <div class="nav" style="margin-top: -15px;">
                <div class="anav" style="margin-top: 20px;">  <a href="#">Students</a></div>
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
            <section id="abc">
    
            </section>
            <?php
 include("footer.php")
 ?>
        </body>
    
        </html>