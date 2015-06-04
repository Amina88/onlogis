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
if("$permission[1]"=="Administrateur" || "$permission[16]"=='16') {
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
  $N11 = $V11->item(0)->nodeValue;
  ?>
<div class="row">
   
<div class="portlet box white-hoki">
   <div class="portlet-title" >
							<div class="caption">
								<font color="fff"><?php echo $N1 ?>
								<?php echo date("d-m-Y"); ?></font>
							</div>
							<div class="tools" >
							</div>
						</div>
						<div class="portlet-body">
					
							<table class="table table-bordered table-hover " id="sample_1">


									
										
										  
										   <?php 
										   $NomSoc=$_GET['NomSOC'];
										   
										   $fc=mysql_query("select * from purchase where confirmation=1  AND etat_paiement=0 and fournisseur='$NomSoc'");
										   $monitab=array();
										   $totaltab=array();
										   $totalechue=array();
										   $monitab2=array();
                                           $totaltab2=array();
										   
										   $trmp= mysql_query("SELECT terme_paiement  from  `supplier` where Nom_Soc='$NomSoc'");
			                               $trmpfour=mysql_fetch_array($trmp);
			                               $restTMF=$trmpfour[0];
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
										  
										  while($fcs=mysql_fetch_array($fc)){
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
 $totaltab2[$mv]=$totaltab2[$mv]+$rest; 
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
										  
										
										  <td><?php echo number_format($rest,2,',','.');?></td>
									
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
										 
										  TOTAL RECEIVABLE  OUT    
                                          <?php for($a=0;$a<70;$a++){ echo "&nbsp;";} ?>										  
										  <?php echo $key ; ?></td>
										  <td align="right"><font size="1">
										<?php 
										
										 echo number_format($totaltab["$key"],2,',','.')."&nbsp;&nbsp;" ;?></td>
										
										<?php }else{ ?>
										<td align="left" ><font size="1">DUE THIS MONTH
										  <?php for($a=0;$a<40;$a++){ echo "&nbsp;";} ?>
										 
										  TOTAL PAYABLE  O   
                                          <?php for($a=0;$a<70;$a++){ echo "&nbsp;";} ?>										  
										  <?php echo $key ; ?></td>
										  <td align="right"><font size="1">
										<?php 
										
										 echo number_format($totaltab["$key"]*-1,2,',','.')."&nbsp;&nbsp;" ;?></td>
										
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
										 
										  TOTAL PAYABLE  IN
                                         <?php for($a=0;$a<70;$a++){ echo "&nbsp;";} ?>
										 										  
										  <?php echo $key ; ?></td>
										  <td align="right"><font size="1">
										<?php 
										
										 echo number_format($totaltab2["$key"]*-1,2,',','.');?></td>
										 <?php }?>
										  </tr>
										  <?php } 
										  ?>
										  </table>
										  <br>
	
										  
										  
										  
										 
										  
										  
			                             
										  
										  
										  
										
										  </div>
										  </div>
										  </div>
										  
										  <?php } }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	