<?php
include ("Connection.php");
if($_SESSION['login']==null ||  $_SESSION['pwd']==null){
header("Location:index.php");
}

$cat=$_GET['cat'];
$datef="";
$dated= date("Y-m-d");
$dateef=$_GET['estimdatefin'];
$etat="ouvert";     
$succes="";     


$CTG=mysql_query("select * from categorie where Nom='$cat'");
$CTT=mysql_fetch_array($CTG);
$type=$CTT[2];
$c=0;
$client=$_GET['client'];
$NP=$_GET['fieldsCount'];
$option=$_GET['OPA'];
$Partenaire=$_GET['partenaire'];

$q=mysql_query("SELECT Reference FROM files WHERE Reference LIKE  '$type%' ORDER BY Reference DESC LIMIT 0 , 1");
$res=mysql_fetch_array($q);
$string1 = $res[0];
$needle = $type;
$needle_len = strlen($needle);
$position_num = strpos($string1,$needle) + $needle_len;
$result_string = substr($string1,$position_num);
$pfx=$needle.(sprintf("%06d",$result_string +1));
$a=mysql_query("insert into files values ('$pfx','$cat','$Partenaire','$client','$option','$etat','$dated','$datef','$dateef')")or die(mysql_error());
$Count=1;
for($i=1;$i<$NP+1;$i++)
{
if(isset($_GET['Description'.$i])){

$des= $_GET['Description'.$i];
$des = str_replace("'", "''",$des);
$val=$_GET['qt'.$i];
$monai= $_GET['monnaie'.$i];
$monai= $_GET['monnaie'.$i];
$DV= $_GET['devise'.$i];
$dt=date('Y-m-d');
$c=mysql_query("INSERT INTO  `estimated_costs` (`Libelle` ,`cout_estime` ,`monnaie` ,`Date`,`Reference`,`Devise`,`id`) values ('$des',$val,'$monai','$dt','$pfx','$DV',$Count)");
$Count++;
}
}
$succes="error";
if($a){    
$succes=$N5.' : '.$pfx.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=AllDossier.php&titre=$N7&url=$N4.$N5.$N7&msg=$succes&etat_up=$a";



?><script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>