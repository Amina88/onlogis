<?php 
if("$permission[1]"=="Administrateur" || "$permission[10]"=='10'){ 
include ("Connection.php");
						  
$NP=$_POST['NP'];
$SB=$_POST['SB'];
$IF=$_POST['IF'];
$IL=$_POST['IL'];
$IT=$_POST['IT'];
$IEE=$_POST['IEE'];
$IR=$_POST['IR'];
$PE=$_POST['PE'];
$TB=$_POST['TB'];
$CNSS=$_POST['CNSS'];
$CNAM=$_POST['CNAM'];
$MI=$_POST['MI'];
$ITS=$_POST['ITS'];
$TR=$_POST['TR'];
$AV=$_POST['AV'];
$SN=$_POST['SN'];
$AN=$_POST['AN'];
$MS=$_POST['MS'];
$MN=$_POST['MN'];
$MS=sprintf("%02d",$MS);
$Aug=$_POST['Augmant'];

$etat_up=mysql_query("insert into salaried values ('$NP','$SB','$Aug','$IF','$IL','$IT','$IEE','$IR','$PE','$TB','$CNSS','$CNAM','$MI','$ITS','$TR','$AV','$SN','$MS','$AN','0','$MN')");
$url=$_GET['url'];
$tt=$_GET['titre'];

$titremsg=$N115; 
$pfx=$NP;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=formulaire_salaire.php&titre=$tt&url=$url&etat_up=$etat_up&msg=$succes";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
<?php }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>