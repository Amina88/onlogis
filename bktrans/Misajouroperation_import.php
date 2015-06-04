
<?php 
include("Connection.php");
$test_mail=0;
$test_up=0;
$doss=$_POST['Projet'];
$url=$_POST['ttl'];
$client=$_POST['client'];
$page=$_POST['page'];
$Ref_client=$_POST['Ref_client'];
//$Poid=$_POST['PT'];
//$Dat=$_POST['Date'];
$BL=$_POST['BL'];
$ETD=$_POST['ETD'];
$ETA=$_POST['ETA'];
//$QT=$_POST['QT'];
if(isset($_POST['Exo'])){
$EXO=$_POST['Exo'];
}
//$Dim=$_POST['Dim'];
$enlv="";
$enlvdt="";
$DS="";
$DSdt="";
$TR="";
$TRdt="";
$AR="";
$ARdt="";
$DE="";
$DEdt="";
$LV="";
$LVdt="";
if(isset($_POST['enlv'])){
$enlv=$_POST['enlv'];
$enlvdt=$_POST['enlvdt'];


}
if(isset($_POST['DS'])){
$DS=$_POST['DS'];
$DSdt=$_POST['DSdt'];

}
if(isset($_POST['TS'])){
$TR=$_POST['TS'];
$TRdt=$_POST['TSdt'];

}if(isset($_POST['AR'])){
$AR=$_POST['AR'];
$ARdt=$_POST['ARdt'];

}if(isset($_POST['DE'])){
$DE=$_POST['DE'];
$DEdt=$_POST['DEdt'];

}if(isset($_POST['LV'])){
$LV=$_POST['LV'];
$LVdt=$_POST['LVdt'];

}

//$Objet=$_POST['Objet'];
$NP=$_POST['NP'];
$Dest=$_POST['Destination'];
$Orig=$_POST['Origine'];
$SL=$_POST['SL'];
$VF=$_POST['VF'];
$Monnaie=$_POST['MN'];
$Devise1=$_POST['devise1'];
$VFT=$_POST['VFT'];
$monnaieTrans=$_POST['MNT'];
$DeviseTrans=$_POST['deviseTrans'];
$Fournisseur=$_POST['four'];
$Reference=$_POST['Ref'];
$Disig_comrc=$_POST['Dcomm'];
$id=$_POST['id'];
$Enlevement="";
if(isset($_POST['En'])){
$Enlevement=$_POST['En'];
}
$s=mysql_query("select *  from import  WHERE  `id` ='$id'");
$admin=mysql_fetch_array($s);
$Trancking=$admin[30];

$Facture=$_POST['facturation'];
$app='';
$Num_dec='';
if(isset($_POST['Num_dec'])){
$Num_dec=$_POST['Num_dec'];
}
if(isset($_POST['apurement'])){
$app=$_POST['apurement'];
}
if(isset($_POST['typ_Exo'])){
$type_exo=$_POST['typ_Exo'];
$test="`type_exo`='$type_exo',";
}else{
$test="";
}

$date=date('l j F Y, H:i');
if($_POST['Tracking_neuv']!=""){
$msg =$Trancking."&!!&".$date."|!!|".$_POST['Tracking_neuv'];
}else{
$msg =$Trancking;
}
$a=0;
$add=$msg;
$add = str_replace("'", "''",$add);
//$sujet = $_POST['Sujet'];
$message =$msg; 
$STWEB=$_POST['siteweb'];
$ENT=mysql_query("select * from `entreprise`");
$ENTR=mysql_fetch_array($ENT);
$expediteur = $ENTR[4];
if(isset($_POST['RDUP'])){
$RNV=$_POST['RDUP'];
$EXP=$_POST['EDUP'];
$idad=$_POST['idd'];
$test_up=mysql_query("update expiration_admission set Date_renovation='$RNV' ,Date_expiration='$EXP' where id='$idad'");
}elseif(isset($_POST['RDN'])){
$RNV=$_POST['RDN'];
$EXP=$_POST['EDN'];
$test_up=mysql_query("INSERT INTO expiration_admission VALUES(NULL,'$id','$RNV','$EXP')");
}
$test_up=mysql_query("UPDATE `import` SET  `Ref_doss` =  '$doss',`client` =  '$client',`Refernce_Client` =  '$Ref_client',`type` =  '$BL',`ETD` =  '$ETD',`ETA` =  '$ETA',`Exnoration` =  '$EXO',`Enelvement_direct` =  '$Enlevement',`Invoicing` =  '$Facture',`Origine` =  '$Orig',`Destination` =  '$Dest',`Shipping_line` =  '$SL',`Valeur_facturee` =  '$VF',`Monnaie_facture` =  '$Monnaie',`Taux_val_fact` =  '$Devise1',`valeur_trans` =  '$VFT',`Monnaie_trans` =  '$monnaieTrans',`taux_trans` =  '$DeviseTrans',`Fournisseur` =  '$Fournisseur',`Reference` =  '$Reference',`Designation_comercial` =  '$Disig_comrc',`Num_declaration_douane` =  '$Num_dec',`Num_appurement` =  '$app',`Tracking` =  '$add',$test`url`='$STWEB',`Enlevement_date`='$enlvdt',`Douane_S_date`='$DSdt',`Transport_date`='$TRdt',`Arrive_date`='$ARdt',`Douane_E_date`='$DEdt',`Livraison_date`='$LVdt',`Enlevement` =  '$enlv',`Douane_S` =  '$DS',`Transport` =  '$TR',`Arrive` =  '$AR',`Douane_E` =  '$DE',`Livraison` =  '$LV' WHERE  `import`.`id` ='$id';")or die(mysql_error()) ;
$nbelemnt=mysql_query("select * from  piece_import where id_operation='$id'");
$nbel=0;
while($elmnt=mysql_fetch_array($nbelemnt)){
$nbel++;
}
for($i=1;$i<=$nbel;$i++){
$pt=$_POST["PT$i"];
$idI=$_POST["$i"];

$qt=$_POST["QT$i"];
$d1=$_POST["dim1$i"];
$d2=$_POST["dim2$i"];
$d3=$_POST["dim3$i"];
$Objet=$_POST["Objet$i"];
$d6=$_POST["Num$i"];
$d7=$_POST["CP$i"];
$d=$d1.'x'.$d2.'x'.$d3;
$reqq="update piece_import set Poids='$pt',Dimension='$d',Quantite='$qt',Numero_contener='$d6',Poid_chargeable='$d7',Objet='$Objet' where id='$idI' AND id_operation='$id'"; 

$s=mysql_query($reqq)or die(mysql_error()) ;
}
$nbel++;

$j=$nbel;
for($i=$nbel;$i<=$NP;$i++){

if(isset($_POST["QT$i"])){

$j++;
$pt=$_POST["PT$i"];
$qt=$_POST["QT$i"];
$d1=$_POST["dim1$i"];
$d2=$_POST["dim2$i"];
$d3=$_POST["dim3$i"];
$Objet=$_POST["Objet$i"];
$d6=$_POST["Num$i"];
$d7=$_POST["CP$i"];
$d=$d1.'x'.$d1.'x'.$d1;
$reqq="insert into  piece_import values($j,'$pt','$d','$qt','$id','$d6','$d7','$Objet')"; 
$s=mysql_query($reqq)OR DIE(mysql_error());;
}
}
if($s){
$msg=$N8.' : '.$id.'  '.$N108;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}ELSE{
$msg="";
}


$client = str_replace('&','%26',$client);
$link="MenuUtilisation.php?valeur=detailleoperation.php&page=$page&titre=$page Freight Import($id,$client)&id=$id&type_operation=Ocean&etat_up=$test_up&url=$url&msg=$msg";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ;?>";
	
  </script>