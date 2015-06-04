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
if("$permission[1]"=="Administrateur" || "$permission[13]"=='13'){ 
$titre=$N53;
$url=$N19.".".$N23.".".$N53; 
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
include ("Connection.php");
?>


<?php 
$Compte=mysql_query("select * from bank_account ");
		
$client=mysql_query("select * from supplier");
$Num="";
		$Num=$_GET['Num'];
		
		

$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
$compt="";
$comptee=mysql_query("select * from bank_account   where Numero_Compte='$Num'");
$cpt=mysql_fetch_array($comptee);
?><form method="post" action="MenuUtilisation.php?valeur=sauvgared_argent_sortie.php" id="form_sample_2" class="form-horizontal">
<input type="hidden" value="<?php echo  $titre; ?>" name="titre">
<input type="hidden" value="<?php echo $url; ?>" name="urlA">

<div class="portlet ">
											<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-sort-amount-desc"></i><?php echo $N15; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						
						
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							
						
								<div class="form-body">
								<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
								<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N4 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="Compte" required="required" />
												<?php while($banque=mysql_fetch_array($Compte)){

if($banque[0]==$Num){
?>
<option value="<?php echo $banque[0];?>" selected><?php echo $banque[1]."(".$banque[0].",$banque[7])"; ?></option>
<?php }else{
?>
<option value="<?php echo $banque[0];?>"><?php echo $banque[1]."(".$banque[0].",$banque[7])"; ?></option>

<?php  }


} ?>
												</select>
											</div>
										</div>
									
								
						
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N5; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" min="0"  max="<?php echo $cpt[6]+$cpt[8]; ?>" name="Valeur"  value="" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N6; ?><span class="required">
										 *</span></label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Date" value=""  required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											
										</div>
									</div>
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N7 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="methodpayement" required>
<?php if($cpt[3]=='1'){?>
<option value="especes"><?php echo $N8; ?></option>
<?php } if($cpt[5]=='1'){?>
<option value="cheque"><?php echo $N9; ?></option>
<?php } if($cpt[4]=='1'){?>
<option value="virement"><?php echo $N10; ?></option>
<?php } ?>
												</select>
											</div>
										</div>
										<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N13 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="client"  required="required">
<option value=""></option>
<?php while($cl=mysql_fetch_array($client)){?>
<option value="<?php echo $cl[0];?>"><?php echo $cl[0];?></option>
<?php }?>
</select>
												</select>
											</div>
										</div>
										<div class="form-group">
													<label class="col-md-3 control-label"><?php echo $N14; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-8">
														<textarea class="form-control" name="description" required></textarea>
													</div>
												</div>
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N20; ?></button>
											
										</div>
									</div>
									
									
</div>
</div>
</div>
</div>

</form>

<?php } }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>