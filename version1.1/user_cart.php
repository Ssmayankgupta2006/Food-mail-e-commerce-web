<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumar+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="navbarthis">
            <span id="foodmail">Food mail</span>
            <span
                id="username"><?php if (isset($_SESSION['user_f'])) {echo $_SESSION['user_f'] . '  ' . $_SESSION['user_l'];}?></span>
        </div>
        <div class="orders"> </div>
    </header>
    <main>
        <?php
            if (isset($_SESSION['user_f']) && (isset($_SESSION['user_l'])) && (isset($_SESSION['mobilenumber'])) && (isset($_SESSION['email'])) && (isset($_SESSION['password']))) {
                $user_f       = $_SESSION['user_f'];
                $user_l       = $_SESSION['user_l'];
                $name         = $user_f . " " . $user_l;
                $mobilenumber = $_SESSION['mobilenumber'];
                $emailid      = $_SESSION['email'];
                $password     = $_SESSION['password'];
                $add          = isset($_SESSION['add']) ? $_SESSION['add'] : "";

                require "server.php";
                $select    = "SELECT `PASSWORD`,`USER NAME`, `MOBILE NUMBER`, `EMAIL ID`,  `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT IMG`, `PRODUCT DIS`, `MARKET RS`, `ACTUAL RS`, `ENTRY DATE/TIME` FROM `user_cart` WHERE `USER NAME`='$name' and `MOBILE NUMBER`='$mobilenumber';";
                $select_ex = mysqli_query($conn, $select);
                echo "
                 <form id='cart_info' method='post' action='user_cart.php'>";
                while ($select_fetch = mysqli_fetch_assoc($select_ex)) {
                    $searchid = $select_fetch['PRODUCT SEARCH ID'];
                    echo "<button type='submit' name=' $searchid' value=' $searchid'>
                        <div class='box_for_img'>
                        <img  src='data:image/png;base64," . $select_fetch['PRODUCT IMG'] . "' alt='img' />
                    </div>
                        <div class='box_for_discription'>" . $select_fetch['PRODUCT DIS'] . "</div>
                    </button>";
                    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST[$searchid])) {
                        $_SESSION['search_id'] = $searchid;
                        echo "<script> document.location.href='product_discription.php';</script>";
                    }
                }
                echo " </form> ";
            }
        ?>
    </main>
</body>

</html>