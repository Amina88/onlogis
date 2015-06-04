<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php  
if("$permission[1]"=="Administrateur" || "$permission[11]"=='11'){
$url= $N35.".".$N36.".".$N77; 
$titre=$N78;
foreach( $employees as $employee ) 
{ 
                                 $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;
  
 $id= $_GET['id'];
include ("Connection.php");
if(isset($_POST['SauvgarderPRD'])){
$tst=1;
$DTD=$_POST['dateD'];
$DTF=$_POST['dateF'];
$TT=$_GET['titre'];
$url2=$_GET['url'];
$dtd=explode('/',$DTD);
$dtf=explode('/',$DTF);
If(!isset($dtd[1])  ){
$dtd=explode('-',$DTD);

}
If(!isset($dtf[1])  ){
$dtf=explode('-',$DTF);

}

if($dtd[0]>$dtf[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=updatePeriode.php&titre=$TT&etat_up=0&msg=$N11&SauvgarderPRD=tt&url=$url2&id=$id";
}elseif($dtd[0]==$dtf[0]){
if($dtd[1]>$dtf[1]){
$tst=0;
$link="MenuUtilisation.php?valeur=updatePeriode.php&titre=$TT&etat_up=0&msg=$N11&SauvgarderPRD=tt&url=$url2&id=$id";

}elseif($dtd[1]==$dtf[1]){
if($dtd[2]>$dtf[2]){
$tst=0;
$link="MenuUtilisation.php?valeur=updatePeriode.php&titre=$TT&etat_up=0&msg=$N11&SauvgarderPRD=tt&url=$url2&id=$id";
}
}}
if($tst==1){
$etat=mysql_query("UPDATE  financial_period SET  `date_debut` =  '$DTD',`date_fin` =  '$DTF' WHERE  `financial_period`.`id` =$id");

$pfx=$id;
$succes="error";
$titremsg=$N77; 
if($etat){    
$succes=$titremsg.' : '.$pfx.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Financ_periode.php&titre=$titre&url=$url&msg=$succes&etat_up=$etat";
}
?>
<script type="text/javascript"> 
 document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php
}else{
$id=$_GET['id'];
$_SESSION['id']=$id;
$etat=mysql_query("select * from financial_period where id='$id'");
$MNDP=mysql_fetch_array($etat);
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
						<form action="" id="form_sample_2" class="form-horizontal" method="POST">
						<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
									
                                 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N8; ?></label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control" readonly name="dateD"  value="<?php echo $MNDP[2]; ?>" required>
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
										<label class="control-label col-md-3"><?php echo $N9; ?></label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control" readonly name="dateF" value="<?php echo $MNDP[3]; ?>" required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"  name="SauvgarderPRD"><?php echo $N10; ?></button>
										
										</div>
									</div>
								</div>
						</div>
					</form>
				</div>
		     </div>


<?php }}
}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
