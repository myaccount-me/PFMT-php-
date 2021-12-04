<?php
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$id=$_GET['id']-1;
$rq="SELECT min,num_med FROM auxiliere1 WHERE num_echant=$id";
$res8=mysqli_query($cnx,$rq);
 while($row= mysqli_fetch_array($res8)){ 
 $min=$row[0];
 $num=$row[1];} 
 if($min !="min"){
header("location:listeSorties.php?id=$id&num=$num&loc=1") ;
}
else{
header("location:listeSorties.php?max=$min&id=$id&num=$num&loc=1") ;
}
  ?>

