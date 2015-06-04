<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
require'includes/recCompte.php';
     if($etat){
?>
<script type="text/javascript"> 
function insertBNK(){
mn=document.getElementById("monnaie").value;
bq=document.getElementById("banq").value;
document.getElementById("Acount").value=bq+"("+mn+")";
}
function submitform()
{

  document.submit_form.submit();
}
  </script>
<?php 

include ("Connection.php");
if(isset($_POST['type'])){
$Nom_banque=$_POST['nom'];
echo $Nom_banque;
$Num=$_POST['Num'];
$group=$_POST['nom'];
$MN=$_POST['monnaie'];
$Sold=$_POST['Sold'];
$cash=0;
$cheque=0;
$virement=0;
if(isset($_POST['cash'])){
$cash=1;
}
if(isset($_POST['cheque'])){
$cheque=1;
}if(isset($_POST['virement'])){
$virement=1;
}
$code=$_POST['Code'];
$declaration=$_POST['declaration'];
$cat=$_POST['typecompte'];
$name=$_POST['nomCode'];
$DCV=$_POST['decouvert'];
$Classement=$_POST['Classement'];
$vante=0;
$achat=0;
$budPOST=0;
if(isset($_POST["a"])&&isset($_POST["b"])&&isset($_POST["c"])){
$affiche='111';
}elseif(isset($_POST["a"])&&isset($_POST["b"])&&!isset($_POST["c"])){
$affiche='110';
}elseif(isset($_POST["a"])&&isset($_POST["c"])&&!isset($_POST["b"])){
$affiche='101';
}elseif(isset($_POST["b"])&&isset($_POST["c"])&&!isset($_POST["a"]) ){
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
}$c=0;
$etat_up=mysql_query("insert into codes values('$name','$code','$declaration','$cat','$affiche','$Classement')")or die(mysql_error());

if($etat_up){
$etat_up=mysql_query("insert into bank_account values('$Num','$Nom_banque','$group','$cash','$cheque','$virement','$Sold','$MN',$DCV,'$name')") or die (mysql_error());
}else{
$etat_up=mysql_query("delete from codes where Nom_Code='$name'") or die (mysql_error());
echo "delete from codes where Nom_Code='$name'";

}

$succes="error";
if($etat_up){    
$succes=$N25.' : '.$Nom_banque.'-'.$Num.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=AllCompte.php&titre=$titre&url=$url&etat_up=$etat_up&msg=$succes";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>

<?php
		}else{
require 'views/viewCompte.php';
?>


			<?php 
			
		}} else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>