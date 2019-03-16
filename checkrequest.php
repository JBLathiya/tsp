<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="request.css"/>
	<style type="text/css">
		
		h4{
	margin-top:15px;
}
#dv{
	background-color:#cccccc;
	height:70px;
	border:1px solid white;

}
#bv{
	min-width:140px;
	margin-top:15px;
	position:absolute;
	margin-left: 80%;

}
#bc{
	min-width:140px;
	margin-top:15px;
	margin-left:60%;
	
	position: absolute;
	
	
}
#p1{
	margin-top: 10px;

}
#p2{
	margin:15px 10px;
}
#i1{
	height: 60px;
	width:60px;
	border-radius: 50%;
	margin-top: 5px;
}
#p1{
	margin: 15px 10px;
}
#i2{
		margin-top:25px;margin-left:15px;width:150px;height:150px; border-radius: 50%;

	}
a{
font-size: 20px;
}

	</style>


<script type="text/javascript"> 
  $("#p1").click(function() {
    $("#dc").toggle()
    }); 
   $("#p2").click(function(){
   	$("#dc2").toggle()
   });       
</script>
	</script>

</head>
<body>

<div>
	<h4>Request(0)</h4>
	<hr width="100%">
	<div class="row" id="dv">
		<img src="img_avatar.png" id="i1" alt="alt">
		<a  id="p1" href="#">hello jaydeep</a>
		<button id="bc" class="btn btn-success">Accept</button>
		<button id="bv" class="btn btn-danger">Reject</button>
	</div>
	
		<div class="row" style="
    		width: auto;
			height: 260px;
			background-color:#d9d9d9;
			display: none" id="dc">
			<div class="col-lg-0">
		<img id="i2" src="img_avatar.png" alt="not" >

			<p style="margin: 10px 50px">Male,Age:25</p>
			</div>
				<div class="col-lg-4">
					<p style="margin-top: 15px">Name:Jaydeep Lathiya</p>
					<hr style="margin:0"width="230%">
					<p style="">Subject:Dbms</p>
					<hr style="margin:0" width="230%">
					<p>Time of batch:Morning</p>
					<hr style="margin:0" width="230%">
					<p>Location:Surat</p>
					<hr style="margin:0" width="230%">
					<p>Syllabus:</p>
					<button class="btn btn-success">Request Now</button>
				</div>
		

</div>
<div class="row" id="dv">
			<img src="img_avatar2.png" id="i1" alt="alt">
			<a  id="p2" href="#">hello jaydeep</a>
			<button id="bc" class="btn btn-success">Accept</button>
			<button id="bv" class="btn btn-danger">Reject</button>
		</div>
		<div class="row" style="
    		width: auto;
			height: 260px;
			background-color:#d9d9d9;
			display: none" id="dc2">
			<div class="col-lg-0">
		<img id="i2" src="img_avatar2.png" alt="not" >

			<p style="margin: 10px 50px">Male,Age:25</p>
			</div>
				<div class="col-lg-4">
					<p style="margin-top: 15px">Name:Jaydeep Lathiya</p>
					<hr style="margin:0"width="230%">
					<p style="">Subject:Dbms</p>
					<hr style="margin:0" width="230%">
					<p>Time of batch:Morning</p>
					<hr style="margin:0" width="230%">
					<p>Location:Surat</p>
					<hr style="margin:0" width="230%">
					<p>Syllabus:</p>
					<button class="btn btn-success">Request Now</button>
				</div>
		

</div>
	
</body>
</html>