		<div name='mondiv1' id='mondiv1' >
<form  method="POST" action="#">
<table>
<th ><font color="#0babf6" ><?php echo $N7; ?></font><br></th>
<tr ><td><font color="#0babf6" > <br></font></td></tr>
<tr>
<td ><h5><?php echo $N8; ?><font color="red">  *</font></h5></td>
<td><input type="text"  onclick="ds_sh(this);" name="dateD" value="" required="required"></td>
</tr>
<tr>
<td ><h5><?php echo $N9; ?><font color="red">  *</font></h5></td>
<td><input type="text"  onclick="ds_sh(this);" name="dateF" value="" required="required"></td>
</tr>

</table>

				
<input type="submit" value="<?php echo $N10; ?>" name="SauvgarderPRD" class="alt_btn">


</form>
</div>

		<?php  
		}else{ ?>
		

				<?php 
				include ("Connection.php");
				$s=mysql_query("select * from  financial_period ");

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
   					<th></th> 
    				<th><font size="1"><?php echo $N1; ?></font></th> 
    				<th><font size="1"><?php echo $N2; ?></font></th> 
					<th><font size="1"><?php echo $N3; ?></font></th> 
    				 <th><font size="1"><?php echo $N4; ?></font></th> 
    				 <th><font size="1"><?php echo $N5; ?></font></th> 
    		
				</tr> 
			</thead> 
			<tbody> 
			<?php 
			$tst="";
			while($admin=mysql_fetch_array($s)){
			
			if($admin[1]==0){
			$tst='<i class="fa fa-lock"></i>';
			}else{
			$tst='<i class="fa fa-unlock-alt"></i>';
			}
?>
			
				<tr> 
   					<td><a href="javascript:PetiteFenetre()" ><input type="radio" <?php if($admin[1]==1){ echo "checked ";} ?> id="id" name="id" onclick="find_select(this)"  value='<?php echo $admin[0];?>'></a></td> 
    				<td><font size="1"><?php echo $admin[0];?></td>  
    				<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[3];?></td> 
					<td><a href="#"  >
					<?php echo $tst; ?></a></td>
    				<td><a href="MenuUtilisation.php?valeur=updatePeriode.php&id=<?php echo $admin[0];?>&titre=<?php echo $N12; ?>: <?php echo $admin[0];?>&url=<?php echo $url2.$N19; ?> " title="<?php echo $N14; ?>" ><i class="fa fa-pencil-square-o"></i>
					</a><a href="MenuUtilisation.php?valeur=DeletePeriode.php&id=<?php echo $admin[0];?>&type=delete&url=<?php echo $url;?>&titre=<?php echo $titre;?>"  onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>">
					<i class="fa fa-trash-o"></i></a></td> 
				</tr> 
				
			
			
<?php }
?>
			</tbody>  </table><br>
			 
			 
			

			<br/>
			
				   
			 <table><tr> <form action="#" method="POST"><input type="hidden" value="" id="Text_id" name="id" ><td> 
          
			 	<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn blue-hoki" name="UPDATE" value="<?php echo $N12; ?>"><?php echo $N12; ?></button>
											
										</div>
									 </div>									
                                    </div>
											 </td></form><td>&nbsp&nbsp</td><td>
									<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
										 <a href="MenuUtilisation.php?valeur=AjouterPeriode.php&titre=<?php echo $N7; ?>&url=<?php echo $url2.$N7; ?>" target="_parent">
									
											<button type="submit" class="btn blue-hoki" name="AjouterP" value="<?php echo $N7; ?>"><?php echo $N7; ?></button>
										</a>	
										</div>
									 </div>									
                                    </div>
									</td></tr></table>
	
	
            </div>
			</div>