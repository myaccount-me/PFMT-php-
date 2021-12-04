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
 


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	.btnn {
  border: none;
  color: white;
  padding: 7px 10px;
  font-size: 10px;
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
  padding: 6px 10px;
  font-size: 10px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btnn:hover {
  background-color: #142551;
}
	.success {background-color:#0FBF8F;} 
.success:hover {background-color: #0FBF8F;}


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
				xhr.open("POST","ajaxLot.php",true);
				// ne pas oublier ça pour le post
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				// ne pas oublier de poster les arguments
				// ici, l'id de l'auteur
				sel1 = document.getElementById('med');
				num_med = sel1.options[sel1.selectedIndex].value;
				
				sel = document.getElementById('labo');
				num_labo = sel.options[sel.selectedIndex].value;
				
				
				xhr.send("num_med="+num_med+"&num_labo="+num_labo);
			}
	
 
</script>


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
        <?php
		  
		  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
					$requete="SELECT num_lab,nom_lab FROM  laboratoire  ORDER BY nom_lab"; 
					
					  $labo=mysqli_query($cnx,$requete);
          
		?> 
		 <div class="right_col" role="main">
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
				     <div class="x_content"> 
					 <?php if(isset($_GET['msg']) && $_GET['msg'] ==6){ ?>
					 <?php } else { ?>
					  <h2  style=" text-align: center; text-transform: uppercase;  color:#23798E ;" > Ajouter une Entrée sur un lot d'Echantillon</h2>
                <?php } ?>
                 <br/>
				 <br/>
				 <form data-parsley-validate class="form-horizontal form-label-left" method="post" id='form'>
                       <input type="hidden" name="location" id="location"	value="1" />
                        <div class="form-group row">
                        <label  class=" control-label col-sm-2 col-form-label">Laboratoire:</label>
					       <div class="col-sm-8">
					         
			  <?php 
								 if(isset($_GET["labo"]) && $_GET["labo"] !=-1){
								  $n= $_GET['labo'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rqt="SELECT * FROM laboratoire WHERE num_lab=$n";
								   $rt="SELECT * FROM laboratoire WHERE num_lab!=$n";
								  //echo $rqt;
								 $res1=mysqli_query($cnx,$rqt);
								  $res=mysqli_query($cnx,$rt);
								  ?>
								 <select class="form-control has-feedback-left" name="labo"  id="labo"  style='border-radius: 5px;' required >
								 <?php   while($r= mysqli_fetch_array($res1)){ ?>
						   <option selected="selected" value=<?php echo $r[0];?> ><?php echo($r[1]) ?></option>
						   <?php   while($row= mysqli_fetch_array($res)){ ?>
                            <option  value="<?php echo( $row[0])?> "> <?php echo($row[1]) ?></option>
								 <?php }  ?> 
								</select>
								 <span class="fas fa-bong form-control-feedback left" aria-hidden="true"></span>
								 <?php }} else if(isset($_GET["msg"]) && $_GET["msg"] ==4) {
								 ?>
								    
							 <select class="form-control has-feedback-left" name="labo" id="labo" style='border-radius: 5px;' required>
						    <option selected="selected" value="-1"></option>
						      <?php   while($ligne= mysqli_fetch_array($labo)){ ?>
                            <option  value="<?php echo( $ligne[0])?> "> <?php echo($ligne[1]) ?></option>
								 <?php }  ?> 
	                             </select>		
						 <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>	
									<?php } else if(isset($_GET["msg"]) && $_GET["msg"] ==5){
				    ?>
									    
							 <select class="form-control has-feedback-left" name="labo" id="labo" style='border-radius: 5px;' required>
						    <option selected="selected" value="-1"></option>
						      <?php   while($ligne= mysqli_fetch_array($labo)){ ?>
                            <option  value="<?php echo( $ligne[0])?> "> <?php echo($ligne[1]) ?></option>
								 <?php }  ?> 
	                             </select>	
			 <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>		
								<?php  } else if(isset($_GET["msg"]) && $_GET["msg"] ==10){  ?>
								
								 <select class="form-control has-feedback-left" name="labo" id="labo" style='border-radius: 5px;' required>
						    <option selected="selected" value="-1"></option>
						      <?php   while($ligne= mysqli_fetch_array($labo)){ ?>
                            <option  value="<?php echo( $ligne[0])?> "> <?php echo($ligne[1]) ?></option>
								 <?php }  ?> 
	                             </select>	
			 <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>		
								<?php } else { ?>
                           <select class="form-control has-feedback-left" name="labo" id="labo" style='border-radius: 5px;' required>
						    <option selected="selected" value="-1"></option>
						      <?php   while($ligne= mysqli_fetch_array($labo)){ ?>
                            <option  value="<?php echo( $ligne[0])?> "> <?php echo($ligne[1]) ?></option>
								 <?php }  ?> 
	                             </select>
								   <span class="fas fa-bong form-control-feedback left" aria-hidden="true"></span>
								 <?php } ?>
								
	                             </div>
		<button type="submit" class="btns" style='border-radius: 5px;' id='btn1' formaction='../../control/directionlabo.php'> <i class="fas fa-vials"></i> Nouveau Laboratoire</button>
				  </div>
				   <div class="form-group row">
                        <label  class=" control-label col-sm-2 col-form-label">Médicament:</label>
					 <div class="col-sm-8">
                     
			  <?php 
								 if(isset($_GET["med"]) && $_GET["med"] !=-1){
								  $n= $_GET['med'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rqt="SELECT * FROM medicaments WHERE num_med=$n";
								   $rt="SELECT * FROM medicaments WHERE num_med!=$n  ";
								  //echo $rqt;
								 $res1=mysqli_query($cnx,$rqt);
								  $res=mysqli_query($cnx,$rt);
								  ?>
								 <select class="form-control has-feedback-left" name="med" onchange='go()' id="med" style='border-radius: 5px;'>
								 <?php   while($r= mysqli_fetch_array($res1)){ ?>
						   <option selected="selected" value=<?php echo $r[0];?> ><?php echo($r[1].' '.$r[2].' '.$r[3].' '.$r[4].' '.$r[5]) ?></option>
						   <?php   while($row= mysqli_fetch_array($res)){ ?>
                            <option  value="<?php echo( $row[0])?> "> <?php echo($row[1].' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5]) ?></option>
								 <?php }  ?> 
								</select>
								<span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>
								 <?php }} else if(isset($_GET['msg']) && $_GET['msg']==4) {
								 ?>
							 <select class="form-control has-feedback-left"  name="med" onchange='go()' id="med" style='border-radius: 5px;' required="required">
						    <option selected="selected" value="-1"></option>
							<?php
						$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res2 = mysqli_query($conn ,"SELECT * FROM medicaments  ORDER BY nom_med");
						while($row = mysqli_fetch_array($res2)){
							echo "<option value='".$row[0]."'>".$row[1].' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5]."</option>";
						}
					?>
				          </select>
						   <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>	 
								 
								 
				                <?php } else if(isset($_GET['msg']) && $_GET['msg']==10) { ?>
								
					 <select class="form-control has-feedback-left"  name="med" onchange='go()' id="med" style='border-radius: 5px;' required="required">
						    <option selected="selected" value="-1"></option>
							<?php
						$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res2 = mysqli_query($conn ,"SELECT * FROM medicaments  ORDER BY nom_med");
						while($row = mysqli_fetch_array($res2)){
							echo "<option value='".$row[0]."'>".$row[1].' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5]."</option>";
						}
					?>
				          </select>
						   <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>			
								
								<?php } else { ?>
                           <select class="form-control has-feedback-left"  name="med" onchange='go()' id="med" style='border-radius: 5px;' required="required">
						    <option selected="selected" value="-1"></option>
							<?php
						$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res2 = mysqli_query($conn ,"SELECT * FROM medicaments  ORDER BY nom_med");
						while($row = mysqli_fetch_array($res2)){
							echo "<option value='".$row[0]."'>".$row[1].' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5]."</option>";
						}
					?>
				          </select>
						   <span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>
					 <?php } ?>
                        </div>
						<button  type="submit"  formaction='../../control/directionmed.php' class="btns" style='border-radius: 5px;' ><i class="fas fa-capsules"></i> Nouveau Médicament</button>
				  </div>
				
				  
				   <div class="form-group row">
                        <label  class=" control-label col-sm-2 col-form-label">Lot:</label>
					 <div class="col-sm-5">
					 
					 
					 <?php 
								 if(isset($_GET["lot"]) && $_GET['lot']!=-1){
								  $lot= $_GET['lot'];
								  $n= $_GET['med'];
								  $labo=$_GET['labo'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rqt="SELECT * FROM echantillon WHERE num_echant=$lot";
								   $rt="SELECT  DISTINCT e.num_echant ,e.num_lot FROM echantillon as e , entree_stock as s WHERE e.num_echant=s.num_lot and s.num_labo = $labo and e.num_med=$n and num_echant!=$lot ";
								  //echo $rt;
								  $lot=mysqli_query($cnx,$rqt);
								  $res=mysqli_query($cnx,$rt);
								  ?>
								  <select class="form-control has-feedback-left" name="lot"  id="lot" style='border-radius: 5px;'>
								  <option selected="selected" value="-1"></option>
								 <?php   while($row1= mysqli_fetch_array($lot)){ ?>
						   <option selected="selected" value=<?php echo $row1[0];?> ><?php echo($row1[1].','.$row1[2]); ?></option>
						   <?php   while($ligne= mysqli_fetch_array($res)){ ?>
                            <option  value="<?php echo( $ligne[0])?> "> <?php echo($ligne[1]); ?></option>
								 <?php }  ?> 
								</select>
								<span class="fas fa-clinic-medical form-control-feedback left" aria-hidden="true"></span>
								
								 <?php }} else if(isset($_GET["msg"]) && $_GET['msg']==4) {
								   $n= $_GET['med'];
								 $labo=$_GET['labo'];
	                      $rq="SELECT  DISTINCT e.num_echant ,e.num_lot FROM echantillon as e , entree_stock as s WHERE e.num_echant=s.num_lot and s.num_labo = $labo and e.num_med=$n";
						   $res=mysqli_query($cnx,$rq);
                                                    ?>
								 
					 <select class="form-control has-feedback-left" name="lot"  id="lot" style='border-radius: 5px;'>
								  <option selected="selected" value="-1"></option>
								 <?php   while($ligne= mysqli_fetch_array($res)){ ?>
                            <option  value="<?php echo( $ligne[0])?> "> <?php echo($ligne[1]); ?></option>
								 <?php }  ?> 
								</select>
							  <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>	 
								 <?php } else { ?>
                         <select class="form-control has-feedback-left"  name="lot" id="lot" style='border-radius: 5px;' >
						  <option selected="selected" value="-1"></option>
						    </select>
					<span class="fas fa-clinic-medical form-control-feedback left" aria-hidden="true"></span>
					<?php } ?>
								
				
                        </div>
				
	<button type="submit"  class="btns"  formaction='../../control/directionlot.php' style='border-radius: 5px;'><i class="	fas fa-clinic-medical"></i> Nouveau Lot d'echantillon</button>
		
	
				  </div>
				  
				  
				   <div class="form-row">
                 <label class=" control-label col-sm-2 col-form-label ">Entrée le:</label>
					  <div class="col-sm-2">
                        <div class='input-group date' id='myDatepicker2' style='border-radius: 5px;'>
						<?php if(isset($_GET['dateE']) && $_GET['dateE'] !="vide" & $_GET['dateE'] !="erreur"){?>
                            <input type='text' class="form-control" name="dateE"  style='border-radius: 5px;' value="<?php echo $_GET['dateE']; ?>"/>
							  <span class="input-group-addon">
                               <span class="far fa-calendar-alt"  style='font-size:18px;color:#23798E'></span>
                            </span>
							<?php } else if(isset($_GET['dateE']) && $_GET['dateE'] =="erreur"){ ?>
							 <input type='text' class="form-control" name="dateE"  style='border-radius: 5px;' value=""/>
							   <span class="input-group-addon">
                               <span class="far fa-calendar-times  "  style='font-size:18px;color:red'></span>
                            </span>
							<?php } else if(isset($_GET['dateE']) && $_GET['dateE'] =="vide"){ ?>
							 <input type='text' class="form-control" name="dateE"  style='border-radius: 5px;' value=""/>
							   <span class="input-group-addon">
                               <span class="glyphicon glyphicon-question-sign "  style='font-size:18px;color:red'></span>
                            </span>
							  
							<?php } else {?>
							 <input type='text' class="form-control" name="dateE" style='border-radius: 5px;' />
							   <span class="input-group-addon">
                               <span class="far fa-calendar-alt"  style='font-size:18px;color:#23798E'></span>
                            </span>
							 <?php }?>
                           
                          
							</div>
                        </div>
                    
                 <label class=" control-label  col-sm-2 col-form-label">Quantité entrée: </label>
				  <div class="col-sm-2">
				  <?php if(isset($_GET['qE']) && $_GET['qE'] !="vide"){?>
                            <input type='number' class="form-control" name="qE"  style='border-radius: 5px;' value="<?php echo $_GET['qE']; ?>" pattern="(^[1-9][0-9]*)?$"  min="1"/>
							<?php } else if(isset($_GET['qE']) && $_GET['qE'] =="vide"){ ?>
						 <input type='number' class="form-control has-feedback-left" name="qE"  style='border-radius: 5px;' value="" pattern="(^[1-9][0-9]*)?$"  min="1"/>
						  <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true" style='font-size:22px;color:red'></span>	
							<?php } else {?>
						<input type="number" class="form-control" id="qE" name="qE" style='border-radius: 5px;' pattern="(^[1-9][0-9]*)?$"  min="1">	
							 <?php }?>
                           
                     
                  </div>
                   
                      <label class=" control-label col-sm-2 col-form-label ">BL numéro:</label>
					   <div class="col-sm-2">
					   <?php if(isset($_GET['bl_num']) && $_GET['bl_num']!="erreur" && $_GET['bl_num']!="vide"){?>
                          <input type="text" id="bl_num"  class="form-control  " name="bl_num" style='border-radius: 5px;'  pattern="[0-9]{9}"  value="<?php echo $_GET['bl_num']; ?>">
						  <?php } else if (isset($_GET['bl_num']) && $_GET['bl_num']=="erreur")  { ?> 
						 <input type="text" id="bl_num"  class="form-control  has-feedback-left  " name="bl_num" style='border-radius: 5px;' value="" pattern="[0-9]{9}">
						   <span class="	glyphicon glyphicon-remove form-control-feedback left" aria-hidden="true"  style='font-size:22px;color:red'></span>
						   <?php } else if (isset($_GET['bl_num']) && $_GET['bl_num']=="vide")  { ?>
						   <input type="text" id="bl_num"  class="form-control  has-feedback-left " name="bl_num" style='border-radius: 5px;' value="" pattern="[0-9]{9}">
						   <span class="glyphicon glyphicon-question-sign form-control-feedback left" aria-hidden="true"  style='font-size:22px;color:red'></span>
						
						<?php  }  else  { ?>
						  <input type="text" class="form-control" id="bl_num" name="bl_num" style='border-radius: 5px;' pattern="[0-9]{9}" >
						   <?php } ?>
                      
                     </div>
                       </div>
           
		    <div class="form-group col-md-12 ">
			<hr/>
			<div class="col-md-6 col-md-offset-9">
				<?php if(isset($_GET['msg']) && $_GET['msg'] ==6){ ?>
	<button type="submit" class=" btnn success " style='border-radius: 5px; padding:6px 25px;font-size:10px;' formaction='../../control/ajoutfacE.php?confirm=1'><span class="glyphicon glyphicon-floppy-disk"></span> confirmer </button> 
	<button type="submit" class=" btnn success" style='border-radius: 5px; padding:6px 12px;font-size:10px;'  formaction='../../control/annulfac.php'><i class="fas fa-sync-alt"></i>Annuler</button>			
				<?php } else { ?>
				 <button type="submit" class=" btnn success " style='border-radius: 5px;' formaction='../../control/ajoutfacE.php'><span class="glyphicon glyphicon-floppy-disk"></span>Enreqistrer cette Entrée</button> 
	<button type="submit" class=" btnn success " style='border-radius: 5px;'  formaction='../../control/annulfac.php'><i class="fas fa-sync-alt"></i> Annuler</button>
	<?php  } ?>
					  </div>
					  </div>
                 </form>
				 </div></div></div></div></div>
	
 <!-- /page content -->
		
<footer><div></div></footer>
    </div>
	</div>  
	  
	  
	  
	
	
      </form>
</div></div> 
	  
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
