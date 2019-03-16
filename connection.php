<?php

    $conn = mysqli_connect('localhost:3307','root', '', 'tsp');
    if (!$conn) 
    {
        die("Connot connect to Database : " . mysqli_connect_error());
    }
    else
    {	//echo "<br/>";
        //echo "connected";
    }
?>