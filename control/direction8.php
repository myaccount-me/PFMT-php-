<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 
$med=$_POST["med"];
$lot=$_POST["lot"];
$labo=$_POST["labo"];
$qt=$_POST["qt"];
$v=$_POST["v"];
$labo1=$_POST["labo1"];
if($med!=-1  && $lot!=-1) {
header("location:../View/production/formdetruit.php?loc=1&med=$med&lot=$lot&labo=$labo&qt=$qt&v=$v&labo1=$labo1");
}
else {
$vide='vide';
header("location:../View/production/formfacS.php?loc=1&med=$vide&lot=$vide&msg=9");

 }
?>
</body>
</html>
