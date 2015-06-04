<?php
if("$permission[1]"=="Administrateur" || "$permission[12]"=='12'){ 
include("Connection.php");
$mail=$_GET['email'];
$url=$_GET['url'];
$titre=$N38;
$titremsg=$N38;
$etat_up=mysql_query("delete from users where Email='$mail'");
$pfx=$mail;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}

$link="MenuUtilisation.php?valeur=AllUser.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$succes";
		?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
<?php }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	