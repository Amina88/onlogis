<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require 'includes/RecRoadEx.php';
 if($etat){
 
 require 'views/ViewRoadEx.php';
 
  }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>