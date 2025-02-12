<?php
require 'vendor/autoload.php';
require 'server.php';
Use PhpOffice\PhpSpreadsheet\Spreadsheet;
Use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$sp=new Spreadsheet();

$sh=$sp->getActiveSheet();


$sh->setCellValue('A1','USER NAME');
$sh->setCellValue('B1','SHOP NAME');
$sh->setCellValue('C1','PIN CODE');
$sh->setCellValue('D1','STATE');
$sh->setCellValue('E1','DISTRICT');
$sh->setCellValue('F1','CITY');
$sh->setCellValue('G1','STREET');
$sh->setCellValue('H1','MOBILE NUMBER');
$sh->setCellValue('I1','PASSWORD');
$sh->setCellValue('J1','EMAIL ID');
$sh->setCellValue('K1','STATUS');
$sh->setCellValue('L1','ENTRY DATE');

$select="SELECT `IMAGE`, `NAME`, `SHOP NAME`, `PIN CODE`, `STATE`, `DISTRICT`, `CITY`, `STREET`, `MOBILE NUMBER`, `PASSWORD`, `EMAIL`, `STATUS`, `ENTRY DATE` FROM `registration`;";
$select_ex=mysqli_query($conn,$select);
$loop=2;

while($select_fetch=mysqli_fetch_assoc($select_ex)){
    $sh->setCellValue('A'.$loop,$select_fetch['NAME']);
    $sh->setCellValue('B'.$loop,$select_fetch['SHOP NAME']);
    $sh->setCellValue('C'.$loop,$select_fetch['PIN CODE']);
    $sh->setCellValue('D'.$loop,$select_fetch['STATE']);
    $sh->setCellValue('E'.$loop,$select_fetch['DISTRICT']);
    $sh->setCellValue('F'.$loop,$select_fetch['CITY']);
    $sh->setCellValue('G'.$loop,$select_fetch['STREET']);
    $sh->setCellValue('H'.$loop,$select_fetch['MOBILE NUMBER']);
    $sh->setCellValue('I'.$loop,$select_fetch['PASSWORD']);
    $sh->setCellValue('J'.$loop,$select_fetch['EMAIL']);
    $sh->setCellValue('K'.$loop,$select_fetch['STATUS']);
    $sh->setCellValue('L'.$loop,$select_fetch['ENTRY DATE']);
    $loop++;
}

$writer = new Xlsx($sp);
$temp_file = tempnam(sys_get_temp_dir(), 'PHPSpreadsheet');
$writer->save($temp_file);

// Send the file to the browser for download
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="product_registration_data_all.xlsx"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($temp_file));
readfile($temp_file);
unlink($temp_file); // Remove the temporary file
exit;
?>