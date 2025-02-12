<?php
require 'vendor/autoload.php';
require 'server.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet       = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'USER NAME');
$sheet->setCellValue('B1', 'USER ID');
$sheet->setCellValue('C1', 'EMAIL ID');
$sheet->setCellValue('D1', 'MOBILE NUMBER');
$sheet->setCellValue('E1', 'STATE');
$sheet->setCellValue('F1', 'CITY');
$sheet->setCellValue('G1', 'PIN CODE');
$sheet->setCellValue('H1', 'ENTRY DATE/TIME');
$sheet->setCellValue('I1', 'STATUS');
$sheet->setCellValue('J1', 'SHOP NAME');

$select_hai_one    = "SELECT `USER NAME`, `EMAIL`, `MOBILE NUMBER`, `STATE`, `CITY`, `PIN CODE`, `SHOP NAME`, `USER ID`, `ENTRY DATE/TIME`, `STATUS` FROM `seller_registration`";
$select_hai_one_ex = mysqli_query($conn, $select_hai_one);
$sheetcellnumber   = 2;

while ($select_hai_one_fetch = mysqli_fetch_assoc($select_hai_one_ex)) {
    $sheet->setCellValue('A' . $sheetcellnumber, $select_hai_one_fetch['USER NAME']);
    $sheet->setCellValue('B' . $sheetcellnumber, $select_hai_one_fetch['USER ID']);
    $sheet->setCellValue('C' . $sheetcellnumber, $select_hai_one_fetch['EMAIL']);
    $sheet->setCellValue('D' . $sheetcellnumber, $select_hai_one_fetch['MOBILE NUMBER']);
    $sheet->setCellValue('E' . $sheetcellnumber, $select_hai_one_fetch['STATE']);
    $sheet->setCellValue('F' . $sheetcellnumber, $select_hai_one_fetch['CITY']);
    $sheet->setCellValue('G' . $sheetcellnumber, $select_hai_one_fetch['PIN CODE']);
    $sheet->setCellValue('H' . $sheetcellnumber, $select_hai_one_fetch['ENTRY DATE/TIME']);
    $sheet->setCellValue('I' . $sheetcellnumber, $select_hai_one_fetch['STATUS']);
    $sheet->setCellValue('J' . $sheetcellnumber, $select_hai_one_fetch['SHOP NAME']);
    $sheetcellnumber++;
}

$writer    = new Xlsx($spreadsheet);
$temp_file = tempnam(sys_get_temp_dir(), 'PHPSpreadsheet');
$writer->save($temp_file);

// Send the file to the browser for download
header('Content-Description: File Transfer');
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="Registration_data.xlsx"');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($temp_file));
readfile($temp_file);
unlink($temp_file); // Remove the temporary file
exit;
// }
