<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  <?php } ?>


<?php
$url= $N35.".".$N40.".".$N40; 
$titre=$N40;
foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;
include ("Connection.php");
$id=$_GET['id'];
$s=mysql_query("select * from notification where `notification`.`id`=$id");
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
    				<th><font size="1"><?php echo $N1; ?></h6></th> 
    				<th><font size="1"><?php echo $N2; ?></h6></th> 
					<th><font size="1"><?php echo $N3; ?></h6></th>  
    				<th><font size="1"><?php echo $N5; ?></h6></th> 
				</tr> 
			</thead> 
				<tbody>
			<?php while($admin=mysql_fetch_array($s)){
?>
		 
				<tr> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1];?></td> 
					<td><font size="1"><?php echo $admin[2];?></td> 
    				<td><a href="suppnotif.php?id=<?php echo $admin[4];?>&titre=<?php echo $titre; ?>&url=<?php echo $url; ?>" onclick="return confirmLink(this) ;"  title="<?php echo $N6; ?>">
					<i class="fa fa-trash-o"></i></a></td> 
				</tr> 
				
		
			
<?php } 
?>	  </tbody> 
			 </table>
            </div>
            </div>
			<?php } 
?>