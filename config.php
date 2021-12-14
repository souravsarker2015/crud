<?php 
    $severname="localhost";
    $username="root";
    $password="1234";
    $dbname="crud";
    $conn=new mysqli($severname,$username,$password,$dbname);

    if($conn->connect_error){
        die("connection failed" .$conn->connect_error);
    }
?>