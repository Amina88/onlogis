<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>

<?php 
if("$permission[1]"=="Administrateur" || "$permission[11]"=='11'){ 
$url2=$N14.".".$N103.".".$N37;
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
include ("Connection.php");
if(isset($_GET['type'])){
if($_GET['type']=="delete"){
$NT=$_GET['NT'];

$etat_up=mysql_query("delete from  tax where Nom_tax='$NT'");


$pfx=$NT;
$succes="error";
$titremsg=$N150;
$titre=$N37;
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Configuration_Profil.php&titre=$titre&url=$url2&msg=$succes&etat_up=$etat_up";

	
	?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php
}

}else{
if(isset($_GET['Sauvgarder'])){
$NT=$_GET['NT'];
$VT=$_GET['VT'];
$client=0;
$fournisseur=0;
if(isset($_GET['client'])){
$client=$_GET['client'];
}
if(isset($_GET['fournisseur'])){
$fournisseur=$_GET['fournisseur'];
}
$TN=$_SESSION['NT'];
$CA=0;
$Code=$_GET['CodeE'];
if(isset($_GET['CA'])){
$CA=$_GET['CA'];
}
$PR=0;
if(isset($_GET['PR'])){
$PR=$_GET['PR'];
}
$etat_up=mysql_query("Update tax set 	Nom_tax='$NT',valeur='$VT',appliquer_client='$client',appliquer_fournisseur='$fournisseur' ,CA='$CA',Profit='$PR',code_comptable='$Code' where Nom_tax='$TN'");

$pfx=$NT;
$succes="error";
$titremsg=$N150;
$titre=$N37;
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Configuration_Profil.php&titre=$titre&url=$url2&msg=$succes&etat_up=$etat_up";

	?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php
	}else{

if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } 
		$NT=$_GET['NT'];
		$_SESSION['NT']=$NT;
		$Tax=mysql_query("select * from Tax where Nom_tax='$NT'");
		$Tax=mysql_fetch_array($Tax);
?>

<head>
</style>
</head>
 <div class="portlet box yellow">
							<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo strtoupper($_GET['titre']); ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
				           </div>
						   
						   <div class="portlet-body form">
						
						   <form  method="GET" action="MenuUtilisation.php" id="form_sample_2" class="form-horizontal">
						   <div class="form-body">
								    <div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N1; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <div class="input-icon right"><i class="fa"></i><input  class="form-control" type="text" name="NT" value="<?php echo $Tax[0]; ?>" required="required"/>
									  </div>
									 </div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N2; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <div class="input-icon right"><i class="fa"></i><input  class="form-control" type="number" name="VT" value="<?php echo $Tax[1]; ?>" required="required"/>
									  </div>
									 </div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N3; ?><span class="required">*</span></label>
									<div class="col-md-8">
					              <?php echo $N4; ?>:</h5><input type="checkbox" name="client" value="1" <?php if($Tax[2]==1){echo "checked";} ?>>
								  <?php echo $N5; ?>:</h5><input type="checkbox" name="fournisseur"  value="1" <?php if($Tax[3]==1){echo "checked";} ?>>
									 <?php echo $N7; ?>:</h5><input type="checkbox" name="CF"  value="1" <?php if($Tax[4]==1){echo "checked";} ?>>
								  <?php echo $N8; ?>:</h5><input type="checkbox" name="PR"  <?php if($Tax[5]==1){echo "checked";} ?> value="1">
								
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N9; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <select name="CodeE"  name="CodeE"     class="form-control select2me"  >
									  <?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' ");while($ab=mysql_fetch_array($a)){?>
									  <option value="<?php echo $ab[0]; ?>" <?php if($Tax[6]==$ab[0]){echo "selected";} ?> ><?php echo $ab[0]; ?></option>
									  <?php }} $_SESION["'".$i."'"]=$ad[0];}?>
									  </select>
  </div>         
									
									 </div>
								<input type="hidden"  Name="valeur" value="updateTaxe.php"  >
							   <div class="form-actions">
							     <div class="row">
							        <div class="col-md-offset-3 col-md-9">
							          <button type="submit" class="btn green" name="Sauvgarder" ><?php echo $N6; ?></button>
							         </div>
							     </div>
							   </div>
							 </div>
							 </form>
							</div>
						</div>
									
<?php
}
}
}

}else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>