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
    // Print centered page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}
 function Header()
{
   // Logo
    $this->Image('logo.png',11,10,20);
    // Arial bold 15
    $this->SetFont('Arial','U',17);
	 $this->SetTextColor(0,77,113);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(26,10,'Etat du stock des Médicaments',0,0,'R');
	 $this->Ln(9);
   $d = date("d m Y");
$dat = DateTime::createFromFormat('d m Y', $d);
$date2= $dat->format('d/m/Y');
$ligne2='édité le '.$date2;
    $this->SetFont('Arial','B',9);
	    $this->SetTextColor(41,41,41);
   $this->Cell(155,9); $this->Cell(31,11,$ligne2,0,0,'R');
    // Line break
    $this->Ln(12);
}

function BasicTable()
{$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
// Couleurs, épaisseur du trait et police grasse
    $this->SetFillColor(173,209,255);
    $this->SetTextColor(255);
    $this->SetDrawColor(0,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');

    // Restauration des couleurs et de la police
    $this->SetFillColor(189,210,232);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Données
    $fill = false;
    // En-tête
	 $this->SetFont('Arial','B',9);
	 $requete1 = "SELECT * FROM medicaments WHERE num_med in (SELECT num_med From echantillon ) GROUP BY num_med"; $resultat1=mysqli_query($cnx, $requete1);
   while($ligne = mysqli_fetch_array($resultat1)){$nom_med= $ligne[1];$dosage=$ligne[2];$Forme=$ligne[3];$p=$ligne[4];$pkg=$ligne[5]; $num=$ligne[0];
   $k=$nom_med.'                                '. $dosage.'                           '.$Forme.'                         '.$p.'                                 '.$pkg;
$this->Cell(2,4);$this->Cell(196,6,$k,1,0,'',true);
	 $this->Ln(7);
$requete2 = "SELECT SUM(Qstock) FROM echantillon where num_med=$num "; $resultat2=mysqli_query($cnx,$requete2);
	  $nbr1= mysqli_num_rows($resultat2); 	
	  if($nbr1!=0){  while($ligne1 = mysqli_fetch_array($resultat2)){$qstock= $ligne1[0].'unités';
	   $this->SetFont('Arial','',9);
	  $ligne='La quantite en stock pour ce médicament: '. $qstock;
 $this->Cell(45,9);  $this->Cell(140,6,$ligne,1,0,'C',true );
  $this->Ln(5);}}
 else {
   $l='La quantite en stock pour ce médicament: 0 unités';
 $this->Cell(45,9);  $this->Cell(150,6,$l,1,0,false );}
	  $this->Ln(3);
 $this->Cell(30,9);   $this->Cell(40,6,'Echantiilon(s)',1,0,'C',false); $this->Cell(42,6,'Q°entree',1,0,'C',false);$this->Cell(42,6,'Q°sortie',1,0,'C',false);$this->Cell(45,6,'Q°en stock',1,0,'C',false);
    $this->Ln();
	// Données
	 $requete = "select * from  echantillon  where num_med=$num and num_echant in (SELECT num_lot FROM entree_stock where num_lot in (SELECT num_lot FROM sortie_stock)) GROUP BY num_lot";
	// $requet = "select e.num_lot, SUM(es.Qsortie) from echantillon as e , sortie_stock as es where e.num_echant=es.num_lot and e.num_med=$num GROUP BY e.num_lot"; 
	 // $result=mysqli_query($cnx, $requet);
	//$nbr= mysqli_num_rows($result); 
	$resultat=mysqli_query($cnx, $requete);
  while($r = mysqli_fetch_array($resultat)){ 
 // while($row = mysqli_fetch_array($result)){  
//if($r[0]==$row[0]){ 
$m=$r[0];
$requet="SELECT SUM(Qentree) FROM entree_stock  WHERE num_lot=$m "; 
$requet2="SELECT SUM(Qsortie) FROM sortie_stock  WHERE num_lot=$m "; 
$result=mysqli_query($cnx, $requet);
$result2=mysqli_query($cnx, $requet2);
while($row = mysqli_fetch_array($result)){  
 $qe=$row[0].' unités';}
 while($row2 = mysqli_fetch_array($result2)){  
 $qs=$row2[0].' unités';}
$q=$qe-$qs;
 $q1=$q.' unités';
   $this->Cell(30,9);  $this->Cell(40,7,$r[1],1);$this->Cell(42,7,$qe,1); $this->Cell(42,7,$qs,1);  $this->Cell(45,7,$q1,1);$this->Ln();}
   //}
 $rq="SELECT num_lot, num_echant from  echantillon WHERE num_med=$num and num_echant in(SELECT num_lot FROM entree_stock where num_lot not in (SELECT num_lot FROM sortie_stock)) GROUP BY num_lot";
 $reslt=mysqli_query($cnx, $rq); 
  while($l = mysqli_fetch_array($reslt)){ 
  $lot=$l[1];
  $rq1="select SUM(Qentree) from entree_stock where num_lot=$lot GROUP BY num_lot";
  $rs=mysqli_query($cnx,$rq1);
  while($h = mysqli_fetch_array($rs)){  
 $q2=$h[0].' unités';
  $this->Cell(30,9);  $this->Cell(40,7,$l[0],1);$this->Cell(42,7,$q2,1);$this->Cell(42,7,'0 unités',1); $this->Cell(45,7,$q2,1);  $this->Ln();
  }}
   $this->SetFont('Arial','B',9);
   $this->Ln(3);
  }
   $this->SetFont('Arial','B',9);
  $this->Ln(3);
 
  
  
  
}
}


$pdf = new PDF_Clipping();
$pdf->AddPage();
//example of clipping rectangle
//$pdf->Image('C:\Users\HP-ProBook\Downloads\non1.png' , -10 , 50, 220 , 190 );



$pdf->BasicTable();

$pdf->Output();
?>
