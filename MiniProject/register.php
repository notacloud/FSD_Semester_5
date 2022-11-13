<?php
require_once "dbconnection.php";
require_once "session.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $fullname = $_POST["name"];
    $phn = $_POST["ph"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password == $confirm_password) {
        $qry = "INSERT INTO `users` (`email`, `name`, `pnumber`) VALUES ('$email', '$fullname', '$phn')";
        $run = mysqli_query($dbcon, $qry);
        if ($run == true) {

            $psqry = "INSERT INTO `login` (`email`, `password`, `u_id`) VALUES ('$email', '$password',LAST_INSERT_ID() )";
            $psrun = mysqli_query($dbcon, $psqry);
            ?>  <script>
            alert('Registration Successfully :)'); 
            window.open('index.php','_self');
            </script>
        <?php
        }
    } else {
         ?>  <script>
            alert('Record not registered!!'); 
            </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
        body
        {
        background-image:url('photo1.jpeg');
        background-size:cover;
        }
        .row{
            align-items:right;
            justify-content:right;
        }
        .container{
            text-align:center;
        }
    </style>
    </head>
    <body><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <h2 align='center' style="color:black;font-weight: bold;font-family:'Menlo'">Registration form</h2>
                    <P align='center' style="font-weight:bold;color:black;font-family:'Menlo';padding-bottom:30px">Please fill this form to create an account.</P>
                    <!-- <?php echo $success; ?>
                    <?php echo $error; ?> -->
                    <form action="" method="post">
                        <div class="form-group">
                            <label style="color:black">Full Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label style="color:black">Phone Number</label>
                            <input type="number" name="ph" class="form-control" required>
                        </div>    
                        <div class="form-group">
                            <label style="color:black">Email Address</label>
                            <input type="email" name="email" class="form-control" required />
                        </div>    
                        <div class="form-group">
                            <label style="color:black">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label style="color:black">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-danger" value="Register">
                        </div>
                        <p style="color:black">Already have an account? <a href="index.php" style="color: red;">Login here</a>.</p>
                        <p style="color:black;">Forgot Password? <a href="resetpswd.php" style="color:red">Click here</a>.</p>
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>