<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_registration.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <title>IamBig user Registration</title>
</head>

<body>
    <div class="body_main">
        <div class="box1">
            <img src="4957136.jpg" alt="">
        </div>
        <div class="box1">
            <marquee behavior="" direction="">IamBig Registration Page</marquee>
            <form class="row g-3 m-2" action="user_registration.php" method="post">
                <div class="col-md-4">
                    <label for="validationServer01" class="form-label">First name</label>
                    <input type="text" class="form-control" autocomplete="First name" id="validationServer01" required
                        name="firstname">
                    <div class="valid-feedback" id="firstname"></div>
                </div>
                <div class="col-md-4">
                    <label for="validationServer02" class="form-label">Last name</label>
                    <input type="text" class="form-control in" autocomplete="Last name" id="validationServer02" required
                        name="lastname">
                    <div class="valid-feedback"> Looks good!</div>
                </div>
                <div class="col-md-4">
                    <label for="validationServerUsername" class="form-label">Mobile number</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend3">+91</span>
                        <input type="text" class="form-control is-invalid" autocomplete="Mobile number"
                            id="validationServerUsername"
                            aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required
                            name="mobilenumber">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            Please enter a valid number.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationServer03" class="form-label">Email ID</label>
                    <input type="email" class="form-control is-invalid" autocomplete="Email ID" id="validationServer03"
                        aria-describedby="validationServer03Feedback" required name="emailid">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationServer04" class="form-label">Create Password</label>
                    <input type="password" class="form-control is-invalid" autocomplete="I am big password"
                        id="validationServer04" name="password">
                    <div id="validationServer04Feedback" class="invalid-feedback">
                        Please create a strong password
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
                            aria-describedby="invalidCheck3Feedback" required name="checkbox">
                        <label class="form-check-label" for="invalidCheck3">
                            Agree to terms and conditions
                        </label>
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" name="submit_button"
                        value="Register">Register</button>
                    <button class="btn btn-primary" type="button" onclick="gohome()">Home</button>
                </div>
            </form>
            <script>
            function gohome() {
                document.location.href = 'index.php';
            }
            </script>
            <?php
                require "server.php";
                if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['submit_button']))) {
                    $user_f       = $_POST['firstname'];
                    $user_l       = $_POST['lastname'];
                    $mobilenumber = $_POST['mobilenumber'];
                    $emailid      = $_POST['emailid'];
                    $password     = $_POST['password'];

                    $select = "SELECT `FIRST NAME`, `LAST NAME`, `MOBILE NUMBER`, `E MAIL ID`, `PASSWORD` FROM `user registration` WHERE `PASSWORD`!='$password';";
                    $select = mysqli_query($conn, $select);
                    if ($select_fetch = mysqli_fetch_assoc($select)) {
                        $insert = $conn->prepare("INSERT INTO `user registration`(`FIRST NAME`, `LAST NAME`, `MOBILE NUMBER`, `E MAIL ID`, `PASSWORD`) VALUES (?,?,?,?,?)");
                        $insert->bind_param("sssss", $user_f, $user_l, $mobilenumber, $emailid, $password);
                        $insert->execute();
                        $_SESSION['user_f']       = $user_f;
                        $_SESSION['user_l']       = $user_l;
                        $_SESSION['mobilenumber'] = $mobilenumber;
                        $_SESSION['email']        = $emailid;
                        $_SESSION['password']     = $password;
                        echo "<div class='alertcon submit'>You have been registered successfully.</div>";
                    } else {
                        echo "<div class='alertcon unsubmit'>Create complex passwords that include a mix of letters, numbers, and special characters.</div>";

                    }
                }

            ?>
        </div>
    </div>
</body>
<script src="user_registration.js"></script>

</html>