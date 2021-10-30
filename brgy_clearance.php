<?php 
require('pdf/fpdf184/fpdf.php');
session_start();
$print_id =$_SESSION['print_id'];
$table = $_SESSION['table'];
$wat;
if($table == "banktb"){
    $wat = "Bank Transaction";
    }
if($table == "loanpurposetb"){
    $wat = "Loan Purpose";
    }
if($table == "motorloantb"){
    $wat = "Motor Loan";
    }
if($table == "tinid"){
    $wat = "TIN ID Requirements";
    }
    if($table == "internetap"){
    $wat = "Internet Applications";
    }
    if($table == "mayniladap"){
    $wat = "Maynilad Application";
    }
    if($table == "meralcoaptb"){
    $wat = "Meralco Application";
    }
    if($table == "postalidtb"){
    $wat = "Postal ID Application";
    }
    if($table == "localemp"){
    $wat = "Local Employment";
    }
    if($table == "residecytb"){
    $wat = "Residency";
    }
    if($table == "travelabtb"){
    $wat = "Travel Abroad";
    }
    
$brgy = $_SESSION['brgy'];
require_once('database-config.php');

$brgy = $_SESSION['brgy'];
//connection= mysqli_connect("localhost","root","","$brgy");
$result=mysqli_query($con,"select fname,mname,lname,address,date1 from `$table` WHERE `votersid` = '$print_id'");
$number_of_products = mysqli_num_rows($result);
$column_code = "";
while($row = mysqli_fetch_array($result)){
    $fname = $row["fname"];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $address = $row['address'];
    $date1 = $row['date1'];
    
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
$pdf->Cell(130 , 12 , 'Barangay '.ucfirst($brgy), 0,1);

$pdf->SetFont('Arial','B',22);
$pdf->Cell(45 , 10 , '',0,0); // indention
$pdf->Cell(130 , 20 ,'BARANGAY CLEARANCE',0,1);//end of line

$pdf->SetTextColor(0,0,0);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(45 , 8 , 'PUNONG BARANGAY:',0,1);


$pdf->SetFont('Arial','',12);
$pdf->Cell(72 , 8 , 'Name',0,0);
$pdf->Cell(100 , 8 , ucfirst($fname).' '.ucfirst($mname).' '.ucfirst($lname),1,1);

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
$pdf->Cell(45 , 8 , 'his/her '.$wat,0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(60 , 8 , 'SECRETARY:',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(45 , 8 , 'Issued this '.date('d/m/y').' '.'at Barangay ' .ucfirst($brgy) .', City of Malabon.' ,0,1);

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
 ?>