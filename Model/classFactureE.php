
       <?php
	   include("/../control/cnx.php");
      class  Entree{
	  
          private $id_entree; 
          private $num_lot;
          private $num_labo;
          private $dateE;
          private $Qentree; 
          private $numBL; 
          
          function __construct($id_entree, $num_lot, $num_labo, $Qentree, $dateE, $numBL) {
              $this->id_entree = $id_entree;
              $this->num_lot = $num_lot;
              $this->num_labo = $num_labo;
              $this->dateE = $dateE;
              $this->Qentree = $Qentree;
              $this->numBL = $numBL;
          }
          
          function getId_entree() {
              return $this->id_entree;
          }

          function getNum_lot() {
              return $this->num_lot;
          }

          function getNum_labo() {
              return $this->num_labo;
          }

          function getDateE() {
              return $this->dateE;
          }

          function getQentree() {
              return $this->Qentree;
          }

          function getNumBL() {
              return $this->numBL;
          }

          function setId_entree($id_entree) {
              $this->id_entree = $id_entree;
          }

          function setNum_lot($num_lot) {
              $this->num_lot = $num_lot;
          }

          function setNum_labo($num_labo) {
              $this->num_labo = $num_labo;
          }

          function setDateE($dateE) {
              $this->dateE = $dateE;
          }

          function setQentree($Qentree) {
              $this->Qentree = $Qentree;
          }

          function setNumBL($numBL) {
              $this->numBL = $numBL;
          }


//ajouterfactureE
public function ajoutEntree() {

$requete="INSERT INTO entree_stock VALUES (null, $this->num_lot , $this->num_labo , $this->Qentree,'$this->dateE',$this->numBL)";

//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
echo($requete); 
//$res=mysqli_query($cnx,$requete);
//$result=$this->cnx()->query($requete); 
  
  $c = new connection();
 $c->cnx()->query($requete);  																																																																																																																																																																																																																																																																														
}


//Supprimer Une Entree
public function deleteEntree($id){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="DELETE FROM entree_stock WHERE num_lot=$id"; 
echo($requete);
mysqli_query($cnx,$requete);

}

public function listEntree(){
$requete="SELECT * FROM  entree_stock"; 


$c= new connection(); 
$res= $c->cnx()->query($requete);

//$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
//$requete="SELECT * FROM medicaments";
//echo($requete); 
//$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res)){
echo("

      <tr>
       
        <td >
		<strong class='book-title'>  $ligne[2] </strong></td>
        <td class='item-stock'>$ligne[4]</td>
        <td class='item-qty'>$ligne[5]</td>
         <td class='item-qty'>$ligne[3]  </td>
          <td style='border-bottom: 1px solid #cecfd5 ;
  border-right: 0px #cecfd5 ;'><button class='btn btn-warning btn-xs' ><span class='fas fa-pen-alt'></span></button></td>
 
   </tr> ");
	
}
 
}		 

      }
        ?>
</body>
</html>
