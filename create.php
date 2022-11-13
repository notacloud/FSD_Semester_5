<?php
include "config.php";
$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $genderErr = "";
$firstname = $lastname = $email = $password = $gender = "";
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    if (empty($_POST["firstname"])) {
        $firstnameErr = "Error! You didn't enter the First Name.";
        echo $firstnameErr;
        echo "\n";
    } else {
        $firstname = $_POST["firstname"];
    }
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Error! You didn't enter the Last Name.";
        echo $lastnameErr;
        echo "\n";
    } else {
        $lastname = $_POST["lastname"];
    }
    $email = $_POST["email"];
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if (!preg_match($pattern, $email)) {
        $emailErr = "Email is not valid.";
        echo $emailErr;
    } else {
    }
    if (empty($_POST["password"])) {
        $passwordErr = "Error! You didn't enter the Password.";
        echo $passwordErr;
        echo "\n";
    } else {
        $password = $_POST["password"];
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Error! You didn't selected the Gender.";
        echo $genderErr;
        echo "\n";
    } else {
        $gender = $_POST["gender"];
    }
    $sql = "INSERT INTO `t1`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$firstname','$lastname','$email','$password','$gender')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>

<html>

<body>

<h2 align="center">Signup Form</h2>

<form action="" method="POST">

<div align="center">
    <h3>Personal information:</h3>
    <br>
    <div>
    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="submit" name="submit" value="submit">
</div>
</div>

</form>

</body>

</html>