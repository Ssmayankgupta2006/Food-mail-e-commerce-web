<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "e-commerce";
$conn       = mysqli_connect($servername, $username, $password, $database);

$seller_product_registration = "CREATE TABLE IF NOT EXISTS `seller_product_registration` (
    `USER ID` TEXT NOT NULL,
    `PRODUCT NAME` TEXT NOT NULL,
    `PRODUCT ID` TEXT NOT NULL,
    `PRODUCT SEARCH ID` TEXT NOT NULL,
    `PRODUCT MIN` TEXT NOT NULL,
    `PRODUCT MAX` TEXT NOT NULL,
    `MARKET RS` TEXT NOT NULL,
    `ACTUAL RS` TEXT NOT NULL,
    `UNIT OF MEASURE` TEXT NOT NULL,
    `PRODUCT DIS` TEXT NOT NULL,
    `PRODUCT USED MATERIAL` TEXT NOT NULL,
    `PRODUCT IMG` TEXT NOT NULL,
    `STATUS` TEXT NOT NULL DEFAULT 'DONE',
    `SELL` TEXT NOT NULL DEFAULT 'OPEN',
    `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  )";
$seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);

$user_registration = mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `user registration` (
`FIRST NAME` TEXT NOT NULL ,
 `LAST NAME` TEXT NOT NULL ,
 `MOBILE NUMBER` TEXT NOT NULL ,
 `E MAIL ID` TEXT NOT NULL ,
 `PASSWORD` TEXT NOT NULL
)");

$seller_registration = "CREATE TABLE IF NOT EXISTS `seller_registration` (
`USER NAME` TEXT NOT NULL, `EMAIL` TEXT NOT NULL, `MOBILE NUMBER` TEXT NOT NULL, `STATE` TEXT NOT NULL, `CITY` TEXT NOT NULL, `PIN CODE` TEXT NOT NULL, `SHOP NAME` TEXT NOT NULL, `USER ID` TEXT NOT NULL, `USER IMG` TEXT NOT NULL, `ENTRY DATE/TIME`TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
)";
$seller_registration_ex = mysqli_query($conn, $seller_registration);

// $seller_product_registration = "CREATE TABLE IF NOT EXISTS `JewelleryAccessories` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);
// $seller_product_registration    = "CREATE TABLE IF NOT EXISTS `Electronics` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);
// $seller_product_registration    = "CREATE TABLE IF NOT EXISTS `Sports/Fitness` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);
// $seller_product_registration    = "CREATE TABLE IF NOT EXISTS `Food/Drinks` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);
// $seller_product_registration    = "CREATE TABLE IF NOT EXISTS `Books` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);
// $seller_product_registration    = "CREATE TABLE IF NOT EXISTS `Footwears` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);
// $seller_product_registration    = "CREATE TABLE IF NOT EXISTS `Grossry` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);
// $seller_product_registration    = "CREATE TABLE IF NOT EXISTS `Trendings` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);
// $seller_product_registration    = "CREATE TABLE IF NOT EXISTS `More` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);

// $seller_product_registration = "CREATE TABLE IF NOT EXISTS `products_cell` (
//     `USER ID` TEXT NOT NULL,
//     `PRODUCT NAME` TEXT NOT NULL,
//     `PRODUCT ID` TEXT NOT NULL,
//     `PRODUCT SEARCH ID` TEXT NOT NULL,
//     `PRODUCT MIN` TEXT NOT NULL,
//     `PRODUCT MAX` TEXT NOT NULL,
//     `MARKET RS` TEXT NOT NULL,
//     `ACTUAL RS` TEXT NOT NULL,
//     `UNIT OF MEASURE` TEXT NOT NULL,
//     `PRODUCT DIS` TEXT NOT NULL,
//     `PRODUCT USED MATERIAL` TEXT NOT NULL,
//     `PRODUCT IMG` TEXT NOT NULL,
//     `STATUS` TEXT NOT NULL DEFAULT 'DONE',
//     `SELL` TEXT NOT NULL DEFAULT 'OPEN',
//     `ENTRY DATE/TIME` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
//   )";
// $seller_product_registration_ex = mysqli_query($conn, $seller_product_registration);