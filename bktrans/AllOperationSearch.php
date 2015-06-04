<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recAllOperation.php';
  if($etat){
?>


<script type="text/javascript"> 
function confirmLink(theLink)
{
    var is_confirmed = confirm("<?php echo $N32; ?>");
   
    return is_confirmed;
} 
</script>

<?php
include ("Connection.php");
if(isset($_GET['facturation'])){
$tb=$_GET['tb'];
$id=$_GET['id'];
$req = "update  $tb set Invoicing='oui'  where id='$id' ";
$admi = mysql_query($req);
if($admi){
$msg=$N.' : '.$id.'  '.$N108;
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$msg',  '$date_time', NULL)");

}
}
$sans='%';
 $type='%';
 $req = "select * from operation where id LIKE '$sans' AND type_operation LIKE '$type' ";

$admi = mysql_query($req);
require 'views/viewAllOperation.php';
}else{
?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
  <?php } ?>