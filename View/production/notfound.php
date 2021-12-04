<!DOCTYPE html>
<?php
ob_start();
session_start();
 
//$l=$_SESSION['login'];
//$nom=$_SESSION['nom'];
//$prenom=$_SESSION['prenom'];
//$image=$_SESSION['image'];
//$p= $_SESSION['privilege'];
 
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
			  <p style="  text-transform: uppercase; color:#000630; font-size:36px; font-weight:bold">Utilistaeur introuvable</p>
			  <br/>
	
	<br/>
	                            
  </div>
</div>



</body>
</html>
