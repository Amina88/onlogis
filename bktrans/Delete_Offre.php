<?php
if("$permission[1]"=="Administrateur" || "$permission[6]"=='6'){ 
include ("Connection.php");
$idf=$_GET['id_offre'];
$url=$_GET['url'];
$titre=$_GET['titre'];	
$etat_up=mysql_query("delete from offre where id_offre='$idf'");
$pfx=$idf;
$succes="error";
$titremsg=$N18;
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=AllOffre.php&titre=$titre&url=$url&msg=$succes&etat_up=$etat_up";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
  <?php
}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>