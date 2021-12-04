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
  class laboratoire{
 
          private $num_labo; 
          private $nom;
          private $mail;
          private $adresse;
          private $codepostal;
          private $pays;
          private $ville;
          private $telephone;
          private $contact;
          private $qualite;
          function __construct($num_labo, $nom,$adresse,$cp,$pays,$ville,$contact,$qualite,$mail,$tel) {
              $this->num_labo = $num_labo;
              $this->nom = $nom;
              $this->mail = $mail;
              $this->adresse = $adresse;
              $this->codepostal = $cp;
              $this->pays = $pays;
              $this->ville = $ville;
              $this->telephone = $tel;
              $this->contact = $contact;
              $this->qualite = $qualite;
          }
          function getNum_labo() {
              return $this->num_labo;
          }

          function getNom() {
              return $this->nom;
          }

          function getMail() {
              return $this->mail;
          }

          function getAdresse() {
              return $this->adresse;
          }

          function getCodepostal() {
              return $this->codepostal;
          }

          function getPays() {
              return $this->pays;
          }

          function getVille() {
              return $this->ville;
          }

          function getTelephone() {
              return $this->telephone;
          }

          function getContact() {
              return $this->contact;
          }

          function getQualite() {
              return $this->qualite;
          }

          function setNum_labo($num_labo) {
              $this->num_labo = $num_labo;
          }

          function setNom($nom) {
              $this->nom = $nom;
          }

          function setMail($mail) {
              $this->mail = $mail;
          }

          function setAdresse($adresse) {
              $this->adresse = $adresse;
          }

          function setCodepostal($codepostal) {
              $this->codepostal = $codepostal;
          }

          function setPays($pays) {
              $this->pays = $pays;
          }

          function setVille($ville) {
              $this->ville = $ville;
          }

          function setTelephone($telephone) {
              $this->telephone = $telephone;
          }

          function setContact($contact) {
              $this->contact = $contact;
          }

          function setQualite($qualite) {
              $this->qualite = $qualite;
          }

//ajouter laboratoire
public function ajouterlabo() {

//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");


$requete="INSERT INTO laboratoire VALUES(null,'$this->nom','$this->adresse', $this->codepostal, '$this->pays','$this->ville','$this->contact', '$this->qualite','$this->mail',$this->telephone )";
echo($requete); 
//$res=mysqli_query($cnx,$requete);
//$result=$this->cnx()->query($requete); 
  
  $c = new connection();
 $c->cnx()->query($requete);  																																																																																																																																																																																																																																																																														
}




// afficher listeMedicaments
public function listLabo(){
$requete="SELECT * FROM  laboratoire ORDER BY nom_lab"; 


$c= new connection(); 
$res= $c->cnx()->query($requete);

//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

//$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res)){ 

 $id = $ligne[0];
 
 $nom_lab=  $ligne[1];
 $adresse= $ligne[2];  
 $cp=  $ligne[3];
 $ville = $ligne[4]; 
 $pays=  $ligne[5]; 
 $contact= $ligne[6];
 $qualite= $ligne[7]; 
 $mail= $ligne[8]; 
 $tel= $ligne[9];  
?>

        <td width="20%"><?php echo $nom_lab;?></td>
        <td  width="20%"><?php echo $mail;?></td>
        <td  width="20%" ><?php echo $adresse; ?></td>
        <td width="12%"><?php echo $contact; ?></td>
        <td  width="12%"><?php echo $tel; ?></td>
      

 <td  width="20%">
 <a href='#consultLabo' onClick="laboratoire('<?php echo $id;?>','<?php echo $nom_lab;?> ','<?php echo $mail;?>','<?php echo $pays;?> ','<?php echo $ville;?> ','<?php echo $cp;?>','<?php echo $adresse;?>','<?php echo $contact;?> ','<?php echo $tel;?> ','<?php echo $qualite;?> ');" data-target='#consultLabo' data-toggle='modal'> <button class='btn btn-warning btn-xs' type='button' ><span class='fas fa-file-alt'></span></button></a>
<a href='formupdatelabo.php?num_lab=<?php  echo $id; ?>'><button class='btn btn-info btn-xs ' type='button'><span class='fas fa-marker'></span></button></a>
										
                                         <a     class="deleteLabo"
                                                href="#deleteLabo"
                                                data-toggle="modal"
                                                rel= <?php echo $id; ?>
                                                role="button"><button class='btn btn-success btn-xs' type="button" ><span class='fas fa-trash'></span></button></a>  

                        
 
    <div class="modal fade" id="deleteLabo" style="padding:7px 6px">
                                            <div class="modal-dialog">
                                                 <div class="modal-content">
                                                  <div class="modal-header">
                           <button type="button" class="close" data-dismiss="" onclick="history.go(0)">&times;</button>
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
   
<div class="modal fade" id="consultLabo" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-body">
   <button type="button" class="close" data-dismiss="" onclick="history.go(0)">&times;</button>
            <h5 style=" text-align:; text-transform: uppercase;  color:#23798E ;" class="modal-title"><i class="fas fa-diagnoses"></i> Consulter un Laboratoire</h5>
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
                       <input type="text"  id="qualite" class=" form-control form-control-lg" name="qualite" readonly="readonly" style='border-radius: 5px;background-color: #FFFFFF;' value='<?php echo $qualite; ?>'>
					    
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
	

 	<?php 	 } }

//modifier laboratoire
public function modifierlabo($num_labo){
//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="UPDATE laboratoire SET nom_lab='$this->nom', adresse='$this->adresse',cp=$this->codepostal,ville='$this->ville',pays='$this->pays', contact= '$this->contact', qualite='$this->qualite',mail='$this->mail',TelBureau=$this->telephone WHERE num_lab= $num_labo";
echo($requete); 
//$res=mysqli_query($cnx,$requete);
$c= new connection(); 
$c->cnx()->query($requete);
}

//Supprimer laboratoire
public function deletelabo($num_labo){
//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="DELETE FROM laboratoire WHERE num_lab=$num_labo"; 
echo($requete);
//$res=mysqli_query($cnx,$requete);
$c= new connection(); 
$c->cnx()->query($requete);
}

          
      }
?>

