<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}

 if("$permission[18]"=="18" || "$permission[1]"=="Administrateur"){ 
	
$url=$N8.".".$N79.".".$N86.".".$N88; 
$url2=$N8.".".$N79.".".$N86."."; 

foreach( $employees as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
include ("Connection.php");

?>

			
				<?php
				$s=mysql_query("select * from equipment");
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
    				<th><font size="1"><?php echo $N9; ?></th> 
					 <th><font size="1"><?php echo $N10; ?></th> 
					 <th><font size="1"><?php echo $N7; ?></th> 
    				<th><font size="1"><?php echo $N12; ?></th> 
				</tr> 
			</thead> 
			<tbody> 
			
			<?php 

			while($admin=mysql_fetch_array($s)){
			if($admin[2]==1){
			 $etat='success';
			 $msgl=$N11;
			}else{
			$etat='danger';
			$msgl=$N14;
	
			
			}
		
?>
		 
				<tr>
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1];?></td> 
    				<td><font size="1"><?php echo $admin[3];?></td> 
    				<td><font size="1"><?php echo $admin[4];?></td> 
					<td><font size="1"><?php echo $admin[5];?></td> 
					<td><font size="1"><span class="label label-sm label-<?php echo $etat;?>">
					<?php echo $msgl;?></span></td> 
					<td><a href="MenuUtilisation.php?valeur=UpdateEquipment.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $N15; ?>&url=<?php echo $url2.$N15;?>" title="<?php echo $N15; ?>"><i class="fa fa-pencil-square-o"></i></a>
					<a href="MenuUtilisation.php?valeur=deleteEquipment.php&NomMat=<?php echo $admin[0];?>&url=<?php echo $url;?>" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>">
					<i class="fa fa-trash-o"></i></a></td> 
				</tr> 
				
			
			
<?php }
?>              </tbody> 
			 </table>
     
			 </div>
			</div>
			<?php  }  }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>