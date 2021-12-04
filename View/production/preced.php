<?php
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$id=$_GET['num']-1;
$rq="SELECT min FROM auxiliere WHERE num_med=$id";
$res8=mysqli_query($cnx,$rq);
 while($row= mysqli_fetch_array($res8)){ 
 $min=$row[0];} 
 if($min !="min"){
header("location:listeSorties.php?num=$id") ;
}
else{
header("location:listeSorties.php?max=$min&num=$id") ;
}
  ?>
