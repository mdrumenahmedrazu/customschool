<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>upload</title>
</head>
<body>
   
   <?php
    $conn = mysqli_connect('localhost','root','','uploadphp');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "files/".$fileName;
        
        $query = "INSERT INTO filedownload(`name`,`filename`) VALUES ('$name','$fileName')";
        $run = mysqli_query($conn,$query);
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            echo "success";
        }
        else{
            echo "error".mysqli_error($conn);
        }
        
    }
    
    ?>
   
   <table border="1px" align="center">
       <tr>
           <td>
               <form action="upload.php" method="post" enctype="multipart/form-data">
               <lable> Name </label><br>
        <input type="text" name="name" id="name"/> <br>
                    <input type="file" name="file">
                    <button type="submit" name="submit"> Upload</button>
                </form>
           </td>
       </tr>
       <tr>
           <td>
              <?php
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