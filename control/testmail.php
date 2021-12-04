<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 
$labo=$_POST['labo'];
$lot=$_POST['lot'];
$med=$_POST["med"];

$qt=$_POST["qt"];
$v=$_POST["v"];  
if($med != -1 && $lot !=-1) {
header("location:mailtest.php?labo=$labo&lot=$lot&med=$med&qt=$qt&v=$v");
} 
else {
header("location:../View/production/formdetruit.php?msg=5");
}



?>
</body>
</html>
