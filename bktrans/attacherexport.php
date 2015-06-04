<?php 
foreach( $employees as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  
  $type=$_GET['type'];
 
?>
<a href="javascript:history.go(-1)">
										<i class="fa fa-reply"></i> <?php  echo $N2; ?>
						</a>
						
			
<div class="portlet " style="width:100%">

				<div class="portlet-body">
				<?php include("file-upload.php"); ?>	
				</div>
				
				
			</div>
		


<?php }
?>