<?php
$id     = $_GET['id'];
$ref    = $_GET['reference'];
$action = $_GET['action'];
include ("Connection.php");
if ($action == 'modifier'){
Header("Location:MenuUtilisation.php?valeur=Modif_elm_com.php&titre=Modification d\'un element de bon  de commande&reference=$ref&id=$id");
//include ("ModifCommande.php");
}
elseif ($action == 'supprimer' ){
$req = mysql_query("delete from element_purchase where id='$id' and reference ='$ref';") ;}
Header("Location:MenuUtilisation.php?valeur=ModifCommande.php&titre=Modification de bon de Commandes");
?>