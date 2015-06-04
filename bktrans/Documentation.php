<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
if(isset($_GET['delete_docuement'])){
$id=$_GET['id'];
$urlD=$_GET['url2'];
$titre=$_GET['titre'];
$request=mysql_query("select file,Nom_file from  attach  where id='$id'");
$file=mysql_fetch_array($request);
$etat=mysql_query("delete from attach  where id='$id'");
if($etat){
$a=unlink("bktrans_data/$file[0]");
}
$pfx=$file[1];
$succes="error";
$titremsg=$_GET['titre'];
$titre=$_GET['titre'];
if($etat){    
$succes=$titremsg.' : '.$pfx.'  '.$N106; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Documentation.php&titre=$titre&url=$urlD&etat_up=$etat&msg=$succes";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script 
<?php
}

require'includes/RecDocuement.php';
  if($etat){

include ("Connection.php");
$request=mysql_query("select * from  attach ");
require 'views/ViewDocuementation.php';
}  else{ 
  ?>
 



<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>


