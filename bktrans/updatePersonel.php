
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";	
  </script>
  <?php } ?>
<?php 
if("$permission[1]"=="Administrateur" || "$permission[9]"=='9'){ 
$url=$N98.".".$N99.".".$N101;
$titre=$N101;
$titremsg=$N99;
include ("Connection.php");
if(isset($_POST['Sauvgarder'])){
$nom=$_POST['nom'];
$nom = str_replace("'", "''",$nom);
$email=$_POST['email'];
$email = str_replace("'", "''",$email);
$sex=$_POST['sex'];
$sex = str_replace("'", "''",$sex);
$tel1=$_POST['tel1'];
$$tel1 = str_replace("'", "''",$tel1);
$cin=$_POST['CIN'];
$cin = str_replace("'", "''",$cin);
$adress=$_POST['adress'];
$adress = str_replace("'", "''",$adress);
$Fonction=$_POST['Fonction'];
$Fonction = str_replace("'", "''",$Fonction);
$bank=$_POST['bank'];
$tt=$_POST['titre'];
$bank = str_replace("'", "''",$bank);
$CIN=$_SESSION['CIN'];
$Req="update  personel set CIN='$cin',Nom_prenom='$nom',Telphone='$tel1',adress='$adress',Sexe='$sex',Email='$email',Fonction='$Fonction',Compte_bancaire='$bank' where CIN='$CIN'";

$etat_up=mysql_query($Req);

$pfx=$CIN;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=ListePersonels.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";

		?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php
		}else{
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

		$mail=$_GET['CIN'];
		$_SESSION['CIN']=$mail;
		$Personel=mysql_query("select * from personel where CIN ='$mail'");
		$PRSL=mysql_fetch_array($Personel);
?>

<head>
</style>
</head>
<div class="portlet box yellow">
                       <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo strtoupper($_GET['titre']);?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
                     <div class="portlet-body form">
						<form action="MenuUtilisation.php?valeur=updatePersonel.php" id="form_sample_2" class="form-horizontal" method="post">
						<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
	                                <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N12; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="text"  name="nom" value="<?php echo $PRSL[1]; ?>" required="required"/>
											</div>
										</div>
									</div>
									
									 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N7; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="number"  name="CIN" value="<?php echo $PRSL[0]; ?>" required="required"/>
											</div>
										</div>
									</div>
								 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N8; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="number"  name="tel1" value="<?php echo $PRSL[2]; ?>" required="required"/>
											</div>
										</div>
									</div>
									
									
									<div class="form-group">
					                  <label class="col-md-3 control-label"><?php echo $N4; ?></label>
										<div class="col-md-6">
											<div class="radio-list">
												<label class="radio-inline">
												<div class="radio" id="uniform-optionsRadios25">
												<input type="radio" name="sex" id="optionsRadios25" value="Femme" <?php if($PRSL[4]=="Femme"){echo "checked"; } ?>></div> <?php echo $N10; ?> </label>
												<label class="radio-inline">
												<div class="radio" id="uniform-optionsRadios26"><input type="radio" name="sex" id="optionsRadios26" value="Homme" <?php if($PRSL[4]=="Homme"){echo "checked"; }?>></span></div><?php echo $N9; ?> </label>
										
											</div>
										</div>
				      </div>
								
	                          <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N3; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="email"  name="email" value="<?php echo $PRSL[5]; ?>" required="required"/>
											</div>
										</div>
									</div>
								<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N5; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="text"  name="Fonction" value="<?php echo $PRSL[6]; ?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N11; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="text"  name="bank" value="<?php echo $PRSL[7]; ?>" required="required"/>
												<span class="help-block">
				                                 (Bank-Compte)
				                                 </span>	
											</div>
										</div>
									</div>
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N13; ?> </label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="adress" required><?php echo $PRSL[3]; ?></textarea>
													</div>
												</div>
											
									
								
								
								<div class="form-group">
										<label class="control-label col-md-3"><span class="required">
										 </span>
										</label>
										
									</div>
								<div class="form-group">
										<label class="control-label col-md-3"><span class="required">
										 </span>
										</label>
										<div class="col-md-0">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="hidden"  name="titre" value="<?php echo $_GET['titre']; ?>" required="required"/>
											</div>
										</div>
									</div>
								  <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="Sauvgarder"><?php echo $N14; ?> </button>
											
										</div>
									</div>
								     </div>
								</div>
							</form>
							</div>
						</div>

<?php }}}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>