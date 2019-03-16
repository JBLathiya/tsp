<?php 
include "connection.php";

$firstname2=$_POST['firstname1'];
echo $firstname2;
$title2 =$_POST['title1'];
$gender2 = $_POST['gender1'];
$surname2 = $_POST['surname1'];
$address12 = $_POST['address11'];
$address22 =$_POST['address21']; 
$country2 = $_POST['country1'];
echo $country2;
$town2 = $_POST['town1'];
$postcode2 = $_POST['postcode1'];
echo $postcode2;
$phone2 = $_POST['phone1'];
$phone22 = $_POST['phone21'];
echo $phone22;
$dobyear2 = $_POST['dobyear1'];
$dobmonth2 = $_POST['dobmonth1'];
$dobday2 = $_POST['dobday1'];
echo $dobday2;
echo $dobmonth2;
if(isset($_POST['firstname1'])){

  
  
    $sqlregister = "UPDATE perinfo SET title='" . $title2 . "', gender='" . $gender2 ."', surname='" . $surname2 . "', add1='" .$address12 . "', add2='" . $address22 . "', town='". $town2 ."', country='". $country2 ."',postcode='".$postcode2."',phone='".$phone2."',phone2='".$phone22."',ydob='" . $dobyear2 . "', mdob='" . $dobmonth2 . "', daydob='" . $dobday2 . "' WHERE id='". $firstname2 ."'";
   $result=mysqli_query($conn,$sqlregister);
    echo "Form Submitted succesfully";

}
mysqli_close($conn);
?>