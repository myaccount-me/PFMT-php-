<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php 
class connection {

function __connection(){
}


function cnx(){

 $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
 if(mysqli_connect_errno()){
 echo "failed to connect to mysql;".
 mysqli_connect_error(); 
    } 
else { 
	return $cnx; 
}

} 

}
?> 	
</body>
</html>
