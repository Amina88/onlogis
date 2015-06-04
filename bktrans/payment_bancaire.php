<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
<head>

<link href="css/style1.css" rel="stylesheet" type="text/css" />

</head>
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
   $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;$V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;

include ("Connection.php");
$max=30;
$min=0;
$banque ="";
$banque1 ="";
$compte ="";
$typeoperation="where 1=1";
if(isset($_POST['Min']) && isset($_POST['Max'] ) ){
$min=$_POST['Min'];
$max=$_POST['Max'];
if($_POST['banque']!= ""){
$f=$_POST['banque'];
$banque ="AND partenere='$f'";
$banque1='$f';
}else{
$banque ="";
$banque1 ="";
}

}
$valeur="allocate_argent.php";
$resbanque=mysql_query("select * from  supplier");
$s=mysql_query("select * from  balance_invoice_purchase  $typeoperation $banque ORDER BY  `balance_invoice_purchase`.`id` DESC LIMIT $min , $max ");
$rech=mysql_query("select * from  balance_invoice_purchase  $typeoperation  $banque  ORDER BY  `balance_invoice_purchase`.`id` DESC LIMIT  $min , $max ");



$recherche=mysql_fetch_array($rech);
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
?>

<form method="POST" action="" id="form" name="form">
<table><tr>
<td><input type="text" name="Max" value="30" style="width:50px"></td><td> <?php echo $N1; ?> </td><td><input type="text" name="Min" value="0" style="width:50px"></td><td><select type="text" name="banque" value="" style="width:140px"><?php while($resbanques=mysql_fetch_array($resbanque)){?><option value="<?php echo $resbanques[0] ;?>"><?php echo $resbanques[0] ;?></option><?php } ?></select><td><a  href="#" onclick="document.form.submit();"><img src="images/serch.png" style="width:35px;height:35px;margin-top:-10px" ></img></a></td></tr></table> 
</form>
		<?php 
if($recherche !=NULL){
?>		
<table class="tablesorter" style="width:100%" > 

			<thead> 
				<tr > 
    				<th><font size="1"><?php echo $N2; ?></h4></th> 
    				<th><font size="1"><?php echo $N3; ?></h4></th> 
					<th><font size="1"><?php echo $N4; ?></h4></th> 
					<th><font size="1"><?php echo $N5; ?></h4></th> 
					
    				<th colspan="2"><font size="1"><?php echo $N6; ?></h4></th> 
				</tr> 
			</thead> 
			<?php 
			while($admin=mysql_fetch_array($s) ){

$pos = strpos($admin[0],'PAY');
$pos = strpos($admin[0],'PAY');
if($admin[1]>=0){
$MPB=0;
}else{
$MPB=$admin[1];
}
         ?>
			 
				<tr  bgcolor="d5d7dc" style="height:10px;"> 
   					<td><font size="1"><a href="MenuUtilisation.php?valeur=detaille_payement.php&titre=<?php echo $admin[0];?>&id=<?php echo $admin[0];?>"><?php echo $admin[0];?></a></font></td> 
    				<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo $admin[3];?></font></td>				
								
					<td><font size="1"><?php echo number_format($MPB,2,',','.');?>&nbsp;<?php echo $admin[2];?></font></td>				
						<td width="5"><?php if($admin[1]>= 0){ ?><input  type="image" src="images/nallocate.png" title="<?php  $N9; ?>"> <?php }else{ ?> <a href="MenuUtilisation.php?valeur=payee_commande.php&titre=<?php echo $N10; ?>&id=<?php echo $admin[0];?>" ><input  type="image" src="images/allocate.png" title="<?php echo $N7; ?>"></a><?php } ?></td> 
				</tr> 
				
			
<?php }

?>
			 </table><br>
	<?php
}else{

echo "<center><img  type=image src=images/404Facture.png ></center>";

}
?>	
 <div id="etat"></DIV></td>
<?php }
?>				