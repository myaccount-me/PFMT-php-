<?php
	
	if(isset($_POST["num_echant"])){
	$n=$_POST["num_echant"]; 
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
	
	
$rqt = mysqli_query($conn,"SELECT * FROM medicaments WHERE num_med in ( SELECT e.num_med FROM backup_entree as b , echantillon as e WHERE b.num_lot=$n and e.num_echnat=n.num_lot )");
$nbr= mysqli_num_rows($rqt);
		if($nbr!=0){
		while($row = mysqli_fetch_array($rqt)){
			$n=$row[1];
			$f=$row[3];
			$d=$row[2];
			$p=$row[4];
			$pk=$row[5];
			
		}
		$m=$n.' '.$f.''.$d.''.$p;
		echo $m;}
	
	}
?>