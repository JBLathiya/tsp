<html>
<body>
	<?php
	session_start();
	$_SESSION["id"] = "id"; ?>
<script type="text/javascript">
	function deAjax(id) {
	// body...
	if(confirm('Are You Sure??')){
		$.ajax({
			type:'post',
			url:'remove2.php',
			data:{delete_id:id},
			success:function(data){
				$('#delete'+id).hide();
			}
		});
	}
}
</script>
<?php
include 'connection.php';
if(isset($_POST['batch_id']))
{
	if($_POST['batch_id']!='')
	{
		$sql="SELECT * FROM student WHERE batch='".$_POST['batch_id']."'";
	}
	?>
	<div class="table-responsive">
  &nbsp;
  <table class="table" border="0">
    
  <th scope="col" width="4">No.</th>
  <th align="center">Name</th>
  <th align="center"></th>
  <tbody>
	<?php
	$count=0;
	$result=mysqli_query($conn,$sql);
	if (!$result)
	{
		echo(mysqli_error($conn));
	}
	if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
	{
		$count++;
			if(isset($_SESSION['id']))
			{
			$id = $row["id"]; 
			?>
            <tr id="delete<?php echo $id;?>">
               <td scope="row"><?php echo $count;?></td>
               <td><?php echo $row["name"];?></td>
              &nbsp;<td><input type="button" id="s3" onclick="deAjax(<?php echo $id;?>)" style="min-width: 30px;position:absolute;" class="btn btn-sm btn-danger" value="Reject"/>
            </tr>
            <?php
        }
        ?>
        </td>
    </tr>

 <?php

	}
}
}
?>
</tbody>
</table>
</div>
</body>
</html>