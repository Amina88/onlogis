
<?php
session_start();
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
?>
<script type="text/javascript">
function load(){

javascript:document.body.contentEditable='true'; document.designMode='on'; void 0

}
</script>
<style type="text/css" media="print"> 
#noimprime{ 
display:none; 
}

</style>
</head>
<body id="body">
<?php 
include("Connection.php");
$id=$_GET['id'];
$s=mysql_query("select *  from import  WHERE  `id` ='$id'");
$admin=mysql_fetch_array($s);
$date=date("d.m.Y");
$DC=$admin[27];
$QT=$admin[45];
$TO=$admin[14];
$PT=$admin[5];
$ABC=$_GET['code'];
$VF=$admin[19];
$VFT=$admin[22];
$T1=$admin[21];
$MN1=$admin[20];
$T2=$admin[24];
$MN2=$admin[23];
$Fourni=$admin[25];
$Ref=$admin[26];
$dat=$admin[3];
$code=$admin[4];
$client=$admin[1];
$loi="";
$mail="";
$CLT=mysql_query("select * from custemer where Nom_Soc='$client'");
while($cl=mysql_fetch_array($CLT)){
$loi=$cl[1];
$mail=$cl[5];
}
$Ent=mysql_query("select * from entreprise");
$entt=mysql_fetch_array($Ent);

$tot= number_format(($VF*$T1)+($VFT*$T2),2,',','.');
if($_GET['option']=='attexn'){
$a=mysql_query("select * from exonoration ORDER BY Reference DESC LIMIT 0 , 1");
$Delv=mysql_query("select * from exonoration ORDER BY Ref_Delivry DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$Dlv=mysql_fetch_array($Delv);
$nembre=$t[0]+1;
$DLV=$Dlv[0]+1;
$Code = sprintf("%06d",$nembre);
$Code_dlv = sprintf("%06d",$DLV);
$b=mysql_query("insert into  exonoration (Reference) values($nembre)");
$string1 ='BKTRANS';
$needle = 'BK';
$needle_len = strlen($needle);
$position_num = strpos($string1,$needle) + $needle_len;
$result_string = substr($string1,$position_num);
$pfx=$needle.($result_string +1);

?><br><br><br>
<center><h3>ATTESTATION EXONORATION N°: BK<?php echo $Code;?>/14</h3>
<h4>il n'est pas attesté que les marchandises suivantes:</h4></center>
<br>
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="20"><tr>
<td>&nbsp;Désignation commerciale et quantité<br>&nbsp;<?php echo $DC;?>&nbsp;&nbsp;: <?php echo $QT;?><br>&nbsp;poids &nbsp;:&nbsp; <?php echo $PT;?>&nbsp;<br> &nbsp;<?php echo $ABC;?>&nbsp;:&nbsp;<?php echo $code."<br>"; if($admin[14]=='conteneur'){
echo "&nbsp;$admin[14] N°:".$admin[15]."<br>";}
?> &nbsp;BK-Trans &nbspPC&nbsp;:&nbsp;<?php  echo $client ;?>&nbsp;</td>
<td>&nbsp;valeur facturée&nbsp;:&nbsp;<?php echo number_format($VF,2,',','.');?>&nbsp;<?php echo $MN1;?><br>
<?php
 if($admin[22]!=Null){echo "&nbsp;valeur Fret&nbsp;:&nbsp".number_format($admin[22],2,',','.')."&nbsp;".$MN2; 
 echo "<br>";}
  ?>

&nbsp;valeur en MRO &nbsp;:&nbsp;<?php echo $tot ;?>&nbsp;MRO<br>&nbsp;reference de la facture&nbsp;:&nbsp;<?php echo $Ref ;?>&nbsp;<br>&nbsp;Fournisseur&nbsp;:<?php echo $Fourni ;?>&nbsp;<br> &nbsp;Date&nbsp;:<?php echo $dat ;?>&nbsp;</td>
</tr></table>
1)-Sont destinées à&nbsp;:&nbsp;<?php  echo $client ;?>&nbsp;
<br>
2)-sont importées dans le cadre(barrer les deux cadres inadéquants).
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="20"><tr>
<td>&nbsp;code<br> &nbsp;des investissements <br><br></td>
<td>&nbsp;D'un financement exterieur:<br> &nbsp;Etat ou organisation de financement<br>&nbsp;intitulé du projet&nbsp;:&nbsp;<?php  echo $client ;?>&nbsp; <br>&nbsp;Numéro de projet</td>
<td>&nbsp;D'UN EXEMPTION<br>&nbsp;CONDITIONNELLE ET<br>&nbsp;EXCEPTIONELLE DU TARIF<br>&nbsp;DOUANE</td>
</tr></table>
3)-Sont exonorées par le texe ou réglement suivant&nbsp;:&nbsp;<b><?php  echo $loi ;?>&nbsp;</b>
<br><br><br><br>
<b>4)-(Eventuellement )font l'objet du marche ou du contrat n° __________________ en date du _____________________</b>
<br>
<b>5)- Si les  marchandises sont de nature de celles qui ont été déja exonorees dnas le  cadre du meme projet.</b><br>indiquer ici les quantites.
<br><br><br>
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="20"><tr>
<td>&nbsp;<b>Total prévu par les &nbsp;textes</b><br></br></td>
<td>&nbsp;<b>ayant déja fait l'objet &nbsp;d'exonoration</b><br></br></td>
<td>&nbsp;<b>N° de reférence Aux &nbsp;attestaions</b><br></br></td>
<td>&nbsp;<b>Objet de la &nbsp;présente</b><br></br></td>
<td>&nbsp;<b>Disponible pour &nbsp;l'avenir</b><br></br></td>
</tr></table><br>
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="20"><tr>
<td>&nbsp;Cadre réservé à la direction des douanes<br>&nbsp;............................................<br>&nbsp;N° ____________ /RS/______________DGD
<br> &nbsp;Bon pour valoir en exonoration de tous droits et taxes 
des douanes <BR> à l'importation de&nbsp;<?php  echo $QT ;?>&nbsp;<br>&nbsp;
 <?php  echo $DC ;?>&nbsp;,Objet de la facture&nbsp;
 N° <?php  echo $Ref ;?>&nbsp;<BR>en date du <?php  echo $dat ;?>&nbsp;  ci-jointe<br>&nbsp;
  visée par la direction Générale des Douanes.<br><br>&nbsp;
 Fait a Nouakchott,le <?php echo $date;?><br><h5>&nbsp;&nbsp;&nbsp;&nbsp;LE DIRECTEUR DES REGIMES ECONOMIQUE ET DES PRIVILEGES<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L'INSPECTEUR <br>&nbsp; &nbsp;Abdellahi ould alioun Bouhoum</h5>
<br><br><br><br><br><br><br><br><br><br><br><br>
 </td>
<td><b>Signature,cachet,nom et fonction du signature
</b>
<br><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo "&nbsp;DEMANDEUR&nbsp;:&nbsp;".$client ;?></h5><br><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
DIRECTION GENERALE<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  DES HYDRAUCARBURES<br><br><br><br><br><br><br><br><br> <br><br><br><br>

</td>

</tr></table>
<div id="noimprime"> 
<button onclick="window.print();"><img src="images/imprimante18x18.png"  alt="" title="Imprimer cette page"> 
</button></div> 
<?php  }elseif($_GET['option']=='attext'){
$a=mysql_query("select * from exonoration ORDER BY Reference DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$nembre=$t[0]+1;
$Code = sprintf("%06d",$nembre);
$b=mysql_query("insert into  exonoration values($nembre)");
$string1 ='BKTRANS';
$needle = 'BK';
$needle_len = strlen($needle);
$position_num = strpos($string1,$needle) + $needle_len;
$result_string = substr($string1,$position_num);
$pfx=$needle.($result_string +1);

?><br><br><br>
<center><h3> ATTASTATION EXONORATION TAMPORAIRE N°: BK<?php echo $Code;?>/14</h3>
<h4>il n'est pas attesté que les marchandises suivates:</h4></center>

<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="20"><tr>
<td>&nbsp;Désignation commerciale et quantité<br>&nbsp;<?php echo $DC;?>&nbsp; &nbsp;: <?php echo $QT;?><br>&nbsp;poids &nbsp;:&nbsp; <?php echo $PT;?>&nbsp; Kgs<br> &nbsp;<?php echo $ABC;?>&nbsp;:&nbsp;<?php echo $code."<br>"; if($admin[15]!=''){
echo "$admin[14] N°:".$admin[15]."<br>";}
?> &nbsp;BK-Trans &nbspPC&nbsp;:&nbsp;<?php  echo $client ;?>&nbsp;</td>
<td>&nbsp;valeur facturée&nbsp;:&nbsp;<?php echo number_format($VF,2,',','.')."&nbsp;".$MN1;?><br>
<?php
 if($admin[22]!=Null){echo "&nbsp;valeur Fret&nbsp;:&nbsp".number_format($admin[22],2,',','.')."&nbsp;".$MN2;  
 echo"<br>";}
  ?>
  
  &nbsp;valeur en MRO&nbsp;:&nbsp;<?php echo $tot ;?>&nbsp;MRO<br>&nbsp;reference de la facture&nbsp;:&nbsp; N°<?php echo $Ref ;?>&nbsp;<br>&nbsp;Fournisseur&nbsp;:<?php echo $Fourni ;?>&nbsp;<br> &nbsp;Date&nbsp;:<?php echo $dat ;?>&nbsp;</td>
</tr></table>
1)-Sont destinées à&nbsp;:&nbsp;<?php  echo $client ;?>&nbsp;
<br>
2)-sont importées dans le cadre(barrer les deux cadres inadéquants).
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="20"><tr>
<td>&nbsp;code<br> &nbsp;des investissements <br><br></td>
<td>&nbsp;D'un financement exterieur:<br> &nbsp;Etat ou organisation de financement<br>&nbsp;intitulé du projet&nbsp;:&nbsp;<?php  echo $client ;?>&nbsp; <br>&nbsp;Numéro de projet</td>
<td>&nbsp;D'UN EXEMPTION<br>&nbsp;CONDITIONNELLE ET<br>&nbsp;EXCEPTIONELLE DU TARIF<br>&nbsp;DOUANE</td>
</tr></table>
3)-Sont exonorées par le texe ou réglement suivant&nbsp;:&nbsp;<b><?php  echo $loi ;?>&nbsp;</b>
<br><br><br><br>
<b>4)-(Eventuellement )font l'objet du marche ou du contrat n° __________________ en date du _____________________</b>
<br>
<b>5)- Si les marchandises sont de nature de celles qui ont été déja exonorees dnas le  cadre du meme projet.</b><br>indiquer ici les quantites.
<br><br><br>
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="20"><tr>
<td>&nbsp;<b>Total prévu par les &nbsp;textes</b><br><br></td>
<td>&nbsp;<b>ayant déja fait l'objet &nbsp;d'exonoration</b><br></br></td>
<td>&nbsp;<b>N° de reférence Aux &nbsp;attestaions</b><br></br></td>
<td>&nbsp;<b>Objet de la &nbsp;présente</b><br></br></td>
<td>&nbsp;<b>Disponible pour &nbsp;l'avenir</b><br></br></td>
</tr>
</table><br>
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="20"><tr>
<td>&nbsp;Cadre réservé à la direction des douanes<br>&nbsp;............................................<br>&nbsp;N° ____________ /RS/______________DGD
<br> &nbsp;Bon pour valoir autorisation de mise en  
admission Temporaire exceptionnelle<br>&nbsp;
validité de 12 mois pronlogeable sur demande&nbsp;
l’ exipiration du delai<BR> pour <?php  echo $QT ;?>&nbsp;<br>&nbsp;
 <?php  echo $DC ;?>&nbsp;,Objet de la facture&nbsp;
 N° <?php  echo $Ref ;?>&nbsp;<BR>en date du <?php  echo $dat ;?>&nbsp;  ci-jointe<br>&nbsp;
  visée par la direction Générale des Douanes.<br><br>&nbsp;
 Fait a Nouakchott,le <?php echo $date;?><br><h5>&nbsp;&nbsp;&nbsp;&nbsp;LE DIRECTEUR DES REGIMES ECONOMIQUE ET DES PRIVILEGES<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L'INSPECTEUR <br>&nbsp; &nbsp;Abdellahi ould alioun Bouhoum</h5>
<br><br><br><br><br><br><br><br><br><br>
 </td>
<td><b>Signature,cachet,nom et fonction du signature
</b>
<br><br><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo "DEMANDEUR&nbsp;:&nbsp;".$client ;?>&nbsp;<h5></h5><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DIRECTION GENERALE<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  DES HYDRAUCARBURES <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</td>

</tr></table>
<div id="noimprime"> 
<button onclick="window.print();"><img src="images/imprimante18x18.png"  alt="" title="Imprimer cette page"> 
</button></div> 
<?php }elseif($_GET['option']=='OrdreT'){
?>
<br><br>
<table align="center" ><tr><td align="center">&nbsp;ORDRE DE TRANSIT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>
 <br><br><br>
 <table  align="centre"  width="700"><tr>
<td align="left">&nbsp;Nous soussignés :    <?php echo $client; ?> &nbsp;&nbsp;<br><br>&nbsp;Adresse (complète) :&nbsp; <br><br>&nbsp;Donnons à la société &nbsp;:&nbsp;BKTrans<br></td>
</tr></table><br>
&nbsp;L’ordre d’accomplir les formalités de dédouanement concernant les marchandises ci-après désignées :
<br><br>
<u>Détail de l’arrivage </u>
<br> <br><br> Nom du propriétaire de la marchandise&nbsp;: &nbsp;<?php echo $client;?><br> Navires &nbsp;: &nbsp;<br> Connaissement &nbsp;: &nbsp;<?php echo $code;?><br>Désignation et poids des marchandises &nbsp;: &nbsp;<?php echo $QT.' '.$TO.' '.$DC.' '.$PT;?>
<br>
<table ><tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

<td>
REGIME DOUANIER(1)</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td>
<TABLE border=1 CELLSPACING=0 cellpadding=0 align="right" >
<tr><td><input type="checkbox"></td><td>Mis à la consommation</td></tr>
<tr><td><input type="checkbox"></td><td>Entrepôt </td></tr>
<tr><td><input type="checkbox"></td><td>Admission temporaire </td></tr>
<tr><td><input type="checkbox"></td><td>Exportation</td></tr>
<tr><td><input type="checkbox"></td><td>Transit</td></tr>
</table></td></tr></table>
Nous mandant, soussigné &nbsp;: &nbsp;<?php echo $client;?>
<br>
<p>
Nous engageons à détenir, par nous même, le justificatif du paiement des droits et taxes afférents à cette opération <br>indépendamment de notre éventuelle responsabilité pénale en tant qu’intéresse à la fraude.
</p>
Nous, mandataire soussigné : BK-TRANS <br>
<ol type="1">
<li>Acceptons le présent  ordre de transit.</li>
<li>Déclarons avoir pris connaissance de la législation douanière rendant les signataires des déclarations pénalement  responsables des diverses irrégularités susceptible d’être relevées dans les dites déclarations</li>
<li>Rayer les mentions inutiles</li>
</ol>
<br>
<table width=100%><tr>
<td align="left">&nbsp;&nbsp;Le mandataire<br>(Signature et cachet)</td>
<td align="center">Nouakchott<br>le</td>
<td align="right">&nbsp;&nbsp;&nbsp;&nbsp;Le mandatant<br>(Signature et cachet)</td>

</tr>
</table>
<div id="noimprime"> 
<button onclick="window.print();"><img src="images/imprimante18x18.png"  alt="" title="Imprimer cette page"> 
</button></div> 
<?php }elseif($_GET['option']=='Endirect'){?>

<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="30">
<tr><td>
<b><h2>DECLARATION SIMPLIFIEE D'ENLEVEMENT DIRECT</h2></b>
</td></tr>
</table>
<br><br>
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="30">
<tr>
<td>
<font size="5">&nbsp;N° du <?php echo $ABC; ?>&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $code;?>
<br><br>&nbsp;DEMANDEUR&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $admin[1];?>
<br><br>&nbsp;Nombre de <?php echo $admin[14];?>&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $admin[45];?><br><br>
&nbsp;POIDS&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $admin[5];?>
<br><br>
&nbsp;LIBELLE/DENOMMINATION&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $admin[27];?><br><br>
&nbsp;BKTRANS&nbsp;-PC&nbsp;&nbsp;-<?php echo $admin[1];?>
</td>
</tr>
</table>
<br><br>
<table border="1" CELLSPACING=0 cellpadding=0 width="900" height="30">
<tr>
<td><font size="5">&nbsp;Valeur en devise &nbsp;&nbsp;:&nbsp;&nbsp;<?php echo number_format($VF,2,',','.'); ?>&nbsp;&nbsp;<?php echo $MN1 ; ?>
<br><br>&nbsp;Valeur Fret&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo number_format($VFT,2,',','.'); ?>&nbsp;&nbsp;<?php echo $MN2 ; ?>
<br><br>&nbsp;Valeur en ouguiya &nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $tot;?>&nbsp;&nbsp; MRO<br><br>
</td>
</tr>
</table><br><br>
<font size="5">2)Nous engageons à:<br><br>
<p><font size="5">-&nbsp;déposer une déclaration en détail et régler le montant des droits de douane dont les marchandises sont passible dans un délai de 30 jours.</p>
-&nbsp;ne pas disposer les marchandises avant d'obtenir l'autorisation définitive.<br><br>
-&nbsp;ne pas disposer les marchandises a la prémière réquisition des services des douanes.<br><br>
-&nbsp;cautaion(intermédiaire agrée ou consignation).<br><br><br>
Nouakchott, le <?php echo $date; ?>
<br>
<table width="80%">
<tr>
<td><b>Transitaire</b></td>
<td align="right"><b>Demandeur<br><?php echo $admin[1];?></b></td>
</tr>
</table>
<div id="noimprime"> 
<button onclick="window.print();"><img src="images/imprimante18x18.png"  alt="" title="Imprimer cette page"> 
</button></div> 
<?php }else{
$Delv=mysql_query("select Ref_Delivry from exonoration ORDER BY Ref_Delivry DESC LIMIT 0 , 1");
$Dlv=mysql_fetch_array($Delv);
$DLV=$Dlv[0]+1;
$Code_dlv = sprintf("%06d",$DLV);
$b=mysql_query("insert into  exonoration (Ref_Delivry) values($DLV)");
$pfx='DN'.$Code_dlv;
$Auj = explode(' ',$admin[5]);
 $tot=$Auj[0]*$admin[45];
?>


<table>
<tr>
<td><img src="bktrans_data/<?php echo $entt[0]; ?>"></td>
<?php $entt[0]; ?>
</tr>
</table>
<br><br>
<table width="100%">
<tr>
<td><h5><?php echo $entt[6]; ?><br>
<?php echo $entt[1]; ?><br>
<?php echo $entt[2]; ?><br>
<?php echo $entt[3]; ?><br>
<?php echo $entt[4]; ?><br>
<?php echo $entt[5]; ?></h5></td>
<td><h5>
DN.Number &nbsp;:<br>
DN.Date &nbsp;:<br>
<?php echo $ABC ; ?>&nbsp;:<br>
Ref.Client&nbsp;:<br>
Email&nbsp;:<br>
</h5></td>
<td align="right"><h5><?php echo $pfx; ?><br>
<?php echo $date; ?><br>
<?php echo $code; ?><br>
<?php echo $admin[2]; ?><br>
<?php echo $mail; ?></h5></td>
</tr>
</table>
<br><br>
<h3>TO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $client; ?><br></h3>
<br>
<br>
<br>
<b><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DELIVRY NOTE</h3></b>
<table border="1" CELLSPACING=0 cellpadding=0 width="100%" height="20">
<tr>
<td align="center"><h4>Item N</h4></td>
<td align="center"><h4>Description</td>
<td align="center"><h4>Quantity</td>
<td align="center"><h4>Total</td>
</tr>
<tr>
<td align="center"><b>1<br><br><br><br><br><br></b></td>
<td align="center"><b><?php echo $DC; ?> </b></td>
<td align="center"><?php echo $QT.' '.$admin[14].' '.$admin[13]; ?></td>
<td align="center">tt
</td>
</tr></table>
<br>
<br>
<br>
<h4>Client Name&nbsp;:&nbsp;<?php echo $client; ?></h4>
<br><br>
<b>&nbsp;Signature</b>
<div id="noimprime"> 
<button onclick="window.print();"><img src="images/imprimante18x18.png"  alt="" title="Imprimer cette page"> 
</button></div> 
<?php }?>
</body>