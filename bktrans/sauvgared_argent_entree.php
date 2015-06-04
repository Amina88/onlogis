<?php 
include ("Connection.php");
$num_compte=$_POST['Compte'];
 $Compte=mysql_query("select id from money where type='in' order by  id desc limit 0,1");
$banque=mysql_fetch_array($Compte);

$prefx=mysql_query("select * from  prefix where element='Argent_entrer' ");
$pref=mysql_fetch_array($prefx);
if(isset($banque[0])){
 $ex = explode("$pref[0]",$banque[0]);
 
 $id=sprintf("%07d",($ex[1]+1));
 $id=$pref[0].$id;
 }else{
  $id=sprintf("%07d",1);
 $id=$pref[0].$id;
 }
 $client="";
if(isset($_POST['client'])){
$client=$_POST['client'];
}
$description=$_POST['description'];
$description = str_replace("'", "''",$description);
$valeur=$_POST['Valeur'];
$method=$_POST['methodpayement'];
$date=$_POST['Date'];
$url=$_POST['urlA'];
$titre=$_POST['titre'];

$destina=mysql_query("select sold from bank_account where Numero_Compte='$num_compte'");
$destinat=mysql_fetch_array($destina);
$nouv=$destinat[0]+$valeur;
$etat_up=mysql_query("update bank_account set  sold='$nouv' where Numero_Compte='$num_compte'")or die(mysql_error());
$etat_up=mysql_query("insert into money values ('$id','$description','$date','in','','$method','$num_compte','$valeur','$valeur','$client')")or die(mysql_error());;
$succes="error";
if($etat_up){    
$succes=$N135.' : '.$id.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=AllCompte.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
