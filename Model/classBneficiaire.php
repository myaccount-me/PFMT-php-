 

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
input[type]:hidden {
  background-color: #FFFFFF;	
}
</style>
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
<?php
include("/../control/cnx.php");
class bneficiare { 

private $num_bnef;
private $prenom;
private $nom;
private $observation; 
private $statut;



function __construct($num_bnef,$nom,$prenom,$observation,$statut){
$this->num_bnef= $num_bnef; 
$this->prenom= $prenom; 
$this->nom= $nom; 
$this->observation= $observation;
$this->statut= $statut;  }



 function getNum_bnef() {
    return $this->num_bnef;
}

function getNom_bnef() {
    return $this->nom;
}

function getObservation() {
    return $this->observation;
}

function setNum_bnef($num_bnef) {
    $this->num_bnef = $num_bnef;
}

function setNom_bnef($nom) {
    $this->nom = $nom;
}

function setObservation($observation) {
    $this->observation = $observation;
}



//ajouter Bénéficiaire
public function ajouterBnef() {
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base"); 
$requete="INSERT INTO beneficiaire VALUES(null,'$this->nom','$this->prenom','$this->observation','$this->statut' )";
 // $c= new connection(); 
  // $c->cnx()->query($requete);
mysqli_query($cnx,$requete);
echo($requete); 
																																																																																																																																																																																																																																																																														
}


public function listBnef(){
$requete="SELECT * From beneficiaire WHERE num_benef not in (SELECT num_bnef FROM compte) ORDER BY prenom_benef"; 
$c= new connection(); 
$res= $c->cnx()->query($requete);
while($ligne= mysqli_fetch_array($res)){
$id=$ligne[0];
$np=$ligne[2].' '.$ligne[1];
$statut=$ligne[4];
$obsrv=$ligne[3];
if($ligne[4]=='Externe'){
$requete1="SELECT qualite_benef,reseau FROM  bexterne  WHERE num_benef=$ligne[0];";
//echo($requete); 
$res1= $c->cnx()->query($requete1);
while($row1= mysqli_fetch_array($res1)){
$qualite=$row1[0];
$reseau=$row1[1];



?>
        <td><?php echo("$ligne[2]"); ?></td>
        <td><?php echo("$ligne[1]"); ?></td>
        <td><?php echo("$ligne[4]"); ?></td>
      
 <td>
 <a href='#consultBnef' data-target='#consultBnef' onClick="benef('<?php echo $id;?>','<?php echo $np;?>','<?php echo $statut;?>','<?php echo $obsrv;?>','<?php echo $qualite;?>','<?php echo $reseau;?>')" data-toggle='modal'> <button class='btn btn-warning btn-xs' type='button' ><span class='fas fa-file-alt'></span></button></a>
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
                            <button type="button" class="close" data-dismiss="" onclick="history.go(0)">&times;</button>
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
                <button type="button" class="btnn success" data-dismiss="" style=" padding:10px 58px ;font-size:14px;" onclick="history.go(0)">ANNULER</button></a>
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
  
									   
									   <div class="modal fade" id="consultBnef" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
<button type="button" class="close" data-dismiss="" onclick="history.go(0)">&times;</button>
            <h5 style=" text-align:center; text-transform: uppercase;  color:#23798E ;" class="modal-title">Fiche beneficiaire</h5>
       
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
                <input style="background-color: #FFFFFF; border-radius: 5px;" type="text" name="qualite"  id="qualite" class="form-control col-md-7 col-xs-12 "  readonly="readonly" value='<?php echo $qualite;?>'  />
                      </div>  
              </div>
				 
					  <div class="item form-group">
					<label  class="control-label  col-md-3 col-sm-4 col-xs-12 " > Reseau:  </label>  
					<div class=" col-sm-6 col-xs-12">	
                       <input style="background-color: #FFFFFF; border-radius: 5px;" type="text"  name="reseau"  class="form-control col-md-7 col-xs-12 " id="reseau" readonly="readonly" value='<?php echo $reseau;?>' />
                      </div>
					  </div>

		
		 <div class="item form-group">		 
		
      <label class="control-label  col-md-3 col-sm-4 col-xs-12 " >Observations :</label>
	 <div class="col-md-12 col-sm-12 col-xs-12">
	    <textarea style="background-color: #FFFFFF; border-radius: 5px;" class="form-control " rows="3" cols="30"  name="obsrv"  id="obsrv"   readonly="readonly" ><?php echo($obsrv);?>  </textarea>
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
$res2= $c->cnx()->query($requete2);
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
                           <button type="button" class="close" data-dismiss="" onclick="history.go(0)">&times;</button>
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
                      <button type="button" class="btnn success" data-dismiss="" style=" padding:10px 58px ;font-size:14px;" onclick="history.go(0)">ANNULER</button>
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
<button type="button" class="close" data-dismiss="" onclick="history.go(0)">&times;</button>
            <h5 style=" text-align: center; text-transform: uppercase;  color:#23798E ;" class="modal-title"> Fiche beneficiaire</h5>
       
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
                <input style="background-color: #FFFFFF; border-radius: 5px;" type="text" name="fnct"  id="fnct" class="form-control col-md-7 col-xs-12 "  readonly="readonly" value='<?php echo $fnct;?>' /> 
                      </div>  
              </div>
					  
 <div class="item form-group">		 
		
      <label class="control-label  col-md-3 col-sm-4 col-xs-12 " >Observations :</label>
	 <div class="col-md-12 col-sm-12 col-xs-12">
	    <textarea style="background-color: #FFFFFF; border-radius: 5px;" class="form-control " rows="5" cols="50"  name="obsrv_bi"  id="obsrv_bi"  readonly="readonly" ><?php echo($obsrv);?>  </textarea>
    </div></div>
					
					
					   
				 
                    </form>
							  
 <div class="modal-footer">
         
        </div> 			
                                    </td>
                              </tr>
 
<?php } } } }

//modifier beneficiaire
public function modifierbnef($num_bnef){
//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="UPDATE beneficiaire SET nom_benef='$this->nom',prenom_benef='$this->prenom',observation='$this->observation' WHERE num_benef= $num_bnef";
echo($requete); 
//$res=mysqli_query($cnx,$requete);
$c= new connection(); 
$c->cnx()->query($requete);
}

//Supprimer Beneficiare 
public function deleteBnef($num_bnef){
//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="DELETE FROM beneficiaire WHERE num_benef=$num_bnef"; 
echo($requete);
//$res=mysqli_query($cnx,$requete);
$c= new connection(); 
$c->cnx()->query($requete);
}
}
?>

