<!-- for 'courier' navbar, courier placing page -->
<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../index.php');
}

?>
<?php
include('header.php');
$email = $_SESSION['emm'];
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <style>
        body {
            background-image: url('../images/1920_1080.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .abc {
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <style>
        body {
            background-image: url('../images/1920_1080.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .abc {
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <form action="courierMenu.php" method="POST" enctype="multipart/form-data">
        <section class="h-50 gradient-form">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col">
                        <div class="card my-4 shadow-3">
                            <div class="row g-0">
                                <div class="col-xl-6 d-xl-block bg-image">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-4 text-uppercase">Sender Info</h3>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="sname" id="form3Example1m"
                                                class="form-control form-control-lg" placeholder="Sender's name"
                                                required />
                                            <label class="form-label" for="form3Example1m">Senders
                                                name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="textfield" name="saddress" id="form3Example8"
                                                class="form-control form-control-lg" placeholder="Sender's address"
                                                required />
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="number" name="sphone" id="form3Example3"
                                                class="form-control form-control-lg" placeholder="Sender's phone"
                                                required />
                                            <label class="form-label" name='sphone' for="form3Example3">Phone
                                                number</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="semail" id="form3Example2"
                                                class="form-control form-control-lg" value="<?php echo $email; ?>"
                                                readonly />
                                            <label class="form-label" for="form3Example2">Email</label>
                                        </div>

                                        <div class="form-outline mb-4 ">
                                            <input type="date" id="form3Example2" class="form-control form-control-lg"
                                                name="date" value="<?php echo date('Y-m-d'); ?>" readonly />
                                            <label class="form-label" for="form3Example2">Date</label>
                                        </div>

                                        <div class="form-outline mb-4 ">
                                            <input type="number" name="billno" id="form3Example2"
                                                class="form-control form-control-lg" placeholder="Transaction ID"
                                                required />
                                            <label class="form-label" for="form3Example2">Bill number</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card-body p-md-5 text-black">
                                        <h3 class="mb-4 text-uppercase">Receiver Info</h3>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="rname" id="form3Example1m"
                                                class="form-control form-control-lg" placeholder="Reciever's name"
                                                required />
                                            <label class="form-label" name='rname' for="form3Example1m">Recievers
                                                name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="textfield" name="raddress" id="form3Example8"
                                                class="form-control form-control-lg" placeholder="Reciever's address"
                                                required />
                                            <label class="form-label" for="form3Example8">Address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="number" name="rphone" id="form3Example3"
                                                class="form-control form-control-lg" placeholder="Reciever's phone"
                                                required />
                                            <label class="form-label" for="form3Example3">Phone
                                                Number</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" name='remail' id="form3Example2"
                                                class="form-control form-control-lg" placeholder="Reciever's mail"
                                                required />
                                            <label class="form-label" for="form3Example2">Email</label>
                                        </div>

                                        <div class="form-outline mb-4 ">
                                            <input type="number" name="wgt" id="form3Example2"
                                                class="form-control form-control-lg" placeholder="Weight in kg"
                                                required />
                                            <label class="form-label" for="form3Example2">Weight in
                                                kg</label>
                                        </div>

                                        <div class="form-outline mb-4 ">
                                            <label>Upload Image</label>
                                            <input type="file" name="simg" />
                                        </div>
                                    </div>
                                </div>
                                <section class=" gradient-custom">
                                    <div class="d-flex justify-content-center pt-3">
                                        <input type="submit" name="submit" value="Place Order"
                                            style="background-color: orange; border-radius: 15px; width: 140px; height: 50px;cursor:pointer;">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </form>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
</body>

</html>
<?php

if (isset($_POST['submit'])) { //if we'll not give this,it'will submit from with zero values.

    include('../dbconnection.php');

    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $semail = $_POST['semail'];
    $remail = $_POST['remail'];
    $sphone = $_POST['sphone'];
    $rphone = $_POST['rphone'];
    $sadd = $_POST['saddress'];
    $radd = $_POST['raddress'];
    $wgt = $_POST['wgt'];
    $billn = $_POST['billno'];
    $originalDate = $_POST['date'];
    $newDate = date("Y-m-d", strtotime($originalDate));
    $imagenam = $_FILES['simg']['name'];
    $tempnam = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempnam, "../dbimages/$imagenam");

    $qry = "INSERT INTO `courier` (`sname`, `rname`, `semail`, `remail`, `sphone`, `rphone`, `saddress`, `raddress`, `weight`, `billno`, `image`,`date`,`u_id`) VALUES ('$sname', '$rname', '$semail', '$remail', '$sphone', '$rphone', '$sadd', '$radd', '$wgt', '$billn', '$imagenam', '$newDate','$uid');";
    $run = mysqli_query($dbcon, $qry);

    // $trackqry= "INSERT INTO `track` (`u_id`, `c_id`) VALUES ('$uid', 'LAST_INSERT_ID()')";
    //$runtrack = mysqli_query($dbcon, $trackqry);

    if ($run == true) {

?>
<script>
    alert('Order Placed Successfully :)');
    window.open('courierMenu.php', '_self');
</script>
<?php
    }
}

?>