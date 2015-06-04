<?php
session_start();
include ("Connection.php");
$i=37;
while($i>0){
$tables = sprintf("show  Tables where Tables_in_$Database !='vuepurchasetotale' and Tables_in_$Database !='vueinvoicetotale' and Tables_in_$Database !='operation'  and Tables_in_$Database !='finalpurchase' and Tables_in_$Database !='finalinvoice' and Tables_in_$Database !='finaloffre'   and Tables_in_$Database !='currency' and Tables_in_$Database !='categorie' ");
$tabName = mysql_query($tables);

while($tb=mysql_fetch_array($tabName)){
$query = "delete  FROM $tb[0]";

$result = mysql_query($query);

}
$i--;
 }
 $result = mysql_query("insert into users  values ('admin',md5('admin'),'Administrateur','','','','');");
 

//session_destroy();
if (session_destroy()) {
$link="../index.php";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>
  <?php
} else {
echo 'Erreur : impossible de détruire la session !';
}


?>