<?php
include ("Connection.php");
$s=mysql_query("select id from export order by id desc limit 0,1 ");
$s1=mysql_fetch_array($s);

$typ=explode('EXP',$s1[0]);
if(ISSET($typ[1])){
$Cod = sprintf("%04d",$typ[1]+1);
}else{
$Cod = sprintf("%04d",1);
}
$Code = "EXP".$Cod;
$doss=$_GET['Projet'];
$client=$_GET['client'];

$Ref=$_GET['Ref_client'];

$Dat=date('Y-m-d');
$Type=$_GET['BL'];
$ETA=$_GET['ETA'];
$ETD=$_GET['ETD'];

$EXO='non';
$terme_op="";
$Objet="";
$NP=$_GET['NP'];

$Dest=$_GET['Destination'];
$Orig=$_GET['Origine'];
$SL=$_GET['SL'];
$VF=$_GET['VF'];
$Monnaie=$_GET['monnaie1'];
$Devise1=$_GET['devise1'];
$VFT=$_GET['VFT'];
$monnaieTrans=$_GET['monnaieTrans'];
$DeviseTrans=$_GET['deviseTrans'];
$Fournisseur=$_GET['four'];
$Reference=$_GET['Ref'];
$Disig_comrc=$_GET['Dcomm'];
$Num_decl_douane=$_GET['Num_dec'];
$Trancking=$_GET['Tracking'];
$Facture="non";
$Exportation="Exportation Temporaire";
$apprnt="";
$type_exportation=$_GET['Ree'];
$Declaration="";
$type_operation=$_GET['type'];
if($type_exportation=='RE'){
$Exportation="REEXPORTATION";
$EXO='oui';
$app=$_GET['IMP'];
if($app=="Nan"){
$apprnt=$_GET['Num_dec_imp'];
}else{
$apprnt=$_GET['IMP'];
}
}elseif($type_exportation=='ED'){
$Exportation="Exportation Definitive";

}
$req="insert into export (`id`, `Ref_doss`, `client`,`Reference_Client`, `Date`, `type`, `ETD`, `ETA`, `Exnoration`, `Enelvement_direct`, `Invoicing`, `Terme_operation`, `Dimenssion`, `type_objet`, `Num_piece`, `Origine`, `Destination`, `Shipping_line`, `Valeur_facturee`, `Monnaie_facture`, `Taux_val_fact`, `valeur_trans`, `Monnaie_trans`, `taux_trans`, `Fournisseur`, `Reference`, `Designation_comercial`, `Num_declaration_douane`, `Num_appurement`, `Tracking`, `type_operation`,`fiche_exonoration`, `Num_exonoration`, `num_exportation`,`type_exportation`,`exportation`) values ('$Code','$doss','$client','$Ref','$Dat','$Type','$ETD','$ETA','$EXO','','$Facture','$terme_op','','$Objet','$NP','$Orig','$Dest','$SL','$VF','$Monnaie','$Devise1','$VFT','$monnaieTrans','$DeviseTrans','$Fournisseur','$Reference','$Disig_comrc','$Num_decl_douane','$apprnt','$Trancking','$type_operation','','$Declaration','','$type_exportation','$Exportation')";
$s=mysql_query($req)OR DIE(mysql_error());
if($s==1){
if(isset($_GET["offre"])){
$idoffre=$_GET["offre"];
$s=mysql_query("update offre set `OPERATION`='$Code',validation=1 where  id_offre='$idoffre'");
}

$j=0;
for($i=0;$i<$NP;$i++){

if(isset($_GET["QT$i"])){
$j++;
$pt=$_GET["PT$i"];
$qt=$_GET["QT$i"];
$d1=$_GET["dim1$i"];
$d2=$_GET["dim2$i"];
$d3=$_GET["dim3$i"];
$Objet=$_GET["Objet$i"];
$d6=$_GET["Num$i"];
$d7=$_GET["CP$i"];
$d=$d1.'x'.$d2.'x'.$d3;
$reqq="insert into  piece_export values($j,'$pt','$d','$qt','$Code','$d6','$d7','$Objet')"; 
$s=mysql_query($reqq)OR DIE(mysql_error());;
}
}
}
if($s){
$msg=$N8.' : '.$Code.'  '.$N107;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}else{
$msg="";
}
$link="MenuUtilisation.php?valeur=AllOperation.php&titre=$N9&url=$N4.$N8.$N9&etat_up=$s&msg=$msg";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ?>";
  </script>
  