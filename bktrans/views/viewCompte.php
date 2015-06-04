	<form action="MenuUtilisation.php?valeur=AjouterCompte.php" id="form_sample_2" class="form-horizontal" method="POST">

						<div class="portlet-body form">
								
									<div class="form-body">
									<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N10; ?></a>
										</li>
										
										
									</ul>
									</div>
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												<?php echo $error_form; ?>
											</div>
												<div class="tab-content no-space">
											 <div class="tab-pane active" id="tab_general">
									<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N2 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="nom" value="" required="required"  id="banq"/>
														
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N3 ; ?><span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="Num" id="Numb" required="required"    />
														
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N4 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="Number" min="0"  class="form-control" name="Sold" required="required"  />
														
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N12 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="Number" min="0"  class="form-control" name="decouvert" required="required" value="0"  />
														
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N5 ; ?> <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<select name="monnaie" id="monnaie" class="form-control select2me" required onchange="insertBNK();" >
														<option selected value=""></option>

<?php $m=mysql_query("select * from currency where choix_monnai='1'");
while($M=mysql_fetch_array($m)){ ?>
<option  value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php } ?>
</select>
													</div>
												</div>
												<ul class="list-unstyled"><li>
																			<label><span ><input type="checkbox" name="cash" ></span><?php echo $N7 ; ?></label>
																			</li>
																			<li>
																				<label><span><input type="checkbox" name="cheque" ></span><?php echo $N8 ; ?></label>
																			</li>
																			<li>
																				<label><span ><input type="checkbox" name="virement" ></span><?php echo $N9 ; ?></label>
																			</li>
																			
																		</ul>
																		<div class="form-actions">
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"  value="1" name="Sauvgarder" ><?php echo $N11; ?></button>
											
										</div>
											
										
									 </div>									
                                    </div>
					</div>
					

<div class="tab-pane " id="tab_meta">
<?php

	$docs = new DOMDocument(); 
$docs->load($_SESSION['lang']); 
$employees= $docs->getElementsByTagName("Codes"); 
foreach( $employees as $employee ) 
{ 
  
 $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;$V18 = $employee->getElementsByTagName( "e18" ); 
  $N18 = $V18->item(0)->nodeValue;$V19 = $employee->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;$V20 = $employee->getElementsByTagName( "e20" ); 
  $N20 = $V20->item(0)->nodeValue;$V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;$V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;$V23 = $employee->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;$V24 = $employee->getElementsByTagName( "e24" ); 
  $N24 = $V24->item(0)->nodeValue;$V25= $employee->getElementsByTagName( "e25" ); 
  $N25 = $V25->item(0)->nodeValue;$V26 = $employee->getElementsByTagName( "e26" ); 
  $N26 = $V26->item(0)->nodeValue;$V27 = $employee->getElementsByTagName( "e27" ); 
  $N27 = $V27->item(0)->nodeValue;$V28 = $employee->getElementsByTagName( "e28" ); 
  $N28 = $V28->item(0)->nodeValue;$V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;$V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;$V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;$V32 = $employee->getElementsByTagName( "e32" );
  $N32 = $V32->item(0)->nodeValue;$V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $employee->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;$V35 = $employee->getElementsByTagName( "e35" ); 
  $N35 = $V35->item(0)->nodeValue;$V36 = $employee->getElementsByTagName( "e36" ); 
  $N36 = $V36->item(0)->nodeValue;$V37 = $employee->getElementsByTagName( "e37" ); 
  $N37= $V37->item(0)->nodeValue; $V38 = $employee->getElementsByTagName( "e38" ); 
  $N38 = $V38->item(0)->nodeValue;$V39 = $employee->getElementsByTagName( "e39" ); 
  $N39 = $V39->item(0)->nodeValue;$V40 = $employee->getElementsByTagName( "e40" ); 
  $N40 = $V40->item(0)->nodeValue;$V43 = $employee->getElementsByTagName( "e43" ); 
  $N43 = $V43->item(0)->nodeValue;
  ?>
										  
 <div class="form-group">
													<label class="control-label col-md-3"><?php echo $N14 ; ?><span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="nomCode" READONLY id="Acount" required   />
														
													</div>
												</div>
												
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N15 ; ?><span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="Code" required />
														
													</div>
												</div><div class="form-group">
													<label class="control-label col-md-3"><?php echo $N16 ; ?><span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="declaration" required />
														
													</div>
												</div><div class="form-group">
													<label class="control-label col-md-3"><?php echo $N17 ; ?><span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="typecompte" required />
														
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3"><?php echo $N43 ; ?><span class="required">
													* </span>
													</label>
													<div class="col-md-4">
														<input type="text" class="form-control" name="Classement" required />
														
													</div>
												</div>
												<ul class="list-unstyled">
												<li>
																			<label><span ><input type="checkbox" value="1" name="a" ></span><?php echo $N18 ; ?></label>
																			</li>
																			<li>
																				<label><span><input type="checkbox" value="1" name="b"></span><?php echo $N19 ; ?></label>
																			</li>
																			<li>
																				<label><span ><input type="checkbox"  value="1" name="c"></span><?php echo $N20 ; ?></label>
																			</li>
																			
																		</ul>
<?php  } ?>
											<!-- Fin -->
												
									<input type="hidden" name="type" value="ajouter">  
									
									<div class="form-actions">
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"  value="1" name="Sauvgarder" ><?php echo $N40; ?></button>
											
										</div>
											
										
									 </div>									
                                    </div>
                                 </div>
								
							
						</div>
						</div>
						</div>
				</form>