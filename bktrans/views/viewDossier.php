<?php 
										 $defMN= mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
                                                    $MN = mysql_fetch_array($defMN);
                                                   
										
										?>
<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput tr').size()+2;
var j=document.getElementById("fieldsCount").value;
var i =(1*j)+1;

$('#addNew').live('click', function() {
$('<tr ><td><div class="form-group last"> <div class="col-md-9"><textarea class="form-control" name="Description'+i+'"  id="Description'+i+'" required="required" rows="1" data-error-container="#editor2_error"  ></textarea><div id="editor2_error"></div></div></div></td><td><div class="form-group"><div class="col-md-9"><div class="input-icon right"> <i class="fa"></i><input type="number" class="form-control" style="width:120px;"  name="qt'+i+'" id="qt'+i+'" required="required" /> </div></div> </div></td> <td><div class="form-group"><div class="col-md-11"><select class="form-control select2me" name="monnaie'+i+'" id="monnaie'+i+'" required="required" onchange=getDesvise(this.value,"<?php echo $MN[0]; ?>","devise'+i+'");  ><option></option><?php while($mon=mysql_fetch_array($Mn)){$def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");$def_monnaie = mysql_fetch_array($def);  if($def_monnaie[0]==$mon[0]){   ?> <option selected value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>  <?php }else{?>   <option  value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option><?php }}?></select></div></div></td><td><div class="form-group"><div class="col-md-9"><div class="input-icon right"><i class="fa"></i><input type="number" class="form-control" style="width:120px;" name="devise'+i+'" id="devise'+i+'" required="required" /></div></div></div></td><td><a href="#" id="remNew" title="suprimer"><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td></tr>').appendTo(addDiv);                                     
document.getElementById("fieldsCount").value=i;
i++;

return false;
});

$('#remNew').live('click', function() {

$(this).parents('tr').remove();




return false;
});
});


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
						<form action="MenuUtilisation.php" id="form_sample_2" class="form-horizontal" method="get">
						<input type="hidden"  name="valeur" value="Sauvgarder_dossier.php"/>
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
										<label class="control-label col-md-3"><?php echo $N1; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="cat" required>
										   <option></option>
											
											<?php while($admin=mysql_fetch_array($cat)){?>
                                          <option value="<?php echo $admin[1];?>"><?php echo $admin[1];?></option>
                                            <?php } ?>
																							
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N3; ?> 
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="client" >
											<option></option>
											
                                         <?php while($admin=mysql_fetch_array($s)){ ?>
                                           <option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
                                          <?php } ?>
										</select>
										</div>
										<a href="MenuUtilisation.php?valeur=AjouterClient.php&titre=<?php echo $N48; ?>"><img src="images/add.png" title="<?php echo $N48; ?>" target="_blank" ></a>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N19; ?></label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control" readonly name="estimdatefin" required>
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
										<label class="control-label col-md-3"><?php echo $N4; ?><span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input   class="form-control" type="TEXT"  name="partenaire" value="" required="required"/>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N5; ?> 
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="OPA" >
											<option selected value='1'><?php echo $N6; ?> </option>
											<option  value='0'><?php echo $N7; ?> </option>
                                         <?php while($admin=mysql_fetch_array($C)){ ?>
                                           <option value="<?php echo $admin[0];?>"><?php echo $admin[1];?></option>
                                          <?php } ?>
										</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"> <span class="required">
										 </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="hidden" id="fieldsCount" name="fieldsCount" value="1"/>
											</div>
										</div>
									</div>
									<table style="width:100%" id="addinput">
									<tr >
                                      <td><font color="#111" size="2" >&nbsp;&nbsp; <?php echo $N12; ?> </font><font color="red">  *</font></td>
                                      <td><font color="#111"size="2" >&nbsp;&nbsp; <?php echo $N13; ?></font><font color="red">  *</font></td>
                                      <td><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N14; ?></font><font color="red">  *</font></td>
                                      <td><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N17; ?></font><font color="red" size=1> 
									  <?php echo $def_monnaie[0] ; ?>*</font></td>
									  <td></td>
                                    </tr>
									<tr >
                                      <td>
									    <div class="form-group last">
										
										<div class="col-md-9">
				                            <textarea class="form-control" name="Description1"  id="Description1" required="required" rows="1" data-error-container="#editor2_error"  ></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									 </td>
                                     <td>
									 <div class="form-group">
										
										<div class="col-md-9">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" class="form-control" style="width:120px;"   name="qt1" id="qt1"  min="0" required />
											</div>
											</div>
									 </div>
										
									 </td>
                                      <td>
									  <div class="form-group">
										
										<div class="col-md-11">
										<?php 
										 $def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
                                                    $def_monnaie = mysql_fetch_array($def);
                                                   
										
										?>
											<select class="form-control select2me" name="monnaie1" id="monnaie1"  onchange="getDesvise(this.value,'<?php echo $def_monnaie[0]; ?>','devise1');"   required>
										
											<option></option>
											
												<?php 
											$Mn=mysql_query("select * from currency where choix_monnai='1'");

                                               while($mon=mysql_fetch_array($Mn)){ 
                                                   $def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
                                                    $def_monnaie = mysql_fetch_array($def);
                                                       if($def_monnaie[0]==$mon[0]){
                                          ?>
										   <option selected value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
                                             <?php }else{ ?>
                                              <option  value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
                                               <?php }
											   }     ?>
												
												
											</select>
										</div>
									</div>
									  </td>
									 
                                      <td>
									  <div class="form-group">
										
										<div class="col-md-9">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="number" value="1" class="form-control" style="width:120px;" name="devise1" id="devise1" min="0" required />
											</div>
											</div>
									  </div>
									  </td>
									  <td></td>
                                    </tr>
									</table>
									 <div >


                                     </div>
 
                                      <p style="width:750px">
                                       <a href="#" id="addNew"><?php echo $N15; ?><img src="images/add.png" title="<?php echo $N15; ?>"></a>
                                      </p>
		
	

                                    <div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="reset" class="btn default">Cancel</button>
										</div>
									</div>
								     </div>
								</div>
						</form>
					</div>
			</div>

