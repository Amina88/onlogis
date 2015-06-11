<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
?>

<?php
if("$permission[1]"=="Administrateur" || "$permission[5]"=='5'){ 
foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  
  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  
   $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;
   $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;
   $V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;
  
  ?>
 <?php $NomSoc=$_GET['NomSOC']; 
 $FR=mysql_query("select * from supplier where Nom_Soc='$NomSoc'");
 $CL=mysql_query("select * from custemer where Nom_Soc='$NomSoc'");
 $Client=mysql_fetch_array($CL);
 $Fournisseur=mysql_fetch_array($FR);
 
 ?>
   <div class="row">
 <div class="col-md-6 col-sm-12">
 </div>
  <div >
	    <table  align="center" width="100%" >
	<tr><td>
									<h5><?php echo $N8; ?>&nbsp;<i class="icon-envelope-open"></i> :</h5>
										 <td>
										 <?php
$etat_existe=0;
										 if($Client[0]){$etat_existe++; ?>
										 <td>
										  <a href="MenuUtilisation.php?valeur=e2.php&cli=<?php echo $NomSoc;?>&p=e&type=cl" target="_link" >
			                         <font size="2">     <?php echo $N13; ?>&nbsp;</font>
										  
										  </a></td>
										  <?php } if($Fournisseur[0]){ $etat_existe++; ?>
										  <td>
										  <a href="MenuUtilisation.php?valeur=e2.php&cli=<?php echo $NomSoc;?>&p=e&type=fr" target="_link" >
			                          <font size="2">    <?php echo $N14; ?>&nbsp;</font>
										  </a></td>
										  <?php } if($etat_existe==2){ ?>
										  <td>
										  
										  <a href="MenuUtilisation.php?valeur=e2.php&cli=<?php echo $NomSoc;?>&p=e&type=total" target="_link" >
			                          <font size="2">  <?php echo $N15; ?>&nbsp;</font>
										  
										  </a>
										  </td>
										  <?php  }  ?>
										   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										 
										  
                   <td><h5>SOA  <i class="fa fa-file-pdf-o"></i>  : </h5> 
					</td>
			<?php 		 if($Client[0]){$etat_existe++; ?>
					<td><a href="finalstatementclient.php?cli=<?php echo $NomSoc;?>" target="_link">
					
									<font size="2">	<?php echo $N13; ?>&nbsp;</font>
								
					
					</td>
<td>&nbsp;&nbsp;</td>
<?php 		} if($Fournisseur[0]){$etat_existe++; ?>
					<td><a href="finalstatementFournisseur.php?cli=<?php echo $NomSoc;?>" target="_link">
					
									<font size="2"><?php echo $N14; ?>&nbsp;</font>
								
					
					</td>
					<td>&nbsp;&nbsp;</td>
				 <?php } if($etat_existe>2){ ?>
					<td><a href="finalstatementTOTAL.php?cli=<?php echo $NomSoc;?>" target="_link">
					
								<font size="2">	<?php echo $N15; ?>&nbsp;</font>
								
					
					</td>
					 <?php } ?>
				</tr> 	</table>	
				
</div>
</div>
  
<div class="row">
   
<div class="portlet box white-hoki">
   <div class="portlet-title" >
							
							<div class="tools" >
							</div>
						</div>
						<div class="portlet-body">
					
							<table class="table table-bordered table-hover " id="sample_1">


									
										
										  
										   <?php 
										   
										   $ic=mysql_query("select * from invoice where client='$NomSoc' and etat_payement=0 and draft=1");
										   $ipur=mysql_query("select * from purchase where fournisseur='$NomSoc' and etat_paiement=0 and etat_commande=1");
										   $monitab=array();
										   $totaltab=array();
										   $totalechue=array();
										   $totalin=array();
										   $totalout=array();
                                           $monitab2=array();
                                           $totaltab2=array();
										  ?>
										 
											
										 
										  <thead>
										  <tr>
										  <th><font size="1"><?php echo $N2 ?></th>
										  <th><font size="1"><?php echo $N3 ?></th>
										  <th><font size="1"><?php echo $N4 ?></th>
										  <th><font size="1"><?php echo $N5 ?></th>
										  <th><font size="1"><?php echo $N6 ?></th>
										  
										  <th><font size="1"><?php echo $N7 ?></th>
										
										  </tr>
										  </thead>
										  <tbody>
										  <?php
 while($ics=mysql_fetch_array($ic)){
  if($ics['Jours_echue']>0){
$f=$ics['id_facture'];
$tfs=mysql_query("select * from vueinvoicetotale where facture='$f'");
$tt=mysql_fetch_array($tfs);
if($tt['TOTAL']<0){
$rest=$tt['TOTAL']+$ics['valeur_payer'] ;
}else{
$rest=$tt['TOTAL']-$ics['valeur_payer'] ;
}
 $mv=$ics['Monnaie_secondaire'];
 if (!in_array("$mv",$monitab)) {
$monitab["$mv"]=$ics['Monnaie_secondaire'];
$totaltab["$mv"]=$rest;
}elseif(in_array("$mv",$monitab)){
 $totaltab[$mv]=$totaltab[$mv]+$rest;

}
?>
 <tr class="danger">
<td><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $ics['id_facture'];?>&titre=<?php echo $N13." :  ".$ics['id_facture']; ?>&url=<?php echo $N12.'.'.$N13; ?>" target="_link"><?php echo $ics['id_facture'];?></a></td>
<td><?php echo $ics['date_lancement'];?></td>
<td><?php echo $ics['Date_paiment'];?></td>
<td><?php echo $ics['Jours_echue'];?></td>
<td><?php echo $ics['Monnaie_secondaire'];?></td>
<td><?php echo number_format($rest,2,',','.');?></td>
 </tr>

	
<?php } else{

$f=$ics['id_facture'];
$tfs=mysql_query("select * from vueinvoicetotale where facture='$f'");
$tt=mysql_fetch_array($tfs);
if($tt['TOTAL']<0){
$rest=$tt['TOTAL']+$ics['valeur_payer'] ;
}else{
$rest=$tt['TOTAL']-$ics['valeur_payer'] ;
}
 $mv=$ics['Monnaie_secondaire'];
 if (!in_array("$mv",$monitab2)) {
$monitab2["$mv"]=$ics['Monnaie_secondaire'];
$totaltab2["$mv"]=$rest;
}elseif(in_array("$mv",$monitab2)){
 $totaltab2[$mv]=$totaltab2[$mv]+$rest; 
}
?>
<tr class="success">
 <td><?php echo $ics['id_facture'];?></td>
 <td><?php echo $ics['date_lancement'];?></td>
<td><?php echo $ics['Date_paiment'];?></td>
<td><?php echo $ics['Jours_echue'];?></td>
<td><?php echo $ics['Monnaie_secondaire'];?></td>
<td><?php echo number_format($rest,2,',','.');?></td>
 </tr>	

<?php }
 }

 $trmp= mysql_query("SELECT terme_paiement  from  `supplier` where Nom_Soc='$NomSoc'");
			                               $trmpfour=mysql_fetch_array($trmp);
			                               $restTMF=$trmpfour[0];
										while($fcs=mysql_fetch_array($ipur)){
										   $date=date("Y-m-d");
			 $Auj = explode('-',$date);
			 $val_echue=0;
			 if($fcs[17]!=NULL){
			 $ann=$trmpfour[0]/365;
			
			 $anne=explode('.',$ann);
			 if(isset($anne[1])){
			 $ms=($trmpfour[0]-($anne[0]*365));
			 $moi=$ms/30;
			  $restTMF=$ms;
			 //echo $moi."<br>";
			 }else{
			 $moi=0;
			 }
			 $moiss=explode('.',$moi);
			 if(isset($moiss[1])){
			 $ms=($restTMF-($moiss[0]*30));
			 //echo "$restTMF-($moiss[0]*30)<br>";
			 $jour=$ms;
			 }else{
			 $jour=0.0;
			 }
			 
			 $jours=explode('.',$jour);
			 
			 $DateF = explode('-',$fcs[17]);
			 $jours=$jours[0]+$DateF[2];
		
			 if($jours>30){
			 $mois=$moiss[1]+1;
			 $jours=$jours-30;
			 }
			 $mois=$moiss[0]+$DateF[1];
			  $anne=$anne[0]+$DateF[0];
			  if($mois>12){
			 $mois=$mois-12;
			$anne=$anne+1;
			 }
			
			 $j=sprintf("%02d",$jours);
			 $m=sprintf("%02d",$mois);
			 $a=sprintf("%04d",$anne);
			 
			 $DateF = explode('-',date("Y-m-d"));
				$anECH=-$a+$DateF[0];
			
			$mECH=-$m+$DateF[1];
			
			$jECH=-$j+$DateF[2];
			$val_echue=($anECH*360)+($mECH*30)+($jECH);
			if($val_echue<0){
			$val_echue=0;
			}
			
			}else{
			$val_echue=0;
			}
			if($val_echue >0){
			$cls="danger";
 $f=$fcs['reference'];
 $tfs=mysql_query("select * from vuepurchasetotale where BonCommande='$f'");
$tt=mysql_fetch_array($tfs);
if($tt['TOTAL_COM']<0){
$rest=$tt['TOTAL_COM']+$fcs['valeur_payer'] ;
}else{
$rest=$tt['TOTAL_COM']-$fcs['valeur_payer'] ;
}
 $mv=$fcs['type_de_monnaie'];
 if (!in_array("$mv",$monitab)) {
$monitab["$mv"]=$fcs['type_de_monnaie'];
$totaltab["$mv"]=$rest;
}elseif(in_array("$mv",$monitab)){
 $totaltab[$mv]=$totaltab[$mv]+$rest;

}
		
                }else{
$cls="success";
$f=$fcs['reference'];
$tfs=mysql_query("select * from vuepurchasetotale where BonCommande='$f'");
$tt=mysql_fetch_array($tfs);
if($tt['TOTAL_COM']<0){
$rest=$tt['TOTAL_COM']+$fcs['valeur_payer'] ;
}else{
$rest=$tt['TOTAL_COM']-$fcs['valeur_payer'] ;
}
 $mv=$fcs['type_de_monnaie'];
 if (!in_array("$mv",$monitab2)) {
$monitab2["$mv"]=$fcs['type_de_monnaie'];
$totaltab2["$mv"]=$rest;
}elseif(in_array("$mv",$monitab2)){

 $totaltab2[$mv]=($totaltab2[$mv]-$rest); 
}
               }				
										  
										  
										  
										  
										 
										  ?>
										 
										  <?php?>
										  <tr class="<?php echo $cls; ?>">
										  <td><?php echo $fcs['reference'];?></td>
										  <td><?php echo $fcs['date_commande'];?></td>
										  <td><?php echo $fcs['date_echeance'];?></td>							
										  <td><?php echo $val_echue;?></td>
										  <td><?php echo $fcs['type_de_monnaie'];?></td>
										  
										
										  <td><?php echo number_format(-1*$rest,2,',','.');?></td>
									
										  </tr>
										  
										  <?php }?>



						
										  </tbody>
										  </table>

										  <br>
										  <table class="table table-bordered table-hover" id="sample_1">
										
										  <?php 
										  $tteu=0;
										  foreach ($monitab as $key) {
										 
										   ?>
										 <tr class="danger">
										 <?php if($totaltab["$key"]>0){?>
										  <td align="left" ><font size="1">DUE THIS MONTH
										  <?php for($a=0;$a<40;$a++){ echo "&nbsp;";} ?>
										 
										  TOTAL RECEIVABLE  IN    
                                          <?php for($a=0;$a<70;$a++){ echo "&nbsp;";} ?>										  
										  <?php echo $key ; ?></td>
										  <td align="right"><font size="1">
										<?php 
										
										 echo number_format($totaltab["$key"],2,',','.')."&nbsp;&nbsp;$key" ;?></td>
										
										<?php }else{ ?>
										<td align="left" ><font size="1">DUE THIS MONTH
										  <?php for($a=0;$a<40;$a++){ echo "&nbsp;";} ?>
										 
										  TOTAL PAYABLE  OUT  
                                          <?php for($a=0;$a<70;$a++){ echo "&nbsp;";} ?>										  
										  <?php echo $key ; ?></td>
										  <td align="right"><font size="1">
										<?php 
										
										 echo number_format($totaltab["$key"],2,',','.')."&nbsp;&nbsp;$key" ;?></td>
										
										<?php }?>
										
										  </tr>
										  <?php } 
										  ?>
										  </table>
										  <br>
										  <table class="table table-bordered table-hover" id="sample_1">
										
										  <?php 
										  $tteu=0;
										  foreach ($monitab2 as $key) {
										 
										   ?>
										 <tr class="success">
										 <?php if($totaltab2["$key"]>0){?>
										  <td align="left"><font size="1">NOT DUE
										   <?php for($a=0;$a<60;$a++){ echo "&nbsp;";} ?>
										 
										  TOTAL RECEIVABLE  IN
                                         <?php for($a=0;$a<70;$a++){ echo "&nbsp;";} ?>
										 										  
										  <?php echo $key ; ?></td>
										  <td align="right"><font size="1">
										<?php 
										
										 echo number_format($totaltab2["$key"],2,',','.');?></td>
										
										<?php }else{ ?>
										<td align="left"><font size="1">NOT DUE
										   <?php for($a=0;$a<60;$a++){ echo "&nbsp;";} ?>
										 
										  TOTAL PAYABLE  OUT
                                         <?php for($a=0;$a<70;$a++){ echo "&nbsp;";} ?>
										 										  
										  <?php echo $key ; ?></td>
										  <td align="right"><font size="1">
										<?php 
										
										 echo number_format($totaltab2["$key"],2,',','.');?></td>
										 <?php }?>
										  </tr>
										  <?php } 
										  ?>
										  </table>
										  <br>
										 
										  </div>
										  </div>
										  </div>
										  
										  <?php }
										


										  }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
										