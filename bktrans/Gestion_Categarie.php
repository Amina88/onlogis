<?php 
if("$permission[1]"=="Administrateur" || "$permission[11]"=='11'){ 
include ("Connection.php");
$tt=$_GET['titre'];
$url=$_GET['url2'];
$titremsg=$N84;


if(isset($_GET['compte'])){
$code=$_GET['Code'];
$name=$_GET['nom'];
$tt=$_GET['titre'];

$affiche=$_GET['a'];

$c=mysql_query("insert into categorie values('','$name','$code','$affiche')");
if($c){
$succes=$titremsg.' : '.$name.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c1=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Gestion_Cat.php&titre=$tt&etat_up=$c&url=$url&msg=$succes";

}elseif(isset($_GET['id'])){
$code=$_GET['id'];
$cd=mysql_query("SELECT *FROM `categorie` where id='$code'"); 
$cod=mysql_fetch_array($cd);
$c=mysql_query("delete from categorie where id='$code'");
if($c){
$succes=$titremsg.' : '.$cod[1].'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c1=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Gestion_Cat.php&titre=$tt&etat_up=$c&url=$url&msg=$succes";

}else{



$max=mysql_query("SELECT *FROM `categorie`"); 
$j=0;
while(mysql_fetch_array($max)){
$j++;
}
$h=0;$s=0;
for($i=1;$i<=$j;$i++){
$h++;
$test=1;
$a='a'.$i;
$b='b'.$i;
$c='c'.$i;
$d='NOM'.$i;
$nom=$_SESSION["$d"];
if(isset($_GET["$a"])&& (isset($_GET["$b"]) || isset($_GET["$c"]))){
$test=0;
}

if($test==1){
$s++;
if(isset($_GET["$a"])&&isset($_GET["$b"])&&isset($_GET["$c"])){
mysql_query("UPDATE  `categorie` SET  `appliquer_sur` =  '111' WHERE  `categorie`.`id` =  '$nom'");
}elseif(isset($_GET["$a"])&&isset($_GET["$b"])&&!isset($_GET["$c"])){
mysql_query("UPDATE  `categorie` SET  `appliquer_sur` =  '110' WHERE  `categorie`.`id` =  '$nom'");

}elseif(isset($_GET["$a"])&&isset($_GET["$c"])&&!isset($_GET["$b"])){

mysql_query("UPDATE  `categorie` SET  `appliquer_sur` =  '101' WHERE  `categorie`.`id` =  '$nom'");

}elseif(isset($_GET["$b"])&&isset($_GET["$c"])&&!isset($_GET["$a"]) ){
mysql_query("UPDATE  `categorie` SET  `appliquer_sur` =  '011' WHERE  `categorie`.`id` =  '$nom'");
	
}elseif(isset($_GET["$a"])){
mysql_query("UPDATE  `categorie` SET  `appliquer_sur` =  '100' WHERE  `categorie`.`id` =  '$nom'");

}
elseif(isset($_GET["$b"])){
mysql_query("UPDATE  `categorie` SET  `appliquer_sur` =  '010' WHERE  `categorie`.`id` =  '$nom'");
}
elseif(isset($_GET["$c"])){
mysql_query("UPDATE  `categorie` SET  `appliquer_sur` =  '001' WHERE  `categorie`.`id` =  '$nom'");

}else{
mysql_query("UPDATE  `categorie` SET  `appliquer_sur` =  '000' WHERE  `categorie`.`id` =  '$nom'");
}




}
}
if($s==$h){

$succes=$titremsg.' : '.$nom.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c1=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
$link="MenuUtilisation.php?valeur=Gestion_Cat.php&titre=$tt&etat_up=1&url=$url&&msg=$succes";
}else{
$msg=$_GET["echec"];
$link="MenuUtilisation.php?valeur=Gestion_Cat.php&titre=$tt&etat_up=0&url=$url&msg=$msg";
}
}
?>

<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
 <?php  }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>