<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
 require'includes/RecRoadImp.php';
 if($etat){


require 'Connection.php';
$s=mysql_query("select * from custemer  ");
$d=mysql_query("select * from files F,categorie C  where F.etat_dossier='ouvert' AND appliquer_sur like '%1' AND C.Nom=F.Catagorie");
$Mn=mysql_query("select * from currency where choix_monnai='1'");
$Mn2=mysql_query("select * from currency where choix_monnai='1'");
$app=mysql_query("select Num_declaration_douane  from import where type_exo='Admission temporaire' AND Num_appurement!=''");

$offre="";
if(isset($_GET['confirmeoffre'])){
$id_offre=$_GET['id_offre'];
$app=mysql_query("select * from offre where id_offre='$id_offre'");
$offre=mysql_fetch_array($app);
}


	require'views/ViewRoadImp.php';
	
  }else{ ?>

<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>