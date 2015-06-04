<?php
session_start();

$data=array();
$data2=array();
$i=0;
include ("Connect.php");
$j=0;
$req=mysql_query("SELECT * FROM `control_panel` ");
while($nom=mysql_fetch_array($req)){
$j++; 
$data2[$j][]=$nom[0];
$data2[$j][]=$nom[2];
}
		$emaild=$_SESSION['login'];
			$requetee=mysql_query("SELECT * FROM `user_database` WHERE `user`='$emaild'");
while($us=mysql_fetch_array($requetee)){
$req=mysql_query("SELECT * FROM `control_panel` WHERE `databese`='$us[0]'");
$nom=mysql_fetch_array($req);

$i++;
$data[$i][]=$us[0];
$data[$i][]=$nom[2];


}

if(isset($_GET['db'])){
$_SESSION['databases']=$_GET['db'];
$_SESSION['databasesname']=$_GET['namedtbse'];

}

$_SESSION["data2"]=$data2;
$_SESSION["data"]=$data1;


var_dump($_SESSION["data2"]);

var_dump($_SESSION["data"]);








?>