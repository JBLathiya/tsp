
<!DOCTYPE html>
<html>
<head>
	<title>Find Students</title>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
<link href="example.css" rel="stylesheet" type="text/css"></link>




<script>
	
$(document).ready(function() {
///// show /// 
	

	//$("#b5").trigger('click');
	
	$('#bu').click(function(){
		$('#d2').load('find.php', function() {
           /// can add another function here

      });
	});
	//$("#bu").trigger('click');
	$('#b1').click(function(){
		$('#d2').load('checkrequest.php', function() {
           /// can add another function here

      });
	//$('#d2').show();
	//$('#d3').hide();
	})
	$('#b2').click(function(){
		$('#d2').load('activeclass.php', function() {
           /// can add another function here
      
      });
	})
	<?php
if(isset($_SESSION['class']))
{
	echo('<script>
$(document).ready(function() {
	$("#b2").trigger("click")
});</script>');
	unset($_SESSION['class']);
}
?>
	$('#b3').click(function(){
		$('#d2').load('uploadmaterial.php', function() {
           /// can add another function here
      
      });
	})
	<?php
if(isset($_SESSION['profile']))
{
	echo('<script>
$(document).ready(function() {
	$("#b3").trigger("click")
});</script>');
	unset($_SESSION['profile']);
}
?>
	$('#b4').click(function(){
		$('#d2').load('contacts.php #d2', function() {
           /// can add another function here
      
      });
	})

	$('#b5').click(function(){
		$('#d2').load('support.php', function() {
           /// can add another function here
      
      });
	

	})
	<?php
if(isset($_SESSION['Article']))
{
	echo('<script>

$(document).ready(function() {
	$("#b5").trigger("click")
});</script>');
	unset($_SESSION['Article']);
}
?>
	

	
	$('#b6').click(function(){
		$('#d2').load('feedback.php', function() {
           /// can add another function here
      
      });
	})

//////Hide ////////
	//$('#b2').click(function(){
	//$('#d2').hide();
	//$('#d3').show();
////////////////
})

</script>




</head>
<body>
	
			
		<div class="container">
			<div class="row" id="d1">
			<div class="col-lg-0"style="height: 390px;position: relative;border: 3px dotted #73AD21;">
				<h5 style="margin-left:30px">Jaydeep lathiya</h5>
				<p style="margin-left:30px">Tutor id:15043011</p>
				<h6 style="margin-left:25px;">Joined on:<?php echo date("d/m/Y") ?></h6>
				<div id="bg" class="btn-group-vertical" data-toggle="buttons">
  					<button type="button" id="bu" class="btn btn-primary" aria-pressed="false" >Home(Find Student)</button>
  					<button type="button" id="b1" class="btn btn-primary" aria-pressed="false">Check Request<span class="badge">0</span></button>
  					<button type="button"  id="b2" class="btn btn-primary" aria-pressed="false">Active Class</button>
  					<button type="button"  id="b3" class="btn btn-primary" aria-pressed="false">My profile</button>
 					 <button type="button"  id="b4" class="btn btn-primary" aria-pressed="false">Who's Found Me?</button>
  					<button type="button"   id="b5" class="btn btn-primary" aria-pressed="false">My Article</button>
  					<button type="button"   id="b6"class="btn btn-primary" aria-pressed="false">Feedback</button>
				</div>
			</div>
			
			<div class="col-lg-9" id="d2"style="width:auto;float:left; margin-left:15px;height:auto;border: 3px dotted #73AD21; ">
			</div>
			<!--<div class="col-lg-8" id="d3"style="width=600px; display:none; float:left; margin-left:15px;height: 370px; border: 3px dotted #73AD21;">
				Hello Jaydeep
			</div>-->

		</div>
		</div>

</body>
</html>


