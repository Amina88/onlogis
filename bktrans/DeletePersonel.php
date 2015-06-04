<?php
include("Connection.php");
$id=$_GET['id'];
$Nom=$_GET['Nom'];
$client=$_GET['client'];
$titre=$_GET['titre'];
$url=$_GET['url'];
$titremsg=$N99;

//$etat_up=mysql_query("delete from contactclient where id='$id'");
$etat_up=1;
$pfx=$Nom;
$succes="error";
if($etat_up){    
$succes=$client.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
echo "INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)";
}
$link="MenuUtilisation.php?valeur=ListePersonels.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";

		?>
<script type="text/javascript"> 
//document.location.href="<?php echo $link; ?>";
	
  </script>
