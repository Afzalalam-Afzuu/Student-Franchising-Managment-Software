<?php

    $con = mysqli_connect('localhost','ashokain_bckup','Good@home','ashokain_bckup');
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>