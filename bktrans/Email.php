<?php
$file = "test.png"; $fp = fopen($file, "rb"); // le b c'est pour les windowsiens
$attachment = fread($fp, filesize($file));
fclose($fp);
$attachment = chunk_split(base64_encode($attachment));


$sujet = $_POST['Sujet'];
$message =$_POST['message'];
$destinataire = $_POST['destination'];
$headers = "From:moi@domaine.com";
if(mail($destinataire,$sujet,$message,$headers))
{
        echo "L'email a bien été envoyé.";
}
else
{
        echo "Une erreur c'est produite lors de l'envois de l'email.";
}


?>