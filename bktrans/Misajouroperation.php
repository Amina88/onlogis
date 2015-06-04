<?php
include ("Connection.php");
if(isset($_GET['tb'])){
$tb=$_GET['tb'];
$id=$_GET['id'];
$s=mysql_query("delete from $tb WHERE  id='$id'");
$s=mysql_query("delete from invoice where Ref_operration='$id'");
$s=mysql_query("delete from purchase where operation='$id'");
$url=$_GET['url'];
$ttr=$_GET['titre'];
if($s){
$msg=$N8.' : '.$id.'  '.$N106;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}ELSE{
$msg="";
}

?>
<script type="text/javascript"> 
document.location.href="MenuUtilisation.php?valeur=AllOperation.php&etat_up=<?php echo $s; ?>&url=<?php echo $url; ?>&titre=<?php echo $ttr; ?>&msg=<?php echo $msg; ?>";
	
  </script>
 <?php
 }
 ?>