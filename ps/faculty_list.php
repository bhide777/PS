<!-- <style>
    input[type=submit] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    cursor: pointer;
  }
  </style> -->
<?php
include 'admin_nav.php';
include 'database.php';
?>

      <table>
      <!-- <form class="modal-content animate" action="allocate2.php" method="post"> -->
      <thead>
        <tr>
          <th>FID</th>
          <th>Faculty name </th>
          <th>Qualification </th>
          <th>Specification </th>
        </tr>
</thead>
      <tbody>
          <?php
          $sel_faculty = "SELECT * FROM faculty";
          $res_list = mysqli_query($mysqli,$sel_faculty);
          if(mysqli_num_rows($res_list)>0){
              while($row=$res_list->fetch_assoc()){
                echo "<tr><td>". $row['fid']."</td>";
                echo "<td>". $row['fname']."</td>";
                echo "<td>". $row['qualification']."</td>";
                echo "<td>". $row['specification']."</td></tr>";
                ?>
            
           <?php   }
          }?>

          <div id='flist' class='modal'>
          <div class="imgcontainer">
                     <span onclick="document.getElementById('flist').style.display='none'" class="close" title="Close Modal">&times;</span>
                     
                   </div>
               
                   <div class="container">
                    <h2>kasco</h2>
                   </div>
          </div>
          </tbody>
      </table>