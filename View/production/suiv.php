<?php
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$id=$_GET['num']+1;
echo $id;
$rqst="SELECT min FROM auxiliere where num_med=$id";
 $res8=mysqli_query($cnx,$rqst);
 while($row= mysqli_fetch_array($res8)){ 
 $min=$row[0];}
 //echo $min;
if($min !="max"){
header("location:listeSorties.php?num=$id") ;
}
else{
header("location:listeSorties.php?num=$id&min=$min") ;
}

?>