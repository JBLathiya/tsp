<!DOCTYPE html>
<html>
<head>
	<title>Find Students</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 <style>
#d1
{
	margin-top:4%;
}
#d2
{
	
	
}
#he3
{
	margin-right:8%;
}
#bg
{
	margin-top: 68%;
	margin-left:0px;
}
.btn{min-width:215px;
	margin: 1px;
}
</style>
<script type="text/javascript">
function showDiv() {
   document.getElementById('d2').style.display = "block";
}
function showDiv1() {
   document.getElementById('d3').style.display = "block";
}
</script>
</head>
<body>
	
		<div style="width=500px;height: 110px; border: 3px dotted #73AD21;">
			<img src="./FI.jpg" alt="Smiley face" width="100" height="100"hspace="55">
		<div>
		
		<div class="container">
			<div class="row" id="d1">
			<div class="col-lg-3"style="width=600px;height: 370px; border: 3px  dotted #73AD21;">
				<div id="bg" class="btn-group-vertical" data-toggle="buttons">
  					<button type="button" class="btn btn-primary "onclick="showDiv()">Button</button>
  					<button type="button" class="btn btn-primary" onclick="showDiv1()" aria-pressed="true">Button</button>
  					<button type="button" class="btn btn-primary" aria-pressed="false">Button</button>
  					<button type="button" class="btn btn-primary" aria-pressed="false">Button</button>
 					 <button type="button" class="btn btn-primary" aria-pressed="false">Button</button>
  					<button type="button" class="btn btn-primary" aria-pressed="false">Button</button>
				</div>
			</div>
			
			<div class="col-lg-8" id="d2"style="width=600px; display:none; float:left; margin-left:15px;height: 370px; border: 3px dotted #73AD21;">
				Hello
			</div>

		</div>
		</div>


</body>

