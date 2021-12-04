<?php 
$d=$_POST['d'];
$date2=$_POST['date2'];
$med=$_POST['med'];
if($date2<$d || $d>$date2 || $d==$date2){
echo $date2; 
echo $d;
header("location:../View/production/formLot.php?msg=2&med=$med") ;
}
else { header("location:../View/production/test1.php?med=$med&d=$d&date2=$date2") ;
}
?>
