<?php

$servername = "mysql-51512-0.cloudclusters.net";
$username = "admin";
$password ="10177";
$dbname = "ted";

// Create the conncection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}
