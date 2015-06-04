<?php

include("sendSOA.php");
include('Connection.php');
if(isset($_POST['envoyersoa']))
{
session_start();
$doc = new DOMDocument(); 
$file_Menu =$_SESSION['lang_Manu'];
 
$doc->load($file_Menu); 
$Menu = $doc->getElementsByTagName("MenuUtilisation"); 
				
foreach( $Menu as $Menu_util ) 
{ 
  $V14 = $Menu_util->getElementsByTagName("e14"); 
  $N14 = $V14->item(0)->nodeValue; 
  $V15 = $Menu_util->getElementsByTagName("e15"); 
  $N15 = $V15->item(0)->nodeValue; 
  $V17 = $Menu_util->getElementsByTagName( "e17" ); 
  $N17= $V17->item(0)->nodeValue;
   $V125 = $Menu_util->getElementsByTagName("e125"); 
 $N125=$V125->item(0)->nodeValue;
  
$url= $N14.".".$N15.".".$N17; 
$titre=$N17;
$titremsg=$N15;
}
$i=0;
$msg=$titremsg.' : '.$N125;
foreach($_POST['cli'] as $NomSoc)
{
$i++;
if(isset($_POST["selct$i"])){
$send=sendmail($NomSoc);
$pfx=$NomSoc;
$msg=$msg.' '.$NomSoc;
$succes="error";
if($send){    
$succes=$titremsg.' : '.$N125.' '.$pfx; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
   
}
}
//echo $send ;




$link="MenuUtilisation.php?valeur=Allclient.php&etat_up=$send&url=$url&titre=$titre&msg=$msg";

?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ?>";
  </script>

<?php
} else{
session_start();
$c=count($_POST['cli']);
$i=0;
$to="";
$nom="";
foreach($_POST['cli'] as $NomSoc)
{$i++;
if(isset($_POST["selct$i"])){

$req=mysql_query("select * from custemer where Nom_Soc='$NomSoc'");
$admin=mysql_fetch_array($req);
$c_nom=$admin[0];
$c_mail=$admin[5];
if($i<$c){
$nom=$nom.$c_nom.';';
$to=$to.$c_mail.';';
}else{
$to=$to.$c_mail;
$nom=$nom.$c_nom;
}

}
}

$doc = new DOMDocument(); 
$file_Menu =$_SESSION['lang_Manu'];
 
$doc->load($file_Menu); 
$Menu = $doc->getElementsByTagName("MenuUtilisation"); 
foreach( $Menu as $Menu_util ) 
{ 
  $V14 = $Menu_util->getElementsByTagName("e14"); 
  $N14 = $V14->item(0)->nodeValue; 
  $V15 = $Menu_util->getElementsByTagName("e15"); 
  $N15 = $V15->item(0)->nodeValue; 
  $V111 = $Menu_util->getElementsByTagName( "e111" ); 
  $N111= $V111->item(0)->nodeValue;
  
$url= $N14.".".$N15.".".$N111; 
$titre=$N111;
}

$link="MenuUtilisation.php?valeur=SendChange2.php&to=$to&nom=$nom&url=$url&titre=$titre";


?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ?>";
  </script>
<?php }

?>
