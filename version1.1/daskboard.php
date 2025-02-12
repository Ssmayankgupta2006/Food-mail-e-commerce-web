<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="daskboard.css">
</head>

<body>


    <header>
        <div class="top">
            <div class="responsive-container-block bigContainer">
                <div class="responsive-container-block Container">
                    <div class="leftSide">
                        <p class="text-blk subHeading">
                            IamBig Seller <span id="forupdate">Dashboard</span> Page
                        </p>
                    </div>
                    <img class="mainImg" src="sc30.png">
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Orders</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">Messages</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">Settings</button>
            </li>
        </ul>
    </header>
    <main>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <form id="form1" method="post" action="daskboard.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Enter your user id</label>
                        <input required name="userid" autocomplete="USER ID" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">user id is your account security key. do not share this
                            with anyone. </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mobile number</label>
                        <input required name="telnumber" autocomplete="MOBILE NUMBER" type="tel" class="form-control"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input required type="checkbox" name="checkboxhai" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" name="form1" class="btn btn-primary">Submit</button>
                </form>
                <?php
                    require "server.php";
                    if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['form1']))) {
                        $userid      = $_POST['userid'];
                        $telnumber   = $_POST['telnumber'];
                        $select      = "SELECT `USER NAME`, `EMAIL`, `MOBILE NUMBER`, `USER ID` FROM `seller_registration` WHERE `USER ID`='$userid' and `MOBILE NUMBER`='$telnumber';";
                        $select_ex   = mysqli_query($conn, $select);
                        $select_rows = mysqli_num_rows($select_ex);
                        if ($select_rows > 0) {
                            $select_fetch          = mysqli_fetch_assoc($select_ex);
                            $_SESSION['username']  = $select_fetch['USER NAME'];
                            $_SESSION['userid']    = $userid;
                            $_SESSION['telnumber'] = $telnumber;
                            echo "<script> document.querySelector('#forupdate').innerText='" . $_SESSION['username'] . "'</script>";

                            echo "<div class='alert alert-success m-2'>Successfully Login!</div>";
                        } else {
                            echo "<div class='alert alert-warning m-2'>Data not founded.</div>";
                        }

                    } else {

                    }
                ?>
            </div>

            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <?php
                    if (isset($_SESSION['userid']) && isset($_SESSION['telnumber'])) {
                        echo "<div class='alert alert-success m-2'>Successfully Login!</div>";
                    } else {
                        echo "<div class='alert alert-warning m-2'>Login First. Not login</div>";
                    }
                    if (isset($_SESSION['userid']) && isset($_SESSION['telnumber'])) {
                        $userid           = $_SESSION['userid'];
                        $telnumber        = $_SESSION['telnumber'];
                        $select_two       = "SELECT `USER NAME`, `EMAIL`, `MOBILE NUMBER`, `STATE`, `CITY`, `PIN CODE`, `SHOP NAME`, `USER ID`, `USER IMG`, `ENTRY DATE/TIME`, `STATUS` FROM `seller_registration` WHERE `USER ID`='$userid' and `MOBILE NUMBER`='$telnumber';";
                        $select_two_ex    = mysqli_query($conn, $select_two);
                        $select_two_fetch = mysqli_fetch_assoc($select_two_ex);
                        $user_img         = $select_two_fetch['USER IMG'];
                        $username         = $select_two_fetch['USER NAME'];
                    }

                ?>
                <div class="profile_hai">
                    <span>
                        <img src='data:image/png;base64,<?php echo $user_img; ?>' alt="">
                    </span>
                </div>
                <div class="m-3">
                    <h2>Your product details --</h2>
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">PRODUCT NAME</th>
                            <th scope="col">PRODUCT ID</th>
                            <th scope="col">PRODUCT AVAILIBILITY MIN/MAX</th>
                            <th scope="col">MARKET RS</th>
                            <th scope="col">ACTUAL RS</th>
                            <th scope="col">UNIT OF MEASURE</th>
                            <th scope="col">PRODUCT DIS</th>
                            <th scope="col">PRODUCT USED MATERIAL</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ENTRY DATE/TIME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if (isset($_SESSION['userid']) && isset($_SESSION['telnumber'])) {
                                $userid        = $_SESSION['userid'];
                                $userselect    = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`,`PRODUCT MIN`,`PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration` WHERE `USER ID`='$userid';";
                                $userselect_ex = mysqli_query($conn, $userselect);
                                while ($userselect_fetch = mysqli_fetch_assoc($userselect_ex)) {
                                    echo "
                                    <tr>
                            <td>" . $userselect_fetch['PRODUCT NAME'] . "</td>
                            <td style='color:red;'>" . $userselect_fetch['PRODUCT ID'] . "</td>
                            <td>" . $userselect_fetch['MARKET RS'] . "</td>
                            <td>" . $userselect_fetch['PRODUCT MIN'] . "/" . $userselect_fetch['PRODUCT MAX'] . "</td>
                            <td>" . $userselect_fetch['ACTUAL RS'] . "</td>
                            <td>" . $userselect_fetch['UNIT OF MEASURE'] . "</td>
                            <td>" . $userselect_fetch['PRODUCT DIS'] . "</td>
                            <td>" . $userselect_fetch['PRODUCT USED MATERIAL'] . "</td>
                            <td>" . $userselect_fetch['STATUS'] . "</td>
                            <td>" . $userselect_fetch['ENTRY DATE/TIME'] . "</td>
                        </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat magnam, quo, cum excepturi maiores
                commodi dolor enim qui voluptates architecto nihil placeat? Temporibus, quia. Inventore, delectus
                doloremque, voluptate eum vero nemo repellendus aut ducimus aliquam adipisci consequuntur laborum rerum
                esse facere maxime amet molestias laudantium quaerat ad cumque. Molestias, magnam. Esse, similique
                perspiciatis quas tempora nisi omnis quae numquam dolorem quidem excepturi optio. Impedit praesentium
                neque nam inventore ex perspiciatis tempora enim distinctio iure maxime eius quis, itaque iusto fuga
                cumque, ullam laborum nemo reprehenderit esse recusandae tempore dolor rem. Nulla obcaecati ex neque
                voluptas, corporis eaque repellat facilis cumque.

            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                tabindex="0">...</div>

        </div>
    </main>
</body>

</html>