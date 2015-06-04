<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script >

  <?php
}
include ("Connection.php");
require'includes/recDossier.php';
     if($etat){
if(!isset($_POST['sauvgarder'])){

$s=mysql_query("select * from custemer");
$cat=mysql_query("select * from categorie ");

$C=mysql_query("select Email ,Nom_prenom from users");
$s=mysql_query("select * from custemer");
$d=mysql_query("select * from files where etat_dossier='ouvert'");
$m=mysql_query("select * from currency where choix_monnai='1'");
$Mon=mysql_query("select * from currency ");
$Mn=mysql_query("select * from currency where choix_monnai='1'");
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$def_monnaie=mysql_fetch_array($monnaie);

require'views/viewDossier.php';



 }}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>

