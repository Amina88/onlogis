<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
<?php 

$url2=$N14.".".$N103.".".$N104;
$titre=$N104;
$titremsg=$N103;
$finmsg=$N108;
include ("Connection.php");
if(isset($_GET['Sauvgarder'])){
$Desc=$_GET['Desc'];
$Var=$_GET['Var'];
$To=$_GET['To'];
$MN=$_GET['monnaie'];
$Val=$_GET['value'];
$Desc = str_replace("'", "''",$Desc);
$Var = str_replace("'", "''",$Var);
$To = str_replace("'", "''",$To);

$TN=$_SESSION['NT'];
$etat_up=mysql_query("Update default_billing  set 	description='$Desc',valeur='$Val',Monnaie='$MN',type='$To',variable='$Var' where nb=$TN");
$pfx=$TN;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$finmsg; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Gestion_Frais.php&titre=$titre&url=$url2&msg=$succes&etat_up=$etat_up";

		?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php		
		}else{
		
		require 'includes/recEditeFrais.php';
		if($etat){
		
		$NT=$_GET['NT'];
		$_SESSION['NT']=$NT;
		$Tax=mysql_query("select * from default_billing where nb='$NT'");
		$Tax=mysql_fetch_array($Tax);
require 'views/viewEditFrais.php'; 

}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php }} ?>