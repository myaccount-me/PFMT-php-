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
     <!-- Meta, title, CSS, favicons, etc. -->
   

    <title> </title>
 <?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
<meta http-equiv="refresh" content="2;url=../production/formlistelabo.php" />
<?php } ?>
 <?php if(isset($_GET['msg']) && $_GET['msg']==3){ ?>
<meta http-equiv="refresh" content="2;url=../production/formlistelabo.php" />
<?php } ?>
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
th {

width:170px;
}

	</style>
	
	 <script src="sweet\node_modules\sweetalert\dist\sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sweet\node_modules\sweetalert\dist\sweetalert.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
	
<?php ?>
$(window).on('load',function() {
<?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
					
						 swal("Suppression avec succes", {
						icon : "success",
						timer: 3000,
						buttons:false,
						
					});
					
					<?php } else if (isset($_GET['msg']) && $_GET['msg']==3){?>
					
					 swal("Modification avec succés", {
						icon : "success",
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
                  <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                     <img src="images/<?php echo $image; ?>">   <?php echo $prenom.'  '.$nom; ?></a>
            </li></ul>     
		</nav>
		</div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        
		 <div class="right_col" role="main">
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div  class="x_panel">
				     <div class="x_content"> 
					   <form id="demo-form2"  class="form-horizontal form-label-left" action="formlistelabo.php" method="post"  >
				   <h2 style=" text-align: center; text-transform: uppercase;  color:#23798E ;"> liste Des Laboratoires</h2>
          <div class="title_right">
                <div class="col-md-3 col-sm-3 col-xs-12 form-group pull-right top_search" >
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Rechercher..." name='r' id='r' >
                    <span class="input-group-btn">
                   <button class="btn btn-default" type="submit" > <span class="fas fa-search"></span></button>
                          </span>
                  </div>
                </div>
              </div>
                 <br/>
				     
    <table class="table table-striped">
       
       
 <thead>
  
  <th width="20%"><i class="fas fa-diagnoses"></i> Nom du Laboratoire</th>
  <th  width="20%">Email</th>
  <th  width="20%">Adresse</th>
  <th  width="12%">Contact</th>
  <th  width="12%">Téléphone</th>
  
                      </thead>
<tbody>
      <tr>
	  	<?php if(!isset($_POST["r"])){ 
 
 include("../../Model/classlaboratoire.php");
  $l= new laboratoire(0,null,null,0,null,null,null,null,null,0);
  $l->listLabo();  }
  
  else{ $r=$_POST["r"];

$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res = mysqli_query($conn ,"SELECT * FROM laboratoire WHERE nom_lab like ('%$r%') ORDER BY nom_lab ");
						while($ligne = mysqli_fetch_array($res)){
						$id = $ligne[0];
 
 $nom_lab=  $ligne[1];
 $adresse= $ligne[2];  
 $cp=  $ligne[3];
 $ville = $ligne[4]; 
 $pays=  $ligne[5]; 
 $contact= $ligne[6];
 $qualite= $ligne[7]; 
 $mail= $ligne[8]; 
 $tel= $ligne[9];  ?>
		<td  width="20%"><?php echo $ligne[1];?></td>
        <td width="20%"><?php echo $ligne[8];?></td>
        <td width="20%"><?php echo $ligne[2]; ?></td>
        <td width="12%"><?php echo $ligne[6]; ?></td>
        <td  width="12%"><?php echo $ligne[9]; ?></td>
      

 <td width="20%">
 <a href='#consultLabo' onClick="laboratoire('<?php echo $id;?>','<?php echo $nom_lab;?> ','<?php echo $mail;?>','<?php echo $pays;?> ','<?php echo $ville;?> ','<?php echo $cp;?>','<?php echo $adresse;?>','<?php echo $contact;?> ','<?php echo $tel;?> ','<?php echo $qualite;?> ');" data-target='#consultLabo' data-toggle='modal'> <button class='btn btn-warning btn-xs' type='button' ><span class='fas fa-file-alt'></span></button></a>
<a href='formupdatelabo.php?num_lab=<?php  echo $ligne[0]; ?>'><button class='btn btn-info btn-xs ' type='button'><span class='fas fa-marker'></span></button></a>
										
                                        <a     class="deleteLabo",
                                                href="#deleteLabo",
                                                data-toggle="modal",
                                                rel= <?php echo $ligne[0]; ?>
                                                role="button"><button class='btn btn-success btn-xs'><span class='fas fa-trash'></span></button></a>

                                                                                 
                                         <div class="modal fade" id="deleteLabo" style="padding:7px 6px">
                                            <div class="modal-dialog">
                                                 <div class="modal-content">
                                                  <div class="modal-header">
                           <button type="button" class="close" data-dismiss="" onClick="history.go(0)">&times;</button>
                                <h4 class="modal-title"style='text-align: center; text-transform: uppercase;  color:#23798E ;'>Supprimer laboratoire </h4>
       
                                                   <br/>
        
                   <p style='text-align: center; text-transform: uppercase;  color:black ;font-weight:bold;'>Etes vous-sur de vouluoir supprimer ce laboratoire</p>
				   <br/>
                                          <div class="col-md-7 col-md-offset-4">
                                                        <a href="../../control/deletelabo.php?num_lab=<?php echo $id; ?>&action=delete",
                                                           id="labo">
                                                          <button type="button"  class=" btnn success " style=" padding:9px 50px ;font-size:14px;">SUPPRIMER</button></a>
                                          </div>
                                           <br/>
										   <br/>
                                           <div class="col-md-7 col-md-offset-4">
                 <button type="button" class="btnn success" data-dismiss="modal" style=" padding:10px 59px ;font-size:14px;" onClick="history.go(0)">ANNULER</button>
                                           </div>
                                           </div>
     <div class="modal-footer">
         
        </div> 
    </div>
  </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                       </div>
									   
									   <!---edit-->
		<div class="modal fade" id="consultLabo" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
<button type="button" class="close" data-dismiss="" onClick="history.go(0)">&times;</button>
            <h5 style=" text-align: center; text-transform: uppercase;  color:#23798E ;" class="modal-title"> Fiche Laboratoire</h5>
        <br/>
      
          <form   class="form-horizontal form-label-left" action="" method="post">
		
			 <input type="hidden" name="id" id='id' readonly="readonly" style='border-radius: 5px;' value= '<?php echo $id;?>' >
	
		
                 <div class="form-group row">
                 <label class="control-label   col-md-3 col-sm-4 col-xs-12">Laboratoire:<span class="required"></span></label>
				  <div class="col-sm-8 has-feedback">
                 <input type="text" class="form-control has-feedback-left" name="nom_lab" id="nom_lab" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' value= '<?php echo $nom_lab;?>'>
				 <span class="fas fa-bong form-control-feedback left" aria-hidden="true"></span>
                  </div>
				 </div>
                       <div class="form-group row">
                        <label  class="control-label   col-md-3 col-sm-4 col-xs-12">Email:<span class="required"></span> </label>
						<div class="col-sm-8 has-feedback">
						<input type="text" class="form-control has-feedback-left" name="mail" readonly="readonly" id='mail' style='border-radius: 5px;background-color: #FFFFFF;' value='<?php echo $mail;?>'>
						<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  </div>
					  
					 
					  <div class="form-group row">
					   
                       
                         <label  class="control-label   col-md-3 col-sm-4 col-xs-12" >Pays:<span class="required"></span> </label>
						 <div class="col-sm-3">
                        <input type="text"   class="form-control has-feedback-left"  name="pays" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;'  id='pays' value='<?php echo $pays; ?>'>
						<span class="fa fa-globe form-control-feedback left" aria-hidden="true" style='font-size:18px'></span>
                        </div> 
					
					 
						<label  class=" control-label col-sm-1 col-form-label">Ville:<span class="required"></span></label>
						 <div class="col-sm-4">
                     <input type="text"   class="form-control " name="ville" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;'id='ville' value='<?php echo $ville; ?>'>
                        </div>
						
						</div>
						<div class="form-group row">
					  
			            <label  class=" control-label   col-md-3 col-sm-4 col-xs-1  col-form-label" >Code Postal:<span class="required"></span></label>
							 <div class=" col-md-6 col-sm-1 col-xs-1">
                        <input type="text"   class="form-control " name="cp"  readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' id='cp' value='<?php echo $cp; ?>'>
                        </div>
						 </div>
                       
                    
                      <div class="form-group row">
					  
					   <label  class=" control-label col-md-3 col-sm-4 col-xs-1 col-form-label" >Adresse:<span class="required"></span> </label>
                        <div class="col-sm-8">
                          <input type="text"   class="form-control " name="adresse" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' id='adresse' value='<?php echo $adresse; ?>' >
                        </div>
						</div>
						
						
					   <div class=" form-group row">
                        <label class=" control-label  col-md-3 col-sm-4 col-xs-1 col-form-label">Contact:<span class="required"></span></label>
                        <div class="col-sm-6 has-feedback">
                          <input type="text"   class="form-control has-feedback-left " name="contact" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' id='contact' value='<?php echo $contact; ?>'>
						    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                    </div>
					<div class=" form-group row">
					  <label class=" control-label col-md-3 col-sm-4 col-xs-1 col-form-label" >Telephone :<span class="required"></span></label>
                        
                        <div class="col-sm-6 has-feedback">
                          <input type="tel"   class="form-control has-feedback-left " name="tel"  readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' id='tel' value='<?php echo $tel; ?>' >
						  <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                        </div>
                       
                      </div>
					  
					   <div class="form-group row ">
					    
                        <label class=" control-label col-md-3 col-sm-4 col-xs-1  col-form-label" >Qualite:<span class="required"></span></label>
						  <div class="col-sm-8">
                       <input type="text" id="qualite"  class=" form-control form-control-lg" name="qualite" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' value='<?php echo $qualite; ?>'>
					    
                        </div>
						</div>
							   
				
                    </form>
			                                        
     <div class="modal-footer">
         
        </div> 				  
        </div>
        
      </div>
    </div>
  </div>
</div>



                                    </td>
                              </tr>
                            <?php }} ?>
	
   </tbody>
 
  </table>
  </form>
  </div></div></div></div>
</div>

    
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<script>
$(".deleteLabo").click(function () {
        $("#labo").attr('href', '../../control/deletelabo.php?action=delete&num_lab=' + $(this).attr('rel'));

    });
</script>

<script>
function laboratoire (id,nom_lab,mail,pays,ville,cp,adresse,contact,tel,qualite){
	$('#id').val(id);
	$('#nom_lab').val(nom_lab);
	$('#mail').val(mail);
	$('#pays').val(pays);
	$('#ville').val(ville);
	$('#cp').val(cp);
	$('#adresse').val(adresse);
	$('#contact').val(contact);
	$('#tel').val(tel);
	$('#qualite').val(qualite);
	
	}

</script>
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>



  </body>
</html>