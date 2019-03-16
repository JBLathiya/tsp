<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 		<style type="text/css">
 			.notification {
  background-color: #66b3ff;
  color: white;
  text-decoration: none;
  padding: 10px 20px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
  width: 140px;

}

.notification:hover {
  background: green;
  color:yellow;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 75%;
  background: green;
  color: white;

}
.badge {
  position: absolute;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: green;
  color: white;



}
.sub{
	font-size: 25px;
	color: black;
	text-align: center;
}
ul#menu li {
  display:inline;
}
li{
	padding: 8px;
}
 		</style>
    <script type="text/javascript">
      function update(id) {
        // body...
        if(confirm('Are You Sure??')){
    $.ajax({
      type:'post',
      url:'updatea.php',
      data:{delete_id:id},
      success:function(data){
        $('#delete'+id).hide();
        alert(data);
      }
    });
  }
      }
    </script>
</head>
<body>
<div class="container">
<h1>Admin Panel</h1>
<ul id="menu">
	<li>
	<a href="#" class="notification">
  			<span class="sub" >Student</span>
  			<span class="badge">3</span>
  		</a>
  		<li>
  		<a href="#" class="notification">
  			<span class="sub">Tutor</span>
  			<span class="badge">3</span>
  		</a>
  		<li>
  </ul>
  <div >
    
    <div class="table-responsive">
  
  <table class="table" border="0">
    
  <th scope="col" width="4">No.</th>
  <th align="center">Tutor Name</th>
  <th align="center">Qualification Type </th>
  <th align="center">Qualification</th>
  <th align="center">Year</th>
  <th align="center">Document</th>
  <th align="center"></th>
  

<?php
 include "connection.php";

$count=0;
$sqlreport="select * FROM `admin` where acctype='tutor'";
$result=mysqli_query($conn, $sqlreport);
if (mysqli_num_rows($result) > 0)
        {
     while($rowreport = mysqli_fetch_assoc($result))
        {
          $count++;
         
          
          $id = $rowreport["id"]; 
          
          ?>
          <tbody>
            <tr id="delete<?php echo $id;?>">
               <td scope="row"><?php echo $count;?></td>
               <td><?php echo $rowreport["user"];?></td>
               <td><?php echo $rowreport["qualitype"];?></td>
               <td><?php echo $rowreport["quali"];?></td>

               <td><?php echo $rowreport["year"];?></td>
               <td><a class="btn btn-sm btn-info" href="download2.php?id=<?php echo $id; ?>">Download</a></td>
               
               <td><input type="button" id="s3" onclick="update(<?php echo $id;?>)" style="min-width: 30px;" class="btn btn-sm btn-secondary" value="Verify"/>
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
<?php
