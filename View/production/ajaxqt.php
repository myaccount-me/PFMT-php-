<?php
	
	if(isset($_POST["num_echant"])){
	$num=$_POST["num_echant"]; 
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		
	$rq = mysqli_query($conn,"SELECT Qstock FROM echantillon WHERE num_echant =$num ");
			
			
		
	
	while($row = mysqli_fetch_array($rq)){
			$qt=$row[0];
		}	
		
	echo $qt; 

	
		
		
	}
	
?>