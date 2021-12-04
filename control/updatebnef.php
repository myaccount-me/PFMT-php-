<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
include("../Model/classBneficiaire.php");
include("../Model/bnefExterne.php");
include("../Model/bnefInterne.php");
$num=$_POST["num_benef"];

$nom=$_POST["nom"];
$prenom=$_POST["prenom"]; 
$observation=$_POST["ob"];
$statut=$_POST["optradio"];
 $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
 
if($statut=='Externe') {
$qualite=$_POST["q"];
$reseau=$_POST["reseau"];
$req1="SELECT b.num_benef,b.nom_benef,b.prenom_benef,b.observation,b.statut,be.qualite_benef,be.reseau FROM beneficiaire as b, bexterne as be WHERE b.num_benef=be.num_benef AND nom_benef='$nom' AND prenom_benef='$prenom'  AND qualite_benef='$qualite'  AND reseau='$reseau' AND observation='$observation'";
$res1=mysqli_query($cnx,$req1);
$nbr1= mysqli_num_rows($res1);
//echo($nbr);
if($nbr1==0){
$b = new bneficiare($num,$nom,$prenom,$observation,$statut);
$b-> modifierbnef($num);

$be=new BnefExterne($num,$nom,$prenom,$observation,$statut,$qualite,$reseau); 
$be->modifierbnefE($num); 
header("location:../View/production/formlisteBnef.php?msg=3");} 

else {header("location:../View/production/formupdateBnef.php?num_benef=$num&statut=$statut&msg=2");} 

}

else {
$fnct=$_POST["fnct"];
$req2="SELECT b.num_benef,b.nom_benef,b.prenom_benef,b.observation,b.statut,bi.fonction  FROM beneficiaire as b, binterne as bi WHERE b.num_benef=bi.num_benef AND nom_benef='$nom' AND prenom_benef='$prenom' AND observation='$observation' AND fonction='$fnct' AND observation='$observation' ";
$res2=mysqli_query($cnx,$req2);
$nbr2= mysqli_num_rows($res2);
//echo($nbr);
if($nbr2==0){
$b = new bneficiare($num,$nom,$prenom,$observation,$statut);
$b-> modifierbnef($num);

$bi= new  BnefInterne($num,$nom,$prenom,$observation,$statut,$fnct); 
$bi->modifierbnefI($num);
header("location:../View/production/formlisteBnef.php?msg=3");
} 

else {header("location:../View/production/formupdateBnef.php?num_benef=$num&statut=$statut&msg=2");} 

}


?>
</body>
</html>
