<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/RecAllCommande.php';
  if($etat){
?>

<?php
include ("Connection.php");

$s=mysql_query("select * from purchase where confirmation=1  AND operation!=''  order by reference DESC  ");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);

require 'views/ViewAllCommande.php';
}else{

?>


<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
