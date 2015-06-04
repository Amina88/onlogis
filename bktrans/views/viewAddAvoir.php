<form method="POST" action="MenuUtilisation.php?valeur=AjouterAvoir.php" id="form_sample_2" class="form-horizontal" >
<div class="portlet box blue-hoki">
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
					<!-- BEGIN FORM-->
							
						
								<div class="form-body">
								<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
						
						<input  type="hidden" value=1 id="fieldsCount" name="fieldsCount" placeholder="1"   style="width:130"  >		
<table >
<tr>
<td>
<div class="form-group"><label class="control-label col-md-8"><?php echo $N9; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="OP" id="OP"  class="form-control select2me" required="required"   style="width:150px" onchange="findoperation(this);" >
<?php
 if(isset($_GET['projet'])&&isset($_GET['id'])){ ?>
<option value="<?php echo $_GET['id']; ?>"><?php echo $_GET['id']; ?></option>
<?php }else{ ?>
<option value=""></option>
<?php while($ad=mysql_fetch_array($ENV)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }?>
<?php while($ad=mysql_fetch_array($LOG1)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }?>
<?php while($ad=mysql_fetch_array($LOG2)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }?><?php while($ad=mysql_fetch_array($LOG3)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }}?>

</select></div></div>
</td>
<td><div class="form-group"><label class="control-label col-md-2"><?php echo $N2; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">

												<input type="text" class="form-control"  name="Date"  required  style="width:120px" value="<?php echo date("Y-m-d"); ?>" >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div></div></div></td>
<td><div class="form-group"><label class="control-label col-md-2"><?php echo $N3; ?>&nbsp;<span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Datep" id="datep"  style="width:120px" required value="" >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											</div>
											</div>
</td>
<td >
<div class="form-group"><label class="control-label col-md-2"><?php echo $N4; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<input type="text"    class="form-control "   style="width:140px;" name="Ref" value=""  >
</div></div>
</td>
</tr>
<tr>
<td>
<div class="form-group"><label class="control-label col-md-2"><?php echo $N6; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="client"  id="client" required="required" class="form-control select2me"  style="width:150px" >
<option value=""></option>
<?php if(isset($_GET['projet'])&&isset($_GET['id'])){ 
$id=$_GET['id'];
$tb=$_GET['tb'];
$cl=mysql_query("select client from $tb where id='$id' ");
$clt=mysql_fetch_array($cl);
?>
<option value="<?php echo $clt[0]; ?>"><?php echo $clt[0]; ?></option>
<?php } ?>

<?php while($admin=mysql_fetch_array($s)){?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?>
</select></div></div></td>
<td>
<div class="form-group"><label class="control-label col-md-2"><?php echo $N7; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="monnaie" id="monnaie" required="required" style="width:120px;" class="form-control select2me"  onchange="changemonnaie(this);" >
<?php while($M=mysql_fetch_array($m)){
$def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
$def_monnaie = mysql_fetch_array($def);
if($def_monnaie[0]==$M[0]){
?>
<option selected value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php }else{?>
<option  value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php } }?>
</select></div></div></td>
<td >
<div class="form-group"><label class="control-label col-md-2"><?php echo $N8; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<input type="text" id="deviseVerLo"   class="form-control "   style="width:140px;" name="DFT"  value="1" required="required" onchange="findoperation(this);">
</div></div>
</td>
<td >
<div class="form-group"><label class="control-label col-md-2"><?php echo $N1; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="Projet" id="doss" required="required"  class="form-control select2me"  style="width:150px">
<?php if(isset($_GET['projet'])&&isset($_GET['id'])){ ?>
<option value="<?php echo $_GET['projet']; ?>"><?php echo $_GET['projet']; ?></option>
<?php }else{ ?>
<option value=""></option>
<?php while($ad=mysql_fetch_array($d)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }}?>
</select></div></div>
</td>
</tr>

</table>
<div class="table-scrollable">
<table  id="addinput" style="width:100%" >
<tr style="background:#ece7e7;height:30px">
<td><font color="#111" size="1" >&nbsp;&nbsp;<?php echo $N11; ?></font></td>
<td><font color="#111" size="1" >&nbsp;&nbsp;<?php echo $N12; ?></font><font color="red">  *</font></td>
<td><font color="#111"size="1" >&nbsp;&nbsp;<?php echo $N13; ?></font><font color="red">  *</font></td>
<td><font color="#111"size="1" >&nbsp;&nbsp;<?php echo $N14; ?></font><font color="red">  *</font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;<?php echo $N7; ?> </font><font color="red">  *</font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;<?php echo $N15; ?> </font><font color="red">  *</font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;&nbsp;<?php echo $N16; ?></font><font color="red" size="2">%</font><br><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N17; ?></font><font color="red" size="2">  *</font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;&nbsp;Net</font><font color="red">  </font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;&nbsp;Gross</font><font color="red">  </font></td>
<td></td>
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
<input type="Number" min="0" id="prix1" style="width:80px;" name="prix1" onMouseOut="valider();" placeholder="0.00" required="required" class="form-control" >
</div></td>
</div></td>
<td>
<div class="form-group">	
<div class="col-md-3">
<select name="monnaie1" id="monnaie1" required="required" style="width:85px;" onchange="changerdevise(this,1);" class="form-control select2me">
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
<input type="Number" id="devise1" name="devise1" style="width:60px;" value="1"  min="0"  onMouseOut="valider();"    required="required" class="form-control"> 
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
<select name="Compte1" required="required" style="width:100px;" class="form-control select2me"  ><option value="" selected><?php echo $N17; ?></option><?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' AND  etat_affiche like '1%'");while($ab=mysql_fetch_array($a)){?><option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option><?php }} $_SESION["'".$i."'"]=$ad[0];}?></select>
</div>
</div>
</td>
<td ><div id="net1" style="width:100px;">&nbsp;&nbsp;<font size="1">0.00</div></td>
<td ><div id="gross1" style="width:100px;">&nbsp;&nbsp;<font size="1">0.00</div></td>
<td ></td>




</tr>

</table>
	<p style="width:750px">
<a href="#" id="addNew"><?php echo $N18; ?><img src="images/add.png" title="Ajouter Element"></a>
</p>
</div>

				<table align="center">
	<tr><td><font size="1"><?php echo $N19; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="NET"><font size="1">0.00</div></td><td><div id="mn"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N20; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="T"><font size="1">0.00</div></td><td><div id="mn1"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N21; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="TOTAL"><font size="1">0.00</div></td><td><div id="mn2"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	
	</table>
<font color="#111" >&nbsp;&nbsp;<?php echo $N23; ?></font>
<Textarea style="width:100%" name="textS" class="form-control"></Textarea>
<input type="hidden" name="payementF" value="15 Jours" hidden><br>
<input type="hidden" value="sauvgarder" name="etat"	>		
<input type="hidden" value="update" name="type"	>	
<input type="hidden" value="" name="Reference"	>	
<input type="hidden" name="ajouterAvoir" value="ajouterAvoir"> 


	<div class="form-actions">
									 
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" value="1" name="SauvgarderOffre" ><?php echo $N29; ?></button>
											<button type="submit" class="btn true" value="0" name="SauvgarderOffre" ><?php echo $N26; ?></button>
											
										</div>
									 </div>									
                                    </div>
	</div>
	</div>
	</div>
</form>