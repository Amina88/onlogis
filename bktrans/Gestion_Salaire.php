<?php

if($_SESSION['login']==null ||  $_SESSION['pwd']==null){
header("Location:index.php");
}
?>
<?php
//Ajouter un client 
if("$permission[1]"=="Administrateur" || "$permission[10]"=='10'){ 
include ("Connection.php");
if($_GET['type']=='update'){
$Nom=$_SESSION['Nom'];
$AN=$_SESSION['annee'];
$MS=$_SESSION['MS'];
$NP=$_POST['NP'];
$SB=$_POST['SB'];
$Augment=$_POST['Augmant'];
$IF=$_POST['IF'];
$IL=$_POST['IL'];
$IT=$_POST['IT'];
$IEE=$_POST['IEE'];
$IR=$_POST['IR'];
$MN=$_POST['MN'];
$PE=$_POST['PE'];
$TB=$_POST['TB'];
$CNSS=$_POST['CNSS'];
$CNAM=$_POST['CNAM'];
$MI=$_POST['MI'];
$ITS=$_POST['ITS'];
$TR=$_POST['TR'];
$AV=$_POST['AV'];
$SN=$_POST['SN'];
$s=mysql_query("UPDATE  `salaried` SET  `Salaire_base` =  '$SB',`augmantation` =  '$Augment',`ind_fonct` =  '$IF',`ind_log` =  '$IL',`ind_Trans` =  '$IT',`ind_Eau_Elect` =  '$IEE',`Iindemnit_risque` =  '$IR',`prime_Exception` =  '$PE',`Total_brut` =  '$TB',`CNSS` =  '$CNSS',`CNAM` =  '$CNAM',`Mont_impot` =  '$MI',`ITS` =  '$ITS',`Total_Ret` =  '$TR',`Avance` =  '$AV',`Salaire` =  '$SN',`Monnaie` =  '$MN'  where CIN='$Nom' AND Mois='$MS' AND annee='$AN'");
$finmsg=$N108;
}else{
$Nom=$_GET['Nom'];
$AN=$_GET['AN'];
$MS=$_GET['MS'];
$s=mysql_query("delete from salaried where CIN='$Nom' AND Mois='$MS' AND annee='$AN'");
$finmsg=$N106;
}
$Titre=$_GET['titre'];
$url=$_GET['url'];
$titremsg=$N115; 
$pfx=$Nom;
$succes="error";
if($s){    
$succes=$titremsg.' : '.$pfx.'  '.$finmsg; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Salaire.php&titre=$Titre&url=$url&etat_up=$s&CIN=$Nom&msg=$succes";

?>

<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
<?php }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
