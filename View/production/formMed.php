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
<meta http-equiv="refresh" content="2;url=../production/formMed.php?med=<?php echo $_GET['med'];?>" />
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
	    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="../vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
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
<script>
	
<?php ?>
$(window).on('load',function() {

<?php  if(isset($_GET['msg']) && $_GET['msg']==2){?>
				swal("Erreur", {
						icon : "error",
						timer: 3500,
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
				   <h2 style=" text-align: center; text-transform: uppercase;  color:#23798E ;">Etats des Entrees pour un médicament</h2>
                
                 <br/>
				 <br/>               
                    <form id="demo-form2"  class="form-horizontal form-label-left" action="../../control/testcontrol.php" method="post"  >
                         
                   		 <div class="form-group row">
                        <label  class=" control-label col-sm-2 col-form-label">  Médicament *: <span class="required"></span></label>
					 <div class="col-sm-7">
					         
			  <?php 
								 if(isset($_GET["med"])){
								  $n= $_GET['med'];
								  $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
								  $rqt="SELECT * FROM medicaments WHERE num_med=$n and num_med in (SELECT num_med FROM echantillon)";
								   $rt="SELECT * FROM medicaments WHERE num_med!=$n  and num_med in (SELECT num_med FROM echantillon) ";
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
								 <?php }} else {
								 ?> 
					 
					 
					 
					 
					 
                          <select class="form-control has-feedback-left"  name="med"  id="med" style='border-radius: 5px;' required="required">
						    <option selected="selected" value=""></option>
							<?php
						$conn =mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
						//mysql_select_db("pierrefabre");
						$res2 = mysqli_query($conn ,"SELECT * FROM medicaments WHERE num_med in (SELECT num_med FROM echantillon)  ORDER BY nom_med");
						while($row = mysqli_fetch_array($res2)){
							echo "<option value='".$row[0]."'>".$row[1].' '.$row[2].' '.$row[3].' '.$row[4].' '.$row[5]."</option>";
						}
					?>
				    </select>
					<?php } ?>
					 <span class="fas fa-capsules form-control-feedback left" aria-hidden="true"></span>
                        </div>
						  
						</div>
					
					<div class="form-group row">
                       
						<label  class=" control-label col-sm-2 col-form-label"> Entre le *: <span class="required"></span></label> 
						 <div class="col-sm-2">
                        <div class='input-group date' id='myDatepicker2'>
								         
			  <?php if(isset($_GET["med"])){ ?>
                            <input type='text' class="form-control"  style='border-radius: 5px;'required="required" name='d' id='d'/>
							 <span class="input-group-addon">
                               <span class='far fa-calendar-times' style='font-size:18px;color:red'></span>
                            </span>
							<?php } else {  ?>
							 <input type='text' class="form-control"  style='border-radius: 5px;'required="required" name='d' id='d'/>
							
                            <span class="input-group-addon">
                               <span class="far fa-calendar-alt"  style='font-size:18px;color:#23798E'></span>
                            </span>
							 <?php  }?>
							</div>
                        </div>
					
						<label  class=" control-label col-sm-1 col-form-label"> Et le *: <span class="required"></span></label> 
						 <div class="col-sm-2">
					 <div class='input-group date' id='myDatepicker1'>
 					         
			  <?php if(isset($_GET["med"])){ ?>
                            <input type='text' class="form-control"  style='border-radius: 5px;'required="required" name='date2' id='date2'/>
							 <span class="input-group-addon">
                               <span class='far fa-calendar-times' style='font-size:18px;color:red'></span>
                            </span>
							<?php } else {  ?>
							 <input type='text' class="form-control"  style='border-radius: 5px;'required="required" name='date2' id='date2'/>
							
                            <span class="input-group-addon">
                               <span class="far fa-calendar-alt"  style='font-size:18px;color:#23798E'></span>
                            </span>
							 <?php  }?>
                        
							</div>
                        </div>
					
					
					</div>
					
		  <div class="form-group col-md-12 ">
					<hr/>
					<div class="col-md-6 col-md-offset-9">
				 <button type="submit" class=" btnn success  "  style='border-radius: 5px;'><i class="fas fa-clipboard"></i> Apercu l'Etat</button> 
				 <button type="reset" class=" btnn success "  style='border-radius: 5px;'><i class="	fas fa-sync-alt"></i> Annuler</button>	 
					
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
	  <!-- Initialize datetimepicker -->
	   <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script>
      $('#myDatepicker1').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#myDatepicker2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
	
    
</script>
	
  </body>
</html>
