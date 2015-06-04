<?php
session_start();
$docs = new DOMDocument(); 
$docs->load($_SESSION['lang']); 
include ("Connection.php");
$employees= $docs->getElementsByTagName("Codes"); 
foreach( $employees as $employee ) 
{ 
                                  $V41 = $employee->getElementsByTagName("e41"); 
  $N41 = $V41->item(0)->nodeValue; 
include ("Connection.php");
 

  $result=0;
 /* On ouvre le fichier à importer en lecture seulement */
if(isset($_GET['backup']) && file_exists($_GET['backup'])){
$backup=$_GET['backup'];
$test=explode("csv",$backup);
}else
     { /* le fichier n'existe pas */
       echo "Fichier introuvable !<br>Importation stoppée.";
       exit();
     }
	if(isset($test[1])){
     $fp = fopen("$backup", "r"); 
  
      $i=0;
    while (!feof($fp)) /* Et Hop on importe */
    { /* Tant qu'on n'atteint pas la fin du fichier */
	$i++;
       $ligne = fgets($fp,4560); /* On lit une ligne */  
if($i>3){
       /* On récupère les champs séparés par ; dans liste*/
       $liste = explode( ";",$ligne);  
   if(isset($liste[1])){
       /* On assigne les variables */ 

       /* Ajouter un nouvel enregistrement dans la table */ 
       $query = "INSERT INTO codes VALUES('$liste[0]','$liste[1]','$liste[2]','$liste[3]','111','$liste[4]')"; 
      $result= MYSQL_QUERY($query); 
  
        }
     }
      }
     /* Fermeture */ 
     fclose($fp); 
     MYSQL_CLOSE(); 
   
   
 
   /* FORMULAIRE DE CHOIX D'IMPORTATION */  
   $link="MenuUtilisation.php?valeur=Codes.php&titre=Codes&etat_up=$result";
 }else{
   $link="MenuUtilisation.php?valeur=Codes.php&titre=Codes&etat_up=0&msg=$N41";

 }}
   ?>  
   
   <script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>