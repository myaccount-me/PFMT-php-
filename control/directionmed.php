<?php 
$med=$_POST["med"]; 
$labo=$_POST["labo"];
$location=$_POST["location"];
if($labo==-1){
$vide="vide";
header("location:../View/production/formfacE.php?location=$location&labo=$labo&med=$med&msg=5");}

 else{
header("location:../View/production/formajoutmed.php?location=$location&labo=$labo");
}



?>
