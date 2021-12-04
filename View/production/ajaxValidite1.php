
<?php


if(isset($_POST["num_echant"])){
	$num=$_POST["num_echant"]; 
	$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
		
	
	
	
	$rq = mysqli_query($conn,"SELECT date_peremp FROM echantillon WHERE num_echant =$num ");
	while($row = mysqli_fetch_array($rq)){
			$date=$row['date_peremp'];
		}	
		
$dat1 = DateTime::createFromFormat('Y-m-d', $date);
$date1= $dat1->format('d/m/Y');

$d = date("d m Y");
$dat = DateTime::createFromFormat('d m Y', $d);
$date2= $dat->format('d/m/Y');
//$date2 = "15/07/2010";
  
list($jour1, $mois1, $annee1) = explode('/', $date1);
list($jour2, $mois2, $annee2) = explode('/', $date2);
 
//Calcul des timestamp
$timestamp1 = mktime(0,0,0,$mois1,$jour1,$annee1);
$timestamp2 = mktime(0,0,0,$mois2,$jour2,$annee2);
$nbJours = ($timestamp1 - $timestamp2)/86400; 
$n=round($nbJours);//On utilise abs afin d'obtenir toujours une valeur positive, donc les dates peuvent être mises dans n'importe quel ordre.
echo $n;


//Affichage du nombre de jour : 27
}
?>	