<?php 
include ("Connection.php");

$num_compte=$_SESSION['num_compte'];
 $Compte=mysql_query("select id from transfer_money order by  id desc limit 0,1");
$banque=mysql_fetch_array($Compte);

$prefx=mysql_query("select * from  prefix where element='Virement' ");
$pref=mysql_fetch_array($prefx);
if(isset($banque[0])){
 $ex = explode("$pref[0]",$banque[0]);
 
 $id=sprintf("%07d",($ex[1]+1));
 $id=$pref[0].$id;
 }else{
  $id=sprintf("%07d",1);
 $id=$pref[0].$id;
 }
if(isset($_POST['client'])){
$client=$_POST['client'];
}
$description=$_POST['description'];
$valeur=$_POST['Valeur'];
$method=$_POST['methodpayement'];
$dest=$_POST['destination'];
$devise=1;
if(isset($_POST['devise'])){
$devise=$_POST['devise'];
}
$NC=explode('&&&',$dest);
$dest=$NC[0];
	$url=$_POST['urlA'];
$titre=$_POST['titre'];
$date=$_POST['Date'];
$sold=mysql_query("select sold from bank_account  where Numero_Compte='$num_compte'");
$solde=mysql_fetch_array($sold);
$sold=$solde[0]-$valeur;
$destina=mysql_query("select sold from bank_account where Numero_Compte='$dest'");
$destinat=mysql_fetch_array($destina);
$valeur=$valeur*$devise;
$nouv=$destinat[0]+$valeur;
$e=mysql_query("update bank_account set  sold='$nouv' where Numero_Compte='$dest'");
$a=mysql_query("update bank_account  set sold='$sold' where Numero_Compte='$num_compte'");
$etat_up=mysql_query("insert into transfer_money values ('$id','$description','$date','$dest','$method','$num_compte','$valeur')");
if($etat_up){    
$succes=$N136.' : '.$id.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=AllCompte.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";


?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
