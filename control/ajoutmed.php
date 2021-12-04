<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
include("../Model/classMedicament.php");
$nom_med=$_POST["nom_med"];
$dosage=$_POST["dosage"];
$Forme=$_POST["Forme"];
$Presentation=$_POST["p"];
$primary_pkg=$_POST["pkg"];
$location=$_POST["location"];
$loc=$_POST["loc"];
$labo=$_POST["labo"];



$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$req1="SELECT * FROM medicaments WHERE nom_med='$nom_med' AND dosage='$dosage' AND Forme='$Forme' AND Presentation='$Presentation' AND primary_pkg='$primary_pkg' ";

$res1=mysqli_query($cnx,$req1);

$nbr= mysqli_num_rows($res1);
//echo($nbr);

if($nbr==0){
$m = new medicament(0,$nom_med,$dosage,$Forme,$Presentation,$primary_pkg);
$m->ajoutermed();

$req="SELECT Max(num_med) FROM medicaments "; 


$res=mysqli_query($cnx,$req);

while($ligne= mysqli_fetch_array($res)){
$med=$ligne[0];}

if($location==0 & $loc==0){
header("location:../View/production/formajoutmed.php?msg=1");}
else if ($location==1){
header("location:../View/production/formfacE.php?med=$med&labo=$labo&msg=1");
}
} else {
if($location==0 & $loc==0){
header("location:../View/production/formajoutmed.php?msg=2");}
else if ($location==1){
while($ligne1= mysqli_fetch_array($res1)){
$med=$ligne1[0];}
header("location:../View/production/formfacE.php?med=$med&labo=$labo&msg=2");
}
}
?>
</body>
</html>
