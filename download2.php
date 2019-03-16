<?php 
include "connection.php";
$id=$_GET['id'];
$sql="select * from `admin` where id='$id'";
$query1=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($query1))
        {
        	$path=$row['certi'];
        	header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($path));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($path));
            ob_clean();
            flush();
            readfile($path);
            exit;
        }
?>