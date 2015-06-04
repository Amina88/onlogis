<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
?>

<?php
if("$permission[1]"=="Administrateur" || "$permission[5]"=='5'){ 
//Ajouter un client 
$url=$N14.".".$N15.".".$N17; 
$tt=$N17;
$titremsg=$N15; 
$Nom=$_GET['NomSoc'];
include ("Connection.php");
if($_GET['type']=='delete'){

$etat_up=mysql_query("delete from custemer where Nom_Soc='$Nom'") or die(mysql_error());
$pfx=$Nom;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}else{
$succes=$N124;
}
$link="MenuUtilisation.php?valeur=Allclient.php&titre=$tt&url=$url&msg=$succes&etat_up=$etat_up";
?>
<script type="text/javascript"> 
//document.location.href="<?php echo $link ; ?>";
  </script>
  <?php

}

}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
