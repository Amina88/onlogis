<?php 
include ("Connection.php");
$num_compte=$_GET['compte'];
$id=$_GET['ref'];
 $Compte=mysql_query("select MN_Non_allue ,valeur from money where id='$id' ");
$banque=mysql_fetch_array($Compte);
$url=$N19.".".$N23.".".$N53; 
$titre=$N53;
$destina=mysql_query("select sold ,Monnaie	from bank_account where Numero_Compte=$num_compte");
$destinat=mysql_fetch_array($destina);
$nouv=$destinat[0]+$banque[0];
$valeurAll=$banque[1]-$banque[0];
$etat_up=mysql_query("update bank_account set  sold='$nouv' where Numero_Compte=$num_compte");
$etat_up=mysql_query("update money set valeur='$valeurAll', MN_Non_allue='0.00' where id='$id'");
$succes="error";
if($etat_up){    
$succes=$N26.' : '.$N138.'   '.$banque[0].' '.$destinat[1].' '.$N139.' '.$num_compte; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=AllCompte.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$succes";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
