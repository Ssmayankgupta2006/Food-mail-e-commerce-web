<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="Team_Registration_Authentication.css">
    <title>Team_Registration_Authentication</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">I<span style='color:red;'>am</span>Big.<span
                        style='font-size:16px; color:red;'>Team_Registration_Authentication</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header">
            <span onclick="box1()">All registrations</span>
            <span onclick="box2()">Product registrations requests</span>
            <span onclick="box3()">Verification</span>
            <span onclick="box4()">Changes</span>
            <span onclick="box5()">Block</span>
        </div>
    </header>
    <main>
        <div class="main_container main_container1">
            <H2 class='mt-5'>Product Registration</H2>
            <a href="registration_print.php">Print</a>
            <table class="table table-bordered border-primary">
                <tr>
                    <td>USER NAME</td>
                    <td>PASSWORD</td>
                    <td>EMAIL ID</td>
                    <td>MOBILE NUMBER</td>
                    <td>PRODUCT ID</td>
                    <td>PRODUCT NAME</td>
                    <td>STATUS</td>
                    <td>ENTRY DATE</td>

                </tr>

                <?php
                    require "server.php";
                    $select_hai_this="SELECT `USER NAME`, `PASSWORD`, `EMAIL ID`, `MOBILE NUMBER`, `PRODUCT ID`, `PRODUCT NAME`, `STATUS`, `ENTRY DATE` FROM `product_registration`;";
                    $select_hai_this_ex=mysqli_query($conn,$select_hai_this);
                    while($select_hai_this_fetch=mysqli_fetch_assoc($select_hai_this_ex)){
                        echo "<tr><td>".$select_hai_this_fetch['USER NAME']."</td>";
                        echo "<td>".$select_hai_this_fetch['PASSWORD']."</td>";
                        echo "<td>".$select_hai_this_fetch['EMAIL ID']."</td>";
                        echo "<td>".$select_hai_this_fetch['MOBILE NUMBER']."</td>";
                        echo "<td>".$select_hai_this_fetch['PRODUCT ID']."</td>";
                        echo "<td>".$select_hai_this_fetch['PRODUCT NAME']."</td>";
                        echo "<td>".$select_hai_this_fetch['STATUS']."</td>";
                        echo "<td>".$select_hai_this_fetch['ENTRY DATE']."</td></tr>";
                    }
                    ?>

            </table>
            <H2>Seller Registrations</H2>
            <a href="product_registration_print_all.php">Print</a>
            <table class="table table-bordered border-primary">
                <tr>
                    <td>User name</td>
                    <td>Shop name</td>
                    <td>Pin code</td>
                    <td>State</td>
                    <td>District</td>
                    <td>City</td>
                    <td>Street</td>
                    <td>Mobile number</td>
                    <td>Password</td>
                    <td>Email Id</td>
                    <td>Status</td>
                </tr>

                <?php
                    require "server.php";
                    $select_hai="SELECT `IMAGE`, `NAME`, `SHOP NAME`, `PIN CODE`, `STATE`, `DISTRICT`, `CITY`, `STREET`, `MOBILE NUMBER`, `PASSWORD`, `EMAIL`, `STATUS` FROM `registration`";
                    $select_hai_ex=mysqli_query($conn,$select_hai);
                    while($select_hai_fetch=mysqli_fetch_assoc($select_hai_ex)){
                        echo "<tr><td>".$select_hai_fetch['NAME']."</td>";
                        echo "<td>".$select_hai_fetch['SHOP NAME']."</td>";
                        echo "<td>".$select_hai_fetch['PIN CODE']."</td>";
                        echo "<td>".$select_hai_fetch['STATE']."</td>";
                        echo "<td>".$select_hai_fetch['DISTRICT']."</td>";
                        echo "<td>".$select_hai_fetch['CITY']."</td>";
                        echo "<td>".$select_hai_fetch['STREET']."</td>";
                        echo "<td>".$select_hai_fetch['MOBILE NUMBER']."</td>";
                        echo "<td>".$select_hai_fetch['PASSWORD']."</td>";
                        echo "<td>".$select_hai_fetch['EMAIL']."</td>";
                        echo "<td>".$select_hai_fetch['STATUS']."</td></tr>";
                    }
                    ?>

            </table>
        </div>

        <div class="main_container main_container2">
            <a href="product_registration_print.php">Print</a>
            <table class="table table-bordered border-primary">

                <tr style='text-transform: uppercase;'>
                    <td>User name</td>
                    <td>Password</td>
                    <td>Email ID </td>
                    <td>Mobile number</td>
                    <td>PRODUCT ID</td>
                    <td>PRODUCT NAME</td>
                    <td>STATUS</td>
                    <td>ENTRY DATE</td>
                </tr>

                <?php
                    require "server.php";
                    $select_hai="SELECT `USER NAME`, `PASSWORD`, `EMAIL ID`, `MOBILE NUMBER`, `PRODUCT ID`, `PRODUCT NAME`, `STATUS`, `ENTRY DATE` FROM `product_registration` where `STATUS`!='DONE';";
                    $select_hai_ex=mysqli_query($conn,$select_hai);
                    $var=1;
                        while($select_hai_fetch=mysqli_fetch_assoc($select_hai_ex)){
                            echo "</tr><td name='user' value='".$select_hai_fetch['USER NAME']."'>".$select_hai_fetch['USER NAME']."</td>";
                            echo "<td name='password' value='".$select_hai_fetch['PASSWORD']."'>".$select_hai_fetch['PASSWORD']."</td>";
                            echo "<td name='email' value='".$select_hai_fetch['EMAIL ID']."'>".$select_hai_fetch['EMAIL ID']."</td>";
                            echo "<td name='mobilenumber' value='".$select_hai_fetch['MOBILE NUMBER']."'>".$select_hai_fetch['MOBILE NUMBER']."</td>";
                            echo "<td name='productid' value='".$select_hai_fetch['PRODUCT ID']."'>".$select_hai_fetch['PRODUCT ID']."</td>";
                            echo "<td name='productname' value='".$select_hai_fetch['PRODUCT NAME']."'>".$select_hai_fetch['PRODUCT NAME']."</td>";
                            echo "<td name='status' value='".$select_hai_fetch['STATUS']."'>".$select_hai_fetch['STATUS']."</td>";
                            echo "<td name='entrydate' value='".$select_hai_fetch['ENTRY DATE']."'>".$select_hai_fetch['ENTRY DATE']."</td></tr>";
                        
                        }
                    ?>

            </table>
        </div>

        <div class='main_container main_container3'>
            <form action="Team_Registration_Authentication.php" method="post" enctype="multipart/form-data">
                <div class='main_span'>
                    <label for='name'>Seller name :</label>
                    <input type='text' placeholder='Seller name :' name='username' id='name'>
                </div>
                <div class='main_span'>
                    <label for='password'>Seller password :</label>
                    <input type='text' placeholder='Seller password :' name='password' id='password'>
                </div>
                <div class='main_span'>
                    <label for='productid'>Product Id :</label>
                    <input type='text' placeholder='Product Id :' name='productid' id='productid'>
                </div>
                <div class='main_span'>
                    <label for='name_product'>Enter Product name :</label>
                    <input type='text' placeholder='Enter Product name :' name='name_product' id='name'>
                </div>
                <div class='main_span'>
                    <label for='name'>Select measure unit :</label>
                    <select name='measure'>
                        <option value='Per 5 Kg'>Per 5 Kg</option>
                        <option value='Per Kg'>Per Kg</option>
                        <option value='100 Gm'>100 Gm</option>
                        <option value='500 Gm'>500 Gm</option>
                        <option value='Counting base'>Counting base</option>
                    </select>
                </div>
                <div class='main_span'>
                    <label for='name_price'>Enter Product pricing rate : Rs.</label>
                    <input type='text' placeholder='Enter Product pricing rate :' name='product_price' id='name_price'>
                </div>

                <div class='main_span'>
                    <label for='name_img'>Enter Product Image :</label>
                    <input type='file' name='product_image' id='name_img'>
                </div>

                <div class='main_span'>
                    <label for='name_discription'>Product Discription :</label>
                    <input type='text' placeholder='Product Discription :' name='product_discription'
                        id='name_discription'>
                </div>
                <div class='main_span'>
                    <label for='material_list'>List of all used material :</label>
                    <input type='text' placeholder='List of all used material:' name='material_list' id='material_list'>
                </div>
                <div class='main_span'>
                    <label for='date'>Select Submission date</label>
                    <input type='datetime-local' placeholder='Select Submission date' name='submission_date' id='date'>
                </div>
                <div class='main_span'>
                    <label for='reset'>Reset</label>
                    <input type='reset' id='reset'>
                </div>
                <div class='main_span'>
                    <label for='submit'>Submit (Before submit check all information is right <sup>***</sup>)</label>
                    <input type='submit' name='form1' value='Submit' id='submit'>
                </div>
            </form>
            <?php
                if(($_SERVER['REQUEST_METHOD']=="POST")&&(isset($_POST['form1']))){
                    require "server.php";
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $productid=$_POST['productid'];
                    $name_product=$_POST['name_product'];
                    $product_measure=$_POST['measure'];
                    $product_price=$_POST['product_price'];
                    $product_img=base64_encode(file_get_contents($_FILES['product_image']['tmp_name']));
                    $product_discription=$_POST['product_discription'];
                    $material_list=$_POST['material_list'];
                    $submission_date=$_POST['submission_date'];

                    $insert=$conn->prepare("INSERT INTO `team_registration_authentication` (`SELLER NAME`, `SELLER PASSWORD`, `PRODUCT ID`, `PRODUCT NAME`, `MEASURE UNIT`, `PRICE RS`, `PRODUCT IMG`, `PRODUCT DISCRIPTION`, `USED MATERIAL`, `SUBMISSION DATE`) VALUES (?,?,?,?,?,?,?,?,?,?);");
                    $insert->bind_param("ssssssssss",$username,$password,$productid,$name_product,$product_measure,$product_price,$product_img,$product_discription,$material_list,$submission_date);

                   
                    $select_registration="SELECT `USER NAME`, `PASSWORD`, `EMAIL ID`, `MOBILE NUMBER`, `PRODUCT ID`, `PRODUCT NAME`, `STATUS`, `ENTRY DATE` FROM `product_registration` WHERE `USER NAME`='$username' and  `PASSWORD`='$password' and `PRODUCT ID`='$productid';";
                    $select_registration_ex=mysqli_query($conn,$select_registration);
                    $select_registration_fetch=mysqli_num_rows($select_registration_ex);
                    if($select_registration_fetch>0){
                        $insert->execute();
                        $update="UPDATE `registration` SET `STATUS`='DONE' where `NAME`='$username' and `PASSWORD`='$password';";
                        $product_registration_status="UPDATE `product_registration` SET `STATUS`='DONE' WHERE `USER NAME`='$username' and `PASSWORD`='$password' and `PRODUCT ID`='$productid';";
                        $product_registration_status_ex=mysqli_query($conn,$product_registration_status);
                        $update_ex=mysqli_query($conn,$update);
                    }else{
                        echo "data is not matched";
                    }
                    
                }
            ?>
        </div>

        <div class="main_container main_container4"></div>

    </main>
    <footer></footer>
    <script src="Team_Registration_Authentication.js"></script>
</body>

</html>