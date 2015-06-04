<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}

require 'includes/RecPaiement_Salaire.php';
if($etat){ 


require 'views/ViewPaiement_Salaire.php';
?>

		
	
		  
		     
				
				
			<?php  }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>