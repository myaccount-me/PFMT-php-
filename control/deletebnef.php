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

$num_bnef=$_GET["num_benef"];
echo $num_bnef;
$statut=$_GET["statut"];
echo $statut; 
//$num_med=$_REQUEST['num_med'];
if (isset($_GET['action']) && $_GET['action'] == "delete") {
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$rqt="DELETE FROM sortie_stock WHERE num_bnef=$num_bnef";
$res=mysqli_query($cnx,$rqt);
$rq="DELETE FROM backup_sortie WHERE num_bnef=$num_bnef";
$rs=mysqli_query($cnx,$rq);
if($statut=='Externe'){ 
$be = new BnefExterne($num_bnef,null,null,null,$statut,null,null);
$be->deletebnefE($num_bnef); 
$b= new bneficiare($num_bnef,null,null,null,$statut);
$b->deleteBnef($num_bnef);
}
else if($statut=='Interne'){
$bi = new BnefInterne($num_bnef,null,null,null,$statut,null);
$bi->deletebnefI($num_bnef); 
$b= new bneficiare($num_bnef,null,null,null,$statut);
$b->deleteBnef($num_bnef);
}
header("location:../View/production/formlisteBnef.php?msg=1");
}
?>
</body>
</html>
