
<div class="row justify-content-center" style="--mdb-gutter-x: 0rem;">
  <div class="col-md-6 p-3 text-center">

    <div class="card">
      <div class="card-body">

        <h5 class="card-title">Notice</h5>
        <table  class="table" style="text-align: left;">
        <?php
               $conn = mysqli_connect('localhost','root','','db_scpsc');
               $query2 = "SELECT * FROM notice ";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
        <tbody>
       <tr>
           <td>
            
               <a style="color:black; text-decoration: none;" href="admin_scpsc\admin\notice\download.php?file=<?php echo $rows['filename'] ?>"><?php echo $rows['name'] ?></a><br>
               <?php
               }
               ?>
           </td>
       </tr>
              </tbody>
   </table>

      </div>
    </div>

  </div>
  
  <div class="col-md-6 p-3 text-center">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Events</h5>
        <table class="table" style="text-align: left;">
                    <?php
        require 'admin_scpsc/admin/dbconfig.php';
      $query ="SELECT * FROM `events`";
      $query_run = mysqli_query($connection,$query);
      $check_teachers = mysqli_num_rows($query_run) > 0;

      if($check_teachers)
      { 
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>


                    <tbody>
                        <tr>
                        <td><?php echo $row['name']; ?></td>
                        </tr>

                    </tbody>

                    <?php

          
}
}
else
{
  echo "No Events Found";
}



?>

                    </table>
      </div>
    </div>
  </div>
</div>