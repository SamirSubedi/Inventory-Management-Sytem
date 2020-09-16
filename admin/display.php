<?php
require('fpdf/fpdf.php');
$db=new PDO('mysql:host=localhost;dbname=finman','root','');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
 
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Move to the right
    $this->Cell(120);
    // Title
    $this->Cell(50,10,'NEW NAMASTE IMPEX',0,0,'C');
     $this->SetFont('Arial','',10);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Contact: 01-4285857
        ',0,0,'C');

    // Line break
    $this->Ln(8);

    $this->SetFont('Arial','',12);
    $this->Cell(280,10,'Gongabu, Nepal',0,1,'C');
   
     $this->Ln(5);
    $this->SetFont('Arial','U',18);
    $this->Cell(285,10,'SALES REPORT',0,1,'C');
    $this->SetFont('Arial','I',10);
  $this->Cell(200);
     $this->Cell(20,10,'From :'.$_POST['d1']);

     $this->Cell(0,10,'To :'.$_POST['d2'],0,1,'C');
     $this->SetFont('Arial','B',12);
     $this->Cell(40,10,'SalesMan :'.$_POST['n7'],0,1,'C');
     

    $this->Ln(5);


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
function headerTable()
{
    $this->SetFont('Arial','B',12);
 $this->Cell(7,10,'SN',1,0,'C');
    $this->Cell(45,10,'Product',1,0,'C');
    $this->Cell(50,10,'Date',1,0,'C');
    $this->Cell(40,10,'Quantity(units)',1,0,'C');
    $this->Cell(30,10,'Price',1,0,'C');
    $this->Cell(37,10,'Amount(Rs)',1,0,'C');
    $this->Cell(29,10,'Payment',1,0,'C');
      $this->Cell(39,10,'Party',1,0,'C');
    
    $this->Ln(9);
}
function viewTable($db)
{
    $one=$_POST['d1'];
    $last=$_POST['d2'];
    $sman=$_POST['n7'];
    $sn=1;

    $this->SetFont('Times','',12);
    $stmt=$db->query("Select * from sales where sman='$sman' AND date between '$one' AND '$last' order by date desc");
    while($date=$stmt->fetch(PDO::FETCH_OBJ)){
        
        $this->Cell(7,10,$sn,1,0,'C');
        $this->Cell(45,10,$date->Pname,1,0,'C');
    $this->Cell(50,10,$date->date,1,0,'C');
      $this->Cell(40,10,$date->quantity,1,0,'C');
         $this->Cell(30,10,$date->price,1,0,'C');
           $this->Cell(37,10,number_format(($date->price)*($date->quantity)),1,0,'C');
  $this->Cell(29,10,$date->pmt,1,0,'C');
      $this->Cell(39,10,$date->Party,1,0,'C');
      
        $sn++;
       $this->Ln();
 
    }
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);

$pdf->headerTable();
    $pdf->viewTable($db);



$pdf->Output();

?>
                
                         
  
