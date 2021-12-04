<?php
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$id=$_GET['num']+1;
echo $id;
//$rq="SELECT id FROM auxiliere Where num_med=$id ";
//$rslt=mysqli_query($cnx,$rq);
// while($a= mysqli_fetch_array($rslt)){ 
 //$ancien=$a[0];}

 //echo $id; 
 //echo $ancien;
//$rt="SELECT MAX(num_med) FROM  auxiliere";
//$res5=mysqli_query($cnx,$rt);
// while($row= mysqli_fetch_array($res5)){ 
 //$num=$row[0];}
//if($id==$num){
//header("") ;}
//else{
//$rqt="SELECT * FROM  auxiliere WHERE num_med=$id";
//$res=mysqli_query($cnx,$rqt);
// $nbr= mysqli_num_rows($res);
 //if($nbr !=0){
// while($row= mysqli_fetch_array($res)){ 
// $nom=$row[1];
 //$dosage=$row[2];
// $Forme=$row[3];
 //$presentation=$row[4];
// $pkg=$row[5];
 //$nm=$row[6];
// $min=$row[7];}
//$r="DELETE FROM  auxiliere WHERE num_med=$id";
//$res1=mysqli_query($cnx,$r);
//$rs="INSERT INTO auxiliere VALUES(null,'$nom','$dosage','$Forme','$presentation','$pkg',$nm,'$min')";
//$res2=mysqli_query($cnx,$rs);
//$requt="SELECT MIN(num_med) FROM auxiliere ";
//$res3=mysqli_query($cnx,$requt);
 //while($r= mysqli_fetch_array($res3)){ 
// $id1=$r[0];}
 //$prced="SELECT num_med FROM auxiliere WHERE id=$ancien";
// $rprcd=mysqli_query($cnx,$prced);
 //while($pred= mysqli_fetch_array($rprcd)){ 
// $pred1=$pred[0];}
 //echo $pred1;
 $rqst="SELECT min FROM auxiliere where num_med=$id";
 $res8=mysqli_query($cnx,$rqst);
 while($row= mysqli_fetch_array($res8)){ 
 $min=$row[0];}
 //echo $min;
if($min !="max"){
header("location:archive.php?num=$id") ;
}
else{
header("location:archive.php?num=$id&min=$min") ;
}
//}
//else { header("") ;
//}
//}
?>