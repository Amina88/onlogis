<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
	
  </script>
  
  <?php } 
  // -----------------------------------------
  require'includes/recGestion_rapport_tax.php';
  if($etat){
  ?>


<?php
include ("Connection.php");
$request=mysql_query("select * from currency");
$r=mysql_query("select * from tax");
$curr=mysql_query("select * from currency where Monnaie_utliser='1'");
$periode=mysql_query("select * from financial_period");
$comm=mysql_query("select * from purchase");
$com=mysql_fetch_array($comm);

$max=mysql_query("SELECT count(*) FROM `currency`"); 
$a=1;
while($admin=mysql_fetch_array($request)){
$a=$max-$admin[0];

}
require 'views/ViewGestion_rapport_tax.php';
?>

<?php }  else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>