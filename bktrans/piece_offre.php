<?php 
 $elm=mysql_query("select * from piece_offre where id_operation='$id_offre'");
 $i=0;
 $j=0;
 while($elmnt=mysql_fetch_array($elm)){ 
$i++;

$pt=$elmnt[1]*3;
$dim=explode("x",$elmnt[2]);
if(!isset($dim[1])){
$dim=explode("*",$elmnt[2]);

}
?><tr>

<td>
<input type="hidden" name="<?php echo $i; ?>" value="<?php echo $elmnt[0]; ?>"  >
<div class="col-md-14">
<select class="form-control select2me" name="Objet<?php echo $j; ?>"   id="Objet<?php echo $j; ?>"  onchange="loadinf('<?php echo $j; ?>');">
<option value="piece" <?php if($elmnt[7]=="piece") echo "selected" ;?>>piece</option>
<?php
 if($offre[15]!="Air Export" && $offre[15]!="Air Import" ){?>
<option value="Conteneur 20 Dry" <?php if($elmnt[7]=="Conteneur 20 Dry") echo "selected" ;?>>Conteneur 20'Dry</option>
<option value="Conteneur 40 Dry" <?php if($elmnt[7]=="Conteneur 40 Dry") echo "selected" ;?>>Conteneur 40' Dry</option>
<option value="Conteneur 45 High Cube Dry" <?php if($elmnt[7]=="Conteneur 45 High Cube Dry") echo "selected" ;?>>Conteneur 45' High Cube Dry </option>
<option value="Conteneur 20 Reefer" <?php if($elmnt[7]=="Conteneur 20 Reefer") echo "selected" ;?>>Conteneur 20' Reefer</option>
<option value="Conteneur 40 Reefer" <?php if($elmnt[7]=="Conteneur 40 Reefer") echo "selected" ;?>>Conteneur 40' Reefer </option>
<option value="Conteneur 20 Open Top" <?php if($elmnt[7]=="Conteneur 20 Open Top") echo "selected" ;?>>Conteneur 20' Open Top </option>
<option value="Conteneur 40 Open Top" <?php if($elmnt[7]=="Conteneur 40 Open Top") echo "selected" ;?>>Conteneur 40' Open Top </option>
<?php } ?></select>

</div>

</td>
<td ><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="dim1<?php echo $j; ?>"  name="dim1<?php echo $j; ?>"  min="0"  value="<?php echo $dim[0]; ?>" required="required"  placeholder="Long" />
											</div>
										</div><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="dim2<?php echo $j; ?>"  name="dim2<?php echo $j; ?>"  min="0" value="<?php echo $dim[1]; ?>" placeholder="Larg" required="required"/>
											</div>
										</div><div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control"  id="dim3<?php echo $j; ?>"  name="dim3<?php echo $j; ?>" min="0"  value="<?php echo $dim[2]; ?>" placeholder="Hot" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-15">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="QT<?php echo $j; ?>"  name="QT<?php echo $j; ?>" min="0"  value="<?php echo $elmnt[3]; ?>" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="PT<?php echo $j; ?>"  name="PT<?php echo $j; ?>"  min="0"  value="<?php echo $elmnt[1]; ?>" required="required"/>
											</div>
										</div></td><td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
											
												<input type="number" class="form-control" id="TT<?php echo $j; ?>"  name="TT<?php echo $j; ?>"  value="<?php echo $elmnt[3]*$elmnt[1]; ?>" min="0" required="required"/>
											</div>
										</div></td>
										<td>
										<div class="col-md-18">
											<div class="input-icon right">
											<i class="fa"></i>
												<input type="text" class="form-control" name="Num<?php echo $j; ?>" id="Num<?php echo $j; ?>" value="<?php echo $elmnt[5]; ?>"   />
											</div>
										</div></td><td>
										<div class="col-md-18">
										<div class="input-icon right">
											<i class="fa"></i>
												<input type="number" class="form-control" name="CP<?php echo $j; ?>"  id="CP<?php echo $j; ?>"  min="0" onclick="calculpch('<?php echo $j; ?>');"  value="<?php echo $elmnt[6]; ?>" />
											</div>
										</div></td>
										</tr>
										
										<?php $j++; } ?>