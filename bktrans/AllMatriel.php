<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recAllMateriel.php';
     if($etat){
?>

<?php
				
				include ("Connection.php");
				$s=mysql_query("select * from hardware   ");
				$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
				$MN1=mysql_fetch_array($MN);
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
			

   					<th><font size="1">id</th>
					<th><font size="1"><?php echo $N6; ?></th> 
					<th><font size="1"><?php echo $N8; ?></th> 
    				<th><font size="1"><?php echo $N11; ?></th> 
					 <th><font size="1"><?php echo $N10; ?></th> 
    				<th><font size="1"><?php echo $N14; ?></th> 
					<th><font size="1"><?php echo $N16; ?></th> 
    				<th><font size="1"><?php echo $N12; ?></th> 
				</tr> 
			</thead> 
				<tbody> 
			
			<?php 
			$t_dep=0;
			$t_VA=0;
			
			while($admin=mysql_fetch_array($s)){
		
			$dep=0;
			$D_A=explode('-',$admin[4]);
			$date_now=date('Y-m-d');
			$anne_ex=($D_A[0]+$admin[6]);
			$date_ex=$D_A[2]."/".$D_A[1]."/".$anne_ex;
			$D_N=explode('-',$date_now);
			if($admin[6]!=0 && $admin[6]!=''){
			$mont_ex=$admin[5]/$admin[6];
			$aug=$D_N[0]-$D_A[0];
			if($aug<=$admin[6]){
			$dep=$aug*$mont_ex;
			}
			}
			$val=$admin[5]-$dep;
			$t_dep=$t_dep+$dep;
			$t_VA=$t_VA+$admin[5];
			
?>
		
				<tr> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1];?></td> 
    				<td><font size="1"><?php echo $admin[4];?></td> 
    				<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo  number_format($dep,2,',','.')."/".number_format($admin[5],2,',','.')."&nbsp;".$MN1[0]; ?></td> 
				
					<td><font size="1"><?php echo $date_ex;?></td> 
    				<td><a href="MenuUtilisation.php?valeur=UpdateMatriel.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $N15; ?>&val=<?php echo $val; ?>&url=<?php echo $url2.$N15; ?>" title="<?php echo $N15; ?>"><i class="fa fa-pencil-square-o"></i>
					</a><a href="MenuUtilisation.php?valeur=deletematriel.php&NomMat=<?php echo $admin[0];?>&url=<?php echo $url; ?>&titre=<?php echo $titre; ?>" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>">
					<i class="fa fa-trash-o"></i></a></td> 
				</tr> 
				
		
			
<?php }
?>                
			 	</tbody> 
				</table>
			
    			<p><font color="red"><h6><?php echo $N18; ?>(<?php echo $N14; ?>)
    				<?php echo  number_format($t_dep,2,',','.')."/".number_format($t_VA,2,',','.')."&nbsp;".$MN1[0]; ?></h6></font></p>
					<br>
					
				
				</div>
			</div>
			<?php  }  else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>