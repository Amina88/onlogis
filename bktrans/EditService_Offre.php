<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addShipping');
var i = $('#addShipping tr').size()+1;
var j = i-1;
var test=0;

$('#addNewShipping').live('click', function() {


$('<tr>'+'<td><div class="col-md-14"><select class="form-control select2me"  style="width:80px"name="Objet'+i+'"   id="Objet'+i+'"  onchange="loadinf('+i+');"><option value=""></option><option value="piece"><?php echo $N46; ?></option><option value="Conteneur 20 Dry">Conteneur 20 Dry</option><option value="Conteneur 40 Dry">Conteneur 40 Dry</option><option value="Conteneur 45 High Cube Dry">Conteneur 45 High Cube Dry </option><option value="Conteneur 20 Reefer">Conteneur 20 Reefer</option><option value="Conteneur 40 Reefer">Conteneur 40 Reefer </option><option value="Conteneur 20 Open Top">Conteneur 20 Open Top </option><option value="Conteneur 40 Open Top">Conteneur 40 Open Top </option></select></div>  </td> <td ><div class="col-md-15"> <div class="input-icon right"> <i class="fa"></i><input type="number" class="form-control" id="dim1'+i+'"  name="dim1'+i+'"   placeholder="Long" min="0" /></div></div><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="dim2'+i+'"  name="dim2'+i+'"  placeholder="Larg"  min="0" /></div></div><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control"  id="dim3'+i+'"  name="dim3'+i+'" placeholder="Hot"  min="0" /></div></div></td><td><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="QT'+i+'"  name="QT'+i+'"  min="0" /></div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="PT'+i+'"  min="0" name="PT'+i+'" /> 											</div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="TT'+i+'"  name="TT'+i+'" min="0"  /></div></div></td> <td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="text" class="form-control" name="Num'+i+'" id="Num'+i+'" /></div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i> <input type="number"  min="0" class="form-control" name="CP'+i+'"  id="CP'+i+'"  onclick="calculpch('+i+');"  value="" /> </div></div></td><td width="20"><a href="#" id="remNew" ><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td>'+'</tr>').appendTo(addDiv);
document.getElementById("NPSH").value=i;
i++;
return false;
}
);

$('#remNew').live('click', function() {

$(this).parents('tr').remove();





return false;
});
});


</script>
<?php
include ("Connection.php");
$s=mysql_query("select * from custemer  ");
$d=mysql_query("select * from files F,categorie C  where F.etat_dossier='ouvert' AND appliquer_sur like '%1' AND C.Nom=F.Catagorie");
$Mn=mysql_query("select * from currency where choix_monnai='1'");
$Mn2=mysql_query("select * from currency where choix_monnai='1'");
$app=mysql_query("select Num_declaration_douane  from import where type_exo='Admission temporaire' AND Num_appurement!=''");


?>
<head>

<script type="text/javascript">
function loadinf(j){
a=document.getElementById("dim1"+j).value;
b=document.getElementById("dim2"+j).value;
c=document.getElementById("dim3"+j).value;
d=document.getElementById("Objet"+j).value;

if(d=='Conteneur 20 Dry'){
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("dim1"+j).value= 591.9;
document.getElementById("dim2"+j).value= 234;
document.getElementById("dim3"+j).value= 238;
document.getElementById("CP"+j).value= 22100;
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 40 Dry'){
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 1204.5;
document.getElementById("dim2"+j).value= 233.6;
document.getElementById("dim3"+j).value= 238;
document.getElementById("CP"+j).value= 27397;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 45 High Cube Dry'){
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 1358;
document.getElementById("dim2"+j).value= 234.7;
document.getElementById("dim3"+j).value= 269;
document.getElementById("CP"+j).value= 29600;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 20 Reefer'){

document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 542.8;
document.getElementById("dim2"+j).value= 226;
document.getElementById("dim3"+j).value= 224;
document.getElementById("CP"+j).value= 28390;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 40 Reefer'){
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 1120.7;
document.getElementById("dim2"+j).value= 224.6;
document.getElementById("dim3"+j).value= 218.3;
document.getElementById("CP"+j).value= 25220;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 20 Open Top'){
document.getElementById("Num"+j).style.backgroundColor='ffffff';
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 5919;
document.getElementById("dim2"+j).value= 234;
document.getElementById("dim3"+j).value= 2286;
document.getElementById("CP"+j).value= 21826 ;
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
}else if(d=='Conteneur 40 Open Top'){
document.getElementById("Num"+j).readOnly= false;
document.getElementById("dim1"+j).value= 12043;
document.getElementById("dim2"+j).value= 234;
document.getElementById("dim3"+j).value= 2272;
document.getElementById("CP"+j).value= 25181 ;
document.getElementById("Num"+j).style.backgroundColor='ffffff';
document.getElementById("dim1"+j).readOnly= true;
document.getElementById("dim2"+j).readOnly= true;
document.getElementById("dim3"+j).readOnly= true;
}else{
document.getElementById("dim1"+j).readOnly= false;
document.getElementById("dim2"+j).readOnly= false;
document.getElementById("dim3"+j).readOnly= false;
document.getElementById("Num"+j).style.backgroundColor='dbe0e0';
document.getElementById("Num"+j).readOnly= true;
document.getElementById("CP"+j).value= "" ;
document.getElementById("dim1"+j).value= "";
document.getElementById("dim2"+j).value= "";
document.getElementById("dim3"+j).value= "";


}


}
function calculpch(j){

a=document.getElementById("dim1"+j).value;
b=document.getElementById("dim2"+j).value;
c=document.getElementById("dim3"+j).value;
d=document.getElementById("Objet"+j).value;

pt=document.getElementById("PT"+j).value;
qt=document.getElementById("QT"+j).value;
tt=document.getElementById("TT"+j).value;
if(d=='piece'){
if(!isNaN(a) && !isNaN(b) && !isNaN(c)){
vm=a*b*c/1000000;
pd=vm/0.006;

if(pt>pd){
document.getElementById("CP"+j).value=pt*qt;

}else{
document.getElementById("CP"+j).value=pd*qt;
}
document.getElementById("TT"+j).value=pt*qt;
}else{
document.getElementById("dim1"+j).value="";
document.getElementById("dim2"+j).value="";
document.getElementById("dim3"+j).value="";
document.getElementById("test").innerHTML="<font size='2' color='red'><?php echo $N31; ?></font>";

}
}

}




	

function change(i){
elm=document.getElementById('div'+i).id;

for(j=1;j<7;j++){
NELM=document.getElementById('div'+j).id;
if(elm==NELM){
document.getElementById('div'+i).className='classB';
}else{
document.getElementById('div'+j).className='class';
}
}
}


</script>
								
										<!-- zone d'affichage 1-->
		
														
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
									<?php echo $error_form; ?>
									</div>
									<div class="alert alert-info display-show">
										
									<?php echo $N42;?> 
									</div>
							
							
							
									
										
									<table  id="addShipping" >
<tr>
<td ><h5><?php echo $N31; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N32; ?><font color="red"> (cm) *</font></h5></td>
<td ><h5><?php echo $N33; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N34; ?><font color="red"> (kg)  *</font></h5></td>
<td ><h5><?php echo $N35; ?><font color="red"> (kg)</font></h5></td>
<td ><h5><?php echo $N36; ?></h5></td>
<td ><h5><?php echo $N37; ?></h5></td>
</tr>
<?php

include("piece_offre.php");

?>
</table>

 <p style="">
<a href="#" id="addNewShipping"><img src="images/add.png" title="<?php echo $N41; ?>"></a>
</p>

<input type="hidden" name="NPSH"  id="NPSH" value="1"  >
									
									
								</div>
								
								
						
							<!-- END FORM-->
						
							<!-- BEGIN FORM-->
							
								<div class="form-body">
									<div class="alert alert-info display-show">
										
									<?php echo $N43;?>
									</div>
									
									
<div class="form-group">
<label class="control-label col-md-3"><?php echo $N39; ?><span class="required">* </span></label><div class="col-md-4">
<select class="form-control select2me"  name="Origine"  > 
<option value=""  > </option>
<?php 
foreach( $pays as $payss ) 
{
for($i=1;$i<=300;$i++){
  $PY = $payss->getElementsByTagName("e$i"); 
  if($PY->item(0)){
  $Pays = $PY->item(0)->nodeValue; 
  
?>
<option value="<?php echo $Pays; ?>" <?php  if($Pays=="$offre[13]"){echo "selected";} ?>  ><?php echo $Pays; ?> </option>
<?php
}}}
?>
</select>
</div></div>
<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N38; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="Destination" > 
<option value=""  > </option>
<?php 
foreach( $pays as $payss ) 
{
for($i=1;$i<=300;$i++){
  $PY = $payss->getElementsByTagName("e$i"); 
  if($PY->item(0)){
  $Pays = $PY->item(0)->nodeValue; 
  
?>
<option value="<?php echo $Pays; ?>" <?php  if($Pays=="$offre[12]"){echo "selected";} ?> ><?php echo $Pays; ?> </option>
<?php
}}}
?>
</select></div></div>


									
<table width="100%">	<tr>
<td>
<?php
$SRV=explode("&",$offre[14]);

?>
<label class="control-label col-md-10"><?php echo $N47; ?><span class="required">
										* </span>
										</label>
</td><td>
										<div class="col-md-10">
<select class="form-control select2me" name="Terme0" > 
<option value="EXW" <?php  if($SRV[0]=="EXW"){echo "selected";} ?>> EXW - ExWorks</option>
<option value="FCA" <?php  if($SRV[0]=="FCA"){echo "selected";} ?>> FCA - Free Carrier </option>
<option value="FAS" <?php  if($SRV[0]=="FAS"){echo "selected";} ?>>FAS -Free Alongside Ship</option>
<option value="FOB" <?php  if($SRV[0]=="FOB"){echo "selected";}?> > FOB - Free on Board</option>
<option value="CFR" <?php  if($SRV[0]=="CFR"){echo "selected";}?> >CFR - Cost and Freight </option>
<option value="CIF"  <?php  if($SRV[0]=="CIF"){echo "selected";}?>>CIF - Cost, Insurance, Freight</option>
<option value="CPT"  <?php  if($SRV[0]=="CPT"){echo "selected";}?>>CPT - Carriage Paid To</option>
<option value="CIP"  <?php  if($SRV[0]=="CIP"){echo "selected";}?>>CIP - Carriage and Insurance Paid</option>
<option value="DAF"  <?php  if($SRV[0]=="DAF"){echo "selected";}?>>DAF - Delivered At Frontier</option>
<option value="DES" <?php  if($SRV[0]=="DES"){echo "selected";} ?>>DES - Delivered Ex Ship</option>
<option value="DDP"  <?php  if($SRV[0]=="DDP"){echo "selected";}?>>DDP - Delivered Duty Paid</option>
<option value="DDU"  <?php  if($SRV[0]=="DDU"){echo "selected";}?>>DDU - Delivered Duty Unpaid</option>
<option value="DEQ"  <?php  if($SRV[0]=="DEQ"){echo "selected";}?>>DEQ - Delivered Ex Quay</option>
</select></div></td>
<td>
to</td><td>
<div class="col-md-12">
<select class="form-control select2me" name="Terme1" > 
<option value="EXW" <?php  if($SRV[1]=="EXW"){echo "selected";} ?>> EXW - ExWorks</option>
<option value="FCA" <?php  if($SRV[1]=="FCA"){echo "selected";} ?>> FCA - Free Carrier </option>
<option value="FAS" <?php  if($SRV[1]=="FAS"){echo "selected";} ?>>FAS -Free Alongside Ship</option>
<option value="FOB" <?php  if($SRV[1]=="FOB"){echo "selected";}?> > FOB - Free on Board</option>
<option value="CFR" <?php  if($SRV[1]=="CFR"){echo "selected";}?> >CFR - Cost and Freight </option>
<option value="CIF"  <?php  if($SRV[1]=="CIF"){echo "selected";}?>>CIF - Cost, Insurance, Freight</option>
<option value="CPT"  <?php  if($SRV[1]=="CPT"){echo "selected";}?>>CPT - Carriage Paid To</option>
<option value="CIP"  <?php  if($SRV[1]=="CIP"){echo "selected";}?>>CIP - Carriage and Insurance Paid</option>
<option value="DAF"  <?php  if($SRV[1]=="DAF"){echo "selected";}?>>DAF - Delivered At Frontier</option>
<option value="DES" <?php  if($SRV[1]=="DES"){echo "selected";} ?>>DES - Delivered Ex Ship</option>
<option value="DDP"  <?php  if($SRV[1]=="DDP"){echo "selected";}?>>DDP - Delivered Duty Paid</option>
<option value="DDU"  <?php  if($SRV[1]=="DDU"){echo "selected";}?>>DDU - Delivered Duty Unpaid</option>
<option value="DEQ"  <?php  if($SRV[1]=="DEQ"){echo "selected";}?>>DEQ - Delivered Ex Quay</option>

</select></div></td>
	</table>						
						
							<!-- END FORM-->
						</div>
									
					
								
										
												
						
									
										
						
							
						

						
	
