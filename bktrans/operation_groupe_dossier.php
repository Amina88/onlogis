<?php
include ("Connection.php");
$ref=$_GET['Ref'];
if(isset($_GET['etat'])){
$etat=$_GET['etat'];

}
$succes="";
 $url=$N4.".".$N5.".".$N7; 
 $Titre=$N7; 
if($etat=="fermer"){
$msg=$N110;
}else{
$msg=$N109;
}
$a=mysql_query("update files set etat_dossier='$etat' where Reference='$ref'");
if($a){
if(isset($_GET['Depense'])){
$succes=$N151.' : '.$ref.'  '.$msg;
}else{
$succes=$N5.' : '.$ref.'  '.$msg;
}
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$url2=$N19.".".$N28.".".$N151; 
 $titre1=$N151;
if(isset($_GET['Depense'])){
$link="MenuUtilisation.php?valeur=AllDossierEntreprise.php&titre=$titre1&url=$url2&etat_up=$a&msg=$succes"; 
}else{
$link="MenuUtilisation.php?valeur=AllDossier.php&titre=$Titre&url=$url&etat_up=$a&msg=$succes"; 
}
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>













