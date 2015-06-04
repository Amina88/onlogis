<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
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

function teste(){
	
	max=document.getElementById("max_com").value;
	tot1=document.getElementById("tt");
	tot=document.getElementById("sold");
	sold=document.getElementById("sold1");
	
	$tot_com=1*0;
	$tot=0;
	
	
	for(i=1;i<=max;i++){
	remember=document.getElementById("com"+i);
	
	if(remember.checked == 1){
	var ch3=new Number(remember.value); 
	var ch4=new Number($tot_com); 
	$tot_com=Number(ch3+ch4);

	
	}
	
	}
	
	
	$tot=Number(sold.value-$tot_com);
	
	tot.value=number_format($tot, 2, ',', '.');
	tot1.value=number_format($tot_com, 2, ',', '.');
	} 
	</script>
<?php 
foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
  $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue; 
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" );  $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" );  $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" );  $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" );  $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" );  $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" );  $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" );  $N18 = $V18->item(0)->nodeValue;

include ("Connection.php");
if(isset($_GET['type'])){
$m=mysql_query("select * from currency where Monnaie_utliser='1'");

$monnaie=mysql_fetch_array($m);
$compt=$_GET['bank_account'];
$id=$_GET['id'];
$comptee=mysql_query("select * from bank_account  where Numero_Compte='$compt'");
$cpt=mysql_fetch_array($comptee);
$montant=mysql_query("select * from balance_invoice_purchase where id='$id'");
$mont=mysql_fetch_array($montant);
$restt=$cpt[6]+$mont[1];
$MP=0;
if($restt>=0){
$MP=$mont[1]*-1;
}else{
$MP=$cpt[6];
}
$SAP=$cpt[6]-$MP;
$_SESSION['num_compte']=$_GET['bank_account'];
?><form method="get" action="sauvgarder_payement.php">
<table width="80%">
<caption><font color="#0babf6" ><b><?php echo $N1; ?> </b></font><br></caption>
<tr>
<td ><h5><?php echo $N2; ?> <font color="red">  *</font></h5></td>
<td>
<select  name="compte" >
<option value="<?php echo $_GET['bank_account']; ?>" >
<?php echo $cpt[1].'('.$cpt[0].','.$cpt[7].')';?>
</option></td>
<td  ><h5><?php echo $N3; ?><font color="red">  *</font></h5></td>
<td  ><input type="text" name="valeur" value="<?php  echo $mont[4]; ?>" required="required" readonly></td>
</tr>
<tr>


</tr>

<tr>
<tr>

<td ><h5><?php echo $N4; ?><font color="red">  *</font></h5></td>
<td><input type="text" name="date" value="<?php echo $_GET['date']; ?>" required="required" class="calendrier"></td>
<td  ><h5><?php echo $N5; ?><font color="red">  *</font></h5></td>
<td  ><select name="methodpayement">
<?php if($cpt[3]=='1'){?>
<option value="<?php echo $N6; ?>"><?php echo $N6; ?></option>
<?php } if($cpt[4]=='1'){?>
<option value="<?php echo $N7; ?>"><?php echo $N7; ?></option>
<?php } if($cpt[5]=='1'){?>
<option value="<?php echo $N8; ?>"><?php echo $N8; ?></option>
<?php } ?>
</select></td>
</tr>
<tr>
<td ><h5><?php echo $N9; ?><font color="red"> </font></h5></td>
<td>
<input type="text" name="Code" value="<?php  echo $cpt[1]; ?>" required="required" readonly></td>

</td>

<td  ><h5><?php echo $N10; ?><font color="red">  *</font></h5></td><td>
<input type="hidden"  name="sold1" id="sold1" value="<?php echo $cpt[6]; ?>" required="required" >
<input type="text"  name="sold" id="sold" value="<?php echo number_format($cpt[6],2,',','.').'  '.$monnaie[0] ; ?>" readonly required="required">
</td>
</tr>
<tr>
<td  ><h5><?php echo $N11; ?><font color="red">  *</font></h5></td><td>

<input type="text" id="tt"  name="tt"  value="<?php echo number_format($MP,2,',','.').'  '.$monnaie[0] ; ?>"" required="required" readonly>
</td>
</tr>
<tr>
<td  ><h5><?php echo $N12; ?>:<font color="red">  *</font></h5></td><td>

<input type="text" id="tt"  name="tt"  value="<?php echo number_format($SAP,2,',','.').'  '.$monnaie[0] ; ?>"" required="required" readonly>
</td>
</tr>
</table>
<?php
$OP=$mont[4];

$s=mysql_query("select * from balance_purchase where id_balance='$id' ");


?>
<table width="50%">
<caption><font color="#0babf6" ><b><?php echo $N13; ?></b></font><br></caption>
<?php while($com=mysql_fetch_array($s)){ ?>
<tr>
<td ><h5><?php echo $com[1].'&nbsp;&nbsp;&nbsp;' ; ?>
<img src='images/ajouter.png'></td>
</tr>
<?php
}	
?>

</table>

<input type="submit" value="confirmer" class="alt_btn">
<input type="hidden" name="id"  value="<?php echo $id ; ?>" required="required">

</form>
 </DIV>
<?php

	}else{
	$date=date("Y-m-d");
$id=$_GET['id'];
$montant=mysql_query("select * from balance_invoice_purchase where id='$id'");
$mont=mysql_fetch_array($montant);
		$Compte=mysql_query("select * from bank_account where sold>=($mont[1]*-1) ");
$fournisseur=mysql_query("select * from supplier");
?>

<head></head>

<div name='mondiv1' id='mondiv1' >
<form  method="GET" action="MenuUtilisation.php">
<table>
<th ><font color="#0babf6" ><?php echo $N14; ?></font><br></th>
<tr ><td><font color="#0babf6" > <br></font></td></tr>
<tr>
<td ><h5><?php echo $N15; ?><font color="red">  *</font></h5></td>
<td><select name="bank_account" >
<?php while($banque=mysql_fetch_array($Compte)){?>
<option value="<?php echo $banque[0];?>"><?php echo $banque[1].'('.$banque[0].','.$banque[7].')';?></option>
<?php }?>
</select></td>

<tr>
<td ><h5><?php echo $N16; ?><font color="red">  *</font></h5></td>
<td><input type="text"   name="date" value="<?php echo $date ; ?>" required="required" readonly></td>
</tr>
</table>

				
<input type="submit" value="<?php echo $N18; ?>" class="alt_btn">

<input type="hidden" name="type" value="ajouter">
<input type="hidden" name="valeur" value="payee_commande.php"> 
<input type="hidden" name="titre" value="paiement des bons de commande<?php echo $banque[0];?>"> 
<input type="hidden" name="compt" value="<?php echo $banque[0];?>"> 
<input type="hidden" name="id" value="<?php echo $id;?>"> 
</form>
<?php }}?>