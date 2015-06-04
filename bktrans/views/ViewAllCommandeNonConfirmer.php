
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
   					 
    				<th><font size="1"><?php echo $N4; ?></th>
					<th><font size="1"><?php echo $N5; ?></th>
					<th><font size="1"><?php echo $N6; ?></th> 
    				<th><font size="1"><?php echo $N1; ?></th> 
    				<th><font size="1"><?php echo $N8; ?></th>
					<th><font size="1"><?php echo $N9; ?></th>
					<th><font size="1"><?php echo $N14; ?></th>
    				<th><font size="1"><?php echo $N12; ?></th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php 
			$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);

			while($admin=mysql_fetch_array($s)){
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3];
			   $FR=substr ($admin[1], 0,8 );
			
?>		 
				<tr > 
   					 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $N17; ?><?php echo " ".$admin[0];?>&url=<?php echo $url.$N18;?> "><?php echo $admin[0];?></a></font></td> 
					
					<td><font size="1"><a  title="<?php echo $admin[1]; ?>" href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $admin[1];?>&mdf=0&titre=<?php echo $admin[1]; ?>&url=<?php echo$url3?>"><?php echo  $FR; ?></font></td> 
    				
					<td><font size="1"><?php echo $admin[2];?></font></td> 
					<td>
					<?php if($admin[10]=="0"){?>
					<span class="label label-sm label-info"><?php echo $N19;?></span>
					<?php }else{?>
					<span class="label label-sm label-warning"><?php echo $N20;?></span>
					<?php }?>
					</td>
					<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo $admin[5];?></font></td> 
					<td><font size="1"><?php echo number_format($tot1,2,',','.')."&nbsp;".$tot[4]; ?></font></td> 
					<td><a href="finalcom.php?reference=<?php echo $admin[0];?>&four=<?php echo $admin[1];?>" target="_link" title="PDF"><i class="fa fa-file-pdf-o"></i></a>
					<a href="MenuUtilisation.php?valeur=ModifCommande.php&reference=<?php echo $admin[0];?>&action=modifier&titre=<?php echo $N15; ?><?php echo " ".$admin[0];?>&url=<?php echo $url.$N16;?>" title="<?php echo $N16; ?>" ><i class="fa fa-pencil-square-o"></i>
					</a>
					</td> 
				</tr> 				
<?php }?>

  </tbody> 
			 </table>
			</div>
			</div>