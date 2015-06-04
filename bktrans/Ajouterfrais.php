
<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}

require 'includes/recAjouterFrais.php';
  if($etat){
include ("Connection.php");
if(isset($_GET['Sauvgarder'])){

$Desc=$_GET['Desc'];
$Var=$_GET['Var'];
$To=$_GET['To'];
$MN=$_GET['monnaie'];
$Val=$_GET['value'];
$Desc = str_replace("'", "''",$Desc);
$Var = str_replace("'", "''",$Var);
$To = str_replace("'", "''",$To);
$doc = new DOMDocument(); 
 
$doc->load($_SESSION['lang_out_Manu']); 
$Menu = $doc->getElementsByTagName("out_Menu"); 
				

foreach( $Menu as $Menu_util ) 
{ 
                                  $V1 = $Menu_util->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;
$et=mysql_query("SELECT * FROM  `default_billing` ORDER BY  `default_billing`.`nb` DESC LIMIT 0 , 1");
$nbs=mysql_fetch_array($et);
$nb=$nbs[0]+1;
$etat_up=mysql_query("insert into default_billing values('$nb','$Desc','$Val','$MN','$To','$Var')");
//echo "insert into default_billing values('$nb','$Desc','$Val','$MN','$To','$Var')";

$pfx=$nb;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$finmsg; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Gestion_Frais.php&titre=$titre&url=$url2&msg=$succes&etat_up=$etat_up";

	}	
	
		?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
	
  </script>
  <?php
	}else{
			
		$m=mysql_query("select * from currency where choix_monnai='1'");
require 'views/viewAjouterFrais.php';
		
 }  }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>