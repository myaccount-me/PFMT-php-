<?php
require('fpdf1.7/fpdf1.7/fpdf.php');

class PDF_Clipping extends FPDF
{ 
function Footer()
{
    // Go to 1.5 cm from bottom
    $this->SetY(-15);
    // Select Arial italic 8
    $this->SetFont('Arial','I',8);
   
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
	
}
 function Header()
{
$date=$_GET["d"];
$date2=$_GET["date2"];
   // Logo
    $this->Image('logo.png',25,10,20);
    // Arial bold 15
    $this->SetFont('Arial','U',17);
	 $this->SetTextColor(129,129,129);
    // Move to the right
    $this->Cell(80);
    // Title
	
    $this->Cell(1,10,'Etat des Entrées ',0,0,'R');
	 $this->Ln(9);
	 $ligne='Entrées du '.$date.' au '.$date2;
	   $this->SetFont('Arial','',15);
	    $this->SetTextColor(129,129,129);
   $this->Cell(84,9); $this->Cell(31,11,$ligne,0,0,'R');
   $this->Ln(5);
   // Print centered page number
	 $d = date("d m Y");
$dat = DateTime::createFromFormat('d m Y', $d);
$date2= $dat->format('d/m/Y');
$ligne2='édité le '.$date2;
    $this->SetFont('Arial','',10);
	    $this->SetTextColor(41,41,41);
   $this->Cell(155,9); $this->Cell(31,11,$ligne2,0,0,'R');
    // Line break
    $this->Ln(11);
}

function BasicTable($date)

{
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$med=$_GET["med"];
$date=$_GET["d"];
$date2=$_GET["date2"];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
// Couleurs, épaisseur du trait et police grasse
    
    $this->SetTextColor(255);
    $this->SetDrawColor(0,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');

    // Restauration des couleurs et de la police
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Données
    $fill = false;
    // En-tête
	$requete1 ="SELECT * FROM medicaments  WHERE num_med=$med "; 
	$resultat1=mysqli_query($cnx, $requete1);
   while($ligne = mysqli_fetch_array($resultat1)){
 $this->SetFont('Arial','B',11);
 $nom='Médicament : '.$ligne[1];	
$this->Cell(9,8);  $this->Cell(40,6,$nom,0,0,'',false);
 $this->Ln(6);
  $dosage='Dosage : '.$ligne[2];
$this->Cell(9,8);  $this->Cell(40,6,$dosage,0,0,'',false);
 $this->Ln(6);
 $forme='Forme : '.$ligne[3];
$this->Cell(9,8);  $this->Cell(40,6,$forme,0,0,'',false);
 $this->Ln(6);
 $p='Présentation : '.$ligne[4];
$this->Cell(9,8);  $this->Cell(40,6,$p,0,0,'',false);
 $this->Ln(6);
 $pkg='Primary packaging : '.$ligne[5];
$this->Cell(9,8);  $this->Cell(40,6,$pkg,0,0,'',false);
 $this->Ln(10);
 }
 
$requete2 ="SELECT * FROM laboratoire where num_lab in (SELECT num_labo From entree_stock WHERE date_E BETWEEN '$date' AND '$date2' AND num_lot in (SELECT num_echant From echantillon where num_med=$med))";
 $this->SetFillColor(189,210,232);
	 $this->SetFont('Arial','B',11);
	 $this->Cell(9,8);   $this->Cell(40,6,'Fiche des entrées:',0,0,'',false);
	 $this->ln(7); 
$resultat2=mysqli_query($cnx, $requete2);
 while($ligne2 = mysqli_fetch_array($resultat2)){
   $id=$ligne2[0];
   $nom='Nom du Laboratoire : '.$ligne2[1];
   $mail='Email : '.$ligne2[8];
      $tel='Téléphone du Bureau : '.$ligne2[9];
	  $adrs='Adresse : '.$ligne2[2];
   
   
	   $this->SetFont('Arial','B',9);
   $this->Cell(190,5,$nom,1,0,'C',false);
	  $this->ln(6);
	 $this->Cell(9,8);   $this->Cell(40,6,$mail,0,0,'',false);
	  $this->ln(6);
	   $this->Cell(9,8);   $this->Cell(40,6,$tel,0,0,'',false);
	  $this->ln(6);
	    $this->Cell(9,8);   $this->Cell(40,6,$adrs,0,0,'',false);
	  $this->ln(6);
	 
	   $this->Cell(8,8);   $this->Cell(45,5,'Fiche des Lots:',1,0,'C',false);
	 $this->ln(7);
$requete ="SELECT * FROM echantillon where num_echant in (SELECT num_lot From entree_stock  WHERE num_labo=$id and num_lot in (SELECT num_echant From echantillon where num_med=$med))"; 
$resul3=mysqli_query($cnx, $requete);
while($ligne4 = mysqli_fetch_array($resul3)){
$num=$ligne4[0];
$rq1="SELECT SUM(Qentree) FROM entree_stock WHERE num_lot=$num";
$res1=mysqli_query($cnx, $rq1);
while($row = mysqli_fetch_array($res1)){
$q='La Somme du La quntité entrée : '.$row[0].' unités';
}

$lot='Numéro du Lot : '.$ligne4[1];
$date='Date de prémeption : '.$ligne4[2];
$qs='Quantité en stock : '.$ligne4[4].' unités';
$date2=$ligne4[2];

$dat1 = DateTime::createFromFormat('Y-m-d', $date2);
$date1= $dat1->format('d/m/Y');

$d = date("d m Y");
$dat = DateTime::createFromFormat('d m Y', $d);
$date2= $dat->format('d/m/Y');

list($jour1, $mois1, $annee1) = explode('/', $date1);
list($jour2, $mois2, $annee2) = explode('/', $date2);
 
//Calcul des timestamp
$timestamp1 = mktime(0,0,0,$mois1,$jour1,$annee1);
$timestamp2 = mktime(0,0,0,$mois2,$jour2,$annee2);
$nbJours = ($timestamp1 - $timestamp2)/86400; 
$n=round($nbJours);
$val='Validité : '.$n.' jour(s)';
$this->SetFillColor(240,240,240);
  $this->SetDrawColor(240,240,240);
 $this->SetFont('Arial','B',9);
$this->Cell(11,8);  $this->Cell(42,5,$lot,1,0,'C',true);
 $this->ln(6);
 $this->Cell(9,8);  $this->Cell(38,6,$date,0,0,'',false);
  $this->ln(6);
 $this->Cell(9,8);  $this->Cell(38,6,$val,0,0,'',false);
$this->ln(6);
 $this->Cell(9,8);  $this->Cell(38,6,$qs,0,0,'',false);
 $this->ln(6);
 $this->Cell(9,8);  $this->Cell(38,6,$q,0,0,'',false);
 $this->ln(6);
  $this->SetDrawColor(0,0,0);
 $this->Cell(11,8);  $this->Cell(35,5,'Liste des entrées: ',1,0,'C',false);
 $this->ln(8);
 
$reqt ="SELECT * FROM entree_stock where num_lot=$num "; 
$res=mysqli_query($cnx, $reqt);
$i=0;
while($row = mysqli_fetch_array($res)){
$i=$i+1;
$date="Date d'entrée : ".$row[4];
$q='Qunatité Entrée : '.$row[3].' unités';
$bl='BL Numéro°: '.$row[5];
$e='Entrée n° '.$i.' : ';
$this->SetFillColor(230,230,230);
 $this->SetDrawColor(0,0,0);
  $this->SetFont('Arial','B',9);
  $this->Cell(14,8);  $this->Cell(40,5,$e,0,0,'',FALSE);
  $this->ln(6);
   $this->SetDrawColor(0,0,0);
  $this->SetFont('Arial','B',9);
$this->Cell(9,8);  $this->Cell(40,6,$date,0,0,'C',false);$this->Cell(4,8);$this->Cell(40,6,$q,0,0,'C',false);$this->Cell(4,8);$this->Cell(40,6,$bl,0,0,'C',false);
 $this->ln(6);

}
 $this->SetFont('Arial','B',11);
 $this->ln(3);
}

 }
}
}



$pdf = new PDF_Clipping();
$pdf->AddPage();
//example of clipping rectangle
//$pdf->Image('C:\Users\HP-ProBook\Downloads\non1.png' , -10 , 50, 220 , 190 );


$pdf->BasicTable($date);

$pdf->Output();
?>
