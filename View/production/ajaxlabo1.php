<?php
	
	if(isset($_POST["num_echant"])){
	$n=$_POST["num_echant"]; 
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
	
	
$rqt = mysqli_query($conn,"SELECT num_lab,nom_lab FROM laboratoire WHERE num_lab in ( SELECT num_labo FROM entree_stock WHERE num_lot=$n )");
$nbr= mysqli_num_rows($rqt);
		if($nbr!=0){
		while($row = mysqli_fetch_array($rqt)){
			$labo=$row[0];
		}
		
		echo"$labo";}
	
	}
?>