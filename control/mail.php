<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
ini_set('SMTP','smtp.orange.tn'); 
$mail = 'chaima.salaani18@gmail.com'; // D�claration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui pr�sentent des bogues.
{
	$passage_ligne = "\r\n";
	
}
else
{
	$passage_ligne = "\n";
}

 

 
//=====Cr�ation de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
//==========
 
//=====D�finition du sujet.
$sujet = "Hey mon ami !";
//=========
 
//=====Cr�ation du header de l'e-mail.

//==========
 
$message="hhhhhhhhhh";
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message);
 
//==========
?>
</body>
</html>
