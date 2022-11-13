<!-- when admin click delete user link, it displays all users with delete option -->
<?php
    session_start();
    if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../login.php');
    }

?>
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
<?php
include('head.php');
?>
<body>
<h5 ><a href="dashboard.php" style="float: left; color:aliceblue;">Back to dashboard</a> <a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">Logout</a></h5>
<div class="container" >
        <div class="row">
            <div class="col-md-6">
            <h2 style="color:black;font-weight: bold;font-family:'Menlo';padding-top:30px">IPS COURIER MANAGEMENT</h2>
            <p align='center' style="color:black;font-family:'Menlo';font-weight:bold;padding-bottom:30px;">Delivering the way you want</p>
                <h2 style="color: black;font-family:'Menlo';font-weight:bold;">Search Users Information</h2>
            </div>
        </div>
</div>

<div style="overflow-x:auto;">
<table width='80%' border="1px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;border-collapse: collapse;">
    <tr style="background-color: yellow;">
        <th style="text-align:center;">S.No</th>
        <th style="text-align:center;">Users Name</th>
        <th style="text-align:center;">Email Id</th>
        <th style="text-align:center;">Action</th>
    </tr>
</body>

    <?php

        include('../dbconnection.php');

        $qry= "SELECT * FROM `users`"; //AND `name` LIKE '%name%'
        $run= mysqli_query($dbcon,$qry);

        if(mysqli_num_rows($run)<1){
            echo "<tr><td colspan='6'>There is no Data in Database</td></tr>";
        }
        else{
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
            ?>
            <tr align="center">
                <td><?php echo $count; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><a  style="color:yellow" href="usersdeleted.php?emm=<?php echo $data['email']; ?>">Delete user</a></td>
            </tr>
            <?php
            }
        }


    
    ?>

</table>
</div>