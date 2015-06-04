<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php

$titre=$N105;
$url=$N19.".".$N23.".".$N27.$N105;
$messg="";
$testpay=1;

$max=$_GET['max_com'];
$maxj=$_GET['max_fact'];
$NBMonaie=$_GET['max__tb_lng'];
$partener="";
if(isset($_GET['partener'])){
$partener=$_GET['partener'];
}
$date=date("Y/m/d");
$pay=array();
$tbAchat=array();
$tbVente=array();





for($cr=1;$cr<=$NBMonaie;$cr++){
$tbAchat=NULL;
$tbVente=NULL;
					
$TTPay=0;
$TTACH=0;
$TTVT=0;
$MN=$_GET["$cr"];
if(isset($_GET["ok$MN"])){
$Rest=$_GET['Rest'.$MN];
$MPB=$_GET['MPB'.$MN];

for($j=1;$j<=$max;$j++){
if(isset($_GET['com'.$j])&& isset($_GET[$MN.'cmdV'.$j])){
$COM=$_GET['cmd'.$j];
$VP=$_GET[$MN.'cmdV'.$j];
$tbAchat["$COM"]=$VP;
$TTACH=$TTACH+$VP;


}}

for($i=1;$i<=$maxj;$i++){
if(isset($_GET['fact'.$i]) && isset($_GET[$MN.'FCTV'.$i]) ){
$FCT=$_GET['factr'.$i];
$VP=$_GET[$MN.'FCTV'.$i];
$tbVente["$FCT"]=$VP;
$TTVT=$TTVT+$VP;

}}

if($MPB!=($Rest*-1)){
$testpay=0;
}else{
if(isset($_GET["Banque$MN"])){
$Banque=$_GET["Banque$MN"];
if(isset($_GET["devise$MN"])){
$devise=$_GET["devise$MN"];
}else{
$devise=1;
}
$bs=mysql_query("select sold ,decouvert from bank_account  where Numero_Compte='$Banque'");
$vbs=mysql_fetch_array($bs);
$SLD=($vbs[0]+$vbs[1])-($MPB*$devise);

if($SLD<0){
$testpay=0;
}
}
}
$pay["ach$cr"]=$tbAchat;
$pay["vant$cr"]=$tbVente;
$pay["val$cr"]=$MPB;
$pay["Monaie$cr"]=$MN;
}
$TTPay=$TTVT-$TTACH;



}
if($testpay==1){
$prefx=mysql_query("select * from  prefix where element='Avoir' ");
$pref=mysql_fetch_array($prefx);
for($cr=1;$cr<=$NBMonaie;$cr++){
if(isset($pay["ach$cr"])){
$acha=$pay["ach$cr"];
$vant=$pay["vant$cr"];
$val=$pay["val$cr"];
$MONIAE=$pay["Monaie$cr"];
if($val>=0){
 $Compte=mysql_query("select id from money where type='out' order by  id desc limit 0,1");
$banque=mysql_fetch_array($Compte);
$prefx=mysql_query("select * from  prefix where element='Argent_sortie' ");
$pref=mysql_fetch_array($prefx);

if(isset($banque[0])){
 $ex = explode("$pref[0]",$banque[0]);
 
 $id=sprintf("%07d",($ex[1]+1));
 $id=$pref[0].$id;
 }else{
  $id=sprintf("%07d",1);
 $id=$pref[0].$id;
 }
 $date=date("Y-m-d");
 $etat_up=mysql_query("insert into money values ('$id','','$date','out','','','$Banque','$val','0','$partener')")or die(mysql_error());
//echo "insert into money values ('$id','','$date','out','','','$Banque','$val','0','$partener')";
 $messg=$messg.",".$id;
 }
foreach($acha as $ID => $vp ){
$etat_up=mysql_query("insert into  allocate_paiment_purchase values('','$ID','$vp','$id');")or die(mysql_error());
$TYP=explode("$pref[0]",$ID);
if(isset($TYP[1])){
$evisee=mysql_query("select valeur_payer from invoice  where id_facture='$ID'");
$valeur=mysql_fetch_array($evisee);
$TT=$valeur[0]+$vp;
$TOT=mysql_query("select TOTAL from vueinvoicetotale  where facture='$ID'");
$TOTI=mysql_fetch_array($TOT);
if($TT>=$TOTI[0]){
$etat=1;
}else{
$etat=0;
}

$etat_up=mysql_query("update invoice set valeur_payer='$TT', etat_payement='$etat' where id_facture='$ID'")or die(mysql_error());
//echo "update invoice set valeur_payer='$TT', etat_payement='$etat' where id_facture='$ID'<br>";
}else{
$cm=mysql_query("select valeur_payer  from purchase  where reference='$ID'");
$coom=mysql_fetch_array($cm);
$TT=$coom[0]+$vp;
$TOT=mysql_query("select TOTAL_COM from vuepurchasetotale  where BonCommande='$ID'");
$TOTI=mysql_fetch_array($TOT);

if($TT>=$TOTI[0]){
$etat=1;
}else{
$etat=0;
}
$etat_up=mysql_query("update purchase set valeur_payer='$TT', etat_paiement='$etat' where reference='$ID'")or die(mysql_error());
//echo "update purchase set valeur_payer='$TT', etat_payement='$etat' where reference='$ID'<br>";
}

}
if($vant!=NULL){
foreach($vant as $ID => $vp ){
$etat_up=mysql_query("insert into  allocate_paiment_invoice values('','$ID','$vp','$id');")or die(mysql_error());
$TYP=explode("$pref[0]",$ID);
if(!isset($TYP[1])){
$evisee=mysql_query("select valeur_payer from invoice  where id_facture='$ID'");
$valeur=mysql_fetch_array($evisee);
$TT=$valeur[0]+$vp;
$TOT=mysql_query("select TOTAL from vueinvoicetotale  where facture='$ID'");
$TOTI=mysql_fetch_array($TOT);
if($TT>=$TOTI[0]){
$etat=1;
}else{
$etat=0;
}
$etat_up=mysql_query("update invoice set valeur_payer='$TT', etat_payement='$etat' where id_facture='$ID'")or die(mysql_error());
//echo "update invoice set valeur_payer='$TT', etat_payement='$etat' where id_facture='$ID'<br>";
}else{
$cm=mysql_query("select valeur_payer  from purchase  where reference='$ID'");
$coom=mysql_fetch_array($cm);
$TT=$coom[0]+$vp;
$TOT=mysql_query("select TOTAL_COM from vuepurchasetotale  where BonCommande='$ID'");
$TOTI=mysql_fetch_array($TOT);

if($TT>=$TOTI[0]){
$etat=1;
}else{
$etat=0;
}
//echo "update purchase set valeur_payer='$TT', etat_paiement='$etat' where reference='$ID'<br>";
$etat_up=mysql_query("update purchase set valeur_payer='$TT', etat_paiement='$etat' where reference='$ID'")or die(mysql_error());

}

}

}

$Banque=$_GET["Banque$MONIAE"];
if(isset($_GET["devise$MONIAE"])){
$devise=$_GET["devise$MONIAE"];
}else{
$devise=1;
}
$bs=mysql_query("select sold from bank_account  where Numero_Compte='$Banque'");
$vbs=mysql_fetch_array($bs);
$SLD=$vbs[0]-($val*$devise);

//echo "update  bank_account set sold='$SLD' where Numero_Compte='$Banque'<br>";
$etat_up=mysql_query("update  bank_account set sold='$SLD' where Numero_Compte='$Banque'")or die(mysql_error());
/* Insertion du Journal : Début*/

$date=date('Y-m-d');
 $ident_journal= mysql_query("select id from journal order by id desc limit 0,1  ");
 $idj=mysql_fetch_array($ident_journal);
$id_journal=$idj[0]+1;
$etat_up = mysql_query("insert into journal values($id_journal,'Paiement','$date','$id','$partener')") or die(mysql_error());

$BQ= mysql_query("select Nom_Banque,Monnaie from bank_account where  `Numero_Compte`='$Banque' ")or die(mysql_error());
   $Compt=mysql_fetch_array($BQ);
   $Curr= mysql_query("select Valeur_Devise from currency where  `Abreviation_Monnai`='$Compt[1]' ")or die(mysql_error());
   $Currency=mysql_fetch_array($Curr);
   $Montant=($val*$devise)*$Currency[0];
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compt[0]($Compt[1])' ")or die(mysql_error());
   $CComp=mysql_fetch_array($code);
 $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compt[0]($Compt[1])','$ID','$Montant','0',$id_journal,'1')") or die(mysql_error());

 $Fr= mysql_query("select compte from supplier where  `Nom_Soc`='$partener' ")or die(mysql_error());
   $Compte=mysql_fetch_array($Fr);
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compte[0]' ")or die(mysql_error());
   $CComp=mysql_fetch_array($code);
 $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compte[0]','$partener','0','$Montant',$id_journal,'0')") or die(mysql_error());
/* Fin*/
}
}
$succes="$N142";
if($etat_up){    
$succes=$N27.' : '.$N141.'   '.$messg; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=allocate_argent_BC.php&fournisseur=$partener&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";
}else{
$succes=$N27.' : '.$N153; 
$link="MenuUtilisation.php?valeur=allocate_argent_BC.php&fournisseur=$partener&titre=$titre&url=$url&etat_up=0&msg=$succes";
}








?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
