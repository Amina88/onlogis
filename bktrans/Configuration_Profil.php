<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/RecConfiguration_Profil.php';
  if($etat){

include ("Connection.php");
$Mn=mysql_query("select * from currency where Monnaie_utliser='1'");
$Cur=mysql_fetch_array($Mn);
require 'views/ViewConfiguration_Profil.php';
}  else{ 
  ?>
 

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>