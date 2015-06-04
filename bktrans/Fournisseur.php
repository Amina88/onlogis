<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
</script>
  <?php 
  }
require'includes/RecFournisseur.php';
  if($etat){
  ?>

  <?php
include ("Connection.php");
require 'views/ViewFournisseur.php';
}  else{ 
?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>	