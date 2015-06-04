
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
<?php 
if("$permission[1]"=="Administrateur" || "$permission[12]"=='12'){ 
include ("Connection.php");
$url=$N35.".".$N36.".".$N38;
$titre=$N38;
$titremsg=$N38;
if(isset($_GET['Sauvgarder'])){
$nom=$_GET['nom'];
$email=$_GET['email'];
$tel1=$_GET['tel1'];
$cin=$_GET['CIN'];
$adress=$_GET['adress'];
$t_acces=$_GET['t_acces'];
$mail=$_SESSION['email'];

$etat_up=mysql_query("Update users set Email='$email',type_acces='$t_acces',Nom_prenom='$nom',CIN='$cin',Telphone='$tel1',adress='$adress' where Email='$mail'") ;
//echo "Update users set Email='$email',type_acces='$t_acces',Nom_prenom='$nom',CIN='$cin',Telphone='$tel1',adress='$adress' where Email='$mail'";
if($etat_up){
if($_SESSION['login']==$_SESSION['email']){
$_SESSION['login']=$email;
}
}
$pfx=$email;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=AllUser.php&titre=$titre&url=$url&msg=$succes&etat_up=$etat_up";

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

		$mail=$_GET['email'];
		$_SESSION['email']=$mail;
		$Users=mysql_query("select * from users where Email ='$mail'");
		$usr=mysql_fetch_array($Users);
?>
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
						<form action="" class="form-horizontal" method="GET" id="form_sample_2">
						
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
										<label class="control-label col-md-3"><?php echo $N1; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="email" name="email" value="<?php echo $usr[0]; ?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N6; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="t_acces" required>
										  
									<?php if($usr[2]=="Administrateur") { ?>
                                               <option value="Administrateur" selected><?php echo $N3; ?></option>
                                                <?php }else{ ?>
                                               <option value="Administrateur"><?php echo $N4; ?></option>
                                                       <?php } ?>
                                              <?php if($usr[2]=="Agent_Finance") { ?>
                                             <option value="Agent_Finance" selected><?php echo $N5; ?></option>
                                               <?php }else{ ?>
                                             <option value="Agent_Finance"><?php echo $N6; ?></option>
                                               <?php } ?>
                                                <?php if($usr[2]=="Agent_Operation") { ?>

                                            <option value="Agent_Operation" selected> <?php echo $N7; ?></option>
                                              <?php }else{ ?>
                                            <option value="Agent_Operation"> <?php echo $N8; ?></option>
                                                  <?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N9; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="nom" value="<?php echo $usr[3]; ?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N10; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" name="CIN" value="<?php echo $usr[4]; ?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N11; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" name="tel1" value="<?php echo $usr[5]; ?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3"><?php echo $N12; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
				                            <textarea class="form-control" name="adress"   required="required" rows="1" data-error-container="#editor2_error"  ><?php echo $usr[6]; ?></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									   <input type="hidden"  Name="valeur" value="updateUser.php"  >
									   <div class="form-actions" >
									   <div class="row">
									   <div class="col-md-offset-3 col-md-9">
									   <button type="submit" class="btn green" name="Sauvgarder"  value="Sauvgarder"><?php echo $N13; ?></button>
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