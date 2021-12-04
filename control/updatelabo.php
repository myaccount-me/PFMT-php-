<?php
include("../Model/classlaboratoire.php");
$num_lab=$_POST["num"];
$nom=$_POST["lab"];
$mail=$_POST["mail"];
$pays=$_POST["pays"];
$ville=$_POST["ville"];
$cp=$_POST["cp"];
$adresse=$_POST["adresse"];
$contact=$_POST["contact"];
$tel=$_POST["tel"];
$qualite=$_POST["qualitelabo"];


$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

//echo($nbr);
$req2="SELECT * FROM laboratoire WHERE mail='$mail' and num_lab!=$num_lab";
$res2=mysqli_query($cnx,$req2);
$nbr2= mysqli_num_rows($res2);

$req3="SELECT * FROM laboratoire WHERE  TelBureau= $tel and num_lab!=$num_lab";
$res3=mysqli_query($cnx,$req3);
$nbr3= mysqli_num_rows($res3);

$req4="SELECT * FROM laboratoire WHERE nom_lab='$nom' and num_lab!=$num_lab";
$res4=mysqli_query($cnx,$req4);
$nbr4= mysqli_num_rows($res4);
if($nbr2!=0 && $nbr3!=0 && $nbr4!=0){
$e="erreur";
header("location:../View/production/formupdatelabo.php?msg=2&lab=$e&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&num=$num_lab");
} else 
if($nbr2!=0 && $nbr3!=0){
$e="erreur";
header("location:../View/production/formupdatelabo.php?msg=2&lab=$nom&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&num=$num_lab");
} else
if ($nbr3!=0 && $nbr4!=0){
$e="erreur";
header("location:../View/production/formupdatelabo.php?msg=2&lab=$e&mail=$mail&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&num=$num_lab");}
else
if($nbr2!=0 && $nbr4!=0){
$e="erreur";
header("location:../View/production/formupdatelabo.php?msg=2&lab=$nom&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&num=$num_lab");}
else
if($nbr4!=0){
$e="erreur";
header("location:../View/production/formupdatelabo.php?msg=2&lab=$e&num=$num_lab&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$tel&contact=$contact&qualite=$qualite");
}
 else if($nbr2!=0){
$e="erreur";
header("location:../View/production/formupdatelabo.php?msg=2&lab=$nom&mail=$e&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$tel&contact=$contact&qualite=$qualite&num=$num_lab");}
 else if($nbr3!=0){$e="erreur";
header("location:../View/production/formupdatelabo.php?msg=2&lab=$nom&mail=$mail&ville=$ville&pays=$pays&cp=$cp&adresse=$adresse&tel=$e&contact=$contact&qualite=$qualite&num=$num_lab");}

else {
echo $num_lab;
$l = new laboratoire($num_lab, $nom,$adresse,$cp,$pays,$ville,$contact,$qualite,$mail,$tel);
$l->modifierlabo($num_lab);
header("location:../View/production/formlistelabo.php?msg=3");
}


?>
