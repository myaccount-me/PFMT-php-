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
	 $this->SetTextColor(129,129,129);
    // Move to the right
    $this->Cell(80);
    // Title
	
    $this->Cell(42,10,'Etat des Sorties pour un Bénéficiaire',0,0,'R');
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

function BasicTable($bnef)

{
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$bnef=$_POST["bnef"];


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
$requete1 ="SELECT statut FROM beneficiaire  WHERE num_benef=$bnef "; 
$resultat1=mysqli_query($cnx, $requete1);
  while($ligne = mysqli_fetch_array($resultat1)){
  $statut=$ligne[0];} 
  if($statut=="Externe"){
$requete="SELECT b.num_benef,b.nom_benef,b.prenom_benef,b.observation,b.statut,be.qualite_benef,be.reseau FROM beneficiaire as b, bexterne as be WHERE b.num_benef=$bnef AND b.num_benef=be.num_benef";
//echo($requete); 

$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res)){
$num_bnef=$ligne[0];
$nom=$ligne[1];
$prenom=$ligne[2];
$statut=$ligne[4];
$observation=$ligne[3];
$qualite=$ligne[5];
$reseau=$ligne[6];
$this->SetFont('Arial','B',11);
 $nom='Nom&Prenom : '.$ligne[2].' '.$ligne[1];	
$this->Cell(9,8);  $this->Cell(40,6,$nom,0,0,'',false);
  $this->Ln(6);
  $statut='Statut : '.$statut;
$this->Cell(9,8);  $this->Cell(40,6,$statut,0,0,'',false);
 $this->Ln(6);
$q='Qualité : '.$qualite;
$this->Cell(9,8);  $this->Cell(40,6,$q,0,0,'',false);
 $this->Ln(6);
 $reseau='Reseau : '.$ligne[5];
$this->Cell(9,8);  $this->Cell(40,6,$reseau,0,0,'',false);
 $this->Ln(6);
 }

}

else{
$requete="SELECT b.num_benef,b.nom_benef,b.prenom_benef,b.observation,b.statut,bi.fonction FROM beneficiaire as b, binterne as bi WHERE b.num_benef=$bnef AND b.num_benef=bi.num_benef";
//echo($requete); 

$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res)){
$num_bnef=$ligne[0];
$nom=$ligne[1];
$prenom=$ligne[2];
$statut=$ligne[4];
$observation=$ligne[3];
$fnct=$ligne[5];
$this->SetFont('Arial','B',10);
 $nom='Nom&Prenom : '.$ligne[2].' '.$ligne[1];	
$this->Cell(9,8);  $this->Cell(40,6,$nom,0,0,'',false);
  $this->Ln(6);
  $statut='Statut : '.$statut;
$this->Cell(9,8);  $this->Cell(40,6,$statut,0,0,'',false);
 $this->Ln(6);
$f='Fonction : '.$fnct;
$this->Cell(9,8);  $this->Cell(40,6,$f,0,0,'',false);
 $this->Ln(9);
 
}
}
$rq="SELECT SUM(Qsortie) FROM sortie_stock WHERE num_bnef=$bnef";
$res=mysqli_query($cnx,$rq);
 while($l= mysqli_fetch_array($res)){
 $q='Total du Q°remise :'.$l[0].' unités'; }
 
  
 $this->SetFont('Arial','B',10);
	 $this->Cell(9,8);   $this->Cell(40,5,'Fiche des sorties:',0,0,'C',false);
	 $this->Ln(6);
	 $this->SetFont('Arial','B',9);
	 $this->Cell(9,8);$this->Cell(40,6,$q,0,0,'',false);
	  $this->Ln(7);
  $this->SetDrawColor(0,0,0); 
  $this->SetTextColor(0);
$this->SetFont('Arial','B',8);
$rqt="SELECT * FROM medicaments WHERE num_med in (SELECT num_med FROM echantillon WHERE num_echant in (SELECT num_lot FROM sortie_stock WHERE num_bnef=$bnef))"; 
$rs=mysqli_query($cnx,$rqt);
while($ligne= mysqli_fetch_array($rs)){
$nom_med= $ligne[1];$dosage=$ligne[2];$Forme=$ligne[3];$p=$ligne[4];$pkg=$ligne[5]; $num=$ligne[0];
  $k=$nom_med.'                                '. $dosage.'                           '.$Forme.'                         '.$p.'                                 '.$pkg;
$this->Cell(2,4);$this->Cell(196,5,$k,1,0,'',true);
$this->Ln(8);

$reqt="SELECT * FROM echantillon  WHERE num_med=$num and num_echant in ( SELECT num_lot FROM sortie_stock WHERE num_bnef=$bnef) GROUP BY num_echant "; 
$rest=mysqli_query($cnx,$reqt);
while($row= mysqli_fetch_array($rest)){ 
$echant=$row[0];
$req="SELECT * FROM laboratoire where num_lab in (select num_labo from entree_stock where num_lot=$echant)";
$res=mysqli_query($cnx, $req);
while($r = mysqli_fetch_array($res)){
$labo='Laboratoire: '.$r[1]; }

$lot='Numéro du Lot : '.$row[1];
$d='Date de péremption : '.$row[2];
$qs='Quntité en stock : '.$row[4].' unités';
    $this->SetFont('Arial','B',9);
   $this->SetDrawColor(0,0,0);
 $this->Cell(9,8); $this->Cell(65,5,$lot,1,0,'C',false);
  $this->ln(6);
   $this->Cell(9,8);  $this->Cell(65,6,$labo,0,0,'',false);
    $this->ln(6);
   $this->Cell(9,8);  $this->Cell(65,5,$d,0,0,'',false);
    $this->ln(6);
$this->Cell(9,8);  $this->Cell(65,5,$qs,0,0,'',false);
$this->ln(6);


$this->SetFont('Arial','B',9);
   $this->SetDrawColor(0,0,0);
 $this->Cell(11,8); $this->Cell(40,5,'Liste des sorties : ',1,0,'C',false);


$rt="SELECT * FROM sortie_stock WHERE num_lot=$echant and num_bnef=$bnef "; 
 $this->Ln(8);

$res1=mysqli_query($cnx,$rt);
$i=0;
while($row1= mysqli_fetch_array($res1)){ 
$i=$i+1;
$ds='Date de Sortie : '.$row1[4];
$q='Q° Remise : '.$row1[3].' unités';
$b='BL° numéro : '.$row1[5];
$s='Sortie n°'.$i.': ';
$this->SetFont('Arial','B',9);
$this->Cell(9,8);$this->Cell(65,6,$s,0,0,'',false);
$this->Ln(6);

$this->Cell(9,8);$this->Cell(40,6,$ds,0,0,'',false);$this->Cell(11,8);$this->Cell(40,6,$q,0,0,'',false);$this->Cell(4,8); $this->Cell(40,6,$b,0,0,'',false);
$this->Ln(6);
}
}
$this->SetFont('Arial','B',8);
$this->Ln(); 

 
 
 }
 
}
}



$pdf = new PDF_Clipping();
$pdf->AddPage();
//example of clipping rectangle
//$pdf->Image('C:\Users\HP-ProBook\Downloads\non1.png' , -10 , 50, 220 , 190 );


$pdf->BasicTable($bnef);

$pdf->Output();
?>