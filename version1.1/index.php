<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="index.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Elsie:wght@400;900&display=swap" rel="stylesheet">
    <!-- font number two -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Contrail+One&display=swap"
        rel="stylesheet">
    <title>Food mail</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg nabvarhidhai">
            <div class="container-fluid">
                <a class="navbar-brand" id="foodmail_design">Food mail
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="user_registration.php">
                                <img src="icons8-registration-48.png" height="18px" width="18px" alt="">
                                Registration</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="user_login.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                                    <path fill-rule="evenodd"
                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                </svg>
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-cart2" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                                </svg>Cart
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                </svg>Profile
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Orders</a>
                        </li>
                    </ul>
                    <form class="d-flex form_search_desk" role="search">
                        <input type="search" placeholder="IamBig" aria-label="Search">
                        <button type="submit" value="Search" name="form_for_mobiles">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- for mobile display -->
        <div class="navbar_main">
            <div class="navbarhai">
                <span class="header_box box_name">
                    Food mail
                </span>
                <a href="user_registration.php" class="header_box box_registration_login">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                            fill="blue">
                            <path
                                d="M240-160q-33 0-56.5-23.5T160-240q0-33 23.5-56.5T240-320q33 0 56.5 23.5T320-240q0 33-23.5 56.5T240-160Zm0-240q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm0-240q-33 0-56.5-23.5T160-720q0-33 23.5-56.5T240-800q33 0 56.5 23.5T320-720q0 33-23.5 56.5T240-640Zm240 0q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Zm240 0q-33 0-56.5-23.5T640-720q0-33 23.5-56.5T720-800q33 0 56.5 23.5T800-720q0 33-23.5 56.5T720-640ZM480-400q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm40 240v-123l221-220q9-9 20-13t22-4q12 0 23 4.5t20 13.5l37 37q8 9 12.5 20t4.5 22q0 11-4 22.5T863-380L643-160H520Zm300-263-37-37 37 37ZM580-220h38l121-122-18-19-19-18-122 121v38Zm141-141-19-18 37 37-18-19Z" />
                        </svg>
                    </span>
                    <span>Registration</span>
                </a>
                <a href="user_login.php" class="header_box box_registration_login">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                            <path fill-rule="evenodd"
                                d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                        </svg>
                    </span>
                    <span>Login</span>
                </a>
            </div>
            <div class="navbarhaitwo">
                <a href="" class="header_box_two">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                    </span>
                    <span>Profile</span>
                </a>
                <a href="user_cart.php" class="header_box_two">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-cart2" viewBox="0 0 16 16">
                            <path
                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0" />
                        </svg>
                    </span>
                    <span>Cart</span>
                </a>
                <a href="" class="header_box_two">
                    <span>
                    </span>
                    <span>Orders</span>
                </a>
                <a href="" class="header_box_two">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chat-left" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                        </svg>
                    </span>
                    <span>Chat</span>
                </a>

            </div>
        </div>
        <div class="navbarhaithree">
            <form action="index.php" method="post">
                <input type="search" name="searchvalue" placeholder="Food mail search here" id="" required>
                <input type="submit" value="Search" name="form_for_mobiles">
            </form>
        </div>
        <div class="search_img">
        </div>
        <div class="form_search">
            <img src="improvesearch.png" alt="improvesearch">
            <form action="index.php" method="post">
                <?php
                    require "server.php";
                    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['form_for_mobiles'])) {
                        $search        = $_POST['searchvalue'];
                        $select_two    = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT MIN`, `PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `PRODUCT IMG`, `STATUS`, `ENTRY DATE/TIME`, `SELL` FROM `seller_product_registration` WHERE  (`PRODUCT NAME` LIKE '%" . $search . "%')";
                        $select_two_ex = mysqli_query($conn, $select_two);
                        while ($select_two_fetch = mysqli_fetch_assoc($select_two_ex)) {
                            $search_id = $select_two_fetch['PRODUCT SEARCH ID'];
                            echo "
                                <button type='submit' name='submitbysearch' value='$search_id'>
                                    <span class='button_box1'>" . $select_two_fetch['PRODUCT NAME'] . "</span>
                                    <span class='button_box2'>" . $select_two_fetch['PRODUCT DIS'] . "
                                    </span>
                                </button>";
                        }
                    }
                ?>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] = "POST" && isset($_POST['submitbysearch'])) {
                    $searchhai = $_POST['submitbysearch'];
                }
            ?>
        </div>

        <div class="header_box1">
            <div>This platform is dedicated to supporting small businesses and transforming them into efficient and
                thriving enterprises. By providing essential tools, resources, and guidance, we enable small
                businesses
                to reach their full potential and achieve sustainable growth. Join us to unlock new opportunities,
                streamline operations, and elevate your business to the next level.</div>
            <img id="imgbox" src="Untitled.png" alt="">
        </div>
        <div class="available_iteams">

        </div>
        <!-- for mobile display till here -->

    </header>
    <main>
        <form class="main_container" method="post" action="index.php">
            <?php
                require "server.php";
                global $searchhai;
                if (isset($searchhai)) {
                    $select_data = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT MIN`, `PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `PRODUCT IMG`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration` WHERE  (`PRODUCT NAME` LIKE '%" . $searchhai . "%');";
                } else {
                    $select_data = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT MIN`, `PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `PRODUCT IMG`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration`;";
                }
                $select_data_ex = mysqli_query($conn, $select_data);
                while ($select_fetch = mysqli_fetch_assoc($select_data_ex)) {
                    $productid = ($select_fetch['PRODUCT SEARCH ID']);
                    echo "
                <button type='submit' name='$productid' value='$productid' class='main_box_two_is' id=' $productid '>
                    <div>
                    <img  src='data:image/png;base64," . $select_fetch['PRODUCT IMG'] . "' alt='img' />
                    </div>
                    <div class='name_price'>
                        " . $select_fetch['PRODUCT DIS'] . "
                    </div>
                </button>";
                    if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST[$productid]))) {
                        $_SESSION['search_id'] = ($_POST[$productid]);
                        echo "<script> document.location.href='product_discription.php';</script>";
                    }
                }
            ?>
        </form>
        <div class="welcome_container">
            <div class="welcome_container_box" onclick="hidfunction()">
                close
            </div>
            <div class="welcome_container_box2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nostrum
                ex
                adipisci esse eligendi?
                Veniam magnam voluptate magni, ipsum quod praesentium earum odio explicabo quas sint alias quis esse
                adipisci aliquid exercitationem voluptatem sunt reiciendis. Quis sed maiores sapiente qui possimus.
                Quibusdam, dicta quidem. Distinctio rerum vitae quas optio labore, obcaecati est sapiente non inventore
                adipisci tempore blanditiis vel sit animi cupiditate ex dolorum ipsa quae nisi nobis repellat eveniet
                debitis eum? Id odio assumenda mollitia? Explicabo consequuntur quasi aut voluptate quas fuga laudantium
                doloribus quae quia architecto facere maxime minima nihil porro totam, ex sed, eius, voluptates velit
                fugit.</div>
        </div>
        <div class="bigsells">
            <div>
                <img src="mick.png" alt="">
                <img src="mick.png" alt="">
                <img src="mick.png" alt="">
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, officiis!lorem10
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, modi.
            </div>
        </div>
        <form class="main_container" method="post" action="index.php">
            <?php
                require "server.php";
                global $search_two;
                if (isset($search_two)) {
                    $select_data_sell = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT MIN`, `PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `PRODUCT IMG`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration` WHERE  (`PRODUCT NAME` LIKE '%" . $search_two . "%') AND `SELL`=='OPEN';";
                } else {
                    $select_data_sell = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT MIN`, `PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `PRODUCT IMG`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration` WHERE `SELL`='OPEN';";
                }
                $select_data_ex_sell = mysqli_query($conn, $select_data_sell);
                while ($select_fetch_sell = mysqli_fetch_assoc($select_data_ex_sell)) {
                    $productid_sell = ($select_fetch_sell['PRODUCT SEARCH ID']);
                    echo "
                <button type='submit' name='$productid_sell' value='$productid_sell' class='main_box_two_is' id=' $productid_sell'>
                    <div>
                    <img  src='data:image/png;base64," . $select_fetch_sell['PRODUCT IMG'] . "' alt='img' />
                    </div>
                    <div class='name_price'>
                        " . $select_fetch_sell['PRODUCT DIS'] . "
                    </div>
                </button>";
                    if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST[$productid_sell]))) {
                        $_SESSION['search_id'] = ($_POST[$productid_sell]);
                        echo "<script> document.location.href='product_discription.php';</script>";
                    }
                }
            ?>

    </main>
    <footer>
        <!-- <div class="footer_rights">
            IamBig.com all rights are reserved
        </div> -->
    </footer>
    <script src="index.js"></script>
    <script>
    function hidfunction() {
        document.querySelector(".welcome_container").style.display = "None";
    }
    </script>
</body>

</html>