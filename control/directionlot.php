<?php 
$med=$_POST["med"]; 
$labo=$_POST["labo"];
$location=$_POST["location"];
$lot=$_POST["lot"];
if($med != -1 && $labo !=-1){
$rq="DELETE FROM echantillon where num_echant not in (select num_lot from entree_stock) ";
$res = mysqli_query($cnx,$rq);
header("location:../View/production/formajoutlot.php?med=$med&location=$location&labo=$labo");}
else {
header("location:../View/production/formfacE.php?msg=10&med=$med&location=$location&labo=$labo");

}
?>