<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
  if("$permission[1]"=="Administrateur" || "$permission[13]"=='13'){ 
$url=$N19.".".$N23.".".$N27;
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
  $N20 = $V20->item(0)->nodeValue;$V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;$V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;
  ?>


<script type="text/javascript"> 

function getAction(){
var max=document.getElementById("max__tb_lng").value;
test_pay=0;

for(i=1;i<=max;i++){

remember=document.getElementById('ok'+i);
	if(remember.checked == 1 ){	
	test_pay=1;
	}
	}
if(test_pay=="1"){
document.getElementById('go').innerHTML='<button type="submit"  class="btn green"><?php echo $N20; ?></button>';

}else{
document.getElementById('go').innerHTML='<button type="reset"  class="btn"><?php echo $N20; ?></button>';


}
	
	}



function Search(){
    var SRCH = null;
        if(window.XMLHttpRequest) 
        SRCH = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        SRCH = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        SRCH = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    SRCH= false;
    }
    return SRCH;
    }
  
    function SERCH_op(MN,NC,idc){
	
	
    var SRCH = Search();

    SRCH.onreadystatechange = function(){
	
    if(SRCH.readyState == 4 && SRCH.status == 200)
        {
    leselect = SRCH.responseText;
	sep=leselect.split("&&&!!!");
	test_pay=0;
		max=document.getElementById("max_com").value;
	max2=document.getElementById("max_fact").value;
	
	
	for(i=1;i<=max;i++){
	if(document.getElementById(MN+"cmdV"+i)){
	remember=document.getElementById(MN+"com"+i);
	if(remember.checked == 1 ){	
	test_pay=1;
	}}
	
	}

	for(j=1;j<=max2;j++){
	if(document.getElementById(MN+"FCTV"+j)){
	rem=document.getElementById(MN+"fact"+j);
	if(rem.checked == 1){
	test_pay=1;
}
	}}
if(test_pay==1){
Slod=1*sep[0];
devise=document.getElementById(MN);

if(MN.trim() != sep[1].trim()){
devise.innerHTML='<input type="text" value=""  id="devise'+MN+'"   required OnClick=getDesvise("'+MN+'","'+sep[1].trim()+'",this.id);  name="devise'+MN+'" style="width:70px;height:25px;" class="form-control">';

}else{
devise.innerHTML='';
}		

   document.getElementById('VRT'+MN).max=number_format(Slod, 2, '.', '');
    Rest=document.getElementById('Rest'+MN).value;
    if(Rest<=0){
	if(Rest<=Slod){
	 document.getElementById('VRT'+MN).value=number_format(Rest*-1, 2, '.', '');
	 document.getElementById('ok'+idc).disabled=false;
	 
	 
  }else{
   document.getElementById('ok'+idc).disabled=true;
	
  }
	}else{
	document.getElementById('ok'+MN).innerHTML='';
	 document.getElementById('VRT'+MN).value=0;
	 devise.innerHTML='';
	 
	}
	}else{
	document.getElementById('VRT'+MN).value='';
	}
	}
    }
	
    // Ici on va voir comment faire du post
    SRCH.open("POST","verification_donne2.php",true);
	
    SRCH.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	
SRCH.send("search_Sold="+NC);

    }
	</script>
<script type="text/javascript">


function number_format(number, decimals, dec_point, thousands_sep) {
  
  number = (number + '')
    .replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}
	function teste(MN){
	
	max=document.getElementById("max_com").value;
	tot=document.getElementById("total");
	fct=document.getElementById("fct"+MN);
	com=document.getElementById("cmd"+MN);
	tot1=document.getElementById("tt"+MN);
	rest=document.getElementById("reset"+MN);
	RST=document.getElementById("Rest"+MN);
	TF=document.getElementById("ttCom"+MN);
	TC=document.getElementById("ttFct"+MN);
	max2=document.getElementById("max_fact").value;
	$tot_com=1*0;
	$tot_fct=0*1;
	$tot=0;
	
	
	for(i=1;i<=max;i++){
	if(document.getElementById(MN+"cmdV"+i)){
	
	remember=document.getElementById(MN+"com"+i);
	valeur=document.getElementById(MN+"cmdV"+i);
	if(remember.checked == 1 ){
	var ch3=new Number(valeur.value); 
	var ch4=new Number($tot_com); 
	$tot_com=Number(ch3+ch4);
	
	}
	
	}
	
	}

	for(j=1;j<=max2;j++){
	if(document.getElementById(MN+"FCTV"+j)){
	rem=document.getElementById(MN+"fact"+j);
	valeur=document.getElementById(MN+"FCTV"+j);
	
	if(rem.checked == 1){
	var ch1=new Number(valeur.value); 
	var ch2=new Number($tot_fct); 
	$tot_fct=Number(ch1+ch2);
	
}

	}
	
	}
	
	$tot=Number($tot_fct-$tot_com);
	tot.innerHTML=$tot;
	fct.innerHTML=number_format($tot_fct, 2, ',', '.');
	com.innerHTML=number_format(-$tot_com, 2, ',', '.');
	tot1.innerHTML=number_format($tot, 2, ',', '.');
	RST.value=number_format($tot, 2, '.', '');
	TF.value=number_format($tot_com, 2, '.', '');
	TC.value=number_format($tot_fct, 2, '.', '');
	reset.value=$tot;
	
	
	} 
	</script>


<?php 
$M=mysql_query("select * from currency ");

while($M1=mysql_fetch_array($M)){
$$M1[0]=0;
}

include ("Connection.php");
//$commande=$_GET['Ref'];
$OP=$_GET['fournisseur'];
$prefx=mysql_query("select * from  prefix where element='Avoir' ");
$prefAV=mysql_fetch_array($prefx);
$COM=mysql_query("select * from  prefix where element='Commande' ");
$COMEND=mysql_fetch_array($COM);
$s=mysql_query("select * from purchase where fournisseur='$OP' AND etat_paiement='0' AND etat_commande='1' AND confirmation='1' AND Date_reception!='' AND reference like '$COMEND[0]%'");
$avoir=mysql_query("select * from purchase where fournisseur='$OP' AND etat_paiement='0' AND etat_commande='1' AND reference like '$prefAV[0]%' and Date_reception!=''");

$get_etat = mysql_query("select etat_commande from purchase where fournisseur='$OP' AND etat_paiement='0' AND etat_commande='1'");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
$currency=array();

?>
<center>
<form method="GET" action="MenuUtilisation.php">
<input type="hidden" value="allocate_argent_BC_DiviseArgent.php" name="valeur">
  <table class="table table-bordered table-hover" > 

			<thead> 
				<tr> 
   					 
    				<th><font size="1">#</h4></th>
    				<th><font size="1"><?php echo $N2; ?>#</h4></th>				
    				<th><font size="1"><?php echo $N6; ?></h4></th>
					<th><font size="1"><?php echo $N7; ?></h4></th>
					<th><font size="1"><?php echo $N21; ?></h4></th>
					<th><font size="1"><?php echo $N4; ?></h4></th>
    					</tr> 
			</thead> 
			<?php 
			$i=0;
			while($admin=mysql_fetch_array($s)){
			$i++;
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3];
			   $MNC=mysql_query("select * from currency");
                while($MNCC=mysql_fetch_array($MNC)){
				  if($MNCC[0]==$tot[4]){
				  $$MNCC[0]++;
				  
				}
				}
			    if(!in_array("$tot[4]",$currency)){
			   $currency[]=$tot[4];
			   }
			   
			   
			?>		
				<tr  > 
   					 	<td><input type="checkbox" name="com<?php echo $i; ?>" value="<?php echo $tot1-$admin[14]; ?>" id="<?php echo $tot[4]; ?>com<?php echo $i; ?>" onClick="teste('<?php echo $tot[4]; ?>');">
						<input type="hidden"   id="<?php echo "cmd".$i?>" name="<?php echo "cmd".$i?>" value="<?php echo $admin[0];?>" >
						<input type="hidden"    name="<?php echo "MNC".$i?>" value="<?php echo $tot[4]; ?>" >
						</td> 
   				
    				<td><font size="1"><?php echo $admin[0];?></font></td> 

					
					<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo  number_format(-$tot1,2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
					<td><font size="1"><?php echo  number_format(-($tot1-$admin[14]),2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
					<td><input type="Number" class="form-control" value="<?php echo number_format($tot1-$admin[14],0,'.',''); ?>" name="<?php echo $tot[4]; ?><?php echo 'cmdV'.$i; ?>" id="<?php echo $tot[4].'cmdV'.$i; ?>" max="<?php echo number_format($tot1-$admin[14],0,'.',''); ?>" min="0" onKeyUp="teste('<?php echo $tot[4]; ?>');" style="width:100px;height:35px;" class="form-control">
					</td> 
					


				
					 </tr> 
					 <?php } ?>
	 
<?php 

$j=0;
	while($admin=mysql_fetch_array($avoir)){
			$j++;
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3];
			   $MNC=mysql_query("select * from currency");
                while($MNCC=mysql_fetch_array($MNC)){
				  if($MNCC[0]==$tot[4]){
				  $$MNCC[0]++;
				  
				}
				}
			 if(!in_array("$tot[4]",$currency)){
			   $currency[]=$tot[4];
			   }
			?>		
				<tr > 
   					 	<td><input type="checkbox" name="fact<?php echo $j; ?>" value="<?php echo ($tot1-$admin[14])*-1; ?>" id="<?php echo $tot[4].'fact'.$j; ?>" onClick="teste('<?php echo $tot[4]; ?>');">
						<input readonly type="hidden" id="<?php echo "factr".$j?>" name="<?php echo "factr".$j?>" value="<?php echo $admin[0];?>" onClick="teste();">
						<input type="hidden"    name="<?php echo "MNF".$j?>" value="<?php echo $tot[4]; ?>" >
						</td> 
   				
    				<td><font size="1"><?php echo $admin[0];?></font></td> 
    			
					<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo  number_format($tot1*-1,2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
					<td><font size="1"><?php echo  number_format(($tot1-$admin[14])*-1,2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
					<td><input type="Number" class="form-control" value="<?php echo number_format(-1*$tot1-$admin[14],0,'.',''); ?>" min="0" max="<?php echo number_format(-1*$tot1-$admin[14],0,'.',''); ?>" name="<?php echo $tot[4].'FCTV'.$j; ?>" id="<?php echo $tot[4].'FCTV'.$j; ?>" style="width:100px;height:35px;" class="form-control" onKeyUp="teste('<?php echo $tot[4]; ?>');" >
					</td> 


				
					 </tr> 				
<?php 
}

?>


<?php 
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);


?>

						<?php
$req=mysql_query("select * from currency where Monnaie_utliser=1");
$monnaie=mysql_fetch_array($req);

$op=$OP;
			$fact=mysql_query("select * from  invoice where client='$OP' and etat_payement=0 and Draft='1'");
			$fct=mysql_fetch_array($fact);
			if($fct!=NULL){

	
				 $FCTT=mysql_query("select * from  prefix where element='Facture' ");
                   $FP=mysql_fetch_array($FCTT);
				    $AVP=mysql_query("select * from  prefix where element='Avoir' ");
                   $AVP=mysql_fetch_array($AVP);
			$fact=mysql_query("select * from  vueinvoicetotale V ,invoice I where V.ClientFacture='$op' and V.facture=I.id_facture and I.draft='1' and  I.id_facture like '$FP[0]%'");
			$AVF=mysql_query("select * from  vueinvoicetotale V ,invoice I where V.ClientFacture='$op' and V.facture=I.id_facture and I.draft='1' and  I.id_facture like '$AVP[0]%'");
			
			$MN="";
			
			while($fct=mysql_fetch_array($fact)){
			
				   
			$d=mysql_query("select * from invoice where id_facture='$fct[0]' and etat_payement=0");
			$b1=mysql_fetch_array($d);
			if(	$b1!=NULL){
			$j++;
			$tot_fact=0;
			$tot_fact_dev=0;
			$devisee=mysql_query("select * from invoice where id_facture='$fct[0]' and etat_payement=0");
			$b=mysql_fetch_array($devisee);
			$tot_fact=$tot_fact+($fct[3]);
			$tot_fact_dev=$tot_fact_dev+($fct[3]);
			$MN=$b[9];
			$MNC=mysql_query("select * from currency");
                while($MNCC=mysql_fetch_array($MNC)){
				  if($MNCC[0]==$MN){
				  $$MNCC[0]++;
				  
				}
				}
			if(!in_array("$MN",$currency)){
			   $currency[]=$MN;
			   }
			?><tr>
   					<td><input type="checkbox" id="<?php echo $b[9].'fact'.$j?>" name="<?php echo "fact".$j?>" value="<?php echo $tot_fact-$b[18];?>" onClick="teste('<?php echo $b[9]; ?>');"><input type="hidden"  readonly id="<?php echo "factr".$j?>" name="<?php echo "factr".$j?>" value="<?php echo $b[3];?>" onClick="teste();"></td> 
   					<input type="hidden"    name="<?php echo "MNF".$j?>" value="<?php echo $b[9]; ?>" >
					<td><font size="1"><?php echo $fct[0]; ?></td> 
   					
   					<td><font size="1"><?php echo $fct['date_lancement']; ?></td> 
   					<td><font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$b[9];?></td>
   					<td><font size="1"><?php echo number_format($tot_fact-$b[18],2,',','.')."  ".$b[9];?></td>
				<td><input type="Number" class="form-control" value="<?php echo number_format($tot_fact-$b[18],0,'.',''); ?>" min="0" max="<?php echo number_format($tot_fact-$b[18],0,'.',''); ?>" name="<?php echo $b[9].'FCTV'.$j; ?>" id="<?php echo $b[9].'FCTV'.$j; ?>" style="width:100px;height:35px;" class="form-control" onKeyUp="teste('<?php echo $b[9]; ?>');">
					</td> 
				</tr>
				
		<?php }
			}
			?>
			
			<?php
			while($fct=mysql_fetch_array($AVF)){
			
				   
			$d=mysql_query("select * from invoice where id_facture='$fct[0]' and etat_payement=0");
			$b1=mysql_fetch_array($d);
			if(	$b1!=NULL){
			$i++;
			$tot_fact=0;
			$tot_fact_dev=0;
			$devisee=mysql_query("select * from invoice where id_facture='$fct[0]' and etat_payement=0");
			$b=mysql_fetch_array($devisee);
			$tot_fact=$tot_fact+($fct[3]);
			$tot_fact_dev=$tot_fact_dev+($fct[3]);
			$MN=$b[9];
			$MNC=mysql_query("select * from currency");
                while($MNCC=mysql_fetch_array($MNC)){
				  if($MNCC[0]==$MN){
				  $$MNCC[0]++;
				  
				}
				}
if(!in_array("$MN",$currency)){
			   $currency[]=$MN;
			   
			   }
			?><tr>
   					<td><input type="checkbox" id="<?php echo $b[9]; ?><?php echo "com".$i?>" name="<?php echo "com".$i?>" value="<?php echo ($tot_fact-$b[18])*-1;?>" onClick="teste('<?php echo $b[9]; ?>');"><input type="hidden"  readonly id="<?php echo "cmd".$i?>" name="<?php echo "cmd".$i?>" value="<?php echo $b[3];?>" >
					<input type="hidden"    name="<?php echo "MNC".$i?>" value="<?php echo $b[9]; ?>" >
					</td> 
   					<td><font size="1"><?php echo $fct[0]; ?></td> 
   					
   					<td><font size="1"><?php echo $fct['date_lancement']; ?></td> 
   					<td><font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$b[9];?></td>
   					<td><font size="1"><?php echo number_format($tot_fact-$b[18],2,',','.')."  ".$b[9];?></td>
				      <td><input type="Number" class="form-control"  value="<?php echo number_format(-1*($tot_fact-$b[18]),0,'.',''); ?>" min="0" max="<?php echo number_format(-1*($tot_fact-$b[18]),0,'.',''); ?>" name="<?php echo $b[9].'cmdV'.$i; ?>" id="<?php echo $b[9].'cmdV'.$i; ?>" style="width:100px;height:35px;"  onKeyUp="teste('<?php echo $b[9]; ?>');" class="form-control">
					</td> 
				</tr>
				
		<?php }
			}
	

}
else{
?>
<font color="red" size="2"><?php echo $N14; ?>   &nbsp;:&nbsp; <?php echo $OP ; ?>   </font>
<?php } ?>
 

</tbody></table>

						<caption><font color="#0babf6" ><b><?php echo $N15; ?> </b></font></caption><br>
 <table class="table table-bordered table-hover" >
			<thead> 
				<tr> 
   					 
    				<th><font size="1"><?php echo $N22; ?></h4></th>
					<th><font size="1">(-)</h4></th>
					<th><font size="1">(+)</h4></th> 
					<th><font size="1"><?php echo $N18; ?></h4></th> 
					<th><font size="1"><?php echo $N16; ?></h4></th> 
					<th><font size="1">devise</th>
    				<th><font size="1">valider</th>
    				
    					</tr> 
			</thead> 
			<?php
			$max_tb=0;
			foreach($currency as $c ){
			$max_tb++;
			?>
				<tr class="success"> 
   					 
   					 <td><font size="1"><?php echo $c;  ?></font></td>
					 <input name="<?php echo $max_tb; ?>" value="<?php echo $c;  ?>" type="hidden" >
    				<td><font size="1"><div id="cmd<?php echo $c; ?>"><?php echo number_format(0,2,',','.')."  ".$monnaie[0];?></Div></font>
					<input name="ttCom<?php echo $c; ?>" id="ttCom<?php echo $c; ?>" type="hidden">
					<input name="ttFct<?php echo $c; ?>" id="ttFct<?php echo $c; ?>" type="hidden">
					<input name="Rest<?php echo $c; ?>" id="Rest<?php echo $c; ?>" type="hidden">
					</td> 
    				<td><font size="1"><div id="fct<?php echo $c; ?>"><?php echo number_format(0,2,',','.')."  ".$monnaie[0];?></Div></font></td> 
    				<td><font size="1"><div id="tt<?php echo $c; ?>"><?php echo number_format(0,2,',','.')."  ".$monnaie[0];?></Div></font></td> 
			        <td>
					<select name="Banque<?php echo$c;?>" id="Banque<?php echo $c;?>"  onchange="SERCH_op('<?php echo $c;?>',this.value,<?php echo $max_tb;?>);" class="form-control select2me" >
					<option value=""></option>
					<?php
						$BQ=mysql_query("select * from bank_account  ");
while($BNQ=mysql_fetch_array($BQ)){
?>
<option value="<?php echo $BNQ[0]; ?>"><?php echo $BNQ[1].'('.$BNQ[0].','.$BNQ[7].')'; ?></option>
<?php }

					?>
					
					</select>
			        </td>
					
					<input type="Hidden"  min="0" max="0" readonly id="VRT<?php echo $c; ?>" name="MPB<?php echo $c; ?>" style="width:100px;height:35px;" class="form-control" ?>
					
					<td id="<?php echo $c; ?>">
					
					</td>
					
					<td id="ok<?php echo $c; ?>">
					<input type="checkbox" value="" id="ok<?php  echo $max_tb; ?>"   name="ok<?php echo $c; ?>" disabled="disabled" onclick="getAction();">
					</td>
					</tr> 	
<?php  } ?>					 

</table>
			<input type="hidden" value="" id="total" >
			<input type="hidden" value="<?php echo $j; ?>" NAME="j" >
			<input type="hidden" value="<?php echo $i; ?>" name="i" ><input type="hidden" value="<?php echo $op; ?>" name="partener"   >
			<input type="hidden" value="<?php  echo $OP ; ?>" name="partener"  >
			<input type="hidden" value="" name="reset"  id="reset">
<input type="hidden" value="<?php echo $N19; ?>" name="titre" >

							<?php

							$MN=mysql_query("select * from currency ");
							$OCC=0;
							while($MNN=mysql_fetch_array($MN)){

								}
echo "<input type=hidden id=max_fact name=max_fact value=$j >";
echo "<input type=hidden id=max_com  name=max_com value=$i >";
echo "<input type=hidden  name=max__tb_lng  id=max__tb_lng value=$max_tb >";
foreach($currency as $cur){
echo "<input type=hidden  name=Monaie[] id=Monaie[] value=$cur >";
}
							 ?>	
							 
							 
 <div class="form-actions" >
									<div class="row">
										<div class="col-md-offset-3 col-md-5" id="go">
											<button type="reset"  class="btn"><?php echo $N20; ?></button>
											
										</div>
									</div>
									
									
</div>
						</form>
							<?php


							} ?>	</center>
					<?php		}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	