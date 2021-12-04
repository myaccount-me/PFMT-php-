
       <?php
	  
      class  sortie{
	  
          private $id_sortie; 
          private $num_lot;
          private $num_bnef;
          private $dateS;
          private $Qsortie; 
          private $numBL_sortie; 
          
        function __construct($id_sortie, $num_lot, $num_bnef, $Qsortie, $dateS, $numBL_sortie) {
              $this->id_sortie = $id_sortie;
              $this->num_lot = $num_lot;
              $this->num_bnef = $num_bnef;
              $this->dateS = $dateS;
              $this->Qsortie = $Qsortie;
              $this->numBL_sortie = $numBL_sortie;
          }
          function getId_sortie() {
              return $this->id_sortie;
          }

          function getNum_lot() {
              return $this->num_lot;
          }

          function getNum_bnef() {
              return $this->num_bnef;
          }

          function getDateS() {
              return $this->dateS;
          }

          function getQsortie() {
              return $this->Qsortie;
          }

          function getNumBL_sortie() {
              return $this->numBL_sortie;
          }

          function setId_sortie($id_sortie) {
              $this->id_sortie = $id_sortie;
          }

          function setNum_lot($num_lot) {
              $this->num_lot = $num_lot;
          }

          function setNum_bnef($num_bnef) {
              $this->num_bnef = $num_bnef;
          }

          function setDateS($dateS) {
              $this->dateS = $dateS;
          }

          function setQsortie($Qsortie) {
              $this->Qsortie = $Qsortie;
          }

          function setNumBL_sortie($numBL_sortie) {
              $this->numBL_sortie = $numBL_sortie;
          }



//ajouterfactureS
public function ajoutSortie() {
$conn =	mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");

$requete="INSERT INTO sortie_stock VALUES (null, $this->num_lot , $this->num_bnef , $this->Qsortie,'$this->dateS',$this->numBL_sortie)";

$res = mysqli_query($conn,$requete);
  
  //$c = new connection();
 //$c->cnx()->query($requete);  																																																																																																																																																																																																																																																																														
}
//Supprimer Une Sortie
public function deleteSortie($id){
$cnx=mysqli_connect("localhost","root","","pierrefabre") or die("Erreur base");
$requete="DELETE FROM sortie_stock WHERE num_lot=$id"; 
echo($requete);
mysqli_query($cnx,$requete);

}


      }
        ?>
</body>
</html>
