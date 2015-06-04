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
    				<th><font size="1"><?php echo $N9; ?></th>
    				<th><font size="1"><?php echo $N8; ?></th>
					<th><font size="1"><?php echo $N7; ?></th>
    				<th><font size="1"><?php echo $N10; ?></th>
    				<th><font size="1"><?php echo $N31; ?></th> 
				</tr> 
			</thead> 
			<tbody> 

			<?php


			$date=date("Y-m-d");
			 $Auj = explode('-',$date);
			while($admin=mysql_fetch_array($s)){
			$cl=substr ($admin[5], 0,6 );
			 $DateF = explode('/',$admin[7]);
			 if(!isset($DateF[1])){
			 $DateF = explode('-',$admin[7]);
			 
			 }
			 $val_echue=0;
			if($Auj[0]==$DateF[0]){
			if($Auj[1]==$DateF[1]){
			if($Auj[2]==$DateF[2]){
			$val_echue=0;
			}elseif($Auj[2]<$DateF[2]){$val_echue=0;}else{$val_echue=$Auj[2]-$DateF[2];}
		
			}
			elseif($Auj[1]<$DateF[1]){$val_echue=0;}else{
			$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$val_echue=$J+$M;}
			}elseif($Auj[0]<$DateF[0]){
			
			$val_echue=0;}else{
			$J=$Auj[2]-$DateF[2];
			$M=($Auj[1]-$DateF[1])*30;
			$ANN=($Auj[0]-$DateF[0])*12*30;$val_echue=$J+$M+$ANN;}
			
			$factur=mysql_query("select * from invoice where id_facture='$admin[3]'");
			$facture=mysql_fetch_array($factur);
$el=mysql_query("select * from element_invoice where Reference='$facture[3]'");
 $tot=0.00;
  $client = str_replace('&','%26',$admin[5]);
  $client = str_replace(' ','%20',$client);
while($element=mysql_fetch_array($el)){
$prix=$element[2]*$element[3];
$devis=$prix*$element[6];
$TVA=$devis*($element[4]*0.01);
$t=$devis+$TVA;
$tot=$tot+$t;
}
$tot=$tot;

         ?>
			 
				<tr> 
   					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $admin[3];?>&titre=<?php echo $N12; ?> <?php echo $admin[3];?>&url=<?php echo $url2.$N30;?>"><?php echo $admin[3];?></a></font></td> 
    				<td><font size="1"><a  title="<?php echo $admin[5]; ?>" href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $client;?>&mdc=1 &titre=<?php echo $N29." ".$admin[2]; ?>&url=<?php echo$urlcli.$N16?>"><?php echo $cl;?></a></font></td> 
					<td><font size="1"><?php echo $admin[10];?></font></td>				
					<td><font size="1"><?php echo $admin[7];?></font></td>
				<td>
				
				<?php 
				if($admin[25]==1){
				if($admin[11]==1){?>
				<span class="label label-sm label-success"><?php echo $N14; ?></span>
				<?php }elseif($admin[11]==-1){ ?>
				<span class="label label-sm label-warning"><?php echo $N22; ?></span> 
				<?php }elseif($admin[11]==-2){ ?>
				<span class="label label-sm label-danger"><?php echo $N23; ?></span> 
				<?php }else{
				?>
				<span class="label label-sm label-info"><?php echo $N11; ?></span> 
				<?php } }else{ 
				?>
				<span class="label label-sm label-warning"><?php echo $N26; ?></span> 
				
				<?php  
				}
				?>
				</td> 	
				<td><font size="1"><?php echo number_format($tot,2,',','.')."&nbsp;".$admin[9];?></font></td> 
				<td><font size="1"><?php if($admin[11]!=1){ echo $val_echue; mysql_query("update invoice set Jours_echue='$val_echue' where id_facture='$admin[3]'");}else{ echo $admin[15]; }?></font></td> 
    				
					<td>
					<?php if("$permission[1]"=="Administrateur" || "$permission[35]"=='35') {  ?>
					<a href="MenuUtilisation.php?valeur=ModifierFacture.php&id_Facture=<?php echo $admin[3];?>&titre=<?php echo $N28.$admin[3];?>&url=<?php echo $url2.$N16;?>" title="<?php echo $N16; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<?php }
if("$permission[1]"=="Administrateur" || "$permission[37]"=='37') {
					if($admin[18]!=0){
					?>
					<a href=""   title="<?php echo $N17; ?>">
					<i class="fa fa-trash-o"></i></a>
				<?php
					}else{
					?>
					<a href="MenuUtilisation.php?valeur=Delete_Facture.php&id_facture=<?php echo $admin[3];?> &url=<?php echo $url;?>&titre=<?php echo $titre;?>" onclick="return confirmLink(this) ;"  title="<?php echo $N17; ?>">
					<i class="fa fa-trash-o"></i></a>
					<?php }} ?>
				 <a href="finalfac.php?Ref=<?php echo $admin[3];?>&client=<?php echo $client;?>" target="_blank" title="<?php echo $N20; ?> <?php echo $admin[3];?>" ><i class="fa fa-file-pdf-o"></i></a>
				 <a href="finalfac.php?Ref=<?php echo $admin[3];?>&client=<?php echo $client;?>&titre=<?php echo $tt_snd ?>&url=<?php echo $_GET['url'].'.'.$tt_snd ?>&charger=send" target="_blank" title="<?php echo $tt_snd ?>"  ><i class="icon-envelope-open"></i></a>
				<a href="MenuUtilisation.php?valeur=duppliquer_operation.php&fctcopie=true&id=<?php echo $admin[3];?>&titre=<?php echo $N28;?>&url=<?php echo $url2.$N16;?>"><i class="fa fa-copy" onclick="return confirm('<?php echo $N96; ?>') ;"></i></a>
					</td> 			</tr> 
				
			
<?php }
?>
			 <tbody></table>
	 </div>
 </div>