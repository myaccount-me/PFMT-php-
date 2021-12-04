<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>

</head>

<body>
<?php
include("../Model/classEchantillon.php");
$lot=$_POST["num_lot"];
$datep=$_POST["datep"];
$med=$_POST["med"];
$location=$_POST["location"]; 
$loc=$_POST["loc"];
$labo=$_POST["labo"];


$dat1 = DateTime::createFromFormat('Y-m-d', $datep);
$date1= $dat1->format('d/m/Y');

$d = date("d m Y");
$dat = DateTime::createFromFormat('d m Y', $d);
$date2= $dat->format('d/m/Y');
//$date2 = "15/07/2010";
list($jour1, $mois1, $annee1) = explode('/', $date1);
list($jour2, $mois2, $annee2) = explode('/', $date2);
//Calcul des timestamp
$timestamp1 = mktime(0,0,0,$mois1,$jour1,$annee1);
$timestamp2 = mktime(0,0,0,$mois2,$jour2,$annee2);
$nbJours = ($timestamp1 - $timestamp2)/86400; 
$n=round($nbJours);
//echo $location;


$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$req2="SELECT * FROM echantillon WHERE num_lot='$lot' ";
$res2=mysqli_query($cnx,$req2);

$nbr2= mysqli_num_rows($res2);
//echo $nbr2;
$req="SELECT * FROM echantillon WHERE num_lot='$lot' AND date_peremp='$datep' AND num_med=$med ";


$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$res=mysqli_query($cnx,$req);

$nbr= mysqli_num_rows($res);
//echo($nbr);
 if (($nbr2!=0) || ($nbr!=0)){
header("location:../View/production/formajoutlot.php?msg=2&med=$med&labo=$labo") ;
}
else  if($n==0 || $n <0 || $n <360){
$e="erreur";
header("location:../View/production/formajoutlot.php?msg=3&med=$med&labo=$labo&num_lot=$lot&datep=$e") ;  
  
} else  if(($nbr==0) && ($nbr2==0)){
$L = new echantillon(0,$lot,$datep,$med,0);
$L->ajouterEchant();
$req="SELECT Max(num_echant) FROM echantillon "; 
$res=mysqli_query($cnx,$req);
while($ligne= mysqli_fetch_array($res)){
$lot=$ligne[0];
$date=$ligne[2];}
echo $labo;
header("location:../View/production/formfacE.php?lot=$lot&med=$med&labo=$labo&msg=1&change=1");
}




?>
</body>
</html>
