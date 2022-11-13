<!-- admin dashbord page with options for admin -->

<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}else{
    header('location: ../login.php');
}

?>

<?php
include('head.php');
?>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Admin Login</title>
    <style>
        body {
            background-image:url('../admin1.jpeg');
            background-size:cover;
            background-repeat:no-repeat;
        }
        .row{
            align-items:center;
            justify-content:center;
        }
        .container{
            text-align:center;
        }

a {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
        </style>
</head>
<body>
<div class="container" >
        <div class="row">
            <div class="col-md-6">
            <p><a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">Logout</a></p>
            <h2 style="color:black;font-weight: bold;font-family:'Menlo';padding-top:70px">IPS COURIER MANAGEMENT</h2>
            <p align='center' style="color:black;font-family:'Menlo';font-weight:bold;padding-bottom:30px;">Delivering the way you want</p>
            <h3 style="color:black;font-weight: bold;font-family:'Menlo';padding-top:30px;padding-bottom:40px">Welcome to Admin Dashboard</h3>
                <h2 style="color: black;font-family:'Menlo';font-weight:bold;"><a href="deletedata.php" style="color">Delete Data</a></h2>
                <h2 style="color: black;font-family:'Menlo';font-weight:bold;"><a href="deleteusers.php">Delete Users</a></h2>
                <p style="padding-top:50px;font-weight:bold;" >Want to login as user. <a href="../index.php" style="float: center; color:aliceblue;">Click here.</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>