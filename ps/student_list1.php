<?php
include 'admin_nav.php';
include 'database.php';
?>
<br>
        <p style="text-align:center;font-size:40px;">First Year Students</p>
        <br>
      <table>
      <form class="modal-content animate" action=# method="post">
      <thead>
        <tr>
          <th>USN</th>
          <th>Student name </th>
          <th>Email </th>
          <th>Proctor name </th>
          <th>View </th>
        </tr>
</thead>
      <tbody>
          <?php
          $sel_st = "SELECT sid,usn,studentname,email,fid FROM student WHERE syear=1";
          $res_st = mysqli_query($mysqli,$sel_st);
          if(mysqli_num_rows($res_st)>0){
            while($row=$res_st->fetch_assoc()){
                $stid = $row['sid'];
                echo "<tr><td>".$row['usn']."</td>";
                echo "<td>".$row['studentname']."</td>";
                echo "<td>".$row['email']."</td>";
                $fid = $row['fid'];
                $sql1 = "SELECT fname FROM faculty WHERE fid='$fid'";
                $result1 = mysqli_query($mysqli,$sql1);
          // $row = mysqli_num_rows($result);
          if(mysqli_num_rows($result1)>0){
            while($row1 = $result1 -> fetch_assoc()){
                echo "<td>".$row1['fname']."</td>";
            }
        }
        else 
        echo "<td>None</td>";
        echo "<td><button type='submit' name='$stid'>Proctor dairy</button></td></tr>";
    }
}
else echo "<h1>unsuccessfull</h1>";
?>
      </tbody></form></table>

