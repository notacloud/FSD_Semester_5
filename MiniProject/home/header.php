
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Home</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    .bs-example{
        margin: 0;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light">
        <a href="home.php" class="navbar-brand">
            <img src="../photo2.jpg" height="80" alt="CoolBrand">
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link" style="font-weight:bold;">Home</a>
                <a href="price.php" class="nav-item nav-link" style="font-weight:bold;">Price</a>
                <a href="courierMenu.php" class="nav-item nav-link" style="font-weight:bold;">Courier</a>
                <a href="trackMenu.php" class="nav-item nav-link" style="font-weight:bold;">Track</a>
                
                <a href="profile.php" class="nav-item nav-link" style="font-weight:bold;">Profile</a>
                <a href="contactUS.php" class="nav-item nav-link" style="font-weight:bold;">Contact Us</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="../admin/logout.php" class="nav-item nav-link" style="font-weight:bold;">Admin Page</a>
                <a href="../logout.php" class="nav-item nav-link" style="font-weight:bold;">Logout</a>
            </div>
        </div>
    </nav>
</div>
</body>
</html>
<?php include('footer.php'); ?>

  