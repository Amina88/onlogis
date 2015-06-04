<?php
include ("Connection.php");
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}

$url=$_POST['urlP'];
$titre=$_POST['titre'];
$mn=$_POST['MN'];
$test_pay=1;
$Ref=$_POST['Ref'];
$Ref=$_POST['Ref'];
$Arg=$_POST['Arg'];
$msg=$_POST['msg'];
$urlP=$_POST['urlP'];
$titre=$_POST['titre'];
$compte=$_POST['compte'];
$neuv_arg=$Arg;
$client=$_POST['client'];

if(isset($_POST['type_BC'])){
$maxA=$_POST['ttA'];
$maxC=$_POST['ttC'];
for($id=1;$id<=$maxA;$id++){
$idF=$_POST['IDF'.$id];
$VPA=$_POST['VPA'.$id];
$Arg=$Arg-$VPA;
if($Arg<0){
$test_pay=0;
}
if($test_pay==1){
$devise=1;
if(isset($_POST['devise'.$idF])){
$devise=$_POST['devise'.$idF];
}
$VP=$VPA*$devise;
$TOT=mysql_query("select TOTAL from vueinvoicetotale  where facture='$idF'");
$TOTI=mysql_fetch_array($TOT);

$VPAYE=mysql_query("select valeur_payer from invoice  where id_facture='$idF'");
$V=mysql_fetch_array($VPAYE);
$VPP=$V[0]+$VP;
$rest=$TOTI[0]+$VPP;

if($rest<0){$etat=0;}else{$etat=1;}
if($VP>0){
 $s3=mysql_query("update invoice set valeur_payer=$VPP ,etat_payement=$etat where id_facture='$idF'");
$s3=mysql_query("insert into  allocate_paiment_invoice values('','$idF','$VP','$Ref')");
//echo "update invoice set valeur_payer=$VPP ,etat_payement=$etat where id_facture='$idF'";
//echo "insert into  allocate_paiment_invoice values('','$idF','$VP','$Ref')";
}
}
}
for($id=1;$id<=$maxC;$id++){
$idC=$_POST['IDC'.$id];
$VPA=$_POST['VP'.$id];
$Arg=$Arg-$VPA;
if($Arg<0){
$test_pay=0;
}
if($test_pay==1){
$devise=1;
if(isset($_POST['devise'.$idC])){
$devise=$_POST['devise'.$idC];
}
$VP=$VPA*$devise;
$TOT=mysql_query("select TOTAL_COM from vuepurchasetotale  where BonCommande='$idC'");
$VPAYE=mysql_query("select valeur_payer from purchase  where reference='$idC'");
$TOTI=mysql_fetch_array($TOT);
$V=mysql_fetch_array($VPAYE);
$VPP=$V[0]+$VP;
$rest=$VPP-$TOTI[0];
if($rest<0){$etat=0;}else{$etat=1;};
if($VP>0){

 $s3=mysql_query("update purchase set valeur_payer=$VPP ,etat_paiement=$etat where reference='$idC'");
$s3=mysql_query("insert into  allocate_paiment_purchase values('','$idC','$VP','$Ref')");
//ECHO "update purchase set valeur_payer=$VPP ,etat_paiement=$etat where reference='$idC'";
//echo "insert into  allocate_paiment_purchase values('','$idC','$VP','$Ref')";

}

}}
 $s3=mysql_query("update money set MN_Non_allue=$Arg where id='$Ref'");
/* Insertion du Journal : Début*/

$date=date('Y-m-d');
 $ident_journal= mysql_query("select id from journal order by id desc limit 0,1  ");
 $idj=mysql_fetch_array($ident_journal);
$id_journal=$idj[0]+1;
$etat_up = mysql_query("insert into journal values($id_journal,'Paiement','$date','$Ref','$client')") or die(mysql_error());
$Mony=mysql_query("select * from  money  where id='$Ref'");
$Mon=mysql_fetch_array($Mony);
$BQ= mysql_query("select Nom_Banque,Monnaie from bank_account where  `Numero_Compte`='$Mon[6]' ")or die(mysql_error());
   $Compt=mysql_fetch_array($BQ);
   $Curr= mysql_query("select Valeur_Devise from currency where  `Abreviation_Monnai`='$Compt[1]' ")or die(mysql_error());
   $Currency=mysql_fetch_array($Curr);
   $Montant=($neuv_arg-$Arg)*$Currency[0];
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compt[0]($Compt[1])' ")or die(mysql_error());
   $CComp=mysql_fetch_array($code);
 $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compt[0]($Compt[1])','$Mon[1]','$Montant','0',$id_journal,'1')") or die(mysql_error());

 $Fr= mysql_query("select compte from supplier where  `Nom_Soc`='$client' ")or die(mysql_error());
   $Compte=mysql_fetch_array($Fr);
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compte[0]' ")or die(mysql_error());
   $CComp=mysql_fetch_array($code);
 $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compte[0]','$client','0','$Montant',$id_journal,'0')") or die(mysql_error());
/* Fin*/

// l'allocation des factures
}else{
$client=$_POST['client'];
$mn=$_POST['MN'];
$test_pay=1;
$Ref=$_POST['Ref'];
$Arg=$_POST['Arg'];
$msg=$_POST['msg'];
$urlP=$_POST['urlP'];
$titre=$_POST['titre'];
$compte=$_POST['compte'];
$neuv_arg=$Arg;
$maxA=$_POST['ttA'];
$maxC=$_POST['ttC'];
for($id=1;$id<=$maxA;$id++){
$idF=$_POST['IDF'.$id];
$VPA=$_POST['VPA'.$id];
$Arg=$Arg-$VPA;
if($Arg<0){
$test_pay=0;
}
if($test_pay==1){
$devise=1;
if(isset($_POST['devise'.$idF])){
$devise=$_POST['devise'.$idF];
}
$VP=$VPA*$devise;
$TOT=mysql_query("select TOTAL from vueinvoicetotale  where facture='$idF'");
$TOTI=mysql_fetch_array($TOT);

$VPAYE=mysql_query("select valeur_payer from invoice  where id_facture='$idF'");
$V=mysql_fetch_array($VPAYE);
$VPP=$V[0]+$VP;
$rest=$TOTI[0]-$VPP;
if($rest>0){$etat=0;}else{$etat=1;}

if($VP>0){
 $s3=mysql_query("update invoice set valeur_payer=$VPP ,etat_payement=$etat where id_facture='$idF'");
//echo"update invoice set valeur_payer=$VPP ,etat_payement=$etat where id_facture='$idF'<br>";
$s3=mysql_query("insert into  allocate_paiment_invoice values('','$idF','$VP','$Ref')");

 //echo"insert into  allocate_paiment_invoice values('','$idF','$VP','$Ref')<br>";
}
}
}
for($id=1;$id<=$maxC;$id++){
$idC=$_POST['IDC'.$id];
$VPA=$_POST['VP'.$id];
$Arg=$Arg-$VPA;
if($Arg<0){
$test_pay=0;
}
if($test_pay==1){
$devise=1;
if(isset($_POST['devise'.$idC])){
$devise=$_POST['devise'.$idC];
}
$VP=$VPA*$devise;
$TOT=mysql_query("select TOTAL_COM from vuepurchasetotale  where BonCommande='$idC'");
$VPAYE=mysql_query("select valeur_payer from purchase  where reference='$idC'");
$TOTI=mysql_fetch_array($TOT);
$V=mysql_fetch_array($VPAYE);
$VPP=$V[0]+$VP;
$rest=$TOTI[0]+$VPP;

if($rest<0){$etat=0;}else{$etat=1;};

if($VP>0){

$s3=mysql_query("update purchase set valeur_payer=$VPP ,etat_paiement=$etat where reference='$idC'");
$s3=mysql_query("insert into  allocate_paiment_purchase values('','$idC','$VP','$Ref')");
//ECHO "update purchase set valeur_payer=$VPP ,etat_paiement=$etat where reference='$idC'";
//echo "insert into  allocate_paiment_purchase values('','$idC','$VP','$Ref')";
}


}}
$s3=mysql_query("update money set MN_Non_allue=$Arg where id='$Ref'");
// echo "update money set MN_Non_allue=$Arg where id='$Ref'";
/* Insertion du Journal : Début*/

$date=date('Y-m-d');
 $ident_journal= mysql_query("select id from journal order by id desc limit 0,1  ");
 $idj=mysql_fetch_array($ident_journal);
$id_journal=$idj[0]+1;
$etat_up = mysql_query("insert into journal values($id_journal,'Paiement','$date','$Ref','$client')") or die(mysql_error());
$Mony=mysql_query("select * from  money  where id='$Ref'");
$Mon=mysql_fetch_array($Mony);
$BQ= mysql_query("select Nom_Banque,Monnaie from bank_account where  `Numero_Compte`='$Mon[6]' ")or die(mysql_error());
   $Compt=mysql_fetch_array($BQ);
   $Curr= mysql_query("select Valeur_Devise from currency where  `Abreviation_Monnai`='$Compt[1]' ")or die(mysql_error());
   $Currency=mysql_fetch_array($Curr);
   $Montant=($neuv_arg-$Arg)*$Currency[0];
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compt[0]($Compt[1])' ")or die(mysql_error());
   $CComp=mysql_fetch_array($code);
 $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compt[0]($Compt[1])','$Mon[1]','0','$Montant',$id_journal,'1')") or die(mysql_error());

 $Fr= mysql_query("select compte from custemer where  `Nom_Soc`='$client' ")or die(mysql_error());
   $Compte=mysql_fetch_array($Fr);
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compte[0]' ")or die(mysql_error());
   $CComp=mysql_fetch_array($code);
 $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compte[0]','$client','$Montant','0',$id_journal,'0')") or die(mysql_error());
/* Fin*/





}

	$succes="error";
if($test_pay){    
$succes=$N26.' : '.$N137.'   '.$Ref; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=allocate_argent.php&ref=$Ref&client=$client&etat_up=$test_pay&titre=$titre&compte=$compte&url=$url&msg=$succes";


?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
