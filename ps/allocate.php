<?php
include 'admin_nav.php';
include 'database.php';
?>

      <table>
      <form class="modal-content animate" action="allocate2.php" method="post">
      <thead>
        <tr>
          <th>USN</th>
          <th>Student name</th>
          <th>Select faculty</th>
          <th>Action</th>
        </tr>
</thead>
      <tbody>
          <?php
          $sql = "SELECT sid,usn,studentname,fid FROM student WHERE fid='0'";
          $result = mysqli_query($mysqli,$sql);
          // $row = mysqli_num_rows($result);
          if(mysqli_num_rows($result)>0){
            $c=0;
            while($row = $result -> fetch_assoc()){
              $c=$row['sid'];
                echo "<tr><td>".$row['usn']."</td>";
                echo "<td>".$row['studentname']."</td>";
                echo "<td><select name='b$c'>";
                $sql1 = "SELECT fid,fname FROM faculty";
                $result1 = mysqli_query($mysqli,$sql1);
          // $row = mysqli_num_rows($result);
          if(mysqli_num_rows($result1)>0){
            while($row1 = $result1 -> fetch_assoc()){
                echo "<option name='b$c' value='".$row1['fid']."'>".$row1['fname']."</option>";
            }
        }
        echo "</select></td>";
        echo "<td><button type='submit' name='$c'>Allocate</button></td></tr>";
    }
        }
        
?>
      </tbody></form></table>