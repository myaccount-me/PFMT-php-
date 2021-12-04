<?php 
$lot=$_POST["lot"];
$bnef=$_POST["bnef"];
$med=$_POST["med"];

$dateS=$_POST["dateS"];
$v=$_POST['v'];
echo $v;
$bls=$_POST["bls"];
$qt=$_POST["qt"];
$labo=$_POST['labo'];
$loc=$_POST["loc"];
$location=$_POST["location"];
if($med!=-1 || $lot != -1)
{
header("location:../View/production/formajoutBnef.php?loc=$loc&med=$med&lot=$lot&v=$v&labo=$labo&qt=$qt");} else 
{
$vide="vide";
header ("location:../View/production/formfacS.php?med=$vide&lot=$vide&bnef=$bnef&dateS=$dateS&bls=$bls&qs=$qs&qt=$qt&labo=$labo&v=$v");
}

?>