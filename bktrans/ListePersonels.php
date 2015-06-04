
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";	
  </script>
  <?php } 
  ?>

<?php
require'includes/recListePersonels.php';
if($etat){
include ("Connection.php");
$s=mysql_query("select * from personel ");
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
    				<th><font size="1"><?php echo $N2; ?></th> 
    				<th><font size="1"><?php echo $N3; ?></th> 
					<th><font size="1"><?php echo $N5; ?></th> 
    				<th><font size="1"><?php echo $N6; ?></th> 
    		
    				<th><font size="1"><?php echo $N8; ?></th> 
    				<th><font size="1"><?php echo $N11;?></th> 
				</tr> 
			</thead> 
			<tbody>
			<?php while($admin=mysql_fetch_array($s)){
?>
		
				<tr> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1] ;?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo $admin[2];?></td> 
				
					<td><font size="1"><?php echo $admin[7];?></td> 
    				<td><a href="MenuUtilisation.php?valeur=updatePersonel.php&CIN=<?php echo $admin[0];?>&titre=<?php echo $N14; ?>&tt=<?php echo $_GET['titre'];?>&url=<?php echo $url2.$N9; ?>" title="<?php echo $N9; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<a href="MenuUtilisation.php?valeur=DeletePersonel.php&CIN=<?php echo $admin[0];?>&type=delete&titre=<?php echo $_GET['titre'];?>&url=<?php echo $url ?>" onclick="return confirmLink(this) ;"  title="<?php echo $N10; ?>"><i class="fa fa-trash-o"></i></a>
				<?php  if("$permission[1]"=="Administrateur" || "$permission[10]"=='10') { ?>
					
				<a href="MenuUtilisation.php?valeur=Salaire.php&CIN=<?php echo $admin[0];?>&type=salaire&titre=<?php echo $N1;?> :(<?php echo $admin[0];?>)&url=<?php echo $url.'.'.$N1; ?>"   title="<?php echo $N1; ?>"><i class="fa fa-money"></i></a></td> 
				<?php }  ?>
				</tr> 
	
			
<?php }
?>
			
			</tbody> 
			 </table>
            </div>
			     </div>
			<?php } else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>