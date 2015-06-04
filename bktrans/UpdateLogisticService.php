
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
<?php 
if("$permission[3]"=="3" || "$permission[1]"=="Administrateur"){ 
  include ("Connection.php");
     $url=$N4.".".$N8.".".$N79.".".$N83;
    $titre=$N91;
  		
		foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
								  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  
  $N1 = $V1->item(0)->nodeValue;     $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;$V18 = $employee->getElementsByTagName( "e18" ); 
  $N18 = $V18->item(0)->nodeValue;$V19 = $employee->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;$V20 = $employee->getElementsByTagName( "e20" ); 
  $N20 = $V20->item(0)->nodeValue;
if(isset($_POST['sauvgarder'])){
$id=$_SESSION['NomMat'];
$CL=$_POST['CL'];
$DS=$_POST['DS'];
$ETAT=$_POST['ETAT'];
$FCT=$_POST['FCT'];
$Desc=$_POST['description'];
$Desc= str_replace("'", "''",$Desc);



$etat_up=mysql_query("update  logistics_services set  Client='$CL',Dossier='$DS',Etat='$ETAT',Description='$Desc',facturation='$FCT' where Reference='$id'");
$succes="error";
if($etat_up){
$succes=$N79.' : '.$id.'  '.$N108;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}

$link="MenuUtilisation.php?valeur=Service_logistique.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$succes";

	?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
  <?php

	}else{
	$EQ=mysql_query("select * from  equipment where Etat=1 ");	
	$CLIENT=mysql_query("select * from  custemer ");	
	$files=mysql_query("select * from  categorie where appliquer_sur in( '010','011')");	
	$NomMat=$_GET['NomMat'];
	$_SESSION['NomMat']=$NomMat;
	$LCT=mysql_query("select * from  logistics_services where Reference='$NomMat'");	
	
$LC=mysql_fetch_array($LCT);
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
						<form action="MenuUtilisation.php?valeur=UpdateLogisticService.php" id="form_sample_2" class="form-horizontal" method="POST">
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
										<label class="control-label col-md-3"><?php echo $N3; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="CL" required>
				
                                      <?php 
                                  while($CT=mysql_fetch_array($CLIENT)){
                                       $tt="";
                                     if($LC[1]==$CT[0]){
                                           $tt="selected";
                                                   }
                                               ?>
                                 <option value="<?php echo $CT[0]; ?>" <?php echo $tt; ?>><?php echo $CT[0]; ?></option>
                                        <?php } 
?>
																							
											</select>
										</div>
										
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N4; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="DS" required>
				
                                     <?php 
                                    while($TST=mysql_fetch_array($files)){
                                    $fil=mysql_query("select * from  files where Catagorie='$TST[1]'");
                                    while($file=mysql_fetch_array($fil)){
                                           $tt="";
                                      if($file[0]==$LC[2]){
                                    $tt="selected";
									?>
									<option value="<?php echo $file[0]; ?>" selected><?php echo $file[0]; ?></option>
                                  
                                        <?php         }else{
												?>
												<option value="<?php echo $file[0]; ?>" ><?php echo $file[0]; ?></option>
                                  
											 <?php	 }
                                                  ?>
												  
                                     <?php } } ?>
																							
											</select>
										</div>
									</div>
									<div class="form-group">
					                  <label class="col-md-3 control-label"><?php echo $N10; ?></label>
										<div class="col-md-6">
											<div class="radio-list">
												<label class="radio-inline">
												<div class="radio" id="uniform-optionsRadios25">
											<input type="radio" name="ETAT" id="optionsRadios25" value="1" <?php if($LC[3]==1){ echo "checked";} ?>></div> <?php echo $N15; ?> </label>
												<label class="radio-inline">
												<div class="radio" id="uniform-optionsRadios26"><input type="radio" name="ETAT" id="optionsRadios26" value="0" <?php if($LC[3]==0){ echo "checked";} ?>></div><?php echo $N16; ?> </label>
										
											</div>
										</div>
										</div>
											<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N11; ?> </label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="description" required><?php echo $LC[4]; ?></textarea>
													</div>
									 </div>
									 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N20; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="FCT" required>
				
                                      <option value="oui" <?php if($LC['facturation']=="oui"){echo "selected";} ?> ><?php echo $N17; ?></option>
                                      <option value="non" <?php  if($LC['facturation']=="non"){echo "selected";} ?>><?php echo $N18; ?></option>
                                      <option value="partiel" <?php if($LC['facturation']=="partiel"){echo "selected";} ?>><?php echo $N19; ?></option>
                                     													
											</select>
										</div>
									</div>
									 <input type="hidden" name="sauvgarder" value="ajouter">
									  <?php if(!isset($_GET['mds'])){?>
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="Sauvgarder"><?php echo $N12; ?></button>
											
										</div>
									</div>
								     </div>
									 <?php }?>
									 </div>
							</form>
							</div>
						</div>
<?php }} }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>