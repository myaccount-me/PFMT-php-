<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php

$nom=$_POST["lab"];
$mail=$_POST["mail"];
$pays=$_POST["pays"];
$ville=$_POST["ville"];
$cp=$_POST["cp"];
$adresse=$_POST["adresse"];
$tel=$_POST["tel"];
$location=$_POST["location"];
$contact=$_POST["contact"];
$qualite=$_POST["qualitelabo"];

$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");


//echo($nbr);
$req2="SELECT * FROM laboratoire WHERE mail='$mail'";
$res2=mysqli_query($cnx,$req2);
$nbr2= mysqli_num_rows($res2);

$req3="SELECT * FROM laboratoire WHERE  TelBureau= $tel";
$res3=mysqli_query($cnx,$req3);
$nbr3= mysqli_num_rows($res3);

$req4="SELECT * FROM laboratoire WHERE nom_lab='$nom'";
$res4=mysqli_query($cnx,$req4);
$nbr4= mysqli_num_rows($res4);
if($nbr2!=0 && $nbr3!=0 && $nbr4!=0){
$e="erreur";
header("location:../View/production/formajoutlabo.php?msg=2&lab=$e&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&location=$location");
} else 
if($nbr2!=0 && $nbr3!=0){
$e="erreur";
header("location:../View/production/formajoutlabo.php?msg=2&lab=$nom&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&location=$location");
} else
if ($nbr3!=0 && $nbr4!=0){
$e="erreur";
header("location:../View/production/formajoutlabo.php?msg=2&lab=$e&mail=$mail&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&location=$location");}
else
if($nbr2!=0 && $nbr4!=0){
$e="erreur";
header("location:../View/production/formajoutlabo.php?msg=2&lab=$nom&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&location=$location");}
else
if($nbr4!=0){
$e="erreur";
header("location:../View/production/formajoutlabo.php?msg=2&lab=$e&mail=$mail&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$tel&contact=$contact&qualite=$qualite&location=$location");
}
 else if($nbr2!=0){
$e="erreur";
header("location:../View/production/formajoutlabo.php?msg=2&lab=$nom&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$tel&contact=$contact&qualite=$qualite&location=$location");}
 else if($nbr3!=0){$e="erreur";
header("location:../View/production/formajoutlabo.php?msg=2&lab=$nom&mail=$mail&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&location=$location");}

else {
include("../Model/classlaboratoire.php");
$lb = new laboratoire(0,$nom,$adresse,$cp,$pays,$ville,$contact,$qualite,$mail,$tel);
$lb->ajouterlabo();
if ($location==1){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$req="SELECT Max(num_lab) FROM laboratoire "; 
$res=mysqli_query($cnx,$req);
while($ligne= mysqli_fetch_array($res)){
$lab=$ligne[0];}
header("location:../View/production/formfacE.php?labo=$lab&msg=1");
} 
else {header("location:../View/production/formajoutlabo.php?msg=1");}}


?>
</body>
</html>