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
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue; 
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" );  $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" );  $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" );  $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" );  $N15 = $V15->item(0)->nodeValue;

include ("Connection.php");
$max=10;
$min=0;
$banque ="";
$banque1 ="";
$compte ="";
$typeoperation="where type='in'";
if(isset($_POST['Min']) && isset($_POST['Max'] ) ){
$min=$_POST['Min'];
$max=$_POST['Max'];
if($_POST['banque']!= ""){
$f=$_POST['banque'];
$banque ="AND num_compte='$f'";
$banque1='$f';
}else{
$banque ="";
$banque1 ="";
}

}
$valeur="allocate_argent.php";
$resbanque=mysql_query("select * from  bank_account");
$s=mysql_query("select * from  money  $typeoperation $banque LIMIT $min , $max ");
$rech=mysql_query("select * from money  $typeoperation  $banque LIMIT $min , $max ");
//echo "select * from argent  $typeoperation  $banque LIMIT $min , $max ";

if(isset($_POST['typeoperation']) ){
if( $_POST['typeoperation']!='trans'){
$s=mysql_query("select * from  money  $typeoperation $banque LIMIT $min , $max ");
$rech=mysql_query("select * from  money $typeoperation  $banque LIMIT $min , $max ");
}}
$recherche=mysql_fetch_array($rech);
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
?>

<form method="POST" action="" id="form" name="form">
<table><tr>
<td><input type="text" name="Max" value="10" style="width:50px"></td><td><?php echo $N1; ?> </td><td><input type="text" name="Min" value="0" style="width:50px"></td><td><select type="text" name="banque" value="" style="width:140px"><?php while($resbanques=mysql_fetch_array($resbanque)){?><option value="<?php echo $resbanques[0] ;?>"><?php echo $resbanques[1].'('.$resbanques[0].')' ;?></option><?php } ?></select></td><td><select name="typeoperation" style="width:140px"><option value="in"><?php echo $N2; ?></option><option value="out"><?php echo $N3; ?></option><option value="trans"><?php echo $N4; ?></option></select></td><td><a  href="#" onclick="document.form.submit();"><img src="images/serch.png" style="width:35px;height:35px;margin-top:-10px" ></img></a></td></tr></table> 
</form>
		<?php 
if($recherche !=NULL){
?>		
<table class="tablesorter" style="width:100%" > 

			<thead> 
				<tr > 
    				<th><font size="1"><?php echo $N5; ?></h4></th> 
    				<th><font size="1"><?php echo $N6; ?></h4></th> 
					<th><font size="1"><?php echo $N7; ?></h4></th> 
					<th><font size="1"><?php echo $N8; ?></h4></th> 
    				 <th><font size="1"><?php echo $N9; ?></h4></th>
					<?php  if($typeoperation=='in'){ ?>
    				 <th><font size="1"><?php echo $N10; ?></h4></th>
					 <?php }else{ ?>
    				 <th><font size="1"><?php echo $N11; ?></h4></th>
					 <?php  } ?>
    				 <th><font size="1"><?php echo $N12; ?></h4></th>
    				 <th><font size="1"><?php echo $N13; ?></h4></th>
    				<th colspan="2"><font size="1"><?php echo $N14; ?></h4></th> 
				</tr> 
			</thead> 
			<?php 
			while($admin=mysql_fetch_array($s) ){
$banques=mysql_query("select * from  bank_account where Numero_Compte='$admin[6]' ");
$banquess=mysql_fetch_array($banques);
$pos = strpos($admin[0],'PAY');

         ?>
			 
				<tr  bgcolor="d5d7dc" style="height:10px;"> 
   					<td><font size="1"><?php echo $admin[0];?></font></td> 
    				<td><font size="1"><?php echo $admin[1];?></font></td> 
					<td><font size="1"><?php echo $admin[2];?></font></td>				
					<td><font size="1"><?php echo $banquess[1];?></font></td>				
					<td><font size="1"><?php echo $admin[6];?></font></td>				
					<td><font size="1"><?php echo $admin[9];?></font></td>				
					<td><font size="1"><?php echo number_format($admin[7],2,',','.');?>&nbsp;<?php echo $banquess[7];?></font></td>				
					<td><font size="1"><?php echo number_format($admin[8],2,',','.');?>&nbsp;<?php echo $banquess[7];?></font></td>				
					<td width="5"><?php if($admin[8]==0){ ?><input  type="image" src="images/nallocate.png" title=""> <?php }else{ ?> <a href="MenuUtilisation.php?valeur=<?php echo $valeur; ?>&ref=<?php echo $admin[0];?>&client=<?php echo $admin[9];?>&compte=<?php echo $admin[6];?>" ><input  type="image" src="images/allocate.png" title=""></a><?php } ?></td><td><a href="pdf/Bktrans/Final_Facture.php?num_compte=<?php echo $admin[3];?>" target="_blank" ><input  type="image" src="images/pdf2.png" title="<?php echo $N15; ?> <?php echo $admin[3];?>"></a></td> 
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
		<?php
}

?>		