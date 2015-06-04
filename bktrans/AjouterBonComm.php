<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
} 
require'includes/RecAjouterBonComm.php';
  if($etat){

include ("Connection.php");
$C=mysql_query("select * from groupe_account");
$ENV=mysql_query("select * from operation");
$LOG1=mysql_query("select *  from  location  ");
$LOG2=mysql_query("select *  from  logistics_services ");
$LOG3=mysql_query("select *  from   magasinage");
$s=mysql_query("select * from supplier");
$d=mysql_query("select * from files where etat_dossier='ouvert'");
$m=mysql_query("select * from currency where choix_monnai='1'");
$Mon=mysql_query("select * from currency ");
$Mn=mysql_query("select * from currency where choix_monnai='1'");
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);
if(isset($_POST['ajouterCommande'])){

$fournisseur=$_POST['Fournisseur'];
$doss=$_POST['Projet'];
$D=$_POST['Date'];
$DP=$_POST['Datep'];
$MN=$_POST['monnaie'];
$OP=$_POST['OP'];
$login=$_SESSION['login'];

$g=mysql_query("select * from currency where Monnaie_utliser=1 ");
$h=mysql_fetch_array($g);
$monnaie=$h[0];
$prefx=mysql_query("select * from  prefix where element='Commande' ");
$pref=mysql_fetch_array($prefx);
$a=mysql_query("select  * from  purchase where reference like '$pref[0]%'  ORDER BY reference  DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$typ=explode("$pref[0]",$t[0]);
if(isset($typ[1])){
$Cod = sprintf("%04d",$typ[1]+1);
}else{
$Cod = sprintf("%04d",1);

}
$Ref="$pref[0]".$Cod;
$reference=$_POST['Ref'];
$Max=$_POST['fieldsCount'];
$Maxi=0;
if(isset($_POST['Max'])){
$Maxi=$_POST['Max'];
}
$Resum=$_POST['textS'];
$desc = str_replace("'", "''",$Resum);
$payement=$_POST['payementF'];
$Remercie="";
$Remercie = str_replace("'", "''",$Remercie);
$autre_monnaie=$_POST['monnaie'];
$Change=$_POST['DFT'];


$PRD=mysql_query("select * from financial_period where etat=1 ");
$PR=mysql_fetch_array($PRD);
$dtd=explode('/',$D);
$dtf=explode('/',$DP);
If(!isset($dtd[1])  ){
$dtd=explode('-',$D);

}
If(!isset($dtf[1])  ){
$dtf=explode('-',$DP);

}$tst=1;
if($dtd[0]>$dtf[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";
}elseif($dtd[0]==$dtf[0]){
if($dtd[1]>$dtf[1]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";

}elseif($dtd[1]==$dtf[1]){
if($dtd[2]>$dtf[2]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";
}
}}

$PD=explode("-",$PR[2]);
$PF=explode("-",$PR[3]);
//Comparéson date debut *date commande
if($dtd[0]<$PD[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";
}elseif($dtd[0]==$PD[0]){
if($dtd[1]<$PD[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";

}elseif($dtd[1]==$PD[1]){
if($dtd[2] < $PD[2] || $dtd[2] == $PD[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";
}
}}

if($dtd[0]>$PF[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";
}elseif($dtd[0]==$PF[0]){
if($dtd[1]>$PF[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";

}elseif($dtd[1]==$PF[1]){
if($dtd[2] > $PF[2] || $dtd[2] == $PF[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterBonComm.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";
}
}}


if($tst==1){
//Echo "insert into purchase values('$Ref','$fournisseur','$doss','$desc','$D','$DP','0','$MN',0,'$Change',0,'$login','$monnaie','$OP','0','$reference','$PR[0]',NULL,NULL,0)";
$etat_up=mysql_query("insert into purchase values('$Ref','$fournisseur','$doss','$desc','$D','$DP','0','$MN',0,'$Change',0,'$login','$monnaie','$OP','0','$reference','$PR[0]',NULL,NULL,0)")or die(mysql_error());
for($i=1;$i<=$Max;$i++){
if(isset($_POST["Description".$i])){
$desc=$_POST["Description".$i];
$desc = str_replace("'", "''",$desc);
$qt=$_POST["qt".$i];
$prix=$_POST["prix".$i];
$TVA=$_POST["TVA".$i];
$monnaie=$_POST["monnaie".$i];
$devis=$_POST["devise".$i];
$compte=$_POST["Compte".$i];
$TVAA=explode('/',$TVA);
$etat_up=mysql_query("insert into element_purchase values ('$i','$Ref','$desc',$qt,'$prix','$monnaie','$devis','$TVAA[1]','$compte','$TVAA[0]',0);") or die(mysql_error());
}
}

$succes="error";
if($etat_up){    
$succes=$com.' : '.$Ref.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=AllCommandeNonConfirmer.php&titre=$tt&etat_up=$etat_up&url=$url&msg=$succes";
}
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
  <?php
}else{
	
require 'views/ViewAjouterBonComm.php';


} }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>

