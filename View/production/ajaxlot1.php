	<?php
	
	if(isset($_POST["num_med"])){
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
		$rs = mysqli_query($conn,"SELECT * FROM echantillon
			WHERE num_med=".$_POST["num_med"]." ORDER BY date_peremp");
			$nbr= mysqli_num_rows($rs);

			//echo $res;
		if($nbr==0){
	
			
		}
			else{
		echo "<select  class='form-control has-feedback-left' name='lot' id='lot' style='border-radius: 5px;' >";	
		echo "<option  selected='selected' value='-1'></option>";
		while($r = mysqli_fetch_array($rs)){
			echo "<option value='".$r[0]."'>".$r[1]." , ".$r[2]."</option>";
		}
		echo "</select>
	<span class='fas fa-clinic-medical form-control-feedback left' aria-hidden='true'></span>";
		}
	}
	
	
	
	
	
?>