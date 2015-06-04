<?php
if("$permission[1]"=="Administrateur" || "$permission[7]"=='7'){ 
include("Connection.php");
$NT=$_GET['NT'];
$url=$_GET['url'];
$titre=$N104;
$titremsg=$N103;
$etat_up=mysql_query("delete from 	default_billing where nb='$NT'");
// echo "delete from default_facturation where nb='$NT'";
$pfx=$NT;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Gestion_Frais.php&titre=$titre&url=$url&msg=$succes&etat_up=$etat_up";


		?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
 <?php }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>