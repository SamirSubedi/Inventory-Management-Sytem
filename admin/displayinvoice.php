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
    $this->Cell(70);
    // Title
    $this->Cell(50,10,'NEW NAMASTE IMPEX',0,0,'C');
     $this->SetFont('Arial','',10);
    // Move to the right
  /*  $this->Cell(30);
    // Title
    $this->Cell(30,10,'Contact: 01-4285857
        ',0,0,'C');
*/
    // Line break
    $this->Ln(8);

    $this->SetFont('Arial','B',12);
    $this->Cell(180,10,'Gongabu, Nepal',0,1,'C');
    $this->Cell(180,10,'VAT NO. 30151458',0,1,'C');
       include 'connect.php';
    $inv=$_POST['n7'];
$cal=0;
     $query="Select * from sales where invno='$inv' ";
 $res=mysqli_query($con,$query);
     while($row = mysqli_fetch_array($res)){
$sman=$row['sman'];
$Party=$row['Party'];
$date=$row['date'];
$va=$row['vat'];
$cal=$cal+$row['price']*$row['quantity'];
}
     $this->Ln(5);
    $this->SetFont('Arial','U',18);
    $this->Cell(180,10,' Tax Invoice',0,1,'C');
     $this->SetFont('Arial','',13);
      $this->Cell(120);
    $this->Cell(40,10,' Client Tax Regd No :'.$va,0,1,'C');
    $this->SetFont('Arial','',10);
  $this->Cell(141);
     $this->Cell(20,10,'Invoice no :'.$_POST['n7']);

     $this->Ln(5);
   



     
    
     $this->SetFont('Arial','B',12);
     $this->Cell(20);
     $this->Cell(20,10,'Name :'.$Party);

     $this->SetFont('Arial','U',12);
     $this->Cell(40);
     $this->Cell(20,10,'Date :'.$date);
     $this->Cell(41);

     $this->SetFont('Arial','',10);
     $this->Cell(20,10,'SalesMan :'.$sman);
   //  $this->Cell(40,10,'Date :'.$_POST['n7'],0,1,'C');
     

    $this->Ln(16);

    

}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',12);
    // Page number
    $this->Cell(0,10,'New Namaste Impex'.$this->PageNo().'/{nb}',0,0,'C');
    
}
function headerTable()
{$this->Cell(12);
    $this->SetFont('Arial','B',12);
 $this->Cell(7,10,'SN',1,0,'C');
    $this->Cell(80,10,'Particulars',1,0,'C');
    $this->Cell(20,10,'Quantity',1,0,'C');
    $this->Cell(20,10,'Rate',1,0,'C');
    
    $this->Cell(39,10,'Amount(Rs)',1,0,'C');
  
    
    $this->Ln(9);
}
function viewTable($db)
{
   
    $sman=$_POST['n7'];
    $sn=1;

    $this->SetFont('Times','',12);
    $stmt=$db->query("Select * from sales where invno='$sman' ");
    while($date=$stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(12);
        $this->Cell(7,10,$sn,1,0,'C');
        $this->Cell(80,10,$date->Pname,1,0,'C');
    
      $this->Cell(20,10,$date->quantity,1,0,'R');
         $this->Cell(20,10,$date->price,1,0,'R');
           $this->Cell(39,10,number_format(($date->price)*($date->quantity)),1,0,'R');

  
    
      
        $sn++;
       $this->Ln();
 
    }
    $cal=0;
    include 'connect.php';
     $query="Select * from sales where invno='$sman' ";
 $res=mysqli_query($con,$query);
     while($row = mysqli_fetch_array($res)){
        $di=$row['discount'];
$cal=$cal+$row['price']*$row['quantity'];
$aft=$cal-$di/100*$cal;
$bef=$di/100*$cal;
$last=$aft+13/100*$aft;
$vat=13/100*$aft;
     }
    $this->SetFont('Times','',12);
 $this->Cell(99);
     $this->Cell(40,10,'Amount',1,0,'C');
     $this->Cell(39,10,'Rs.'.number_format($cal),1,0,'R');
     $this->Ln(10);
      $this->SetFont('Times','',12);
 $this->Cell(99);
     $this->Cell(40,10,'Discount (%): '.$di,1,0,'C');
     $this->Cell(39,10,'Rs.'.$bef,1,0,'R');
     $this->Ln(10);
 $this->SetFont('Times','',12);
 $this->Cell(99);
     $this->Cell(40,10,'Taxable Amount',1,0,'C');
     $this->Cell(39,10,'Rs.'.$aft,1,0,'R');
   $this->Ln(10);
 $this->SetFont('Times','',12);
 $this->Cell(99);
     $this->Cell(40,10,'VAT @ 13%',1,0,'C');
     $this->Cell(39,10,'Rs.'.$vat,1,0,'R');
        $this->Ln(10);
 $this->SetFont('Times','',12);
 $this->Cell(99);
     $this->Cell(40,10,'Total Including VAT',1,0,'C');
     $this->Cell(39,10,'Rs.'.$last,1,0,'R');
   
}
/*function viewRest()
{$this->Ln(25);

   $this->SetFont('Times','',10);
 $this->Cell(123);
     $this->Cell(55,10,'New Namaste Impex',1,0,'C');
    
}*/

}
 
// Instanciation of inherited class
$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage('P','A4',0);

$pdf->headerTable();
    $pdf->viewTable($db);
    $pdf->Ln(25);

   $pdf->SetFont('Times','',10);
 $pdf->Cell(123);
     $pdf->Cell(55,10,'New Namaste Impex',1,0,'C');

    $pdf->Line(20, 189, 210-20, 189);
    // $pdf->viewRest();



$pdf->Output();

?>
                
                         
  
