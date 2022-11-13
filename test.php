<html>

<head>
    <style>
        body {
            background-color: grey;
        }
    </style>
    <script>
        function tick() {
            document.getElementById("root").innerHTML =
                "<div><label>It is "
                + new Date().toLocaleTimeString() +
                "</label></div>";
        }
        setInterval(tick, 1000);
    </script>
    <title>
        PHP page
    </title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION["page_count"])) {
        $_SESSION["page_count"] += 1;
    } else {
        $_SESSION["page_count"] = 1;
    }
    echo "You are visitor number " . $_SESSION["page_count"];
    echo "<br>";
    $nameErr = $emailErr = $phoneErr = $rollErr = "";
    $name = $email = $roll = $phone = $gender = "";
    if (isset($_POST['submit'])) {
        if (empty($_POST["myName"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["myName"]);
        }

        if (empty($_POST["myRoll"])) {
            $rollErr = "Name is required";
        } else {
            $roll = test_input($_POST["myRoll"]);
        }

        if (empty($_POST["myEmail"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["myEmail"]);
        }

        if (empty($_POST["myPhone"])) {
            $phoneErr = "Name is required";
        } else {
            $phone = test_input($_POST["myPhone"]);
        }

        if (empty($_POST["myGender"])) {
        } else {
            $gender = test_input($_POST["myGender"]);
        }
        $servername = "localhost";
        $username = "root";
        $password = "utkarsh@123";
        $databasename = "t1";
        $conn = mysqli_connect(
            $servername,
            $username,
            $password,
            $databasename
        );
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }

        echo "<br>";

        setcookie("cookie[Name]", "$name", time() + 50, "/");
        setcookie("cookie[Roll_Number]", "$roll", time() + 50, "/");
        setcookie("cookie[Email_id]", "$email", time() + 50, "/");
        setcookie("cookie[Phone]", "$phone", time() + 50, "/");
        setcookie("cookie[Gender]", "$gender", time() + 50, "/");

        if (
            isset($_POST["myName"]) &&
            isset($_POST["myEmail"]) &&
            isset($_POST["myGender"]) &&
            isset($_POST["myPhone"]) &&
            isset($_POST["myRoll"])
        ) {
            $query = mysqli_query(
                $conn,
                "insert into t1 values('$name',$roll,'$email',$phone,'$gender');"
            );

            if ($query) {
                echo "Record has been inserted into database!!";
            } else {
                echo "Error inserting data into database!!";
            }
        }

        if (isset($_COOKIE["cookie"])) {
            foreach ($_COOKIE["cookie"] as $n1 => $v1) {
                $n1 = htmlspecialchars($n1);
                $v1 = htmlspecialchars($v1);
                echo "$n1 : $v1 <br />\n";
            }
        }
        session_destroy();
    }

    if (isset($_POST['delete'])){
        $servername = "localhost";
        $username = "root";
        $password = "utkarsh@123";
        $databasename = "t1";
        $conn = mysqli_connect(
            $servername,
            $username,
            $password,
            $databasename
        );
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }
        if (
            isset($_POST["myName"]) &&
            isset($_POST["myEmail"]) &&
            isset($_POST["myGender"]) &&
            isset($_POST["myPhone"]) &&
            isset($_POST["myRoll"])
        ) {
            $query1 = mysqli_query(
                $conn,
                "delete from t1 where roll='$roll';"
            );

            if ($query1) {
                echo "Record has been deleted successfully!!";
            } else {
                echo "Error deleting record";
            }
        }
    }

    if (isset($_POST['update'])){
        $servername = "localhost";
        $username = "root";
        $password = "utkarsh@123";
        $databasename = "t1";
        $conn = mysqli_connect(
            $servername,
            $username,
            $password,
            $databasename
        );
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        }
        if (
            isset($_POST["myName"]) &&
            isset($_POST["myEmail"]) &&
            isset($_POST["myGender"]) &&
            isset($_POST["myPhone"]) &&
            isset($_POST["myRoll"])
        ) {
            $query1 = mysqli_query(
                $conn,
                "update t1 set name='$name',email='$email',phone='$phone',gender='$gender' where roll='$roll';"
            );

            if ($query1) {
                echo "Record has been updated!!";
            } else {
                echo "Error updating record";
            }
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h1 align="center" style="color: white;">Form page</h1>
    <div align="center" color="grey">
        <form name="lab2" action="<?php echo htmlspecialchars(
            $_SERVER["PHP_SELF"]
        ); ?>" method="post">
            <label style="color:white;" for="myRoll">Roll Number</label>
            <div>
                <input type="number" name="myRoll" id="myRoll">
            </div>
            <br>
            <label for="name" style="color: white;">Name</label>
            <div>
                <input type="text" name="myName" id="myName">
            </div>
            <br>
            <label style="color:white;" for=" myEmail">Email</label>
            <div>
                <input type="email" name="myEmail" id="myEmail">
            </div>
            <br>
            <label style="color:white;" for=" myGender">Gender</label>
            <div>
                <input type="radio" name="myGender" value="Male" checked>Male</input>
                <input type="radio" name="myGender" value="Female">Female</input>
                <input type="radio" name="myGender" value="Others">Others</input>
            </div>
            <br>
            <label style="color:white;" for="myPhone">Phone Number</label>
            <br>
            <div>
                <input type="text" name="myPhone">
            </div>
            <br>
            <div>
                <input style="color:blueviolet;" type="submit" name="submit" value="Submit Now">
                <input style="color:green;" name="update" type="submit" value="Update Now">
                <input style="color:black;" type="submit" name="delete" value="Delete Now">
                <input style="color:red;" type="reset" value="Reset Now">
            </div>
            <br>
            <label style="color:white;" for="myTime">Time</label>
            <br>
            <div id="root">
            </div>
        </form>
        <?php
        echo "<h3>Your Input:</h3>";
        echo "Name:" . $name;
        echo "<br>";
        echo "Roll Number:" . $roll;
        echo "<br>";
        echo "Email id:" . $email;
        echo "<br>";
        echo "Gender:" . $gender;
        echo "<br>";
        echo "Phone:" . $phone;
        ?>
    </div>
</body>
</html>
