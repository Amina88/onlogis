<?php
session_start();

if(isset($_POST['pass'])){
$a=$_POST['pass'];
$p=$_SESSION['pwd'];

if(md5($a)=="$p"){
echo "1";
}else{
echo "0";
}
}

?>