<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
  <?php 
  if("$permission[1]"=="Administrateur" || "$permission[13]"=='13'){ 
  $url=$N19.".".$N23.".".$N53; 
$titre=$N53;
		foreach( $employees as $employee ) 
{ 
  
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
   $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue; 
  $N4 = $V4->item(0)->nodeValue;   $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
    $N9 = $V9->item(0)->nodeValue; $V10 = $employee->getElementsByTagName( "e10" ); 
    $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
    $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
    $N12 = $V12->item(0)->nodeValue;

include ("Connection.php");
if(isset($_POST['type'])){
$Nom_banque=$_POST['nom'];
$Num=$_POST['Num'];
$MN=$_POST['monnaie'];
$Sold=$_POST['Sold'];
$DCV=$_POST['decouvert'];
$cash=0;
$cheque=0;
$virement=0;
if(isset($_POST['cash'])){
$cash=1;
}
if(isset($_POST['cheque'])){
$cheque=1;
}if(isset($_POST['virement'])){
$virement=1;
}
$Num_compt=$_SESSION['num'];
$etat_up=mysql_query("update bank_account set Numero_Compte='$Num',Nom_Banque='$Nom_banque',sold='$Sold',Monnaie='$MN',Cash='$cash',cheque='$cheque',virement='$virement',decouvert='$DCV' where Numero_Compte='$Num_compt'");
	
	$succes="error";
if($etat_up){    
$succes=$N25.' : '.$Nom_banque.'-'.$Num.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
	$link="MenuUtilisation.php?valeur=AllCompte.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$succes";

	?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>

<?php

	}else{

		$Num=$_GET['Num'];
		$_SESSION['num']=$Num;
		$Compte=mysql_query("select * from bank_account  where Numero_Compte='$Num' ");
$banque=mysql_fetch_array($Compte);
?>
<form action="MenuUtilisation.php?valeur=ModifierCompte.php" id="form_sample_2" class="form-horizontal" method="POST">
<input type="hidden" name="type" value="ajouter"> 
<div class="portlet-body form">
								
									<div class="form-body">
									
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												<?php echo $error_form; ?>
											</div>
												<div class="tab-content no-space">
											 <div class="tab-pane active" id="tab_general">
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N2 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="nom" value="<?php echo $banque[1]; ?>" required="required"  id="banq"/>
														
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N3 ; ?><span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="Num" id="Numb" required="required"  value="<?php echo $banque[0]; ?>"   />
														
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N4 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="Number" min="0"  class="form-control" name="Sold" required="required"  value="<?php echo $banque[6]; ?>" />
														
													</div>
												</div><div class="form-group">
													<label class="control-label col-md-3"><?php echo $N11 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="Number" min="0"  class="form-control" name="decouvert" required="required"  value="<?php echo $banque[8]; ?>" />
														
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N5 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<select name="monnaie" id="monnaie" class="form-control select2me" required onchange="insertBNK();" >
														<option selected value=""></option>

<?php $m=mysql_query("select * from currency where choix_monnai='1'");
while($M=mysql_fetch_array($m)){ 
if($M[0]==$banque[7]){
?>
<option  value="<?php echo $M[0];?>" selected><?php echo $M[0];?></option>
<?php }else{ ?>
<option  value="<?php echo $M[0];?>"><?php echo $M[0];?></option>

<?php } }?>
</select>
													</div>
												</div>
												<ul class="list-unstyled"><li>
																			<label><span ><input type="checkbox" name="cash" <?php if($banque[3]=='1'){echo "checked";} ?> ></span><?php echo $N7 ; ?></label>
																			</li>
																			<li>
																				<label><span><input type="checkbox" name="cheque" <?php if($banque[5]=='1'){echo "checked";} ?> ></span><?php echo $N8 ; ?></label>
																			</li>
																			<li>
																				<label><span ><input type="checkbox" name="virement" <?php if($banque[4]=='1'){echo "checked";} ?> ></span><?php echo $N9 ; ?></label>
																			</li>
																			
																		</ul>
																		<div class="form-actions">
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"  value="1" name="Sauvgarder" ><?php echo $N12; ?></button>
											
										</div>
											
										
									 </div>									
                                    </div>
					</div>
					</div>
					</div>
					</div>
					</form>


<?php }}}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>