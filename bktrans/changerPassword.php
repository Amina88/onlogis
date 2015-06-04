<?php 
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}

if("$permission[1]"=="Administrateur" || "$permission[12]"=='12'){
include ("Connection.php");
$url=$N35.".".$N36.".".$N38;
$titre=$N38;
$titremsg=$N38;
if(isset($_POST['sv'])){
$pwd=$_POST['pwd'];
$password=md5($pwd);
$email=$_SESSION['mail'];
$etat_up=mysql_query("update users set password='$password' where Email='$email'");

$pfx=$email;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N132; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}

$link="MenuUtilisation.php?valeur=AllUser.php&titre=$titre&etat_up=$etat_up&url=$url&msg=$succes";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php 
		}else{
		$mail=$_GET['Email'];
		$_SESSION['mail']=$mail;
		foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;
?>
<script>
function confirmation_pass(){
a=document.getElementById('pwd').value;
b=document.getElementById('pass_conf').value;
if(a != b){
document.getElementById('msg').innerHTML="<font color=red> <?php echo $N1; ?></font>";
document.getElementById('Sub').innerHTML="";
}else{
document.getElementById('Sub').innerHTML='<div class="form-actions" ><div class="row"><div class="col-md-offset-3 col-md-9"><button type="submit" class="btn green" name="sv"  value="sv"><?php echo $N2; ?></button></div></div></div>';
document.getElementById('msg').innerHTML="";
document.getElementById('pass_conf').required="required";

}
}
</script>



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
						<form action="MenuUtilisation.php?valeur=changerPassword.php" class="form-horizontal" method="POST" id="form_sample_2" >
						
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
										<label class="control-label col-md-3"><?php echo $N3; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												
												<input  class="form-control" type="password" name="pwd" id="pwd"
												value=""  required="required" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N4; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="password" name="pass_conf" id="pass_conf" value="" OnkeyUp="confirmation_pass();"/>
											</div>
											<span class="help-block" id="msg">
											 </span>
										</div>
									</div>
									  <div id="Sub">
	
	                                   </div>
									      
									</div>
						</form>
					</div>
			</div>





<?php }} ?>
<?php }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>