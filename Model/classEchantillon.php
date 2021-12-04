     <?php
	
      class echantillon{
	      private $id;
          private $num_lot; 
          private $datep;
		  private $num_med;
		  private $qStock; 
		  
          function __construct($id,$num_lot, $datep,$num_med,$qstock) {
		       $this->id = $id;
              $this->num_lot = $num_lot;
              $this->datep = $datep;
			  $this->num_med= $num_med;
			  $this->qstock= $qstock; 
			  
          }
          function getNum_lot() {
              return $this->num_lot;
          }
  function getqStock() {
              return $this->qStcok;
          }
          function getDatep() {
              return $this->datep;
          }

          function setNum_lot($num_lot) {
              $this->num_lot = $num_lot;
          }

          function setDatep($datep) {
              $this->datep = $datep;
          }
		     function setqStock($qStock) {
              $this->qStock = $qStock;
          }

//ajouterLot
public function ajouterEchant() {

$requete="INSERT INTO echantillon VALUES (null,'$this->num_lot' ,'$this->datep' ,$this->num_med, 0)";

$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
echo($requete); 
mysqli_query($cnx,$requete);
//$result=$this->cnx()->query($requete); 
  
 																																																																																																																																																																																																																																																																														
}




// afficher listeMedicaments
public function listEchant(){
$requete="SELECT * FROM  echantillon"; 




$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
 
$res=mysqli_query($cnx,$requete);
while($ligne= mysqli_fetch_array($res)){
echo("
<tbody>
      <tr>
       
        
        <td>$ligne[1]</td>
        <td>$ligne[2]</td>
      <td><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' id='<?php(echo $ligne[0])?>'><span class='glyphicon glyphicon-pencil'></span></button></td>
	  <td><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete'><span class='glyphicon glyphicon-trash'></span></button></td>


   </tr> ");
	
}
 
}		 

//modifier lot
public function modifierEchant($num_lot){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="UPDATE medicaments SET WHERE num_echant= $num_lot";
//echo($requete); 
mysqli_query($cnx,$requete);

}

//Supprimer lots 
public function deleteEchant($num_lot){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="DELETE FROM echantillon WHERE num_echant=$num_lot"; 
echo($requete);
mysqli_query($cnx,$requete);

}

//modifierQuantiteStock
public function updateQs1($num_lot,$qentree){
   $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="UPDATE echantillon SET Qstock=Qstock+$qentree WHERE num_echant= $num_lot";
echo($requete); 
mysqli_query($cnx,$requete);
 //$c= new connection(); 
//$c->cnx()->query($requete); 
}

//modifierQuantiteStock
public function updateQs2($num_lot,$qsortie){
   $cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="UPDATE echantillon SET Qstock=Qstock-$qsortie WHERE num_echant= $num_lot";
echo($requete); 
mysqli_query($cnx,$requete);
 //$c= new connection(); 
//$c->cnx()->query($requete); 
}


}
        ?>