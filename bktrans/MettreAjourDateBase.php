<?php 
session_start();
include ("Connection.php");
if(isset($_GET['backup']) && file_exists($_GET['backup'])){
$backup=$_GET['backup'];

//$etat_up=mysql_query("delete from users ");
$doc = new DOMDocument(); 
			
$doc->load($_SESSION['lang_out_Manu']); 
$employees = $doc->getElementsByTagName("out_Menu");
 foreach( $employees as $employee ) 
{   $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue; $V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;  $V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;  

//lecture intégrale d'un fichier 
$contenu=file_get_contents("$backup");
$contenu =explode(';',"$contenu");
$count=count($contenu);
$a=0;
$s="";
for($i=0;$i<$count;$i++){
if(isset($contenu["$i"])){

$pos1 = stripos($contenu["$i"], "insert");
if($pos1 !== false){
$a=mysql_query($contenu["$i"]) ;

}

}

}
$link="indexbord.php?valeur=dashboard.php&etat_up=$a&titre=$N10&msg=$N12";
}
}else{
$link="indexbord.php?valeur=dashboard.php&etat_up=0&titre=$N10&msg=$N11";
}
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>