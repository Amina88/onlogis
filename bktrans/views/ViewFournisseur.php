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
    				<th><font size="1"><?php echo $N2; ?></th> 
    				<th><font size="1"><?php echo $N3; ?></th> 
					<th><font size="1"><?php echo $N4; ?></th> 
    				 <th><font size="1"><?php echo $N5; ?></th> 
    				 <th><font size="1"><?php echo $N14; ?></th> 
    				<th><font size="1"><?php echo $N6; ?></th> 
			</tr> 
		</thead> 
		
			<tbody> 
				<?php
			
				$s=mysql_query("select * from supplier   ");
				?>

	 
			
		
			<?php while($admin=mysql_fetch_array($s)){
			$texte = str_replace('&','%26',$admin[0]);

?>
				<tr> 
				
   					
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $texte;?>&titre=<?php echo $texte.' '; ?><?php echo $N16; ?>&url=<?php echo  $url.".".$N15 ; ?>&mdf=1" title="<?php echo $N15; ?>"><?php echo $admin[0];?></a></td> 
    				<td><font size="1"><?php echo $admin[3]." ".$admin[2]." ".$admin[4];?></td> 
					<td><font size="1"><?php echo $admin[5];?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo $admin[18];?></td> 
    				<td>
					<a href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $texte; ?>&titre=<?php echo $N10; ?>&url=<?php echo $url2."Edit";?>" title="Edit" ><i class="fa fa-pencil-square-o"></i></a>
					<a href="MenuUtilisation.php?valeur=Statement.php&NomSOC=<?php echo $texte;?>&titre=<?php echo $N13; ?>: <?php echo $texte; ?>&url=<?php echo  $url2."Statement" ; ?>" title="Statement of Account"><i class="fa fa-list-alt"></i></a>
					<a href="MenuUtilisation.php?valeur=deleteFournisseur.php&NomSoc=<?php echo $texte;?>&titre=<?php echo $titre; ?>&url=<?php echo $url;?>" onclick="return confirmLink(this) ;"  title="<?php echo $N7; ?>"><i class="fa fa-trash-o"></i></a>&nbsp;
					<a href="MenuUtilisation.php?valeur=CommandeFournisseur.php&Nom_Soc=<?php echo $texte;?>&url=<?php echo $urlcom;?>&titre=<?php echo $N9." ".$texte;?>" title="<?php echo $N9; ?><?php echo $admin[0];?>" ><i class="fa fa-file-text"></i>
					</a>
					</td> 
				</tr> 
				
			
			
<?php }
?>
			</tbody>
			</table>
			 </div>
            </div>