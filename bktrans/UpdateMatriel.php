<?php

 if("$permission[17]"=="17" || "$permission[1]"=="Administrateur"){ 	
  include ("Connection.php");
if(isset($_POST['sauvgarder'])){

$Nom=$_POST['Nom'];
$type=$_POST['type'];
$DC=$_POST['DC'];
$VA=$_POST['VA'];
$DV=$_POST['DV'];
$VAC=$_POST['VAC'];
$MT=$_POST['MT'];
$Desc=$_POST['description'];
$id=$_SESSION['id'];

$etat_up=mysql_query("update  hardware set Nom='$Nom',designation='$Desc',type='$type',date_achat='$DC',valeur_achat='$VA',Duree_vie='$DV',motive='$MT',val_actuel='$VAC' where  id=$id");
//echo "update  hardware set Nom='$Nom',designation='$Desc',type='$type',valeur_achat='$DC',Duree_vie='$VA',Duree_vie='$DV',motive='$MT',val_actuel='$VAC' where  id=$id"; 
$doc = new DOMDocument(); 
$url=$N19.".".$N67.".".$N69;			
$doc->load($_SESSION['lang_out_Manu']); 
$employees = $doc->getElementsByTagName("out_Menu");
$succes="error";
 foreach( $employees as $employee ) 
{   $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue; 

if($etat_up){
$succes=$N67.' : '.$Nom.'  '.$N108;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}
$link="MenuUtilisation.php?valeur=AllMatriel.php&titre=$N9&url=$url&etat_up=$etat_up&msg=$succes";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php

}
		}else{
		
		
		foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;     $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;$V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;
  $id=$_GET['NomMat'];
  $val=$_GET['val'];
  
  $Biens=mysql_query("select * from  hardware where id='$id'");
  $Mat=mysql_fetch_array($Biens);
  $MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
$_SESSION['id']=$id;
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
						<form action="MenuUtilisation.php?valeur=UpdateMatriel.php" id="form_sample_2" class="form-horizontal" method="POST">
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
												<input   class="form-control" type="text"  name="Nom"  value="<?php echo $Mat[1];  ?>" required="required"/>
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
												<input   class="form-control"type="text"  name="type" value="<?php echo $Mat[3];  ?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N8; ?><span class="required">
										 </span>*</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control" readonly name="DC" value="<?php echo $Mat[4]; ?>" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div>
									 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N9."&nbsp;(<font color=red>".$MN1[0]."</font>&nbsp;)"; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="number"  name="VA" value="<?php echo $Mat[5];  ?>" required="required" readonly />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N2."&nbsp;(<font color=red>".$MN1[0]."</font>&nbsp;)"; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="number"  name="VAC" value="<?php echo $val; ?>" readonly required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N3 ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="text"  name="MT" value="<?php echo $Mat[7]; ?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N10."&nbsp;(<font color=red>Ans</font>&nbsp;)"; ?> <span class="required">
										 </span>*
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="number"  name="DV"  min="0" value="<?php echo $Mat[6]; ?>" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N11; ?> </label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="description" required><?php echo $Mat[2];?></textarea>
													</div>
									 </div>
									
                             <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="sauvgarder" value="Sauvgarder"><?php echo $N31; ?></button>
											
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