<?php
$Host = "localhost";
$User = "root";
$Password = "";
$Database = $_SESSION['databases'];
$idConnect = mysql_connect( $Host, $User, $Password) ;
$db = mysql_select_db( $Database, $idConnect) ;
 mysql_query("SET NAMES UTF8");

?>