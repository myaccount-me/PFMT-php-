<?php
$labo=$_GET['labo'];
$lot=$_GET['lot'];
$med=$_GET["med"];

$qt=$_GET["qt"];
$v=$_GET["v"];

 $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$rq="Select * From echantillon where num_echant=$lot";
$rq1="SELECT * from medicaments where num_med in(SELECT num_med from echantillon where num_echant=$lot)";
$rq2="Select * From entree_stock where num_lot=$lot";
$rq3="Select * From laboratoire where nom_lab='$labo'";
$res=mysqli_query($cnx,$rq);
$res1=mysqli_query($cnx,$rq1);
$res2=mysqli_query($cnx,$rq2);
$res3=mysqli_query($cnx,$rq3);
while($ligne= mysqli_fetch_array($res3)){
$mail= $ligne[8];
 } 
while($r= mysqli_fetch_array($res)){
$num= $r[1];
$date=$r[2]; } 
while($row= mysqli_fetch_array($res1)){
$nom=$row[1];
$d=$row[2];
$f=$row[3];
$p=$row[4];
$pkg=$row[5]; } 
while($ro= mysqli_fetch_array($res2)){
$date1=$ro[4];
$bl=$ro[5];
$q=$ro[3].' unit�s';
 }
ini_set('SMTP','smtp.topnet.tn'); 
//$mail = '$mails'; // D�claration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui pr�sentent des bogues.
{
	$passage_ligne = "\r\n";
	
}
else
{
	$passage_ligne = "\n";
}

 

 
//=====Cr�ation de la boundary.

//==========
 
//=====D�finition du sujet.
$sujet = "Pierre Fbare m�dicament Tunisie PFMT";
//=========
 
//=====Cr�ation du header de l'e-mail.

//==========
 
$message="Bonjour $labo, 
Nous avons une r�clamation b�n�ficiaire a propos le lot : $passage_ligne 
Num�ro du Lot :$num  $passage_ligne 
Date de pr�meption : $date $passage_ligne 
M�dicament : $nom $f $d $p $pkg $passage_ligne 
Date d'entr�e: $date1 $passage_ligne 
BL num�ro� : $bl $passage_ligne 
Quantit� entr�e : $q $passage_ligne
Pouvez-vous nous contacter ?$passage_ligne 
Cordialmenet.";
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message);
header("location:../View/production/formdetruit.php?labo=$labo&lot=$lot&qt=$qt&v=$v&med=$med&msg=2");
//==========
?>

