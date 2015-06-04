<?php  
if("$permission[1]"=="Administrateur" || "$permission[11]"=='11'){
include ("Connection.php");


$id=$_GET['id'];
$url=$_GET['url'];
$titre=$_GET['titre'];
$etat=mysql_query("delete from  financial_period WHERE  `financial_period`.`id` =$id");

$pfx=$id;
$succes="error";
$titremsg=$N77; 
if($etat){    
$succes=$titremsg.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Financ_periode.php&titre=$titre&url=$url&msg=$succes&etat_up=$etat";

?>
<script type="text/javascript"> 
 document.location.href="<?php echo $link; ?>";
	
  </script>
<?php  }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>