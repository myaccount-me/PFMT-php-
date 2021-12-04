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
$date=$_GET["d"];
$date2=$_GET["date2"];
   // Log10
    $this->Image('logo.png',25,10,20);
    // Arial bold 15
    $this->SetFont('Arial','U',17);
	 $this->SetTextColor(129,129,129);
    // Move to the right
    $this->Cell(80);
    // Title
	
    $this->Cell(1,10,'Etat des Sorties',0,0,'R');
	 $this->Ln(9);
	 $ligne='Entrées du '.$date.' au '.$date2;
	   $this->SetFont('Arial','',15);
	    $this->SetTextColor(129,129,129);
   $this->Cell(84,9); $this->Cell(31,11,$ligne,0,0,'R');
   $this->Ln(9);
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

function BasicTable($med)

{
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$med=$_GET["med"];
$date=$_GET["d"];
$date2=$_GET["date2"];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
// Couleurs, épaisseur du trait et police grasse
    $this->SetFillColor(255,150,100);
    $this->SetTextColor(255);
    $this->SetDrawColor(112,146,190);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');

    // Restauration des couleurs et de la police
    $this->SetFillColor(189,210,232);
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
 $this->Ln(6);
 }
 $this->ln(4); 
$requete2 ="SELECT * FROM echantillon where num_med=$med and num_echant in (SELECT num_lot From sortie_stock WHERE dateS BETWEEN '$date' AND '$date2')";
$resultat2=mysqli_query($cnx, $requete2);
$this->SetFillColor(189,210,232);
	 $this->SetFont('Arial','B',10);
	 $this->Cell(9,8);   $this->Cell(40,6,'Fiche des sorties:',0,0,'',false);
	 $this->ln(7); 
 while($ligne2 = mysqli_fetch_array($resultat2)){
  $id=$ligne2[0];
$req="SELECT * FROM laboratoire where num_lab in (select num_labo from entree_stock where num_lot=$id)";
$res=mysqli_query($cnx, $req);
while($r = mysqli_fetch_array($res)){
$labo='Laboratoire: '.$r[1]; }
$requet ="SELECT SUM(Qsortie) FROM sortie_stock where num_lot=$id";
$res5=mysqli_query($cnx, $requet);
while($ro = mysqli_fetch_array($res5)){
$q='La somme du la quantité sortie: '.$ro[0].' unités'; }
    $nom='Numéro°du Lot: '.$ligne2[1];
   $date='Date de péremption: '.$ligne2[2];
    $qs='Quntité en stock: '.$ligne2[4].' unités';
    $this->SetFont('Arial','B',9);
   $this->SetDrawColor(0,0,0);
   $this->Cell(190,5,$nom,1,0,'C',false);
  $this->ln(6);
   $this->Cell(9,8);  $this->Cell(65,6,$labo,0,0,'',false);
    $this->ln(6);
   $this->Cell(9,8);  $this->Cell(65,5,$date,0,0,'',false);
    $this->ln(6);
$this->Cell(9,8);  $this->Cell(65,5,$qs,0,0,'',false);
$this->ln(6);
$this->Cell(9,8);  $this->Cell(65,5,$q,0,0,'',false);
$this->ln(7);

$this->Cell(11,8);  $this->Cell(50,5,'Liste des bénéficiaire: ',1,0,'C',false);
$this->ln(7);


$requet1 ="SELECT Qstock FROM echantiilon where num_echant=$id";
$res7=mysqli_query($cnx, $requet);
$req ="SELECT * FROM beneficiaire where num_benef in (SELECT num_bnef From sortie_stock  WHERE num_lot=$id)"; 
$res3=mysqli_query($cnx, $req);
while($row = mysqli_fetch_array($res3)){
 $num=$row[0];
 $bnef='Nom & Prenom: '.$row[1].' '.$row[2];
  $s='statut: '.$row[4];
  $this->SetFillColor(240,240,240);
  $this->SetDrawColor(240,240,240);
 $this->SetFont('Arial','B',9);
  
   $this->Cell(11,8);  $this->Cell(55,5,$bnef,1,0,'C',true);
   $this->ln(6);
   $this->Cell(11,8);  $this->Cell(40,5,$s,0,0,'',false);
   $this->ln(6);
if($row[4]=="Externe"){
$requete="SELECT be.qualite_benef,be.reseau FROM beneficiaire as b, bexterne as be WHERE b.num_benef=$num AND b.num_benef=be.num_benef";
$res8=mysqli_query($cnx,$requete);
while($l= mysqli_fetch_array($res8)){
$qu='Qulité du bénéficiaire : '.$l[0];
$r='Réseau : '.$l[1];
 
}
 $this->Cell(11,8);  $this->Cell(40,5,$qu,0,0,'',false);
   $this->ln(6);
  $this->Cell(11,8);  $this->Cell(40,5,$r,0,0,'',false);
   $this->ln(6);
}  else{
$requete="SELECT bi.fonction FROM beneficiaire as b, binterne as bi WHERE b.num_benef=$num AND b.num_benef=bi.num_benef";
//echo($requete); 
$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res))
{
$fnct='Fonction : '.$ligne[0];
}

  $this->Cell(11,8);  $this->Cell(40,5,$fnct,0,0,'',false);
   $this->ln(6);

}
 $rqte="SELECT SUM(Qsortie) From sortie_stock where num_bnef=$num and num_lot=$id"; 
 $res4=mysqli_query($cnx, $rqte);
while($h = mysqli_fetch_array($res4)){
$sum='Total du Q°remise: '.$h[0].' unités';
}
  $this->Cell(11,8);  $this->Cell(40,5,$sum,0,0,'',false);
   $this->ln(6);
   $this->SetDrawColor(0,0,0);
  $this->Cell(11,8);  $this->Cell(40,5,'Liste des sorties: ',1,0,'C',false);
	$this->ln(6);
$reqt ="SELECT * FROM sortie_stock where num_bnef=$num and num_lot=$id"; 
$res=mysqli_query($cnx, $reqt);
$i=0;
while($r = mysqli_fetch_array($res)){
$i=$i+1;
$qs='Q°sortie : '.$r[3].' unités';
$ds='Date de sortie : '.$r[4];
$bl='BL numéro° : '.$r[5];
$s='Sortie n°: '.$i;
 $this->SetFillColor(230,230,230);
 $this->SetDrawColor(0,0,0);
  $this->SetFont('Arial','B',9);
  $this->Cell(14,8);  $this->Cell(40,5,$s,0,0,'',FALSE);
  $this->ln(6);
   $this->SetDrawColor(0,0,0);
  $this->SetFont('Arial','B',9);
$this->Cell(9,8);  $this->Cell(40,6,$ds,0,0,'C',false);$this->Cell(4,8);$this->Cell(40,6,$qs,0,0,'C',false);$this->Cell(4,8);$this->Cell(40,6,$bl,0,0,'C',false);
 $this->ln(6);
}
$this->ln(2);



 

}


 }
}
}



$pdf = new PDF_Clipping();
$pdf->AddPage();
//example of clipping rectangle
//$pdf->Image('C:\Users\HP-ProBook\Downloads\non1.png' , -10 , 50, 220 , 190 );


$pdf->BasicTable($med);

$pdf->Output();
?>