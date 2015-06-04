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
							<tr > 
   					<th><Font size="1"><?php echo $N3; ?></font></th> 
    				<th><Font size="1"><?php echo $N4; ?></th> 
    				<th><Font size="1"><?php echo $N5; ?></th> 
					<?php 
					$permiss_stat=0;
					if("$permission[1]"=="Administrateur" || "$permission[2]"=='2'){
$permiss_stat=1;
					?>
					
    				<th><Font size="1"><?php echo $N6; ?></th> 
    				<th><Font size="1"><?php echo $N7; ?></th> 
					<th><Font size="1"><?php echo $N8; ?></th> 
					<?php }  ?>
					<th><Font size="1"><?php echo $N25; ?></th> 
				<th ><?php echo $N9; ?></th> 
				</tr> 
							</thead>
							<tbody>
							
						
						

			<?php 
			$i=0;
			$us=$_SESSION['login'];
			while($admin=mysql_fetch_array($req)){
			$etat=0;
		if($admin[4]=="1" or $admin[4]=="$us")
			{
			$etat=1;
		}else{
			$usr=mysql_query("select type_acces from users  where Email='$us'");
			$util=mysql_fetch_array($usr);
			if($util[0]=="Administrateur"){
			$etat=1;
			}}
			if($etat){
			
			$i++;
			$ETC=mysql_query("select * from estimated_costs where Reference='$admin[0]'");
			$est=0;
			while($ETCV=mysql_fetch_array($ETC)){
			$tot=$ETCV[1]*$ETCV[5];
			$est=$est+$tot;
			}
			$com=mysql_query("select * from vuepurchasetotale where DossierCommande='$admin[0]'");
			$tot_com=0;
			while($ad=mysql_fetch_array($com)){
			$devise=mysql_query("select * from purchase where Reference='$ad[0]'");
			$a=mysql_fetch_array($devise);
			$tot_com=$tot_com+($a[9]*$ad[3]);
			}
			$fact=mysql_query("select * from  vueinvoicetotale P ,invoice I  where P.DossierFacture='$admin[0]' And P.facture=I.id_facture and I.draft='1'");
			$tot_fact=0;
			while($fct=mysql_fetch_array($fact)){
			$devisee=mysql_query("select * from invoice where id_facture='$fct[0]'");
			$b=mysql_fetch_array($devisee);
			$tot_fact=$tot_fact+($b[17]*$fct[3]);
			
			}
			$status='';
			$st='';
		
			$PL=$tot_fact-$tot_com;
		if($admin[5]=="fermer"){
		$st='<i class="fa fa-lock"></i>';
			$TTLE="$N24";
			$etat="ouvert";
			if($PL > 0){
			$status="<span class='badge badge-empty badge-primary' title='$N10'> </span>";
			}else{
			$status="<span class='badge badge-empty badge-Default' title='$N11'> </span>";
			
			}
			}else{
			if($tot_fact == 0 && $tot_com==0){
			$status="<span class='badge badge-empty badge-warning' title='$N12'></span>";
			}elseif($PL>0){
			$status="<span class='badge badge-empty badge-success' title='$N13'></span>";
			}else{
			$status="<span class='badge badge-empty badge-danger' title='$N14'></span>";
			}
			$st='<i class="fa fa-unlock-alt"></i>';
				$etat='fermer';
			$TTLE="$N23";
			}
			
			
			$cl=substr ($admin[3], 0,6 );
			$doss=mysql_query("select *  from operation where Ref_doss='$admin[0]'");
			$dosss=mysql_fetch_array($doss);
			?>
			
				<tr > 
   					<td ><?php echo $status ;?></td>
<?php if($permiss_stat==1){ ?>					
    				<td ><a href="MenuUtilisation.php?valeur=detailleDossier.php&Ref=<?php echo $admin[0];?>&type=affiche&titre=<?php echo $N28." ".$admin[0]; ?>&url=<?php echo $url.".".$N27; ?>" > <font size="1"><?php echo $admin[0];?></a></td> 
					<?php }else{ ?>
					<td ><font size="1"><?php echo $admin[0];?></td> 
					
					<?php } ?>
					
					<td><font size="1"><a  title="<?php echo $admin[3]; ?>" href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $admin[3];?>&titre=<?php echo $admin[3];?> <?php echo  $N29 ; ?>&mdc=1&url=<?php echo$urlcli.$N27?>"><?php echo $cl;?></a></td>
					
				<?php if("$permission[1]"=="Administrateur" || "$permission[2]"=='2'){ ?>
					
					<td ><font size="1"><?php echo number_format(-$tot_com,2,',','.')."  ".$monnaie[0];?></FONT></td>
					<td > <font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$monnaie[0];?></FONT></td>
					<td ><font size="1"><?php echo number_format($PL,2,',','.')."  ".$monnaie[0];?></FONT></td>
					<?php } ?>
					<td ><font size="1" color="blue"><?php echo number_format($est,2,',','.')."  ".$monnaie[0];?></td>
    			
				<td><a href="MenuUtilisation.php?valeur=EditDossier.php&Reference=<?php echo $admin[0];?>&titre=<?php echo $N15; ?> <?php echo $admin[0];?>&url=<?php echo $url.'.'.$N19;?>" title="<?php echo $N19; ?>" ><i class="fa fa-pencil-square-o"></i></a>
					<?php if($dosss==NULL){ echo $dosss; ?><a href="MenuUtilisation.php?valeur=gestionDossier.php&NomSoc=<?php echo $admin[0];?>&type=delete" onclick="return confirmLink(this) ;"  title="<?php echo $N17; ?>" >
					<i class="fa fa-trash-o"></i></a>
					<?php }else{ ?> 
					<a href=""  title="<?php echo $N16; ?>" >
					<i class="fa fa-trash-o"></i></a>
					<?php } ?> &nbsp;
					<a href="MenuUtilisation.php?valeur=operation_groupe_dossier.php&type=Fermer&Ref=<?php echo $admin[0]; ?>&etat=<?php echo $etat; ?>" onclick="return confirm('<?php echo $TTLE; ?>') ;" ><?php echo $st; ?></a></td> 
				</tr> 
		
<?php 

}}
?>

					</tbody> 
	</table><span class="item-status">
	<span class='badge badge-empty badge-warning' ></span>
	<?php echo $N12 ; ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<span class='badge badge-empty badge-danger' ></span>
	<?php echo $N14 ; ?>&nbsp;&nbsp;&nbsp;&nbsp;</span>	
<span class="item-status">	
<span class='badge badge-empty badge-success' ></span>
	<?php echo $N13 ; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;</span>	
<span class="item-status">	
<span class='badge badge-empty badge-info' ></span>
	<?php echo $N10 ; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;</span>	
<span class="item-status">	
<span class='badge badge-empty badge-default' ></span>
	<?php echo $N11 ; ?></span>
	
	<br><br>
	</div>
</div>