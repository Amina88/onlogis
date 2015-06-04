<?php 
include ("Connection.php");
  if("$permission[1]"=="Administrateur" || "$permission[13]"=='13'){ 
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
  $N18 = $V18->item(0)->nodeValue;$V19 = $employee->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;$V20 = $employee->getElementsByTagName( "e20" ); 
  $N20 = $V20->item(0)->nodeValue;
  ?>
  <script type="text/javascript">
  function getAction(){
var maxC=document.getElementById("ttC").value;
var maxA=document.getElementById("ttA").value;
var TTALL=document.getElementById("Arg").value;
var valider=document.getElementById("valider");
test_pay=1;
VPC=0;
VPA=0;

for(i=1;i<=maxC;i++){
devise=1;

VP=(document.getElementById('VP'+i).value)*1;
if(document.getElementById('dev'+i)){
devise=(document.getElementById('dev'+i).value)*1;
if(devise==0){
test_pay=0;
}
TNP=(document.getElementById('TNPC'+i).value)*1;
VPP=VP*devise;
rest=TNP-VPP+1;
if(rest<0){
test_pay=0;


}
}	
VPC=VPC+VP;
	
	
}
	for(j=1;j<=maxA;j++){

VP=(document.getElementById('VPA'+j).value)*1;
if(document.getElementById('devA'+j)){
devise=(document.getElementById('devA'+j).value)*1;
if(devise==0){
test_pay=0;
}
TNP=(document.getElementById('TNPF'+j).value)*1;
VPP=VP*devise;
rest=TNP-VPP+1;
if(rest<0){
test_pay=0;


}
}
	VPA=VPA+VP;

	}
	
	tt=VPC+VPA;
	
	TTALL=TTALL-tt;
	if(TTALL<0){
	test_pay=0;
	
	}
if(test_pay=="1" ){

if(valider.checked){
document.getElementById('go').innerHTML='<button type="submit"  class="btn green"><?php echo $N18; ?></button>';
}
}else{
if(valider.checked){
valider.checked=false;
}
document.getElementById('go').innerHTML='<button type="reset"  class="btn"><?php echo $N18; ?></button>';


}}
	
	
	</script>
	<?php
$client=$_GET['client'];
$Ref=$_GET['ref'];
$prefx=mysql_query("select * from  prefix where element='Argent_sortie' ");
$pref=mysql_fetch_array($prefx);
$type=explode("$pref[0]",$Ref);
if(isset($type[1])){
$typep="paiment";
$V19 = $employee->getElementsByTagName( "e19" ); 
  $N10 = $V19->item(0)->nodeValue;
}else{
$typep="recevoir";
}

$comp=$_GET['compte'];

$arg=mysql_query("select * from money where id='$Ref'");
$adm=mysql_fetch_array($arg);
?>
 <div id="etat">
<?php if(isset($_GET['etat'])){ ?>
 <caption><font color="red" ><b><?php echo $N1; ?> <?php echo "<u>".$_GET['client']."</u>:";?></b></font><br></caption><br>
<?php } ?>
 </DIV>
 <br>
 
 <div class="note note-info note-shadow">
						<p>
							 <?php echo $N10; ?> <?php echo ":&nbsp;&nbsp;&nbsp;<i>".$_GET['client']."</i>";?>	
							 </p>
					</div>
 <table class="table table-bordered table-hover">

			<thead> 
				<tr> 
    				<th><font size="1"><?php echo $N11; ?></th> 
    				<th><font size="1"><?php echo $N12; ?></th> 
					<th><font size="1"><?php echo $N13; ?></th> 
					<th><font size="1"><?php echo $N14; ?></th> 
    				 <th><font size="1"><?php echo $N16; ?></th>
    				 <th><font size="1"><?php echo $N17; ?></th>
				</tr> 
			</thead> 
			<?php 
$banques=mysql_query("select * from  bank_account where Numero_Compte='$adm[6]' ");
$banquess=mysql_fetch_array($banques);

         ?>
			 <tbody>
				<tr  > 
   					<td><font size="1"><?php echo $adm[0];?></font></td> 
    				<td><font size="1"><?php echo $adm[1];?></font></td> 
					<td><font size="1"><?php echo $adm[2];?></font></td>				
					<td><font size="1"><?php echo $banquess[1].'('.$adm[6].')';?></font></td>							
					<td><font size="1"><?php echo number_format($adm[7],2,',','.');?>&nbsp;<?php echo $banquess[7];?></font></td>				
					<td><font size="1"><?php echo number_format($adm[8],2,',','.');?>&nbsp;<?php echo $banquess[7];?></font></td>				
						</tr> 
				
			</tbody>

			 </table><br>
			 <?php 
			 $val=$adm[8];
			
if($client!="" && $typep=="recevoir"){
$maxpay=mysql_query("select * from  prefix where element='Avoir'");
$maxpayId=mysql_fetch_array($maxpay);
$maxpayAv=mysql_query("select * from  prefix where element='Facture'");
$maxpayIdAv=mysql_fetch_array($maxpayAv);
$s=mysql_query("select * from purchase where fournisseur='$client'  AND etat_paiement='0' AND confirmation='1' AND etat_commande='1' ");
$s1=mysql_query("select * from purchase where fournisseur='$client'  AND etat_paiement='0' AND confirmation='1' AND etat_commande='1'  ");
$Avoir=mysql_query("select * from invoice where client='$client'  AND etat_payement='0' AND Draft='1' ");
$Avoir2=mysql_query("select * from invoice where client='$client'  AND etat_payement='0' AND Draft='1' ");


$S2=mysql_fetch_array($s1);
$Av=mysql_fetch_array($Avoir2);
if($S2!=NULL || $Av!=NULL){
?>
<div class="note note-info note-shadow">
						<p>
							 <?php echo $N2; ?> <?php echo ":&nbsp;&nbsp;&nbsp;<i>".$_GET['client']."</i>";?></p>
					</div>

<form method="POST" action="MenuUtilisation.php?valeur=allocate.php">
<input type="hidden" value="<?php echo "$client"; ?>" name="client">
<input type="hidden" name="MN" value="<?php echo $banquess[7]; ?>">
<input type="hidden" name="Ref" value="<?php echo $Ref; ?>">
<input type="hidden" name="msg" value="<?php echo $N1; ?>">
<input type="hidden" name="compte" value="<?php echo $banquess[0]; ?>">
<input type="hidden" name="Arg" id="Arg" value="<?php echo $adm[8]; ?>">
<input type="hidden" name="titre" value="<?php echo $_GET['titre']; ?>">
<input type="hidden" name="urlP" value="<?php echo $_GET['url']; ?>">
<table class="table table-bordered table-hover"> 
			<thead> 
				<tr> 
    				<th><font size="1"><?php echo $N3; ?></th> 
    				<th><font size="1"><?php echo $N5; ?></th> 
    				 <th><font size="1"><?php echo $N6; ?></th>
    				 <th><font size="1"><?php echo $N7; ?></th>
    				 <th><font size="1"><?php echo $N8; ?></th>
    				 <th><font size="1"><?php echo $N9; ?></th>
    				 
    				
				</tr> 
			</thead> 
<?php $date=$date=date("Y-m-d");
	
			 $Auj = explode('-',$date);
			 $tt=0;$ab=0;
			while($admin=mysql_fetch_array($s)){
			$tt++;
			 $DateF = explode('-',$admin[7]);
			 $val_echue=0;
			if($Auj[0]==$DateF[0]){
			if($Auj[1]==$DateF[1]){
			if($Auj[2]==$DateF[2]){
			$val_echue=0;
			}elseif($Auj[2]<$DateF[2]){$val_echue=0;}else{$val_echue=$Auj[2]-$DateF[2];}
		
			}
			elseif($Auj[1]<$DateF[1]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$val_echue=$J+$M;}
			}elseif($Auj[0]<$DateF[0]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$ANN=($Auj[0]-$DateF[0])*12*30;$val_echue=$J+$M+$ANN;}
			$factur=mysql_query("select * from purchase where reference='$admin[0]'");
			$facture=mysql_fetch_array($factur);
			$TNP=0;
$el=mysql_query("select Total from finalpurchase where BonCommande='$facture[0]'");
$tot=0.00;

while($element=mysql_fetch_array($el)){

    
$TNP=$TNP+$element[0]  ;
}
$TNPP=(($TNP*-1)-$admin[14])  ;
			if($val <= $TNPP){
			$ab=$val;
			$val=$val-$ab;
			}else{
			$ab=$TNPP;
			$val=$val-$ab;
			}
			
			
         ?>
			 
				<tr> 
   					<td><font size="1"><?php echo $admin[0];?></font></td> 
    				<td><font size="1"><?php echo $admin[15];?></font></td>				
				<td><font size="1"><?php echo number_format($TNP*-1,2,',','.');?>&nbsp;<?php echo $admin[7];?></font></td> 
				<td><font size="1"><?php echo number_format((-1*$TNP)-$admin[14],2,',','.');?>&nbsp;<?php echo $admin[7];?>
				<input type="hidden" value="<?php echo ((-1*$TNP)-$admin[14]);?>" id="TNPC<?php echo $tt; ?>" name="TNPC<?php echo $tt; ?>">
				<input type="hidden" value="<?php echo $admin[0];?>" name="IDC<?php echo $tt; ?>"></font></td> 
					<td><input type="Number" value="<?php echo number_format($ab,2,'.',''); ?>" min="0" onKeyUP="getAction();"   NAME="VP<?php echo $tt; ?>" id="VP<?php echo $tt; ?>" style="width:140px;height:35px;" class="form-control"></font></td> 
					<?php if($admin[7]!=$banquess[7]){?>
					<td><input type="text" value=""  id="<?php echo "dev".$tt; ?>"   required OnClick="getDesvise('<?php echo $banquess[7];?>','<?php echo $admin[7];?>',this.id);" name="<?php echo 'devise'.$admin[0]; ?>" style="width:120px;height:35px;" onMouseOut="getAction();" class="form-control"></font></td> 
						<?php }else{ ?>
						<td></td>
						<?php } ?>
						
				
					<input type="hidden" value="<?php echo number_format($tot,2,'.',''); ?>" name="<?php echo $tt; ?>" style="width:140px;height:17px;">
					</tr>
					
					
				
			
<?php }  
$ttA=0;
		while($admin=mysql_fetch_array($Avoir)){
			$ttA++;
			 $DateF = explode('-',$admin[7]);
			 $val_echue=0;
			if($Auj[0]==$DateF[0]){
			if($Auj[1]==$DateF[1]){
			if($Auj[2]==$DateF[2]){
			$val_echue=0;
			}elseif($Auj[2]<$DateF[2]){$val_echue=0;}else{$val_echue=$Auj[2]-$DateF[2];}
		
			}
			elseif($Auj[1]<$DateF[1]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$val_echue=$J+$M;}
			}elseif($Auj[0]<$DateF[0]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$ANN=($Auj[0]-$DateF[0])*12*30;$val_echue=$J+$M+$ANN;}
			$factur=mysql_query("select * from invoice where id_facture='$admin[3]'");
			$facture=mysql_fetch_array($factur);
$TNP=0;
$el=mysql_query("select TotalElement from finalinvoice where facture='$facture[3]'");
$tot=0.00;
while($element=mysql_fetch_array($el)){

    
$TNP=$TNP+$element[0]   ;
}
$TNPP=((($TNP))-$admin[18])  ;
			if($val <= $TNPP){
			$ab=$val;
			$val=$val-$ab;
			}else{
			$ab=$TNPP;
			$val=$val-$ab;
			}
			
			
         ?>
			 
				<tr  > 
   					<td><font size="1"><?php echo $admin[3];?></font></td> 
    				<td><font size="1"><?php echo $admin[10];?></font></td>				
				<td><font size="1"><?php echo number_format($TNP,2,',','.');?>&nbsp;<?php echo $admin[9];?></font></td> 
				<td><font size="1"><?php echo number_format(($TNP-$admin[18]),2,',','.');?>&nbsp;<?php echo $admin[9];?>
				<input type="hidden" value="<?php echo (($TNP)-$admin[18]);?>" id="TNPF<?php echo $ttA; ?>" name="TNPF<?php echo $ttA; ?>">
				<input type="hidden" value="<?php echo $admin[3];?>" name="IDF<?php echo $ttA; ?>"></font></td> 
					<td><input type="Number"  value="<?php echo number_format($ab,2,'.',''); ?>" min="0"  onKeyUP="getAction();"   NAME="VPA<?php echo $ttA; ?>" id="VPA<?php echo $ttA; ?>" style="width:140px;height:35px;" class="form-control"></font></td> 
											
					<?php if($admin[9]!=$banquess[7]){?>
					<td><input type="text" value=""   id="<?php echo "devA".$ttA; ?>" OnClick="getDesvise('<?php echo $banquess[7];?>','<?php echo $admin[9];?>',this.id);" required class="form-control" name="<?php echo 'devise'.$admin[3]; ?>"  onMouseOut="getAction();"  style="width:80px;height:35px;"></font></td> 
						<?php }else{ ?>
						<td></td>
						<?php } ?>
						
				
					<input type="hidden" value="<?php echo number_format($tot,2,'.',''); ?>" name="<?php echo $tt; ?>" style="width:140px;height:35px;">
					</tr> 
					
					
				
			
<?php }

?>
<tr>
<td  colspan="6" color="green"><font size="1"><?php echo $N1; ?>&nbsp;
<input type="checkbox" class="form-control" id="valider" onclick="getAction();" > 
				</td>

</tr>
 </table>

<br>
			 
			 <input type="hidden" value="<?php echo $ttA ; ?>" name="ttA" id="ttA">
			 <input type="hidden" value="<?php echo $tt ; ?>" name="ttC" id="ttC">
			 	
			  <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-5" id="go">
											<button type="reset"  class="btn"><?php echo $N18; ?></button>
											
										</div>
									</div>
									
									
</div>

<?php
}else{

}

// paiment
}else{
$maxpay=mysql_query("select * from  prefix where element='Commande'");
$maxpayId=mysql_fetch_array($maxpay);
$maxpayAv=mysql_query("select * from  prefix where element='Avoir'");
$maxpayIdAv=mysql_fetch_array($maxpayAv);
$s=mysql_query("select * from purchase where fournisseur='$client'  AND etat_paiement='0' AND confirmation='1' AND etat_commande='1' and reference like '$maxpayId[0]%'");
$s1=mysql_query("select * from purchase where fournisseur='$client'  AND etat_paiement='0' AND confirmation='1' AND etat_commande='1' and reference like '$maxpayId[0]%' ");
$Avoir=mysql_query("select * from invoice where client='$client'  AND etat_payement='0' AND Draft='1' and id_facture like '$maxpayIdAv[0]%'");
$Avoir2=mysql_query("select * from invoice where client='$client'  AND etat_payement='0' AND Draft='1' and id_facture like '$maxpayIdAv[0]%'");

if($client==''){
$s=mysql_query("select * from purchase where  etat_paiement='0' AND confirmation='1' AND etat_commande='1'  ");
$s1=mysql_query("select * from purchase where etat_paiement='0' AND etat_paiement='0' AND confirmation='1'  AND etat_commande='1' ");

}
$S2=mysql_fetch_array($s1);
$Av=mysql_fetch_array($Avoir2);
if($S2!=NULL || $Av!=NULL){
?>

<div class="note note-info note-shadow">
						<p>
							 <?php echo $N20; ?> <?php echo ":&nbsp;&nbsp;&nbsp;<i>".$_GET['client']."</i>";?></p>
					</div>


<form method="POST" action="MenuUtilisation.php?valeur=allocate.php">
<input type="hidden" value="<?php echo "$client"; ?>" name="client">
<input type="hidden" name="MN" value="<?php echo $banquess[7]; ?>">
<input type="hidden" name="Ref" value="<?php echo $Ref; ?>">
<input type="hidden" name="msg" value="<?php echo $N1; ?>">
<input type="hidden" name="compte" value="<?php echo $banquess[0]; ?>">
<input type="hidden" name="Arg"  id="Arg" value="<?php echo $adm[8]; ?>">
<input type="hidden" name="type_BC" value="type_BC">
<input type="hidden" name="titre" value="<?php echo $_GET['titre']; ?>">
<input type="hidden" name="urlP" value="<?php echo $_GET['url']; ?>">
<table class="table table-bordered table-hover"> 
			<thead> 
				<tr> 
    				<th><font size="1"><?php echo $N3; ?></th> 
    				<th><font size="1"><?php echo $N5; ?></th> 
    				 <th><font size="1"><?php echo $N6; ?></th>
    				 <th><font size="1"><?php echo $N7; ?></th>
    				 <th><font size="1"><?php echo $N8; ?></th>
    				 <th><font size="1"><?php echo $N9; ?></th>
    				 
    				
				</tr> 
			</thead> 
			<?php $date=$date=date("Y-m-d");
	
			 $Auj = explode('-',$date);
			 $tt=0;$ab=0;
			while($admin=mysql_fetch_array($s)){
			$tt++;
			 $DateF = explode('-',$admin[7]);
			 $val_echue=0;
			if($Auj[0]==$DateF[0]){
			if($Auj[1]==$DateF[1]){
			if($Auj[2]==$DateF[2]){
			$val_echue=0;
			}elseif($Auj[2]<$DateF[2]){$val_echue=0;}else{$val_echue=$Auj[2]-$DateF[2];}
		
			}
			elseif($Auj[1]<$DateF[1]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$val_echue=$J+$M;}
			}elseif($Auj[0]<$DateF[0]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$ANN=($Auj[0]-$DateF[0])*12*30;$val_echue=$J+$M+$ANN;}
			$factur=mysql_query("select * from purchase where reference='$admin[0]'");
			$facture=mysql_fetch_array($factur);
$TNP=0;
$el=mysql_query("select Total from finalpurchase where BonCommande='$facture[0]'");
$tot=0.00;

while($element=mysql_fetch_array($el)){

    
$TNP=$TNP+$element[0]  ;
}
$TNPP=(($TNP*-1)-$admin[14])  ;
			if($val <= $TNPP){
			$ab=$val;
			$val=$val-$ab;
			}else{
			$ab=$TNPP;
			$val=$val-$ab;
			}
			
			
         ?>
			 
				<tr> 
   					<td><font size="1"><?php echo $admin[0];?></font></td> 
    				<td><font size="1"><?php echo $admin[15];?></font></td>				
				<td><font size="1"><?php echo number_format($TNP,2,',','.');?>&nbsp;<?php echo $admin[7];?></font></td> 
				<td><font size="1"><?php echo number_format($TNP-$admin[14],2,',','.');?>&nbsp;<?php echo $admin[7];?>
				<input type="hidden" value="<?php echo ($TNP-$admin[14]);?>" id="TNPC<?php echo $tt; ?>" name="TNPC<?php echo $tt; ?>">
				<input type="hidden" value="<?php echo $admin[0];?>" name="IDC<?php echo $tt; ?>"></font></td> 
					<td><input type="Number" value="<?php echo number_format($ab,2,'.',''); ?>" min="0" onKeyUP="getAction();"   NAME="VP<?php echo $tt; ?>" id="VP<?php echo $tt; ?>" style="width:140px;height:35px;" class="form-control"></font></td> 
					<?php if($admin[7]!=$banquess[7]){?>
					<td><input type="text" value=""  id="<?php echo "dev".$tt; ?>"   required OnClick="getDesvise('<?php echo $banquess[7];?>','<?php echo $admin[7];?>',this.id);" name="<?php echo 'devise'.$admin[0]; ?>" style="width:120px;height:35px;" onMouseOut="getAction();" class="form-control"></font></td> 
						<?php }else{ ?>
						<td></td>
						<?php } ?>
						
				
					<input type="hidden" value="<?php echo number_format($tot,2,'.',''); ?>" name="<?php echo $tt; ?>" style="width:140px;height:17px;">
					</tr>
					
					
				
			
<?php }  
$ttA=0;
		while($admin=mysql_fetch_array($Avoir)){
			$ttA++;
			 $DateF = explode('-',$admin[7]);
			 $val_echue=0;
			if($Auj[0]==$DateF[0]){
			if($Auj[1]==$DateF[1]){
			if($Auj[2]==$DateF[2]){
			$val_echue=0;
			}elseif($Auj[2]<$DateF[2]){$val_echue=0;}else{$val_echue=$Auj[2]-$DateF[2];}
		
			}
			elseif($Auj[1]<$DateF[1]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$val_echue=$J+$M;}
			}elseif($Auj[0]<$DateF[0]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$ANN=($Auj[0]-$DateF[0])*12*30;$val_echue=$J+$M+$ANN;}
			$factur=mysql_query("select * from invoice where id_facture='$admin[3]'");
			$facture=mysql_fetch_array($factur);
$TNP=0;
$el=mysql_query("select TotalElement from finalinvoice where facture='$facture[3]'");
$tot=0.00;
while($element=mysql_fetch_array($el)){

    
$TNP=$TNP+$element[0]   ;
}
$TNPP=((($TNP))-$admin[18])  ;
			if($val <= $TNPP){
			$ab=$val;
			$val=$val-$ab;
			}else{
			$ab=$TNPP;
			$val=$val-$ab;
			}
			
			
         ?>
			 
				<tr  > 
   					<td><font size="1"><?php echo $admin[3];?></font></td> 
    				<td><font size="1"><?php echo $admin[10];?></font></td>				
				<td><font size="1"><?php echo number_format((-1*$TNP),2,',','.');?>&nbsp;<?php echo $admin[9];?></font></td> 
				<td><font size="1"><?php echo number_format(($TNP+$admin[18])*-1,2,',','.');?>&nbsp;<?php echo $admin[9];?>
				<input type="hidden" value="<?php echo (($TNP*-1)-$admin[18]);?>" id="TNPF<?php echo $ttA; ?>" name="TNPF<?php echo $ttA; ?>">
				<input type="hidden" value="<?php echo $admin[3];?>" name="IDF<?php echo $ttA; ?>"></font></td> 
					<td><input type="Number"  value="<?php echo number_format($ab,2,'.',''); ?>" min="0"  onKeyUP="getAction();"   style="width:140px;height:35px;" class="form-control"></font></td> 
											
					<?php if($admin[9]!=$banquess[7]){?>
					<td><input type="text" value=""   id="<?php echo "devA".$ttA; ?>" OnClick="getDesvise('<?php echo $banquess[7];?>','<?php echo $admin[9];?>',this.id);" required class="form-control" name="<?php echo 'devise'.$admin[3]; ?>"  onMouseOut="getAction();"  style="width:80px;height:35px;"></font></td> 
						<?php }else{ ?>
						<td></td>
						<?php } ?>
						
				
					<input type="hidden" value="<?php echo number_format($tot,2,'.',''); ?>" name="<?php echo $tt; ?>" style="width:140px;height:35px;">
					</tr> 
					
					
				
			
<?php }

?>
<tr>
<td  colspan="6" color="green"><font size="1"><?php echo $N1; ?>&nbsp;
<input type="checkbox" class="form-control" id="valider" onclick="getAction();" > 
				</td>

</tr>
 </table>
 
 <br>
			 
			 <input type="hidden" value="<?php echo $ttA ; ?>" name="ttA" id="ttA">
			 <input type="hidden" value="<?php echo $tt ; ?>" name="ttC" id="ttC">
			 	
			  <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-5" id="go">
											<button type="reset"  class="btn"><?php echo $N18; ?></button>
											
										</div>
									</div>
									
									
</div>
<?php
}else{

}
 } ?>
			 </form>
		</td>
			 <?php } }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	