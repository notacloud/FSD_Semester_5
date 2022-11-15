<?php

session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="photo2.jpg" type="image/x-icon">
    <style>
        body {
            background-image: url('../images/1920_1080.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div align='center'><br><br><br><br>
        <h1 style="font-weight:bold;font-family:'Menlo'">This is IPS Courier Management Service</h1>
        <h4 style="font-weight:bold;font-family:'Menlo'">Delivering the way you want</h4><br><br>
    </div>
</body>

</html>