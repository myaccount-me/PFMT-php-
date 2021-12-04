<?php 
include("../Model/classCompte.php");
$id=$_GET['id_compte'];
echo $id;
if (isset($_GET['action']) && $_GET['action'] == "delete") {
$m = new Compte($id,null,null,null,0);
$m->desactiver($id); 

header("location:../View/production/formlistUtlistaeur.php?msg=1");

}

?>

