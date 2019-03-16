<?php 
include "connection.php";

$id = $_POST['delete_id'];


if($id > 0){

  
  
    $query = "UPDATE `qualification` SET status='approved' WHERE id='".$id."'";
    mysqli_query($conn,$query);
   header('location:admin.php');


}