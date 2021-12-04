<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 
$lot=$_POST["lot"];
$med=$_POST["med"];
$labo=$_POST["labo"]; 
$dateE=$_POST["dateE"];
$qE=$_POST["qE"];
echo $qE;
$bl_num=$_POST["bl_num"];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
if (($labo==-1) || ($med==-1) ) {

header("location:../View/production/formfacE.php?msg=4&med=$med&labo=$labo&lot=$lot&dateE=$dateE&qE=$qE&bl_num=$bl_num");
}
else if ($lot==-1){

header("location:../View/production/formfacE.php?msg=4&med=$med&labo=$labo&dateE=$dateE&qE=$qE&bl_num=$bl_num");
}
else if($dateE==''){
$vide="vide";
header("location:../View/production/formfacE.php?msg=4&med=$med&labo=$labo&lot=$lot&dateE=$vide&qE=$qE&bl_num=$bl_num");
} 
else if($qE==''){
$vide="vide";
header("location:../View/production/formfacE.php?med=$med&labo=$labo&lot=$lot&dateE=$dateE&qE=$vide&bl_num=$bl_num");
}
else if($bl_num==''){
$vide="vide";
header("location:../View/production/formfacE.php?med=$med&labo=$labo&lot=$lot&dateE=$dateE&qE=$qE&bl_num=$vide");
}
else {
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$req2="SELECT * FROM entree_stock WHERE numBL=$bl_num ";
$res2=mysqli_query($cnx,$req2);
$nbr2= mysqli_num_rows($res2);
$dat1 = DateTime::createFromFormat('Y-m-d', $dateE);
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
if($nbr2!=0){
$e="erreur";
header("location:../View/production/formfacE.php?msg=2&med=$med&labo=$labo&lot=$lot&dateE=$dateE&qE=$qE&bl_num=$e");}
else  if($n<0){
$e="erreur";
header("location:../View/production/formfacE.php?med=$med&labo=$labo&lot=$lot&dateE=$e&qE=$qE&bl_num=$bl_num");
}
else if(!isset($_GET['confirm'])){
header("location:../View/production/formfacE.php?med=$med&labo=$labo&lot=$lot&dateE=$dateE&qE=$qE&bl_num=$bl_num&msg=6");
}
else if(isset($_GET['confirm']) && $_GET['confirm']==1){
include("../Model/classFactureE.php");
include("../Model/classEchantillon.php"); 
$E = new  Entree (0,$lot,$labo,$qE,$dateE,$bl_num);
$E->ajoutEntree();
$l= new echantillon(0,$lot,null,$med,0);
$l->updateQs1($lot,$qE);
$rq="DELETE FROM echantillon where num_echant not in (select num_lot from entree_stock) ";
$res = mysqli_query($cnx,$rq);
header("location:../View/production/formfacE.php?msg=1");
}
}

?>
</body>
</html>
