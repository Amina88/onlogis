<div class="portlet-body">

<form action="MenuUtilisation.php?valeur=Ajouteroffre.php" id="form_sample_2" class="form-horizontal" method="POST">
	<div class="tab-content no-space">
	
	<div class="portlet box blue">
											<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo  $_GET['titre']; ?> 
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body form">
						<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N45; ?><span class="required">
										* </span>
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="Type" required="required" onchange="Changemnt_typ(this);"> 
<option value="Air Import"  > Air Import</option>
<option value="Air Export"  > Air Export </option>
<option value="Ocean Import"  >Ocean Import </option>
<option value="Ocean Export"  > Ocean Export</option>
<option value="Road Import"  >Road Import </option>
<option value="Road Export"  > Road Export</option>
<option value="LC"  > Location </option>
<option value="LS"  > Logistique Service</option>
<option value="MG"  > Magasinage </option>
</select></div></div>

					<!-- BEGIN FORM-->
							
						
								<div class="form-body">
								<div class="alert alert-info display-show">
									
									<?php echo $N44;?>
									</div>
						
						
		<table  style="width:100%">
<tr>
<td></td>
</tr><td>
<input  type="hidden" value=1 id="fieldsCount" name="fieldsCount" placeholder="1"   style="width:130"  >
</td>
</tr>
<tr>
<td></td>
<td><label class="control-label col-md-3"><?php echo $N6; ?><span class="required"> *</span></label></td>
<td><label class="control-label col-md-3"><?php echo $N7; ?><span class="required"> *</span></label></td>
<td><label class="control-label col-md-3"><?php echo $N8; ?>  <span class="required"> *</span></label></td>
<td><label class="control-label col-md-3"><?php echo $N4; ?> </label></td>
</tr>
<tr>

<td></td>
<td>
<div class="form-group"><div class="col-md-4">
<select name="client"  id="client" required="required"  class="form-control select2me"  style="width:200px;" >
<option value=""></option>
<?php while($admin=mysql_fetch_array($s)){?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?>
</select>
</div></div>

</td>
<td><div class="form-group"><div class="col-md-4"><select name="monnaie" id="monnaie" required="required" style="width:120px;" onchange="changemonnaie(this);" class="form-control select2me"  >
<?php while($M=mysql_fetch_array($m)){
$def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
$def_monnaie = mysql_fetch_array($def);
if($def_monnaie[0]==$M[0]){
?>
<option selected value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php }else{?>
<option  value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php } }?>
</select>
</div>
</div>
</td>
<td >
<div class="form-group">
<div class="col-md-4">
<div class="input-icon left">
<i class="fa"></i>									
<input type="Number" class="form-control "  id="deviseVerLo" style="width:140px;" min="0" name="DFT" required="required" value="1">
</div>
</div>
</div>
</td>
<td><div class="form-group"><div class="col-md-10">
<input type="text" name="Ref" class="form-control"   onKeyUp="listecode();">
</div>
</div>
</td>
<tr>
</table>
<div class="table-scrollable">
<table   id="addinput"  style="width:100%;" >
<tr style="background:#ece7e7;">
<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N11; ?></label></td>
<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N12; ?></label></td>
<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N13; ?></label></td>
 <td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N14; ?></label></td>
<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N7; ?> </label></td>
<td><label class="control-label col-md-3" style="font-size:10px;">&nbsp;&nbsp;<?php echo $N15; ?> </label></td>

<td><label class="control-label col-md-3" style="font-size:10px;"><?php echo $N16; ?><br><?php echo $N17; ?></label></td>
<td><label class="control-label col-md-3" style="font-size:10px;">Net</label></td>
<td><label class="control-label col-md-3" style="font-size:10px;">Gross</label></td>
<td>&nbsp;&nbsp;</td>

</tr>
<tr >
<td>
 <select  id="c1"  class="form-control"  style="width:70px;"  onchange="getItem(this,1);">
 <option value="" selected>  </option>

 <?php  
 $cl=mysql_query("select * from default_billing   ");
while($clt=mysql_fetch_array($cl)){
?>
<option value="<?php echo $clt[0]; ?>"><?php echo $clt[5]; ?></option>
 
<?php } ?>
 
 
 </select></td>
<td>
<div class="form-group">
<div class="col-md-3">	
<textarea   name="Description1"  class="form-control" id="Description1" required="required" style="width:100px"></textarea>

</div>
</div>
 </td>
<td >
<div class="form-group">	
<div class="col-md-3">
<input type="number" min="0" id="qt1" style="width:80px;" name="qt1" required="required" class="form-control">
</div>
</div>
</td>
<td ><div class="form-group">	
<div class="col-md-3">
<input type="Number" min="0" id="prix1" style="width:80px;" name="prix1" onkeyup="valider();" placeholder="0.00" required="required" class="form-control" >
</div></td>
</div></td>
<td>
<div class="form-group">	
<div class="col-md-3" >
<select name="monnaie1" id="monnaie1" required="required" style="width:85px;" onchange="changerdevise(this,1);" class="form-control ">
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
</select>
</div>
</div>
</td>
<td>
<div class="form-group">	
<div class="col-md-3">
<input type="Number" id="devise1" name="devise1" style="width:60px;" value="1"  min="0" onchange="valider();"    required="required" class="form-control"> 
</div>
</div>
</td>
<?php 
$def_tax = mysql_query("SELECT * FROM  tax");

?>
<td ><div class="form-group">	
<div class="col-md-3"><select id="TVA1" style="width:90px;" name="TVA1" onChange="valider();"  class="form-control select2me" >
<option value="0/0">0</option>
<?php while($def_tx = mysql_fetch_array($def_tax)){
echo "<option value=".$def_tx[0]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; 
}
?>
</select>
</div>
</div>
</td>
<td ><div id="net1" style="width:100px;">&nbsp;&nbsp;<font size="1">0.00</div></td>
<td ><div id="gross1" style="width:100px;">&nbsp;&nbsp;<font size="1">0.00</div></td>
<td >&nbsp;&nbsp;</td>




</tr>

</table>
	<p style="width:750px">
<a href="#" id="addNew"><?php echo $N18; ?><img src="images/add.png" title="<?php echo $N41; ?>"></a>
</p>
</div>

				<table align="center">
	<tr><td><font size="1"><?php echo $N19; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="NET"><font size="1">0.00</div></td><td><div id="mn"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N20; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="T"><font size="1">0.00</div></td><td><div id="mn1"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N21; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="TOTAL"><font size="1">0.00</div></td><td><div id="mn2"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	
	</table>	

	
<font color="#111" >&nbsp;&nbsp;<?php echo $N23; ?></font>
<Textarea style="width:100%" name="textS"  class="form-control "></Textarea>

	<div id="changement_type">
						<?php
									include("Service_Offre.php");
									?>
									</div>
	<div class="form-actions">
									 
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="SauvgarderOffre" ><?php echo $N29; ?></button>
											
										</div>
									 </div>									
                                    </div>
									
							
                                         
							    </div>
							    </div>
							    </div>
								
							
</div>
</form>
</div>
