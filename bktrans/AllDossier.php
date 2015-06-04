<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recAllDossier.php';
  if($etat){
?>
 
<?php
include ("Connection.php"); 
$req = mysql_query("select * from files f,categorie c where c.Nom=f.Catagorie and c.appliquer_sur like'0%'  ");
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_fetch_array($m);

require 'views/ViewAllDossier.php';

 }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>