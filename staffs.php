<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sylhet Cantonment Public School and College</title>
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
<body style="max-width: 1200px; margin: auto; background-image: url('bg.png'); background-size:cover; background-attachment:fixed;">
  <!-- Navbar -->
<?php include'nav.php'; ?>













<div class="container py-5">
<div class="row mt-4">

      <?php
        require 'admin/dbconfig.php';
      $query ="SELECT * FROM `staffs`";
      $query_run = mysqli_query($connection,$query);
      $check_teachers = mysqli_num_rows($query_run) > 0;

      if($check_teachers)
      { 
        while($row = mysqli_fetch_assoc($query_run))
        {
          ?>
           <div class="col-md-3">
              <div class="card" style="margin:20px;">
                <div class="card-body text-center">
                  <div><?php echo '<img src="data:image;base64,'.base64_encode($row['photo']).'">' ?></div>
                  <h6 class="card-title" ><?php echo $row['name']; ?></h6>
                  <p class="card-text"><?php echo $row['profession']; ?></p>
                  <p class="card-text"><?php echo $row['mobile']; ?></p>
                </div>
              </div>
      </div>

          <?php

          
        }
      }
        else
        {
          echo "No Staffs Found";
        }



      ?>
    

<?php include 'footer.php'; ?>




</body>

</html>

<!-- Navbar -->
