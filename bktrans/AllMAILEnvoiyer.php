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
$url=$N19.".".$N20.".".$N22;
$titre=$N22;
$url2=$N19.".".$N20.".";
$urlcli=$N14.'.'.$N15.'.';
foreach( $employees as $employee ) 
{  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue; 
  ?>

<?php
$user=$_SESSION['login'];
include ("Connection.php");

?>

<?php 
$s=mysql_query("select * from  mai_envoyer   where user='$user'  ");

$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
?>
<div class="portlet box blue-hoki">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo strtoupper($_GET['titre']);  ?>
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body" >
		<table class="table table-striped table-bordered table-hover" id="sample_1" >
		<thead>
				<tr> 
    				<th><font size="1"><?php echo $N4; ?></th> 
    				<th><font size="1"><?php echo $N5; ?></th> 
					<th><font size="1"><?php echo $N6; ?></th> 
    				<th><font size="1"><?php echo $N7; ?></th>
					
				</tr> 
			</thead> 
			<tbody> 

			<?php


			$date=date("Y-m-d");
			 $Auj = explode('-',$date);
			while($admin=mysql_fetch_array($s)){
			



         ?>
			 
				<tr> 
   					<td><font size="1"><?php echo $admin[2];?></font></td>				
					<td><font size="1"><?php echo $admin[3];?></font></td>
					<td><font size="1"><?php echo $admin[4];?></font></td>
					<td><font size="1"><?php echo $admin[1];?></font></td>
					
				
				</tr> 
				
			
<?php }
?>
			 <tbody></table>
	 </div>
 </div>
	<?php 

	




}

	
	
 ?>			