<?php
include ("Connection.php");
$id = $_POST['id'];
$page = $_POST['page'];
$thp = $_POST['thp'];
$table = $_POST['tble'];
$url = $_POST['urll'];
$doss=$_POST['Projet'];
$client=$_POST['client'];
$Ref=$_POST['Ref_client'];
//$Poid=$_POST['PT'];
//$Dat=$_POST['Date'];
$Type=$_POST['BL'];
$ETA=$_POST['ETA'];
$ETD=$_POST['ETD'];
$EXO=$_POST['Exo'];
//$Dim=$_POST['Dim'];
$terme_op="";
//$Objet=$_POST['Objet'];
$NP=$_POST['NP'];
$Dest=$_POST['Destination'];
$Orig=$_POST['Origine'];
$SL=$_POST['SL'];
$VF=$_POST['VF'];
$MNF=$_POST['MN'];
$Devise1=$_POST['devise1'];
$VFT=$_POST['VFT'];
$MNT=$_POST['MNT'];
$DeviseTrans=$_POST['deviseTrans'];
$Fournisseur=$_POST['four'];
$Reference=$_POST['Ref'];
$Disig_comrc=$_POST['Dcomm'];
$Num_decl_douane=$_POST['Num_dec'];
$apurement=$_POST['apurement'];
$Tracking=$_POST['Tracking'];
$STWEB=$_POST['siteweb'];
$date=date('Y-m-d,H:m');
$s=mysql_query("select *  from export  WHERE  `id` ='$id'");
$admin=mysql_fetch_array($s);
$Trancking=$admin[30];
if($Tracking!=""){

$msg =$Trancking."&!!&".$date."|!!|".$Tracking;
}else{
$msg =$Trancking;
}
$a=0;
$add=$msg;
$add = str_replace("'", "''",$add);
$Facture=$_POST['facturation'];
$Exportation=$_POST['exportation'];
//$type_exportation=$_POST['type_exportation'];
$track = $Tracking;
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

$s=mysql_query("UPDATE `export` SET `Ref_doss`='$doss',`client`='$client',`Reference_Client`='$Ref',`type`='$Type',`ETD`='$ETD',`ETA`='$ETA',`Exnoration`='$EXO',`Invoicing`='$Facture',`Origine`='$Orig',`Destination`='$Dest',`Shipping_line`='$SL',`Valeur_facturee`='$VF',`Monnaie_facture`='$MNF',`Taux_val_fact`='$Devise1',`valeur_trans`='$VFT',`Monnaie_trans`='$MNT',`taux_trans`='$DeviseTrans',`Fournisseur`='$Fournisseur',`Reference`='$Reference',`Designation_comercial`='$Disig_comrc',`Num_declaration_douane`='$Num_decl_douane',`Num_appurement`='$apurement',`Tracking`='$add',`url`='$STWEB',`Enlevement_date`='$enlvdt',`Douane_S_date`='$DSdt',`Transport_date`='$TRdt',`Arrive_date`='$ARdt',`Douane_E_date`='$DEdt',`Livraison_date`='$LVdt',`fiche_exonoration`='',`Num_exonoration`='',`num_exportation`='',`exportation`='$Exportation' ,`Enlevement` =  '$enlv',`Douane_S` =  '$DS',`Transport` =  '$TR',`Arrive` =  '$AR',`Douane_E` =  '$DE',`Livraison` =  '$LV' WHERE id='$id';") or die(mysql_error());

$nbelemnt=mysql_query("select * from  piece_export where id_operation='$id'");
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
$reqq="update piece_export set Poids='$pt',Dimension='$d',Quantite='$qt',Numero_contener='$d6',Poid_chargeable='$d7',Objet='$Objet' where id='$idI' AND id_operation='$id'"; 

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
$reqq="insert into  piece_export values($j,'$pt','$d','$qt','$id','$d6','$d7','$Objet')"; 
$s=mysql_query($reqq)OR DIE(mysql_error());;
}
}
if($s){
$msg=$N8.' : '.$id.'  '.$N108;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:m:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}ELSE{
$msg="";
}


$client = str_replace('&','%26',$client);
$link="MenuUtilisation.php?valeur=DetailOperationExport.php&page=$page&titre=$thp&type_operation=$table&id=$id&etat_up=$s&url=$url&msg=$msg";




?>
<script type="text/javascript"> 
document.location.href="<?php echo "$link" ;?>";
	
  </script>
