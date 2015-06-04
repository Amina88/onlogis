<?php
include ("Connection.php");
require_once ('fnct_envoi_mail.php');
$ref   = $_POST['ref_com'];
$cont  = $_POST['contenu'];
$pj1    =  'bktransuploade/'.$_FILES['piece_jointe']['name'][0];
$pj2    =  'bktransuploade/'.$_FILES['piece_jointe']['name'][1];
$pj3    =  'bktransuploade/'.$_FILES['piece_jointe']['name'][2];
$obj    = $_POST['objet'];
$req = mysql_query("select reference, fournisseur from purchase where reference = '$ref';");
while ($res = mysql_fetch_array($req)){
$ref_com = $res[0];
$f_com   = $res[1];
}
$req2 = mysql_query("select nom_fournisseur, adresse_mail, adresse from supplier where nom_fournisseur ='$f_com';");
while ($rs = mysql_fetch_array($req2)){
$fournisseur = $rs[0];
$f_email = $rs[1];
$f_adr   = $rs[2];
}
//debut envoi de l'email
$MsgText= $cont;
$MsgHTML= "";
$pj = array($pj1,$pj2,$pj3);
//$dest=$f_email;
$dest='sileymane.diallo@yahoo.fr';
$exped='souleydiallo25@gmail.com';
$email = SendEmailwidthJoin($MsgText,$MsgHTML,$dest,$exped,$pj,$obj,"");
if (!($email)){
print 'Erreur lors de l\'envoi du message';
}
else { print 'Message envoyé à '.$dest. ' avec succès';}
?>