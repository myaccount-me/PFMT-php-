<?php
	
	if(isset($_POST["id_entree"])){
	$num=$_POST["id_entree"]; 
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		
	$rq = mysqli_query($conn,"SELECT numBL FROM entree_stock WHERE id_entree =$num ");
			
			
		
	
	while($row = mysqli_fetch_array($rq)){
			$qt=$row[0];
		}	
		
	echo $qt; 

	
		
		
	}
	
?>
