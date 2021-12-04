
		<?php
	echo "<select  class='form-control has-feedback-left' name='bnef' id='bnef' style='border-radius: 5px;' >";
	if(isset($_POST["num_benef"])){
	$bnef=$_POST['num_benef'];
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		//mysql_select_db("pierrefabre");
		$rs = mysqli_query($conn,"SELECT  id_sortie, dateS FROM sortie_stock  WHERE num_bnef =$bnef" );
			//echo $res;
			echo "<option value='-1' selected='selected'></option>";
		while($r = mysqli_fetch_array($rs)){
			echo "<option value='".$r[0]."'>".$r[1]."</option>";
		}
			echo "</select>
	<span class='fas fa-user-lock  form-control-feedback left' aria-hidden='true'></span>";
	}

?>