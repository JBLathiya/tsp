<?php 
include "connection.php";

$id = $_POST['delete_id'];


if($id > 0){

  
  
    $query = "DELETE FROM `student` WHERE id='$id'";
    mysqli_query($conn,$query);
   


}