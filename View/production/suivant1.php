<?php
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$id=$_GET['id']+1;

//$rt="SELECT MAX(num_echant) FROM  auxiliere1";
//$res5=mysqli_query($cnx,$rt);
// while($row= mysqli_fetch_array($res5)){ 
// $num=$row[0];}
//if($id==$num){
//header("location:listeEntrees.php") ;}
//else{
//$rqt="SELECT * FROM auxiliere1 WHERE num_echant=$id";
//$res=mysqli_query($cnx,$rqt);
// $nbr= mysqli_num_rows($res);
// if($nbr !=0){
// while($row= mysqli_fetch_array($res)){ 
// $lot=$row[1];
// $date=$row[2];
// $qs=$row[3];
// $med=$row[4];
// $nm=$row[5];
//  $min=$row[6];
// }
//$r="DELETE FROM  auxiliere1 WHERE num_echant=$id";
//$res1=mysqli_query($cnx,$r);
//$rs="INSERT INTO auxiliere1 VALUES(null,'$lot','$date',$qs,$med,$nm,'$min')";
//$res2=mysqli_query($cnx,$rs);
//$requt="SELECT MIN(num_echant) FROM auxiliere1 ";
//$res3=mysqli_query($cnx,$requt);
// while($r= mysqli_fetch_array($res3)){ 
// $id=$r[0];}
// echo $id;
 $rqst="SELECT min,num_med FROM auxiliere1 where num_echant=$id";
 $res8=mysqli_query($cnx,$rqst);
 while($row= mysqli_fetch_array($res8)){ 
 $min=$row[0];
 $num=$row[1];}
 
 if($min !="max"){
header("location:listeEntrees.php?id=$id&num=$num&loc=1") ;
}
else{
header("location:listeEntrees.php?min=$min&id=$id&num=$num&loc=1") ;
}

//}
//else { header("location:listeEntrees.php") ;}
//}
?>
