<?php
include ("Connection.php");
$idf=$_GET['id_facture'];
$url=$_GET['url'];
$titre=$_GET['titre'];	
$etat_up=mysql_query("delete from invoice   where id_facture='$idf'");
$succes="error";
if($etat_up){ 
$etat_up=mysql_query("delete  from journal where piece='$idf'  ");   
$succes=$N20.' : '.$idf.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=AllFacture.php&titre=Liste des factures&etat_up=$etat_up&titre=$titre&url=$url&msg=$succes";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
