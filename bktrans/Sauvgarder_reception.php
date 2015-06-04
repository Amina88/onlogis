<?php
session_start();
include ("Connection.php");
if(isset($_POST['ajour'])){
include ("Connection.php");
$cmd=$_POST['cmd'];
$DRC=$_POST['DRC'];
$com=$_GET['texthisto'];
$message=$_GET['message'];
$Reference=$_POST['Reference'];
if(isset($_POST['recept'])){
$etat_up=mysql_query("UPDATE  `purchase` SET  `Date_reception` =  '$DRC',Reference_four='$Reference' WHERE   `reference` =  '$cmd';") ;
}
$succes="error";
if($etat_up){    
$succes=$com.' : '.$message.'  '.$cmd; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=reception_factures.php&id=$cmd&etat_up=$etat_up&msg=$succes";
		?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php
		
		}
if(isset($_POST['attacher'])){
if(isset($_FILES['test']))
{ 

$prf='Fct';
$cmd=$_POST['cmd'];
     $dossier = 'bktrans_data/';
     $fichier = basename($_FILES['test']['name']);
	 $ext= $fichier;
	 $ex = explode('.',$ext);
$exe= $ex[1];

$nom=$prf.'_'.$cmd.'.'.$exe;
     if(move_uploaded_file($_FILES['test']['tmp_name'], $dossier .$nom )) 
     {
	 $etat_up=mysql_query("UPDATE  `purchase` SET  `file_facture` =  '$nom' WHERE  `purchase`.`reference` =  '$cmd';") ;
	 $link="MenuUtilisation.php?valeur=reception_factures.php&id=$cmd&etat_up=$etat_up";
		?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php
		
}}}

?>
