<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>

  <?php
}
require'includes/RecClient.php';
     if($etat){
if(!isset($_POST['sauvgarder'])){

require 'views/ViewClient.php';
  
?>


<?php
		}else{
		include ("Connection.php");
$client=$_POST['client'];
$titre="";
$nom="";
$prenom="";
$email=$_POST['email'];
$tel1=$_POST['tel1'];
$tel2=$_POST['tel2'];
//
$typeEnt=$_POST['typeEnt'];
$NumEnt=$_POST['numero'];
$comptef=$_POST['comptec'];
$skype=$_POST['skype'];
$site=$_POST['siteweb'];
$fax=$_POST['fax'];
$archive=$_POST['archive'];
//
$typeCl=$_POST['typeCl'];
$projet='';
$adr=$_POST['adr'];
$city=$_POST['city'];
$pays=$_POST['pays'];
$cat=$_POST['cat'];
if(isset($_POST['autrecat'])){
$cat=$_POST['autrecat'];
}
$date1=date('Y-m-d');

$Ex=$_POST['Ex'];
$loi=$_POST['loi'];
$terme_paiement=$_POST['terme_paiement'];
if($typeCl=="Client et partenaire"){
$comptef=$_POST['comptef'];
$etat_up=mysql_query("insert into custemer values('$client','$loi','$prenom','$titre','$nom','$email','$tel1','$tel2','$typeEnt','$comptec','$NumEnt','$skype','$site','$fax','$archive','$typeCl','$projet','$Ex','$adr','$city','$pays','$cat','$date1','$terme_paiement')");
$etat_up=mysql_query("insert into supplier values('$client','$loi','$prenom','$titre','$nom','$email','$tel1','$tel2','$typeEnt','$comptef','$NumEnt','$skype','$site','$fax','$terme_paiement','$adr','$city','$pays','$cat')"); 
}else{
$etat_up=mysql_query("insert into custemer values('$client','$loi','$prenom','$titre','$nom','$email','$tel1','$tel2','$typeEnt','$comptec','$NumEnt','$skype','$site','$fax','$archive','$typeCl','$projet','$Ex','$adr','$city','$pays','$cat','$date1','$terme_paiement')");

}
$pfx=$client;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Allclient.php&titre=$titrecli&url=$url&msg=$succes&etat_up=$etat_up";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
<?php 
} 
}
else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>