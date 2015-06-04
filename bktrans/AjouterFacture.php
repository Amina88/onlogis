<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
include ("Connection.php");
require'includes/recFacture.php';
     if($etat){
	 


$C=mysql_query("select * from groupe_account");
$ENV=mysql_query("select * from operation");
$LOG1=mysql_query("select *  from  location  ");
$LOG2=mysql_query("select *  from  logistics_services ");
$LOG3=mysql_query("select *  from   magasinage");
$s=mysql_query("select * from custemer");
$d=mysql_query("select * from files where etat_dossier='ouvert'");
$m=mysql_query("select * from currency where choix_monnai='1'");
$Mon=mysql_query("select * from currency ");
$Mn=mysql_query("select * from currency where choix_monnai='1'");
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);

//--------------------------------------------------//
//Sauvgarde de Facture    //
//--------------------------------------------------//

if(isset($_POST['ajouterFacture'])){
$client=$_POST['client'];
$doss=$_POST['Projet'];
$D=$_POST['Date'];
$DP=$_POST['Datep'];
$MN=$_POST['monnaie'];
$OP=$_POST['OP'];
$g=mysql_query("select * from currency where Monnaie_utliser=1 ");
$h=mysql_fetch_array($g);
$monnaie=$h[0];
$prefx=mysql_query("select * from  prefix where element='Facture' ");
$pref=mysql_fetch_array($prefx);
$a=mysql_query("select  * from  invoice where id_facture like '$pref[0]%'  ORDER BY id_facture  DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$typ=explode("$pref[0]",$t[3]);
if(isset($typ[1])){
$Cod = sprintf("%04d",$typ[1]+1);
}else{
$Cod = sprintf("%04d",1);

}
$Ref="$pref[0]".$Cod;
$Refer=$_POST['Ref'];
$ETAT=$_POST['Sauvgarder'];
$Max=$_POST['fieldsCount'];
$Maxi=0;
if(isset($_POST['Max'])){
$Maxi=$_POST['Max'];
}
$DFT=$_POST['DFT'];
$Resum=$_POST['textS'];
$Resum = str_replace("'", "''",$Resum);
$payement=$_POST['payementF'];
$Remercie="";
$Remercie = str_replace("'", "''",$Remercie);
$autre_monnaie=$_POST['monnaie'];
$d_monnaie=$_POST['DFT'];


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
$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";
}elseif($dtd[0]==$dtf[0]){
if($dtd[1]>$dtf[1]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";

}elseif($dtd[1]==$dtf[1]){
if($dtd[2]>$dtf[2]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";
}
}}

$PD=explode("-",$PR[2]);
$PF=explode("-",$PR[3]);
//Comparéson date debut *date commande
if($dtd[0]<$PD[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";
}elseif($dtd[0]==$PD[0]){
if($dtd[1]<$PD[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";

}elseif($dtd[1]==$PD[1]){
if($dtd[2] < $PD[2] || $dtd[2] == $PD[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";
}
}}

if($dtd[0]>$PF[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";
}elseif($dtd[0]==$PF[0]){
if($dtd[1]>$PF[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";

}elseif($dtd[1]==$PF[1]){
if($dtd[2] > $PF[2] || $dtd[2] == $PF[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterFacture.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";
}
}}
if($tst==1){
$etat_up=mysql_query("insert into invoice values ('$Resum','$payement','$Remercie','$Ref','$doss','$client','$D','$DP','','$MN','$Refer','0','$autre_monnaie','$d_monnaie','0','0','$monnaie','$DFT','0','$OP','','','','','$PR[0]',$ETAT)")or die(mysql_error());

if($etat_up){
$offre=mysql_query("select * from offre where OPERATION='$OP' and validation=1");
$offr=mysql_fetch_array($offre);
if($offr[10]==NULL){
$idf=$offr[1];
$etat_up=mysql_query("update  offre  set id_facture='$Ref' where id_offre='$idf'");
}
$type = substr("$OP",0,3);
if($type=='LCT'){
mysql_query("update  location set facturation='oui' where Reference='$OP'");
}elseif($type=='EXP'){
mysql_query("update  export set Invoicing='oui' where id='$OP'");
}elseif($type=='IMP'){
mysql_query("update  import set Invoicing='oui' where id='$OP'");
}else{
$type = substr("$OP",0,2);
if($type=='LS'){
mysql_query("update  logistics_services set facturation='oui' where Reference='$OP'");
}else{
mysql_query("update  magasinage set facturation='oui' where Reference='$OP'");
}

}









}






}

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
$etat_up=mysql_query("insert into element_invoice values ($i,'$desc',$qt,'$prix','$TVAA[1]','$monnaie',$devis,'$Ref','$compte','$TVAA[0]',0)");
//echo "insert into element_Facture values ($i,'$desc',$qt,'$prix','$TVA','$monnaie',$devis,'$Ref','$compte')";
}
}

$succes="error";
if($etat_up){ 

if($ETAT){ 
  require 'JournalVente.php';
   }
  
}
$succes=$fct.' : '.$Ref.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");



$link="MenuUtilisation.php?valeur=AllFacture.php&titre=$N34&etat_up=$etat_up&url=$url&msg=$succes";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
  <?php
}else{
	
	
//--------------------------------------------------//
//Formulaire de création de Facture et ses elements //
//--------------------------------------------------//

require'views/viewFacture.php';
?>

<?php }} else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>