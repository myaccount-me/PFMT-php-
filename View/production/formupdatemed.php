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
  
 <?php if(isset($_GET['msg']) && $_GET['msg']==2){ ?>
<meta http-equiv="refresh" content="2;url=../production/formupdatemed.php?num_med=<?php echo $_GET['num_med']; ?>" />
<?php } ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                  <a class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                       <img src="images/<?php echo $image; ?>">   <?php echo $prenom.'  '.$nom; ?></a>
              </li></ul>   
		</nav>
		</div>
        </div>
        <!-- /top navigation -->
 
 
  
   <?php
 // include("../../control/cnx.php");
$n=$_GET["num_med"];
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="SELECT * FROM medicaments WHERE num_med=$n";
//echo($requete); 
$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res)){

$num_med=$ligne[0];
$nom_med=$ligne[1];
$dosage=$ligne[2];
$Forme=$ligne[3];
$Presentation=$ligne[4];
$primary_pkg=$ligne[5];
}
 ?> 
    
      
           <!-- page content -->
        <div class="right_col" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                   <div class="x_panel">
				 <div class="x_content"> 
				   <h2 style=" text-align: center; text-transform: uppercase; color:#23798E ;"> Modifier Un Médicament</h2>
                
                 <br/>
				<br/>
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="../../control/updatemed.php" method="post">
					 <div class="item form-group">
                       
                    
                      
                          <input type="hidden" id="num_med"  class="form-control " name="num_med" value="<?php echo($num_med)?>" readonly="readonly">
                       
						    <div class="item form-group">
                       
                    
                        <label class="control-label  col-md-2 col-sm-2 col-xs-1 " >Nom du Médicament *:</label>
						  <div class="col-md-7 col-sm-1 col-xs-1">
                          <input type="text" id="nom_med"  class="form-control has-feedback-left " name="nom_med" value="<?php echo($nom_med)?>"  style='border-radius: 5px;' required="required" onKeyUp="myFunction()" >
						  
                          	  <script>
	function myFunction() {
  var x = document.getElementById("nom_med");
  x.value = x.value.toUpperCase();
}
</script>
 <span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>
                        </div>
						</div>
						
                      
						    <div class="item form-group">
                        <label class="control-label  col-md-2 col-sm-2 col-xs-1">Dosage *: </label>
						<div class="col-md-5 col-sm-6 col-xs-12">
                       <input type="text" id="dosage" name="dosage"  class="form-control" value="<?php echo($dosage) ?>"  style='border-radius: 5px;' required="required">
                        
                      </div>
					  </div>
					  
                       <div class="item form-group">
                        <label class="control-label  col-md-2 col-sm-2 col-xs-1 ">Forme *:</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control " type="text" name="Forme" id='Forme' value="<?php echo($Forme)?>"  style='border-radius: 5px;' required="required" onKeyUp="myFunction1()">
						  	    <script>
	function myFunction1() {
  var x = document.getElementById("Forme");
  x.value = x.value.toUpperCase();
}
</script>
                       </div>
                      </div>
					  
					  
                    <div class="item form-group">
                        <label class="control-label  col-md-2 col-sm-3 col-xs-12 " >Presentation *:</label>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                          <input class="form-control " type="text" name="p" value="<?php echo($Presentation)?>"  style='border-radius: 5px;' required="required">
                       </div>
                      </div>
					   <div class="item form-group">
                        <label  class="control-label  col-md-2 col-sm-3 col-xs-12 ">Primary packaging *:</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  class="form-control" type="text" name="pkg" value="<?php echo($primary_pkg)?>" id='pkg' style='border-radius: 5px;' required="required" onKeyUp="myFunction2()">
						     <script>
	function myFunction2() {
  var x = document.getElementById("pkg");
  x.value = x.value.toUpperCase();
}
</script>
                        </div>
                      </div>
					  
                   		
		 <div class="form-group">
	<hr/>
	<div class="col-md-6 col-offset-4">
				 <button type="submit" class=" btnn success "  style='border-radius: 5px;'><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer Les Modifications</button> 
		<a href="formlistemed.php"><button type="button" class=" btnn success "  style='border-radius: 5px;'><i class="	fas fa-sync-alt"></i> Annuler</button></a>	 
					
					  </div>	    
                   </div>     
                    </form>
							  
					  
                  </div>
                </div>
              </div>
            </div></div></div>
        <!-- /page content -->

       <footer>
	   <div></div>
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<script>
	$(window).on('load',function() {
				<?php if(isset($_GET['msg']) && $_GET['msg']==2){ ?>
					 swal("Existe deja", {
						icon : "error",
						
						timer: 3000,
						buttons:false,
				});
				<?php } ?>
				});
				
	</script>
	
  </body>
</html>
