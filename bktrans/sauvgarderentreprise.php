<?php 
if("$permission[1]"=="Administrateur" || "$permission[11]"=='11'){ 
include("Connection.php");
$ent=mysql_query("select * from entreprise");
$a=mysql_fetch_array($ent);
$nom=$_POST['Nom'];
$adress=$_POST['adress'];
$tel=$_POST['tel'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$site=$_POST['site'];
$url2=$_POST['url2'];
$city=$_POST['city'];
$pays=$_POST['pays'];
$footer=$_POST['footer'];

     $dossier = 'bktrans_data/';
	 
	 
     $fichier = basename($_FILES['test']['name']);
	 if($fichier!=""){
	 $ext= $fichier;
	 $ex = explode('.',$ext);

    $exe= $ex[1];
	$no=$nom.'.'.$exe;
	



     if(move_uploaded_file($_FILES['test']['tmp_name'], $dossier .$no)) 
     {
	 if($a==NULL){
	 $etat_up=mysql_query("insert   into entreprise values ('$no','$adress','$tel','$fax','$email','$site','$nom','$city','$pays',$footer)");
	 }else{
	 $etat_up=mysql_query("UPDATE  `entreprise` SET  `sigle` ='$no',`Adress` =  '$adress',`phone` =  '$tel',`Fax` =  '$fax' ,`Email` =  '$email',`web-site` =  '$site',`Nom_Entreprise`='$nom',`City` =  '$city',`Pays` =  '$pays',`footer`='$footer'");
	}
	}
}else{
$etat_up=mysql_query("UPDATE  `entreprise` SET `Adress` =  '$adress',`phone` =  '$tel',`Fax` =  '$fax' ,`Email` =  '$email',`web-site` =  '$site',`Nom_Entreprise`='$nom',`City` =  '$city',`Pays` =  '$pays',`footer`='$footer'");
}

$pfx=$nom;
$succes="error";
$titremsg=$N146;
$titre=$N37;
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N145; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=Configuration_Profil.php&titre=$titre&url=$url2&msg=$succes&etat_up=$etat_up";
		?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";	
  </script>
  <?php }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >
<?php } ?>
 