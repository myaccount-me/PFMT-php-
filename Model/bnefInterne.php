<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 

class BnefInterne extends bneficiare {
private $fonction; 
 

function __construct($num,$nom,$prenom,$observation,$statut,$fonction){

parent::__construct($num,$nom,$prenom,$observation,$statut); 

$this->fonction= $fonction; } 


function getFonction() {
    return $this->fonction;
}



function setFonction($fonction) {
    $this->fonction= $fonction;
}

//ajouter BénéficiaireI
public function ajouterBnefI() {


$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$req="SELECT Max(num_benef) FROM beneficiaire "; 


$res=mysqli_query($cnx,$req);

while($ligne= mysqli_fetch_array($res)){
$num_bnef=$ligne[0];}


$requete="INSERT INTO binterne VALUES($num_bnef,'$this->fonction'  )";
echo($requete);
mysqli_query($cnx,$requete);

																																																																																																																																																																																																																																																																													
}

//modifier beneficiaireI
public function modifierbnefI($num_bnef){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="UPDATE binterne SET fonction='$this->fonction' WHERE num_benef= $num_bnef";
//echo($requete); 
mysqli_query($cnx,$requete);

}
public function deletebnefI($num_bnef){
//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="DELETE FROM binterne WHERE num_benef=$num_bnef"; 
echo($requete);
//$res=mysqli_query($cnx,$requete);
$c= new connection(); 
$c->cnx()->query($requete);
}
} ?> 
</body>
</html>
