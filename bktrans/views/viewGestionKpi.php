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
						<form action="MenuUtilisation.php?valeur=Gestion_Kpi.php"  class="form-horizontal" method="post">
						<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
									
									<br><br><br>
									<table class="table table-striped table-hover table-bordered">
									<tr>
									<td></td>
									<td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>><font size="2"><?php echo $p1[2].' <i class="fa fa-angle-right"></i> '.$p1[3]; ?></td>
									<td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>><font size="2"><?php echo $p2[2].' <i class="fa fa-angle-right"></i> '.$p2[3]; ?></td>
									<td><font size="2"><?php echo $p[2].' <i class="fa fa-angle-right"></i> '.$p[3]; ?></td>
									<td></td>
									</tr>
									<tr><td colspan=5>
									<span class="label label-sm label-info"><?php echo $N1; ?> </span></td>
									</tr>
									<tr><td>
									<font size="2"><?php echo $N2; ?> 
										
										</td>
										<td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>									
									    <input  class="form-control input-small" type="text" name="nbroffre1"   value="<?php if($ra1!=null){echo number_format($rv1[1],2,',','.').'/'.$ra1[1];}else{echo '0/0';} ?>" readonly />
										</td>
										<td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
										<input  class="form-control input-small" type="text" name="nbroffre2"   value="<?php if($ra2[0]!=null){echo number_format($rv2[1],2,',','.').'/'.$ra2[1];}else{echo '0/0';} ?>" readonly />												
										</td>
										<td>
										<input  class="form-control input-small" type="number" name="nbroffre"  required="required" min="0" value="<?php if($a!=null){echo $a[1];} ?>"/>												
										</td>
										<td>									
									    <input  class="form-control" type="checkbox" name="chxnbroffre"   value="1" <?php if($v[0]!=0){echo "checked";} ?>/>
										</td>
										</tr>
										<tr><td>
							        	<font size="2"><?php echo $N3; ?> 
								       </td><td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
										<input  class="form-control input-small" type="text" name="nbroffreacc1"    value="<?php if($ra1[0]!=null){echo number_format($rv1[2],2,',','.').'/'.$ra1[2];}else{echo '0/0';} ?>" readonly />
										</td>
										<td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
										<input  class="form-control input-small" type="text" name="nbroffreacc2"   value="<?php if($ra2[0]!=null){echo number_format($rv2[2],2,',','.').'/'.$ra2[2];}else{echo '0/0';} ?>" readonly />
										</td >
										<td>
										<input  class="form-control input-small" type="number" name="nbroffreacc"  required="required" min="0" max="100" value="<?php if($a!=null){echo $a[2];} ?>"/>
										</td>
										<td>
										<input  class="form-control" type="checkbox" name="chxnbroffreacc"   value="1" <?php if($v[1]!=0){echo "checked";} ?>/>
										</td>
										</tr>
									   <tr>
									   <td>
				                       <font size="2"><?php echo $N4; ?> 
									   </td>
									   <td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
									   <input  class="form-control input-small" type="text" name="nbrclients1"  value="<?php if($ra1[0]!=null){echo number_format($rv1[3],2,',','.').'/'.$ra1[3];}else{echo '0/0';} ?>" readonly />
									   </td>
									   <td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
									    <input  class="form-control input-small" type="text" name="nbrclients2"  value="<?php if($ra2[0]!=null){echo number_format($rv2[3],2,',','.').'/'.$ra2[3];}else{echo '0/0';} ?>" readonly />
									   </td>
									   <td>
									    <input  class="form-control input-small" type="number" name="nbrclients"  required="required" min="0" value="<?php if($a!=null){echo $a[3];} ?>"/>
									    </td>
										<td>
										<input  class="form-control" type="checkbox" name="chxnbrclients"   value="1" <?php if($v[2]!=0){echo "checked";} ?>/>
										</td>
										</tr>
										<tr><td>
									  <font size="2"><?php echo $N5; ?>
									  </td>
									  <td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
										<input  class="form-control input-small" type="text" name="nbrnouveauxclient1"  value="<?php if($ra1[0]!=null){echo number_format($rv1[4],2,',','.').'/'.$ra1[4];}else{echo '0/0';} ?>" readonly  />
									  </td>
									  <td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
										<input  class="form-control input-small" type="text" name="nbrnouveauxclient2" value="<?php if($ra2[0]!=null){echo number_format($rv2[4],2,',','.').'/'.$ra2[4];}else{echo '0/0';} ?>" readonly />
									  </td>
									  <td>
										<input  class="form-control input-small" type="number" name="nbrnouveauxclient"  required="required" min="0" value="<?php if($a!=null){echo $a[4];} ?>"/>
									  </td>
									  <td>
									<input  class="form-control" type="checkbox" name="chxnbrnouveauxclient"   value="1" <?php if($v[3]!=0){echo "checked";} ?>/>
									</td>
									</tr>
								   <tr><td colspan=5 ><span class="label label-sm label-info"><?php echo $N6; ?></span></td></tr>
									<tr>
									<td>
							        <font size="2"><?php echo $N7; ?> 
								    </td>
									<td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
									<input  class="form-control input-small" type="text" name="nbropps1" value="<?php if($ra1[0]!=null){echo number_format($rv1[5],2,',','.').'/'.$ra1[5];}else{echo '0/0';} ?>" readonly />
									</td>
									<td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
									<input  class="form-control input-small" type="text" name="nbropps2" value="<?php if($ra2[0]!=null){echo number_format($rv2[5],2,',','.').'/'.$ra2[5];}else{echo '0/0';} ?>" readonly />
									</td>
									<td>
									<input  class="form-control input-small" type="number" name="nbropps" required="required" min="0" value="<?php if($a!=null){echo $a[5];} ?>"/>
									</td>
									<td>
									<input  class="form-control" type="checkbox" name="chxnbropps"  value="1" <?php if($v[4]!=0){echo "checked";} ?>/>
									</td>
								   </tr>
								   <tr>
								   <td>
									<font size="2"><?php echo $N8; ?>
									</td>
									<td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
									<input  class="form-control input-small" type="text" name="nbroppfact1"  value="<?php if($ra1[0]!=null){echo number_format($rv1[6],2,',','.').'/'.$ra1[6];}else{echo '0/0';} ?>" readonly />
									</td>
									<td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
									<input  class="form-control input-small" type="text" name="nbroppfact2" value="<?php if($ra2[0]!=null){echo number_format($rv2[6],2,',','.').'/'.$ra2[6];}else{echo '0/0';} ?>" readonly />
									</td>
									<td>
									<input  class="form-control input-small" type="number" name="nbroppfact"  required="required" min="0" max="100" value="<?php if($a!=null){echo $a[6];}else{echo '0/0';} ?>"/>
									</td>
									<td>
									<input  class="form-control" type="checkbox" name="chxnbroppfact"   value="1" <?php if($v[5]!=0){echo "checked";} ?>/>
									</td>
									</tr>
									<tr>
									<td>
									<font size="2"><?php echo $N14; ?>
									</td>
									<td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
									<input  class="form-control input-small" type="text" name="nbrdossier1"   value="<?php if($ra1[0]!=null){echo number_format($rv1[7],2,',','.').'/'.$ra1[7];}else{echo '0/0';} ?>" readonly />
									</td>
									<td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
									<input  class="form-control input-small" type="text" name="nbrdossier2"  value="<?php if($ra2[0]!=null){echo number_format($rv2[7],2,',','.').'/'.$ra2[7];}else{echo '0/0';} ?>" readonly  />
									</td>
									<td>
									<input  class="form-control input-small" type="number" name="nbrdossier"  required="required" min="0" value="<?php if($a!=null){echo $a[7];} ?>"/>
									</td>
									<td>
									<input  class="form-control" type="checkbox" name="chxnbrdossier"   value="1" <?php if($v[6]!=0){echo "checked";} ?>/>
									</td>
									</tr>
								   <tr>
								   <td>
									<font size="2"><?php echo $N15; ?>
								   </td>
								   <td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
                                   <input  class="form-control input-small" type="text" name="nbrdossierovrt1"  value="<?php if($ra1[0]!=null){echo number_format($rv1[8],2,',','.').'/'.$ra1[8];}else{echo '0/0';} ?>" readonly  />
								    </td>
								   <td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
                                   <input  class="form-control input-small" type="text" name="nbrdossierovrt2"   value="<?php if($ra2[0]!=null){echo number_format($rv2[8],2,',','.').'/'.$ra2[8];}else{echo '0/0';} ?>" readonly />
								   </td>
								   <td>
                                   <input  class="form-control input-small" type="number" name="nbrdossierovrt"  required="required" min="0" max="100" value="<?php if($a!=null){echo $a[8];} ?>"/>
								   </td>
								   <td>
								   <input  class="form-control" type="checkbox" name="chxnbrdossierovrt"   value="1" <?php if($v[7]!=0){echo "checked";} ?>/>
								   </td>
								  </tr>
								  <tr>
								  <td>
									<font size="2"><?php echo $N9; ?>
								  </td>
								  <td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
								   <input  class="form-control input-small" type="text" name="nbrva1" value="<?php if($ra1[0]!=null){echo number_format($rv1[9],2,',','.').'/'.$ra1[9];}else{echo '0/0';} ?>" readonly  />
								   </td>
								    <td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
								   <input  class="form-control input-small" type="text" name="nbrva2" value="<?php if($ra2[0]!=null){echo number_format($rv2[9],2,',','.').'/'.$ra2[9];}else{echo '0/0';} ?>" readonly />
								   </td>
								    <td>
								   <input  class="form-control input-small" type="number" name="nbrva" required="required" min="0" value="<?php if($a!=null){echo $a[9];} ?>"/>
								   </td>
								  <td>
									<input  class="form-control" type="checkbox" name="chxnbrva"  value="1" <?php if($v[8]!=0){echo "checked";} ?> />
								  </td>
								  </tr>
							
								  <tr><td colspan=5 ><span class="label label-sm label-info"><?php echo $N10; ?></span></td></tr>
									
									
									
							
							    <tr>
							    <td >
								<font size="2"><?php echo $N11; ?>
								</td>
								<td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
								<input  class="form-control input-small" type="text" name="nbrvaimp1" value="<?php if($ra1[0]!=null){echo number_format($rv1[10],2,',','.').'/'.$ra1[10];}else{echo '0/0';} ?>" readonly />
								</td>
								<td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
								<input  class="form-control input-small" type="text" name="nbrvaimp2" value="<?php if($ra2[0]!=null){echo number_format($rv2[10],2,',','.').'/'.$ra2[10];}else{echo '0/0';} ?>" readonly  />
								</td>
								<td>
								<input  class="form-control input-small" type="number" name="nbrvaimp" value="<?php if($a!=null){echo $a[10];} ?>" required="required" min="0"/>
								</td>
								<td>
								<input  class="form-control" type="checkbox" name="chxnbrvaimp" value="1" <?php if($v[9]!=0){echo "checked";} ?> />
								</td>
							   </tr>
							   <tr>
							   <td >
								<font size="2"> <?php echo $N12; ?>
							   </td>
							   <td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
								<input  class="form-control input-small" type="text" name="nbrre1" value="<?php if($ra1[0]!=null){echo number_format($rv1[11],2,',','.').'/'.$ra1[11];}else{echo '0/0';} ?>" readonly />
							   </td>
							   <td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
								<input  class="form-control input-small" type="text" name="nbrre2" value="<?php if($ra2[0]!=null){echo number_format($rv2[11],2,',','.').'/'.$ra2[11];}else{echo '0/0';} ?>" readonly  />
							   </td>
							   <td>
								<input  class="form-control input-small" type="number" name="nbrre" value="<?php if($a!=null){echo $a[11];} ?>" required="required" min="0"/>
							   </td>
							   <td>
							  <input  class="form-control" type="checkbox" name="chxnbrre" value="1" <?php if($v[10]!=0){echo "checked";} ?> />
							 </td>
							 </tr>
							 <tr>
							 <td>
							<font size="2"><?php echo $N16; ?>
							</td>
							<td <?php  if($tebp1[0]=="NULL"){ echo "style=display:none;";} ?>>
							<input  class="form-control input-small" type="text" name="profit1" value="<?php if($ra1[0]!=null){echo number_format($rv1[12],2,',','.').'/'.$ra1[12];}else{echo '0/0';} ?>" readonly />
							</td>
							<td <?php  if($tebp1[1]=="NULL"){ echo "style=display:none;";} ?>>
							<input  class="form-control input-small" type="text" name="profit2" value="<?php if($ra2[0]!=null){echo number_format($rv2[12],2,',','.').'/'.$ra2[12];}else{echo '0/0';} ?>" readonly />
							</td>
							<td>
							<input  class="form-control input-small" type="number" name="profit" value="<?php if($a!=null){echo $a[12];} ?>" required="required" min="0"/>
							</td>
							<td>
							<input  class="form-control" type="checkbox" name="chxprofit" value="1" <?php if($v[11]!=0){echo "checked";} ?> />
							</td>
    						</tr>
							</table>
									
									
									<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="sauvgarder" ><?php echo $N13; ?></button>
											
										</div>
									 </div>									
                                    </div>
									
									
									
					   </div>
					   </form>
					 </div>
	</div>
	