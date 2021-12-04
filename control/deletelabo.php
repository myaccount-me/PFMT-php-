<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php

include("../Model/classlaboratoire.php");
$num_lab=$_GET["num_lab"];
 
if (isset($_GET['action']) && $_GET['action'] == "delete") {
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$d="DELETE FROM sortie_stock WHERE num_lot in (SELECT num_lot FROM entree_stock WHERE num_labo=$num_lab) ";
$res=mysqli_query($cnx,$d);
echo $d;
$del="DELETE FROM entree_stock WHERE num_labo=$num_lab";
$res1=mysqli_query($cnx,$del);
echo $del;
$rqt5="DELETE FROM echantillon WHERE num_echant not in(SELECT num_lot FROM sortie_stock )";
$res5=mysqli_query($cnx,$rqt5);
$rqt4="DELETE FROM echantillon WHERE num_echant not in(SELECT num_lot FROM entree_stock )";
$res4=mysqli_query($cnx,$rqt4);
echo $rqt4;


$d1="DELETE FROM backup_sortie WHERE num_lot in (SELECT num_lot FROM backup_entree WHERE num_labo=$num_lab) ";
$res1=mysqli_query($cnx,$d1);
echo $d1;
$de="DELETE FROM backup_entree WHERE num_labo=$num_lab";
$r=mysqli_query($cnx,$de);
echo $de;
$rqt6="DELETE FROM backup_echantillon WHERE num_echant not in(SELECT num_lot FROM backup_sortie )";
$res6=mysqli_query($cnx,$rqt6);
$rqt7="DELETE FROM echantillon WHERE num_echant not in(SELECT num_lot FROM backup_entree )";
$res7=mysqli_query($cnx,$rqt7);
echo $rqt7;
$l= new laboratoire(0,null,null,0,null,null,null,null,null,0);
$l->deletelabo($num_lab); 
header("location:../View/production/formlistelabo.php?msg=1");
} 
?>
</body>
</html>
