<?php
    $conn= new mysqli('localhost','root','','spark');
    if($conn->connect_error){
        echo "connection failed";
        die;
    }
?>