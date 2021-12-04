<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>

<?php
$qt=$_POST['qt'];
$labo=$_POST["labo"];
$v=$_POST["v"];
include("../Model/classBneficiaire.php");
include("../Model/bnefExterne.php");
include("../Model/bnefInterne.php");
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$observation=$_POST["ob"];
$statut=$_POST["optradio"];
$loc=$_POST["loc"];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$lot=$_POST['lot'];
echo $lot;
$med=$_POST['med'];
if($statut=="Externe"){
$qualite=$_POST["q"];
$reseau=$_POST["reseau"];
$req1="SELECT b.num_benef,b.nom_benef,b.prenom_benef,b.observation,b.statut,be.qualite_benef,be.reseau FROM beneficiaire as b, bexterne as be WHERE b.num_benef=be.num_benef AND nom_benef='$nom' AND prenom_benef='$prenom'  AND qualite_benef='$qualite'  AND reseau='$reseau' AND observation='$observation'";
$res1=mysqli_query($cnx,$req1);
$nbr1= mysqli_num_rows($res1);
//echo($nbr);
if($nbr1==0){
$b = new bneficiare(0,$nom,$prenom,$observation,$statut);
$b->ajouterBnef();
$be= new BnefExterne(0,$nom,$prenom,$observation,$statut,$reseau,$qualite); 
$be->ajouterBnefE();
if($loc==1){ 
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$req="SELECT Max(num_benef) FROM beneficiaire "; 
$res=mysqli_query($cnx,$req);
while($ligne= mysqli_fetch_array($res)){
$bnef=$ligne[0];}
header("location:../View/production/formfacS.php?bnef=$bnef&med=$med&lot=$lot&v=$v&qt=$qt&labo=$labo&msg=1");
}

else{header("location:../View/production/formajoutBnef.php?msg=1");
}
} 
else {
if($loc==1){
while($ligne= mysqli_fetch_array($res1)){
$bi=$ligne[0];}

header("location:../View/production/formfacS.php?bnef=$bi&med=$med&lot=$lot&v=$v&qt=$qt&labo=$labo&msg=2");
}
else{
header("location:../View/production/formajoutBnef.php?msg=2");}
}
}
else if($statut=="Interne"){
 $fonction=$_POST["fnct"];
$req2="SELECT b.num_benef,b.nom_benef,b.prenom_benef,b.observation,b.statut,bi.fonction  FROM beneficiaire as b, binterne as bi WHERE b.num_benef=bi.num_benef AND nom_benef='$nom' AND prenom_benef='$prenom' AND observation='$observation' AND fonction='$fonction' AND observation='$observation' ";
$res2=mysqli_query($cnx,$req2);
$nbr2= mysqli_num_rows($res2);
//echo($nbr);
if($nbr2==0){
 $b = new bneficiare(0,$nom,$prenom,$observation,$statut);
$b->ajouterBnef();
$bi= new  BnefInterne(0,$nom,$prenom,$observation,$statut,$fonction); 
$bi->ajouterBnefI();

if($loc==1){ 
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$req="SELECT Max(num_benef) FROM beneficiaire "; 
$lot=$_POST['lot'];
echo $lot;
$med=$_POST['med'];

$res=mysqli_query($cnx,$req);
while($ligne= mysqli_fetch_array($res)){
$bnef=$ligne[0];}
header("location:../View/production/formfacS.php?bnef=$bnef&med=$med&lot=$lot&v=$v&qt=$qt&labo=$labo&msg=1&pup=1");
}
else{header("location:../View/production/formajoutBnef.php?msg=1");}
}
else {
if($loc==1){
while($ligne1= mysqli_fetch_array($res2)){
$bs=$ligne1[0];}
header("location:../View/production/formfacS.php?bnef=$bs&med=$med&lot=$lot&v=$v&qt=$qt&labo=$labo&msg=2&pup=1");

} else{
header("location:../View/production/formajoutBnef.php?msg=2");}
}

} 




?>
</body>
</html>
