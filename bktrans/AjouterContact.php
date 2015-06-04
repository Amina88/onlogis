<?php 
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
<?php
}
if("$permission[1]"=="Administrateur" || "$permission[5]"=='5'){ 
$tt=$N9.'  :  ';
 $url=$N14.'.'.$N15.'.';
 $urlf=$N32.".".$N34;
$titre=$N101; 
$titremsg=$N99; 

if(isset($_GET['Sauvgarder'])){

$doc = new DOMDocument(); 
 
$doc->load($_SESSION['lang_out_Manu']); 
$Menu = $doc->getElementsByTagName("out_Menu"); 
				

foreach( $Menu as $Menu_util ) 
{ 
  $V3 = $Menu_util->getElementsByTagName("e3"); 
  $N3 = $V3->item(0)->nodeValue;
include ("Connection.php");
$nom=$_GET['nom'];
//$nom = str_replace("'", "''",$nom);
$email=$_GET['email'];
//$email = str_replace("'", "''",$email);

$tel1=$_GET['tel1'];
//$$tel1 = str_replace("'", "''",$tel1);

$Fonction=$_GET['Fonction'];
// $Fonction = str_replace("'", "''",$Fonction);
$client=$_GET['client'];
if(isset($_GET['cl'])){
$Req="insert into contactclient values('','$nom','$tel1','$email','$Fonction','$client')";
}else{
$Req="insert into contactfournisseur values('','$nom','$tel1','$email','$Fonction','$client')";
}

$etat_up=mysql_query($Req);

$pfx=$nom;
$succes="error";
if($etat_up){    
$succes=$client.' : '.$pfx.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$url=$_GET["urle"];
if(isset($_GET['cl'])){
$link="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=$client&titre=$client&url=$url&etat_up=$etat_up&msg=$succes&etat=contact";
}else{
$link="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=$client&titre=$client&url=$url&etat_up=$etat_up&msg=$succes&etat=contact";

}
	?>
 <script type="text/javascript"> 

document.location.href="<?php echo $link; ?>";
	
  </script>
 
<?php


	}
}else{

$fr=$_GET['type'];

		foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue; $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;

?>


<head>


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
						<form action="MenuUtilisation.php" id="form_sample_2" class="form-horizontal" method="get">
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
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="text"  name="nom" value="" required="required"/>
											</div>
										</div>
									</div>
									
									 
								 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N8; ?> <span class="required">*
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="number"  name="tel1" value="" required="required"/>
											</div>
										</div>
									</div>
									
									
									
								
	                          <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N3; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="email"  name="email" value="" required="required"/>
											</div>
										</div>
									</div>
								<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N5; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="text"  name="Fonction" value="" required="required"/>
											</div>
										</div>
									</div>
									
											
									
								
								
								<div class="form-group">
										<label class="control-label col-md-3"><span class="required">
										 </span>
										</label>
										<div class="col-md-0">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control"type="hidden"  name="valeur" value="AjouterContact.php" required="required"/>
											</div>
										</div>
									</div>
								<div class="form-group">
										<label class="control-label col-md-3"><span class="required">
										 </span>
										</label>
										<div class="col-md-0">
											<div class="input-icon right">
												<i class="fa"></i>
												<?php if($fr=='cl'){ ?>
												<input   class="form-control"type="hidden"  name="urle" value="<?php echo $url.$N1; ?>" />
												<?php  }else{ ?>
												<input   class="form-control"type="hidden"  name="urle" value="<?php echo $urlf.'.'.$N1; ?>" />
												<?php  } ?>
											<input type="hidden" name="<?php  echo $fr; ?>" >
											</div>
										</div>
									</div>
								  <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="Sauvgarder"><?php echo $N14; ?></button>
											<input type="hidden" name="client" value="<?php echo $_GET['client']; ?>"
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