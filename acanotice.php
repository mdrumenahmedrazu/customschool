<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About us</title>
</head>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
<body style="max-width: 1200px; margin: auto;">
<?php include'nav.php'; ?>
  <!-- Navbar -->





  <div class="card">
      <div class="card-body">

        <h5 class="card-title">Academic Notice</h5>
        <table  class="table table-bordered" style="text-align: left;">
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



<?php include 'footer.php'; ?>

</body>
</html>
