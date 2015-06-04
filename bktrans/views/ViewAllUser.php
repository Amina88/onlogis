<div class="portlet box blue-hoki">

						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo strtoupper($_GET['titre']);  ?>
							</div>
							<div class="tools">
							</div>
						</div>
                 <div class="portlet-body" >
				  <table class="table table-striped table-bordered table-hover" id="sample_1" >
				<thead>
			
				<tr> 
    				<th><font size="1"><?php echo $N2; ?></font></th> 
    				<th><font size="1"><?php echo $N4; ?></font></th> 
					<th><font size="1"><?php echo $N5; ?></font></th> 
    				 <th><font size="1"><?php echo $N6; ?></font></th> 
    				<th><font size="1"><?php echo $N3; ?></font></th> 
    				<th><font size="1"><?php echo $N7; ?></font></th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php while($admin=mysql_fetch_array($s)){
?>
			
				<tr> 
    				<td><font size="1">
					<?php echo $admin[0] ;?>
					</td> 
    				<td><font size="1"><?php echo $admin[3] ;?></td> 
					<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo $admin[5];?></td> 
    				<td><a href="MenuUtilisation.php?valeur=updateUser.php&email=<?php echo $admin[0];?>&titre=<?php echo $N8; ?>&url=<?php echo $url2.$N9; ?>" title="<?php echo $N9; ?>" ><i class="fa fa-pencil-square-o"></i></a>&nbsp;
					<a href="MenuUtilisation.php?valeur=DeleteUser.php&email=<?php echo $admin[0];?>&type=delete&url=<?php echo $url; ?>" onclick="return confirmLink(this) ;"  title="<?php echo $N10; ?>"><i class="fa fa-trash-o"></i></a>&nbsp;
					<a href="MenuUtilisation.php?valeur=changerPassword.php&Email=<?php echo $admin[0];?>&titre=<?php echo $N11; ?>&url=<?php echo $url2.$N11; ?>" title="<?php echo $N11; ?>" ><i class="fa fa-lock"></i></a>
				<?php if($admin[2]!="Administrateur"){
				
				
				?>
				<a href="MenuUtilisation.php?valeur=Permission.php&email=<?php echo $admin[0];?>&titre=<?php echo $N13; ?>:<?php echo $admin[3];?>&url=<?php echo $_GET['url'].'.'.$N13; ?>" title="<?php echo $N13; ?>" ><i class="fa fa-key"></i></a>	
				<?php }else{ ?>	
				<i class="fa fa-key"></i>
				<?php } ?>	
				</td>
				</tr> 
				
			
			
<?php }
?>        </tbody> 
			 </table>
			  
			 <br>
			<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
                    <a href="MenuUtilisation.php?valeur=AjouterUser.php&titre=<?php echo $N12; ?>&url=<?php echo $url2.$N12; ?>" target="_parent">
					
											<button  class="btn blue-hoki"><?php echo $N12; ?></button>
											
										
									</a>
									</div>
									 </div>									
                                    </div>
                    
			<br />
			 </div>
			</div>