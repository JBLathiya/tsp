<div id="headerblock">
    <div id="logo"><a href="/">
		<img src="images/logo.png" alt="Tutor Hunt"  title="Tutor Hunt - Discover New Learning Possibilities"> </a>
	</div>
	<div id="headertel">&nbsp;</div> 
	<div class="header mobyes">
		<a href="#my-mobile-menu" id="mobmenubutton" title="Menu">
			<span></span>
			<span></span>
			<span></span>
		</a>
	</div>
	<div class="mobyes mobregister">
		<a href="signup.asp"><img src="images/button-register.png" alt="Sign Up" title="Sign Up"></a>
	</div>
	<div style="float: right; margin-top: 20px;" class="mobno">
		<div id="toploginout" style="position: relative; width: 175px; left: -5px;">
			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
				<img src="images/button-login.png" style="border: 0" alt="login">
			</button>
			
			<div id="id01" class="messagepop">
				<div style="text-align: center; margin: 24px 0 12px 0; position: relative;">
					<span onclick="document.getElementById('id01').style.display='none'" style="position: absolute; right: -20px; top: -80; color: blue; font-size: 35px; font-weight: bold;" title="Close Modal">&times;</span>
				</div>
				 
				<form method="post" id="loginform" name="loginform" action="checklogin.php"> 
						<p><input type="text" style="width: 223px; padding: 10px;" name="username" id="username" class="forminputtext" value="" placeholder="username"></p> 
						<p><input type="password" style="width: 223px; padding: 10px;" name="password" placeholder="password" id="password" class="forminputtext"></p> 
						<p><input type="submit"   value="submit" style="color: #fff; text-decoration: none;"></p> 
				</form>
			</div>
		</div> 

		<script>
		// Get the modal
		var messagepop = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == messagepop) {
				messagepop.style.display = "none";
			}
		}
		</script> 
	</div>
	
	
	<div id="socialmenubuttons">
		<a id="buttontwitter" href="http://twitter.com/tutorhunt/"><span class="buttext">Tutor Hunt on twitter</span></a> 
		<a id="buttonfacebook" href="http://www.facebook.com/tutorhunt/"><span class="buttext">Tutor Hunt on facebook</span></a> 
	</div>
	<div id="toplinks">
		<span class="mobno">
			<img src="images/icon-home-phone.png" style="position: relative; top: 2px;"> 
			<a href="tel:+91 7990704915">+91 7990704915</a> &nbsp;&nbsp;&nbsp; 
			<a href="about.asp">About</a> &nbsp;&nbsp;&nbsp;
		</span>
		 
	</div>
</div>