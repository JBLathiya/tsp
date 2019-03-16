<?php 
session_start();
include "connection.php";

$email=$_POST['email'];
$password =$_POST['password'];
$password2 = $_POST['password2'];
if($password!=$password2){
	echo "password does not match";
}else{


  
  
    $sqlregister = "UPDATE accinfo SET email='" .$email. "', pass='" . $password ."' WHERE user='".$_SESSION['user']."'";
   $result=mysqli_query($conn,$sqlregister);
    echo "Form Submitted succesfully";


}
mysqli_close($conn);
?>