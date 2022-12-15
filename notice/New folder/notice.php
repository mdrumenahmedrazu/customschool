<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>
<body>

   
   <table border="1px" align="center">
>
       <tr>
           <td>
              <?php
               $conn = mysqli_connect('localhost','root','','uploadphp');
               $query2 = "SELECT * FROM filedownload ";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
               <a style="color:black; text-decoration: none;" href="download.php?file=<?php echo $rows['filename'] ?>"><?php echo $rows['name'] ?></a><br>
               <?php
               }
               ?>
           </td>
       </tr>
   </table>
    
</body>
</html>