<?php 
$lot=$_POST['lot'];
echo $lot;
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$rq="select * from echantillon where  num_echant  in (select num_lot from entree_stock where num_lot=$lot )";
$res2=mysqli_query($cnx,$rq);
$nbr2= mysqli_num_rows($res2);
if($nbr2 !=0) {
header("location:../View/production/formfacE.php");

} else {
include("../Model/classEchantillon.php");
$e = new echantillon($lot,null,null,0,0);
$e->deleteEchant($lot); 
header("location:../View/production/formfacE.php");
}
?>