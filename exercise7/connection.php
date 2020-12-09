<?php

    //create connection
    $conn = mysqli_connect('localhost', 'root', '', 'register');

    //check connection
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

?>

