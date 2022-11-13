<!-- when admin click delete data link, page with filter options-->
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
<h5 ><a href="dashboard.php" style="float: left; color:aliceblue;">Back to dashboard</a> <a href="logout.php" style="float: right; margin-right:20px; color:aliceblue;">Logout</a></h5>
<div class="container" >
        <div class="row">
            <div class="col-md-6">
            <h2 style="color:black;font-weight: bold;font-family:'Menlo';padding-top:30px">IPS COURIER MANAGEMENT</h2>
            <p align='center' style="color:black;font-family:'Menlo';font-weight:bold;padding-bottom:30px;">Delivering the way you want</p>
                <h2 style="color: black;font-family:'Menlo';font-weight:bold;">Search Data Information</h2>
            </div>
        </div>
</div>

<div style="overflow-x:auto;">
<table width='80%' border="1px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;border-spacing: 5px 5px;">
    <tr style="background-color: #DFFF00;">
        <th style="text-align:center;">S.No</th>
        <th style="text-align:center;">Items Image</th>
        <th style="text-align:center;">Sender Name</th>
        <th style="text-align:center;">Receiver Name</th>
        <th style="text-align:center;">Sender Email</th>
        <th style="text-align:center;">Action</th>
    </tr>
</body>
    <?php
    include('../dbconnection.php');

    $qryd= "SELECT * FROM `courier`";
    $run= mysqli_query($dbcon,$qryd);

    if(mysqli_num_rows($run)<1){
        echo "<tr><td colspan='6'>No record found..</td></tr>";
    }
    else{
        $count=0;
        while($data=mysqli_fetch_assoc($run))
        {
            $count++;
        ?>
        <tr align="center">
            <td><?php echo $count; ?></td>
            <td><img src="../dbimages/<?php echo $data['image']; ?>" alt="pic" style="max-width: 100px;"/> </td>
            <td><?php echo $data['sname']; ?></td>
            <td><?php echo $data['rname']; ?></td>
            <td><?php echo $data['semail']; ?></td>
            <td><a href="datadeleted.php?bb=<?php echo $data['billno']; ?>" style="color:pink">Delete</a></td>
        </tr>
        <?php
        }
    }
    ?>
</table>
</div>
