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
						<form action="MenuUtilisation.php?valeur=AjouterAuMagasin.php" id="form_sample_2" class="form-horizontal" method="POST">
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
										<label class="control-label col-md-3"><?php echo $N3; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="CL" required>
				                         <?php
                                     if(isset($_GET['offre'])){
									  $idof=$_GET['offre'];
									  $cl=mysql_query("select client from offre where id_offre='$idof'");
									  $CT=mysql_fetch_array($cl);
									  ?>
									  <option value="<?php echo $CT[0]; ?>"><?php echo $CT[0]; ?></option>
                                    <?php
									  }else{
                                      while($CT=mysql_fetch_array($CLIENT)){
                                      ?>
                                       <option value="<?php echo $CT[0]; ?>"><?php echo $CT[0]; ?></option>
                                     <?php }} ?>
																							
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N4; ?> <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="DS" required>
				
                                      <?php 
                                     while($TST=mysql_fetch_array($files)){
                                      $fil=mysql_query("select * from  files where Catagorie='$TST[1]'");
                                     while($file=mysql_fetch_array($fil)){
                                             ?>
                                    <option value="<?php echo $file[0]; ?>"><?php echo $file[0]; ?></option>
                                       <?php } } ?>
																							
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3"><?php echo $N5; ?><span class="required">
										 </span>*</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control" readonly name="DD" required>
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
										<label class="control-label col-md-3"><?php echo $N6; ?><span class="required">
										 </span>*</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control" readonly name="DF" required>
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
					                  <label class="col-md-3 control-label"><?php echo $N10; ?></label>
										<div class="col-md-6">
											<div class="radio-list">
												<label class="radio-inline">
												<div class="radio" id="uniform-optionsRadios25">
											<input type="radio" name="ETAT" id="optionsRadios25" value="0" checked></div> <?php echo $N15; ?> </label>
												<label class="radio-inline">
												<div class="radio" id="uniform-optionsRadios26"><input type="radio" name="ETAT" id="optionsRadios26" value="1" ></div><?php echo $N16; ?> </label>
										
											</div>
										</div>
										</div>
										<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N11; ?> </label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="description" required></textarea>
													</div>
									 </div>

                                    <input type="hidden" name="sauvgarder" value="ajouter">
									 <?php
									   if(isset($_GET['offre'])){
									 ?>
									  <input type="hidden" name="id_offre" value="<?php echo $_GET['offre']; ?>">
									 <?php
									   }
									 
									 ?>
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="Sauvgarder"><?php echo $N12; ?></button>
											
										</div>
									</div>
								     </div>

				

                                </div>
							</form>
							</div>
						</div>
