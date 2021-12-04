<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>

<?php
session_start(); 
echo "username".shell_exec("echo %username%");
$username=shell_exec ("echo %username%");
$login =  $username;  $login = substr($login,0,-2); echo $login;
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$req1="SELECT b.nom_benef , b.prenom_benef , c.image,c.privilége FROM beneficiaire as b , compte as c WHERE c.num_bnef=b.num_benef and  login='$login' ";

$res1=mysqli_query($cnx,$req1);
$nbr= mysqli_num_rows($res1);
if($nbr!=0){
while($ligne = mysqli_fetch_array($res1))
									{
										$nom= $ligne[0];
										$prenom=$ligne[1];
										$image=$ligne[2];
									    $privilege=$ligne[3];
										}
									
										  $_SESSION["login"]= $login;
									      $_SESSION["nom"]= $nom;
										  $_SESSION["prenom"]= $prenom;
										 $_SESSION['image']=$image;
										  $_SESSION['privilege']=$privilege;
										
	
	header("location:../view/production/login.php");} else {header("location:../view/production/notfound.php");}
									 
											
?>
</body>
</html>
