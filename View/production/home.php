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
  <?php if($p=='Adminstrateur'){?>
<html lang="en">
  <head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> </title>

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
body
{
 margin: 0;
 padding: 0;
 font-family: sans-serif;
}
.container
{
position:;
width: 0x;
height: px ;
margin: px auto;
}
.container .box
{
position: relative;
width: calc(220px - 27px);
height: calc(220px - 25px);
background: #000;
float: left;
margin: 10px;
box-sizing: border-box;
overflow: hidden;
border-radius: 10px;
border-color:#FFFFFF;
}
.container .box1
{
position: relative;
width: calc(190px - 27px);
height: calc(275px - 25px);
background: #FFFFFF;
float: left;
margin: 20px;
box-sizing: border-box;
overflow: hidden;
border-radius: 10px;
border-color:#FFFFFF;
}
.container .box2
{
position: relative;
width: calc(60px - 27px);
height: calc(60px - 25px);
background: #FFFFFF;
float: left;
margin: 7px;
box-sizing: border-box;
overflow: hidden;
border-radius: 10px;
border-color:#FFFFFF;
}
.container .box .icon
{
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: #f00;
transition: 0.5s;
z-index: 1;
}
.container .box:hover .icon
{
 top: 20px;
 left:calc(50% - 40px);
 width: 80px;
 height: 80px;
 border-radius: 50%;

}
A {text-decoration: none;}
.container .box .icon .fas 
{
position:absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
font-size: 40px;
transition: 0.5s;
color: #fff;
}
.container .box:hover .icon .fas
{
font-size: 40px;
}
.container .box .icon .fa 
{
position:absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
font-size: 40px;
transition: 0.5s;
color: #fff;
}
.container .box:hover .icon .fa
{
font-size: 40px;
}
ontainer .box .icon .far 
{
position:absolute;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
font-size: 40px;
transition: 0.5s;
color: #fff;
}
.container .box:hover .icon .far
{
font-size: 40px;
}
.container .box .content
{

text-align:center;
 position: absolute;
 top: 100%;
  height: calc(100% - 100px);
 padding: 20px;
  box-sizing: border-box;
  transition: 0.5s;
  opacity: 0;
}
.container .box:hover .content
{
top: 100px;
opacity: 1;

}
.container .box .content h2
{

margin: 0 0 6px;
padding: 0;
color: #fff;
font-size: 14px;
}
.container .box .content p
{
margin: 0;
padding: 0;
color: #fff;
}
.container .box:nth-child(1) .icon
{
background: #AC94A0;
}
.container .box:nth-child(1) 
{
background:  #B7A3AD;
}
.container .box:nth-child(2) .icon
{
background: #AF76A2;
}
.container .box:nth-child(2) 
{
background: #C18FB6;
}
.container .box:nth-child(3) .icon
{
background: #95638A ;
}
.container .box:nth-child(3) 
{
background: #9E6E93;
}
.container .box:nth-child(4) .icon
{
background: #7F6B8C ;
}
.container .box:nth-child(4) 
{
background: #9787A1;
}
.container .box:nth-child(5) .icon
{
background: #6C5776;
}
.container .box:nth-child(5) 
{
background: #766280;
}
.container .box:nth-child(6) .icon
{
background: #81738A;
}
.container .box:nth-child(6) 
{
background: #968B9D;
}
.container .box:nth-child(7) .icon
{
background: #ACA4A6;
}
.container .box:nth-child(7) 
{
background: #D1CFD1;
}
/* .container .box .details 
  {
  position: relative;
  width: 100%;
  height: 245px;
  overflow: hidden;
  background: #262626;
   
  }
  .container .box:nth-child(1) .details 
  {
  background: #8553cb;
  }
  .container .box .details  .content 
  {
  position: absolute;
  top: calc(50% + 16px);
  transform: translateY(-50%);
  width: 100%;
  padding: 20px; 
  box-sizing : border-box;
  text-align: center;
  transition: 0.5s; 
  }
   .container .box:hover .details  .content 
  {
  top: calc(50%);
  }
  .container .box  .fas
  {
  font-size: 80px;
  color: #fff;
  }
   .container .box  h3
  {
  margin: 0;
  padding: 0;
  padding: 10px 0; 
  color: #fff;
  
  }*/
   .container .box .content a
  {
  display: inline-block;
  padding: 3px 5px;
  color: #fff; 
  border: 1px solid #fff; 
  text-decoration: none;
  transition: 0.5s;
  border-radius: 20px;
  transform: scale(0); 
  }
  .container .box:hover  .content a
  {
  transform: scale(1);
  }
 .container .box .content a:hover 
 {
 background: #fff;
 color: #262626;
 } 
  
	</style>
  </head>

 
 

 <body class="nav-md">
<?php

 ?>
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
			  <form>
<div class="container" id="container">

<div class="box">
      <div class="icon"><i class="fas fa-capsules" aria-hidden="true"></i></div>
	  <div class="content">
	   <h2>Gestion Médicaments </h2> 
		 <p>
		<a href="formlisteMed.php">Liste des Médicaments</a>
		 </p>
		 </div>
   </div>
 
   <div class="box">
      <div class="icon"><i class="fas fa-user-lock" aria-hidden="true"></i></div>
	  <div class="content">
	   <h2>Gestion Bénéficiaires </h2> 
		 <p>
		 <a href="formlisteBnef.php">Liste des Bénéficiaires</a>
		 </p>
		 </div>
   </div>
  

   <div class="box">
      <div class="icon"><i class="fas fa-diagnoses" aria-hidden="true"></i> </div>
	  <div class="content">
	     <h2>Gestion Laboratoires </h2>
		 <p><a href="formlistelabo.php">Liste des Laboratoires</a></p>
		 </div>
   </div>
 
  
   <div class="box">
      <div class="icon"><a href=""><i class="fa fa-medkit" aria-hidden="true"></i> </a></div>
	  <div class="content">
	     <h2>Gestion Echantillons </h2>
		 <p><a href="listeEntrees.php">Liste des Entrées</a></p>
		 </div>
   </div>
   <div class="box1"></div>
<div class="box">
      <div class="icon"><i class="	fas fa-paste" aria-hidden="true"></i></div>
	  <div class="content">
	    <h2> Gestion des Etats </h2>
		 <p><a href="ch.php">Etat du stock de médicaments</a></p>
		 </div>
   </div>
  <div class="box">
      <div class="icon"><i class="fa fa-users" aria-hidden="true"></i></div>
	  <div class="content">
	    <h2> Gestion Utilisateurs </h2>
		 <p><a href="">Liste des Utilistaeurs</a></p>
		 </div>
   </div>
</div>


<!--<a href="formajoutmed.php">Ajouter Médicament</a>

<a href="formajoutmed.php">Liste Médicaments</a>-->
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
  
    
  
  </body>
</html>

 <?php } ?>
 
 
 
	
  

