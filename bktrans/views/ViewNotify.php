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
    				<th><font size="1"><?php echo $N2; ?></h6></th> 
    				<th><font size="1"><?php echo $N3; ?> </h6></th> 
					<th><font size="1"><?php echo $N4; ?></h6></th>  
    				<th><font size="1"><?php echo $N5; ?></h6></th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php 
			while($admin1=mysql_fetch_array($s1)){
            $s=mysql_query("select * from notification where objet='$admin1[0]' ");
			 while($admin=mysql_fetch_array($s)){
			/*
			<a href="MenuUtilisation.php?valeur=detaillenotif.php&titre=detaille&url=<?php echo $url.".".$N6;?>&id=<?php echo $admin[4];?>"><?php echo $N6; ?></a> */
?>
			
				<tr> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
					<td><font size="1"><?php echo $admin[1];?></td> 
					<td><font size="1"><?php echo $admin[2];?></td> 
    				<td><a href="suppnotif.php?id=<?php echo $admin[4];?>&titre=<?php echo $titre; ?>&url=<?php echo $url; ?>" onclick="return confirmLink(this) ;"  title="<?php echo $N7; ?>">
					<i class="fa fa-trash-o"></i></a></td> 
				</tr> 
				
		
			
<?php }
}
?>
	</tbody> 
			 </table>
		
            </div>
			</div>
