<?php
include ("Connection.php");
$compte=$_GET['compte'];
$PART=$_GET['valeur'];
$date=$_GET['date'];
$code=$_GET['Code'];
$id=$_GET['id'];
$comptee=mysql_query("select * from bank_account  where Numero_Compte='$compte'");
$cpt=mysql_fetch_array($comptee);
$montant=mysql_query("select * from balance_invoice_purchase where id='$id'");
$mont=mysql_fetch_array($montant);


$restt=$cpt[6]+$mont[1];
$MP=0;
if($restt>=0){

$MP=$mont[1]*-1;
$montant=mysql_query("update balance_invoice_purchase set valeur='$MP', code='$code' where id='$id'");
$compte=mysql_query("update  bank_account set sold='$restt' where Numero_Compte='$compte'");
$cmd=mysql_query("select * from balance_purchase where id_balance='$id'");

while($cmdd=mysql_fetch_array($cmd)){
$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$cmdd[1]'");
              $tot=mysql_fetch_array($get_tot);
			   $commande=mysql_query("select * from purchase where reference='$cmdd[1]'");
			   
			    $admin=mysql_fetch_array($commande);
			   $tot1=$tot[3]*$admin[9];
			 
$compte=mysql_query("update  purchase set etat_paiement='1',valeur_payer='$tot1' where reference='$cmdd[1]'");
}
}else{
$MP=$cpt[6];
$montant=mysql_query("update balance_invoice_purchase set valeur='-$MP' , code='$code' where id='$id'");
$compte=mysql_query("update  bank_account set sold='0' where Numero_Compte='$compte'");

}

$link="MenuUtilisation.php?valeur=AllCommandePretApeye.php&titre=Payement%20des%20bons%20de%20commande&etat_up=$compte";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>

