<!DOCTYPE html>
<html>
<head>
	<title>Find Students</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="login.css">
 <style>
#d3
{
	margin-top:3%;
}
#d2
{
	margin-top:3%;
	
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
#b1{min-width:100px;
	margin-left: 60%;
}
</style>
<script type="text/javascript">
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal.style.display = "none";
  }
}
</script>
</head>
<body>
	
		<div style="width=500px;height: 110px; border: 3px dotted #73AD21;">
			<img src="./FI.jpg" alt="Smiley face" width="100" height="100"hspace="55">
			<button class="btn btn-success" id="b1" onclick="openForm()">Login</button>
			<div class="form-popup" id="myForm">
				<span onclick="document.getElementById('myForm').style.display='none'" class="close" id="s1" title="Close Modal">&#10006;</span>
  				<form action="/action_page.php" class="form-container">
    				<h1>Login</h1>


   				 	<label for="email"><b>Email</b></label>
    				<input type="text" placeholder="Enter Email" name="email" required>

    				<label for="psw"><b>Password</b></label>
    				<input type="password" placeholder="Enter Password" name="psw" required>

    				<button type="submit" class="btn">Login</button>
    				<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  				</form>
			</div>

		<div>
		
	<div id="d3"style="height:370px; border:3px dotted #73AD21;">
		<center>
			<div id="d2">
			<button id="b3" onclick="document.getElementById('id01').style.display='block'">Student Signup</button>&nbsp;&nbsp;<button id="b3"  onclick="document.getElementById('id02').style.display='block'">Tutor Signup</button>
		<div id="id01" class="modal">
  				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&#10006;</span>
  		<form class="modal-content" method="post" action="action_page.php" >
    		<div class="container">
      				<h1>Student Sign Up</h1>
      			<p>Please fill in this form to create an account.</p>
      			<hr>
      			<label for="email"><b>Email</b></label>
      			<input type="text" placeholder="Enter Email" name="email" required>

      			<label for="psw"><b>Password</b></label>
      			<input type="password" placeholder="Enter Password" name="psw" required>

      			<label for="psw-repeat"><b>Repeat Password</b></label>
      			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      			<label>
        		<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      			</label>

      			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      			<div class="clearfix">
        		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        		<button type="submit" id="b4"class="signup">Sign Up</button>
      			</div>
    		</div>
  		</form>
				
	</div>
</center>
</div>
	<center>
		<div id="id02" class="modal">
  				<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&#10006;</span>
  		<form class="modal-content" method="post" action="action_page.php" >
    		<div class="container">
      				<h1>Tutor SignUp</h1>
      			<p>Please fill in this form to create an account.</p>
      			<hr>
      			<label for="email"><b>Email</b></label>
      			<input type="text" placeholder="Enter Email" name="email" required>

      			<label for="psw"><b>Password</b></label>
      			<input type="password" placeholder="Enter Password" name="psw" required>

      			<label for="psw-repeat"><b>Repeat Password</b></label>
      			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      			<label>
        		<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      			</label>

      			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      			<div class="clearfix">
        		<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        		<button type="submit" id="b4"class="signup">Sign Up</button>
      			</div>
    		</div>
  		</form>
				
	</div>
	</center>
		</div>


</body>

