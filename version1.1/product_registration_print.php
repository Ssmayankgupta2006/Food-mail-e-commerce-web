<?php
require 'vendor/autoload.php';
require 'server.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$sp = new Spreadsheet();

$sh = $sp->getActiveSheet();
$sh->setCellValue('A1', 'USER ID');
$sh->setCellValue('B1', 'PRODUCT NAME');
$sh->setCellValue('C1', 'PRODUCT ID');
$sh->setCellValue('D1', 'PRODUCT SEARCH ID');
$sh->setCellValue('E1', 'PRODUCT ID');
$sh->setCellValue('F1', 'MARKET RS');
$sh->setCellValue('G1', 'ACTUAL RS');
$sh->setCellValue('H1', 'UNIT OF MEASURE');
$sh->setCellValue('I1', 'PRODUCT DIS');
$sh->setCellValue('J1', 'PRODUCT USED MATERIAL');
$sh->setCellValue('K1', 'STATUS');
$sh->setCellValue('L1', 'ENTRY DATE/TIME');

$number    = 2;
$select    = "SELECT `USER ID`, `PRODUCT NAME`, `PRODUCT ID`, `PRODUCT SEARCH ID`, `MARKET RS`, `ACTUAL RS`, `UNIT OF MEASURE`, `PRODUCT DIS`, `PRODUCT USED MATERIAL`, `STATUS`, `ENTRY DATE/TIME` FROM `seller_product_registration`;";
$select_ex = mysqli_query($conn, $select);

while ($select_fetch = mysqli_fetch_assoc($select_ex)) {
    $sh->setCellValue('A' . $number, $select_fetch['USER ID']);
    $sh->setCellValue('B' . $number, $select_fetch['MARKET RS']);
    $sh->setCellValue('C' . $number, $select_fetch['PRODUCT ID']);
    $sh->setCellValue('D' . $number, $select_fetch['PRODUCT SEARCH ID']);
    $sh->setCellValue('E' . $number, $select_fetch['PRODUCT ID']);
    $sh->setCellValue('F' . $number, $select_fetch['PRODUCT NAME']);
    $sh->setCellValue('G' . $number, $select_fetch['ACTUAL RS']);
    $sh->setCellValue('H' . $number, $select_fetch['UNIT OF MEASURE']);
    $sh->setCellValue('I' . $number, $select_fetch['PRODUCT DIS']);
    $sh->setCellValue('J' . $number, $select_fetch['PRODUCT USED MATERIAL']);
    $sh->setCellValue('K' . $number, $select_fetch['STATUS']);
    $sh->setCellValue('L' . $number, $select_fetch['ENTRY DATE/TIME']);
    $number++;
}
$writer    = new Xlsx($sp);
$temp_file = tempnam(sys_get_temp_dir(), 'PHPSpreadsheet');
$writer->save($temp_file);

// Send the file to the browser for download
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="product_registration_data.xlsx"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($temp_file));
readfile($temp_file);
unlink($temp_file); // Remove the temporary file
exit;
