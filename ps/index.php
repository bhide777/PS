<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="popup/sweetalert.js"></script>
</head>
<body>

<!-- 
    <script>
     alert("Successful");
     swal("Hello world!");</script> -->

    <div id="navbar">
        <div id="logo">
            <img src="bmsce.png" alt="bmsce">
        </div>
        <div class="main1">BMS College Of Engineering</div>
            <div class="main">Proctor Management System</div>
        
            <div class="nav">
           <a href="about.html">About</a>
           
                <a onclick="document.getElementById('adminlogin').style.display='block'"> Admin</a>
                <div id="adminlogin" class="modal">
       
                 <form class="modal-content animate" action="alogin.php" method="post">
                   <div class="imgcontainer">
                     <span onclick="document.getElementById('adminlogin').style.display='none'" class="close" title="Close Modal">&times;</span>
                     
                   </div>
               
                   <div class="container">
                     <label for="uname"><b>Username</b></label>
                     <input type="text" placeholder="Enter Username" name="uname" required>
               
                     <label for="psw"><b>Password</b></label>
                     <input type="password" placeholder="Enter Password" name="psw" required>
                       
                     <button type="submit" name="submit">Login</button>
                     <label>
                       <input type="checkbox" checked="checked" name="remember"> Remember me
                     </label>
                   </div>
               
                   <!-- <div class="container" style="background-color:#f1f1f1">
                     <button type="button" onclick="document.getElementById('adminlogin').style.display='none'" class="cancelbtn">Cancel</button>
                     <span class="psw">Forgot <a href="#">password?</a></span>
                   </div> -->
                 </form>
               </div>
               
               <script>
               // Get the modal
               var modal = document.getElementById('adminlogin');
               
               // When the user clicks anywhere outside of the modal, close it
               window.onclick = function(event) {
                   if (event.target == modal) {
                       modal.style.display = "none";
                   }
               }
               </script>
                <div class="dropdown">
            <div class="dropbtn">
                Faculty 
                <i class="fa fa-caret-down"></i>
            </div>
            <div class="dropdown-content">
             <a onclick="document.getElementById('flogin').style.display='block'"> Login</a>
             <div id="flogin" class="modal">
    
              <form class="modal-content animate" action="alogin.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('flogin').style.display='none'" class="close" title="Close Modal">&times;</span>
                  
                </div>
            
                <div class="container">
                  <label for="fname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="fname" required>
            
                  <label for="fpsw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="fpsw" required>
                    
                  <button type="submit" name="fsubmit">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>
            
                <!-- <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('flogin').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div> -->
              </form>
            </div>
            
            <script>
            // Get the modal
            var modal = document.getElementById('flogin');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
             <a onclick="document.getElementById('freg').style.display='block'"> Register</a>
             <div id="freg" class="modal">
    
              <form class="modal-content animate" action="register.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('freg').style.display='none'" class="close" title="Close Modal">&times;</span>
                  
                </div>
            
                <div class="container">
                  <label for="fname"><b>Faculty name</b></label>
                  <input type="text" placeholder="Enter facultyname" name="fname" required>
                  <label for="fid"><b>Faculty id</b></label>
                  <input type="text" placeholder="Enter facultyid" name="fid" required>
                  <label for="qualify"><b>Qualification</b></label>
                  <input type="text" placeholder="Qualifications seperated by comma" name="qualify" required>
                  <label for="specific"><b>Area Of interest</b></label>
                  <input type="text" placeholder="Specification " name="specific" required>
            
                  <label for="fpsw1"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="fpsw1" required>
                  <label for="fpsw2"><b>Confirm Password</b></label>
                  <input type="password" placeholder="Confirm Password" name="fpsw2" required>
                  <button type="submit" name="fregister">Register</button>
                  
                </div>
            
                <!-- <div class="container" style="background-color:#f1f1f1"> -->
                  <!-- <button type="button" onclick="document.getElementById('idre').style.display='none'" class="cancelbtn">Cancel</button> -->
                  <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                <!-- </div> -->
              </form>
            </div>
            
            <script>
            // Get the modal
            var modal = document.getElementById('freg');
            
            // When the user clicks anywhere outside of the modal, close it
            // window.onclick = function(event) {
            //     if (event.target == modal) {
            //         modal.style.display = "none";
            //     }
            // }
            </script>
            </div>
        </div>
         
        
         <div class="dropdown">
            <div class="dropbtn">
                Student 
                <i class="fa fa-caret-down"></i>
            </div>
            <div class="dropdown-content">
             <a onclick="document.getElementById('slogin').style.display='block'"> Login</a>
             <div id="slogin" class="modal">
    
              <form class="modal-content animate" action="alogin.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('slogin').style.display='none'" class="close" title="Close Modal">&times;</span>
                  
                </div>
            
                <div class="container">
                  <label for="uname"><b>USN</b></label>
                  <input type="text" placeholder="Enter USN" name="usn" required>
            
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="spsw" required>
                    
                  <button type="submit" name="ssubmit">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>
            
                <!-- <div class="container" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('slogin').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div> -->
              </form>
            </div>
            
            <script>
            // Get the modal
            var modal = document.getElementById('slogin');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
             <a onclick="document.getElementById('sreg').style.display='block'"> Register</a>
             <div id="sreg" class="modal">
    
              <form class="modal-content animate" action="register.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('sreg').style.display='none'" class="close" title="Close Modal">&times;</span>
                  
                </div>
            
                <div class="container">
                  <label for="usn"><b>USN</b></label>
                  <input type="text" placeholder="Enter USN" name="usn" required>
                  <label for="sname"><b>Student name</b></label>
                  <input type="text" placeholder="Enter Student name" name="sname" required>
                  <label for="syear"><b>Year</b></label>
                  <input type="text" placeholder="Enter Year/sem" name="syear" required>
                  <label for="smail"><b>E-mail</b></label>
                  <input type="text" placeholder="Enter E-mail" name="smail" required>
                  <label for="spsw1"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="spsw1" required>
                  <label for="spsw2"><b>Confirm Password</b></label>
                  <input type="password" placeholder="Confirm Password" name="spsw2" required>
                  <button type="submit" name="sregister">Register</button>
                  
                </div>
            
                <!-- <div class="container" style="background-color:#f1f1f1"> -->
                  <!-- <button type="button" onclick="document.getElementById('sture').style.display='none'" class="cancelbtn">Cancel</button> -->
                  <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                <!-- </div> -->
              </form>
            </div>
            
            <script>
            // Get the modal
            var modal = document.getElementById('sreg');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
            </div>
        </div>
            </div>
            </div>

    <section id="abc">
    
</section>
 
    </body>
    
    </html>
    <?php
 include("footer.php")
 ?>
    