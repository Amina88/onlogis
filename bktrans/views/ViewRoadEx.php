<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput tr').size()+1;
var j = i-1;
var test=0;

$('#addNew').live('click', function() {


$('<tr>'+'<td><div class="col-md-14"><select class="form-control select2me"  style="width:80px"name="Objet'+i+'"   id="Objet'+i+'"  onchange="loadinf('+i+');"><option value=""><?php echo $N13; ?></option><option value="piece"><?php echo $N15; ?></option><option value="Conteneur 20 Dry">Conteneur 20 Dry</option><option value="Conteneur 40 Dry">Conteneur 40 Dry</option><option value="Conteneur 45 High Cube Dry">Conteneur 45 High Cube Dry </option><option value="Conteneur 20 Reefer">Conteneur 20 Reefer</option><option value="Conteneur 40 Reefer">Conteneur 40 Reefer </option><option value="Conteneur 20 Open Top">Conteneur 20 Open Top </option><option value="Conteneur 40 Open Top">Conteneur 40 Open Top </option></select></div>  </td> <td ><div class="col-md-15"> <div class="input-icon right"> <i class="fa"></i><input type="number" class="form-control" id="dim1'+i+'"  name="dim1'+i+'" required="required"  placeholder="Long" min="0" /></div></div><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="dim2'+i+'"  name="dim2'+i+'"  placeholder="Larg"  min="0" required="required"/></div></div><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control"  id="dim3'+i+'"  name="dim3'+i+'" placeholder="Hot" required="required" min="0" /></div></div></td><td><div class="col-md-15"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="QT'+i+'"  name="QT'+i+'"  min="0" required="required"/></div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="PT'+i+'"  min="0" name="PT'+i+'" required="required"/> 											</div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" id="TT'+i+'"  name="TT'+i+'" min="0"  required="required"/></div></div></td> <td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i><input type="text" class="form-control" name="Num'+i+'" id="Num'+i+'" /></div></div></td><td><div class="col-md-18"><div class="input-icon right"><i class="fa"></i> <input type="number"  min="0" class="form-control" name="CP'+i+'"  id="CP'+i+'"  onclick="calculpch('+i+');"  value="" /> </div></div></td><td width="20"><a href="#" id="remNew" ><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td>'+'</tr>').appendTo(addDiv);

i++;
document.getElementById("NP").value=i;
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
$offre="";
if(isset($_GET['confirmeoffre'])){
$id_offre=$_GET['id_offre'];
$app=mysql_query("select * from offre where id_offre='$id_offre'");
$offre=mysql_fetch_array($app);
}

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
pd=vm/0.003;

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


</script></head>

<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N2; ?></a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											<?php echo $N3; ?> </a>
										</li>
										<li>
											<a href="#tab_reviews" data-toggle="tab">
											
											<?php echo $N4; ?> 
											</a>
										</li>
										<li>
											<a href="#tab_history" data-toggle="tab">
											<?php echo $N47; ?> </a>
										</li>
									</ul>
									<!-- 1-->
									<form action="MenuUtilisation.php"  method="GET" id="form_sample_2"  class="form-horizontal">
									<input type="hidden" name="type" value="Road Export">
									<input type="hidden" name="valeur" value="GestionOperationRoad.php">
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
										<!-- zone d'affichage 1-->
										
							<div class="portlet box yellow">
							
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N1; ?> 
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
										<label class="control-label col-md-3"><?php echo $N5; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="Projet" required="required">
												<option value="">Select...</option>
												
												<?php while($ad=mysql_fetch_array($d)){ ?>
                                        <option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
                                                          <?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N6; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="client" required="required">
												<?php if(isset($_GET['confirmeoffre'])){ ?>
											<option value="<?php echo $offre[2]; ?>"><?php echo $offre[2]; ?></option>
											<?php }else{ ?>
												<option value=""><?php echo $N46; ?></option>
                                         <?php while($admin=mysql_fetch_array($s)){?>
                           <option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
                                                        <?php } }?>
											</select>
										</div>
									</div>
							
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N7; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" value="<?php  if(isset($_GET['confirmeoffre'])){ echo $offre[6];  }  ?>" name="Ref_client" required="required"/>
											</div>
										</div>
							</div>
							
									
										
									<table  id="addinput">
<tr>
<td ><h5><?php echo $N8; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N9; ?><font color="red"> (cm) *</font></h5></td>
<td ><h5><?php echo $N50; ?><font color="red">  *</font></h5></td>
<td ><h5><?php echo $N10; ?><font color="red"> (kg)  *</font></h5></td>
<td ><h5>Total<font color="red"> (kg)</font></h5></td>
<td ><h5><?php echo $N12; ?></h5></td>
<td ><h5><?php echo $N14; ?></h5></td>
</tr>
<?php 
$i=1;
if(isset($_GET['confirmeoffre'])){ 

include("piece_offre.php");
 }else{ ?>
<tr>
<td>
<div class="col-md-14"><select class="form-control select2me" name="Objet0"   id="Objet0"  onchange="loadinf(0);">
<option value=""><?php echo $N13; ?></option>
<option value="piece">
<?php echo $N15; ?></option>
<option value="Conteneur 20 Dry">Conteneur 20'Dry</option><option value="Conteneur 40 Dry">Conteneur 40' Dry</option><option value="Conteneur 45 High Cube Dry">Conteneur 45' High Cube Dry </option><option value="Conteneur 20 Reefer">Conteneur 20' Reefer</option><option value="Conteneur 40 Reefer">Conteneur 40' Reefer </option><option value="Conteneur 20 Open Top">Conteneur 20' Open Top </option><option value="Conteneur 40 Open Top">Conteneur 40' Open Top </option>
</select>

</div>

</td>
<td ><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="dim10"  name="dim10"  min="0" required="required"  placeholder="Long" />
											</div>
										</div><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="dim20"  name="dim20"  min="0"  placeholder="Larg" required="required"/>
											</div>
										</div><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control"  id="dim30"  name="dim30" min="0" placeholder="Hot" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="QT0"  name="QT0" min="0" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="PT0"  name="PT0"  min="0" required="required"/>
											</div>
										</div></td><td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="TT0"  name="TT0" min="0" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
												<input type="text" class="form-control" name="Num0" id="Num0"  />
											</div>
										</div></td><td>
										<div class="col-md-18">
										<div class="input-icon right">
											<i class="fa"></i>
												<input type="number" class="form-control" name="CP0"  id="CP0"  min="0" onclick="calculpch(0);"  value="" />
											</div>
										</div></td>
										</tr><?php } ?>
</table>

 <p style="">
<a href="#" id="addNew"><img src="images/add.png" title="<?php echo $N51; ?>"></a>
</p>

<input type="hidden" name="NP"  id="NP" value="<?php echo $i; ?>" required="required" >
								<?php if(isset($_GET['confirmeoffre'])){ ?>
<input type="hidden" name="offre"  id="offre" value="<?php echo $id_offre; ?>"  >
		<?php } ?>	
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N49; ?></button>
											
										</div>
									</div>
								</div>
								</div>
								
								
						
							<!-- END FORM-->
						</div>
									
</div>									<!-- zone d'affichage -->
										</div>
										<div class="tab-pane" id="tab_meta">
										<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N2; ?> 
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
<label class="control-label col-md-3"><?php echo $N17; ?><span class="required">* </span></label><div class="col-md-4">
<select class="form-control select2me"  name="Origine" required="required"> 
<?php if(isset($_GET['confirmeoffre'])){ ?>
											<option value="<?php echo $offre[12]; ?>"><?php echo $offre[12]; ?></option>
											<?php }else{ ?>
<option value=""  > </option>
<?php 
foreach( $pays as $payss ) 
{
for($i=1;$i<=300;$i++){
  $PY = $payss->getElementsByTagName("e$i"); 
  if($PY->item(0)){
  $Pays = $PY->item(0)->nodeValue; 
  
?>
<option value="<?php echo $Pays; ?>"  ><?php echo $Pays; ?> </option>
<?php
}}}}
?>
</select>
</div></div>
<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N16; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="Destination" required="required"> 
<?php if(isset($_GET['confirmeoffre'])){ ?>
											<option value="<?php echo $offre[13]; ?>"><?php echo $offre[13]; ?></option>
											<?php }else{ ?>
<option value=""  > </option>
<?php 
foreach( $pays as $payss ) 
{
for($i=1;$i<=300;$i++){
  $PY = $payss->getElementsByTagName("e$i"); 
  if($PY->item(0)){
  $Pays = $PY->item(0)->nodeValue; 
  
?>
<option value="<?php echo $Pays; ?>"  ><?php echo $Pays; ?> </option>
<?php
}}}}
?>
</select></div></div>
<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N18; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="BL" />
											</div>
										</div>
							</div>
<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N19; ?>:</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="ETD" value="" >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N20; ?>:</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="ETA" value="" >
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
										<label class="control-label col-md-3"><?php echo $N48; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="SL" />
											</div>
										</div>
							</div>
							<?php  if(isset($_GET['confirmeoffre'])){
$term=explode("&","$offre[14]");
?>
<ul class="list-unstyled">
<?php foreach($term as $terme){
if($terme!=""){

 ?>

							<li>
													<label><span ><input type="checkbox" value="<?php echo $terme; ?>" name="Terme[]" checked ></span><?php echo $terme; ?></label>
										</li>
																			
								<?php  }} ?>											
							</ul>

							
							
							<?php }else{ ?>
							<ul class="list-unstyled">
												<li>
																			<label><span ><input type="checkbox" value="EXW to CFR" name="Terme[]" ></span>Exw to CFR</label>
																			</li>
																			<li>
																				<label><span><input type="checkbox" value="EXW to DDU" name="Terme[]"></span>Exw to DDU</label>
																			</li>
																			<li>
																				<label><span ><input type="checkbox"  value="FOB to DDP" name="Terme[]"></span>Fob to DDU </label>
																			</li>
																			<li>
																				<label><span ><input type="checkbox"  value="FOB to DDU" name="Terme[]"></span>CFR to DDU</label>
																			</li>
																			
							</ul>
							<?php  }  ?>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N49; ?></button>
											
										</div>
									</div>
								</div>
						
							<!-- END FORM-->
						</div>
									
</div>		</div>						
										</div>
										<div class="tab-pane" id="tab_images">
								<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N3; ?> 
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
										<label class="control-label col-md-3"><?php echo $N21; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control"  name="VF" min="0" value="0" />
											</div>
										</div>
							</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N22; ?>
										</label>
										<div class="col-md-4">
<select class="form-control select2me"   name="monnaie1" id="monnaie1"> 
<?php 
while($mon=mysql_fetch_array($Mn)){ 
$def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
$def_monnaie = mysql_fetch_array($def);
if($def_monnaie[0]==$mon[0]){
?>
<option selected value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
<?php }else{?>
<option  value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
<?php }}?>
</select></div></div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N23; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control" value="1" min="0" id="devise1" name="devise1" />
											</div>
										</div>
							</div>
<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N24; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control"  name="VFT" min="0" value="0" />
											</div>
										</div>
							</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N25; ?>
										</label>
										<div class="col-md-4">
<select class="form-control select2me"   name="monnaieTrans" id=""> 
<?php 
while($mon2=mysql_fetch_array($Mn2)){ 
$def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
$def_monnaie = mysql_fetch_array($def);
if($def_monnaie[0]==$mon2[0]){
?>
<option selected value="<?php echo $mon2[0];?>"><?php echo $mon2[0];?></option>
<?php }else{?>
<option  value="<?php echo $mon2[0];?>"><?php echo $mon2[0];?></option>
<?php }}?>
</select></div></div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N26; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control" value="1" min="0" id="deviseTrans" name="deviseTrans" />
											</div>
										</div>
							</div>
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N27; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" value=""  name="four" />
											</div>
										</div>
							</div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N28; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" value=""  name="Ref" />
											</div>
										</div>
							</div><div class="form-group">
										<label class="control-label col-md-3"><?php echo $N29; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" value="" name="Dcomm" />
											</div>
										</div>
							</div>
<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N49; ?></button>
											
										</div>
									</div></div>
							<!-- END FORM-->
						</div>
									
</div>
						</div>						
										</div>
										<div class="tab-pane" id="tab_reviews">
										<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N4; ?> 
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
										<label class="control-label col-md-3">Select... <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" ID="Ree" name="Ree"  required onclick='changeText(this)'>
												<option value="" ><option>
												<option value="ET"><?php echo $N30; ?></option>
												<option value="ED"><?php echo $N32; ?></option>
												<option value="RE"><?php echo $N31; ?></option>
												
												
											</select>
										</div>
									</div>
									
<script type="text/javascript">


function changeText(a){
if(a.value=='RE'){
	document.getElementById('testt').innerHTML = '<table    style="width:100%;" ><tr><td><div class="form-group"><label class="control-label col-md-3"><?php echo $N33; ?><span class="required"> </span></label><div class="col-md-4"><div class="input-icon right"><i class="fa"></i><input type="text" class="form-control"  name="Num_dec"  value="" /></div></div></td></tr><tr><td ><div class="form-group"><label class="control-label col-md-3"><?php echo $N34; ?> <span class="required">* </span></label><div class="col-md-4"><select class="form-control select2me" name="IMP" id="IMP"  onclick="getchemps(this);"  required>	<option value="">--------</option><option value="Nan"><?php echo $N35; ?></option><?php while($appur= mysql_fetch_array($app)){?><option value="<?php echo $appur[0];?>"><?php echo $appur[0];?></option><?php }?><select></div></div></td><td><br><br><div id="DE"></div></td></tr></table>';
	}else{document.getElementById('testt').innerHTML = '<table style="width:100%;"  ><tr><td ><div class="form-group"><label class="control-label col-md-3"><?php echo $N33; ?><span class="required"> </span></label><div class="col-md-4"><div class="input-icon right"><i class="fa"></i><input type="text" class="form-control"  name="Num_dec"  value="" /></div></div></td></tr></table>';}
	}


function getchemps(b){
if(b.value=="Nan"){
document.getElementById('insrt').innerHTML ='<table style="width:100%;" ><tr><td><div class="form-group"><label class="control-label col-md-3"><?php echo $N33; ?><span class="required"> </span></label><div class="col-md-4"><div class="input-icon right"><i class="fa"></i><input type="text" class="form-control"  name="Num_dec_imp"  placeholder="<?php echo $N36; ?>" value="" /></div></div></td></tr></table>';
}else{
document.getElementById('insrt').innerHTML ='';
}
}
</script>
<div id="testt" >

</div>
<div id="insrt" >

</div>
									
							
<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N49; ?></button>
											
										</div>
									</div></div>
							<!-- END FORM-->
						</div>
									
</div>
								</div>			
								
										</div>
										<div class="tab-pane" id="tab_history">
										<!-- début tracking -->
										<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo $N5; ?>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						
						<div class="portlet-body form">
						<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
							<!-- BEGIN FORM-->
							<br><br>
							
							<div class="form-group last">
										
										<div class="col-md-9">
										<label class="control-label col-md-7"><?php echo $N45; ?> <span class="required">
										* </span>
										</label>
										<br><br>
											<textarea class="form-control" name="Tracking" rows="6"  data-error-container="#editor2_error"></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div>
											
<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"><?php echo $N49; ?></button>
											
										</div>
									</div>
									
									
</div>
							<!-- END FORM-->
						</div>
									
</div>	
								</div>			
								
										</div>
										<!-- fin tracking -->
										</div>
										</form>
									</div>
								</div>
							
						

</div>