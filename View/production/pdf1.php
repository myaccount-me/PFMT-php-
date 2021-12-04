<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 
require('fpdf1.7/fpdf1.7/fpdf.php');
class PDF extends FPDF
{function Header()
{
   // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','U',15);
	 $this->SetTextColor(0,77,113);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Etat du stock des Médicaments',0,0,'R');
    // Line break
    $this->Ln(20);
}
function tableau(){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$req2="SELECT dosage FROM medicaments";
$res2=mysqli_query($cnx,$req2);
 $this->SetFont('Arial','',12);
while($ligne1 = mysqli_fetch_array($res2)){
$dosage=$ligne1[2];
$this->Cell(44,6,$dosage,1,0,'C',false); 
}

 } 
 
 }
$pdf = new PDF();
// Column headings

$pdf->AddPage();
$pdf->tableau();
$pdf->Output();
?>
</body>
</html>
