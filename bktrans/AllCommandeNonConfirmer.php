
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/RecAllCommandeNonConfirmer.php';
  if($etat){
?>
<?php

include ("Connection.php");
if(isset($_GET['reference'])){
$mail= $_SESSION['login'];
$date = date("Y-m-d H:i:s");
$heure = date("H:i");
$dt="le $date à $heure";
$Ref=$_GET['reference'];
$etat_up=0;
//echo $_GET['action'];
if($_GET['action']=='supprimer'){
$Raison=$_POST['raison'];
$etat_up=mysql_query("insert into notification value (insert into notification value ('$mail','$Raison','$date','0','','$Ref')");
$etat_up=mysql_query("delete from purchase  where reference='$Ref'");
$succes="error";
if($etat_up){    
$succes=$N11.' : '.$Ref.'  '.$N126."<br>".'  '.$Raison; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
}else{
$v=$_GET['action'];
$etat_up=mysql_query("update purchase set confirmation=$v where reference='$Ref'");
if(isset($_POST['raison'])){
$Raison=$_POST['raison'];
$etat_up=mysql_query("insert into notification value ('$mail','$Raison','$date','-1','','$Ref')");
$succes="error";
if($etat_up){    
$succes=$N11.' : '.$Ref.'  '.$N127."<br>".'  '.$Raison; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
}else{
$etat_up=mysql_query("insert into notification value ('$mail','','$date','1','','$Ref')");
$succes="error";
if($etat_up){    
$succes=$N11.' : '.$Ref.'  '.$N128; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
}
}
$url=$_GET['url'];
$titre=$_GET['titre'];
$valeur=$_GET['valeur2'];
$link="MenuUtilisation.php?valeur=$valeur.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$succes";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
<?php
}else{
$s=mysql_query("select * from purchase where confirmation!=1 order by reference Desc ");

require 'views/ViewAllCommandeNonConfirmer.php';
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
		
	<?php } } else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
