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
    				        
    				         <th><font size="1"><?php echo $N21; ?></font></th> 
					         <th><font size="1"><?php echo $N11; ?></font></th> 
					         <th><font size="1"><?php echo $N22; ?></font></th> 
					         <th><font size="1"><?php echo $N34; ?></font></th>
							  <th><font size="1"><?php echo $N23; ?></font></th> 
							 <th><font size="1"><?php echo $N13; ?></font></th> 
				            </tr> 
			               </thead>
					       <tbody> 
						          <?php while($admin=mysql_fetch_array($s)){?>
				              <tr> 
    				       
    				          <td><font size="1"><?php echo $admin[1] ;?></td> 
    				          <td><font size="1"><?php echo $admin[2] ;?></td> 
    				          <td><font size="1"><?php echo $admin[3] ;?></td> 
    				          <td><font size="1"><?php echo $admin[4] ;?></td> 
    				          <td><font size="1"><?php echo $admin[5] ;?></td> 
					          <td><a href="MenuUtilisation.php?valeur=updateFrais.php&NT=<?php echo $admin[0];?>&titre=<?php echo $N35; ?>&url=<?php echo $url.$N15.$N37;?>" title="<?php echo $N15; ?>" ><i class="fa fa-pencil-square-o"></i></a>
							  <a href="MenuUtilisation.php?valeur=DeleteFrais.php&NT=<?php echo $admin[0];?>&type=delete&url=<?php echo $url2;?>" onclick="return confirmLink(this) ;"  title="<?php echo $N16; ?>"><i class="fa fa-trash-o"></i></a></td> 
				              </tr> 
                             <?php } ?>
				         </tbody> 	
				      </table>
					   <div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
					  <a href="MenuUtilisation.php?valeur=Ajouterfrais.php&titre=<?php echo $N24; ?>&url=<?php echo $url.$N25;?>" target="_parent">
				            
											<button  class="btn blue-hoki" Name="Sauvgarder"  ><?php echo $N25; ?></button>
											
										
					  </a>
					  </div>
									 </div>									
                                    </div>
				  </div>
				 </div>