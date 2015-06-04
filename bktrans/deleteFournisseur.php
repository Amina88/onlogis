
<?php
//Ajouter un client 
$Nom=$_GET['NomSoc'];
include ("Connection.php");
$url=$_GET['url'];
$titre=$_GET['titre'];	

$etat_up=mysql_query("delete from supplier where Nom_Soc='$Nom'");
$succes="error";
if($etat_up){    
$succes=$N32.' : '.$Nom.'   '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=Fournisseur.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";


?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  