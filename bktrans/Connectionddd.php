<?php
$Host = "localhost";
$User = "root";
$Password = "";
$Database = "logistics";
$idConnect = mysql_connect( $Host, $User, $Password) or die( "Connexion impossible.");
$db = mysql_select_db( $Database, $idConnect) or die( "Acc�s base impossible.");
 mysql_query("SET NAMES UTF8");

?>

