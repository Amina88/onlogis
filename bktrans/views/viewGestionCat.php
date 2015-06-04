<div class="portlet-body">
			
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											<?php echo $N1; ?> </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											<?php echo $N2; ?></a>
										</li>	
									</ul>
									</div>
								
										<div class="tab-content no-space">
										  <div class="tab-pane active" id="tab_general">
											<div class="portlet box blue-hoki">

						  <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo strtoupper($_GET['titre']);  ?>
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body" >
						
						<?php

include ("Connection.php");
$tt=$_GET['titre'];
$request=mysql_query("select * from categorie");
$group=mysql_query("SELECT * FROM `groupe_account` ORDER BY `catagorie` ASC");

?>
<form  method ="get" action="MenuUtilisation.php">
<input type="hidden" name="valeur" value="Gestion_Categarie.php">
		<table class="table table-striped table-bordered table-hover" id="sample_1" >
			<thead> 
				<tr> 
				     <th ><font size="1">#</th> 
   					<th ><font size="1"><?php echo $N3;  ?></th> 
    				<th><font size="1"><?php echo $N4;  ?></th> 
    				 <th title="<?php echo $N18;  ?>"><font size="1"><?php echo $N5;  ?></font></th> 
					<th title="<?php echo $N19;  ?>"><font size="1"><?php echo $N8;  ?></font></th> 
					<th title="<?php echo $N20;  ?>"><font size="1"><?php echo $N9;  ?></font></th> 
    				
    				<th><font size="1"><?php echo $N10;  ?></font></th> 
				</tr> 
			</thead> 
		<tbody>



			<?php 
			$j=0;
			while($admina=mysql_fetch_array($request)){
			$j++;
			$nom="NOM".$j;
			$_SESSION["$nom"]=$admina[0];
?>
	 
				<tr> 
				<td><font size="1"><?php echo $admina[0];?></td> 
					<td><font size="1"><?php echo $admina[1];?></td> 
						<td><font size="1"><?php echo $admina[2];?></td> 
							<td><input  name="a<?php echo $j;?>" value="1" type="checkbox" <?php if($admina[3]=="111" ||$admina[3]=="110" ||$admina[3]=="101" ||$admina[3]=="100" ){ echo "checked";}?> ></td> 
					<td><input name="b<?php echo $j;?>" type="checkbox" value="1" <?php if($admina[3]=="011" || $admina[3]=="010" ||$admina[3]=="111" ||$admina[3]=="110" ){ echo "checked";} ?>  ></td> 
    				<td><input name="c<?php echo $j;?>" type="checkbox" value="1" <?php if($admina[3]=="001" ||$admina[3]=="011" ||$admina[3]=="101" ||$admina[3]=="111" ){ echo "checked";}?>  ></td> 
    				<td><a href="MenuUtilisation.php?valeur=Gestion_Categarie.php&id=<?php echo $admina[0];?>&titre=<?php echo $_GET['titre'];?>&url2=<?php echo $url;?>" onclick="return confirmLink(this) "  title="<?php echo $N11;  ?>">
					<i class="fa fa-trash-o"></i></a></td> 
				</tr> 

			
			
<?php }
?>
 
             
			</tbody>
			</table>
			<input type="hidden"  value="<?php echo $_GET['titre']; ?>" name="titre">
			<input type="hidden"  value="<?php echo $url; ?>" name="url2">
			<input type="hidden"  value="<?php echo $N25; ?>" name="echec">
			<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn blue-hoki" value="<?php echo $N12; ?>"><?php echo $N12; ?></button>
											
										</div>
									 </div>									
                                    </div>
		  
			</form>
</div></div></div>

<div class="tab-pane " id="tab_meta">
										  
										   <form  method ="get" action="MenuUtilisation.php" id="form_sample_2" class="form-horizontal" method="get">
									
<input type="hidden" name="valeur" value="Gestion_Categarie.php">

										<div class="portlet box yellow">
											<div class="portlet-title">
							                    <div class="caption">
								               <i class="fa fa-gift"></i><?php echo $N2; ?>
							                   </div>
							               <div class="tools">
								           <a href="javascript:;" class="collapse">
								           </a>
								
								            
							                </div>
						                  </div>
										  
										 
										  <div class="portlet-body form">
										  <div class="alert alert-danger display-hide">
										  <button class="close" data-close="alert"></button>
										  <?php echo $error_form; ?>
									     </div>
										  <br>
                                     <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N14; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="nom" value="" required="required"/>
											</div>
											
										</div>
									</div> 
									  <div class="form-group">
										<label class="control-label col-md-3"><?php echo $N15; ?><span class="required">
										 *</span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input  class="form-control" type="text" name="Code" value="" required="required"/>
											</div>
											
										</div>
									</div>
									
									<table><tr>
									<td><input type="radio" class="form-control" value="100" name="a"></td><td><?php echo $N18;  ?></td></tr>
									<tr>
									<tr>
									<td><input type="radio" class="form-control"  value="011"name="a"></td><td><?php echo $N20;  ?></td></tr></table>
								    <input type="hidden"   value="<?php echo $_GET['titre']; ?>" name="titre" >
									<input type="hidden"  value="<?php echo $url; ?>" name="url2" >
									<div class="form-actions">
									  <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="compte" ><?php echo $N24; ?></button>
											
										</div>
									 </div>									
                                    </div>
									
									</div>
								
									</div>	</form>
									</div>
									</div>
									</div>
									
									
									





