<?php
include ("Connection.php");

$pay=0;
$compte=$_GET['Compte1'];
$MTHP=$_GET['methodpayement'];
$date=$_GET['date'];
$FRN=$_GET['FRN'];
$DD=$_GET['DD'];
$DF=$_GET['DF'];
$bank=$_SESSION['num_compte'];
$SAP=$_SESSION['SAP'];
$MP=$_SESSION['MP'];
$TAX=$_SESSION['Tax'];
$id=1;
$PTAX=mysql_query("select id  from `payement_tax` Order by id Desc limit 0,1");
$PTX=mysql_fetch_array($PTAX);
if($PTX){
$id=$PTX[0]+1;
}
$pay=mysql_query("INSERT INTO  `payement_tax` (`id`,`Tax` ,`Montant_peyye` ,`Date_paiment` ,`Compte`,`method_paiment`,`compte_bancaire`,`Fournisseur`) VALUES ($id ,'$TAX',  '$MP',  '$date',  '$compte',  '$MTHP',  '$bank' ,'$FRN')")or die("payement NULL");;
if($pay==1){

		$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
			$s=mysql_query("select * from tax  where Nom_tax='$TAX' ");
			$i=0;
			$TTC=0;
			$TTINV=0;
			$TTP=0;
			while($admin=mysql_fetch_array($s)){
			$t_TX_INV=0;
			$t_TX_PURCH=0;
			$TT_Pay=0;
			$MDP=0;
			$invoices=mysql_query("select * from invoice where date_lancement >= '$DD' AND date_lancement <= '$DF'  ");
			while($invoice=mysql_fetch_array($invoices)){
			 $PFact=mysql_query("SELECT * FROM  `payment_tax_invoice` where Reference='$invoice[3]'   ");
			 if(!($PFactr=mysql_fetch_array( $PFact))){
			 
		$inv=mysql_query("select * from element_invoice  where 	Type_tax='$admin[0]' AND Reference='$invoice[3]'");
		while($tax1=mysql_fetch_array($inv)){
		
		$TX=$tax1[2]*$tax1[3]*$tax1[4]*$tax1[6]*0.01;
		
		 $TxMNLocal=$TX*$invoice[17];
		mysql_query("INSERT INTO  `payment_tax_invoice` (`Reference` ,`id_payment` ,`Montant`)VALUES ('$invoice[3]',  '$id',  '$TxMNLocal')") or die("NULL invoice");

		
		}}
		
		}
		
		$invoices=mysql_query("select * from purchase  where date_commande >= '$DD' AND date_commande <= '$DF'  AND 	etat_commande='1'  ");
		while($invoice=mysql_fetch_array($invoices)){
	 $PFact=mysql_query("SELECT * FROM  `payment_tax_invoice` where Reference='$invoice[0]'   ");
			 if(!($PFactr=mysql_fetch_array( $PFact))){
			 
		$purch=mysql_query("select * from element_purchase  where 	Type_tax='$admin[0]' AND reference='$invoice[0]'");
		while($tax1=mysql_fetch_array($purch)){
		
		$TX=$tax1[7]*$tax1[3]*$tax1[4]*$tax1[6]*0.01;
		
		 $TxMNLocal=$TX*$invoice[9];
mysql_query("INSERT INTO  `payment_tax_purchase` (`Reference` ,`id_payment` ,`Montant`)VALUES ('$invoice[3]',  '$id',  '$TxMNLocal')") or die("NULL invoice");

		}}
		}
			
		}	
?>
			
			
<?php }
$i=0;
 $PFact=mysql_query("SELECT * FROM  `payment_tax_invoice` where id_payment='$id'");
			 if(($PFactr=mysql_fetch_array( $PFact))){
			 $i=1;
			 }
			  $PFact=mysql_query("SELECT * FROM  `payment_tax_purchase` where id_payment='$id'   ");
			 if(($PFactr=mysql_fetch_array( $PFact))){
			 $i=1;
			 }
			 echo $i;
if($i==1){
$pay=mysql_query("update  bank_account set sold='$SAP' where Numero_Compte='$bank'");

}else{
$pay=mysql_query("delete FROM  `payement_tax` where id='$id'   ");
			 
}


$link="MenuUtilisation.php?valeur=AllTax.php&titre=TAXES&etat_up=$pay";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>



?>