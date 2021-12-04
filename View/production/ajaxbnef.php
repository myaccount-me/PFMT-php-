	<?php
	
	if(isset($_POST["fonction"])){
	$f=$_POST["fonction"];
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
		$rs1 = mysqli_query($conn,"SELECT b.num_benef , b.nom_benef , b.prenom_benef FROM beneficiaire as b , binterne as bi
			WHERE b.num_benef=bi.num_benef AND bi.fonction ='$f'");
     	echo "<select  class='form-control has-feedback-left' name='bnef' id='bnef' style='border-radius: 5px;' >";	
		echo "<option value='-1' selected='selected'></option>";
		while($ligne = mysqli_fetch_array($rs1)){
			echo "<option value='".$ligne[0]."'>".$ligne[2]." ".$ligne[1]."</option>";
		}
		echo "</select>
	 <span class='fas fa-user form-control-feedback left' aria-hidden='true'></span>";
	
		}
	
	
	
	
	
	
?>
