<?php
session_start();
$ref = $_GET['reference'];
$action = $_GET['action'];
$url=$_GET['url'];
$titre=$_GET['titre'];
$Com=$_GET['titre'];
$com=$_GET['texthisto'];
$message=$_GET['message'];
include ("Connection.php");
$Req=0;
if ($action == 'modifier'){
$link="MenuUtilisation.php?valeur=ModifCommande.php&titre=Modification d\'un bon commande&reference=$ref";
//include ("ModifCommande.php");
}
elseif ($action == 'supprimer' ){
$Req = mysql_query("delete from element_purchase where reference ='$ref';") ;
$Req = mysql_query("delete from purchase where reference ='$ref';") ;
}

$succes="error";
if($Req){    
$succes=$com.' : '.$ref.'  '.$message; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
if(isset($_GET['red'])){
$link="MenuUtilisation.php?valeur=AllCommandeNonConfirmer.php&titre=$titre&etat_up=$Req&msg=$succes";
}else{
$link="MenuUtilisation.php?valeur=AllCommande.php&titre=$titre&etat_up=$Req&url=$url&msg=$succes";
}
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>