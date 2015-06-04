<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/RecAjouterFournisseur.php';
     if($etat){

 ?>

 <?php

if(isset($_POST['sauvgarder'])){
include ("Connection.php");
$client=$_POST['client'];
$titre=$_POST['titre'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
$adr=$_POST['adr'];
$city=$_POST['city'];
$pays=$_POST['pays'];
$cat=$_POST['cat'];
if(isset($_POST['autrecat'])){
$cat=$_POST['autrecat'];
}
//
$typeEnt=$_POST['typeEnt'];
$NumEnt=$_POST['numero'];
$skype=$_POST['skype'];
$site=$_POST['siteweb'];
$fax=$_POST['fax'];
$comptef=$_POST['comptef'];
//
$typeCl=$_POST['typeCl'];
$projet=$_POST['terme_paiement'];
$loi=$_POST['loi'];
$etat_up=mysql_query("insert into supplier values('$client','$loi','$prenom','$titre','$nom','$email','$tel1','$tel2','$typeEnt','$comptef','$NumEnt','$skype','$site','$fax','$projet','$adr','$city','$pays','$cat')") ;
$succes="error";
if($etat_up){    
$succes=$four.' : '.$client.'   '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=Fournisseur.php&titre=$N36&url=$url&etat_up=$etat_up&msg=$succes";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
<?php
}else{
	require 'views/ViewAjouterFournisseur.php';
} 

}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	