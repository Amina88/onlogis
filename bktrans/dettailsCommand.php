<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
 
  <?php } ?>
  
  <?php 
if("$permission[1]"=="Administrateur" || "$permission[4]"=='4'){
 $etat_up=0;
 if(isset($_POST['Sauvgarder'])){
  $ref=$_POST['ref'];
  $titre=$_POST['titre'];
  $url=$_POST['url'];
   $succes="error";
  if(isset($_POST['conf_pay'])){
  $conf_pay = $_POST['conf_pay'];
  $etat_up = mysql_query("update purchase set confirmation_paiment='$conf_pay' where reference ='$ref'") or die(mysql_error());

if($etat_up){    
$succes=$N11.' : '.$ref.'  '.$N129; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
 }
   
   if(isset($_POST['etat'])){
   $etat = $_POST['etat'];
  $etat_up = mysql_query("update purchase set etat_commande='$etat' where reference ='$ref'") or die(mysql_error());
  $Frn = mysql_query("select fournisseur from purchase  where reference ='$ref'") or die(mysql_error());
 $Fourn=mysql_fetch_array($Frn);
  if($etat_up){
 $date=date('Y-m-d');
 $id= mysql_query("select id from journal order by id desc limit 0,1  ");
 $idj=mysql_fetch_array($id);
$id_journal=$idj[0]+1;
 $etat_up = mysql_query("insert into journal values($id_journal,'Achat','$date','$ref','$Fourn[0]')") or die(mysql_error());
   $purchase= mysql_query("select * from finalpurchase where  BonCommande='$ref' ");
 $pur=mysql_fetch_array($purchase);
  $Element_purch= mysql_query("select * from element_purchase where  reference='$ref' ");
  $total=0;
  $tvaliste=array();
  while($ElP=mysql_fetch_array($Element_purch)){
   $code= mysql_query("select Code from codes where  `Nom_Code`='$ElP[8]' ");
   $CComp=mysql_fetch_array($code);
   $tot=$ElP[3]*$ElP[4]*$ElP[6]*$pur[10];
   $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$ElP[8]','$ElP[2]','$tot','0',$id_journal,'0')") or die(mysql_error());
 if($ElP[7]!=0){
 if(!in_array("$ElP[9]",$tvaliste)){
 $tvaliste[]=$ElP[9];
 }
 }
 
 
 $total=$total+$tot;
   }
   foreach($tvaliste as $tva){
   $ttTax=0;
   $Element_purch= mysql_query("select * from element_purchase where  reference='$ref' AND Type_tax='$tva' ");
  $Ctax= mysql_query("select code_comptable from tax where  Nom_tax='$tva'  ");
  $CTaxe=mysql_fetch_array($Ctax);
  $code= mysql_query("select Code from codes where  `Nom_Code`='$CTaxe[0]' ");
   $CComp=mysql_fetch_array($code);
  while($ElP=mysql_fetch_array($Element_purch)){
   $tot=$ElP[3]*$ElP[4]*$ElP[6]*$pur[10]*$ElP[7]*0.01;
   $ttTax=$ttTax+$tot;
   $total=$total+$tot;
   }
    $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$CTaxe[0]','$tva','$ttTax','0',$id_journal,'0')") or die(mysql_error());

   
   }

 
    $pr= mysql_query("select fournisseur  from  purchase where  `reference`='$ref' ");
   $Four=mysql_fetch_array($pr);
   $Fr= mysql_query("select compte from supplier where  `Nom_Soc`='$Four[0]' ");
   $Compte=mysql_fetch_array($Fr);
    $code= mysql_query("select Code from codes where  `Nom_Code`='$Compte[0]' ");
   $CComp=mysql_fetch_array($code);
   $etat_up = mysql_query("insert into detaile_journal values ('','$CComp[0]','$Compte[0]','$Four[0]','0','$total',$id_journal,'1')") or die(mysql_error());
 
if($etat_up){    
$succes=$N11.' : '.$ref.'  '.$N130; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}}
 }
  $dirct="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=$ref&titre=$titre&url=$url&msg=$succes&etat_up=$etat_up";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $dirct;?>";
</script>
<?php } else{
  ?>
 
  <?php
  
  $url=$N4.".".$N11.".".$N12;
  $url2=$N4.".".$N11.".".$N13;
  $titre=$N46;
  $titre2=$N47;
  
  $url5=$N4.".".$N11.".".$N12;
$url4=$N4.".".$N11;
$url6=$N4.".".$N11.".";
$titre12=$N12;
$url3=$N19.".".$N32.".".$N2;
$tt_snd=$N111;
$comdhist=$N11;
$message=$N106;
  foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;$V18 = $employee->getElementsByTagName( "e18" ); 
  $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" ); $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" ); $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" ); $N22 = $V22->item(0)->nodeValue;
  $V23 = $employee->getElementsByTagName( "e23" ); $N23 = $V23->item(0)->nodeValue;
  $V24 = $employee->getElementsByTagName( "e24" ); $N24 = $V24->item(0)->nodeValue;
  $V25 = $employee->getElementsByTagName( "e25" ); $N25 = $V25->item(0)->nodeValue;
  $V26 = $employee->getElementsByTagName( "e26" ); $N26 = $V26->item(0)->nodeValue;
  $V27 = $employee->getElementsByTagName( "e27" ); $N27 = $V27->item(0)->nodeValue;
  $V28 = $employee->getElementsByTagName( "e28" ); $N28 = $V28->item(0)->nodeValue;
  $V29 = $employee->getElementsByTagName( "e29" ); $N29 = $V29->item(0)->nodeValue;
  $V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;
  $V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;  $V31 = $employee->getElementsByTagName( "e31" ); 
  
  $N31 = $V31->item(0)->nodeValue;


  $V32 = $employee->getElementsByTagName( "e32" ); 
  $N32 = $V32->item(0)->nodeValue;
  
  
  $V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;
?>
<script type="text/javascript"> 
	function loadmsg(url){
	document.getElementById('form_sample_2').action=url;
	document.getElementById('formcont').innerHTML='<font color=#111 >&nbsp;&nbsp;<?php echo $N18;  ?></font><font color="red">  *</font><Textarea  name="raison" class="form-control" required></Textarea><br><button type="submit" class="btn green"  value="1" name="Sauvgarder" ><?php echo $N29; ?></button>';
	}
	
  </script>
  <?php 
$autre_net=0;
$autre_TVA=0;
$autre_TOTAL=0;
$net=0;
$TVA=0;
$TOTAL=0;
$el="";
$autre_monnaie="";

$prix=0;
$ref=$_GET['Ref'];
$titre=$_GET['titre'];
$url=$_GET['url'];
include ("Connection.php");
$facture=mysql_query("select * from purchase where reference='$ref' ");
$fct=mysql_fetch_array($facture);
$reqfour=mysql_query("select * from supplier where Nom_Soc='$fct[1]' ");

$four=mysql_fetch_array($reqfour);


$test=$fct['confirmation'];
$date=$fct[5];
$datep=$fct[4];
$client = str_replace('&','%26',$fct[1]);
?>
 <div class="row">
 <div class="col-md-6 col-sm-12">
 </div>

	<div class="col-md-6 col-sm-12" align="right">
	    <table><tr>
                    <td>
					<?php if($fct[6]=='1'){ ?>
					<a href="#" >
					<i class="fa fa-pencil-square-o">&nbsp;<?php echo $N31; ?></i>
					</a></td>
					
					<?php }else{ ?>
					<a href="MenuUtilisation.php?valeur=ModifCommande.php&reference=<?php echo $fct[0];?>&action=modifier&titre=<?php echo $N31; ?><?php echo " ".$fct[0];?>&url=<?php echo $url6.$N31;?>" >
					<i class="fa fa-pencil-square-o">&nbsp;<?php echo $N31; ?></i>
					</a></td>
					<?php } ?>
					<td>&nbsp;&nbsp;</td>
					<td>
					<?php if($fct[6]=='1'){ ?>
					<a href="#" ><i class="fa fa-trash-o">&nbsp;<?php echo $N28; ?></i></a>
					<?php }else{ ?>
					<a  onclick="return confirmLink(this);"   href="updateCommande.php?reference=<?php echo $fct[0];?>&action=supprimer&url=<?php echo $url5;?>&titre=<?php echo $titre;?>&texthisto=<?php echo $comdhist; ?>&message=<?php echo $message; ?>">
					<i class="fa fa-trash-o">&nbsp;<?php echo $N28; ?></i>
					<?php } ?>
					</td><td>&nbsp;&nbsp;</td>
					<td><a href="finalcom.php?reference=<?php echo $fct[0];?>&four=<?php echo  $client;?>" target="_link">
					
										<i class="fa fa-file-pdf-o">&nbsp;<?php echo $N30; ?></i> 
								
					
					</td>
<td>&nbsp;&nbsp;</td>
					<td><a href="finalcom.php?reference=<?php echo $fct[0];?>&four=<?php echo  $client;?>&titre=<?php echo $tt_snd.'  : '; ?>(<?php echo $fct[0];?>)&url=<?php echo $_GET['url'].'.'.$tt_snd ?>&charger=send" >
					
										
								<i class="icon-envelope-open">&nbsp;<?php echo $N21; ?></i>
					
					</td> 
				</tr> 	</table>	
				
</div>
</div>

 <div class="row">
    <div class="col-md-6 col-sm-12">
		<div class="portlet blue-hoki box">
		<div class="portlet-title">
		  <div class="caption">
		  <i class="fa fa-cogs"></i><?php echo $N19;?>
		  </div>
		</div>
		<div class="portlet-body">
		 <div class="row static-info">
		  <div class="col-md-5 name">
			<?php echo $N1;?> :
		 </div>
         <div class="col-md-7 value">
		  <?php echo $fct[0]; ?>
		 </div>
		 </div>
		 <div class="row static-info">
		  <div class="col-md-5 name">
			<?php echo $N2;?> :
		 </div>
         <div class="col-md-7 value">
		  <?php echo $fct[2]; ?>
		 </div>
		 </div>
		 <div class="row static-info">
		  <div class="col-md-5 name">
			<?php echo $N3;?> :
		 </div>
         <div class="col-md-7 value">
		  <?php echo $fct[13]; ?>
		 </div>
		 </div>
		 <div class="row static-info">
		  <div class="col-md-5 name">
			<?php echo $N4;?> :
		 </div>
         <div class="col-md-7 value">
		  <?php echo number_format($fct[14],2,',','.')."&nbsp;".$fct[12];?>
		 </div>
		 </div>
		 <div class="row static-info">
		  <div class="col-md-5 name">
			<?php echo $N6;?> :
		 </div>
         <div class="col-md-7 value">
		  <?php echo $date; ?>
		 </div>
		 </div>
		 <div class="row static-info">
		  <div class="col-md-5 name">
			<?php echo $N7;?> :
		 </div>
         <div class="col-md-7 value">
		  <?php echo $datep; ?>
		 </div>
		 </div>
		  <div class="row static-info">
		  <div class="col-md-5 name">
			<?php echo $N8;?> :
		 </div>
         <div class="col-md-7 value">
		  <?php echo $fct[15];?>
		 </div>
		 </div>
	  </div>
	</div>
	</div>
	
	
	<div class="col-md-6 col-sm-12">
	 <div class="portlet yellow-crusta box">
		<div class="portlet-title">
		<div class="caption">
		<i class="fa fa-cogs"></i><?php echo $N20; ?>
		</div>
		</div>
	<div class="portlet-body">
	<div class="row static-info">
	 <div class="col-md-3 name">
	 <?php echo $N26;?> :
	 </div>
	 <div class="col-md-7 value">
		<?php echo $four[0]; ?>
	</div>
	</div>
	<div class="row static-info">
	 <div class="col-md-3 name">
	 <?php echo $N21;?> :
	 </div>
		<div class="col-md-5 value">
		<?php echo $four[5]; ?>
		</div>
	</div>
   <div class="row static-info">
	<div class="col-md-4 name">
	 <?php echo $N22;?>	:
	 </div>
	<div class="col-md-7 value">
		<?php echo $four[6]; ?>
	</div>
	</div>
	<div class="row static-info">
	<div class="col-md-3 name">
		 <?php echo $N23;?>	:
	</div>
	<div class="col-md-7 value">
	<?php echo $four[15]; ?>
	</div>
	</div>
	<div class="row static-info">
	<div class="col-md-3 name">
	<?php echo $N24;?>	:
	</div>
	<div class="col-md-7 value">
	<?php echo $four[16]; ?>
	</div>
	</div>
	<div class="row static-info">
	<div class="col-md-3 name">
	<?php echo $N25;?>	:
	</div>
	<div class="col-md-7 value">
	<?php echo $four[17]; ?>
	</div>
	</div>
	
	</div>
	</div>
	</div>
	

	
</div>
		




			<?php		
			$element=mysql_query("select * from element_purchase where reference='$fct[0]'");
				
?>

<div class="row">
 <div class="col-md-12 col-sm-12">
  <div class="portlet grey-cascade box">
	<div class="portlet-title">
	<div class="caption">
	<i class="fa fa-cogs"></i><?php echo $N9; ?>
	</div>				
	</div>
	<div class="portlet-body">
	 <div class="table-responsive">
    <table class="table table-hover table-bordered table-striped">
	<thead>
   <tr> 
   <th><font size="1"><?php echo $N10; ?></th>
   <th><font size="1"><?php echo $N11; ?></th>
   <th><font size="1"><?php echo $N12; ?></th>
   <th><font size="1"><?php echo $N13; ?></th>
   <th><font size="1"><?php echo $N14; ?></th>
   <th><font size="1"><?php echo $N15; ?></th>
  </tr>
  </thead>
  <tbody>
 <?php
 	while($el=mysql_fetch_array($element)){
$monnaie=$fct[7];
$qt=$el[3];
$PU=$el[4]*$el[6];
$prix=$qt*$PU;
$tva=($el[7]/100)*$prix;
$total=$tva+$prix;
$net=($net+$prix);
$TVA=($TVA+$tva);
$TOTAL=($TOTAL+$total);
$T=number_format($total/$el[6],2,',','.');
$TV=number_format($tva/$el[6],2,',','.');
$N=number_format($prix/$el[6],2,',','.');
$PUN=number_format($PU/$el[6],2,',','.');
?>
  <tr >
   <td><font size="1"><?php echo $el[2] ; ?></td>
   <td><font size="1"> <?php echo $qt ?></td>
   <td><font size="1"><?php echo $PUN.'  '.  $el[5] ?></td>
   <td><font size="1"><?php echo $N.'  '.$el[5] ?></td>
   <td><font size="1"><?php echo "($el[7]%) ".$TV .'  '. $el[5] ?></td>
   <td><font size="1"><?php echo $T  .'  '.$el[5] ?></td>
  </tr>
<?php

$nett=number_format($net,2,',','.');
$TVAA=number_format($TVA,2,',','.');
$TOTALL=number_format($TOTAL,2,',','.');

$nettd=number_format($net*$fct[9],2,',','.');
$TVAAd=number_format($TVA*$fct[9],2,',','.');
$TOTALLd=number_format($TOTAL*$fct[9],2,',','.');
}
?>
       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
							
							
 <div class="row">
  <div class="col-md-6">
  </div>
  <div class="col-md-6 ">
  <div class="well" >
  <div class="row static-info ">
  <div class="col-md-3 name">
	<?php echo $N13; ?>:
	</div>
	<div class="col-md-7 value">
	<?php  echo   $nett." ".$monnaie ; ?>
	</div>
	</div>
	<div class="row static-info ">
  <div class="col-md-3 name">
	<?php echo $N14; ?>:
	</div>
	<div class="col-md-7 value">
	<?php  echo      $TVAA." ". $monnaie ; ?>
	</div>
	</div>
	<div class="row static-info ">
  <div class="col-md-3 name">
	<?php echo $N15; ?>:
	</div>
	<div class="col-md-7 value">
	<?php  echo    $TOTALL." ".$monnaie; ?>
	</div>
	</div>
  </div>
  </div>
</div>

  <?php if($fct[12]!=$monnaie){ ?>
  <font size="2"><?php  echo   "1&nbsp;".$monnaie."=".$fct[9]."&nbsp;".$fct[12] ; ?><br><br>
  
  
  <div class="row">
  <div class="col-md-6">
  </div>
  <div class="col-md-6 ">
  <div class="well" >
  <div class="row static-info ">
  <div class="col-md-3 name">
	<?php echo $N13; ?>:
	</div>
	<div class="col-md-7 value">
	<?php  echo   $nettd." ".$fct[12] ; ?>
	</div>
	</div>
	<div class="row static-info ">
  <div class="col-md-3 name">
	<?php echo $N14; ?>:
	</div>
	<div class="col-md-7 value">
	<?php  echo      $TVAAd." ".$fct[12]; ?>
	</div>
	</div>
	<div class="row static-info ">
  <div class="col-md-3 name">
	<?php echo $N15; ?>:
	</div>
	<div class="col-md-7 value">
	<?php  echo    $TOTALLd." ".$fct[12]; ?>
	</div>
	</div>
  </div>
  </div>
</div>
  
	
<?php }
 if("$permission[1]"=="Administrateur" || "$permission[20]"=='20') { 
					
  if($fct[10]!=1){ ?>
  <table><tr>
  	<?php  if($fct[10]!=-1){ ?>
  <td>
<a href="MenuUtilisation.php?valeur=AllCommandeNonConfirmer.php&reference=<?php echo $fct[0];?>&action=1&url=<?php echo $url;?>&titre=<?php echo $titre;?>&valeur2=AllCommande" ><span class="label label-sm label-success"><?php echo $N29;?></span></a>
	</td><td>&nbsp;</td>

	<td>
	 <a href="javascript:loadmsg('MenuUtilisation.php?valeur=AllCommandeNonConfirmer.php&reference=<?php echo $fct[0];?>&action=-1&url=<?php echo $url2;?>&titre=<?php echo $titre2;?>&valeur2=AllCommandeNonConfirmer');" ><span class="label label-sm label-warning"><?php echo $N27;?></span></a>
	</td><td>&nbsp;</td>
		<?php  } ?>
	<td>
	 <a href="javascript:loadmsg('MenuUtilisation.php?valeur=AllCommandeNonConfirmer.php&reference=<?php echo $fct[0];?>&action=supprimer&red=nonconf&url=<?php echo $url2;?>&titre=<?php echo $titre2;?>&valeur2=AllCommandeNonConfirmer');"><span class="label label-sm label-danger"><?php echo $N28;?></span></a>
	</td>
	
	
	</tr></table><br><br>
	<form method="POST" action=""  id="form_sample_2" class="form-horizontal">
	<div id="formcont">
	</div>
	</form>
<?php } else{ 
?>
<form action="MenuUtilisation.php?valeur=dettailsCommand.php" method="POST" class="form-horizontal" >
<table>

<tr>
	<td>
<?php
if($fct[17]!=NULL ){ 
if($fct[6]==0){

?>
<input type="checkbox" name="etat" value="1"  OnClick="loadmsg('MenuUtilisation.php?valeur=AllCommandeNonConfirmer.php&reference=<?php echo $fct[0];?>&action=supprimer&red=nonconf&url=<?php echo $url2;?>&titre=<?php echo $titre2;?>&valeur2=AllCommandeNonConfirmer');"> <font size="2"><span class="label label-sm label-danger"><?php echo $N32;?></span> </input>
<?php }else{ ?> 
<input type="checkbox" name="etat" checked disabled><font size="2"> <span class="label label-sm label-success"><?php echo $N32;?></span> </input>
<?php } } ?> 
	</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>
 <td>
 <?php if($fct[17]!=NULL && $fct[6]==1  ){
if($fct[19]==0){
 ?>
<input type="checkbox" name="conf_pay"   value="1" ><font size="2"><span class="label label-sm label-danger"> <?php echo $N33;?></span> </input>

<?php }else{ ?>

<input type="checkbox" name="conf_pay"   value="1" checked disabled  ><font size="2"><span class="label label-sm label-success"> <?php echo $N33;?></span> </input>

<?php }} ?>

	</td></tr>
	<tr><td><input type="hidden" value="<?php echo $ref; ?>" name="ref"/>&nbsp;
	<input type="hidden" value="<?php echo $titre; ?>" name="titre"/>
	<input type="hidden" value="<?php echo $url; ?>" name="url"/></td></tr>	
<tr>
<td>
<?php
if($fct[17]!=NULL ){
 if($fct[6]==0 || $fct[19]==0 ){ ?>
<button type="submit" class="btn green-haze" name="Sauvgarder"><?php echo $N29; ?></button	>
<?php }}  ?>
</td>
</tr>

	</table>
	</form>

<?php
}}
}
}

}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>