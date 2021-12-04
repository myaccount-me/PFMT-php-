<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
include("../Model/classMedicament.php");
$num_med=$_POST["num_med"];
$nom_med=$_POST["nom_med"];
$dosage=$_POST["dosage"];
$Forme=$_POST["Forme"];
$Presentation=$_POST["p"];
$pkg=$_POST["pkg"];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$req1="SELECT * FROM medicaments WHERE nom_med='$nom_med' AND dosage='$dosage' AND Forme='$Forme' AND Presentation='$Presentation' AND primary_pkg='$pkg' and num_med!=$num_med ";

$res1=mysqli_query($cnx,$req1);

$nbr= mysqli_num_rows($res1);
//echo($nbr);

if($nbr==0){
$m = new medicament($num_med,$nom_med,$dosage,$Forme,$Presentation,$pkg);
$m->modifiermed($num_med); 
header("location:../View/production/formlisteMed.php?msg=3");} 
else{
header("location:../View/production/formupdatemed.php?msg=2&num_med=$num_med");
}
?>

</body>
</html>
