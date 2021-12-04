<?php
$labo=$_GET['labo'];

$lot=$_GET['lot']; 
$loc=$_GET['loc'];




include("../Model/classEchantillon.php");
include("../Model/classFactureE.php");
include("../Model/classFactureS.php");
$rqt="SELECT * FROM echantillon WHERE num_echant=$lot "; 
$rq="SELECT * FROM entree_stock WHERE num_lot=$lot AND num_labo=$labo "; 
echo $rq;
$rq2="SELECT * FROM sortie_stock WHERE num_lot=$lot ";
echo($rq2);
$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
	
	
$res = mysqli_query($conn,$rqt);
while($ligne= mysqli_fetch_array($res)){

$num_lot=$ligne[1];
$datep=$ligne [2];
$num_med=$ligne[3];
$qstock=$ligne[4];
}



$rt="INSERT INTO backup_echantillon VALUES(null,'$num_lot','$datep',$num_med,$qstock)";
$res1 = mysqli_query($conn,$rt);


$r="SELECT Max(num_echant) FROM backup_echantillon";
$re = mysqli_query($conn,$r);
while($row= mysqli_fetch_array($re)){
$id_lot=$row[0];}
$rs = mysqli_query($conn,$rq);
while($l= mysqli_fetch_array($rs)){
$labo=$l[2];
$numBL=$l[5];
$dateE=$l[4];
$qentree=$l[3];
$rquet="INSERT INTO backup_entree VALUES(null,$id_lot,$labo,$qentree,'$dateE',$numBL)";
$res3 = mysqli_query($conn,$rquet);
echo($rquet);
}
$rs2= mysqli_query($conn,$rq2);
while($l2= mysqli_fetch_array($rs2)){


$bnef=$l2[2];
$numbl=$l2[5];
$dateS=$l2[4];
$qsortie=$l2[3];
$rquet2="INSERT INTO backup_sortie VALUES(null,$id_lot,$bnef,$qsortie,'$dateS',$numbl)";
$res4 = mysqli_query($conn,$rquet2);
echo($rquet2);
}


$E = new Entree(null,$lot,0,0,null,0);
$E->deleteEntree($lot); 

$S = new Sortie(null,$lot,0,0,null,0);
$S->deleteSortie($lot); 

$e = new echantillon($lot,null,null,0,0);
$e->deleteEchant($lot); 
if($loc==1){
header("location:../View/production/listeEntrees.php?msg=1");}



?>