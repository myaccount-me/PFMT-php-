<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 

class BnefExterne extends bneficiare {

private $qualiteBnef; 
private $reseau; 

function __construct($num_bnef,$prenom,$nom_bnef,$observation,$statut,$reseau,$qualiteBnef){
parent::__construct($num_bnef,$prenom,$nom_bnef,$observation,$statut); 
$this->qualiteBnef= $qualiteBnef; 
$this->reseau= $reseau; } 

function getQualitebnef() {
    return $this->qualiteBnef;
}

function getReseau() {
    return $this->reseau;
}

function setQualitebnef($Q) {
    $this->qualiteBnef = $Q;
}

function setReseau($reseau) {
    $this->reseau = $reseau;
}


//ajouter BénéficiaireE
public function ajouterBnefE() {


$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$req="SELECT Max(num_benef) FROM beneficiaire "; 
//$ci= new connection(); 
//$res= $ci->cnx()->query($req);

$res=mysqli_query($cnx,$req);
echo($req);
while($ligne= mysqli_fetch_array($res)){
$num_bnef=$ligne[0];}


$requete="INSERT INTO bexterne VALUES($num_bnef,'$this->reseau' ,'$this->qualiteBnef' )";
echo($requete);
mysqli_query($cnx,$requete);
																																																																																																																																																																																																																																																																													
}

//modifier beneficiaireE
public function modifierbnefE($num_bnef){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="UPDATE bexterne SET qualite_benef='$this->qualiteBnef', reseau='$this->reseau'  WHERE num_benef= $num_bnef";
echo($requete); 
mysqli_query($cnx,$requete);

} 
public function deletebnefE($num_bnef){
//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="DELETE FROM bexterne WHERE num_benef=$num_bnef"; 
echo($requete);
//$res=mysqli_query($cnx,$requete);
$c= new connection(); 
$c->cnx()->query($requete);
}}
 ?> 
</body>
</html>
