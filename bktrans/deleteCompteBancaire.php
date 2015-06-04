<?php 
include ("Connection.php");
$Num=$_GET['Num'];
$url=$_GET['url'];
$titre=$_GET['titre'];
$etat_up=mysql_query("delete from bank_account  where Numero_Compte='$Num'");
if($etat_up){    
$succes=$N25.' : '.$Num.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
	$link="MenuUtilisation.php?valeur=AllCompte.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$succes";


?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
