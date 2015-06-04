
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recAllOffre.php';
     if($etat){
?>

<?php

include ("Connection.php");

$s=mysql_query("select * from offre ");
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);
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
    				<th><font size="1"><?php echo $N4; ?></th> 
    				<th><font size="1"><?php echo $N5; ?></th> 
					<th><font size="1"><?php echo $N6; ?></th> 
    				<th><font size="1"><?php echo $N9; ?></th>
    				<th><font size="1"><?php echo $N8; ?></th>
					<th><font size="1"><?php echo $N7; ?></th>
    				 <th><font size="1"><?php echo $N1; ?></th>
    				<th><font size="1"><?php echo $N11; ?></th> 
				</tr> 
			</thead> 
			<tbody> 
			<?php $date=date("d/m/Y");
	
			 $Auj = explode('-',$date);
			while($admin=mysql_fetch_array($s)){
			$cl=substr ($admin[2], 0,6 );
			$factur=mysql_query("select * from offre where id_offre='$admin[1]'");
			$facture=mysql_fetch_array($factur);
$el=mysql_query("select * from element_offre where Reference='$facture[1]'");
 $tot=0.00;
while($element=mysql_fetch_array($el)){
$prix=$element[2]*$element[3];

$devis=$prix*$element[6];
$TVA=$devis*($element[4]*0.01);
$t=$devis+$TVA;
$tot=$tot+$t;
}
$tot=$tot;
  $client = str_replace('&','%26',$admin[2]);
         ?>
			
			
		<tr> 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsOffre.php&Ref=<?php echo $admin[1];?>&titre=<?php echo $N12; ?> <?php echo $admin[1];?>&url=<?php echo $url2.$N30;?>"><?php echo $admin[1];?></a></font></td> 
			
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $admin[2];?>&titre=<?php echo $N29." ".$admin[2]; ?>&url=<?php echo$urlcli.$N28?>&mdc=1"title="<?php echo $admin[2];?>"><?php echo $cl; ?></a></font></td>
					<td><font size="1"><?php echo $admin[6];?></font></td>				
					<td><font size="1"><?php echo $admin[3];?></font></td>
    				<td>
					<?php if($admin[7]==1){
					
					$type=$admin[15];
if($type=='LC'){
$link="MenuUtilisation.php?valeur=UpdateLocation.php&NomMat=$admin[11]&titre=$admin[11]&url=$urlM&mdl=1";					
echo "<a href=$link >";	
}elseif($type=='LS'){
$link="MenuUtilisation.php?valeur=UpdateLogisticService.php&NomMat=$admin[11]&titre=$admin[11]&url=$urlM1&mdl=1";					
	echo "<a href=$link >";						
}elseif($type=='MG'){
$link="MenuUtilisation.php?valeur=UpdateMagasinage.php&NomMat=$admin[11]&titre=$admin[11]&url=$urlM2&mdl=1";					
	echo "<a href=$link >";					
}else{
			$type=explode("EXP","$admin[11]");
					$type_op=explode(" ","$admin[15]");
					if(isset($type[1])){
					?>
					<a href="MenuUtilisation.php?valeur=DetailOperationExport.php&page=<?php echo $type_op[0];?>&titre=<?php echo $admin[15].' ('.$admin[11].','.$admin[2].')';?> &type_operation=<?php echo $type_op[0]; ?> Export&id=<?php echo $admin[11]; ?>&url=<?php echo $urlop.'.'.$admin[11]; ?>" >
					<?php }else{ ?>
					<a href="MenuUtilisation.php?valeur=detailleoperation.php&tb=import&type_operation=<?php echo $type_op[0];?>&page=<?php echo $type_op[0];?>&id=<?php echo $admin[11]; ?>&titre=<?php echo $admin[15].' ('.$admin[11].','.$admin[2].')';?>&url=<?php echo $urlop.'.'.$admin[11]; ?>" >
					<?php }} ?>
					<span class="label label-sm label-success"><?php echo $admin[11]; ?></span></a>
					<?php }else{ ?>
					<a href="MenuUtilisation.php?valeur=ConfirmerOffre.php&ConfirmerOffre=true&titre=<?php echo $_GET['titre']; ?>&url=<?php echo $_GET['url'];?>&id_offre=<?php echo $admin[1]; ?>&type=<?php echo $admin[15]; ?>" ><span class="label label-sm label-danger"><?php echo $N15; ?></span> </a><?php } ?></td>
					<td><font size="1"><?php echo number_format($tot,2,',','.').' '. $admin[5];?></font></td> 
    				 <td>
					 <?php if($admin[10]!='' ){?><font size="1"><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $admin[10];?>&titre=<?php echo $N30; ?>&nbsp; <?php echo $admin[10];?>&url=<?php echo $url4.'.'.$N30;;?>"><?php echo $admin[10]; ?></a></font><?php }elseif($admin[7]=='1'){ ?>
					<a href="MenuUtilisation.php?valeur=ModifierOffre.php&id_Facture=<?php echo $admin[1];?>&id=<?php echo $admin[11];?>&titre=<?php echo $N18." ".$admin[1]; ?>&url=<?php echo $url2.$N18;?>" >
						<span class="label label-sm label-danger"><?php echo $N2; ?></span> <?php }else{} ?>
						
    				</td>
    				<td><?php if($admin[10]==""){?><a href="MenuUtilisation.php?valeur=Editoffre.php&id_Facture=<?php echo $admin[1];?>&titre=<?php echo $N27." ".$admin[1]; ?>&url=<?php echo $url2.$N28;?>" title="<?php echo $N28; ?>" ><i class="fa fa-pencil-square-o"></i></a><?php }else{ ?> <a><i class="fa fa-pencil-square-o"></i></a><?php } ?>
					<a href="MenuUtilisation.php?valeur=Delete_Offre.php&id_offre=<?php echo $admin[1];?> &titre=<?php $titre; ?>&url=<?php echo $url;?>" onclick="return confirmLink(this) ;"  title="<?php echo $N17; ?>"><i class="fa fa-trash-o"></i></a>
					<a href="finaloffre.php?Ref=<?php echo $admin[1];?>&client=<?php echo $client;?>" target="_blank" title="<?php echo $N20; ?> <?php echo $admin[1];?>"><i class="fa fa-file-pdf-o"></i>  
					<a href="finaloffre.php?Ref=<?php echo $admin[1];?>&client=<?php echo $client;?>&titre=<?php echo $tt_snd ?>&url=<?php echo $_GET['url'].'.'.$tt_snd ?>&charger=send"  title="<?php echo $tt_snd; ?> <?php echo $admin[1];?>"><i class="icon-envelope-open"></i></a>  
					</a>
					</td> 
				</tr> 		
				
			
<?php }
?>             </tbody> 
			 </table>
			</div>
			</div>
	

<?php
}
	
else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>		