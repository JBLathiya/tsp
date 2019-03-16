<?php
session_start();
$_SESSION['user'] = "Jaydeep";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>
    

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
                      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

                      <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
                     <link href="profile.css" rel="stylesheet" type="text/css"></link>
</head>

<style type="text/css">
 
</style> 
<script type="text/javascript">
 

  $(document).ready(function() {  
    
    $("#perinfo").click(function() {  
         $(".perinfo").css('display', 'block');
         $(".proinfo,.qualification,.accinfo").hide();     
    });
    $("#perinfo").trigger('click');
    $("#proinfo").click(function() {  
         $(".proinfo").css('display', 'block'); 
          $(".qualification,.accinfo,.perinfo").hide();  
    });
    $("#qualification").click(function() {  
         $(".qualification").css('display', 'block');
         $(".accinfo,.perinfo,.proinfo").hide(); 

    });
    $("#accinfo").click(function() {  
         $(".accinfo").css('display', 'block');
          $(".perinfo,.proinfo,.qualification").hide();   
    });  
});
 
   
  
 
 function countryChange(selectObj) { 
 // get the index of the selected option 
 var countryLists = new Array(4) 
 countryLists["empty"] = ["Select a Qualification"]; 
 countryLists["School"] = ["10th", "12th"]; 
 countryLists["University"] = ["A Level", "BA", "Bcom", "BEd","BE","BSc","BTech","Diploma","Diploma in Law","IELTS","LLB","MA","MBA","ME","MBBS","MChem","MSc","MPhy","MEd","MPharm","PhD"];  
 var idx = selectObj.selectedIndex; 
 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = countryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("cou"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 console.log(len);
 while (cSelect.options.length > 0) { 
 cSelect.remove(0);
 console.log('1'); 

 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 console.log(cList[i]);
 // add the new option
 console.log(newOption); 
 try { 
 cSelect.add(newOption);
 console.log("success");
  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption);
 console.log('j'); 
 
 } 
 } 
 } 
//]]>
   
function readURL(input){
 var ext = input.files[0]['name'].substring(input.files[0]['name'].lastIndexOf('.') + 1).toLowerCase();
if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
    var reader = new FileReader();
    reader.onload = function (e) {
        $('#Photo').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
if(Math.round(input.files.item(0).size/1024)<=1000){
                                document.getElementById("filemsg").innerText="Your file Size is : " + Math.round(input.files.item(0).size/1024) + " Kb";
                            }
else{
  document.getElementById("filemsg").innerText="Your file Size is more than 1 Mb"}
}


function addedit(){
 var photo = document.getElementById("image");
 var img = 'profilephoto/'+photo.files.item(0).name;
  var comments = document.getElementById("comments").value;
var availability = document.getElementById("availability").value;
var experience = document.getElementById("experience").value;
var nlag = document.getElementById("nativelanguage").value;
var distance = document.getElementById("distance").value;
var dataString = '&img='+ img + '&comments=' + comments + '&availability=' + availability + '&experience=' + experience + '&nlag=' + nlag + '&distance=' +  distance ;
if (comments == '' || availability == '' || experience == '' || nlag == '' || distance == '') {
alert("Please Fill All Fields");
}  else {
  jQuery.ajax({

       type: "POST",

       url: "editprofile.php",

       data: dataString,

      
       success: function(html)

       {

         alert(html);

       }

     });
}
return false;
}
function add()
{
var firstname = document.getElementById("firstname").value;
var title = document.getElementById("title").value;
var gender = document.getElementById("gender").value;
var surname = document.getElementById("surname").value;
var address1 = document.getElementById("address1").value;
var address2 = document.getElementById("address2").value;
var country = document.getElementById("country").value;
var town = document.getElementById("town").value;

var postcode = document.getElementById("postcode").value;
var phone = document.getElementById("phone").value;
var phone2 = document.getElementById("phone2").value;
var dobyear = document.getElementById("dobyear").value;
var dobmonth = document.getElementById("dobmonth").value;
var dobday = document.getElementById("dobday").value;
console.log(dobday);
console.log(dobmonth);
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&firstname1=' + firstname + '&title1=' + title + '&gender1=' + gender + '&surname1=' + surname + '&address11=' +  address1 + '&address21='+ address2 + '&town1='+ town + '&country1='+ country +'&postcode1='+ postcode +'&phone1='+ phone +'&phone21='+ phone2 +'&dobyear1='+ dobyear +'&dobmonth1='+ dobmonth +'&dobday1='+ dobday;
if (title == '' || gender == '' || surname == '' || address1 == '' || address2 == '' || country == '' || town == '' || postcode == '' || phone == '' || phone2 == '' || dobyear == '' || dobmonth == '' || dobday == '') {
alert("Please Fill All Fields");
}  else {
	jQuery.ajax({

       type: "POST",

       url: "perinfo.php",

       data: dataString,

      
       success: function(html)

       {

         alert(html);

       }

     });
}
return false;
}
 
function addacc(){
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var password2 = document.getElementById("password2").value;
var dataString = '&email=' + email + '&password=' + password + '&password2=' + password2 ;
if (email == '' || password == '' || password2 == ''){
  alert("Please Fill All Fields");
}
else{
  jQuery.ajax({

       type: "POST",

       url: "accinfo.php",

       data: dataString,

      
       success: function(html)

       {

         alert(html);

       }

     });
}
return false;
}

function qualiAjax(id) {
  // body...
  if(confirm('Are You Sure??')){
    $.ajax({
      type:'post',
      url:'remove3.php',
      data:{delete_id:id},
      success:function(data){
        $('#delete'+id).hide();
      }
    });
  }
}


</script>
</head>
<body>


<nav role='navigation' class="navbar navbar-expand-lg navbar-static-top navbar-light bg-light">

  <button class="navbar-toggler collapsed icon-bars" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="#navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarColor01">
  <ul class="nav navbar-nav">
   <li class="nav-item" > <a id="perinfo" href="#home" class="nav-link">Personal Info</a></li>
   <li class="nav-item" > <a id="proinfo" href="#about" class="nav-link">Edit Profile</a></li>
    <li class="nav-item" ><a id="qualification" href="#ct" class="nav-link">Add Qualification</a></li>
    <li class="nav-item" ><a  id="accinfo" href="#contact" class="nav-link">Account</a></li>
  </ul>
</div>
</nav>

<div id="push" class="">
  
<?php include 'per.php'?>
<?php include 'edit.php';?>
<?php include 'quali.php';?>




 <?php include 'acc.php';?>

  </div>

</div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="javascript.js"></script>

    
</body>
</html>