<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/RecCodes.php';
  if($etat){

include ("Connection.php");
$request=mysql_query("select * from  codes");
$group=mysql_query("SELECT * FROM `groupe_account` ORDER BY `catagorie` ASC");
require 'views/ViewCodes.php';
}  else{ 
  ?>
 



<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>


