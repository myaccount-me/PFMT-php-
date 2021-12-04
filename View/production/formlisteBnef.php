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
   <?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
<meta http-equiv="refresh" content="2;url=../production/formlisteBnef.php" />
<?php } ?>
 <?php if(isset($_GET['msg']) && $_GET['msg']==3){ ?>
<meta http-equiv="refresh" content="2;url=../production/formlisteBnef.php" />
<?php } ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> </title>

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
					
						 swal("Suppression avec succés", {
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
                  <div class="x_panel">
				     <div class="x_content"> 
					              
                    <form id="demo-form2"  class="form-horizontal form-label-left" action="formlisteBnef.php" method="post"  >
				   <h2 style=" text-align: center; text-transform: uppercase;  color:#23798E ;">liste Des Bénéficiaires</h2>
        
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
				 <?php if(!isset($_POST["r"])){ ?>
  
				     
   <table class='table table-striped'>
       
       
 <thead>
  
  <th><i class='fas fa-user-lock'></i> Prénon du Bénéficiaire</th>
  <th>Nom du Bénéficiaire </th>
  <th>Staut du Bénéficiaire</th>
  
 </thead>
 <tbody>
      <tr>

  
<?php include("../../Model/classBneficiaire.php"); 
  $b = new bneficiare(0,null,null,null,null);
 $b-> listBnef();?>
  </tbody></table>
  <?php 
} else {
  echo"  <table class='table table-striped'>
       
       
 <thead>
  
  <th><i class='fas fa-user-lock'></i>Prénon du Bénéficiaire</th>
  <th>Nom du Bénéficiaire </th>
  <th>Staut du Bénéficiaire</th>
  
 </thead>
 <tbody>
      <tr>";
 $ro=$_POST["r"];

$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res = mysqli_query($conn ,"SELECT * FROM beneficiaire WHERE (nom_benef like ('%$ro%') or  prenom_benef like ('%$ro%') or statut like ('%$ro%') ) and num_benef not in (SELECT num_bnef FROM compte) ORDER BY prenom_benef ");
						while($ligne = mysqli_fetch_array($res)){
						$id=$ligne[0];
$np=$ligne[2].' '.$ligne[1];
$statut=$ligne[4];
$obsrv=$ligne[3];
if($ligne[4]=='Externe'){
$requete1="SELECT qualite_benef,reseau FROM  bexterne  WHERE num_benef=$ligne[0];";
//echo($requete); 
$res1 = mysqli_query($conn ,$requete1);
while($row1= mysqli_fetch_array($res1)){
$qualite=$row1[0];
$reseau=$row1[1];?>
							
		 <td> <?php echo("$ligne[2]");?> </td>
         <td> <?php echo("$ligne[1]");?></td>
         <td> <?php echo("$ligne[4]");?></td>
		
		 
         <td>
		<a href='#consultBnef' data-target='#consultBnef' onClick="benef('<?php echo $id;?>','<?php echo $np;?>','<?php echo $statut;?>','<?php echo $obsrv;?>','<?php echo $qualite;?>','<?php echo $reseau;?>')" data-toggle='modal'> <button class='btn btn-warning btn-xs' type='button' ><span class='fas fa-file-alt'></span></button></a>
 <a href='formupdateBnef.php?num_benef=<?php echo("$ligne[0]"); ?>&statut=<?php echo("$ligne[4]"); ?>'><button class='btn btn-info btn-xs ' type='button'><span class='fas fa-marker'></span></button></a>
		 
					   <a        class="deleteBnef",
                                                href="#deleteBnef",
                                                data-toggle="modal",
                                                rel= <?php echo $ligne[0]; ?>
											    rel2= <?php echo $ligne[4]; ?>
                                                role="button"><button class='btn btn-success btn-xs' ><span class='fas fa-trash'></span></button></a>

                                                                                 
                                         <div class="modal fade" id="deleteBnef" style="padding:7px 6px">
                                                     <div class="modal-dialog">
                                                 <div class="modal-content">
                                                  <div class="modal-header">
                        <button type="button" class="close" data-dismiss="" onClick="history.go(0)">&times;</button>
                                <h4 class="modal-title"style='text-align: center; text-transform: uppercase;  color:#23798E ;'>Supprimer beneficiaire </h4>
       
                                                   <br/>
        
                   <p style='text-align: center; text-transform: uppercase;  color:black ;font-weight:bold;'>Etes vous-sur de vouluoir supprimer ce beneficiaire</p>
				   <br/>
                                          <div class="col-md-6 col-md-offset-4">
                                                        <a href="../../control/deletebnef.php?num_benef=<?php echo $ligne[0]; ?>&statut='<?php echo $ligne[4]; ?>'&action=delete",
                                                           id="bnef">
                                                           <button type="button"  class=" btnn success " style=" padding:9px 50px ;font-size:14px;">SUPPRIMER</button></a>
                                          </div>
                                           <br/>
										   <br/>
                                           <div class="col-md-6 col-md-offset-4">
                     <button type="button" class="btnn success" data-dismiss="" style=" padding:10px 58px ;font-size:14px;" onClick="history.go(0)">ANNULER</button>
                                           </div>
                                           </div>
     <div class="modal-footer">
         
        </div> 
    </div>
  </div>
                                                <!-- /.modal-content -->
                                            </div>
                                       
									   <div class="modal fade" id="consultBnef" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
  <button type="button" class="close" data-dismiss="" onClick="history.go(0)">&times;</button>
            <h5 style=" text-align:center; text-transform: uppercase;  color:#23798E ;" class="modal-title"> Fiche beneficiaire</h5>
       
      <br/>
          <form   class="form-horizontal form-label-left" action="" method="">
 <input type="hidden" name="id" id='id' readonly="readonly" style='border-radius: 5px;' value= '<?php echo $id;?>' >
 
                   <div class="item form-group">
                       
                  <label class="control-label   col-md-3 col-sm-4 col-xs-12" >Prenom & Nom: </label>
				  <div class="col-sm-6 has-feedback">
					 <input style="background-color: #FFFFFF; border-radius: 5px;" type="text"  class="form-control col-md-7 col-xs-12 has-feedback-left" name="np" id="np" readonly="readonly" value='<?php echo $np;?>'>
					  <span class="fas fa-user form-control-feedback left" aria-hidden="true"></span>
					 </div>
					 </div>
				<input type="hidden" class="form-control has-feedback-left" name="statut" readonly="readonly" id='statut' style='border-radius: 5px;' value='<?php echo $statut;?>'>
					<div class="item form-group">
          <label class="control-label  col-md-3 col-sm-4 col-xs-12 ">  Statut: </label>
		   <div class="col-md-8 col-xs-12">
				
				 <div class=" col-sm-3 radio-inline">
				  <input type="radio" name="optradio" class="flat"  value="Externe" checked="checked"    > Externe
				</div>
				<div class="radio-inline col-sm-3">
				 <input type="radio" name="optradio" class="flat" value="Interne" disabled="disabled"> Interne
				
				 </div></div>
				 </div>
				
				 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-4 col-xs-12  ">Qualite:  </label>  
	           <div class=" col-sm-7 col-xs-12">
                <input style="background-color: #FFFFFF; border-radius: 5px;" type="text" name="qualite"  id="qualite" class="form-control col-md-7 col-xs-12 " readonly="readonly" value='<?php echo $qualite;?>'>
                      </div>  
              </div>
					  
					  <div class="item form-group">
					<label  class="control-label  col-md-3 col-sm-4 col-xs-12 " > Reseau:  </label>  
					<div class=" col-sm-6 col-xs-12">	
                       <input style="background-color: #FFFFFF; border-radius: 5px;" type="text"  name="reseau"  class="form-control col-md-7 col-xs-12 " id="reseau"  readonly="readonly" value='<?php echo $reseau;?>'>
                      </div></div>

		
		 <div class="item form-group">		 
		
      <label class="control-label  col-md-3 col-sm-4 col-xs-12 " >Observations :</label>
	 <div class="col-md-12 col-sm-12 col-xs-12">
	    <textarea style="background-color: #FFFFFF; border-radius: 5px;" class="form-control " rows="3" cols="30"  name="obsrv"  id="obsrv" readonly="readonly" ><?php echo($obsrv);?>  </textarea>
    </div></div>
					
					
			
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
 
<?php } } 
else{
$requete2="SELECT fonction FROM  binterne  WHERE  num_benef=$ligne[0]";
//echo($requete); 
$res2 = mysqli_query($conn ,$requete2);
while($row2= mysqli_fetch_array($res2)){
$fnct=$row2[0];

//}
//}


?>



        <td><?php echo("$ligne[2]"); ?></td>
        <td><?php echo("$ligne[1]"); ?></td>
        <td><?php echo("$ligne[4]"); ?></td>
      
 <td>
 <a href='#consultBi' data-target='#consultBi' onClick="binterne('<?php echo $id;?>','<?php echo $np;?>','<?php echo $statut;?>','<?php echo $obsrv;?>','<?php echo $fnct;?>',)" data-toggle='modal'> <button class='btn btn-warning btn-xs' type='button' ><span class='fas fa-file-alt'></span></button></a>
 <a href='formupdateBnef.php?num_benef=<?php echo("$ligne[0]"); ?>&statut=<?php echo("$ligne[4]"); ?>'><button class='btn btn-info btn-xs ' type='button'><span class='fas fa-marker'></span></button></a>


                    <a class="deleteBnef",
                        href="#deleteBnef",
                        data-toggle="modal",
                       rel= <?php echo $ligne[0]; ?>
	                   rel2= <?php echo $ligne[4]; ?>
                       role="button"><button class='btn btn-success btn-xs' type='button'><span class='fas fa-trash'></span></button></a>

                               <div class="modal fade" id="deleteBnef" style="padding:7px 6px">
                                                     <div class="modal-dialog">
                                                 <div class="modal-content">
                                                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="" onClick="history.go(0)">&times;</button>
                                <h4 class="modal-title"style='text-align: center; text-transform: uppercase;  color:#23798E ;'>Supprimer beneficiaire </h4>
       
                                                   <br/>
        
                   <p style='text-align: center; text-transform: uppercase;  color:black ;font-weight:bold;'>Etes vous-sur de vouluoir supprimer ce beneficiaire</p>
				   <br/>
                                          <div class="col-md-6 col-md-offset-4">
                                                        <a href="../../control/deletebnef.php?num_benef=<?php echo $ligne[0]; ?>&statut='<?php echo $ligne[4]; ?>'&action=delete",
                                                           id="bnef">
                                                           <button type="button"  class=" btnn success " style=" padding:9px 50px ;font-size:14px;">SUPPRIMER</button></a>
                                          </div>
                                           <br/>
										   <br/>
                                           <div class="col-md-6 col-md-offset-4">
                     <a href="formlisteBnef.php"> <button type="button" class="btnn success" data-dismiss="" style=" padding:10px 58px ;font-size:14px;">ANNULER</button></a>
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
									   
									   
									   <div class="modal fade" id="consultBi" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
  <button type="button" class="close" data-dismiss="" onClick="history.go(0)">&times;</button>
            <h5 style=" text-align:center ; text-transform: uppercase;  color:#23798E ;" class="modal-title">Fiche beneficiaire</h5>
      
       <br/>
          <form   class="form-horizontal form-label-left" action="" method="">
 <input type="hidden" name="id" id='id' readonly="readonly" style='border-radius: 5px;' value= '<?php echo $id;?>' >
 
                   <div class="item form-group">
                       
                  <label class="control-label   col-md-3 col-sm-4 col-xs-12" >Prenom & Nom: </label>
				  <div class="col-sm-6 has-feedback">
					 <input style="background-color: #FFFFFF; border-radius: 5px;" type="text"  class="form-control col-md-7 col-xs-12 has-feedback-left" name="np_bi" id="np_bi" readonly="readonly" value='<?php echo $np;?>'>
					  <span class="fas fa-user form-control-feedback left" aria-hidden="true"></span>
					 </div>
					 </div>
				<input type="hidden" class="form-control has-feedback-left" name="statut_bi" readonly="readonly" id='statut_bi' style='border-radius: 5px;' value='<?php echo $statut;?>'>
					<div class="item form-group">
          <label class="control-label  col-md-3 col-sm-4 col-xs-12 ">  Statut: </label>
		   <div class="col-md-8 col-xs-12">
				
				 <div class=" col-sm-3 radio-inline">
				  <input type="radio" name="optradio" class="flat"  value="Externe" disabled="disabled"    > Externe
				</div>
				<div class="radio-inline col-sm-3">
				 <input type="radio" name="optradio" class="flat" value="Interne" checked="checked"> Interne
				
				 </div></div>
				 </div>
				
				 <div class="item form-group">
                   <label class="control-label col-md-3 col-sm-4 col-xs-12  ">Fonction:  </label>  
	           <div class=" col-sm-9 col-xs-12">
                <input style="background-color: #FFFFFF; border-radius: 5px;" type="text" name="fnct"  id="fnct" class="form-control col-md-7 col-xs-12 "  readonly="readonly" value='<?php echo $fnct;?>'> 
                      </div>  
              </div>
					  
 <div class="item form-group">		 
		
      <label class="control-label  col-md-3 col-sm-4 col-xs-12 " >Observations :</label>
	 <div class="col-md-12 col-sm-12 col-xs-12">
	    <textarea style="background-color: #FFFFFF; border-radius: 5px;" class="form-control " rows="5" cols="50"  name="obsrv_bi"  id="obsrv_bi"   readonly="readonly" ><?php echo($obsrv);?>  </textarea>
    </div></div>
					
					
				
                    </form>
				 <div class="modal-footer">
         
        </div> 						  

                                    </td>
                              </tr>
 
                              
						
						
						<?php } } ?>
						
						<?php  } }?>
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
 </footer>
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
function benef (id,np,statut,obsrv,qualite,reseau){
	$('#id').val(id);
	$('#np').val(np);
	
	$('#statut').val(statut);
	$('#obsrv').val(obsrv);
	$('#qualite').val(qualite);
	$('#reseau').val(reseau);
	}

</script>
<script>
function binterne (num,np_bi,statut_bi,obsrv_bi,fnct){
	$('#num').val(num);
	$('#np_bi').val(np_bi);
	$('#statut_bi').val(statut_bi);
	$('#obsrv_bi').val(obsrv_bi);
	$('#fnct').val(fnct);
	
	}

</script>
<script>
$(".deleteBnef").click(function () {
        $("#bnef").attr('href', '../../control/deletebnef.php?action=delete&num_benef=' + $(this).attr('rel')+'&statut='+$(this).attr('rel2'));

    });
</script>
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>


	
  </body>
</html>