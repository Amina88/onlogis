<?php
$Host = "localhost";
$User = "root";
$Password = "";
$Database = "logistics";
$idConnect = mysql_connect( $Host, $User, $Password) or die( "Connexion impossible.");
$db = mysql_select_db( $Database, $idConnect) or die( "Accès base impossible.");
 mysql_query("SET NAMES UTF8");

?>

