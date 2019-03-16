<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="script.js" type='text/javascript'>
    
  </script>

	<style>
	.btn{
		margin-top: 
		

	}
	#s1{
		margin-top: 10px
	}
	#u1{
		margin-left: 5%;
    margin-top: 2%;
    min-width: 50px;
	}
  tr {

height:30px;                // <-- the rows height 
}
</style>
</head>
<body>
<div`>
	
<input type="button" id="u1" class="btn btn-info" aria-pressed="false" value="Add Article"onClick="Javascript:window.location.href = 'article.php';" />

<div class="table-responsive">
  &nbsp;
  <table class="table" border="0">
    
  <th scope="col" width="4">No.</th>
  <th align="center">Article name</th>
  <th align="center">Subject</th>
  <th align="center">Article Description</th>
  <th align="center"></th>
  
<?php

 include "connection.php";

$sqlreport="select * FROM `article`";
$result=mysqli_query($conn, $sqlreport);
if (mysqli_num_rows($result) > 0)
        {
     while($rowreport = mysqli_fetch_assoc($result))
        {
          $id = $rowreport['id'];
          $_SESSION["id"] = $id;
          ?>
          <tbody>
            <tr id="delete<?php echo $id;?>">
               <td scope="row"><?php echo $id;?></td>
               <td><?php echo $rowreport["aname"];?></td>
               <td><?php echo $rowreport["subject"];?></td>
               <td><?php echo $rowreport["abody"];?></td>
               <td><input type="button" id="s3" onclick="deleteAjax(<?php echo $id;?>)" style="min-width: 30px;" class="btn btn-sm btn-danger" value="Delete"/>
            </tr>


    <?php
        }
        ?>
      
<?php
      }
      else
      {
        ?>
      <tr>
        <td width="19%">No Record Found..</td><td></td><td></td><td></td><td></td>

      </tr>
        <?php
      }

        //echo "<script>window.print();</script>";
        mysqli_close($conn);
      
      ?>


</tbody>
      </table>
</div>

</body>


</html>