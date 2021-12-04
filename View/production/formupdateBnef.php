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
 
 <?php if(isset($_GET['msg']) && $_GET['msg']==2){ ?>
<meta http-equiv="refresh" content="2;url=../production/formupdateBnef.php" />
<?php } ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  
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
 
 
  
   <?php
 
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$num=$_GET["num_benef"];
$statut=$_GET["statut"];
if($statut=="Externe"){
$requete="SELECT b.num_benef,b.nom_benef,b.prenom_benef,b.observation,b.statut,be.qualite_benef,be.reseau FROM beneficiaire as b, bexterne as be WHERE b.num_benef=$num AND b.num_benef=be.num_benef";
//echo($requete); 

$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res)){
$num_bnef=$ligne[0];
$nom=$ligne[1];
$prenom=$ligne[2];
$statut=$ligne[4];
$observation=$ligne[3];
$qualite=$ligne[5];
$reseau=$ligne[6];

}
}
else{
$requete="SELECT b.num_benef,b.nom_benef,b.prenom_benef,b.observation,b.statut,bi.fonction FROM beneficiaire as b, binterne as bi WHERE b.num_benef=$num AND b.num_benef=bi.num_benef";
//echo($requete); 

$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res)){
$num_bnef=$ligne[0];
$nom=$ligne[1];
$prenom=$ligne[2];
$statut=$ligne[4];
$observation=$ligne[3];
$fnct=$ligne[5];
}
}
?> 
    
      
           <!-- page content -->
        <div class="right_col" role="main">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                   <div class="x_panel">
				 <div class="x_content"> 
				   <h2 style=" text-align: center; text-transform: uppercase;  color:#23798E ;">Modifier Un Bénéficiare</h2>
                
                 <br/>
				 <br/>
				               
                   <form class="form-horizontal form-label-left" action="../../control/updatebnef.php" method="post">
				  
                          <input id="num_benef"  class="form-control " name="num_benef" value="<?php echo($num)?>" readonly="readonly" type="hidden">
                        
                   <div class="item form-group">
                       
                  <label class="control-label  col-md-2 col-sm-2 col-xs-12 " >Prénom *:</label>
				  <div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
					 <input type="text"  class="form-control col-md-7 col-xs-12 has-feedback-left" name="prenom" id="prenom" value="<?php echo($prenom)?>"  style='border-radius: 5px;' required="required">
					  <span class="fas fa-user form-control-feedback left" aria-hidden="true"></span>
					 </div>
					 </div>
					
					 <div class="item form-group">
					
                         <label class="control-label  col-md-2 col-sm-3 col-xs-12 ">Nom *: </label>
						 <div class="col-md-6 col-sm-6 col-xs-12 has-feedback">
					 <input type="text" name="nom" id="nom"  class="form-control col-md-7 col-xs-12 has-feedback-left" value="<?php echo($nom)?>"  style='border-radius: 5px;' required="required">
					  <span class="fas fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      </div>
  
				<?php if($statut=='Externe'){ ?> 
				    <div class="item form-group">
          <label class="control-label  col-md-2 col-sm-3 col-xs-12 ">  Statut du Bénéficiaire: </label>
		   <div class="col-md-7 col-sm-6 col-xs-12">
				
				 <div class=" col-sm-2 radio-inline">
				  <input type="radio" name="optradio" class="flat"  value="Externe" onClick="document.getElementById('q').disabled = false; document.getElementById('reseau').disabled = false; document.getElementById('fnct').disabled = true;" checked="checked"   > Externe
				</div>
				<div class="radio-inline col-sm-2">
				 <input type="radio" name="optradio" class="flat" value="Interne" onClick="document.getElementById('q').disabled = true; document.getElementById('reseau').disabled = true; document.getElementById('fnct').disabled = false;" disabled="disabled"   > Interne
				
				 </div></div>
				 </div>
				 <?php } else {?>
				   <div class="item form-group">
          <label class="control-label  col-md-2 col-sm-3 col-xs-12 ">  Statut du Bénéficiaire: </label>
		   <div class="col-md-7 col-sm-6 col-xs-12">
				  <div class=" col-sm-2 radio-inline">
				  <input type="radio" name="optradio" class="flat"  value="Externe" onClick="document.getElementById('q').disabled = false; document.getElementById('reseau').disabled = false; document.getElementById('fnct').disabled = true;" disabled="disabled"     > Externe
				</div>
				<div class="radio-inline col-sm-2">
				 <input type="radio" name="optradio" class="flat" value="Interne" onClick="document.getElementById('q').disabled = true; document.getElementById('reseau').disabled = true; document.getElementById('fnct').disabled = false;" checked="checked" > Interne
				 </div>
				 </div></div>
				<?php }?>
			
				 <?php if($statut=='Externe'){ ?>  
				 <div class="item form-group">
				 <label class="control-label col-md-2 col-sm-3 col-xs-12  ">Qualité Bénéficiaire*:  </label>  
	           <div class="col-md-7 col-sm-6 col-xs-12">
                <input type="text" name="q"  id="q" class="form-control col-md-7 col-xs-12 " value="<?php echo($qualite)?>"  style='border-radius: 5px;' required="required">
				 
                      </div>  
              </div>
					  
					  <div class="item form-group">
					<label  class="control-label  col-md-2 col-sm-3 col-xs-12 " > Réseau *:  </label>  
					<div class="col-md-6 col-sm-6 col-xs-12">	
                       <input type="text"  name="reseau"  class="form-control col-md-7 col-xs-12 " id="reseau" value="<?php echo($reseau)?>"  style='border-radius: 5px;' required="required" onKeyUp="myFunction2()">
					      <script>
	function myFunction2() {
  var x = document.getElementById("reseau");
  x.value = x.value.toUpperCase();
}
</script>
                      </div></div>
					  
					  
					   
					 <div class="item form-group">
					<label class="control-label  col-md-2 col-sm-3 col-xs-12 "  > Fonction Bénéficiaire :  
                        </label>
                      <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text"  name="fnct"  class="form-control  col-md-7 col-xs-12"  id="fnct" disabled="disabled"  style='border-radius: 5px;' >
						  
                        </div>
						</div>
						 <?php } else {?>
						  <div class="item form-group">
							 <label class="control-label col-md-2 col-sm-3 col-xs-12  ">Qualité du Bénéficiaire:  </label>  
	           <div class="col-md-7 col-sm-6 col-xs-12">
                <input type="text" name="q"  id="q" class="form-control col-md-7 col-xs-12 " disabled="disabled"  style='border-radius: 5px;'  >
                      </div>  
              </div>
					  
					  <div class="item form-group">
					<label  class="control-label  col-md-2 col-sm-3 col-xs-12 " > Réseau:  </label>  
					<div class="col-md-6 col-sm-6 col-xs-12">	
                       <input type="text"  name="reseau"  class="form-control col-md-7 col-xs-12 " id="reseau" disabled="disabled"  style='border-radius: 5px;'  >
                      </div></div>
					  
					  
					   
					 <div class="item form-group">
                        <label class="control-label  col-md-2 col-sm-3 col-xs-12 "  > Fonction Bénéficiaire *:  
                        </label>
                      <div class="col-md-7 col-sm-6 col-xs-12">
                          <input type="text"  name="fnct"  class="form-control  col-md-7 col-xs-12"  id="fnct" value="<?php echo($fnct); ?>"   style='border-radius: 5px;' required="required" >
						  
                        </div>
						
                     </div>
		<?php } ?>	
		
		 <div class="item form-group">		 
		
      <label class="control-label  col-md-2 col-sm-3 col-xs-12 " >Observations :</label>
	 <div class="col-md-12 col-sm-12 col-xs-12">
	    <textarea class="form-control " rows="6" cols="70"  name="ob"  id="ob"  style='border-radius: 5px;'  ><?php echo($observation);?>  </textarea>
    </div></div>
	
	
  <div class="form-group ">
	<hr/>
	<div class="col-md-6 col-offset-4">
  <button type="submit" class=" btnn success " style='border-radius: 5px;'><span class="glyphicon glyphicon-floppy-disk"></span> Enregistrer les modifications</button> 
	<a href="formlisteBnef.php"><button type="button" class=" btnn success " style='border-radius: 5px;'><i class="	fas fa-sync-alt"></i> Annuler</button></a>	 
					
</div>	</div>    
  </form>         
			</div></div></div></div></div></div>	 
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
			
					 <?php } ?>
				});
				
	</script> 
  
  </body>
</html>
