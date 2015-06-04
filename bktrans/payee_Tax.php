<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } 
  $url=$N19.".".$N72.".".$N72;
  $titre=$N72;
  $msgg="";
  foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" ); $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" ); $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" ); $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" ); $N20 = $V20->item(0)->nodeValue;
  
  $Mn=mysql_query("select * from currency where Monnaie_utliser=1 ");
$Curr=mysql_fetch_array($Mn);
$D=date("Y-m-d");
$login=$_SESSION['login'];
 $NBTAX=$_GET['leng_tax'];
 $max=$_GET['max_CP'];
 $test_e=1;
 $pay=array();
$tbAchat=array();
$tbVente=array();
$TTPay=0;
$TTACH=0;
$TTVT=0;
for($i=1;$i<=$NBTAX;$i++){
$tbAchat=NULL;
$tbVente=NULL;
$Tax=$_GET["TX$i"];
if(isset($_GET["ok$Tax"])){
$Rest=$_GET['Rest'.$Tax];
$MPB=$_GET['MPB'.$Tax];
$Rest;
for($j=1;$j<=$max;$j++){
if(isset($_GET['selct'.$j])){
if(isset($_GET['IdA'.$Tax.$j])){
$COM=$_GET['IdA'.$Tax.$j];
$VP=$_GET['A'.$Tax.$j];
$tbAchat["$COM"]=$VP;
$TTACH=$TTACH+$VP;

}else{
if(isset($_GET['IdV'.$Tax.$j])){
$FCT=$_GET['IdV'.$Tax.$j];
$VP=$_GET['V'.$Tax.$j];
$tbVente["$FCT"]=$VP;
$TTVT=$TTVT+$VP;

}
}


}


}
if($tbVente!=0){
$AV=mysql_query("select * from  prefix where element='Avoir' ");
$AVR=mysql_fetch_array($AV);

$pay["ach$i"]=$tbAchat;
$pay["vant$i"]=$tbVente;
$pay["val$i"]=$Rest;
$pay["Tax$i"]=$Tax;
}else{
$test_e=0;
}
}
  
  
  }
  

if($test_e==1){
$PRD=mysql_query("select * from financial_period where etat=1 ");
$PR=mysql_fetch_array($PRD);
$prefx=mysql_query("select * from  prefix where element='Avoir' ");
$pref=mysql_fetch_array($prefx);
for($i=1;$i<=$NBTAX;$i++){
$Tax=$_GET["TX$i"];
if(isset($_GET["ok$Tax"])){
$acha=$pay["ach$i"];
$vant=$pay["vant$i"];
$val=$pay["val$i"];
$Tax=$pay["Tax$i"];

$a=mysql_query("select  id from  payement_tax  ORDER BY id  DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
if(isset($t[0])){
$Cod = sprintf("%04d",$t[0]+1);
}else{
$Cod = sprintf("%04d",1);

}
$Id_Tax=$Cod;
if($val<0){
$Prix=$val;
$Code=mysql_query("select code_comptable  from  tax where Nom_tax='$Tax' ");
$CC=mysql_fetch_array($Code);
$prefx=mysql_query("select * from  prefix where element='Commande' ");
$pref=mysql_fetch_array($prefx);
$a=mysql_query("select  reference from  purchase  ORDER BY reference  DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$typ=explode("$pref[0]",$t[0]);
if(isset($typ[1])){
$Cod = sprintf("%04d",$typ[1]+1);
}else{
$Cod = sprintf("%04d",1);

}
$fournisseur=$_GET["Fournisseur$Tax"];
$doss=$_GET["Projet$Tax"];
$Ref="$pref[0]".$Cod;
$desc=$N1.' '.$Tax;
$Prix=$val*-1;

$etat_up=mysql_query("insert into purchase values('$Ref','$fournisseur','$doss','$desc','$D','$D','0','$Curr[0]',0,'1',1,'$login','$Curr[0]','','0','','$PR[0]','$D',NULL,1)");
$etat=mysql_query("insert into element_purchase values ('1','$Ref','$Tax',1,'$Prix','$Curr[0]','1','0','$CC[0]','',0);");
}
$etat_up=mysql_query("insert into payement_tax values('$Id_Tax','$Tax','$Prix','$D','$Ref')");
$msgg=$Id_Tax.','.$msgg;
if($acha!=NULL){
foreach($acha as $ID => $vp ){
$etat_up=mysql_query("insert into payment_tax_invoice values('$ID','$Id_Tax','$vp')");
$TYP=explode("$AVR[0]",$ID);
if(!isset($TYP[1])){
$etat_up=mysql_query("update element_purchase set etat_pay_tax='1' where Type_tax='$Tax' AND reference='$ID'");
//echo "update element_purchase set etat_pay_tax='1' where Type_tax='$Tax' AND reference='$ID'<br>";
}else{
$etat_up=mysql_query("update element_invoice set etat_pay_tax='1' where Type_tax='$Tax' AND Reference='$ID'");
//echo "update element_invoice set etat_pay_tax='1' where Type_tax='$Tax' AND Reference='$ID'<br>";
}}}
foreach($vant as $ID => $vp ){
$TYP=explode("$AVR[0]",$ID);
$etat_up=mysql_query("insert into payment_tax_purchase values('$ID','$Id_Tax','$vp')")or die(mysql_error());

if(isset($TYP[1])){
$etat_up=mysql_query("update element_purchase set etat_pay_tax='1' where Type_tax='$Tax' AND reference='$ID'");
//echo "update element_purchase set etat_pay_tax='1' where Type_tax='$Tax' AND reference='$ID'<br>";

}else{
$etat_up=mysql_query("update element_invoice set etat_pay_tax='1' where Type_tax='$Tax' AND Reference='$ID'");
//echo "update element_invoice set etat_pay_tax='1' where Type_tax='$Tax' AND Reference='$ID'<br>";

}
}



}}
if($etat_up){    
$succes=$N72.' : '.$N143.'   '.$msgg; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=AllTax.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";
}else{
$link="MenuUtilisation.php?valeur=AllTax.php&titre=$titre&url=$url&etat_up=0&msg=$N2";
}
  
  
}

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>