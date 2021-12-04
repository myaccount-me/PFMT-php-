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
   <?php if($p =='Adminstrateur'){?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Document sans titre</title>
  <?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
<meta http-equiv="refresh" content="2;url=../production/formajoutUtlisateur.php" />
<?php } ?>
 <?php if(isset($_GET['msg']) && $_GET['msg']==5){ ?>
<meta http-equiv="refresh" content="2;url=../production/formajoutUtlisateur.php" />
<?php } ?>
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
  padding: 6px 10px;
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
				 <h2 style=" text-align: center; text-transform: uppercase;  color:#23798E ;">Créer Nouveau Compte </h2>
           <br/>
				 <br/>
				 <form class="form-horizontal form-label-left" action="../../control/compte.php" method="post">
				  <div class="form-group row">
                        <label  class=" control-label col-sm-2 col-form-label"> Choisir un Utilisateur:</label>
					 <div class="col-sm-7">
					 <?php if(isset($_GET['bnef'])){
					 $bnef=$_GET['bnef'];
					 $conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$r1 = mysqli_query($conn ,"SELECT num_benef,nom_benef,prenom_benef FROM beneficiaire where num_benef=$bnef");
						$r2 = mysqli_query($conn ,"SELECT num_benef,nom_benef,prenom_benef FROM beneficiaire where num_benef!=$bnef and num_benef in(SELECT num_benef FROM binterne) ");
					 ?>
					 
					 
				   <select class="form-control has-feedback-left"  name="bnef" id="bnef" style='border-radius: 5px;' required>
						     <?php   while($r= mysqli_fetch_array($r1)){ ?>
						   <option selected="selected" value=<?php echo $r[0];?> ><?php echo($r[2].' '.$r[1]) ?></option>
						   <?php   while($row= mysqli_fetch_array($r2)){ ?>
                            <option  value="<?php echo( $row[0])?> "> <?php echo($row[2].' '.$row[1]) ?></option>
								 <?php }  ?> 
								</select>
							
						<?php }} else {$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$r = mysqli_query($conn ,"SELECT num_benef,nom_benef,prenom_benef FROM beneficiaire where num_benef in(SELECT num_benef FROM binterne)");?>
					
							<select class='form-control has-feedback-left'  name='bnef' id='bnef' style='border-radius: 5px;' required>
							 <option selected='selected' value=''></option>
								<?php while($ro = mysqli_fetch_array($r)){?>
							<option value="<?php echo $ro[0]; ?>"><?php echo($ro[2].' '.$ro[1]) ?></option>
							<?php }  ?>
							 </select>
					<?php	} ?>
					
					
				  <span class="fas fa-user form-control-feedback left" aria-hidden="true"></span>
				 </div>
				</div>
				  	<div class="form-group row">
						 <label  class=" control-label col-sm-2 col-form-label  ">Login: </label>
					 <div class="col-sm-6">
					 <?php if(isset($_GET['login'])){ ?>
					 <input type="text"  name="login"  class="form-control  col-md-7 col-xs-12  has-feedback-left"  id="login" value=''  style='border-radius: 5px;' required="required">
					  <span class="	glyphicon glyphicon-remove form-control-feedback left" aria-hidden="true"  style='font-size:22px;color:red'></span>
					 <?php } else { ?>
                          <input type="text"  name="login"  class="form-control  col-md-7 col-xs-12 has-feedback-left"  id="login" value=''  style='border-radius: 5px;' required="required">
						   <span class="fab fa-500px form-control-feedback left" aria-hidden="true"  style='font-size:22px;'></span>
						  <?php } ?>
                        </div>
						</div>
				  	<div class="form-group row">
						 <label  class=" control-label col-sm-2 col-form-label  ">Image: </label>
					 <div class="col-sm-4">
					  <input id='file'  class="form-control  col-md-7 col-xs-12" type='file' name='file' value='' required />
					  
                        </div>
						
				  </div>
				  	<div class="form-group row">
						 <label  class=" control-label col-sm-2 col-form-label  ">Privilége: </label>
					 <div class="col-sm-4">
					  
                       <select  class="form-control has-feedback-left"  name="p" id="p" style='border-radius: 5px;' required />
					   <option value=''></option>
					   <option value'adminstrateur'>Adminstrateur </option>
					   <option value='sécrétaire'>Sécrétaire </option>
					   </select>
					  
                        </div>
						
				  </div>
				   <div class="form-group  ">
	<hr/>
		<div class="col-md-6 col-md-offset-9">
  <button type="submit" class=" btnn success " style='border-radius: 5px;'><i class="fa fa-plus-circle"></i> Créer Nouveau Compte </button> 
<button type="button" class=" btnn success " style='border-radius: 5px;'><i class="	fas fa-sync-alt"></i> Annuler</button>
			 
					
</div>	</div>    
			</form>
						</div></div></div></div></div></div>	 
				   
			   
        <!-- /page content -->
<footer></footer>
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
	
	
	
 
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
 <script>
	$(window).on('load',function() {
				<?php if(isset($_GET['msg']) && $_GET['msg']==2){ ?>
					 swal("Existe deja", {
						icon : "error",
						
						timer: 3000,
						buttons:false,
				});
				<?php } else if(isset($_GET['msg']) && $_GET['msg']==1){?>
				swal("Ajout avec succes", {
						icon : "success",
						timer: 3000,
						buttons:false,
						}); 
					 <?php } ?>
				});
				
	</script> 
    
  
  </body>
</html>
<?php } else { ?>
 
 <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'  integrity= 'sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ'  crossorigin='anonymous'>

    <!-- Font Awesome -->
  
    
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("images/39130478-médicaments-bleus-arrière-plan-ou-la-texture-bleu-tonique.jpg");
  height: 100%;
}

.caption {
  position: absolute;
  left: 0;
  top: 20%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}
.caption span.border1 {
 
  color: #CCCCCC;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
<style>
	.btnn {
  border: #FFFFFF;
  color: #000000;
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
  background-color: #CCCCCC;
}
	.success {background-color: #CCCCCC;} 
.success:hover {background-color: #CCCCCC;}
th {

width:170px;
}

	</style>
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption" >
 
   <div class="profile_pic" style=" top: 50%;">
              <i class="	glyphicon glyphicon-warning-sign" style="font-size:250px;color:#000630"></i>
              </div>
			  <br/>
			  <p style="  text-transform: uppercase; color:#000630; font-size:36px; font-weight:bold">Page inaccessible</p>
			  <br/>
	
	<br/>
	                            
  </div>
</div>



</body>
</html>
<?php } ?>
 
 
	
  
