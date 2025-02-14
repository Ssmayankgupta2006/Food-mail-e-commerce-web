<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_login.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <title>IamBig User login</title>
</head>

<body>
    <div class="main_con">
        <div class="main_box">
            <img src="4957136.jpg" alt="">
        </div>
        <div class="main_box">
            <marquee behavior="" direction="">IamBig Login page</marquee>
            <form action="user_login.php" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-text">+91</div>
                    <input type="text" class="form-control" placeholder="Enter Registered mobile number "
                        aria-label="Recipient's username" aria-describedby="button-addon2" name="mobilenumber" required>
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Sent OTP</button>
                </div>
                <div class="col-sm-3">
                    <label class="visually-hidden" for="specificSizeInputName">OTP</label>
                    <input type="text" class="form-control" id="specificSizeInputName" placeholder="OTP" required>
                </div>
                <div class="col-auto mt-2">
                    <button type="submit" class="btn btn-primary" name="loginhai" value="login">login</button>
                </div>
            </form>
            <?php
                require "server.php";
                if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['loginhai']))) {
                    $mobile_number = $_POST['mobilenumber'];

                    $find = "SELECT `FIRST NAME`, `LAST NAME`, `MOBILE NUMBER`, `E MAIL ID`, `PASSWORD` FROM `user registration` WHERE `MOBILE NUMBER`='$mobile_number';";
                    $find = mysqli_query($conn, $find);
                    if ($find_fetch = mysqli_fetch_assoc($find)) {
                        $user_f       = $find_fetch['FIRST NAME'];
                        $user_l       = $find_fetch['LAST NAME'];
                        $mobilenumber = $mobile_number;
                        $password     = $find_fetch['PASSWORD'];
                        $emailid      = $find_fetch['E MAIL ID'];

                        $_SESSION['user_f']       = $user_f;
                        $_SESSION['user_l']       = $user_l;
                        $_SESSION['mobilenumber'] = $mobilenumber;
                        $_SESSION['email']        = $emailid;
                        $_SESSION['password']     = $password;
                        echo "
                <script>
                    document.location.href='index.php';
                </script>
                ";
                    } else {
                        echo "<div class='alertcon unsubmit'>You are not register with this mobile number.</div>";
                    }
                }

            ?>
        </div>
    </div>
</body>

</html>