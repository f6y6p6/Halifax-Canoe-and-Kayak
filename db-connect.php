<?php
    $connect = mysqli_connect("localhost", "root", "", "halifaxcnk");
    
    if($connect === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>