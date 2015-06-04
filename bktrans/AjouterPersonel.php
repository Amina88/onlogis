<?php 
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
<?php
}
require 'includes/RecAjouterPersonnel.php';
if($etat){
if(isset($_GET['Sauvgarder'])){

include ("Connection.php");
$nom=$_GET['nom'];
//$nom = str_replace("'", "''",$nom);
$email=$_GET['email'];
//$email = str_replace("'", "''",$email);
$sex=$_GET['sex'];
//$sex = str_replace("'", "''",$sex);
$tel1=$_GET['tel1'];
//$$tel1 = str_replace("'", "''",$tel1);
$cin=$_GET['CIN'];
// $cin = str_replace("'", "''",$cin);
$adress=$_GET['adress'];
$compte=$_GET['comptec'];
// $adress = str_replace("'", "''",$adress);
$Fonction=$_GET['Fonction'];
// $Fonction = str_replace("'", "''",$Fonction);
$bank=$_GET['bank'];
// $bank = str_replace("'", "''",$bank);
$Req="insert into personel values('$cin','$nom','$tel1','$adress','$sex','$email','$Fonction','$bank','$compte')";
$etat_up=mysql_query($Req);

$pfx=$cin;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=ListePersonels.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";

	?>
 <script type="text/javascript"> 

document.location.href="<?php echo $link; ?>";
	
  </script>
 
<?php


	
}else{
		
require 'views/ViewAjouterPersonnel.php';
?>
	

<?php }} else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>