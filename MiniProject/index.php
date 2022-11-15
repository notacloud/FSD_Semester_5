<?php

require_once "dbconnection.php";
require_once "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $qry = "SELECT * FROM `login` WHERE `email`='$email' AND `password`='$password'";
    $run = mysqli_query($dbcon, $qry);
    $row = mysqli_num_rows($run);
    if ($row < 1) { ?>
<script>
    alert("Invalid username and password. Try again!!");
    window.open('index.php', '_self');
</script>
<?php } else {
        $data = mysqli_fetch_assoc($run);
        $id = $data["u_id"]; //fetch id value of user
        $email = $data["email"];
        $_SESSION["uid"] = $id; //now we can use it until session destroy
        $_SESSION["emm"] = $email;
?>
<script>
    alert("Welcome to the IPS Courier Management Portal");
    window.open('home/home.php', '_self');
            // changes made here
</script>
<?php }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('photo1.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .row {
            align-items: right;
            justify-content: right;
        }

        .container {
            text-align: center;
        }

        .btn {
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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 style="color:black;font-weight: bold;font-family:'Menlo';padding-top:30px">IPS COURIER MANAGEMENT
                </h2>
                <p align='center' style="color:black;font-family:'Menlo';font-weight:bold;padding-bottom:60px;">
                    Delivering the way you want</p>
                <h2 style="color: black;font-family:'Menlo';font-weight:bold;">Login</h2>
                <p style="color:black;font-family:'Menlo';font-weight:bold;">Please Fill Your Details</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label style="color:black;">Email Address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email ID"
                            required />
                    </div>
                    <div class="form-group">
                        <label style="color:black;">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password"
                            required>
                    </div>
                    <div class="form-group">
                        <input style="padding-left:15px" type="submit" name="submit" class="btn btn-primary"
                            value="  Sign In" />
                        <button onclick="window.location.href='resetpswd.php'" class="btn btn-danger"
                            style="cursor:pointer">Reset Password</button>
                    </div>
                    <p style="color: black;">Don't have an account?<a href="register.php" style="color:red;">Register
                            here</a>.</p>
                    <p style="color: black;">Are you admin?<a href="admin/adminlogin.php" style="color:red;">Login
                            here</a>.</p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>w