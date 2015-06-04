<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
	
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




	 $com=$_GET['com'];
	 
				 $_SESSION['com']= $com;
include('Connection.php');
$max=$_GET['maxi'];
$comd=mysql_query("select valeur_payer from  purchase   where reference='$com'");
$command=mysql_fetch_array($comd);

$val=$_GET['valeur_com'];
$val=$val-$command[0];
$Mon=$_GET['MN'];
$Req="";
$s=0;
for($i=1;$i<=$max;$i++){


if(isset($_GET['check'.$i])){
$s++;
$fct=$_GET['check'.$i];

$Req.=" OR facture='$fct'";

}
}
if($s==0){
// header('Location:error.pph');
}

?>

<form method="Post" action="payyer_com.php?val=<?php echo $val ;?>">
<?php
for($i=1;$i<=$max;$i++){
if(isset($_GET['check'.$i])){
?><input type="hidden" value="<?php echo $_GET['check'.$i] ?>" name="<?php echo 'check'.$i; ?>" >
<?php
}
}
?>

		<center><font color="green"  size="2"><?php echo $N1; ?>  <?php echo number_format($val,2,'.','')."&nbsp;".$Mon; ?> <?php echo $N2; ?>   <br>
<br><br>
</font></center>				
<table class="tablesorter" style="width:100%"  > 
			
<thead> 
				<tr > 
   <th ><font size="1">#</th>
   <th ><font size="1"><?php echo $N3; ?></th>
   <th ><font size="1"><?php echo $N4; ?></th>
    <th ><font size="1"><?php echo $N5; ?></th>
    <th ><font size="1"><?php echo $N6; ?></th>
    <th ><font size="1"><?php echo $N7; ?></th>
  
   
				</tr> 
			</thead> 
			<tbody> 
				 <?php		
			
				 $rq=mysql_query("select * from purchase where reference='$com'");
$comm=mysql_fetch_array($rq);
 $req=mysql_query("select * from currency where Monnaie_utliser=1");
$monnaie=mysql_fetch_array($req);

			$fact=mysql_query("select * from  vueinvoicetotale where 1=0  $Req ");
			$MN="";
			$j=0;
			$tot_factt=0;
			while($fct=mysql_fetch_array($fact)){
			$j++;
			$tot_fact=0;
			$tot_fact_dev=0;
			$devisee=mysql_query("select * from invoice where id_facture='$fct[0]'");
			$b=mysql_fetch_array($devisee);
			$tot_fact=$tot_fact+($b[17]*$fct[3]);
			$tot_fact_dev=$tot_fact_dev+($fct[3]);
			$MN=$b[9];
			$tot_factt=$tot_factt+$tot_fact;
			$TNP=$tot_fact-$comm[14]   ;
			if($val <= $TNP){
			$ab=$val;
			$val=$val-$ab;
			}else{
			$ab=$TNP;
			$val=$val-$ab;
			}
			?><tr>
   					<td><font size="1"><?php echo $j; ?></td> 
   					<td><font size="1"><?php echo $fct[0]; ?></td> 
   					<td><font size="1"><?php echo $fct[1]; ?></td> 
   					<td><font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$monnaie[0];?></td>
					<td><input type="text" value="<?php echo number_format($ab,2,'.',''); ?>" name="<?php echo 'fact'.$j; ?>" value="<?php echo $fct[0]; ?>" id="<?php echo 'fact'.$j; ?>" style="width:140px;height:17px;" onkeyUP="teste();"></font></td> 
					<td><input type="text" value="<?php echo number_format($b[18],2,'.',''); ?>" name="<?php echo 'fact_s'.$j; ?>" value="<?php echo $fct[0]; ?>" id="<?php echo 'fact_s'.$j; ?>" style="width:140px;height:17px;"></font></td> 
					<input type="hidden" value="<?php echo $fct[0]; ?>" name="<?php echo 'fact_n'.$j;; ?>"  style="width:140px;height:17px;"></font>
				
				</tr>
				
		<?php
			}
	


?>
</tr></tbody></table>

<input type="hidden" value="<?php echo $j; ?>" name="maxi"  id="maxi" >
<input type="hidden" value="<?php echo $val; ?>" name="vl"  id="vl" >
<input type="hidden" value="<?php echo $tot_fact; ?>" name="total"  id="total">
<input type="submit" value="<?php echo $N8; ?>" class="alt_btn" >
						</form><br>
						<div id="msg">
						</div>
<?php
}
?>