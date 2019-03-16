<html>
   <body>
      
      <?php
      include "connection.php";
      $sql="select * from upload";
      $result=mysqli_query($conn,$sql);
      $count=0;
      while($row=mysqli_fetch_array($result))
      {
         $path=$row['path'];
         $id=$row['id'];
         $count++;
         ?>
         <a href="download.php?id=<?php echo $id; ?>">Download<?php echo $count;?></a> 
   <?php
      }
      ?>
      </body>
      
   </body>
</html>