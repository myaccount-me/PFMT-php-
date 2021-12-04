<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 
$lot=$_POST["lot"];
$bnef=$_POST["bnef"];
$med=$_POST["med"];

$dateS=$_POST["dateS"];
$qt=$_POST['qt'];
$labo=$_POST["labo"];
$qt=$_POST["qt"];
$v=$_POST["v"];
$bls=$_POST["bls"];
$qs=$_POST["qs"];
echo $labo;
echo $v;
$loc=$_POST["loc"];
$location=$_POST["location"];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$rq="Select count(*) from sortie_stock where num_lot=$lot and num_bnef=$bnef";
$res=mysqli_query($cnx,$rq);
while($l= mysqli_fetch_array($res)){ 
$num=$l[0];
}

$req2="SELECT * FROM sortie_stock WHERE numBL_sortie=$bls";

$res2=mysqli_query($cnx,$req2);

$nbr2= mysqli_num_rows($res2);
if($med==-1 ){
$vide='vide';

header ("location:../View/production/formfacS.php?med=$vide&lot=$lot&bnef=$bnef&dateS=$dateS&bls=$bls&qs=$qs&qt=$qt&labo=$labo&v=$v");
}
else if($lot ==-1)
{
$vide='vide';

header ("location:../View/production/formfacS.php?med=$med&lot=$vide&bnef=$bnef&dateS=$dateS&bls=$bls&qs=$qs&qt=$qt&labo=$labo&v=$v");
}
else if( $bnef ==-1)
{
$vide='vide';

header ("location:../View/production/formfacS.php?med=$med&lot=$lot&bnef=$vide&dateS=$dateS&bls=$bls&qs=$qs&qt=$qt&labo=$labo&v=$v");
}
else if ($qs==''){
$vide="vide";
header ("location:../View/production/formfacS.php?med=$med&lot=$lot&bnef=$bnef&dateS=$dateS&bls=$bls&qs=$vide&qt=$qt&labo=$labo&v=$v&pup=1");

}

else if ($dateS==''){
$vide="vide";
header ("location:../View/production/formfacS.php?msg=9&med=$med&lot=$lot&bnef=$bnef&dateS=$vide&bls=$bls&qs=$qs&qt=$qt&labo=$labo&v=$v&pup=1");

}
else if ($bls==''){
$vide="vide";
header ("location:../View/production/formfacS.php?med=$med&lot=$lot&bnef=$bnef&dateS=$dateS&bls=$vide&qs=$qs&qt=$qt&labo=$labo&v=$v&pup=1");

}

else if(($v<0 || $qt==0) ||($v<0 && $qt==0) ){
$e="erreur";
header ("location:../View/production/formfacS.php?msg=6&med=$med&lot=$e&bnef=$bnef&dateS=$dateS&bls=$bls&qs=$qs&pup=1");
}
else if($num>=4){
$e="erreur";
header ("location:../View/production/formfacS.php?msg=7&med=$med&lot=$lot&labo=$labo&bnef=$e&dateS=$dateS&qt=$qt&v=$v&bls=$bls&qs=$qs");
}
else if($qs>$qt){
$e="erreur";
header("location:../View/production/formfacS.php?msg=4&med=$med&lot=$lot&labo=$labo&bnef=$bnef&dateS=$dateS&qt=$qt&v=$v&bls=$bls&qs=$e&pup=1");}
else if ($nbr2!=0){
$e="erreur";
header("location:../View/production/formfacS.php?msg=2&med=$med&lot=$lot&labo=$labo&bnef=$bnef&dateS=$dateS&qt=$qt&v=$v&bls=$e&qs=$qs&pup=1");
}else if ($nbr2 ==0) {
$dat1 = DateTime::createFromFormat('Y-m-d', $dateS);
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
if($n<0){
$e="erreur";
header("location:../View/production/formfacS.php?med=$med&lot=$lot&labo=$labo&bnef=$bnef&dateS=$e&qt=$qt&v=$v&bls=$bls&qs=$qs&pup=1");
}
else if(!isset($_GET['confirm'])){
header("location:../View/production/formfacS.php?med=$med&lot=$lot&labo=$labo&bnef=$bnef&dateS=$dateS&qt=$qt&v=$v&bls=$bls&qs=$qs&msg=10");
}
else  if($_GET['confirm']==1)
{
include("../Model/classFactureS.php");
include("../Model/classEchantillon.php");
$E = new  sortie (0,$lot,$bnef,$qs,$dateS,$bls);
$E->ajoutSortie();

$l= new echantillon(0,$lot,null,$med,0);
$l->updateQs2($lot,$qs);
header("location:../View/production/formfacS.php?msg=1");}

}

?>
</body>
</html>
