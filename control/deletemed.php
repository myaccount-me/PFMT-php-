<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>

<?php

include("../Model/classMedicament.php");
$num_med=$_GET["num_med"];
//$num_med=$_REQUEST['num_med']; 
if (isset($_GET['action']) && $_GET['action'] == "delete") {
$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$delete="DELETE FROM entree_stock where num_lot in (SELECT num_echant FROM echantillon WHERE num_med=$num_med)";
echo $delete;
$res2= mysqli_query($conn ,$delete);
$del2="DELETE FROM sortie_stock where num_lot in (SELECT num_echant FROM echantillon WHERE num_med=$num_med)";
echo $del2;
$rs2= mysqli_query($conn ,$del2);
$reqt="DELETE FROM echantillon where num_med=$num_med";
$reslt = mysqli_query($conn ,$reqt);
$delete1="DELETE FROM backup_entree where num_lot in (SELECT num_echant FROM backup_echantillon WHERE num_med=$num_med)";
$res= mysqli_query($conn ,$delete1);
$del1="DELETE FROM backup_sortie where num_lot in (SELECT num_echant FROM backup_echantillon WHERE num_med=$num_med)";
$res1= mysqli_query($conn ,$del1);
$reqt1="DELETE FROM backup_echantillon where num_med=$num_med";
$res3= mysqli_query($conn ,$reqt1);

echo $reqt;
$m = new medicament($num_med,null,0,null,0,null);
$m->deletemed($num_med); 

header("location:../View/production/formlisteMed.php?msg=1");

}
?>
</body>
</html>
