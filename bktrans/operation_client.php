<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}

   require'includes/RecClientOp.php';
?>
<script type="text/javascript"> 
function confirmLink(theLink)
{
    var is_confirmed = confirm("<?php echo $N32; ?>");
   
    return is_confirmed;
} 
</script>

<?php
if ($etat){;
include ("Connection.php");

if(isset($_GET['facturation'])){
$tb=$_GET['tb'];
$id=$_GET['id'];
$req = "update  $tb set Invoicing='oui'  where id='$id' ";
$admi = mysql_query($req);

if($admi){
$msg=$N.' : '.$id.'  '.$N108;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}
}
$soc=$_GET['Nom_Soc'];
 $req = "select * from operation  where client='$soc' ";
$admi = mysql_query($req); 

?>
<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i><?php  echo strtoupper($_GET['titre']);  ?>
							</div>
							<div class="actions">
								<div class="btn-group">
									<a class="btn default" href="#" data-toggle="dropdown">
									Columns <i class="fa fa-angle-down"></i>
									</a>
									<div id="sample_4_column_toggler" class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
										<label><input type="checkbox" checked data-column="6"><?php echo $N10 ; ?></label>
										<label><input type="checkbox" checked data-column="7"><?php echo $N11 ; ?></label>
										<label><input type="checkbox" checked data-column="8"><?php echo $N12 ; ?></label>
										<label><input type="checkbox" checked data-column="9"><?php echo $N1 ; ?></label>
										<label><input type="checkbox" checked data-column="10"><?php echo $N13 ; ?></label>
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_4">
											
			<thead> 
				<tr> 
    				<th><font size="1"><?php echo  $N4 ; ?></th> 
					<th><font size="1"><?php  echo $N5 ; ?></th> 
					<th><font size="1"><?php echo  $N6 ; ?></h5></th> 
    				<th><font size="1"><?php echo $N7 ; ?></h5></th> 
					<th><font size="1"><?php echo  $N9 ; ?></th> 
    				 <th><font size="1"><?php echo $N8 ; ?></th> 
    				 <th><font size="1"><?php echo $N10 ; ?></th> 
					 <th><font size="1"><?php echo $N11 ; ?></th>
    				 <th><font size="1"><?php echo $N12 ; ?></th> 
    				 <th><font size="1"><?php echo $N1 ; ?></th> 
    				<th ><font size="1"><?php echo $N13 ; ?></th> 
				</tr> 
			</thead> 
							<tbody>
			
			<?php while($admin=mysql_fetch_array($admi)){
			 $rq = "select id_facture , Ref_operration from invoice where  Ref_operration='$admin[0]' ";
$cl=substr ($admin[2], 0,6 );
    				
    				
			$typ=explode(' ',$admin[7]);
			$img='';
			$type='';
			if($typ[0]== 'Road'){
			$img = "<img src=images/Road.png  title=Road width=20 height=18>";
			$type='Road';
			}
			elseif($typ[0]== 'Air'){
			$img = "<img src=images/Air.png title=Air width=20 height=18>";
			$type='Air';
			}
			elseif($typ[0]== 'Ocean' ){
			$img = "<img src=images/Ocean.png title=Ocean width=20 height=18>";
			$type='Ocean';
			}
			$img2='';
			if($admin[8]== 'import'){
			$img2 = "<img src=images/Import.png title=Import width=20 height=18>";
			}
			elseif($admin[8]== 'export'){
			$img2 = "<img src=images/Export.png title=Export width=20 height=18>";
			}
			$titre="";
if($admin[7]=="Air Export"){
$titre="Air freight Export (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Air Import"){
$titre="Air freight Import (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Ocean Export"){
$titre="Ocean freight Export (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Ocean Import"){
$titre="Ocean freight Import (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Road Export"){
$titre="Road freight Export (".$admin[0].",".$admin[2].")";
}else{
$titre="Road freight Import (".$admin[0].",".$admin[2].")";
}

$titre = str_replace('&','%26',$titre);
?>
		
				<tr  > 
    				<?php if($admin[8]=="export"){ ?>
				<td><font size="1"><a href="MenuUtilisation.php?valeur=DetailOperationExport.php&page=<?php echo $type;?>&titre=<?php echo $titre;?> &type_operation=<?php echo $type;?> Export&id=<?php echo $admin[0]; ?>&url=<?php echo $url.".".$N19 ?>" ><?php  echo $admin[0];?> </a></td> 
				<?php  }else{ ?>
				<td><font size="1"> <a href="MenuUtilisation.php?valeur=detailleoperation.php&tb=import&type_operation=<?php echo $type;?>&page=<?php echo $type;?>&id=<?php echo $admin[0]; ?>&titre=<?php echo $titre; ?>&url=<?php echo $url.'.'.$N19; ?>" ><?php  echo $admin[0];?> </a></td> 
				
				<?php  } ?>
					<td><font size="1"><a href="MenuUtilisation.php?valeur=detailleDossier.php&Ref=<?php echo $admin[1] ; ?>&type=affiche&titre= <?php echo $admin[1] ; ?>  <?php echo  $N15 ; ?>&url=<?php echo $urld.".".$N31; ?>"><?php echo $admin[1];?></a></td> 
    				<td><font size="1"><a  title="<?php echo $admin[2]; ?>" href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $admin[2];?>&titre=<?php echo $admin[2];?> <?php echo  $N15 ; ?>&mdc=1&url=<?php echo$urlcli.$N31?>"><?php echo $cl;?></a></td> 
					<td><font size="1"><?php echo $admin[10];?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
    				<td><font size="1"><?php echo $admin[3];?></td>
    				<td><font size="1"><?php echo $admin[5];?></td>
					<td><font size="1"><?php echo $admin[6];?></td>
    				<td><font size="1"><?php echo $admin[7];?></td>
    				<td><?php if($admin[9]=="non"){?><a href="MenuUtilisation.php?valeur=operation_client.php&Nom_Soc=<?php echo $_GET['Nom_Soc']; ?>&titre=<?php echo $_GET['titre']; ?>&url=<?php echo $_GET['url']; ?>&facturation=oui&tb=<?php  echo $admin[8];?>&id=<?php  echo $admin[0];?>" onclick="return confirmLink(this);"><span class="label label-sm label-danger">
<?php echo $N25;?></span></a><?php }else{?><span class="label label-sm label-success"><?php echo $N24;?></span><?php }?></td>

					<?php if($admin[8]=="export"){?>
    				<td><a href="MenuUtilisation.php?valeur=Misajouroperation.php&id=<?php echo $admin[0];?>&type=delete&type_operation=<?php echo $type;?> Export&url=<?php echo $url.".".$N18; ?>&titre=<?php echo $_GET['titre']; ?>&tb=export" onclick="return confirmLink(this) ;"  title="<?php echo  $N18 ; ?>">
					<i class="fa fa-trash-o"></i>
					</a>
					<a href="MenuUtilisation.php?valeur=formulaire_trans.php&titre=<?php echo  $N29 ; ?>&tb=export&type=<?php echo $type;?>&id=<?php echo $admin[0]; ?>&url=<?php echo $url.".".$N20; ?>" title="<?php echo  $N20 ; ?>" ><i class="fa fa-paste"></i>
				</a>				
			         <?php }else{ ?>
					 
					 <td><a href="MenuUtilisation.php?valeur=Misajouroperation.php&id=<?php echo $admin[0];?>&type=delete&tb=import&typeop=<?php echo $type;?>&url=<?php echo $url.".".$N18; ?>&titre=<?php echo $_GET['titre']; ?>" onclick="return confirmLink(this) ;"  title="<?php echo  $N18 ; ?>">
					 <i class="fa fa-trash-o"></i></a>
					 <a href="MenuUtilisation.php?valeur=formulaire_trans.php&titre=<?php echo $N29; ?>&tb=import&type=<?php echo $type;?>&id=<?php echo $admin[0]; ?>" title="<?php echo  $N20 ; ?>" ><i class="fa fa-paste"></i></a>
				<?php } 
				if("$permission[1]"=="Administrateur" || "$permission[8]"=='8') {
				$inv=mysql_query("select * from invoice  where Ref_operration='$admin[0]'");
$inv=mysql_fetch_array($inv);
				if($inv){
				?>
				
				<a href="MenuUtilisation.php?valeur=Facture_operation.php&titre=<?php echo $N33.'  :  '.$admin[0]; ?>&tb=import&type=<?php echo $type;?>&id=<?php echo $admin[0]; ?>&url=<?php echo $urlFacture; ?>" title="<?php echo  $N33." : ".$admin[0] ; ?>" ><i class="icon-bar-chart"></i></a>
				<?php }else{ ?>
				<i class="icon-bar-chart"></i>
				<?php } }
				if("$permission[1]"=="Administrateur" || "$permission[4]"=='4') {
				$inv=mysql_query("select * from purchase  where operation='$admin[0]'");
$inv=mysql_fetch_array($inv);
				if($inv){
				?>
				
				<a href="MenuUtilisation.php?valeur=Command_operation.php&titre=<?php echo $N34.'   :   '.$admin[0]; ?>&tb=import&type=<?php echo $type;?>&id=<?php echo $admin[0]; ?>&url=<?php echo $urlFacture; ?>" title="<?php echo  $N34.'  :   '.$admin[0] ; ?>" ><i class="icon-tag"></i></a>
				<?php }else{ ?>
				<i class="icon-tag"></i>
				<?php }} ?>
				</td>
				</tr> 
			<?php } ?>		
			</tbody> 			

</table>
</div></div>
<?php }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>
