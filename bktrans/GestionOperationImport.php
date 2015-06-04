<?php
include ("Connection.php");
$s=mysql_query("select id from import order by id desc limit 0,1 ");
$s1=mysql_fetch_array($s);
$NP=$_GET['NP'];
$typ=explode('IMP',$s1[0]);
if(ISSET($typ[1])){
$Cod = sprintf("%04d",$typ[1]+1);
}else{
$Cod = sprintf("%04d",1);

}
$QT="";
$Poid="";
for($i=0;$i<$NP;$i++){
if(isset($_GET["QT$i"])){
$pt=$_GET["PT$i"];
$qt=$_GET["QT$i"];
$QT=$QT+$qt;
$Poid=$Poid+$pt;
}
}

$Code = "IMP".$Cod;
$doss=$_GET['Projet'];
$client=$_GET['client'];
$Ref=$_GET['Ref_client'];
$Dat="";
$ETA=$_GET['ETA'];;
$ETD=$_GET['ETD'];;
$Dat=date("Y-m-d");
$BL=$_GET['BL'];
$EXO=$_GET['Exo'];
$OS="";
$IT="";
$LS="";
$autre_service="";
if(isset($_GET['OS'])){
$OS=$_GET['OS'];
}
if(isset($_GET['IT'])){
$IT=$_GET['IT'];
}
if(isset($_GET['LS'])){
$LS=$_GET['LS'];
}
if(isset($_GET['autre_service'])){
$autre_service=$_GET['autre_service'];
}
$Objet="";

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
$Enlevement=$_GET['Enlevement'];
$Trancking=$_GET['Tracking'];
$Facture='non';
$app='';
$type_dec=$_GET['type_dec'];
if(isset($_GET['app'])){
$app=$_GET['app'];
}
$type_exo=$_GET['type_exo'];
$tp=$_GET['type'];

$req="insert into `import` VALUES ('$doss','$client','$Ref','$Dat','$BL',0,'$ETD','$ETA','$EXO','$Enlevement','$Facture','$Code','$OS/$IT/$LS/$autre_service','','$Objet','$NP','$Orig','$Dest','$SL','$VF','$Monnaie','$Devise1','$VFT','$monnaieTrans',$DeviseTrans,'$Fournisseur','$Reference','$Disig_comrc','','','$Trancking','','','','','','','','','','$tp','$type_dec','$app','$type_exo','','$QT','import','0','0','0','0','0','0')";


$s=mysql_query($req);
if($s){
if(isset($_GET["offre"])){
$idoffre=$_GET["offre"];
$s=mysql_query("update offre set `OPERATION`='$Code',validation=1 where  id_offre='$idoffre'");
}
}
if($s==1){
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
$reqq="insert into  piece_import values($j,'$pt','$d','$qt','$Code','$d6','$d7','$Objet')"; 
$s=mysql_query($reqq);
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