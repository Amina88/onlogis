<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
 if("$permission[3]"=="3" || "$permission[1]"=="Administrateur"){ 
	 
	
  include ("Connection.php");
  $url=$N4.".".$N8.".".$N79.".".$N83;
  $titre=$N91;
  		
		foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
 $N1 = $V1->item(0)->nodeValue;
  $N1 = $V1->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;
     $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;
if(isset($_POST['sauvgarder'])){
$Code = sprintf("%06d",1);
$a=mysql_query("select * from logistics_services ORDER BY Reference DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$nembre=explode('LS',$t[0]);
if(isset($nembre[1])){
$Code = sprintf("%06d",$nembre[1]+1);
}

$Ref="LS".$Code;
$CL=$_POST['CL'];
$DS=$_POST['DS'];
$ETAT=$_POST['ETAT'];
$Desc=$_POST['description'];
$Desc= str_replace("'", "''",$Desc);
$Date=date("Y-m-d");


$etat_up=mysql_query("insert into logistics_services values('$Ref','$CL','$DS','$ETAT','$Desc','$Date','non')");
if($etat_up){
$id_offre=$_POST['id_offre'];
$date=date("Y-m-d");
$etat_up=mysql_query("update offre set validation='1' ,Date_validation='$date',OPERATION='$Ref' where id_offre='$id_offre'");

}
$succes="";
if($etat_up){
$succes=$N79.' : '.$Ref.'  '.$N107;
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
						<form action="MenuUtilisation.php?valeur=AjouterServiceLogistic.php" id="form_sample_2" class="form-horizontal" method="POST">
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
                                     if(isset($_GET['offre'])){
									  $idof=$_GET['offre'];
									  $cl=mysql_query("select client from offre where id_offre='$idof'");
									  $CT=mysql_fetch_array($cl);
									  ?>
									  <option value="<?php echo $CT[0]; ?>"><?php echo $CT[0]; ?></option>
                                    <?php
									  }else{
                                      while($CT=mysql_fetch_array($CLIENT)){
                                      ?>
                                       <option value="<?php echo $CT[0]; ?>"><?php echo $CT[0]; ?></option>
                                     <?php }} ?>
																							
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
                                             ?>
                                    <option value="<?php echo $file[0]; ?>"><?php echo $file[0]; ?></option>
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
											<input type="radio" name="ETAT" id="optionsRadios25" value="1" checked></div> <?php echo $N15; ?> </label>
												<label class="radio-inline">
												<div class="radio" id="uniform-optionsRadios26"><input type="radio" name="ETAT" id="optionsRadios26" value="0" ></div><?php echo $N16; ?> </label>
										
											</div>
										</div>
										</div>
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N11; ?> </label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="description" required></textarea>
													</div>
									 </div>
									 <?php
									   if(isset($_GET['offre'])){
									 ?>
									  <input type="hidden" name="id_offre" value="<?php echo $_GET['offre']; ?>">
									 <?php
									   }
									 
									 ?>
                                    <input type="hidden" name="sauvgarder" value="ajouter">
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="Sauvgarder"><?php echo $N12; ?></button>
											
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