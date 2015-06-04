<?php
include ("Connection.php");
$id=$_GET['id'];
if(isset($_GET['expcopie'])){
$s=mysql_query("select id from export order by id desc limit 0,1 ");
$s1=mysql_fetch_array($s);

$typ=explode('EXP',$s1[0]);
if(ISSET($typ[1])){

$Cod = sprintf("%04d",$typ[1]+1);
}else{
$Cod = sprintf("%04d",1);
}
$Code = "EXP".$Cod;
$s2=mysql_query("select `id`, `Ref_doss`, `client`,`Reference_Client`, `Date`, `type`, `Poids`, `ETD`, `ETA`, `Exnoration`, `Enelvement_direct`, `Invoicing`, `Terme_operation`, `Dimenssion`, `type_objet`, `Num_piece`, `Origine`, `Destination`, `Shipping_line`, `Valeur_facturee`, `Monnaie_facture`, `Taux_val_fact`, `valeur_trans`, `Monnaie_trans`, `taux_trans`, `Fournisseur`, `Reference`, `Designation_comercial`, `Num_declaration_douane`, `Num_appurement`, `Tracking`, `type_operation`,`fiche_exonoration`, `Num_exonoration`, `num_exportation`,`type_exportation`,`exportation` from export  where  id='$id' ");
$s1=mysql_fetch_array($s2);

$req="insert into export(`id`, `Ref_doss`, `client`,`Reference_Client`, `Date`, `type`, `Poids`, `ETD`, `ETA`, `Exnoration`, `Enelvement_direct`, `Invoicing`, `Terme_operation`, `Dimenssion`, `type_objet`, `Num_piece`, `Origine`, `Destination`, `Shipping_line`, `Valeur_facturee`, `Monnaie_facture`, `Taux_val_fact`, `valeur_trans`, `Monnaie_trans`, `taux_trans`, `Fournisseur`, `Reference`, `Designation_comercial`, `Num_declaration_douane`, `Num_appurement`, `Tracking`, `type_operation`,`fiche_exonoration`, `Num_exonoration`, `num_exportation`,`type_exportation`,`exportation`) values ('$Code','$s1[1]','$s1[2]','$s1[3]','$s1[4]','$s1[5]','$s1[6]','$s1[7]','$s1[8]','$s1[9]','$s1[10]','$s1[11]','$s1[12]','$s1[13]','$s1[14]','$s1[15]','$s1[16]','$s1[17]','$s1[18]','$s1[19]','$s1[20]','$s1[21]','$s1[22]','$s1[23]','$s1[24]','$s1[25]','$s1[26]','$s1[27]','$s1[28]','$s1[29]','$s1[30]','$s1[31]','$s1[32]','$s1[33]','$s1[34]','$s1[35]','$s1[36]')";

$dup=mysql_query($req)or die(mysql_error());;

$ps=mysql_query("select * from  piece_export where id_operation='$id' ");
$i=0;
while($pss=mysql_fetch_array($ps)){
$i++;
$dup=mysql_query("insert into  piece_export values ($i,'$pss[1]','$pss[2]','$pss[3]','$Code','$pss[5]','$pss[6]','$pss[7]')")or die(mysql_error());

}
$page=$_GET['page'];
$tp=$_GET['type_operation'];
$url=$_GET['url'];
$tt=$_GET['titre'];
if($dup){
$msg=$Code.'  '.$N107;
$msg=$N8.' : '.$Code.'  '.$N107;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}else{
$msg="";
}
$link="MenuUtilisation.php?valeur=DetailOperationExport.php&page=$page&id=$Code&type_operation=$tp&url=$url&titre=$tp($Code,$s1[2]) &tb=export&duppliquer&etat_up=$dup&msg=$msg";
}elseif(isset($_GET['impcopie'])){
$s3=mysql_query("select id from import order by id desc limit 0,1 ");
$s4=mysql_fetch_array($s3);
$typ=explode('IMP',$s4[0]);
if(ISSET($typ[1])){
$Cod = sprintf("%04d",$typ[1]+1);
}else{
$Cod = sprintf("%04d",1);
}
$Code = "IMP".$Cod;

$s=mysql_query("select * from import  where  id='$id'  ");
$s1=mysql_fetch_array($s);
$req="insert into import values ('$s1[0]','$s1[1]','$s1[2]','$s1[3]','$s1[4]','$s1[5]','$s1[6]','$s1[7]','$s1[8]','$s1[9]','$s1[10]','$Code','$s1[12]','$s1[13]','$s1[14]','$s1[15]','$s1[16]','$s1[17]','$s1[18]','$s1[19]','$s1[20]','$s1[21]','$s1[22]','$s1[23]','$s1[24]','$s1[25]','$s1[26]','$s1[27]','$s1[28]','$s1[29]','$s1[30]','$s1[31]','$s1[32]','$s1[33]','$s1[34]','$s1[35]','$s1[36]','$s1[37]','$s1[38]','$s1[39]','$s1[40]','$s1[41]','$s1[42]','$s1[43]','$s1[44]','$s1[45]','$s1[46]','$s1[47]','$s1[48]','$s1[49]','$s1[50]','$s1[51]','$s1[52]')";

$dup=mysql_query($req)or die(mysql_error());;

$ps=mysql_query("select * from  piece_import where id_operation='$id' ");
$i=0;
while($pss=mysql_fetch_array($ps)){
$i++;
$dup=mysql_query("insert into  piece_import values ($i,'$pss[1]','$pss[2]','$pss[3]','$Code','$pss[5]','$pss[6]','$pss[7]')")or die(mysql_error());

}
$page=$_GET['page'];
$tp=$_GET['type_operation'];
$url=$_GET['url'];
$tt=$_GET['titre'];
if($dup){
$msg=$N8.' : '.$Code.'  '.$N107;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}else{
$msg="";
}

$link="MenuUtilisation.php?valeur=detailleoperation.php&page=$page&id=$Code&type_operation=$tp&url=$url&titre=$tp Import($Code,$s1[1]) &tb=import&duppliquer&etat_up=$dup&msg=$msg";

}elseif(isset($_GET['fctcopie'])){
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
$datelanc=date('Y-m-d');
$s=mysql_query("select * from invoice  WHERE id_facture='$id' ORDER BY rang DESC LIMIT 0,1 ");
$a=mysql_fetch_array($s);
	$element=mysql_query("select * from element_invoice where Reference='$id'");
	
	$req="insert into invoice values('$a[0]','$a[1]','$a[2]','$Ref','$a[4]','$a[5]','$datelanc','$datelanc','0','$a[9]','$a[10]',0,'$a[12]','$a[13]','$a[14]',NULL,'$a[16]','$a[17]',0,'$a[19]','$a[20]','$a[21]','$a[22]','$a[23]','$a[24]',0)";

		$t=mysql_query($req)or die(mysql_error());
		while($ELM=mysql_fetch_array($element)){
	$etat="insert into element_invoice values ('$ELM[0]','$ELM[0]','$ELM[2]','$ELM[3]','$ELM[4]','$ELM[5]','$ELM[6]','$Ref','$ELM[8]','$ELM[9]',0)";
$t=mysql_query($etat)or die(mysql_error());
	
	}
	if($t){
$msg=$N20.' : '.$Ref.'  '.$N107;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}else{
$msg="";

}
$titre=$_GET['titre'].'  '.$Ref;
$url=$_GET['url'];
$link="MenuUtilisation.php?valeur=ModifierFacture.php&id_Facture=$Ref&titre=$titre&url=$url&etat_up=$t&msg=$msg";

}

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ?>";
  </script>