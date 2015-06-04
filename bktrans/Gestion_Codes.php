<?php 
if("$permission[1]"=="Administrateur" || "$permission[11]"=='11'){ 
include ("Connection.php");

if(isset($_GET['groupe'])){
$url=$_GET['url2'];
$cat=$_GET['catagorie'];
$name=$_GET['nom'];
$a=mysql_query("insert into groupe_account values('$cat','$name')");
$link="MenuUtilisation.php?valeur=Codes.php&titre=Codes&etat_up=1&url=$url";
}elseif(isset($_POST['compte'])){
$url=$_POST['url2'];
$code=$_POST['Code'];
$declaration=$_POST['declaration'];
$cat=$_POST['typecompte'];
$name=$_POST['nom'];
$Classement=$_POST['Classement'];
$vante=0;
$achat=0;
$budget=0;
if(isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["c"])){
$affiche='111';
}elseif(isset($_POST["a"])&&isset($_POST["b"])&&!isset($_POST["c"])){
$affiche='110';
}elseif(isset($_POST["a"])&&isset($_POST["c"])&&!isset($_POST["b"])){
$affiche='101';
}elseif(isset($_POST["b"])&&isset($_POST["c"])&&!isset($_POST["a"])){
$affiche='011';

}elseif(isset($_POST["a"])){
$affiche='100';
}
elseif(isset($_POST["b"])){
$affiche='010';
}
elseif(isset($_POST["c"])){
$affiche='101';
}else{
$affiche='000';
}
$c=mysql_query("insert into codes values('$name','$code','$declaration','$cat','$affiche','$Classement')");

$pfx=$name;
$succes="error";
$titremsg=$N39;
$titre=$N39;
if($c){    
$succes=$titremsg.' : '.$pfx.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Codes.php&titre=$titre&url=$url&msg=$succes&etat_up=$c";
}elseif(isset($_GET['test'])){
$url=$_GET['url2'];
$code=$_GET['test'];
$c=mysql_query("delete from codes where Nom_Code='$code'");
$pfx=$code;
$succes="error";
$titremsg=$N39;
$titre=$N39;
if($c){    
$succes=$titremsg.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Codes.php&titre=$titre&url=$url&msg=$succes&etat_up=$c";


}else{
$url=$_POST['url2'];
$max=mysql_query("SELECT * FROM `codes`"); 
$j=0;
while(mysql_fetch_array($max)){
$j++;
}
for($i=1;$i<=$j;$i++){
$a='a'.$i;
$b='b'.$i;
$c='c'.$i;
$d='NOM'.$i;
$nom=$_SESSION["$d"];
if(isset($_POST["$a"])&&isset($_POST["$b"])&&isset($_POST["$c"])){
$etat_up=mysql_query("UPDATE  `codes` SET  `etat_affiche` =  '111' WHERE  `codes`.`Nom_Code` =  '$nom'");
}elseif(isset($_POST["$a"])&&isset($_POST["$b"])&&!isset($_POST["$c"])){
$etat_up=mysql_query("UPDATE  `codes` SET  `etat_affiche` =  '110' WHERE  `codes`.`Nom_Code` =  '$nom'");
//echo'110';
}elseif(isset($_POST["$a"])&&isset($_POST["$c"])&&!isset($_POST["$b"])){

$etat_up=mysql_query("UPDATE  `codes` SET  `etat_affiche` =  '101' WHERE  `codes`.`Nom_Code` =  '$nom'");
//echo'101';
}elseif(isset($_POST["$b"])&&isset($_POST["$c"])&&!isset($_POST["$a"]) ){
$etat_up=mysql_query("UPDATE  `codes` SET  `etat_affiche` =  '011' WHERE  `codes`.`Nom_Code` =  '$nom'");
//echo'011';

}elseif(isset($_POST["$a"])){
$etat_up=mysql_query("UPDATE  `codes` SET  `etat_affiche` =  '100' WHERE  `codes`.`Nom_Code` =  '$nom'");

}
elseif(isset($_POST["$b"])){
$etat_up=mysql_query("UPDATE  `codes` SET  `etat_affiche` =  '010' WHERE  `codes`.`Nom_Code` =  '$nom'");
}
elseif(isset($_POST["$c"])){
$etat_up=mysql_query("UPDATE  `codes` SET  `etat_affiche` =  '001' WHERE  `codes`.`Nom_Code` =  '$nom'");

}else{
$etat_up=mysql_query("UPDATE  `codes` SET  `etat_affiche` =  '000' WHERE  `codes`.`Nom_Code` =  '$nom'");
}
}
$pfx=$nom;
$succes="error";
$titremsg=$N39;
$titre=$N39;
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N108; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Codes.php&titre=$titre&url=$url&msg=$succes&etat_up=$etat_up";

}
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
<?php }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>