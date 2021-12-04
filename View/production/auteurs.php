<html>
 <?php

session_start();
$l=$_SESSION['login'];
$nom=$_SESSION['nom'];
$prenom=$_SESSION['prenom'];
$image=$_SESSION['image'];
 ?>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Nouvelle page 1</title>
<script>
function submitForm(action){
var form= document.getElmentById('form');
form.action= action;
form.submit();
}



</script>


<style> 

.header-fixed {
    width: 100% 
}

.header-fixed > thead,
.header-fixed > tbody,
.header-fixed > thead > tr,
.header-fixed > tbody > tr,
.header-fixed > thead > tr > th,
.header-fixed > tbody > tr > td {
    display: block;
}

.header-fixed > tbody > tr:after,
.header-fixed > thead > tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

.header-fixed > tbody {
    overflow-y: auto;
    height: 80px;
}

.header-fixed > tbody > tr > td,
.header-fixed > thead > tr > th {
    width: 25%;
    float: left;
}</style>
</head>
 
<body>
<form id="form" >
 <?php 
 if (isset($_GET["num"])){
	$n= $_GET['num'];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
 $rq="SELECT * FROM auxiliere WHERE num_med=$n";
 $res=mysqli_query($cnx,$rq);
 while($row= mysqli_fetch_array($res)){ 
								  ?>
 <input type='text' name='num' id='num' value='<?php echo $row[0]?>' />
         <input type="text" name="nom"  value='<?php echo $row[1];?>'>
		 <?php  if (isset($_GET["max"])){
								  $max= $_GET['max']; ?>
								  <input type="hidden" value'<?php echo $max;?>' id='max' name='max' > 
							
		<button type="submit" formaction='precedent.php' disabled="disabled">precd</button>
					
								  <?php } else {?>
					 
					   <button type="submit" formaction='precedent.php'><i class="fas fa-angle-right">precd</button>
					<?php } ?>
  	
 <?php  if (isset($_GET["min"])){
								  $min= $_GET['min']; ?>
								  <input type="hidden" value'<?php echo $min;?>' id='min' name='min' > 
							
		
					   <button type="submit"  formaction='suivant.php' disabled="disabled">suivant</button>
								  <?php } else {?>
					 
					   <button type="submit" formaction='suivant.php'><i class="fas fa-angle-right">suivant</button>
					<?php } ?>

 <?php } } else {
 
  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
 $supp="DELETE  FROM auxiliere";
 $supp2="DELETE  FROM auxiliere1";
 $rsup=mysqli_query($cnx,$supp);
$rsup2=mysqli_query($cnx,$supp2);

		   $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rq1="SELECT * FROM medicaments WHERE num_med in (SELECT num_med FROM echantillon)";
								  $res4=mysqli_query($cnx,$rq1);
								   while($li= mysqli_fetch_array($res4)){
								   $num=$li[0];
								   $nom=$li[1];
								   $dosage=$li[2];
								   $Forme=$li[3];
								   $P=$li[4];
								   $pkg=$li[5];
								   $rqut="INSERT INTO auxiliere VALUES(null,'$nom','$dosage','$Forme','$P','$pkg',$num,'')";
								   $res8=mysqli_query($cnx,$rqut); 
								    }
				 	
			$max="SELECT num_med FROM auxiliere WHERE num_med in (SELECT MAX(num_med) FROM auxiliere)";
			$rslmax=mysqli_query($cnx,$max);
			 while($q= mysqli_fetch_array($rslmax)){ 
				$max=$q[0];}
				 $requete8="UPDATE auxiliere SET min='max' WHERE num_med=$max ";
				 $restl=mysqli_query($cnx,$requete8);			
			  $rqt="SELECT * FROM auxiliere Where num_med in(SELECT MIN(num_med) FROM auxiliere) ";
			    $res1=mysqli_query($cnx,$rqt);
			    while($r= mysqli_fetch_array($res1)){ 
				$min=$r[0];
				 $requete9="UPDATE auxiliere SET min='min' WHERE num_med=$min";
				 $rest=mysqli_query($cnx,$requete9);		
				  ?>
								  
     
		  <input type='text' name='num' id='num' value='<?php echo $r[0]?>' />
         <input type="text"  name="nom" value='<?php echo $r[1];?>'>	
		  <button type="button"  >preced</button>
	     <button type="submit"  formaction='suivant.php'>suivant</button>
		 <?php }} ?>
		 </form>	
</body>
 
</html>