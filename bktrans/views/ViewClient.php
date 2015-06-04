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
											<?php echo $N3; ?></a>
										</li>
										<li>
											<a href="#tab_reviews" data-toggle="tab">
											<?php echo $N4; ?> 
											</a>
										</li>
										
									</ul>
									</div>
									
									<form action="MenuUtilisation.php?valeur=AjouterClient.php" id="form_sample_2" class="form-horizontal" method="post">
										<div class="tab-content no-space">
										
										  <div class="tab-pane active" id="tab_general">
										 
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
										<label class="control-label col-md-3"><?php echo $N6; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="client" value="" required="required"/>
											</div>
										</div>
									</div>	
								
						
							<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N10; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="email" name="email" value="" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N11; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="tel1" value="" />
											</div>
											<span class="help-block">
											(00222 45255386) </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N12; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="tel2" value="" />
											</div>
											<span class="help-block">
											(00222 45255386) </span>
										</div>
									</div>
									   
									<div class="form-group last">
										<label class="control-label col-md-3"><?php echo $N35; ?>
										</label>
										<div class="col-md-4">
				                            <textarea class="form-control" name="adr"    rows="1" data-error-container="#editor2_error"  ></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									<div class="form-group last">
										<label class="control-label col-md-3"><?php echo $N36; ?>
										</label>
										<div class="col-md-4">
				                            <textarea class="form-control" name="city"    rows="1" data-error-container="#editor2_error"  ></textarea>
											<div id="editor2_error">
											</div>
										</div>
									   </div>
									   
					<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N37; ?>
										</label>
										<div class="col-md-4">
<select class="form-control select2me" name="pays" > 
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
}}}
?>
</select></div></div>

<script>
function myFunction(a) {
if(a.value==""){
    document.getElementById("autrecat").innerHTML = ' <div class="form-group"><label class="control-label col-md-3">&nbsp;&nbsp;&nbsp;</label><div class="col-md-4"><div class="input-icon right"><i class="fa"></i><input  class="form-control" type="text" name="autrecat" value="" /></div></div></div>';
	}else{
	document.getElementById("autrecat").innerHTML = '';
	}
}
</script>
	   
								<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N38; ?>
										</label>
										<div class="col-md-4">
                                  <select class="form-control select2me"  onChange="myFunction(this)" name="cat" id="cat" > 
								 <?php $req=mysql_query("select distinct cat from custemer ");
			                        while($cat=mysql_fetch_array($req)){?>
		
					                 <option value="<?php echo $cat[0];?>"> <?php echo $cat[0];?></option>	
									 <?php }?>					                
					                 <option value=""  ><?php echo $N39; ?></option>
                                 </select>
                                   </div></div>	
								   <div id="autrecat">
								  
								   
                                   </div>
										
                                         
							    </div>
								<!-- END FORM-->
						</div>
									
</div>	
									
										  
										   
								          </div>
										   <div class="tab-pane " id="tab_meta">
										  
										  
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
										  <div class="alert alert-danger display-hide">
										  <button class="close" data-close="alert"></button>
										  <?php echo $error_form; ?>
									     </div>
										  <br>
										  <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N14; ?>
										</label>
										<div class="col-md-4">
											<select class="form-control " name="typeEnt" >
										 
									        <option value="<?php echo $N15; ?>"><?php echo $N15; ?></option>
                                            <option value="<?php echo $N16; ?>"><?php echo $N16; ?></option>
                                            <option value="<?php echo $N17; ?>"><?php echo $N17; ?></option>
																							
											</select>
										</div>
									</div>
										<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N18; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
										<table width="100%"><tr><td>
                                  <select class="form-control select2me"   name="comptec" required  > 
								 <?php $req=mysql_query("select distinct compte from custemer ");
			                        while($cat=mysql_fetch_array($req)){?>
		
					                 <option value="<?php echo $cat[0];?>"> <?php echo $cat[0];?></option>	
									 <?php }
									 $req=mysql_query("select * from codes ");
			                        while($cat=mysql_fetch_array($req)){?>
		
					                 <option value="<?php echo $cat[0];?>"> <?php echo $cat[0];?></option>	
									 <?php }?>					                
					                
                                 </select></td>
								 <td><a href="MenuUtilisation.php?valeur=Codes.php&titre=<?php echo $ttcode; ?>&url=<?php echo $urlCod; ?>&AjouterCod=true" target="_blank"><img src="images/add.png" title="<?php echo $N18; ?>" target="_blank"></a>
                                   </td></tr></table>
								   </div></div>	 
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N19; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="numero" value="" />
											</div>
											
										</div>
									</div>  
										<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N20; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="skype" value="" />
											</div>
											
										</div>
									</div> 
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N21; ?> 
										</label>
										<div class="col-md-4">
											<input name="siteweb" type="url" class="form-control">
											<span class="help-block">
											e.g: http://www.demo.com or http://demo.com </span>
										</div>
									</div>
									
										 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N22; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="fax" value="" />
											</div>
											
										</div>
									</div> 
									    <select name="archive" hidden>
                                         <option value="Non"><?php echo $N25; ?></option>
                                         <option value="oui"><?php echo $N26; ?></option>
                                       </select>
										  <br>
										  	 </div> 
								          </div> 
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
											 <div class="alert alert-danger display-hide">
										    <button class="close" data-close="alert"></button>
										    <?php echo $error_form; ?>
									        </div>
										       <br>
											   <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N26; ?>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="loi" value="" />
											</div>
											
										</div>
									</div>
									
									 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N31; ?> 
										</label>
										<div class="col-md-4">
											<select class="form-control " name="Ex">
										 
									        <option value="non"><?php echo $N28; ?></option>
                                            <option value="oui"> <?php echo $N29; ?></option>
																							
											</select>
										</div>
									</div>
										  
										  <br><br>
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
										       <br>
										<div class="alert alert-danger display-hide">
										    <button class="close" data-close="alert"></button>
										    <?php echo $error_form; ?>
									        </div>
									
									 <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N30; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control " name="typeCl" required>
										 
									        <option value="<?php echo $N31; ?>"><?php echo $N31; ?></option>
                                            <option value="<?php echo $N32; ?>"> <?php echo $N32; ?></option>
																							
											</select>
										</div>
									</div>
									<div class="form-group">
	                                   <label class="control-label col-md-3"><?php echo $N40; ?><span class="required">
	                                   	*</span>
	                                    </label>
	                                    <div class="col-md-4">
		                                <div class="input-icon right">
		                                <i class="fa"></i>
		                                  <input  class="form-control" type="text" name="terme_paiement" value="0" required="required"/>
		                                 </div>
											
	                                      </div>
                                     </div> 
									<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="sauvgarder" ><?php echo $N34; ?></button>
											
										</div>
									 </div>									
                                    </div>
										  
										  
										      </div> 
								          </div>
										
										  
										   
								          </div> 
										  
                </div>
				</form>
			</div>

