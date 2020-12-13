<?php
include "database.php";
for($i=1;$i<1000;$i++){
          if(isset($_POST[$i])){
                echo "hi";
                $fid=$_POST['b'.$i];
                echo $fid;
                $sql3 = "UPDATE student SET fid='$fid' WHERE sid=$i";
                // $result3 =;
                if( mysqli_query($mysqli,$sql3)){
                header("location: allocate.php");
                }
                else
                {
                   echo  '<h1>error</h1>'; 
                }
              }
        }
          ?>