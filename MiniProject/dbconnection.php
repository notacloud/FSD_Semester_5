<?php

    $dbcon = mysqli_connect('localhost','root','utkarsh@123','courierdb');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>