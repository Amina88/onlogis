<?php 
include ("Connection.php");
$id=$_GET['id'];
$s=mysql_query("delete from import where id='$id'");
$s=mysql_query("delete from invoice where Ref_operration='$id'");
$s=mysql_query("delete from purchase where operation='$id'");
echo "delete from import where id=$id";
echo "delete from facture where Ref_operration='$id'";
echo "delete from commande where operation='$id'";
$fct=mysql_query("select * from invoice where Ref_operration='$id'");
$cmd=mysql_query("select * from purchase where operation='$id'");
$a=0;
$b=0;
while($opp=mysql_fetch_array($fct)){
if($opp[8]=='0'){
$a=1;
}

}

while($opp=mysql_fetch_array($cmd)){
if($opp[11]=='0'){
$a=1;
}

}
header("Location:MenuUtilisation.php?valeur=AllOperation.php&titre=Tous%20les%20envois&etat_up=$s");
 
 ?>