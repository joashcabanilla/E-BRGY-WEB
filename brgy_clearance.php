<?php 
require('pdf/fpdf184/fpdf.php');
session_start();
require_once('database-config.php');
$id = $_GET['id'];
$link = $_GET['link'];
$sql = "select * from clearance_table where id = '$id'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){
    $firstname = $row['first_name'];
    $middlename = $row['middle_name'];
    $lastname = $row['last_name'];
    $date = $row['date'];
    $address = $row['address'];
    $barangay = $row['barangay'];
    $purpose = $row['purpose'];
}

$pdf = new FPDF ('p','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);

//Cell(width , height , text , border , end line , [align] )
$pdf->Cell(70 , 10 , '',0,0); // indention
$pdf->Cell(150 , 15 , 'Republic of the Philippines' , 0,1);

$pdf->Cell(77 , 10 , '',0,0); // indention
$pdf->Cell(130 , 1, 'CITY OF MALABON' , 0,1);

$pdf->Cell(77 , 10 , '',0,0); // indention
$pdf->Cell(130 , 12 , 'Barangay '.ucfirst($barangay), 0,1);

$pdf->SetFont('Arial','B',22);
$pdf->Cell(45 , 10 , '',0,0); // indention
$pdf->Cell(130 , 20 ,'BARANGAY CLEARANCE',0,1);//end of line

$pdf->SetTextColor(0,0,0);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 , 8 , 'PUNONG BARANGAY:',0,1);


$pdf->SetFont('Arial','',12);
$pdf->Cell(72 , 8 , 'Name',0,0);
$pdf->Cell(100 , 8 , ucfirst($firstname).' '.ucfirst($middlename).' '.ucfirst($lastname),1,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(113 , 8 , 'KAGAWAD:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(45 , 8 , 'Name',0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(72 , 8 , 'Name',0,0);
$pdf->Cell(100 , 8 , $address ,1,1);

$pdf->Cell(113 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'Address',0,1);

$pdf->Cell(72 , 8 , 'Name',0,0);
$pdf->Cell(100 , 8 , '',1,1);

$pdf->Cell(113 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'Records',0,1);

$pdf->Cell(60 , 8 , 'Name',0,1);

$pdf->Cell(60 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'Issued upon the request of the above named person to support',0,1);

$pdf->Cell(55 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'his/her '.$purpose,0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(60 , 8 , 'SECRETARY:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(45 , 8 , 'Issued this '.date('d/m/y').' '.'at Barangay ' .ucfirst($barangay) .', City of Malabon.' ,0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(55 , 8 , 'Name',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 , 8 , 'TREASURER:',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(45 , 8 , 'Name',0,1);

//kapitan//

$pdf->SetFont('Arial','B',12);
$pdf->Cell(140 , 30 , '',0,0); // indention
$pdf->Cell(45 , 20 ,'Name',0,1);//end of lines

$pdf->SetFont('Arial','',12);
$pdf->Cell(130 , 2 , '',0,0); // indention
$pdf->Cell(45 , 2 ,'Punong Barangay',0,0);//end of line

$pdf->Output();
$sql = "UPDATE `clearance_table` SET `print` = 'printed' WHERE `clearance_table`.`id` = $id";
mysqli_query($con,$sql);
 ?>