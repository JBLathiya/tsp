<?php
session_start();
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'degree/'; // upload directory
if(!empty($_POST['continent']) && !empty($_POST['cou']) && !empty($_POST['school']) && !empty($_POST['grade']) && !empty($_POST['qualificationyear']) && $_FILES['upfile'])
{
$img = $_FILES['upfile']['name'];
$tmp = $_FILES['upfile']['tmp_name'];
$text=explode('.',$_FILES['upfile']['name']);
      $text1=end($text);
      $file_ext=strtolower($text1);
// get uploaded file's extension
//$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
//$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($file_ext, $valid_extensions)==true) 
{ 
//$path = $path.strtolower($final_image); 
	$path = 'degree/'.$img; 
if(move_uploaded_file($tmp,$path)) 
{

$qt = $_POST['continent'];
$quali=$_POST['cou'];
$ub =$_POST['school'];
$grade = $_POST['grade'];
$year = $_POST['qualificationyear'];
//include database configuration file
include_once 'connection.php';
//insert form data in the database

    $sqlregister = "INSERT INTO qualification (user,qualitype,quali,ub,grade,year,status) VALUES('".$_SESSION['user']."','".$qt."','".$quali."','".$ub."','".$grade."','".$year."','pending')";
   $result=mysqli_query($conn,$sqlregister);
   $sqladmin = "INSERT INTO admin (user,acctype,qualitype,quali,ub,grade,year,certi) VALUES('".$_SESSION['user']."','tutor','".$qt."','".$quali."','".$ub."','".$grade."','".$year."','".$path."')";
   $result=mysqli_query($conn,$sqladmin);
echo "saf";
}
} 
else 
{
echo 'invalid';
}
}
else{
	
echo "please upload file";

}

?>
