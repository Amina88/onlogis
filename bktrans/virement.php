<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>
  
  
  
<?php 
if("$permission[1]"=="Administrateur" || "$permission[13]"=='13'){ 
$titre=$N53;
$url=$N19.".".$N23.".".$N53;
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
  $V14 = $employee->getElementsByTagName( "e14" );  $N14 = $V14->item(0)->nodeValue;


?>
<script type="text/javascript"> 


  function getRate(from, to) {
    var script = document.createElement('script');
    script.setAttribute('src', "http://query.yahooapis.com/v1/public/yql?q=select%20rate%2Cname%20from%20csv%20where%20url%3D'http%3A%2F%2Fdownload.finance.yahoo.com%2Fd%2Fquotes%3Fs%3D"+from+to+"%253DX%26f%3Dl1n'%20and%20columns%3D'rate%2Cname'&format=json&callback=parseExchangeRate");
    document.body.appendChild(script);
  }
function parseExchangeRate(data) {
    var name = data.query.results.row.name;
    var rate = parseFloat(data.query.results.row.rate, 10);
    document.getElementById("devisevalue").value=rate;

  }
  
function getMoney(dest){
var orig=document.getElementById("Compte").value;

var orignl = orig.split('&&&');
var destin = dest.split('&&&');
if(orignl[1]!=destin[1]){
getRate(orignl[1], destin[1]);
document.getElementById("devise").innerHTML='<div class="form-group"><label class="control-label col-md-3"><?php echo $N1 ; ?> <span class="required">* </span></label><div class="col-md-4"><input class="form-control" name="devise" value="" id="devisevalue"  required ><span class="help-block">1 '+orignl[1]+'=???'+destin[1]+'</span></div></div>';
}else{
document.getElementById("devise").innerHTML='';
}

}
	
  </script>
<?php

include ("Connection.php");

$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
$compt=$_GET['Num'];
$comptee=mysql_query("select * from bank_account  where Numero_Compte=$compt");
$cpt=mysql_fetch_array($comptee);
$Compte=mysql_query("select * from bank_account" );

$_SESSION['num_compte']=$compt;
?><form method="post" action="MenuUtilisation.php?valeur=sauvgarder_virement.php" id="form_sample_2" class="form-horizontal">
<input type="hidden" value="<?php echo  $titre; ?>" name="titre">
<input type="hidden" value="<?php echo $url; ?>" name="urlA">

<div class="portlet ">
											<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-refresh"></i><?php echo $N6; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						
						
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							
						
								<div class="form-body">
								<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
								<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N2 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="Compte" id="Compte" required="required" />
												
<option value="<?php echo $cpt[0].'&&&'.$cpt[7];?>"><?php echo $cpt[1]."(".$cpt[0].",$cpt[7])"; ?></option>


												</select>
											</div>
										</div>
										
										<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N4 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="destination" id="destination"  required="required" onchange="getMoney(this.value);" />
												<option value="" selected></option>
												<?php while($banque=mysql_fetch_array($Compte)){
?>
<option value="<?php echo $banque[0].'&&&'.$banque[7]; ?>" ><?php echo $banque[1]."(".$banque[0].",$banque[7])"; ?></option>


<?php  
} ?>
												</select>
											</div>
										</div>
									
								<div id="devise">
									
										</div>
						
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N3; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="number" min="0"  max="<?php echo $cpt[6]; ?>" name="Valeur" id="valeur"  value="" required="required"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N7; ?><span class="required">
										 *</span></label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Date" value=""  required>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											
										</div>
									</div>
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N5 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
												<select  class="form-control select2me" name="methodpayement" required>
<option value="virement"><?php echo $N6; ?></option>												</select>
											</div>
										</div>
										
										<div class="form-group">
													<label class="col-md-3 control-label"><?php echo $N8; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-8">
														<textarea class="form-control" name="description" required></textarea>
													</div>
												</div>
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N14; ?></button>
											
										</div>
									</div>
									
									
</div>
</div>
</div>
</div>

</form>
	
<?php }   }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>