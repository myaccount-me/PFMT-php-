
<!DOCTYPE html>
<?php
ob_start();
session_start();
$l=$_SESSION['login'];
$nom=$_SESSION['nom'];
$prenom=$_SESSION['prenom'];
$image=$_SESSION['image'];
$p=  $_SESSION['privilege'];
 ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 <?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
<meta http-equiv="refresh" content="2;url=../production/formajoutlabo.php" />
<?php } ?>
 

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'  integrity= 'sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ'  crossorigin='anonymous'>

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
				   <h2 style=" text-align:; text-transform: uppercase;  color:#23798E ;"> Ajouter un laboratoire</h2>
                <br/>
                 <br/>
				 
				 
              <form   class="form-horizontal form-label-left" action="../../control/ajoutlabo.php" method="post">
			   <?php  if(isset($_GET['location'])){?> 
				<input type="hidden" name="location" id="location" value="<?php echo $_GET['location']; ?> "/>
				<?php } else { ?>
				<input type="hidden" name="location" id="location" value="0 "/>
				<?php } ?>
                 <div class="form-group row">
                 <label class=" control-label col-sm-2 col-form-label  ">Laboratoire:<span class="required"></span></label>
				  <div class="col-sm-6 has-feedback">
				  <?php if(isset($_GET['lab']) &&  $_GET['lab']=="erreur"){ ?>
                 <input type="text" class="form-control" name="lab" id='lab' required="required" style='border-radius: 5px;' onKeyUp="myFunction()" >
				  <span class="	glyphicon glyphicon-remove form-control-feedback right" aria-hidden="true"  style='font-size:22px;color:red'></span>
				 <?php } else if(isset($_GET['lab'])) { ?>
				 <input type="text" class="form-control has-feedback-left" name="lab" id="lab" required="required" style='border-radius: 5px;' value="<?php echo $_GET['lab'] ;?>" onKeyUp="myFunction()" >
				  <span class="fas fa-bong form-control-feedback left" aria-hidden="true"></span>
				 <?php } else { ?>
				<input type="text" class="form-control has-feedback-left" name="lab" id='lab' required="required" style='border-radius: 5px;' onKeyUp="myFunction()" >
				  <span class="fas fa-bong form-control-feedback left" aria-hidden="true"></span>
				  <?php } ?>
				 
						  <script>
	function myFunction() {
  var x = document.getElementById("lab");
  x.value = x.value.toUpperCase();
}
</script>
                  </div>
				  </div>
                       <div class="form-group row">
                        <label  class=" control-label col-sm-2 col-form-label">Email:<span class="required"></span> </label>
						<div class="col-sm-6 has-feedback">
						 <?php if(isset($_GET['mail']) &&  $_GET['mail']=="erreur"){ ?>
						<input type="email" class="form-control has-feedback-left" name="mail" required="required"  style='border-radius: 5px;' >
						 <span class="	glyphicon glyphicon-remove form-control-feedback right" aria-hidden="true"  style='font-size:22px;color:red'></span>
						  <?php } else if(isset($_GET['mail'])) { ?>
						  <input type="email" class="form-control has-feedback-left" name="mail" required="required"  style='border-radius: 5px;' value="<?php echo $_GET['mail'];?>"  >
						<?php } else { ?>
						<input type="email" class="form-control has-feedback-left" name="mail" required="required"  style='border-radius: 5px;' >
						<?php } ?>
						<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  </div>
					  
					 
					  <div class="form-group row">
					   
                       
                         <label  class=" control-label col-sm-2 col-form-label" >Pays:<span class="required"></span> </label>
						 <div class="col-sm-3">
						  <?php if(isset($_GET['pays'])){ ?>
						     <input type="text"   class="form-control   has-feedback-left"  name="pays" required="required" style='border-radius: 5px;' value="<?php echo $_GET['pays'] ;?>">
						  <?php } else { ?>
                        <input type="text"   class="form-control   has-feedback-left"  name="pays" required="required" style='border-radius: 5px;'>
						<?php } ?>
						<span class="fa fa-globe form-control-feedback left" aria-hidden="true" style='font-size:18px'></span>
                        </div> 
						
					 
						<label  class=" control-label col-sm-1 col-form-label">Ville:<span class="required"></span></label>
						 <div class="col-sm-2">
						   <?php if(isset($_GET['ville'])){ ?>
                     <input type="text"   class="form-control " name="ville" required="required" style='border-radius: 5px;' value="<?php echo $_GET['ville'] ;?>">
					 <?php } else { ?>
					   <input type="text"   class="form-control " name="ville" required="required" style='border-radius: 5px;' >
					 <?php } ?>
                        </div>
						
						</div>
						<div class="form-group row">
					  
			            <label  class=" control-label   col-md-2 col-sm-2 col-xs-1  col-form-label" >Code Postal:<span class="required"></span></label>
							 <div class=" col-md-3 col-sm-1 col-xs-1">
							 <?php if(isset($_GET['cp'])){ ?>
							  <input type="text"   class="form-control " name="cp"  required="required" style='border-radius: 5px;' value="<?php echo $_GET['cp'] ;?>">
							  <?php } else { ?>
                        <input type="text"   class="form-control " name="cp"  required="required" style='border-radius: 5px;' >
						<?php } ?>
                        </div>
						 </div>
                       
                    
                      <div class="form-group row">
					  
					   <label  class=" control-label col-sm-2 col-form-label" >Adresse:<span class="required"></span> </label>
                        <div class="col-sm-6">
						 <?php if(isset($_GET['adresse'])){ ?>
						  <input type="text"   class="form-control " name="adresse" required="required" style='border-radius: 5px;' value="<?php echo $_GET['adresse'] ;?>">
						  <?php } else { ?>
                          <input type="text"   class="form-control " name="adresse" required="required" style='border-radius: 5px;' >
						  <?php } ?>
                        </div>
						</div>
						
						
					   <div class=" form-group row">
                        <label class=" control-label col-sm-2 col-form-label">Contact:<span class="required"></span></label>
                        <div class="col-sm-3 has-feedback">
						 <?php if(isset($_GET['contact'])){ ?>
						  <input type="text"   class="form-control has-feedback-left " name="contact" required="required" style='border-radius: 5px;' value="<?php echo $_GET['contact'] ;?>">
						   <?php } else { ?>
                          <input type="text"   class="form-control has-feedback-left " name="contact" required="required" style='border-radius: 5px;'>
						  <?php } ?>
						    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    
					  <label class=" control-label col-sm-1 col-form-label" >T.Bureau:<span class="required"></span></label>
                        
                        <div class="col-sm-2 has-feedback">
						<?php if(isset($_GET['tel'])  &&  $_GET['tel']=="erreur"){ ?>
						  <input type="tel"   class="form-control " name="tel" pattern="[0-9]{8}" required="required" style='border-radius: 5px;'>
						   <span class="	glyphicon glyphicon-remove form-control-feedback right" aria-hidden="true"  style='font-size:22px;color:red'></span>
						  <?php } else if(isset($_GET['tel'])) { ?>
						   <input type="tel"   class="form-control " name="tel" pattern="[0-9]{8}" required="required" style='border-radius: 5px;' value="<?php echo $_GET['tel'] ;?>">
						    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
						  <?php } else { ?>
                          <input type="tel"   class="form-control " name="tel" pattern="[0-9]{8}" required="required" style='border-radius: 5px;' >
						   <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
						    <?php } ?>
						
                        </div>
                       
                      </div>
					  
					   <div class="form-group row ">
					    
                        <label class=" control-label col-sm-2 col-form-label" >Qualite du Laboratoire:<span class="required"></span></label>
						  <div class="col-sm-6">
						  <?php if(isset($_GET['qualite'])){ ?>
						    <input type="text"   class=" form-control form-control-lg" name="qualitelabo" required="required" style='border-radius: 5px;' value="<?php echo $_GET['qualite'] ;?>">
						  <?php } else { ?>
                       <input type="text"   class=" form-control form-control-lg" name="qualitelabo" required="required" style='border-radius: 5px;' >
					      <?php } ?>
                        </div>
						</div>
					
				 <div class="form-group col-md-12 ">
					<hr/>
				<div class="col-md-6 col-md-offset-9">
				 <button type="submit" class=" btnn success " style='border-radius: 5px;'><i class="fa fa-plus-circle"></i> Ajouter un Laboratoire</button> 
				 <?php  if(!isset($_GET['location'])){?> 
	<a href="formajoutlabo.php"><button type="button" class=" btnn success " style='border-radius: 5px;'><i class="	fas fa-sync-alt"></i> Annuler</button></a>	 
	<?php } else { ?>
	<a href="formfacE.php"><button type="button" class=" btnn success " style='border-radius: 5px;'><i class="	fas fa-sync-alt"></i> Annuler</button></a>	
	<?php } ?>	
					  </div>	
					
					  </div>	    
                        
                    </form>
							  
					  
                  </div>
                </div>
              </div>
            </div></div></div>
					  
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
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	 
	<script>
	$(window).on('load',function() {
				<?php if(isset($_GET['msg']) && $_GET['msg']==2){ ?>
					 swal("Existe deja", {
						icon : "error",
						
						timer: 3500,
						buttons:false,
				});
				<?php } else if(isset($_GET['msg']) && $_GET['msg']==1){?>
				swal("Ajout avec succes", {
						icon : "success",
						timer: 3500,
						buttons:false,
						}); 
					 <?php } ?>
				});
				
	</script>
  </body>
</html>
