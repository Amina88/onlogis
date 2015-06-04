
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recAjouterMateriel.php';
     if($etat){
	 //--------------
	
include ("Connection.php");
if(isset($_POST['sauvgarder'])){


$Nom=$_POST['Nom'];
$type=$_POST['type'];
$DC=$_POST['DC'];
$VA=$_POST['VA'];
$DV=$_POST['DV'];
$Desc=$_POST['description'];

$etat_up=mysql_query("insert into hardware values('','$Nom','$Desc','$type','$DC','$VA','$DV',NULL,NULL)");
$succes="";
if($etat_up){
$succes=$N67.' : '.$Nom.'  '.$N107;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=AllMatriel.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php

		}else{
		
require'views/viewAjouterMateriel.php';		
		
?>


<?php }} else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>