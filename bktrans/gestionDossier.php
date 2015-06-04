<?php
//Ajouter un client 
$ref=$_GET['NomSoc'];
include ("Connection.php");
$succes="";
 $url=$N4.".".$N5.".".$N7; 
 $Titre=$N7; 
$url2=$N19.".".$N28.".".$N151; 
 $titre1=$N151;
$msg=$N106;
$s=mysql_query("delete from files where Reference='$ref'");
if($s){
if(isset($_GET['Depense'])){
$succes=$N151.' : '.$ref.'  '.$msg;
}else{
$succes=$N5.' : '.$ref.'  '.$msg;
}
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
if(isset($_GET['Depense'])){
$link="MenuUtilisation.php?valeur=AllDossierEntreprise.php&titre=$titre1&url=$url2&etat_up=$s&msg=$succes"; 
}else{
$link="MenuUtilisation.php?valeur=AllDossier.php&titre=$Titre&url=$url&etat_up=$s&msg=$succes"; 
}

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>