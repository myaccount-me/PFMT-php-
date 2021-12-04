<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
include("../Model/classCompte.php");
$login=$_POST['login'];
$img=$_POST['file'];
$bnef=$_POST['bnef'];
$p=$_POST['p'];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$req1="SELECT * FROM compte WHERE login='$login' ";
$res1=mysqli_query($cnx,$req1);
$nbr= mysqli_num_rows($res1);

if($nbr!=0){
header("location:../View/production/formajoutUtlisateur.php?msg=2&login=$login&img=$img&bnef=$bnef&p=$p");}
else{

$m = new Compte(0,$login,$img,$p,$bnef);
$m->créerCompte();
header("location:../View/production/formajoutUtlisateur.php?msg=1");
}
//echo($nbr);
?>
</body>
</html>
