
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
?>
<?php 
$url2=$N14.".".$N103.".".$N37;
if(isset($_GET['Sauvgarder'])){
$doc = new DOMDocument(); 
 
$doc->load($_SESSION['lang_out_Manu']); 
$Menu = $doc->getElementsByTagName("out_Menu"); 
				

foreach( $Menu as $Menu_util ) 
{ 
  $V1 = $Menu_util->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;
include ("Connection.php");
$c=1;
$NT=$_GET['NT'];
$VT=$_GET['VT'];
$client=0;
$fournisseur=0;
$CF=0;
$PR=0;
if($_GET['CodeE']!=""){
$name=$_GET['CodeE'];
}else{
$code=$_GET['Code'];
$declaration=$_GET['declaration'];
$cat=$_GET['typecompte'];
$name=$_GET['nomCode'];
$vante=0;
$achat=0;
$budGET=0;
if(isset($_GET["a"])&&isset($_GET["b"])&&isset($_GET["c"])){
$affiche='111';
}elseif(isset($_GET["a"])&&isset($_GET["b"])&&!isset($_GET["c"])){
$affiche='110';
}elseif(isset($_GET["a"])&&isset($_GET["c"])&&!isset($_GET["b"])){
$affiche='101';
}elseif(isset($_GET["b"])&&isset($_GET["c"])&&!isset($_GET["a"]) ){
$affiche='011';

}elseif(isset($_GET["a"])){
$affiche='100';
}
elseif(isset($_GET["b"])){
$affiche='010';
}
elseif(isset($_GET["c"])){
$affiche='101';
}else{
$affiche='000';
}$c=0;


$c=mysql_query("insert into codes values('$name','$code','$declaration','$cat','$affiche')")or die(mysql_error());

}
if(isset($_GET['client'])){
$client=$_GET['client'];
}
if(isset($_GET['fournisseur'])){
$fournisseur=$_GET['fournisseur'];
}
if(isset($_GET['CF'])){
$CF=$_GET['CF'];
}

if(isset($_GET['PR'])){
$PR=$_GET['PR'];
}
if($c){
$etat_up=mysql_query("insert into tax values('$NT','$VT','$client','$fournisseur','$CF','$PR','$name')");
$msg=$NT.'  '.$N107;
}

$pfx=$NT;
$succes="error";
$titremsg=$N150;
$titre=$N37;
if($c){    
$succes=$titremsg.' : '.$pfx.'  '.$N107; 
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

	}	}else{
		foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue; $V6 = $employee->getElementsByTagName( "e6" ); 
$N6 = $V6->item(0)->nodeValue; $V7 = $employee->getElementsByTagName( "e7" ); 
$N7 = $V7->item(0)->nodeValue; $V8 = $employee->getElementsByTagName( "e8" ); 
$N8 = $V8->item(0)->nodeValue; $V9 = $employee->getElementsByTagName( "e9" ); 
$N9 = $V9->item(0)->nodeValue; $V10 = $employee->getElementsByTagName( "e10" ); 
$N10 = $V10->item(0)->nodeValue; 

?>


<head>


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
						
						   <form  method="GET" action="" id="form_sample_2" class="form-horizontal">
						   <div class="form-body">
								    <div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N1; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <div class="input-icon right"><i class="fa"></i><input  class="form-control" type="text" name="NT" value="" required="required"/>
									  </div>
									 </div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N2; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <div class="input-icon right"><i class="fa"></i><input  class="form-control" type="number" name="VT" value="" required="required"/>
									  </div>
									 </div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N3; ?><span class="required">*</span></label>
									<div class="col-md-8">
					              <?php echo $N4; ?>:</h5><input type="checkbox" name="client" value="1" >
								  <?php echo $N5; ?>:</h5><input type="checkbox" name="fournisseur"  value="1">
								  <?php echo $N7; ?>:</h5><input type="checkbox" name="CF"  value="1">
								  <?php echo $N8; ?>:</h5><input type="checkbox" name="PR"  value="1">
									 </div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N9; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <select name="CodeE"  name="CodeE" onChange="myFunction(this)"    class="form-control select2me"  >
									  <?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' ");while($ab=mysql_fetch_array($a)){?><option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option><?php }} $_SESION["'".$i."'"]=$ad[0];}?>
									  <option value="" ><?php echo $N10; ?></option>
									  </select>
  </div>         
									
									 </div>
									  <div id="autrecat">
								  
								   
                                   </div>
								</div>
							<input type="hidden"  Name="valeur" value="AjouterTaxe.php"  >

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
							
							<script>
function myFunction(a) {
if(a.value==""){
    document.getElementById("autrecat").innerHTML = '<?php $docs = new DOMDocument(); $docs->load($_SESSION['lang']); $employees= $docs->getElementsByTagName("Codes"); foreach( $employees as $Codess ) { $V1 = $Codess->getElementsByTagName("e1");  $N1 = $V1->item(0)->nodeValue;  $V2 = $Codess->getElementsByTagName("e2");  $N2 = $V2->item(0)->nodeValue;  $V3 = $Codess->getElementsByTagName( "e3" );  $N3 = $V3->item(0)->nodeValue;  $V4 = $Codess->getElementsByTagName( "e4" );  $N4 = $V4->item(0)->nodeValue;  $V5 = $Codess->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;  $V6 = $Codess->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;  $V7 = $Codess->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;  $V8 = $Codess->getElementsByTagName( "e8" );  $N8 = $V8->item(0)->nodeValue;  $V9 = $Codess->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;  $V10 = $Codess->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue;$V11 = $Codess->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;$V12 = $Codess->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;$V13 = $Codess->getElementsByTagName( "e13" );   $N13 = $V13->item(0)->nodeValue;$V14 = $Codess->getElementsByTagName( "e14" );   $N14 = $V14->item(0)->nodeValue;$V15 = $Codess->getElementsByTagName( "e15" );   $N15 = $V15->item(0)->nodeValue;$V16 = $Codess->getElementsByTagName( "e16" );   $N16 = $V16->item(0)->nodeValue;$V17 = $Codess->getElementsByTagName( "e17" );   $N17 = $V17->item(0)->nodeValue;$V18 = $Codess->getElementsByTagName( "e18" );   $N18 = $V18->item(0)->nodeValue;$V19 = $Codess->getElementsByTagName( "e19" );   $N19 = $V19->item(0)->nodeValue;$V20 = $Codess->getElementsByTagName( "e20" );   $N20 = $V20->item(0)->nodeValue;$V21 = $Codess->getElementsByTagName( "e21" );   $N21 = $V21->item(0)->nodeValue;$V22 = $Codess->getElementsByTagName( "e22" );   $N22 = $V22->item(0)->nodeValue;$V23 = $Codess->getElementsByTagName( "e23" );  $N23 = $V23->item(0)->nodeValue;$V24 = $Codess->getElementsByTagName( "e24" );  $N24 = $V24->item(0)->nodeValue;$V25= $Codess->getElementsByTagName( "e25" );  $N25 = $V25->item(0)->nodeValue;$V26 = $Codess->getElementsByTagName( "e26" );  $N26 = $V26->item(0)->nodeValue;$V27 = $Codess->getElementsByTagName( "e27" );  $N27 = $V27->item(0)->nodeValue;$V28 = $Codess->getElementsByTagName( "e28" ); $N28 = $V28->item(0)->nodeValue;$V29 = $Codess->getElementsByTagName( "e29" ); $N29 = $V29->item(0)->nodeValue;$V30 = $Codess->getElementsByTagName( "e30" ); $N30 = $V30->item(0)->nodeValue;$V31 = $Codess->getElementsByTagName( "e31" ); $N31 = $V31->item(0)->nodeValue;$V32 = $Codess->getElementsByTagName( "e32" );$N32 = $V32->item(0)->nodeValue;$V33 = $Codess->getElementsByTagName( "e33" ); $N33 = $V33->item(0)->nodeValue;$V34 = $Codess->getElementsByTagName( "e34" ); $N34 = $V34->item(0)->nodeValue;$V35 = $Codess->getElementsByTagName( "e35" ); $N35 = $V35->item(0)->nodeValue;$V36 = $Codess->getElementsByTagName( "e36" ); $N36 = $V36->item(0)->nodeValue;$V37 = $Codess->getElementsByTagName( "e37" ); $N37= $V37->item(0)->nodeValue; $V38 = $Codess->getElementsByTagName( "e38" ); $N38 = $V38->item(0)->nodeValue;$V39 = $Codess->getElementsByTagName( "e39" ); $N39 = $V39->item(0)->nodeValue;$V40 = $Codess->getElementsByTagName( "e40" ); $N40 = $V40->item(0)->nodeValue;?><div class="form-group"><label class="control-label col-md-3"><?php echo $N14 ; ?><span class="required">	* </span></label><div class="col-md-4"><input type="text" class="form-control" name="nomCode" id="Acount" required   /></div></div><div class="form-group"><label class="control-label col-md-3"><?php echo $N15 ; ?><span class="required">	* </span></label><div class="col-md-4"><input type="text" class="form-control" name="Code" required /></div></div><div class="form-group"><label class="control-label col-md-3"><?php echo $N16 ; ?><span class="required">* </span></label><div class="col-md-4">	<input type="text" class="form-control" name="declaration" required />	</div></div><div class="form-group"><label class="control-label col-md-3"><?php echo $N17 ; ?><span class="required">* </span></label><div class="col-md-4"><input type="text" class="form-control" name="typecompte" required /></div></div><ul class="list-unstyled"><li><label><span ><input type="checkbox" value="1" name="a" ></span><?php echo $N18 ; ?></label></li><li><label><span><input type="checkbox" value="1" name="b"></span><?php echo $N20 ; ?></label>	</li><li><label><span ><input type="checkbox"  value="1" name="c"></span><?php echo $N20 ; ?></label></li></ul><?php  } ?>';
	}else{
	document.getElementById("autrecat").innerHTML = '';
	}
}
</script>
						


<?php }} ?>