<?php
session_start();
$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
$path = 'degree/'; // upload directory
if(!empty($_POST['comments']) || !empty($_POST['availability']) || !empty($_POST['experience']) || !empty($_POST['nativelanguage']) || !empty($_POST['distance']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$text=explode('.',$_FILES['image']['name']);
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
	$path = 'profilephoto/'.$img; 
if(move_uploaded_file($tmp,$path)) 
{

$comments = $_POST['comments'];
$availability=$_POST['availability'];
$experience =$_POST['experience'];
$nlag = $_POST['nativelanguage'];
$distance = $_POST['distance'];
//include database configuration file
include 'connection.php';
//insert form data in the database
$sqlregister = "UPDATE profile SET comment='" . $comments . "', availability='" . $availability ."', experience='" . $experience . "', nlag='" .$nlag . "', dis='" . $distance . "',photo='".$path."' WHERE id='".$_SESSION['user']."'";
   $result=mysqli_query($conn,$sqlregister);
    echo "Form Submitted succesfully";
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
