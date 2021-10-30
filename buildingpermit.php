<?php 
require('pdf/fpdf184/fpdf.php');
session_start();
$print_id =$_SESSION['print_id2'];
$table = $_SESSION['table'];
$wat;
if($table == "buldingptb"){
    $wat = "Building Permit";
    }
    if($table == "demolitionptb"){
    $wat = "Demolition Permit";
    }
    if($table == "excavationptb"){
    $wat = "Excavation Permit";
    }
    if($table == "fencingptb"){
    $wat = "Fencing Permit";
    }
    if($table == "renovationptb"){
    $wat = "Renovation Permit";
    }
    if($table == "sunkenptb"){
    $wat = "Sunken Permit";
    }
    if($table == "wiringptb"){
    $wat = "Wiring Permit";
    }
$brgy = $_SESSION['brgy'];
require_once('database-config.php');
$brgy = $_SESSION['brgy'];

$result=mysqli_query($con,"select fname,mname,lname,address,date1,numberstorey,location from `$table` WHERE `votersid` = '$print_id'");
$number_of_products = mysqli_num_rows($result);
$column_code = "";
while($row = mysqli_fetch_array($result)){
    $fname = $row["fname"];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $address = $row['address'];
    $date1 = $row['date1'];
    $numberstorey = $row['numberstorey'];
    $location = $row['location'];
    
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
$pdf->Cell(130 , 12 , 'Barangay '.ucfirst($brgy) , 0,1);

$pdf->SetFont('Arial','B',22);
$pdf->Cell(67 , 10 , '',0,0); // indention
$pdf->Cell(130 , 20 ,'CERTIFICATION',0,1);//end of line

$pdf->SetTextColor(0,0,0);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 , 8 , 'PUNONG BARANGAY:',0,1);


$pdf->SetFont('Arial','',12);
$pdf->Cell(75 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'This is to certify that this Office interposes no objection to the ',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(55 , 8 , 'KAGAWAD:',0,0);

$pdf->SetFont('Arial','',12);
$pdf->Cell(45 , 8 , 'proposed construction of '.$numberstorey.' located at '.$address.' '.$location,0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(55 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'upon request of Mr. / Mrs.'.ucfirst($fname).' '.$mname.' '.$lname,0,1);

$pdf->Cell(45 , 8 , 'Name',0,1);
$pdf->Cell(60 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'This certificate is being issued upon the request of the above',0,1);
$pdf->Cell(55 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'named for securing '.$wat,0,1);

$pdf->Cell(45 , 8 , 'Name',0,1);

$pdf->Cell(60 , 8 , 'Name',0,0);
$pdf->Cell(45 , 8 , 'Issued this '.date('d/m/y').' '.'at Barangay ' .ucfirst($brgy) .', City of Malabon.' ,0,1);

$pdf->Cell(55 , 8 , 'Name',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 , 8 , 'SECRETARY:',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(45 , 8 , 'Name',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 , 8 , 'TREASURER:',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(45 , 8 , 'Name',0,1);

//kapitan//

$pdf->SetFont('Arial','B',12);
$pdf->Cell(140 , 30 , '',0,0); // indention
$pdf->Cell(45 , 20 ,'Name',0,1);//end of line

$pdf->SetFont('Arial','',12);
$pdf->Cell(130 , 2 , '',0,0); // indention
$pdf->Cell(45 , 2 ,'Punong Barangay',0,0);//end of line

$pdf->Output();
 ?>