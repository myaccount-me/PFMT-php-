<?php
	
	if(isset($_POST["qualite_benef"])){
	$q=$_POST["qualite_benef"];
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
		$rs2 = mysqli_query($conn,"SELECT b.num_benef , b.nom_benef , b.prenom_benef FROM beneficiaire as b , bexterne as be WHERE b.num_benef=be.num_benef AND be.qualite_benef ='$q'");
     	echo "<select  class='form-control has-feedback-left' name='bnef' id='bnef' style='border-radius: 5px;' >";	
		echo "<option value='-1' selected='selected'></option>";
		while($l = mysqli_fetch_array($rs2)){
			echo "<option value='".$l[0]."'>".$l[2]." ".$l[1]."</option>";
		}
		echo "</select>
	 <span class='fas fa-user form-control-feedback left' aria-hidden='true'></span>";
		}
	
	
	
	
	
	
?>