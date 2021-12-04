	<?php
	echo "<select  class='form-control has-feedback-left' name='lot' id='lot'  readonly>";
	if(isset($_POST["num_med"])){
	
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
		$rs = mysqli_query($conn,"SELECT  DISTINCT e.num_echant ,e.num_lot FROM backup_echantillon as e WHERE e.num_med=".$_POST["num_med"]."" );
			//echo $res;
			echo "<option value='-1' selected='selected'></option>";
		while($r = mysqli_fetch_array($rs)){
			echo "<option value='".$r[0]."'>".$r[1]."</option>";
		}
	}
	echo "</select>
	<span class='fas fa-clinic-medical form-control-feedback left' aria-hidden='true'></span>";
?>