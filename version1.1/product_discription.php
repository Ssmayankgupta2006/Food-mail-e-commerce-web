<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product_discription.css">
    <title>Documentff</title>
</head>

<body>
    <main>
        <?php
            if (isset($_SESSION['search_id'])) {
                require "server.php";
                $searchid      = $_SESSION['search_id'];
                $select        = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT MIN`, `PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `PRODUCT IMG`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration` WHERE `PRODUCT SEARCH ID`='$searchid';";
                $select_ex     = mysqli_query($conn, $select);
                $select_fetch  = mysqli_fetch_assoc($select_ex);
                $img           = $select_fetch['PRODUCT IMG'];
                $discription   = $select_fetch['PRODUCT DIS'];
                $userid        = $select_fetch['USER ID'];
                $min           = $select_fetch['PRODUCT MIN'];
                $max           = $select_fetch['PRODUCT MAX'];
                $used_material = $select_fetch['PRODUCT USED MATERIAL'];
                $product_id    = $select_fetch['PRODUCT ID'];
                $product_s_id  = $select_fetch['PRODUCT SEARCH ID'];
                $product_name  = $select_fetch['PRODUCT NAME'];

                $seller       = "SELECT `USER NAME`, `EMAIL`, `MOBILE NUMBER`, `STATE`, `CITY`, `PIN CODE`, `SHOP NAME`, `USER ID`, `USER IMG`, `ENTRY DATE/TIME`, `STATUS` FROM `seller_registration` WHERE `USER ID`='$userid';";
                $seller_ex    = mysqli_query($conn, $seller);
                $seller_fetch = mysqli_fetch_assoc($seller_ex);
                $seller_name  = $seller_fetch['USER NAME'];

                echo "
                <form action='product_discription.php' method='post' id='form1'>
                <div>

                <span id='imgoftheproduct'>
                ";
                echo "<img src='data:image/png;base64," . $img . "' alt='Image' />
                </span>";

                echo "
                <span>
                    <div id='discription'>" . $discription . "</div>
                </span>
                <span>
                    <div id='seller'>Selling By
                    <svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' fill='blue'><path d='M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z'/></svg>
                     <span style='color:blue; font-style:italic;'>" . $seller_name . "</span></div>
                </span>

                <span id='moreinformation'>
                    <div>Availibility Min/Max</div>
                    <div>" . $min . "</div>
                    <div>" . $max . "</div>
                </span>

                <span id='select_numbers'>
                    <select name='' id=''>
                        <option value=''>Only 1</option>
                        <option value=''>Only 2</option>
                        <option value=''>Only 3</option>
                    </select>
                </span>

                <span id='button_hai'>
                    <input type='submit' name='add' value='Add to cart' />
                    <input type='submit' name='buy' value='Buy now' />
                </span>

                <span id='used_material'>
                    " . $used_material . "
                </span>

                </div>

                <div id='box2'>
                <h2> Some Products to you </h2>";
                $product_select    = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT MIN`, `PRODUCT MAX`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `PRODUCT IMG`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration`;";
                $product_select_ex = mysqli_query($conn, $product_select);
                while ($product_select_fetch = mysqli_fetch_assoc($product_select_ex)) {
                    $productid = $product_select_fetch['PRODUCT SEARCH ID'];
                    echo "
                <button type='submit' name='$productid' value='$productid' class='main_box_two_is' id=' $productid '>
                    <div>
                    <img  src='data:image/png;base64," . $product_select_fetch['PRODUCT IMG'] . "' alt='img' />
                    </div>
                    <div class='name_price'>
                        " . $product_select_fetch['PRODUCT DIS'] . "
                    </div>
                </button>";
                    if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST[$productid]))) {
                        $_SESSION['search_id'] = ($_POST[$productid]);
                        echo "<script> document.location.href='product_discription.php';</script>";
                    }
                }
                echo "
                </div>
                </form>";

                if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['buy']))) {
                    $_SESSION['buy'] = ($product_id);
                    echo $_SESSION['buy'];
                    // echo "<script> document.location.href='product_discription.php';</script>";
                }
                if (($_SERVER['REQUEST_METHOD'] == "POST") && (isset($_POST['add']))) {
                    if (isset($_SESSION['user_f']) && (isset($_SESSION['user_l'])) && (isset($_SESSION['mobilenumber'])) && (isset($_SESSION['email'])) && (isset($_SESSION['password']))) {
                        $user_name    = $_SESSION['user_f'] . " " . $_SESSION['user_l'];
                        $mobilenumber = $_SESSION['mobilenumber'];
                        $email        = $_SESSION['email'];
                        $pass         = $_SESSION['password'];

                        $_SESSION['add'] = ($product_id);
                        $enter           = $conn->prepare("INSERT INTO `user_cart`(`USER NAME`, `MOBILE NUMBER`, `EMAIL ID`, `PASSWORD`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `PRODUCT IMG`, `PRODUCT DIS`, `MARKET RS`, `ACTUAL RS`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                        $enter->bind_param("sssssssssii", $user_name, $mobilenumber, $email, $pass, $product_name, $product_id, $product_s_id, $img, $discription, $max, $min);
                        $enter->execute();
                        echo $_SESSION['add'];
                        echo "<script> document.location.href='user_cart.php';</script>";
                    } else {
                        echo "<script> document.location.href='user_login.php';</script>";
                    }
                }

            }

        ?>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam distinctio possimus cumque atque similique
        quidem laborum soluta ipsa ipsam velit corporis quae placeat doloribus veritatis laboriosam, quia aliquid
        impedit sequi, quaerat deleniti repellat illum commodi cupiditate? Quaerat a rem minima! Repellat perspiciatis,
        suscipit placeat recusandae, accusamus maxime beatae amet tempora quod asperiores facere cumque reiciendis! Ea
        commodi eum porro iste cupiditate, totam maxime ullam omnis nesciunt et debitis quibusdam velit earum dolorem
        quod nobis autem. Molestias vero cum eveniet repudiandae nesciunt quas dolorem ex quam rem repellat corrupti
        excepturi, expedita eum nisi deleniti laudantium sunt asperiores esse necessitatibus praesentium culpa.
    </main>
</body>

</html>