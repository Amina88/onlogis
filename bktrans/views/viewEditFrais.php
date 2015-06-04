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
									<label class="control-label col-md-3"><?php echo $N2; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <div class="input-icon right"><i class="fa"></i><input  class="form-control" type="text" name="Var" value="<?php echo $Tax[5];?>"  required="required"/>
									  </div>
									 </div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N4; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <div class="input-icon right"><i class="fa"></i><input  class="form-control" type="number" name="value" value="<?php echo $Tax[2];?>"  required="required" id="value" onKeyUP="isNum(this);"/>
									  </div>
									 </div>
								</div>
							<div class="form-group">
							 <label class="control-label col-md-3"><?php echo $N1; ?><span class="required">
										* </span>
										</label>
							  <div class="col-md-4">
                                <select class="form-control select2me" name="monnaie" id="monnaie" required="required">
									<?php
									$def = mysql_query("SELECT Abreviation_Monnai FROM currency");
                                    while($def_monnaie=mysql_fetch_array($def)){
                                    if($def_monnaie[0]==$Tax[3]){
                                     ?>
									   <option selected value="<?php echo $def_monnaie[0];?>"><?php echo $def_monnaie[0];?></option>
									    <?php }else{?>
                                        <option  value="<?php echo $def_monnaie[0];?>"></option>
                                          <?php } 
										  }?>
                                     </select>
									 </div>
									 </div>
									 <?php $cat=mysql_query("select * from categorie ");?>
							 <div class="form-group">
							      <label class="control-label col-md-3"><?php echo $N3; ?><span class="required">
										* </span>
										</label>
							      <div class="col-md-4">
                                    <select class="form-control select2me" name="To"  required="required">
									<?php while($admin=mysql_fetch_array($cat)){
                                          if($admin[1]==$Tax[4]){
                                          ?>
                                     <option value="<?php echo $admin[1];?>" selected><?php echo $admin[1];?></option>
                                      <?php }else{ ?>
                                      <option value="<?php echo $admin[1];?>"><?php echo $admin[1];?></option>
                                      <?php } } ?>
                                      </select>
									 </div>
									 </div>
									 <div class="form-group">
													<label class="control-label col-md-3"><?php echo $N10; ?><span class="required">*</span></label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="Desc"><?php echo $Tax[1];?></textarea>
													</div>
									</div>
									<input type="hidden"  Name="valeur" value="updateFrais.php"  >

                                <div class="form-actions">
							       <div class="row">
							         <div class="col-md-offset-3 col-md-9">
							          <button type="submit" class="btn green" name="Sauvgarder" ><?php echo $N11; ?></button>
							         </div>
							       </div>
							   </div>
							    </div>
							 </form>
							</div>
						</div>


