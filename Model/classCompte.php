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
   <?php
   include("/../control/cnx.php");
       class  Compte{
	  
          private $id_compte; 
          private $login;
          private $image;
          private $privilége;
        private $num_bnef;
          
       

       
       
function __construct($id_compte, $login, $image, $privilége, $num_bnef) {
           $this->id_compte = $id_compte;
           $this->login = $login;
           $this->image = $image;
           $this->privilége = $privilége;
           $this->num_bnef = $num_bnef;
}

function getId_compte() {
    return $this->id_compte;
}

function getLogin() {
    return $this->login;
}

function getImage() {
    return $this->image;
}

function getPrivilége() {
    return $this->privilége;
}

function getNum_bnef() {
    return $this->num_bnef;
}

function setId_compte($id_compte) {
    $this->id_compte = $id_compte;
}

function setLogin($login) {
    $this->login = $login;
}

function setImage($image) {
    $this->image = $image;
}

function setPrivilége($privilége) {
    $this->privilége = $privilége;
}

function setNum_bnef($num_bnef) {
    $this->num_bnef = $num_bnef;
}
public function créerCompte() {
$requete="INSERT INTO compte VALUES($this->id_compte,'$this->login' ,'$this->image', $this->num_bnef,'$this->privilége' )";
echo($requete); 
 $c = new connection();
 $c->cnx()->query($requete);  																																																																																																																																																																																																																																																																														
}

public function desactiver($id){

$requete="DELETE FROM compte WHERE id_compte=$id"; 
echo($requete);
$c= new connection(); 
$c->cnx()->query($requete);
}
public function listCompte(){
$requete="SELECT * FROM  compte,beneficiaire WHERE compte.num_bnef=beneficiaire.num_benef "; 
$c= new connection(); 
$res= $c->cnx()->query($requete);


while($ligne= mysqli_fetch_array($res)){ ?>


         <td>   <img src="images/<?php echo $ligne[2];?>" alt="..." class="" style='width:100px;height:100px;'></td>
        <td  ><?php  echo $ligne[7].' '.$ligne[6]; ?></td>
        <td><?php echo $ligne[1]; ?></td>
        <td> <?php echo $ligne[4]; ?></td>
       

 <td>										
                                          <a class="compte",
                                           href="#compte",
                                           data-toggle="modal",
                                           rel= <?php echo $ligne[0];?>
                                           role="button"><span class='glyphicon glyphicon-remove'  style='font-size:20px;color:red' ></span></a>

                                                                                 
                                         <div class="modal fade" id="compte" style="padding:7px 6px">
                                            <div class="modal-dialog">
                                                 <div class="modal-content">
                                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="" onclick="history.go(0)">&times;</button>
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
	

     