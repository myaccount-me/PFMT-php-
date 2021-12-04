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
 <?php if($p =='Adminstrateur'){?>
<html lang="en">
  <head>
     <!-- Meta, title, CSS, favicons, etc. -->
 


    <title> </title>
	
 <?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>
<meta http-equiv="refresh" content="2;url=../production/formlistUtlistaeur.php" />
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
					
						 swal("Désactivation avec succés", {
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
                 <li class="">
                <a class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
					              
                    <form id="demo-form2"  class="form-horizontal form-label-left" action="formlistUtlistaeur.php" method="post"  >
				   <h2 style=" text-align: center; text-transform: uppercase;  color:#23798E ;"> liste Des comptes</h2>
    
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

		     
    <table class='table table-striped'  style="text-align:center">
       
       
 <thead  style="text-align:center">
 
 <th  style="text-align:center"></th>
  <th  style="text-align:center">Nom & Prenom</th>
  <th  style="text-align:center">Login</th>
  <th  style="text-align:center">Privilége</th>
 
  
                      </thead>
<tbody>
      <tr>
	  
<?php 
 include("../../Model/classCompte.php"); 
  $c = new Compte(0,null,null,null,0);
 $c->listCompte(); 
      ?> 
	 </tbody></table>
	<?php } else {
  
echo"		     
    <table class='table table-striped'  style='text-align:center'>
       
       
 <thead style='text-align:center'>
 
 <th  style='text-align:center'></th>
  <th style='text-align:center'>Nom & Prenom</th>
  <th style='text-align:center'>Login</th>
  <th style='text-align:center'>Privilége</th>
 
  
                      </thead>
<tbody>
      <tr>
	  ";
$r=$_POST["r"];
$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res = mysqli_query($conn ,"SELECT * FROM  compte,beneficiaire WHERE compte.num_bnef=beneficiaire.num_benef and (nom_benef like ('%$r%') or prenom_benef like  ('%$r%'))");
						while($ligne = mysqli_fetch_array($res)){?>
		 <td>   <img src="images/<?php echo $ligne[2];?>" alt="..." class="" style='width:100px;height:100px;'></td>				
		 <td><?php  echo $ligne[7].' '.$ligne[6]; ?></td>
        <td><?php echo $ligne[1]; ?></td>
        <td> <?php echo $ligne[4]; ?></td>
		 
         
					<td>   <a  class="compte",
                                                href="#compte",
                                                 data-toggle="modal",
                                                rel= <?php echo $ligne[0]; ?>
                                                role="button"><span class='glyphicon glyphicon-remove'  style='font-size:20px;color:red' ></span></a>

                                                                                 
          <div class="modal fade" id="compte" style="padding:7px 6px">
                                            <div class="modal-dialog">
                                                 <div class="modal-content">
                                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="" onClick="history.go(0)">&times;</button>
                                <h4 class="modal-title"style='text-align: center; text-transform: uppercase;  color:#23798E ;'>Desactiver Compte </h4>
       
                                                   <br/>
        
                   <p style='text-align: center; text-transform: uppercase;  color:black ;font-weight:bold;'>Etes vous-sur de vouluoir desactiver ce compte</p>
				   <br/>
                                          <div class="col-md-6 col-md-offset-3">
										  <a href="../../control/desactiver.php?id_compte=<?php echo $ligne[0]; ?>&action=delete",
                                                           id="cp">
                            <button type="button"  class=" btnn success " style=" padding:9px 50px ;font-size:14px;">DESACTIVER</button></a>
                                          </div>
                                           <br/>
										   <br/>
                                           <div class="col-md-6 col-md-offset-3">
                               <button type="button" class="btnn success" data-dismiss="" style=" padding:10px 59px ;font-size:14px;" onClick="history.go(0)">ANNULER</button>
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


                                    </td>
									
                              </tr>
						
						<?php } }?>
						
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
$(".compte").click(function () {
        $("#cp").attr('href', '../../control/desactiver.php?action=delete&id_compte=' + $(this).attr('rel'));

    });
</script>

<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	
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
 
 
	
  
