<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Reset Password</title>
    <style>
        .container
        {
            text-align:center;
        }
        .row
        {
            justify-content:center;
            align-items:center;
        }
        body
        {
            background-color:white;
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
        .photo
        {
            align-items:left;
            justify-content:left;
            background-image:url('photo2.jpg');
            background-repeat:no-repeat;
            background-size:cover;
            background-position:left;
            background-size:30%;
        }
    </style>

<link rel="icon" href="photo2.jpg" type="image/x-icon">
</head>
<body>
    <div class="photo"> <h1 align='center' style="margin: 15px; color:black;font-weight: bold;font-family:'Menlo'">IPS Courier Management</h1>
    <P align='center' style="font-weight:bold;color:black;padding-bottom:10px;font-family:'Menlo'">The Fastest Courier Service Ever</P>
    <h3 align='center' style="margin: 15px; color:black;font-weight: bold;font-family:'Menlo'">Reset Password</h3></div>
    
        <div class="container" style="margin-top: 60px; width:50%;">
            <div class="row">
                <div class="col-md-7">
                    
                    <form action="resetpswd.php" method="get">
            <h4 style="color: black; font-weight:bold;padding-top:20px; padding-bottom:40px;">Enter the following details</h4>
                            
                        <div class="form-group">
                            <label style="color:black; font-size:18px">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email ID" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary" value="Verify" />  
                        </div>
                        <p style="color: black; font-weight:bold;">Don't have an account? <a href="register.php" style="color:red">Register here</a>.</p>
                        <p style="color:black;  font-weight:bold;">Already have an account? <a href="index.php" style="color: red;">Login here</a>.</p>
                    </form>
                </div>
               
            </div>
        </div>
</body>
</html>

<?php
require_once "dbconnection.php";
// require_once "session.php";
if (isset($_REQUEST["submit"])) {
    $email = $_REQUEST["email"];
    $qryy = "SELECT * FROM `login` WHERE `email`='$email'";
    $run = mysqli_query($dbcon, $qryy);
    $row = mysqli_num_rows($run);

    if ($row < 1) { ?>
        <script>alert("Email not registered in system!!..Try again or Create new account");
            window.open('resetpswd.php','_self');
        </script>   <?php } else {
        $data = mysqli_fetch_assoc($run);
        $id = $data["u_id"];
        session_start();
        $_SESSION["gid"] = $id;
        ?>  <script>
              
            window.open('reset.php','_self');
            </script>
        <?php }
}
?>