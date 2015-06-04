				
				<?php
				$s=mysql_query("select * from location ");
				?>
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
   					<th><font size="1">#</</th>
					<th><font size="1"><?php echo $N6; ?></th> 
					<th><font size="1"><?php echo $N8; ?></th> 
    				<th><font size="1"><?php echo $N7; ?></th> 
					 <th><font size="1"><?php echo $N17; ?></th> 
					 <th><font size="1"><?php echo $N18; ?></th> 
					 <th><font size="1"><?php echo $N11; ?></th> 
					 <th><font size="1"><?php echo $N1; ?></th> 
					 
    				<th><font size="1"><?php echo $N12; ?></th> 
				  </tr> 
			  </thead> 
			<tbody> 
			<?php 

			while($admin=mysql_fetch_array($s)){
			if($admin[7]==1){
		    $etat='success';
			$msgl=$N14;
			}else{
			$etat='danger';
			$msgl=$N19;
			}
			if($admin['facturation']=="oui"){
		    $etat1='success';
			$fct=$N2;
			}elseif($admin['facturation']=="non"){
			$etat1='danger';
			$fct=$N3;
			}
			else{
			$etat1='warning';
			$fct=$N9;
			}
			$cl=substr ($admin[1], 0,6 );
		
?>
			
				<tr > 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=UpdateLocation.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $admin[0]." ".$N24; ?>&url=<?php echo $url2.$N26;?>&mdl=1" title="<?php echo $N26; ?>"><?php echo $admin[0];?></a></td> 
					<td><font size="1"><a  title="<?php echo $admin[1]; ?>" href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $admin[1];?>&titre=<?php echo $admin[1];?> <?php echo  $N24 ; ?>&mdc=1&url=<?php echo$urlcli.$N26?>"><?php echo $cl;?></a></td> 
					<td><font size="1"><a href="MenuUtilisation.php?valeur=detailleDossier.php&Ref=<?php echo $admin[2] ; ?>&type=affiche&titre= <?php echo $admin[2] ; ?>  <?php echo  $N24 ; ?>&url=<?php echo $urld.".".$N26; ?>"><?php echo $admin[2];?></a></td> 
    				<td><font size="1"><?php echo $admin[5];?></td> 
					<td><font size="1"><?php echo $admin[3];?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
					
					<td><font size="1"><span class="label label-sm label-<?php echo $etat;?>">
					<?php echo $msgl;?></span></td> 
					<td><font size="1"><span class="label label-sm label-<?php echo $etat1;?>">
					<?php echo $fct;?></span></td> 
					<td><a href="MenuUtilisation.php?valeur=UpdateLocation.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $N23." ".$admin[0]; ?>&url=<?php echo $url2.$N15;?>" title="<?php echo $N15; ?>"><i class="fa fa-pencil-square-o"></i></a><a href="MenuUtilisation.php?valeur=deleteLocation.php&NomMat=<?php echo $admin[0];?>&url=<?php echo $url;?>&titre=<?php echo $_GET['titre'];?>" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>"><i class="fa fa-trash-o"></i></a></td> 
				</tr> 
				
			
			
<?php }
?>
			 </tbody> 
			 </table>
           <div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
			<a href="MenuUtilisation.php?valeur=AjouterLocation.php&url=<?php echo $url.'.'.$N20; ?>&titre=<?php echo $N20; ?>">
											<button  class="btn blue-hoki"  ><?php echo $N20; ?></button>
											
										</a>
										</div>
									 </div>									
                                    </div>
			 </div>
			</div>