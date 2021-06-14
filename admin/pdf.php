<?php
include('security.php');
include('pdf/fpdf.php'); 

class PDF extends FPDF
{
// Page header
function Header()
{
   
    // Select Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Framed title
    $this->Cell(30,10,'Message',0,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
//$display_heading = array('firstdName'=> 'First Name', 'lastdName'=> 'Last Name','fldEmail'=> 'Email','fldPhone'=> 'Phone','fldMessage'=> 'Message');
 
$result = mysqli_query($connection, "SELECT  firstdName, lastdName, fldEmail, fldPhone, fldMessage FROM contact_form") or die("database error:". mysqli_error($connection));
$header = mysqli_query($connection, "SHOW columns FROM contact_form WHERE field != 'contact_Id'");
 
$pdf = new PDF();
 $pdf = new FPDF('P','mm','A3');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);
/*
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,10,"First Name",1,0,'C');
$pdf->Cell(30,10,"Last Name",1,0,'C');
$pdf->Cell(30,10,"Email",1,0,'C');
$pdf->Cell(30,10,"Phone",1,0,'C');
$pdf->Cell(70,10,"Message",1,1,'C');
$pdf->SetFont('Arial','',12);
 while($row = mysqli_fetch_array($result))  
      { 
      $pdf->Cell(30,10, $row["firstdName"] ,1,0,'C'); 
      $pdf->Cell(30,10, $row["lastdName"] ,1,0,'C'); 
      $pdf->Cell(30,10, $row["fldEmail"] ,1,0,'C'); 
      $pdf->Cell(30,10, $row["fldPhone"] ,1,0,'C');       
      $pdf->Cell(70,10, $row["fldMessage"] ,1,1,'C'); 
      }  
*/
$pdf->Cell(30,10,"First Name",1,0,'C');
$pdf->Cell(30,10,"Last Name",1,0,'C');
$pdf->Cell(30,10,"Email",1,0,'C');
$pdf->Cell(30,10,"Phone",1,0,'C');
$pdf->Cell(160,10,"Message",1,1,'C');
while($row = mysqli_fetch_array($result))  
      { 
      $pdf->Cell(30,10, $row["firstdName"] ,1,0,'C'); 
      $pdf->Cell(30,10, $row["lastdName"] ,1,0,'C'); 
      $pdf->Cell(30,10, $row["fldEmail"] ,1,0,'C'); 
      $pdf->Cell(30,10, $row["fldPhone"] ,1,0,'C');       
      $pdf->Cell(160,10, $row["fldMessage"] ,1,1,'L'); 
      }  
/*foreach($result as $row) {
$pdf->SetFont('Arial','',8);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}*/
$pdf->Output();
?>
 

