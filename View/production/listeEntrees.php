
<!DOCTYPE html>
<?php

session_start();
$l=$_SESSION['login'];
$nom=$_SESSION['nom'];
$prenom=$_SESSION['prenom'];
$image=$_SESSION['image'];
$p=  $_SESSION['privilege'];

 ?>
<html lang="en">
  <head>
     <!-- Meta, title, CSS, favicons, etc. -->
   
 <?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
<meta http-equiv="refresh" content="2;url=../production/listeEntrees.php" />
<?php } ?>
    <title> </title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'  integrity= 'sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ'  crossorigin='anonymous'>

    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">  


<style>




	.btnn {
  border: none;
  color: white;
  padding: 6px 22px;
  font-size: 11px;
  cursor: pointer;
}
.btnM{
 background-color:#23798E;
   border: none;
  color: white;
  padding: 5px 15px;
  font-size: 12px;
  cursor: pointer;
}


.btns {
  background-color:#23798E;
  border: none;
  color: white;
  padding: 6px 19px;
  font-size: 10px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btnn:hover {
  background-color: #1ABB9C ;
}
	.success {background-color:#1ABB9C ;} 
.success:hover {background-color:#1ABB9C;}

	.btnn1 {
  border: none;
  color: white;
  padding: 6px 22px;
  font-size: 11px;
  cursor: pointer;
 
}


.btnn1:hover {
  background-color: #ECECEC;
}
	.success1 {background-color:#ECECEC;} 
.success1:hover {background-color: #ECECEC;}
input[type]:hidden {
  background-color: #FFFFFF;	
}

html>body div.tableContainer table {
	/* width: 756px */
}
thead.fixedHeader tr {
	position: relative;
}

html>body tbody.scrollContent {
	display: block;
	height: 35px;
	overflow: auto;
	width: 100%
}



html>body thead.fixedHeader {
	display: table;
	overflow: auto;
	width: 100%}
</style>

	<script type='text/javascript'>
 
			function getXhr(){
                                var xhr = null; 
				if(window.XMLHttpRequest) // Firefox et autres
				   xhr = new XMLHttpRequest(); 
				else if(window.ActiveXObject){ // Internet Explorer 
				   try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch (e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
				}
				else { // XMLHttpRequest non supporté par le navigateur 
				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
				   xhr = false; 
				} 
                                return xhr;
			}
 
$(document).ready(function () {
var q=null;
$("#date").change(function(){
var id_entree=$('#date').val();
$.ajax({
type: "POST",
data: {"id_entree" : id_entree}, 
url: "ajax1.php",
success:function(data){
q=data;

$("#qe").val(q+" unités");

}

}); 
});
});
$(document).ready(function () {
var q=null;
$("#date").change(function(){
var id_entree=$('#date').val();
$.ajax({
type: "POST",
data: {"id_entree" : id_entree}, 
url: "ajax2.php",
success:function(data){
q=data;

$("#bl").val(q);

}

}); 
});
});


	
		</script>
 <script src="sweet\node_modules\sweetalert\dist\sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sweet\node_modules\sweetalert\dist\sweetalert.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
   

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
 <script src="sweet\node_modules\sweetalert\dist\sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sweet\node_modules\sweetalert\dist\sweetalert.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/> 
<script>
function submitForm(action){
var form= document.getElmentById('form1');
form.action= action;
form.submit();
}



</script>

		
			 <script src="sweet\node_modules\sweetalert\dist\sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sweet\node_modules\sweetalert\dist\sweetalert.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	

</script>
  </head>

 <body class="nav-md">
      <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
		    <div class="navbar nav_title" style="border: 0;">
           <a href="index.html" class="site_title">
	<img src="images\logo.png" width="55" height="46" ><span>Pierre Fabre</span></a>
            </div>

            <div class="clearfix"></div>
<br/>
<br/>
            <!-- menu profile quick info -->
             <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/<?php echo $image;?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
             <span>Bienvenue,</span>
                <h2><?php echo $prenom.' '.$nom; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            	   <div  id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div  class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fas fa-capsules" style='font-size:20px'></i> Medicaments <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="formlisteMed.php">Liste des Medicaments</a></li>
                      <li><a href="formajoutmed.php">Ajouter un Medicament</a></li>
                     
                    </ul>
                  </li>
				  
                  <li><a><i class="fas fa-user-lock" style='font-size:20px'></i> Beneficiaires <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                        <li><a href="formlisteBnef.php" >Liste des Beneficiaires</a></li>
                      <li><a href="formajoutbnef.php" >Ajouter un Beneficiaire</a></li>
                     
                    </ul>
                  </li>
				  
				    <li><a><i class="fas fa-diagnoses" style='font-size:20px'></i> laboratoires <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                        <li><a href="formlisteLabo.php">Liste des Laboratoires</a></li>
                      <li><a href="formajoutlabo.php">Ajouter un Laboratoire</a></li>
                     
                    </ul>
                  </li>
               
				 <li><a><i class="fa fa-medkit"></i> Gestion Echantillons <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
				
                     
                      <li><a href="formfacE.php">Ajouter une entrée sur un lot d'échantillon</a></li>
					  <li><a href="formfacS.php">Ajouter une sortie sur un lot d'échantillon</a></li>
					  <li><a href="formdetruit.php">Supprimer un Echantillon</a></li>
					   <li><a>Entrées/Sorties<span class="fa fa-chevron-down"></span></a>
				 <ul class="nav child_menu">
                           <li class="sub_menu"><a href="listeEntrees.php"> Liste des Entrées des échantillons </a>
                            </li>
                            <li><a href="listeSorties.php">Liste des Sorties des échantillons</a>
                            </li>
                      </ul>  
					   <li><a href="archive.php">Liste entrées/sorties des échantillons archivés</a>
			</ul>
                  </li>
                  <li><a><i class="fas fa-paste" style='font-size:20px'></i> Editer Les Etats <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    
                      <li><a href="ch.php">Etat du Stock de mediacment </a></li>
                      <li><a href="formMed.php">Etat des entrées pour un medicament</a></li>
					  <li><a href="formLot.php">Etat des sorties pour un medicament</a></li>
					  <li><a href="formBnef.php">Etat des sorties pour un beneficiaire</a></li>
					
					 
                    </ul>
                  </li>
				  <?php if($p=='Adminstrateur'){?>
				    <li><a><i class="fa fa-users" style='font-size:20px'></i> Utilisateurs <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    
                      <li><a href="formlistUtlistaeur.php">Liste des Comptes </a></li>
                      <li><a href="formajoutUtlisateur.php">Créer un Compte</a></li>
					 
                    </ul>
                  </li>
				  <?php } ?>
                </ul> 
              </div></div>

			    <!-- /menu footer buttons -->
            <div  class="sidebar-footer hidden-small" >
               <?php if($p=='Adminstrateur'){?>
              <a data-toggle="tooltip" data-placement="top" title="home" href="home.php">
                <span class="fa fa-home" style='font-size:21px' aria-hidden="true"></span>
              </a>
			   <?php } else { ?>
			     <a data-toggle="tooltip" data-placement="top" title="home" href="home1.php">
                <span class="fa fa-home" style='font-size:21px' aria-hidden="true"></span>
              </a>
			  <?php } ?>
              <a data-toggle="tooltip" data-placement="top" title="">
                <span class="	glyphicon glyphicon-align-justify" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="">
                <span class="	glyphicon glyphicon-align-justify" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="" href="">
                <span class="	glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->   

			   </div></div>

        <!-- top navigation -->

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				             		  
            <img src="images/<?php echo $image; ?>">   <?php echo $prenom.'  '.$nom; ?>
                      </a>
            </li></ul>     
		</nav>
		</div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        
		 <div class="right_col" role="main">
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
				     <div class="x_content"> 
					              
                    <form id="form1"  class="form-horizontal form-label-left"  method="get"  >
				   <h2 style=" text-align: center; text-transform: uppercase;  color:#23798E ;"> Suivi des entrées des échantillons</h2>
				 
				
			<br/>
			<br/>
			   <!-- test suivant !-->
		 <?php 
		
		  if (isset($_GET["num"])){
		    if (!isset($_GET["loc"])){
								  $n= $_GET['num'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rq="SELECT * FROM auxiliere WHERE num_med=$n";
								  $res=mysqli_query($cnx,$rq);
								   while($row= mysqli_fetch_array($res)){ 
								  ?>
								   <input type="hidden" value'' id='direction'/> 
								   <input type="hidden" value'' id='min'/> 
								   <input type='hidden' name='med' id='med' value='<?php echo $row[6]?>' />
					     <div class="form-group row">
        <label class="control-label  col-md-3 col-sm-3 col-xs-3 has-feedback" style='font-size:12px'>Nom du Médicament:</label>
		 <div class="col-md-4 col-sm-4 col-xs-1">
		    <input type="hidden" value'' id='direction'/> 
		  <input type='hidden' name='num' id='num' value='<?php echo $row[0]?>' />
         <input type="text" class="form-control has-feedback-left " name="nom" style='border-radius: 5px; background-color:#FFFFFF;'  readonly="readonly" value='<?php echo $row[1];?>'>
		 <span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>
		 </div>
		 	     <label class="control-label  col-md-1 col-sm-2 col-xs-1 " style='font-size:12px'>P.packaging:</label>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                          <input class="form-control " type="text" name="pkgm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $row[5];?>'>
                       </div>   
		 
        </div>
		 <div class="form-group row ">
                     
              <label class="control-label  col-md-3 col-sm-1 col-xs-1 " style='font-size:12px'>Dosage:</label>
                     <div class="col-md-2 col-sm-6 col-xs-12">
                          <input  class="form-control " type="text" name="dm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $row[2];?>'>
                       </div>
					   
					   
				

                     <div class="form-group row "> 
						  <label class="control-label  col-md-3 col-sm-3 col-xs-3" style='font-size:12px'>Présentation: </label>
						<div class="col-md-2 col-sm-4 col-xs-12">
                       <input type="text" id="pm" name="pm"  class="form-control" readonly="readonly" value='<?php echo $row[4];?>'  style='border-radius: 5px; background-color:#FFFFFF;'>
                        </div>
             
                      </div>		
				
		 
				    <div class="form-group row ">
					 <label  class="control-label  col-md-3 col-sm-1 col-xs-12 " style='font-size:12px'>Forme:</label>
                       <div class="col-md-3 col-sm-6 col-xs-12">
                          <input  class="form-control" type="text" name="fm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $row[3];?>'>
                        </div>			 
								
                     <div class=" col-md-offset-4">	  
				 <?php  if (isset($_GET["max"])){
								  $max= $_GET['max']; ?>
								  <input type="hidden" value'<?php echo $max;?>' id='max' name='max' > 
	<button type="submit" class="btnn1 success1" style='border-radius: 5px;' formaction='precedent.php' disabled="disabled"><i class="fas fa-angle-left"></i></button></a>	  
					
								  <?php } else {?>
					 
					<button type="submit" class="btnn success" style='border-radius: 5px;' formaction='precedent.php' ><i class="fas fa-angle-left"></i></button></a>
					<?php } ?>
  	
			
		
					 <?php if (isset($_GET["min"])){
								  $min= $_GET['min']; ?>
								  <input type="hidden" value'<?php echo $min;?>' id='min' name='min' > 
								
					   <button type="submit" class="btnn1 success1" style='border-radius: 5px;' formaction='suivant.php' disabled="disabled"><i class="fas fa-angle-right"></i></button>
								  <?php } else {?>
					 
					   <button type="submit" class="btnn success" style='border-radius: 5px;' formaction='suivant.php'><i class="fas fa-angle-right"></i></button>
					<?php } ?>
                      </div></div>
	
				


 
   
   <?php
   if (!isset($_GET["id"])){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$n=$row[6];
$resultat="DELETE  FROM auxiliere1 Where num_med!=$n";
$rt5=mysqli_query($cnx,$resultat);
$requet="SELECT * FROM echantillon WHERE num_med=$n";
$reslt=mysqli_query($cnx,$requet);
$nbr2= mysqli_num_rows($reslt);

if($nbr2!=0){			   
  while($p= mysqli_fetch_array($reslt)){
	$id=$p[0];
    $lot=$p[1];
    $date=$p[2];
    $med=$p[3];
    $qstock=$p[4];
 $t2="INSERT INTO auxiliere1 VALUES(null,'$lot','$date',$med,$qstock,$id,'')";
 $rqq=mysqli_query($cnx,$t2); 
	}
	$max2="SELECT num_echant FROM auxiliere1 WHERE num_echant in (SELECT MAX(num_echant) FROM auxiliere1)";
			$rslmax2=mysqli_query($cnx,$max2);
			 while($q2= mysqli_fetch_array($rslmax2)){ 
				$max2=$q2[0];}
$reqmax="UPDATE auxiliere1 SET min='max' WHERE num_echant=$max2";
				 $resx=mysqli_query($cnx,$reqmax);

$rqt7="SELECT * FROM auxiliere1 Where num_echant in(SELECT MIN(num_echant) FROM auxiliere1) ";
			    $res4=mysqli_query($cnx,$rqt7);
			    while($t= mysqli_fetch_array($res4)){ 
					$min=$t[0];
$y="UPDATE auxiliere1 SET min='min' WHERE num_echant=$min";
				 $titra=mysqli_query($cnx,$y);					
  ?> 
 
		   <div class="form-group row ">
                        <label  class="control-label  col-md-3 col-sm-3 col-xs-12 ">Lot :</label>
                       <div class="col-md-4 col-sm-6 col-xs-12">
					    <input type='hidden'  value='<?php echo $t[0];?>' name='id' />
			<input value='<?php echo($t[1].', '.$t[2]); ?>' type='text' class="form-control has-feedback-left" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly"/>
						 <span class="fas fa-clinic-medical form-control-feedback left" aria-hidden="true"></span>
                        </div>
   <div class="col-sm-2">      
                                  
					
<?php
$id=$t[5];
//validité	
$date=$t[2];

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
$n=round($nbJours);
if($n<0){
$rq="SELECT num_lab FROM laboratoire WHERE num_lab in(select num_labo from entree_stock where num_lot=$id)";
$res=mysqli_query($cnx,$rq);	
while($ligne= mysqli_fetch_array($res))
{ $labo1=$ligne[0];}
echo "
<i class='	fas fa-hourglass-start' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<i class='fas fa-hourglass-half' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<a href='../../control/archiver.php?labo=$labo1&lot=$id&loc=1' role='button'><i class='fas fa-hourglass-end' style='font-size:30px;color:red'></i></a>
</div></div>";
}
else if($n<=180){
echo "
<i class='	fas fa-hourglass-start' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<i class='fas fa-hourglass-half' style='font-size:30px;color:#F9C42C'></i>
<i class='fas fa-hourglass-end' style='font-size:30px;color:#CAD1D2' aria-hidden='true'></i> </div></div>"
;
}
else {
echo " <i class='	fas fa-hourglass-start' style='font-size:30px;color:#5EF12A'></i> 
<i class='fas fa-hourglass-half' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i> 
<i class='fas fa-hourglass-end' style='font-size:30px;color:#CAD1D2' aria-hidden='true'></i> </div></div> "; 
}
$rq="SELECT num_lab,nom_lab FROM laboratoire WHERE num_lab in (SELECT num_labo FROM entree_stock WHERE num_lot=$id)";
$res5=mysqli_query($cnx,$rq);	
$rqet="SELECT id_entree,Qentree,date_E,numBL FROM entree_stock WHERE num_lot=$id ";
$resulttt=mysqli_query($cnx,$rqet);	
 while($j= mysqli_fetch_array($res5)){  ?>
	<div class="form-group row ">
                       <label  class="control-label  col-md-3 col-sm-3 col-xs-12 " >Nom du Laboratoire: </label>
                       <div class=" col-md-4 col-sm-2 ">
					   <input value='<?php echo($j[1]); ?>' type='text' class="form-control has-feedback-left" style='border-radius: 5px; background-color:#FFFFFF'  readonly="readonly"/>
						 <span class="fas fa-diagnoses form-control-feedback left" aria-hidden="true"></span>
                        </div>			
				
				<?php } ?>
<?php $nbr4= mysqli_num_rows($resulttt);	
	if($nbr4 != 1){
	$somme2="SELECT SUM(Qentree) FROM entree_stock WHERE num_lot=$id";
	$sm2=mysqli_query($cnx,$somme2);	
	while($sum2= mysqli_fetch_array($sm2)){
	?> 
 
           <div class="col-sm-2">
<input value='<?php echo($sum2[0].' unités'); ?>' type='text' class="form-control has-feedback-left" style='border-radius: 5px; background-color:#FFFFFF;'  readonly="readonly"/>
						 <span class="fas fa-cart-plus  form-control-feedback left" aria-hidden="true"></span>
                        </div>
						
<?php  } } 
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						$req2="SELECT *  FROM auxiliere1  ";
                         $res2=mysqli_query($cnx,$req2);
                         $nbr2= mysqli_num_rows($res2);
						 if($nbr2!=1){ if (!isset($_GET["max"])){ ?>
						
         <button type='submit' class='btnn1 success1'  formaction='precedent1.php' style='border-radius: 5px;' disabled="disabled" ><i class='fas fa-angle-left'></i></button>
					   <button type='submit' class='btnn success' formaction='suivant1.php' style='border-radius: 5px;'><i class='fas fa-angle-right'></i></button>
					   </div>  


<?php } else   if (isset($_GET["max"])){
								  $max= $_GET['max']; ?>
								  <input type="hidden" value'<?php echo $max;?>' id='max' name='max' > 
	<button type="submit" class="btnn1 success1" style='border-radius: 5px;' formaction='precedent1.php' disabled="disabled"><i class="fas fa-angle-left"></i></button></a>	  
	   <button type='submit' class='btnn success' formaction='suivant1.php' style='border-radius: 5px;'><i class='fas fa-angle-right'></i></button>	
	   </div>			<?php }  else {
	   
	  echo "</div>";
	  
	  } }else { echo "</div>";}?>								
						
						<div class="form-group row ">		
						<label  class="control-label  col-md-3 col-sm-3 col-xs-12 " >Entrée Le :</label>
      <div class=" col-md-4 col-sm-2 ">
	<select class="form-control has-feedback-left"  name="date" id="date" style='border-radius: 5px;'   >
						  <option selected="selected" value="-1" ></option>
					<?php  while($s= mysqli_fetch_array($resulttt)){  ?>	
					<option value="<?php echo $s[0]; ?>"><?php echo $s[2]; ?></option>	
					<?php } ?>   
                        </select>
	<span class="far fa-calendar-alt form-control-feedback left" aria-hidden="true"></span>
                      </div></div> 
						
    <div class="form-group row ">
                        <label  class="control-label   col-md-3  " style='font-size:12px'>Quantité entrée :</label>
                       <div class=" col-sm-2 ">
					 
			<input value='' type='text' class="form-control" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly" id='qe'/>
						
                        </div>
						     <label  class="control-label   col-sm-1 " style='font-size:12px'>BLnuméro°:</label>
                       <div class=" col-sm-2 ">
					 
			<input value='' type='text' class="form-control" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly" id='bl'/>
						
                        </div>
    </div>
        
											
		<?php }}} }  ?>
	 <!-- test suivant !-->	
	 
	 
	<!-- page0 !-->	
 <?php } } else {
  if (!isset($_GET["loc"])){
  if (!isset($_GET["direction"])){
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
								  
         <div class="form-group row">
        <label class="control-label  col-md-3 col-sm-3 col-xs-3 has-feedback" >Nom du Médicament:</label>
		 <div class="col-md-4 col-sm-4 col-xs-1">
		    <input type="hidden" value'' id='direction'/> 
		  <input type='hidden' name='num' id='num' value='<?php echo $r[0]?>' />
         <input type="text" class="form-control has-feedback-left " name="nom" style='border-radius: 5px; background-color:#FFFFFF;'  readonly="readonly" value='<?php echo $r[1];?>'>
		 <span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>
		 </div>
		 	     <label class="control-label  col-md-1 col-sm-2 col-xs-1 " >P.packaging:</label>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                          <input class="form-control " type="text" name="pkgm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $r[5];?>'>
                       </div>   
		 
        </div>
		 <div class="form-group row ">
                     
              <label class="control-label  col-md-3 col-sm-1 col-xs-1 " >Dosage:</label>
                     <div class="col-md-2 col-sm-6 col-xs-12">
                          <input  class="form-control " type="text" name="dm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $r[2];?>'>
                       </div>
					   
					   
				

                     <div class="form-group row "> 
						  <label class="control-label  col-md-3 col-sm-3 col-xs-3" >Présentation: </label>
						<div class="col-md-2 col-sm-4 col-xs-12">
                       <input type="text" id="pm" name="pm"  class="form-control" readonly="readonly" value='<?php echo $r[4];?>'  style='border-radius: 5px; background-color:#FFFFFF;'>
                        </div>
             
                      </div>		
				
		 
				    <div class="form-group row ">
					 <label  class="control-label  col-md-3 col-sm-1 col-xs-12 " >Forme:</label>
                       <div class="col-md-3 col-sm-6 col-xs-12">
                          <input  class="form-control" type="text" name="fm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $r[3];?>'>
                        </div>
				 <div class=" col-md-offset-4">		
			 <button type='button' class='btnn1 success1'  style='border-radius: 5px;' disabled="disabled"><i class='fas fa-angle-left'></i></button>
					   <button type='submit' class='btnn success' formaction='suivant.php' style='border-radius: 5px;'><i class='fas fa-angle-right'></i></button>
                   </div>   
                  </div>  
				





<?php
if (!isset($_GET["id"])){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$id=$r[6];
$rz="DELETE  FROM auxiliere1 Where num_med!=$id";
 $res11=mysqli_query($cnx,$rz);
$requete2="SELECT * FROM echantillon WHERE num_med=$id";
$resltt2=mysqli_query($cnx,$requete2);			   
  while($row1= mysqli_fetch_array($resltt2)){
	$id=$row1[0];
    $lot=$row1[1];
    $date=$row1[2];
    $med=$row1[3];
    $qstock=$row1[4];
 $t="INSERT INTO auxiliere1 VALUES(null,'$lot','$date',$med,$qstock,$id,'')";
 $res10=mysqli_query($cnx,$t); 
	}
$max1="SELECT num_echant FROM auxiliere1 WHERE num_echant in (SELECT MAX(num_echant) FROM auxiliere1)";
			$rslmax1=mysqli_query($cnx,$max1);
			 while($q1= mysqli_fetch_array($rslmax1)){ 
				$max1=$q1[0];}
$requet7="UPDATE auxiliere1 SET min='max' WHERE num_echant=$max1";
				 $rest5=mysqli_query($cnx,$requet7);
 $rqt7="SELECT * FROM auxiliere1 Where num_echant in(SELECT MIN(num_echant) FROM auxiliere1) ";
			    $resl=mysqli_query($cnx,$rqt7);
			    while($r8= mysqli_fetch_array($resl)){ 
				$min=$r8[0];
	$f="UPDATE auxiliere1 SET min='min' WHERE num_echant=$min";
				 $touta=mysqli_query($cnx,$f);			
				
 ?> 
		 
		      <div class="form-group row ">
                        <label  class="control-label  col-md-3 col-sm-3 col-xs-12 " >Lot :</label>
                       <div class="col-md-4 col-sm-6 col-xs-12">
					    <input type='hidden'   value='<?php echo $r8[0];?>' name='id' />
			<input value='<?php echo($r8[1].' , '.$r8[2]); ?>' type='text' class="form-control has-feedback-left" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly"/>
						 <span class="fas fa-clinic-medical form-control-feedback left" aria-hidden="true"></span>
            </div>
		    <div class="col-sm-2">        
    
                              
					  
					
					

	
	<?php 
//validité	
$date=$r8[2];
$id=$r8[5];
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
$n=round($nbJours);
if($n<0){
$rq="SELECT num_lab FROM laboratoire WHERE num_lab in(select num_labo from entree_stock where num_lot=$id)";
$res=mysqli_query($cnx,$rq);	
while($ligne= mysqli_fetch_array($res))
{ $labo1=$ligne[0];}
echo "
<i class='	fas fa-hourglass-start' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<i class='fas fa-hourglass-half' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<a href='../../control/archiver.php?labo=$labo1&lot=$id&loc=1' role='button'><i class='fas fa-hourglass-end' style='font-size:30px;color:red'></i></a>
</div></div>";
}
else if($n<=180){
echo "
<i class='	fas fa-hourglass-start' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<i class='fas fa-hourglass-half' style='font-size:30px;color:#F9C42C'></i>
<i class='fas fa-hourglass-end' style='font-size:30px;color:#CAD1D2' aria-hidden='true'></i> </div></div>"
;
}
else {
echo " <i class='	fas fa-hourglass-start' style='font-size:30px;color:#5EF12A'></i> 
<i class='fas fa-hourglass-half' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i> 
<i class='fas fa-hourglass-end' style='font-size:30px;color:#CAD1D2' aria-hidden='true'></i> </div></div> "; 
}
	

$rq="SELECT num_lab,nom_lab FROM laboratoire WHERE num_lab in (SELECT num_labo FROM entree_stock WHERE num_lot=$id)";
$res5=mysqli_query($cnx,$rq);	
$rqet="SELECT id_entree,Qentree,date_E,numBL FROM entree_stock WHERE num_lot=$id ";
$resulttt=mysqli_query($cnx,$rqet);	
 while($j= mysqli_fetch_array($res5)){  ?>
 <div class="form-group row ">
                       <label  class="control-label  col-md-3 col-sm-3 col-xs-12 " >Nom du Laboratoire</label>
                       <div class=" col-md-4 col-sm-2 ">
					   <input value='<?php echo($j[1]); ?>' type='text' class="form-control has-feedback-left" style='border-radius: 5px;background-color:#FFFFFF;'  readonly="readonly"/>
						 <span class="fas fa-diagnoses form-control-feedback left" aria-hidden="true"></span>
                        </div>
						
						<?php $nbr2= mysqli_num_rows($resulttt);	
	if($nbr2 != 1){
	$somme="SELECT SUM(Qentree) FROM entree_stock WHERE num_lot=$id";
	$sm=mysqli_query($cnx,$somme);	
	while($sum= mysqli_fetch_array($sm)){
	?> 
 
  
           <div class="col-sm-2">
<input value='<?php echo($sum[0].' unités'); ?>' type='text' class="form-control has-feedback" style='border-radius: 5px;background-color:#FFFFFF; '  readonly="readonly"/>
						 <span class="fas fa-cart-plus  form-control-feedback right" aria-hidden="true"></span>
                        </div>
					    <?php
						$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						$reqttt="SELECT *  FROM auxiliere1  ";
                         $rest=mysqli_query($cnx,$reqttt);
                         $nbr= mysqli_num_rows($rest);
						 if($nbr!=1){ 
						?>
						 <button type='submit' class='btnn1 success1'  style='border-radius: 5px;' disabled="disabled"><i class='fas fa-angle-left'></i></button>
					   <button type='submit' class='btnn success' formaction='suivant1.php' style='border-radius: 5px;'><i class='fas fa-angle-right'></i></button>
					    
						<?php } ?>	
						
						<?php }} ?>
						
					</div>
				<div class="form-group row ">		
						<label  class="control-label  col-md-3 col-sm-3 col-xs-12 " >Entrée Le :</label>
      <div class=" col-md-4 col-sm-2 ">
	<select  class="form-control has-feedback-left"  name="date" id="date" style='border-radius: 5px;'   >
						<option value="-1"></option>	
					<?php } while($s= mysqli_fetch_array($resulttt)){  ?>	
					<option value="<?php echo $s[0]; ?>"><?php echo $s[2]; ?></option>	
					<?php } ?>   
                        </select>
<span class="far fa-calendar-alt form-control-feedback left" aria-hidden="true"></span>
                      </div></div> 
						
    <div class="form-group row ">
                        <label  class="control-label   col-md-3  " style='font-size:12px'>Quantité entrée :</label>
                       <div class=" col-sm-2 ">
					 
			<input value='' type='text' class="form-control" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly" id='qe'/>
						
                        </div>
						     <label  class="control-label   col-sm-1 " style='font-size:12px'>BLnuméro°:</label>
                       <div class=" col-sm-2 ">
					 
			<input value='' type='text' class="form-control" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly" id='bl'/>
						
                        </div>
    </div>
          <?php } }?>
		 <?php }} } }?>	
	<!-- page0 !-->	
	
	
		 
	<!--test suivant1 !-->	 		
	 <?php
if (isset($_GET["loc"])){	 
if (isset($_GET["id"])){

$id=$_GET["id"];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
if (isset($_GET["num"])){
$n= $_GET['num'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rqq="SELECT * FROM auxiliere WHERE id=$n";
								  $resttt=mysqli_query($cnx,$rqq);
								   while($h= mysqli_fetch_array($resttt)){ 
								  ?>
								   <input type="hidden" value'' id='loc'/> 
								   <input type="hidden" value'' id='min'/> 
								   <input type='hidden' name='med' id='med' value='<?php echo $h[6]?>' />
		    <div class="form-group row">
        <label class="control-label  col-md-3 col-sm-3 col-xs-3 has-feedback" style='font-size:12px'>Nom du Médicament:</label>
		 <div class="col-md-4 col-sm-4 col-xs-1">
		    <input type="hidden" value'' id='direction'/> 
		  <input type='hidden' name='num' id='num' value='<?php echo $h[0]?>' />
         <input type="text" class="form-control has-feedback-left " name="nom" style='border-radius: 5px; background-color:#FFFFFF;'  readonly="readonly" value='<?php echo $h[1];?>'>
		 <span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>
		 </div>
		 	     <label class="control-label  col-md-1 col-sm-2 col-xs-1 " style='font-size:12px'>P.packaging:</label>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                          <input class="form-control " type="text" name="pkgm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $h[5];?>'>
                       </div>   
		 
        </div>
		 <div class="form-group row ">
                     
              <label class="control-label  col-md-3 col-sm-1 col-xs-1 " style='font-size:12px'>Dosage:</label>
                     <div class="col-md-2 col-sm-6 col-xs-12">
                          <input  class="form-control " type="text" name="dm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $h[2];?>'>
                       </div>
					   
					   
				

                     <div class="form-group row "> 
						  <label class="control-label  col-md-3 col-sm-3 col-xs-3" style='font-size:12px'>Présentation: </label>
						<div class="col-md-2 col-sm-4 col-xs-12">
                       <input type="text" id="pm" name="pm"  class="form-control" readonly="readonly" value='<?php echo $h[4];?>'  style='border-radius: 5px; background-color:#FFFFFF;'>
                        </div>
             
                      </div>		
				
		 
				    <div class="form-group row ">
					 <label  class="control-label  col-md-3 col-sm-1 col-xs-12 " style='font-size:12px'>Forme:</label>
                       <div class="col-md-3 col-sm-6 col-xs-12">
                          <input  class="form-control" type="text" name="fm" readonly="readonly" style='border-radius: 5px; background-color:#FFFFFF;' value='<?php echo $h[3];?>'>
                        </div>			 
								
                     <div class=" col-md-offset-4">	  
					   
						 <?php    if(!isset($_GET['max'])){
						   
								   ?>
					   <button type="button" class="btnn1 success1" style='border-radius: 5px;'  disabled="disabled"  ><i class="fas fa-angle-left"></i></button>
					   <button type="submit" class="btnn1 success1" style='border-radius: 5px;' formaction='suivant.php'  disabled="disabled" ><i class="fas fa-angle-right"></i></button>
					   
					     <?php } else {
						           $test2="SELECT min FROM auxiliere WHERE id=$n";
								   $testr2=mysqli_query($cnx,$test2);
								   while($m2= mysqli_fetch_array($testr2)){$min=$m2[0];}
								   if($min =="min"){ ?>
						  <button type="button" class="btnn1 success1" style='border-radius: 5px;' disabled="disabled"><i class="fas fa-angle-left"></i></button>
						    <button type="submit" class="btnn success" style='border-radius: 5px;' formaction='suivant.php'   ><i class="fas fa-angle-right"></i></button>
			<?php } else if($min=="max") {?>	
			 <button type="submit" class="btnn success" style='border-radius: 5px;' formaction='precedent.php'><i class="fas fa-angle-left"></i></button>
			<button type="submit" class="btnn1 success1" style='border-radius: 5px;' formaction='suivant.php' disabled="disabled"   ><i class="fas fa-angle-right"></i></button>	 
							<?php } else {?>
			 <button type="submit" class="btnn success" style='border-radius: 5px;' formaction='precedent.php' ><i class="fas fa-angle-left"></i></button>
			<button type="submit" class="btnn success" style='border-radius: 5px;' formaction='suivant.php'><i class="fas fa-angle-right"></i></button>				
							<?php }} ?>
					                      </div>
					</div>
 
 
 
 
 <?php  } } $requete8="SELECT * FROM auxiliere1 WHERE num_echant=$id";
$resltt9=mysqli_query($cnx,$requete8);			   
  while($row9= mysqli_fetch_array($resltt9)){
	
 ?> 
 <input type="hidden" value'' id='direction'/> 
 <input type='hidden'  value='<?php echo $row9[0];?>' name='id' />
  
   <div class=" form-group row ">
                        <label  class="control-label  col-md-3 col-sm-3 col-xs-12 ">Lot :</label>
                       <div class="col-md-4 col-sm-6 col-xs-12">
					    <input type='hidden'  value='<?php echo $row9[0];?>' name='id' />
			<input value='<?php echo($row9[1].', '.$row9[2]); ?>' type='text' class="form-control has-feedback-left" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly"/>
						 <span class="fas fa-clinic-medical form-control-feedback left" aria-hidden="true"></span>
                        </div>
    
                 <div class="col-sm-2">      
						
 	
<?php
$id=$row9[5];
//validité	
$date=$row9[2];

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
$n=round($nbJours);
if($n<0){
$rq="SELECT num_lab FROM laboratoire WHERE num_lab in(select num_labo from entree_stock where num_lot=$id)";
$res=mysqli_query($cnx,$rq);	
while($ligne= mysqli_fetch_array($res))
{ $labo1=$ligne[0];}
echo "
<i class='	fas fa-hourglass-start' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<i class='fas fa-hourglass-half' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<a href='../../control/archiver.php?labo=$labo1&lot=$id&loc=1' role='button'><i class='fas fa-hourglass-end' style='font-size:30px;color:red'></i></a>
</div></div>";
}
else if($n<=180){
echo "
<i class='	fas fa-hourglass-start' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i>
<i class='fas fa-hourglass-half' style='font-size:30px;color:#F9C42C'></i>
<i class='fas fa-hourglass-end' style='font-size:30px;color:#CAD1D2' aria-hidden='true'></i> </div></div>"
;
}
else {
echo " <i class='	fas fa-hourglass-start' style='font-size:30px;color:#5EF12A'></i> 
<i class='fas fa-hourglass-half' style='font-size:30px;color:#CAD1D2'  aria-hidden='true'></i> 
<i class='fas fa-hourglass-end' style='font-size:30px;color:#CAD1D2' aria-hidden='true'></i> </div></div> "; 
}
$rq="SELECT num_lab,nom_lab FROM laboratoire WHERE num_lab in (SELECT num_labo FROM entree_stock WHERE num_lot=$id)";
$res5=mysqli_query($cnx,$rq);	
$rqet="SELECT id_entree,Qentree,date_E,numBL FROM entree_stock WHERE num_lot=$id ";
$resulttt=mysqli_query($cnx,$rqet);	
 while($j= mysqli_fetch_array($res5)){
 ?>
	<div class="form-group row ">
                       <label  class="control-label  col-md-3 col-sm-3 col-xs-12 " >Nom du Laboratoire</label>
                       <div class=" col-md-4 col-sm-2 ">
					   <input value='<?php echo($j[1]); ?>' type='text' class="form-control has-feedback-left" style='border-radius: 5px; background-color:#FFFFFF'  readonly="readonly"/>
						 <span class="fas fa-diagnoses form-control-feedback left" aria-hidden="true"></span>
                        </div>			
				
				<?php } ?>
			

<?php $nbr3= mysqli_num_rows($resulttt);	
	if($nbr3 != 1){
	$somme1="SELECT SUM(Qentree) FROM entree_stock WHERE num_lot=$id";
	$sm1=mysqli_query($cnx,$somme1);	
	while($sum1= mysqli_fetch_array($sm1)){
	?> 
 <div class=" col-sm-2 ">
<input value='<?php echo($sum1[0].' unités'); ?>' type='text' class="form-control has-feedback-left" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly"/>
						 <span class="fas fa-cart-plus  form-control-feedback left" aria-hidden="true"></span>
                        </div>	
						
	 <?php }} if (isset($_GET["max"])){
								  $max= $_GET['max']; ?>
								  <input type="hidden" value'<?php echo $max;?>' id='max' name='max' > 
	<button type="submit" class="btnn1 success1" style='border-radius: 5px;' formaction='precedent1.php' disabled="disabled"><i class="fas fa-angle-left"></i></button></a>	  
					
								  <?php } else {?>
					 
					<button type="submit" class="btnn success" style='border-radius: 5px;' formaction='precedent1.php' ><i class="fas fa-angle-left"></i></button></a>
					<?php } ?>   
		 
			 <?php  if (isset($_GET["min"])){
								  $min= $_GET['min']; ?>
								  <input type="hidden" value'<?php echo $min;?>' id='min' name='min' > 
								  
					   <button type="submit" class="btnn1 success1" style='border-radius: 5px;' formaction='suivant1.php' disabled="disabled"><i class="fas fa-angle-right"></i></button>
								  <?php } else {?>
					  
					   <button type="submit" class="btnn success" style='border-radius: 5px;' formaction='suivant1.php'><i class="fas fa-angle-right"></i></button>
					<?php } ?>			
						
</div>					
	
			</div>			
<div class="form-group row ">		
						<label  class="control-label  col-md-3 col-sm-3 col-xs-12 " >Entrée Le :</label>
      <div class=" col-md-4 col-sm-2 ">
	<select class="form-control has-feedback-left"  name="date" id="date" style='border-radius: 5px;'   >
						  <option selected="selected" value="-1" ></option>
					<?php } while($s= mysqli_fetch_array($resulttt)){  ?>	
					<option value="<?php echo $s[0]; ?>"><?php echo $s[2]; ?></option>	
					<?php } ?>   
                        </select>
	<span class="far fa-calendar-alt form-control-feedback left" aria-hidden="true"></span>
                      </div></div> 
						
    <div class="form-group row ">
                        <label  class="control-label   col-md-3  " style='font-size:12px'>Quantité entrée :</label>
                       <div class=" col-sm-2 ">
					 
			<input value='' type='text' class="form-control" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly" id='qe'/>
						
                        </div>
						     <label  class="control-label   col-sm-1 " style='font-size:12px'>BLnuméro°:</label>
                       <div class=" col-sm-2 ">
					 
			<input value='' type='text' class="form-control" style='border-radius: 5px;  background-color:#FFFFFF;'  readonly="readonly" id='bl'/>
						
                        </div>
    </div>						
						
										
 <?php }}  ?> 
<!--test suivant1 !-->	
</div></div></div></div>
	 </form>
</div></div></div></div></div></div>





 <footer>
<div>
</div>
</footer>				  
	
      </div>
    </div>

 	
	

  
   <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
 <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<?php ?>
<script>
$(window).on('load',function() {
<?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
					
					    swal("Suppression avec succés", {
						icon : "success",
						timer: 3000,
						buttons:false,
						
					});
					
					
				<?php } ?>	
				});
	</script>
</body>
</html>
