<?php
include ("Connection.php");
$client=$_GET['client'];
$s=mysql_query("select * from default_billing");
$i=0;
while($df=mysql_fetch_array($s)){
$i++;
if(isset($_GET['etat'.$df[0]])){
$nb=$_GET['etat'.$df[0]];
$val=$_GET['val'.$df[0]];
echo $val;
$req=mysql_query("SELECT * FROM  `costs_value` where Numro=$nb AND client='$client'");
$ad=mysql_fetch_array($req);
if($ad[0]==NULL){
$req=mysql_query("insert into`costs_value` values($nb,'$client','$val',1)");
}else{
$req=mysql_query("update `costs_value` set valeur=$val where Numro=$nb AND client='$client'");
}
}else{
$req=mysql_query("delete from `costs_value` where Numro=$i AND client='$client'");

}
$link="MenuUtilisation.php?valeur=detailleClient.php&Nom_Soc=$client&titre=$client%20en%20d%E9taille&etat_up=$req";








}










?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>