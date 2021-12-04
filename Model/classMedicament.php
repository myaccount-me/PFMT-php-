
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
<?php 
 include("/../control/cnx.php");
 class medicament{


   private $num_med; 
   private $nom_med;
   private $dosage;
   private $Forme;
   private $Presentation; 
   private $primary_pkg;


function __construct($num_med, $nom_med, $dosage, $Forme, $Presentation, $primary_pkg) {
    $this->num_med = $num_med;
    $this->nom_med = $nom_med;
    $this->dosage = $dosage;
    $this->Forme = $Forme;
    $this->Presentation = $Presentation;
    $this->primary_pkg = $primary_pkg;
}
function getNum_med() {
    return $this->num_med;
}

function getNom_med() {
    return $this->nom_med;
}

function getDosage() {
    return $this->dosage;
}

function getForme() {
    return $this->Forme;
}

function getPresentation() {
    return $this->Presentation;
}

function getPrimary_pkg() {
    return $this->primary_pkg;
}

function setNum_med($num_med) {
    $this->num_med = $num_med;
}

function setNom_med($nom_med) {
    $this->nom_med = $nom_med;
}

function setDosage($dosage) {
    $this->dosage = $dosage;
}

function setForme($Forme) {
    $this->Forme = $Forme;
}

function setPresentation($Presentation) {
    $this->Presentation = $Presentation;
}

function setPrimary_pkg($primary_pkg) {
    $this->primary_pkg = $primary_pkg;
}

//ajouter medicament
public function ajoutermed() {

//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");


$requete="INSERT INTO medicaments VALUES($this->num_med,'$this->nom_med' ,'$this->dosage', '$this->Forme','$this->Presentation','$this->primary_pkg' )";
echo($requete); 
//$res=mysqli_query($cnx,$requete);
//$result=$this->cnx()->query($requete); 
  
  $c = new connection();
  $c->cnx()->query($requete);  																																																																																																																																																																																																																																																																														
}


//modifier medicaments
public function modifiermed($num_med){
//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="UPDATE medicaments SET nom_med='$this->nom_med',dosage='$this->dosage',Forme='$this->Forme',Presentation='$this->Presentation',primary_pkg='$this->primary_pkg' WHERE num_med= $num_med";
//echo($requete); 
//$res=mysqli_query($cnx,$requete);
$c= new connection(); 
$c->cnx()->query($requete);
}

//Supprimer medicament 
public function deletemed($num_med){
//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="DELETE FROM medicaments WHERE num_med=$num_med"; 
echo($requete);
//$res=mysqli_query($cnx,$requete);
$c= new connection(); 
$c->cnx()->query($requete);
}


// afficher listeMedicaments
public function listMed(){
$requete="SELECT * FROM  medicaments ORDER BY nom_med"; 
$c= new connection(); 
$res= $c->cnx()->query($requete);


while($ligne= mysqli_fetch_array($res)){ ?>


  
        <td width="23%"><?php  echo $ligne[1]; ?></td>
        <td width="12%"><?php echo $ligne[2]; ?></td>
        <td width="20%"><?php  echo $ligne[3]; ?></td>
        <td width="15%"> <?php echo $ligne[4]; ?></td>
        <td width="20%"> <?php echo $ligne[5]; ?></td>

 <td><a href='formupdatemed.php?num_med=<?php  echo $ligne[0]; ?>'><button class='btn btn-info btn-xs ' type='button'><span class='fas fa-marker'></span></button></a>
										
                                        <a class="deleteMed",
                                           href="#deleteMed",
                                           data-toggle="modal",
                                           rel= <?php echo $ligne[0];?>
                                           role="button"><button class='btn btn-success btn-xs' type="button" ><span class='fas fa-trash'></span></button></a>

                                                                                 
                                         <div class="modal fade" id="deleteMed" style="padding:7px 6px">
                                         <div class="modal-dialog">
                                                 <div class="modal-content">
                                                  <div class="modal-header">
                                   <button type="button" class="close" data-dismiss=""  onclick="history.go(0)">&times;</button>
                                <h4 class="modal-title"style='text-align: center; text-transform: uppercase;  color:#23798E ;'>supprimer medicament </h4>
       
                                                   <br/>
        
                   <p style='text-align: center; text-transform: uppercase;  color:black ;font-weight:bold;'>Etes vous-sur de vouluoir supprimer ce medicament</p>
				   <br/>
                                          <div class="col-md-7 col-md-offset-4">
                                                        <a href="../../control/deletemed.php?num_med=<?php echo $ligne[0]; ?>&action=delete",
                                                           id="med">
                               <button type="button" class="btnn success" style=" padding:9px 50px ;font-size:14px;">SUPPRIMER</button>
                                                        </a>
                                              </div>
                                           <br/>
										   <br/>
                                           <div class="col-md-7 col-md-offset-4">
            <button type="button" class="btnn success" data-dismiss="" style=" padding:10px 59px ;font-size:14px;" onclick="history.go(0)">ANNULER</button>
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
                            <?php }  } }  ?>
	
  
 
	