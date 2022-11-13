<!-- admin logIn page and login logic -->
<?php

session_start();
if (isset($_SESSION['uid'])) {

    header('location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Admin Login</title>
    <style>
        body {
            background-image:url('../adminphoto.jpeg');
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
        .btn 
        {
            background-color: green;
            border: none;
            color: black;
            padding: 7px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        </style>
</head>
<body>
<div class="container" >
        <div class="row">
            <div class="col-md-6">
            <h2 style="color:black;font-weight: bold;font-family:'Menlo';padding-top:70px">IPS COURIER MANAGEMENT</h2>
            <p align='center' style="color:black;font-family:'Menlo';font-weight:bold;padding-bottom:30px;">Delivering the way you want</p>
                <h2 style="color: black;font-family:'Menlo';font-weight:bold;">Admin Login</h2>
                <p style="color:black;font-family:'Menlo';font-weight:bold;">Please Fill Your Details</p>
                <form action="adminlogin.php" method="POST" style="margin: auto;">
                    <div class="form-group">
                        <label style="color:black;">Email Address</label>
                        <input type="email" name="uname" class="form-control" placeholder="Enter your email ID" required />
                    </div>
                    <div class="form-group">
                        <label style="color:black;">Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <input style="padding-left:15px" type="submit" name="login" class="btn btn-primary" value="  Login" />
                    </div>
                </form>
                <p>Go back to home. <a href="../index.php" style="color:yellow;">Click here.</a></p>
            </div>
        </div>
</div>
</body>

</html>

<?php

include('../dbconnection.php');
if (isset($_POST['login'])) {
    $ademail = $_POST['uname'];
    $password = $_POST['pass'];
    $qry = "SELECT * FROM `adlogin` WHERE `email`='$ademail' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) {
        ?>
        <script>
            alert("Incorrect username or password");
            window.open('adminlogin.php', '_self');
        </script><?php
    }
    else {
        $data = mysqli_fetch_assoc($run);
        $id = $data['a_id'];
        $_SESSION['uid'] = $id;
        header('location:dashboard.php');
    }
}
?>