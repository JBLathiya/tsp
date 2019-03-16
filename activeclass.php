<?php
// Start the session
session_start();
$_SESSION["class"] = "class";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Font Awesome -->
<script type="text/javascript">

$(document).ready(function(){
	$('#batch').change(function(){
		var batch_id = $(this).val();
    console.log(batch_id);
		$.ajax({
			url:"load_data.php",
			method:"POST",
			data:{batch_id:batch_id},
			success:function(data){
				$('#show_batch').html(data);
			}


		});

	});
   var frm = $('#myform');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url:frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                alert('uploadedd successfully');
                console.log(batch);
            }
        });
      });


});
</script>
</head>
<body>

<form action="activeclass.php" method="POST" id="myform" enctype = "multipart/form-data">
<div class="row">
 
  <div class="col-sm-4 col-md-4">
  	 <label class="control-label" for="company">Select Batch</label>
    <select id="batch" name="batch" class="form-control">
     <option value="none" selected="selected">select:</option>

      <option value="b1">Batch 1</option>
      <option value="b2">Batch 2</option>
      <option value="b3">Batch 3</option>
    </select> 
    </div>

<div class="col-sm-2">
</div>

 <div class="col-sm-0 col-md-0">
    
         <label class="control-label" for="company">Upload File</label>
   <br>
  <div class="custom-file">
    <input type="file" name="image" style="border:solid lightblue; border-width:small;" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
   
  </div>
 </div>

  <div class="col-sm-0">
    <label class="control-label" for="company"></label>
   <input type="submit" id="s3" name="upload" style="margin:6px 0px 0px 2px; ;min-width: 30px;position:absolute;" class="btn btn-md btn-info" value="Upload"/>
</div>
</div>

           <!-- <?php if(isset($_POST['upload'])){?>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?></li>
            <li>File size: <?php echo $_FILES['image']['size'];  ?></li>
            <li>File type: <?php echo $_FILES['image']['type']; ?></li>
         <?php } ?>
         </ul>-->
</form>
<div class="row" id="show_batch">
	</div>

<?php
  include "connection.php";
   if(isset($_POST['upload'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
     
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $text=explode('.',$_FILES['image']['name']);
      $text1=end($text);
      $file_ext=strtolower($text1);
      $extensions= array("jpeg","jpg","png","pdf");
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
        $path="documents/".$file_name;
         move_uploaded_file($file_tmp,$path);
         $sql="insert into upload(filename,path) values('$file_name','$path')";
         $result=mysqli_query($conn, $sql);
         if($result==true){
          //echo("<script>location.href = 'demo.php';</script>");
          header("Location:demo.php");
          exit;
         }
      }else{
         print_r($errors);
      }
   }
?>
</body>
</html>