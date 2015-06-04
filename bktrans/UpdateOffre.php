<?php
if("$permission[1]"=="Administrateur" || "$permission[6]"=='1'){ 
$url=$N14.".".$N18.".".$N64;
$titre=$N64;
$msg1=$N131;
$titremsg=$N18;
$doc = new DOMDocument(); 

$doc->load($_SESSION['lang_out_Manu']);  
$employees= $doc->getElementsByTagName("out_Menu");  
				

foreach( $employees as $employee ) 
{ 

  $V17 = $employee->getElementsByTagName( "e17" );  $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" );  $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" );  $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" );  $N20 = $V20->item(0)->nodeValue;

 
include ("Connection.php");

$idf=$_SESSION['id_facture'];
$client=$_POST['client'];
$doss=$_POST['Projet'];
$DA=$_POST['Date'];
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
$Remercie = str_replace("'", "\'",$Remercie);
$autre_monnaie=$_POST['monnaie'];
$d_monnaie=$_POST['DFT'];

$PRD=mysql_query("select * from financial_period where etat=1 ");
$PR=mysql_fetch_array($PRD);
//Test Date
$dtd=explode('/',$DA);
$dtf=explode('/',$DP);

If(!isset($dtd[1])  ){
$dtd=explode('-',$DA);
}
If(!isset($dtf[1])  ){
$dtf=explode('-',$DP);

}
$tst=1;
if($dtd[0]>$dtf[0]){
$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N17&id_Facture=$idf";
}elseif($dtd[0]==$dtf[0]){
if($dtd[1]>$dtf[1]){
$tst=0;
$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N17&id_Facture=$idf";
}elseif($dtd[1]==$dtf[1]){
if($dtd[2]>$dtf[2]){
$tst=0;
$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N17&id_Facture=$idf";
}
}}
$PD=explode("-",$PR[2]);
$PF=explode("-",$PR[3]);
//Comparéson date debut *date commande
if($dtd[0]<$PD[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N18&id_Facture=$idf";
}elseif($dtd[0]==$PD[0]){
if($dtd[1]<$PD[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N18&id_Facture=$idf";

}elseif($dtd[1]==$PD[1]){
if($dtd[2] < $PD[2] || $dtd[2] == $PD[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N18&id_Facture=$idf";
}
}}

if($dtd[0]>$PF[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N19&id_Facture=$idf";
}elseif($dtd[0]==$PF[0]){
if($dtd[1]>$PF[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N19&id_Facture=$idf";

}elseif($dtd[1]==$PF[1]){
if($dtd[2] > $PF[2] || $dtd[2] == $PF[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=ModifierOffre.php&titre=$N20&etat_up=0&msg=$N19&id_Facture=$idf";
}
}}

if($tst==1){
$etat_up=mysql_query("insert into invoice values ('$Resum','$payement','$Remercie','$Ref','$doss','$client','$DA','$DP','','$MN','$Refer','0','$autre_monnaie','$d_monnaie','0','0','$monnaie','$DFT','0','$OP','','','','','$PR[0]','1')");
 if($etat_up==1){
 for($i=1;$i<=$Max;$i++){
$desc=str_replace("'", "\'",$_POST["Description".$i]);
$qt=$_POST["qt".$i];
$prix=$_POST["prix".$i];
$TVA=$_POST["TVA".$i];
$monnaie=$_POST["monnaie".$i];
$devis=$_POST["devise".$i];
$compte=$_POST["Compte".$i];
$TVAA=explode('/',$TVA);

$etat_up=mysql_query("insert into element_invoice values ($i,'$desc',$qt,'$prix','$TVAA[1]','$monnaie',$devis,'$Ref','$compte','$TVAA[0]',0)");
}
 }
 if($etat_up==1){
$etat_up=mysql_query("update  offre  set id_facture='$Ref' where id_offre='$idf'");
$off=mysql_query("select * from  offre  where id_offre='$idf'");
$admin=mysql_fetch_array($off);
$type=$admin[15];
if($type=='LC'){
mysql_query("update  location set facturation='oui' where Reference='$OP'");
}elseif($type=='LS'){
mysql_query("update  logistics_services set facturation='oui' where Reference='$OP'");
}elseif($type=='MG'){
mysql_query("update  magasinage set facturation='oui' where Reference='$OP'");
}else{
$type=explode("EXP",$OP);
if(isset($type[1])){
mysql_query("update  export set Invoicing='oui' where id='$OP'");
}else{
mysql_query("update  import set Invoicing='oui' where id='$OP'");
}}

}

$pfx=$idf;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$msg1; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=AllOffre.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$succes";

}

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
  <?php
  }
}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>