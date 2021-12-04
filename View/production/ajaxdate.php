<?php
	
	if(isset($_POST["num_echant"])){
	$n=$_POST["num_echant"]; 
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
	
	
$rqt = mysqli_query($conn,"SELECT date_peremp FROM echantillon WHERE  num_echant=$n ");
$nbr= mysqli_num_rows($rqt);
		if($nbr!=0){
		while($row = mysqli_fetch_array($rqt)){
			$date=$row[0];
		}
		
		echo"$date";}
	
	}
?>