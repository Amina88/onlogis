<?php
$url=$N4.".".$N8.".".$N79.".".$N81;
$url1=$N4.".".$N8.".".$N79.".".$N82;
$url2=$N4.".".$N8.".".$N79.".".$N83;
if(isset($_GET['ConfirmerOffre'])){
$type=$_GET['type'];
$id_offre=$_GET['id_offre'];
if($type=='Ocean Export'){
$link="MenuUtilisation.php?valeur=AjouterOceanExport.php&titre=$N10 Ocean Export&url=$N4.$N8.$N10.Ocean Export&confirmeoffre=true&id_offre=$id_offre";
}elseif($type=='Ocean Import'){
$link="MenuUtilisation.php?valeur=AjouterOceanImport.php&titre=$N10 Ocean Import&url=$N4.$N8.$N10.Ocean Import&confirmeoffre=true&id_offre=$id_offre";
						
}elseif($type=='Air Export'){
$link="MenuUtilisation.php?valeur=AjouterAirExport.php&titre=$N10 Air Export&url=$N4.$N8.$N10.Air Export&confirmeoffre=true&id_offre=$id_offre";
}elseif($type=='Air Import'){
$link="MenuUtilisation.php?valeur=AjouterAirImport.php&titre=$N10 Air Import&url=$N4.$N8.$N10.Air Import&confirmeoffre=true&id_offre=$id_offre";
							
}elseif($type=='Road Export'){
$link="MenuUtilisation.php?valeur=AjouterRoadExport.php&titre=$N10 Road Export&url=$N4.$N8.$N10.Road Export&confirmeoffre=true&id_offre=$id_offre";
							
}elseif($type=='LC'){
$link="MenuUtilisation.php?valeur=AjouterLocation.php&url=$url&titre=$N81&offre=$id_offre";
							
}elseif($type=='LS'){
$link="MenuUtilisation.php?valeur=AjouterServiceLogistic.php&url=$url2&titre=$N83&offre=$id_offre";
							
}elseif($type=='MG'){
$link="MenuUtilisation.php?valeur=AjouterAuMagasin.php&url=$url1&titre=$N82&offre=$id_offre";
							
}


else{
$link="MenuUtilisation.php?valeur=AjouterRoadImport.php&titre=$N10 Road Import&url=$N4.$N8.$N10.Road Import&confirmeoffre=true&id_offre=$id_offre";
							
}





 ?><script type="text/javascript"> 
document.location.href="<?php echo $link ?>";
  </script>
  <?php } ?>