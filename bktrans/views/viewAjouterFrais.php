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
									 <div class="input-icon right"><i class="fa"></i><input  class="form-control" type="text" name="Var" value=""  required="required"/>
									  </div>
									 </div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3"><?php echo $N4; ?><span class="required">*</span></label>
									<div class="col-md-4">
									 <div class="input-icon right"><i class="fa"></i>
									 <input  class="form-control" type="number" name="value" value=""  required="required" />
									  </div>
									 </div>
								</div>
						<div class="form-group">
							 <label class="control-label col-md-3"><?php echo $N1; ?><span class="required">
										* </span>
										</label>
							  <div class="col-md-4">
                                <select class="form-control select2me" name="monnaie" id="monnaie" required="required">
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
								
								
								 <?php $cat=mysql_query("select * from categorie ");?>
							 <div class="form-group">
							      <label class="control-label col-md-3"><?php echo $N3; ?><span class="required">
										* </span>
										</label>
							      <div class="col-md-4">
                                    <select class="form-control select2me" name="To"  required="required">
									<?php while($admin=mysql_fetch_array($cat)){?>
                                      <option value="<?php echo $admin[1];?>"><?php echo $admin[1];?></option>
                                        <?php } ?>
                                      </select>
									 </div>
								</div>
								 <div class="form-group">
													<label class="control-label col-md-3"><?php echo $N10; ?><span class="required">*</span></label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="Desc" required="required"> </textarea>
														</div>
									</div>
									<input type="hidden"  Name="valeur" value="Ajouterfrais.php"  >
								
									<div class="form-actions">
							       <div class="row">
							         <div class="col-md-offset-3 col-md-9">
							          <button type="submit" class="btn green" name="Sauvgarder" value="Ajouter" ><?php echo $N11; ?></button>
							         </div>
							       </div>
							   </div>
							   </div>
							 </form>
							</div>
						</div>


