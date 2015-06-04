<?php

 $date=date('Y-m-d');
 $id= mysql_query("select id from journal order by id desc limit 0,1  ");
 $idj=mysql_fetch_array($id);
$id_journal=$idj[0]+1;
 $etat_up = mysql_query("insert into journal values($id_journal,'Vente','$date','$Ref','$client')") or die(mysql_error());

   $purchase= mysql_query("select * from finalinvoice where  facture='$Ref' ");
 $pur=mysql_fetch_array($purchase);
  $Element_purch= mysql_query("select * from element_invoice where  Reference='$Ref' ");
  $total=0;
  $tvaliste=array();
  while($ElP=mysql_fetch_array($Element_purch)){
   $code= mysql_query("select Code from codes where  `Nom_Code`='$ElP[8]' ");
   $CComp=mysql_fetch_array($code);
   $tot=$ElP[2]*$ElP[3]*$ElP[6]*$pur[9];
   $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$ElP[8]','$ElP[1]','0','$tot',$id_journal,'0')") or die(mysql_error());
 if($ElP[4]!=0){
 if(!in_array("$ElP[9]",$tvaliste)){
 $tvaliste[]=$ElP[9];
 }
 }
 
 
 $total=$total+$tot;
   }
   foreach($tvaliste as $tva){
   $ttTax=0;
   $Element_purch= mysql_query("select * from element_invoice where  Reference='$Ref' AND Type_tax='$tva' ");
  $Ctax= mysql_query("select code_comptable from tax where  Nom_tax='$tva'  ");
  $CTaxe=mysql_fetch_array($Ctax);
  $code= mysql_query("select Code from codes where  `Nom_Code`='$CTaxe[0]' ");
   $CComp=mysql_fetch_array($code);
  while($ElP=mysql_fetch_array($Element_purch)){


   $tot=$ElP[2]*$ElP[3]*$ElP[6]*$pur[9]*$ElP[4]*0.01;
   $ttTax=$ttTax+$tot;
   $total=$total+$tot;
   }
    $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$CTaxe[0]','$tva','0','$ttTax',$id_journal,'0')") or die(mysql_error());

   
   }

 
    $pr= mysql_query("select client  from  invoice where  `id_facture`='$Ref' ");
   $Four=mysql_fetch_array($pr);
   $Fr= mysql_query("select compte from custemer where  `Nom_Soc`='$Four[0]' ");
   $Compte=mysql_fetch_array($Fr);
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compte[0]' ");
   $CComp=mysql_fetch_array($code);
   $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compte[0]','$Four[0]','$total','0',$id_journal,'1')") or die(mysql_error());
 // fin de journal 
    