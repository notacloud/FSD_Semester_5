<?php

$servername = "localhost";

$username = "root"; 

$password = "utkarsh@123"; 

$dbname = "t"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 