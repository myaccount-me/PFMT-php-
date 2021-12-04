<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
ob_start();
session_start();
$l=$_SESSION['login'];
$nom=$_SESSION['nom'];
$prenom=$_SESSION['prenom'];
$image=$_SESSION['image'];
$p=  $_SESSION['privilege'];
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Document sans titre</title>

  <meta  charset="UTF-8" http-equiv="refresh" content="x,y">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'  integrity= 'sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ'  crossorigin='anonymous'>

    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	  <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

		 <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
 
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="../vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<style>

input[type=radio]{
    display: none;
}
/* Affichage par défaut du bouton radio personnalisé */
input[type=radio] + label:before {
    background: #fff;
    border: 4.6px solid #C9CCD2;
    border-radius: 50%;
    margin-top: px;
    margin-right: px;
    display: inline-block;
    vertical-align: middle;
    content: '';
    width: 24px;
    height: 24px;
}
/* Affichage du bouton radio personnalisé quand il est sélectionné */
input[type=radio]:checked + label:before {
    background: #0FBF8F;
    border-color: #0FBF8F;
    box-shadow: inset 0px 0px 0px 4px #fff;
}
.element{
    margin-bottom:14px;
}
label{
    cursor:pointer;
}



	.btnn {
  border: none;
  color: white;
  padding: 7px 10px;
  font-size: 10px;
  cursor: pointer;
  
}
	.btnn1 {
  border: none;
  color: white;
  padding: 7px 27px;
  font-size: 12px;
  cursor: pointer;
  border-radius:2px;}
.btnM{
 background-color:#23798E;
   border: none;
  color: white;
  padding: 5px 15px;
  font-size: 12px;
  cursor: pointer;
}


.btns{
  background-color:#23798E;
  border: none;
  color: white;
  padding: 6px 10px;
  font-size: 10px;
  cursor: pointer;
}

.btns[disabled=disabled],
.btns:disabled{
  background-color: #86ACB5;
  border: none;
  color: white;
  padding: 6px 10px;
  font-size: 10px;
  cursor:;
}

/* Darker background on mouse-over */


.btnn:hover {
  background-color: #142551;
}
	.success {background-color:#0FBF8F;} 
.success:hover {background-color: #0FBF8F;}

.input[pattern]:invalid {
	border: 2px solid red;
}



	</style>
 <script src="sweet\node_modules\sweetalert\dist\sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sweet\node_modules\sweetalert\dist\sweetalert.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
   
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
 
			/**
			* Méthode qui sera appelée sur le click du bouton
			*/
			function go(){
				var xhr = getXhr();
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						leselect = xhr.responseText;
						// On se sert de innerHTML pour rajouter les options a la liste
						
						document.getElementById('lot').innerHTML = leselect;
						
					}
				}
 
				// Ici on va voir comment faire du post
				xhr.open("POST","ajaxLot1.php",true);
				// ne pas oublier ça pour le post
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				// ne pas oublier de poster les arguments
				// ici, l'id de l'auteur
				sel = document.getElementById('med');
				num_med = sel.options[sel.selectedIndex].value;
				xhr.send("num_med="+num_med);
			}
 	function go_bnef(){
				var xhr = getXhr();
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						leselect = xhr.responseText;
						// On se sert de innerHTML pour rajouter les options a la liste
						
						document.getElementById('bnef').innerHTML = leselect;
						
					}
				}
 
				// Ici on va voir comment faire du post
				xhr.open("POST","ajaxbnef.php",true);
				// ne pas oublier ça pour le post
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				// ne pas oublier de poster les arguments
				// ici, l'id de l'auteur
				sel = document.getElementById('fnct');
				fonction = sel.options[sel.selectedIndex].value;
				xhr.send("fonction="+fonction);
			}
 
	function go_bnef1(){
				var xhr = getXhr();
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						leselect = xhr.responseText;
						// On se sert de innerHTML pour rajouter les options a la liste
						
						document.getElementById('bnef').innerHTML = leselect;
						
					}
				}
 
				// Ici on va voir comment faire du post
				xhr.open("POST","ajaxbnef1.php",true);
				// ne pas oublier ça pour le post
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				// ne pas oublier de poster les arguments
				// ici, l'id de l'auteur
				sel = document.getElementById('q');
				qualite_benef = sel.options[sel.selectedIndex].value;
				xhr.send("qualite_benef="+qualite_benef);
			}
 			


	$(document).ready(function () {
var quantite= null;
$("#lot").change(function(){
var num_echant=$('#lot').val();
$.ajax({
type: "POST",
data: {"num_echant" : num_echant}, 
url: "ajaxqt.php",
success:function(data){
 quantite= data;
if(quantite==0){
$("#qt").val("");
$(window).open(swal("quantite est null", {
                        icon : "error",
						timer: 3500,
						buttons:false,
						} ));
document.getElementById('btn').disabled = true;
}
else{$("#qt").val(quantite);}
 }
}); 
});
});


$(document).ready(function () {
var l=null;
$("#lot").change(function(){
var num_echant=$('#lot').val();
$.ajax({
type: "POST",
data: {"num_echant" : num_echant}, 
url: "ajaxlabo1.php",
success:function(data){
l=data;

$("#labo1").val(l);

}

}); 
});
});
		
$(document).ready(function () {
var labo=null;
$("#lot").change(function(){
var num_echant=$('#lot').val();
$.ajax({
type: "POST",
data: {"num_echant" : num_echant}, 
url: "ajaxlabo.php",
success:function(data){
labo=data;

$("#labo").val(labo);

}

}); 
});
});

$(document).ready(function () {
$("#lot").change(function(){
var validité=null;

var num_echant=$('#lot').val();
$.ajax({
type: "POST",
data: {"num_echant" : num_echant}, 
url: "ajaxValidite.php",
success:function(data){
validité=data;
if(validité==0){
$("#v").val("");
}
else if(validité<0){
 $( "#submit" ).removeAttr('disabled');
$("#v").val(validité+"jour(s)");
$(window).open(swal("Ce lot est périmé ", {
                        icon : "warning",
						timer: 3500,
						buttons:false,
						} ));

} 
else if (validité<=180){

$("#v").val(validité+" jour(s)");
$(window).open( swal({
	
    icon: '',
	text: "Vous avez selectionné un lot dont la date de péremption arrive moins de 180 jours.Etes-vous sur de vouloir sortir des quantités sur ce lot ?",
	type: 'warning',
	buttons:{
		cancel: {
			visible: true,
			text : 'NON',
			className: 'btnn1 success'
		},
		confirm: {
			text : 'OUI',
			className : 'btnn1 success'
		}
	}
}).then(function(isConfirm){        
                if(isConfirm){ 
  $( "#bls" ).removeAttr('disabled');
  $( "#bnef" ).removeAttr('disabled');
   $( "#dateS" ).removeAttr('disabled');
     $( "#qs" ).removeAttr('disabled'); 
	   $( "#btt" ).removeAttr('disabled');   
                } else {
		 $( "#submit" ).removeAttr('disabled');
	}
}));

}
else {
 $( "#bls" ).removeAttr('disabled');
  $( "#bnef" ).removeAttr('disabled');
   $( "#dateS" ).removeAttr('disabled');
     $( "#qs" ).removeAttr('disabled');
	   $( "#btt" ).removeAttr('disabled');
$("#v").val(validité+" jour(s)");
$(window).open(swal("choix valide" , {
						icon : "success",
						timer: 3500,
					    buttons:false,
						} ));
 
}

}
}); 

});
});
	
		</script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
function submitForm(action){
var form= document.getElmentById('form');
form.action= action;
form.submit();
}
</script>
 <script src="sweet\node_modules\sweetalert\dist\sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sweet\node_modules\sweetalert\dist\sweetalert.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/> 

<script>
	
<?php ?>
$(window).on('load',function() {
<?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
					
						swal("ajout avec succes", {
						icon : "success",
						timer: 3000,
						buttons:false,
						
					});
<?php } else if(isset($_GET['msg']) && $_GET['msg']==2){?>
				swal("Existe Déja", {
						icon : "error",
						timer: 3000,
						buttons:false,
						}); 
					
					
				
				<?php } ?>	
				
			<?php if(isset($_GET['msg']) && $_GET['msg']==3){ ?>
					 swal("Suppression avec succées", {
						icon : "success",
						
						timer: 3000,
						buttons:false,
				});
				<?php }?> 	
				
		
			<?php if(isset($_GET['msg']) && $_GET['msg']==4){ ?>
					 swal("la quantite sortie est supérieur a la quantite en stock", {
						icon : "error",
						
						timer: 4000,
						buttons:false,
				});
				<?php }?> 					
					<?php if(isset($_GET['msg']) && $_GET['msg']==6){ ?>
					 swal("Choix Invalide", {
						icon : "error",
						
						timer: 4000,
						buttons:false,
				});
				<?php }?> 	
									
					<?php if(isset($_GET['msg']) && $_GET['msg']==7){ ?>
					 swal("bénéficiaire invalide", {
						icon : "error",
						
						timer: 4000,
						buttons:false,
				});
				
				
				
					
				<?php }?> 				
				});
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
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/<?php echo $image; ?>">   <?php echo $prenom.'  '.$nom; ?>
                  </a>
                 
                </li>
        </ul>
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
					 <?php if(isset($_GET['msg']) && $_GET['msg'] ==10){ ?>
					 <?php } else {?>
				   <h2 style=" text-align: center; text-transform: uppercase;  color:#23798E ;" > Ajouter une Sortie sur un lot d'Echantillon</h2>
                
                <?php } ?>
				<br/>
				 <form data-parsley-validate class="form-horizontal form-label-left" method="post" id='form'>
				 <input type="hidden" value="1" name="loc"/>
				 
	
						
                  <div class="form-group row">
				   
								    <label  class=" control-label col-sm-3 col-form-label">  Choisir un Médicament:</label>
					 <div class="col-sm-9">
					  <?php 
								 if(isset($_GET["med"]) && $_GET['med']!=-1  && $_GET['med']!="vide"){
								  $n= $_GET['med'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rqt1="SELECT * FROM medicaments WHERE num_med=$n ";
								   $rq1="SELECT * FROM medicaments WHERE num_med!=$n and num_med in(SELECT num_med FROM echantillon) ";
								  //echo $rqt;
								  $res1=mysqli_query($cnx,$rqt1);
								  $re1=mysqli_query($cnx,$rq1);
								  ?>
								   <select class="form-control has-feedback-left" name="med"  id="med" style='border-radius: 5px;'  onchange='go()'>
								 <?php   while($r= mysqli_fetch_array($res1)){ ?>
						   <option selected="selected" value=<?php echo $r[0];?> ><?php echo($r[1].' '.$r[2].' '.$r[3].' '.$r[4].' '.$r[5]) ?></option>
						   <?php   while($m= mysqli_fetch_array($re1)){ ?>
                            <option  value="<?php echo $m[0];?> "> <?php echo($m[1].' '.$m[2].' '.$m[3].' '.$m[4].' '.$m[5]) ?></option>
								 <?php }  ?> 
								 </select>
									 <span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>	  
								  
								  <?php }} else if(isset($_GET['med']) && $_GET['med']=="vide"){ ?>
								  
							<select class="form-control has-feedback-left"  name="med" onchange='go()' id="med" style='border-radius: 5px;'>
						    <option selected="selected" value='-1' ></option>
							<?php
						$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res2 = mysqli_query($conn ,"SELECT m.num_med ,m.nom_med,m.dosage,m.Forme,m.Presentation,m.primary_pkg FROM medicaments as m , echantillon as e WHERE e.num_med=m.num_med  GROUP BY num_med ");
						while($row = mysqli_fetch_array($res2)){
							echo "<option value='".$row[0]."'>".$row[1].' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5]."</option>";
						}
					?>
				    </select>
				 <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>		  
				<?php } else {	 ?> 
					<select class="form-control has-feedback-left"  name="med" onchange='go()' id="med" style='border-radius: 5px;'>
						     <option selected="selected" value='-1' ></option>
							<?php
						$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res2 = mysqli_query($conn ,"SELECT m.num_med ,m.nom_med,m.dosage,m.Forme,m.Presentation,m.primary_pkg FROM medicaments as m , echantillon as e WHERE e.num_med=m.num_med  GROUP BY num_med ");
						while($row = mysqli_fetch_array($res2)){
							echo "<option value='".$row[0]."'>".$row[1].' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5]."</option>";
						}
					?>
				    </select>
					<span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>
					 <?php } ?> 
					 
                        </div>
						
				  </div>
				  <div class="form-group row">
                        <label  class=" control-label col-sm-3 col-form-label">Choisir un lot :</label>
					 <div class="col-sm-6">
					  
					   <?php     if(isset($_GET["lot"]) && $_GET['lot']!=-1  && $_GET['lot']!="vide" && $_GET['lot']!="erreur"){
								  $lot= $_GET['lot'];
								  $n= $_GET['med'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rqt2="SELECT * FROM echantillon WHERE num_med=$n AND num_echant=$lot ORDER BY date_peremp";
								   $rt2="SELECT * FROM echantillon WHERE num_med=$n AND num_echant!=$lot ORDER BY date_peremp ";
								  //echo $rt;
								  $lot=mysqli_query($cnx,$rqt2);
								  $res=mysqli_query($cnx,$rt2);
								  ?>
								  <select class="form-control has-feedback-left" name="lot"  id="lot" style='border-radius: 5px;'>
								   <option selected="selected" value='-1' ></option>
								 <?php   while($row1= mysqli_fetch_array($lot)){ ?>
						   <option selected="selected" value=<?php echo $row1[0];?> ><?php echo($row1[1]); ?></option>
						   <?php   while($ligne= mysqli_fetch_array($res)){ ?>
                            <option  value="<?php echo( $ligne[0])?> "> <?php echo($ligne[1]); ?></option>
								 <?php }  ?> 
								</select>
								<span class="fas fa-clinic-medical form-control-feedback left" aria-hidden="true"></span>
					  
					   <?php }} else   if(isset($_GET['lot']) && $_GET['lot']=="erreur"){
					
								  $n= $_GET['med'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rt2="SELECT * FROM echantillon WHERE num_med=$n  ORDER BY date_peremp ";
								  //echo $rt;
								  $res1=mysqli_query($cnx,$rt2); ?>
								  
						<select class="form-control has-feedback-left" name="lot"  id="lot" style='border-radius: 5px;'>
								 
								     <option selected="selected" value='-1'></option>
						   <?php   while($ligne= mysqli_fetch_array($res1)){ ?>
                            <option  value="<?php echo( $ligne[0])?> "> <?php echo($ligne[1]); ?></option>
								 <?php }  ?> 
								</select>		  
							 <span class="glyphicon glyphicon-remove form-control-feedback left" aria-hidden="true"  style='font-size:22px;color:red'></span>	  
								  
								
								
								
								
								
								 <?php } else if(isset($_GET['lot']) && $_GET['lot']=="vide"){  ?>
								 
								 <select class="form-control has-feedback-left"  name="lot" id="lot" style='border-radius: 5px;'   >
						   <option selected="selected" value='-1'></option>
						     

                        </select> 
						 <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>		
								  <?php } else { ?> 
								  		  
                          <select class="form-control has-feedback-left"  name="lot" id="lot" style='border-radius: 5px;'   >
						  
						     <option selected="selected" value='-1'></option>

                        </select>
						<span class="fas fa-clinic-medical form-control-feedback left" aria-hidden="true"></span>
								 	<?php } ?> 
								 
                        </div>
						
					</div>
						<div class="form-group row">
						 <label  class=" control-label col-sm-3 col-form-label  ">Laboratoire: </label>
					 <div class="col-sm-5">
					 <?php if(isset($_GET['labo'])){?>
                           <input type="text" id="labo"  class="form-control  has-feedback-left" name="labo" readonly="readonly"  style='border-radius: 5px;background-color: #FFFFFF;' value="<?php echo $_GET['labo']; ?>"/>
						   <?php } else{?>
						     <input type="text" id="labo"  class="form-control  has-feedback-left" name="labo" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' />
							 <?php }?>
								   <span class="fas fa-bong form-control-feedback left" aria-hidden="true"></span>
                        </div>
						<input type="hidden" id="labo1" name='labo1' value="" />		
				  </div>
                <div class="form-group row">
				
                        <label  class=" control-label col-sm-3 col-form-label "> Quantité en stock pour ce lot:</label>
					 <div class="col-sm-2">
					 
					  <?php if(isset($_GET['qt'])){?>
				 <?php if(isset($_GET['qs']) && $_GET['qs']=="erreur"){?>
					 <input type="text" id="qt"  class="form-control  has-feedback-left" name="qt" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' value="<?php echo $_GET['qt']; ?>">  
					  <span class="	glyphicon glyphicon-info-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>	  
					  
					   <?php } else { ?>
                          <input type="text" id="qt"  class="form-control  has-feedback-left" name="qt" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' value="<?php echo $_GET['qt']; ?>">
						   <span class="fas fa-cart-plus form-control-feedback left" aria-hidden="true"></span>
						  <?php }}  else { ?>
						  <input type="text" id="qt"  class="form-control  has-feedback-left" name="qt" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;'>
						   <span class="fas fa-cart-plus form-control-feedback left" aria-hidden="true"></span>
						  <?php }?>
						
                        </div>
						
						
						 <label  class=" control-label col-sm-1 col-form-label has-feedback"> Validité: </label>
					 <div class="col-sm-2">
					  <?php if(isset($_GET['v'])){?>
                          <input type="text" id="v"  class="form-control " name="v"  readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;'  value="<?php echo $_GET['v']; ?>"  >
						  <?php } else {?>
						 <input type="text" id="v"  class="form-control " name="v"  readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;'    > 
						 <?php }?> 
						   <span class="fas fa-hourglass-half form-control-feedback right" aria-hidden="true"></span>
                        </div>
			<button id='submit' type="submit"  class="btns" style='border-radius: 5px;' formaction='../../control/direction8.php' disabled="disabled"><i class="fas fa-trash-alt" id="btn"></i> Supprimer un Echantillon </button>
				  </div>
				  <br/>
				  <?php 
				          if(!isset($_GET["pup"])){ ?>
				      <div class="item form-group">
				  
          <label class="control-label  col-md-3 col-sm-3 col-xs-12 ">  Statut du Bénéficiaire: </label>
		  <div class="col-md-8 col-sm-6 col-xs-12">
				  <div class=" col-sm-2 radio-inline">
		   <input type="radio" name="optradio"  id="optradio" value="Externe"  checked  onClick="document.getElementById('q').disabled = false;  document.getElementById('fnct').disabled = true;"><label  for="optradio"> Externe</label>
		   </div>
		   <div class=" col-sm-2 radio-inline">
		  <input type="radio" name="optradio" id="optradio2" value="Interne" onClick="document.getElementById('q').disabled = true; document.getElementById('fnct').disabled = false;"  ><label for="optradio2" > Interne</label>
			</div>	
				 </div>
				</div> 
			 
				  
			 <div class="form-group row">
                        <label  class=" control-label col-sm-3 col-form-label">Fonction:</label>
					 <div class="col-sm-6" >
                          <select  id="fnct"  class=" form-control has-feedback-left" name="fnct" style='border-radius: 5px;background-color:;' onchange='go_bnef();' disabled="disabled" >
						  <option value="-1" selected="selected" />
						  <?php
						$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$r = mysqli_query($conn ,"SELECT DISTINCT fonction  FROM binterne");
						while($ro = mysqli_fetch_array($r)){
							echo "<option value='".$ro[0]."'>".$ro[0]."</option>";
						}
					?>
						  </select>
						   <span class="fas fa-search form-control-feedback left" aria-hidden="true"></span>
                       </div>
					   </div>
					   	 <div class="form-group row">
                       <label  class=" control-label col-sm-3 col-form-label">Qulaité:</label>
					 <div class="col-sm-5" >
                          <select  id="q"  class=" form-control has-feedback-left" name="q" style='border-radius: 5px;background-color:;'  onchange='go_bnef1();' disabled="disabled" >
						  <option value="-1" selected="selected"  class=" form-control has-feedback-left"   />
						   <?php
						$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$l = mysqli_query($conn ,"SELECT DISTINCT qualite_benef  FROM bexterne");
						while($lo = mysqli_fetch_array($l)){
							echo "<option value='".$lo[0]."'>".$lo[0]."</option>";
						}
					?>
						  </select>
						   <span class="fas fa-search form-control-feedback left" aria-hidden="true"></span>
                       </div>
						</div>
						<?php } ?>
						
						<br/>
				 <div class="form-group row">
                        <label  class=" control-label col-sm-3 col-form-label"> Choisir un Bénéficiaire:</label>
					 <div class="col-sm-7">
					 <?php 
					  if(isset($_GET["bnef"]) && $_GET["bnef"]=="erreur"){ 
					  
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								    $rq="SELECT * FROM beneficiaire   ";
								   $re=mysqli_query($cnx,$rq);  ?>
					  <select class="form-control has-feedback-left" name="bnef"  id="bnef" style='border-radius: 5px;'>
					  <option selected="selected" value="-1"></option>
					   <?php   while($m= mysqli_fetch_array($re)){ ?>
                            <option  value="<?php echo( $m[0])?> "> <?php echo($m[2].' '.$m[1]) ?></option>
								 <?php }  ?> 
								 </select>
								 <span class="glyphicon glyphicon-remove form-control-feedback left" aria-hidden="true"  style='font-size:22px;color:red'></span>	  
					        <?php } else if(isset($_GET["bnef"]) && $_GET['bnef']==-1) {
							        $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								    $rq="SELECT * FROM beneficiaire   ";
								    $re=mysqli_query($cnx,$rq);
								  ?>
								  <select class="form-control has-feedback-left" name="bnef"  id="bnef" style='border-radius: 5px;'>
							  <option selected="selected" value="-1"></option>
					  
					             <?php   while($m= mysqli_fetch_array($re)){ ?>
                            <option  value="<?php echo( $m[0])?> "> <?php echo($m[2].' '.$m[1]) ?></option>
								 <?php }  ?> 
								 </select>
						<span class="fas fa-user form-control-feedback left" aria-hidden="true"></span>
							 
					 <?php } else if(isset($_GET["bnef"]) && $_GET["bnef"]=="vide") {
							        $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								    $rq="SELECT * FROM beneficiaire   ";
								    $re=mysqli_query($cnx,$rq);
								  ?>
								  <select class="form-control has-feedback-left" name="bnef"  id="bnef" style='border-radius: 5px;'>
							  <option selected="selected" value="-1"></option>
					  
					             <?php   while($m= mysqli_fetch_array($re)){ ?>
                            <option  value="<?php echo( $m[0])?> "> <?php echo($m[2].' '.$m[1]) ?></option>
								 <?php }  ?> 
								 </select>
				<span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>		 
	                        <?php 
								} else  if(isset($_GET["bnef"]) && $_GET['bnef']!=-1){
								  $n= $_GET['bnef'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rqt="SELECT * FROM beneficiaire WHERE num_benef=$n";
								   $rq="SELECT * FROM beneficiaire WHERE num_benef!=$n  ";
								  //echo $rqt;
								 $res=mysqli_query($cnx,$rqt);
								  $re=mysqli_query($cnx,$rq);
								  ?>
								  
								 <select class="form-control has-feedback-left" name="bnef"  id="bnef" style='border-radius: 5px;'>
								 <?php   while($r= mysqli_fetch_array($res)){ ?>
						   <option selected="selected" value=<?php echo $r[0];?> ><?php echo($r[2].' '.$r[1]) ?></option>
						   <?php   while($m= mysqli_fetch_array($re)){ ?>
                            <option  value="<?php echo( $m[0])?> "> <?php echo($m[2].' '.$m[1]) ?></option>
								 <?php }  ?> 
								 </select>
								  <span class="fas fa-user form-control-feedback left" aria-hidden="true"></span>
								  <?php }} else {
								 ?>
                         <select class="form-control has-feedback-left"  name="bnef" id="bnef" style='border-radius: 5px; background-color:#FFFFFF' disabled="disabled">
						    <option selected="selected" value="-1"></option>
							
						 <?php $conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$r = mysqli_query($conn ,"SELECT num_benef,nom_benef,prenom_benef FROM beneficiaire");
						while($ro = mysqli_fetch_array($r)){
							echo "<option value='".$ro[0]."'>".$ro[2].' '.$ro[1]."</option>";
						}?>
					
					 </select>
					  <span class="fas fa-user form-control-feedback left" aria-hidden="true"></span>
					<?php }  ?>
				
				 </div>
						
						<button  type='submit'  formaction='../../control/direction.php'  class="btns"  style='border-radius: 5px;' disabled="disabled" id='btt'><i class="fa fa-users"></i> Nouveau Bénéficiaire</button>
						</div>   
						
					
                      
						
				 
					  
					  
				       <div class="form-group row">
                        <label  class=" control-label col-sm-3 col-form-label"> Quantité Sortie:</label>
					 <div class="col-sm-2">
					 <?php if(isset($_GET['qs']) && $_GET['qs']=="erreur"){?>
					 <input type="number" id="qs"  class="form-control " name="qs" style='border-radius: 5px;' pattern="(^[1-9]*)?$" min="1" max="5" >	
					 <span class="	glyphicon glyphicon-remove form-control-feedback right" aria-hidden="true"  style='font-size:22px;color:red'></span>
					 <?php } else if(isset($_GET['qs']) && $_GET['qs'] !="erreur" && $_GET['qs'] !="vide"){?>
                          <input type="number" id="qs"  class="form-control " name="qs" style='border-radius: 5px;' pattern="(^[1-9]*)?$" min="1" max="5" value="<?php echo $_GET['qs']; ?>">
						   <?php } else if(isset($_GET['qs']) && $_GET['qs']=="vide"){?>
		  <input type="number" id="qs"  class="form-control has-feedback-left " name="qs" style='border-radius: 5px;' pattern="(^[1-9]*)?$" min="1" max="5" value="">	
		  	<span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>		 			  
						  <?php } else { ?>
<input type="number" id="qs"  class="form-control " name="qs" style='border-radius: 5px; background-color:#FFFFFF' pattern="(^[1-9]*)?$" min="1" max="5" disabled="disabled" >	
<?php }?>					  
                        </div>
						
						
						 <label  class=" control-label col-sm-1 col-form-label"> Sortie Le: </label>
					 <div class="col-sm-2" style='border-radius: 5px;'>
                        <div class='input-group date' id='myDatepicker2' style='border-radius: 5px;'>
						
						<?php   if(isset($_GET['dateS']) && $_GET['dateS']!="vide" && $_GET['dateS']!=""  && $_GET['dateS']!="erreur"){?>
                            <input type='text' class="form-control" name="dateS"  style='border-radius: 5px;' value="<?php echo $_GET['dateS']; ?>"/>
							 <span class="input-group-addon" style='border-radius: 5px;'>
                               <span class="far fa-calendar-alt"  style='font-size:18px;color:#23798E;border-radius: 5px'></span>
                            </span>
						<?php } else if(isset($_GET['dateS']) && $_GET['dateS']=="erreur"){?>	
						 <input type='text' class="form-control" name="dateS"  style='border-radius: 5px;'/>
							 <span class="input-group-addon" style='border-radius: 5px;'>
                               <span class="far fa-calendar-times "  style='font-size:18px;color:red;border-radius: 5px'></span>
                            </span>
						<?php } else  if(isset($_GET['dateS']) && $_GET['dateS']=="vide" ){?>	
							 <input type='text' class="form-control" name="dateS"  style='border-radius: 5px;'/>
							 <span class="input-group-addon" style='border-radius: 5px;'>
                               <span class="glyphicon glyphicon-question-sign "  style='font-size:18px;color:red;border-radius: 5px'></span>
                            </span>
						
				         <?php } else {?>
							 <input type='text' class="form-control" name="dateS" id="dateS"  style='border-radius: 5px; background-color:#FFFFFF' disabled="disabled"/>
							  <span class="input-group-addon" style='border-radius: 5px;'>
                               <span class="far fa-calendar-alt"  style='font-size:18px;color:#23798E;border-radius: 5px'></span>
                            </span>
							 <?php }?>
                           
							</div>
                        </div>
					
					
					
					
					
					
                        <label  class=" control-label col-sm-2 col-form-label  has-feedback">Numéro BL de sotie:</label>
					 <div class="col-sm-2">
					  <?php if(isset($_GET['bls']) && $_GET['bls']=="erreur"){?>
					  <input type="text" id="bls"  class="form-control  " name="bls" style='border-radius: 5px;'  pattern="[0-9]{9}">
						   <span class="	glyphicon glyphicon-remove form-control-feedback right" aria-hidden="true"  style='font-size:22px;color:red'></span>
					 <?php } else if(isset($_GET['bls']) &&  $_GET['bls']!="erreur" && $_GET['bls'] != "vide" ){?>
                          <input type="text" id="bls"  class="form-control  " name="bls" style='border-radius: 5px;' value="<?php echo $_GET['bls']; ?>" pattern="[0-9]{9}">
						  <?php } else if(isset($_GET['bls'])&& $_GET['bls'] == "vide"){?>  
						    <input type="text" id="bls"  class="form-control has-feedback-left  " name="bls" style='border-radius: 5px;'  pattern="[0-9]{9}">
						   <span class=" glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true"  style='font-size:22px;color:red'></span>
						 <?php } else { ?> 
						   <input type="text" id="bls"  class="form-control " name="bls" style='border-radius: 5px; background-color:#FFFFFF' pattern="[0-9]{9}" disabled="disabled">
						   <?php } ?>
                        </div>
						 </div>
						<input type="hidden" name="location" id="location" value="1"/> 
						 <div class="form-group col-md-12 ">
					<hr/>
					<div class="col-md-6 col-md-offset-9">
			<?php if(isset($_GET['msg']) && $_GET['msg'] ==10){ ?>
	<button type="submit" class=" btnn success " style='border-radius: 5px; padding:6px 22px;font-size:10px;' formaction='../../control/ajoutfacS.php?confirm=1'><span class="glyphicon glyphicon-floppy-disk"></span> confirmer</button> 
<a href="formfacS.php">	<button type="button" class=" btnn success " style='border-radius: 5px; padding:6px 12px;font-size:10px;'  ><i class="fas fa-sync-alt"></i> Annuler</button>	</a>		
	<?php } else { ?>				
<button  type='submit' formaction='../../control/ajoutfacS.php' class=" btnn success " style='border-radius: 5px;'><span class="glyphicon glyphicon-floppy-disk"></span>Enreqistrer cette Sortie</button> 
<a href="formfacS.php">	 <button type="button" class=" btnn success " style='border-radius: 5px;'><i class="	fas fa-sync-alt"></i> Annuler</button>	</a>
<?php } ?>
					  </div></div>
</form>
</div></div></div></div></div></div>





 <footer>
<div>
</div>
</footer>				  
	
      </div>
    </div>
 <!--/new Med-->
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	

  <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	 <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	  
	
      
    
    <!-- Initialize datetimepicker -->
<script>
   
     
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
	
    
</script>
   
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
</body>
</html>
