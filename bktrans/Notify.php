<?php
require'includes/RecNotify.php';
  if($etat){

include ("Connection.php");
$user=$_SESSION['login'];
$u1=mysql_query("select type_acces from users where Email='$user'");
$u2=mysql_fetch_array($u1);
if($u2[0]=="Administrateur"){

$s1=mysql_query("select reference from purchase ");
     }else{
$s1=mysql_query("select reference from purchase where utilisateur='$user'");
}
require 'views/ViewNotify.php';
} 
  ?>
