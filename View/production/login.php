<!DOCTYPE html>
<?php
ob_start();
session_start();
 
$l=$_SESSION['login'];
$nom=$_SESSION['nom'];
$prenom=$_SESSION['prenom'];
$image=$_SESSION['image'];
$p= $_SESSION['privilege'];
 
?>
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
  background-color: #CEECF6;
  color:  #000630;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}
.caption span.border1 {
 
  color: #000630;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
  font-weight:bold ;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
<style>
	.btnn {
  border: #BFCED2;
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
  background-color: #BFCED2;
}
	.success {background-color: #BFCED2;} 
.success:hover {background-color: #BFCED2;}
th {

width:170px;
}

	</style>
</style>
</head>
<body>

<div class="bgimg-1">
  <div class="caption" >
  <div>
   <span class="border1">Bienvenue</span>
   </div>
   <br/>
   <div class="profile_pic" style=" top: 50%;">
                <img src="images/<?php echo $image;?>" alt="..." class="img-circle profile_img" width="12%" height="30%">
              </div>
			  <br/>
			  <p style="  text-transform: uppercase; color:#000630; font-weight:bold"><?php echo $prenom.' '.$nom; ?></p>
			  <br/>
			  <div>
    <span class="border">Pierre Fabre Médicaments Tunisie</span>
	</div>
	<br/>
	   <?php if($p=='Adminstrateur'){?>
<a href="home.php">    <button type="button" class="btnn success" data-dismiss="" style=" border-radius:15px;padding:4px 20px;"><span class="fa fa-home"></span> Acceuil Adminstrateur</button></a>
      <?php } else {?> 
 <a href="home1.php">    <button type="button" class="btnn success" data-dismiss="" style=" border-radius:15px;padding:4px 20px;"><span class="fa fa-home"></span> Acceuil Secrétaire </button></a> <?php } ?>                              
  </div>
</div>



</body>
</html>
