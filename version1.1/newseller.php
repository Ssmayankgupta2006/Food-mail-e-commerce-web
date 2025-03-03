<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="newseller.css">
    <script src="newseller.js"></script>


    <title>Document</title>
</head>

<body>
    <header>
        <div class="top">
            <div class="responsive-container-block bigContainer">
                <div class="responsive-container-block Container">
                    <div class="leftSide">
                        <p class="text-blk subHeading">
                            IamBig Registration page
                        </p>
                    </div>
                    <img class="mainImg"
                        src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/sc30.png">
                </div>
            </div>
        </div>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Product
                    Registration</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Details</button>
                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false">Messages</button>
                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false">Settings</button>

            </div>
        </nav>

    </header>
    <main>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <form action="newseller.php" method="post" id="form1" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="blue">
                                <path
                                    d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                            </svg>
                        </span>
                        <input required type="text" name="username" class="form-control user_name_form1"
                            placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-secondary" type="button" id="inputGroupFileAddon03">User
                            Image</button>
                        <input required type="file" name="userimg" class="form-control" id="inputGroupFile03"
                            aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                    </div>

                    <div class="input-group mb-3">
                        <input required type="email" name="email" class="form-control mt-3"
                            placeholder="Username email id" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">

                    </div>

                    <div class="input-group mb-3">
                        <input required type="tel" name="user_tel" class="form-control"
                            placeholder="Username mobile number" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input required type="text" name="state" class="form-control cap" placeholder="State"
                            aria-label="Username">
                        <input required type="text" name="city" class="form-control cap" placeholder="City"
                            aria-label="Username">
                        <input required type="text" name="pincode" class="form-control cap" placeholder="Pin code"
                            aria-label="Server">
                    </div>

                    <div class="input-group mb-3">
                        <input required type="text" name="shopname" class="form-control cap" placeholder="Shop name"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input required type="text" name="create_user_id" class="form-control create_user_id"
                            placeholder="Create a user id" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" name="form1" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <?php
                    require "server.php";
                    if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['form1'])) {
                        $username               = $_POST['username'];
                        $userimg                = base64_encode(file_get_contents($_FILES['userimg']['tmp_name']));
                        $email                  = $_POST['email'];
                        $user_tel               = $_POST['user_tel'];
                        $state                  = $_POST['state'];
                        $city                   = $_POST['city'];
                        $pincode                = $_POST['pincode'];
                        $shopname               = $_POST['shopname'];
                        $create_user_id         = $_POST['create_user_id'];
                        $_SESSION['product_id'] = $create_user_id;

                        // Validate and sanitize inputs
                        $username       = htmlspecialchars(strip_tags($username));
                        $email          = filter_var($email, FILTER_SANITIZE_EMAIL);
                        $user_tel       = htmlspecialchars(strip_tags($user_tel));
                        $state          = htmlspecialchars(strip_tags($state));
                        $city           = htmlspecialchars(strip_tags($city));
                        $pincode        = htmlspecialchars(strip_tags($pincode));
                        $shopname       = htmlspecialchars(strip_tags($shopname));
                        $create_user_id = htmlspecialchars(strip_tags($create_user_id));

                        // Validate file upload
                        $allowed_extensions = ['jpeg', 'jpg', 'png'];
                        $file_extension     = pathinfo($_FILES['userimg']['name'], PATHINFO_EXTENSION);

                        if (in_array($file_extension, $allowed_extensions) && $_FILES['userimg']['size'] < 500000) {
                            $insert = $conn->prepare("INSERT INTO seller_registration (`USER NAME`, `EMAIL`, `MOBILE NUMBER`, `STATE`, `CITY`, `PIN CODE`, `SHOP NAME`, `USER ID`, `USER IMG`, `ENTRY DATE/TIME`) VALUES (?,?,?,?,?,?,?,?,?, NOW())");
                            $insert->bind_param("sssssssss", $username, $email, $user_tel, $state, $city, $pincode, $shopname, $create_user_id, $userimg);

                            if ($insert->execute()) {
                                echo "<div class='alert alert-success'>Registration successful! </div>";
                            } else {
                                echo "Error: " . $insert->error;
                            }
                        } else {
                            echo "<div class='alert alert-warning'>Invalid file format or size.</div>";
                        }
                    }

                ?>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <form action="newseller.php" method="post" id="form2" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="blue">
                                <path
                                    d="M280-240q-100 0-170-70T40-480q0-100 70-170t170-70q66 0 121 33t87 87h432v240h-80v120H600v-120H488q-32 54-87 87t-121 33Zm0-80q66 0 106-40.5t48-79.5h246v120h80v-120h80v-80H434q-8-39-48-79.5T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Zm0-80q33 0 56.5-23.5T360-480q0-33-23.5-56.5T280-560q-33 0-56.5 23.5T200-480q0 33 23.5 56.5T280-400Zm0-80Z" />
                            </svg>
                        </span>
                        <?php if (isset($_SESSION['product_id'])) {
                                echo "<input type='text' reduired name='userid' class='form-control' placeholder='User ID' value='" . $_SESSION['product_id'] . "' aria-label='Username'
                            aria-describedby='basic-addon1'>";
                            } else {
                                echo "<input type='text' reduired name='userid' class='form-control' placeholder='User ID' aria-label='Username'
                            aria-describedby='basic-addon1'>";
                            }
                        ?>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" reduired name='productname' class="form-control" placeholder="Product name"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <select required name="selectdata" class="form-select" aria-label="Default select example">
                            <option>Select product type here</option>
                            <option value="products_cell">Product cell</option>
                            <option value="JewelleryAccessories">Jewellery & Accessories</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Sports/Fitness">Sports/Fitness</option>
                            <option value="Food/Drinks">Food / Drinks</option>
                            <option value="Books">Books</option>
                            <option value="Footwears">Footwears</option>
                            <option value="Grossry">Grossry</option>
                            <option value="Trendings">Trendings</option>
                            <option value="More">More</option>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" reduired name='productid' class="form-control productid"
                            placeholder="Product ID" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" reduired name='searchid' class="form-control product_search_id"
                            placeholder="Product Search ID" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Product Availibility min</span>
                        <input type="number" reduired name='product_min' class="form-control"
                            placeholder="Minimum amount" aria-label="Username">
                        <span class="input-group-text">Product Availibility min</span>
                        <input type="number" reduired name='product_max' class="form-control"
                            placeholder="Maximum amount" aria-label="Username">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Market Rs.</span>
                        <input type="text" reduired name='marketrs' class="form-control" placeholder="Market Rs."
                            aria-label="Username">
                        <span class="input-group-text">Product Rs.</span>
                        <input type="text" reduired name='actualrs' class="form-control" placeholder="Product Rs."
                            aria-label="Username">
                        <span class="input-group-text">Unit</span>
                        <input type="text" reduired name='unit' class="form-control" placeholder="Unit of measure (Kg)"
                            aria-label="Server">
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" reduired name='productimg' class="form-control" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                        <button class="btn btn-secondary" type="button" id="inputGroupFileAddon04">Product
                            Image</button>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Product Discription</span>
                        <textarea reduired name='productdiscription' class="form-control"
                            aria-label="With textarea"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">Product used material</span>
                        <textarea reduired name='usedmaterial' class="form-control"
                            aria-label="With textarea"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <button type="submit" name="form2" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <?php
                    if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['form2']))) {
                        $userid                 = $_POST['userid'];
                        $_SESSION['product_id'] = $userid;
                        $productname            = $_POST['productname'];
                        $productid              = $_POST['productid'];
                        $searchid               = $_POST['searchid'];
                        $marketrs               = $_POST['marketrs'];
                        $actualrs               = $_POST['actualrs'];
                        $unit                   = $_POST['unit'];
                        $productimg             = base64_encode(file_get_contents($_FILES['productimg']['tmp_name']));
                        $productdiscription     = $_POST['productdiscription'];
                        $usedmaterial           = $_POST['usedmaterial'];
                        $product_min            = $_POST['product_min'];
                        $product_max            = $_POST['product_max'];

                        $allow_extensions = ['jpeg', 'jpg', 'png'];
                        $extension        = pathinfo($_FILES['productimg']['name'], PATHINFO_EXTENSION);

                        if (in_array($extension, $allow_extensions) && $_FILES['productimg']['size'] < 500000) {
                            $inserttwo = $conn->prepare("INSERT INTO `seller_product_registration`(`USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`,`PRODUCT MIN`,`PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `PRODUCT IMG`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
                            $inserttwo->bind_param("sssssiisssss", $userid, $productname, $productid, $searchid, $product_min, $product_max, $marketrs, $actualrs, $unit, $productdiscription, $usedmaterial, $productimg);
                            if ($inserttwo->execute()) {
                                echo "<div class='alert alert-success'>Successfully added!</div>";
                            }
                        } else {
                            echo "<div class='alert alert-warning'>Invalid file format or size.</div>";
                        }

                    }

                ?>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <div class="details_box">
                    <a href="registration_print.php">Download Document</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">USER NAME</th>
                                <th scope="col">USER ID</th>
                                <th scope="col">EMAIL ID</th>
                                <th scope="col">MOBILE NUMBER</th>
                                <th scope="col">STATE</th>
                                <th scope="col">CITY</th>
                                <th scope="col">PIN CODE</th>
                                <th scope="col">ENTRY DATE/TIME</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">SHOP NAME</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $select    = "SELECT `USER NAME`, `EMAIL`, `MOBILE NUMBER`, `STATE`, `CITY`, `PIN CODE`, `SHOP NAME`, `USER ID`, `ENTRY DATE/TIME`,`STATUS` FROM `seller_registration`";
                                $select_ex = mysqli_query($conn, $select);
                                while ($select_fetch = mysqli_fetch_assoc($select_ex)) {
                                    echo "
                                <tr>
                                    <td>" . $select_fetch['USER NAME'] . "</td>
                                    <td>" . $select_fetch['USER ID'] . "</td>
                                    <td>" . $select_fetch['EMAIL'] . "</td>
                                    <td>" . $select_fetch['MOBILE NUMBER'] . "</td>
                                    <td>" . $select_fetch['STATE'] . "</td>
                                    <td>" . $select_fetch['CITY'] . "</td>
                                    <td>" . $select_fetch['PIN CODE'] . "</td>
                                    <td>" . $select_fetch['ENTRY DATE/TIME'] . "</td>
                                    <td>" . $select_fetch['STATUS'] . "</td>
                                    <td>" . $select_fetch['SHOP NAME'] . "</td>
                                </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                    <a href="product_registration_print.php">Download Document</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">PRODUCT NAME</th>
                                <th scope="col">PRODUCT ID</th>
                                <th scope="col">PRODUCT SEARCH ID</th>
                                <th scope="col">MARKET RS</th>
                                <th scope="col">ACTUAL RS</th>
                                <th scope="col">UNIT OF MEASURE</th>
                                <th scope="col">PRODUCT DIS</th>
                                <th scope="col">ENTRY DATE/TIME</th>
                                <th scope="col">PRODUCT USED MATERIAL</th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $select_pro    = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration`";
                                $select_pro_ex = mysqli_query($conn, $select_pro);
                                while ($select_pro_fetch = mysqli_fetch_assoc($select_pro_ex)) {
                                    echo "
                                <tr>
                                    <td>" . $select_pro_fetch['PRODUCT NAME'] . "</td>
                                    <td>" . $select_pro_fetch['PRODUCT ID'] . "</td>
                                    <td>" . $select_pro_fetch['PRODUCT SEARCH ID'] . "</td>
                                    <td>" . $select_pro_fetch['MARKET RS'] . "</td>
                                    <td>" . $select_pro_fetch['ACTUAL RS'] . "</td>
                                    <td>" . $select_pro_fetch['UNIT OF MEASURE'] . "</td>
                                    <td>" . $select_pro_fetch['PRODUCT DIS'] . "</td>
                                    <td>" . $select_pro_fetch['ENTRY DATE/TIME'] . "</td>
                                    <td>" . $select_pro_fetch['PRODUCT USED MATERIAL'] . "</td>
                                    <td>" . $select_pro_fetch['STATUS'] . "</td>
                                </tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
                tabindex="0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eius harum rerum, illum
                quae rem ducimus ad expedita quidem optio modi tempore, cupiditate, nostrum aspernatur? Temporibus odio
                optio esse alias inventore sint voluptatem eos incidunt obcaecati fuga. Eius placeat quas veritatis
                magni explicabo quod accusantium delectus iste, ut minima perspiciatis impedit fuga fugiat architecto
                consectetur amet nulla provident vero molestiae, rem qui ipsum quia vel et. Eaque eos dolores
                reprehenderit facilis, velit sunt temporibus ratione atque optio reiciendis minus doloremque rerum nam
                blanditiis cumque tempore illum quo. Labore ipsam, quas repellendus porro tenetur vero inventore
                eligendi sit quasi dolores molestiae.
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                tabindex="0">...</div>

        </div>

    </main>
</body>

</html>