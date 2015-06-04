<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
  } 
 if("$permission[18]"=="18" || "$permission[1]"=="Administrateur"){ 
		
  include ("Connection.php");
   $url=$N8.".".$N79.".".$N86.".".$N88;
   $titre=$N88;
  foreach( $employees as $employee ) 
{           $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;     $V6 = $employee->getElementsByTagName( "e6" ); 
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
  $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;
if(isset($_POST['sauvgarder'])){
$Num=$_POST['Num'];
$type=$_POST['type'];
$KD=$_POST['KD'];
$KF=$_POST['KF'];
$ETAT=$_POST['ETAT'];
$Desc=$_POST['description'];
$test=1;
if($KF!=""){
if($KF < $KD){
$test=0;
?>
<script type="text/javascript"> 
document.location.href="MenuUtilisation.php?valeur=AjouterEquipment.php&titre=<?php echo $N1; ?>&msg=<?php echo $N13; ?>&etat_up=0";
	
  </script>
  <?php
}}
if($test=1){
$etat_up=mysql_query("insert into  equipment values ('$Num','$type','$ETAT','$KD','$KF','$Desc')");
$succes="error";
if($etat_up){
$succes=$N86.' : '.$Num.'  '.$N107;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

?>
<script type="text/javascript"> 
document.location.href="MenuUtilisation.php?valeur=AllEquipment.php&titre=<?php echo $titre; ?>&url=<?php echo $url; ?>&etat_up=<?php echo $etat_up; ?>&msg=<?php echo $succes; ?>";
	
  </script>
  <?php
}
		}else{
		
		
		

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
						<form action="MenuUtilisation.php?valeur=AjouterEquipment.php" id="form_sample_2" class="form-horizontal" method="POST">
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
										<label class="control-label col-md-3"><?php echo $N6; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="text"  name="Num" value=""  required="required"/>
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
												<input   class="form-control"type="text"  name="type" value="" required="required"/>
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
												<input   class="form-control"type="number"  name="KD" value="" min="0" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N9; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="number"  name="KF" min="0" value="" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N10; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="ETAT" required>
                                          <option value="1" selected><?php echo $N15; ?></option>
                                          <option value="0"><?php echo $N16; ?></option>									
											</select>
										</div>
									</div>
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N11; ?> </label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="description" required></textarea>
													</div>
									 </div>
									
                        
					  		 <input type="hidden" name="sauvgarder" value="ajouter"> 
                              <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="Sauvgarder"><?php echo $N17; ?></button>
											
										</div>
									</div>
								     </div>


				
                                </div>
							</form>
							</div>
						</div>
<?php }} }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>