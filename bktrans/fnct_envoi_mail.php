<?php
    function FilePathToArray($leFichier)
    {
    if (!file_exists($leFichier)){
    return false;
    }
    $AboutTheFile=pathinfo($leFichier);
    return array(
    'chemin'	=> $leFichier,
    'nom'	    => $AboutTheFile['filename'],
    'extension' => $AboutTheFile['extension'],
    'contenu'   => chunk_split(base64_encode(file_get_contents($leFichier)))	//ounch les ressources
    );
     
    }
    function SendEmailwidthJoin($message_txt,$message_html,$destinataire,$expediteur,$fichiersAJoindre,$objet,$replyTo="" )
    {
    /*
      * Envoie un e-mail "propre" avec des pièces jointes
      *
      * Codé par gnieark http://blog-du-grouik.tinad.fr février 2012
      * Distribué sans aucune garantie dans les conditions établies là http://blog-du-grouik.tinad.fr/pages/Mentions-l%C3%A9gales
      *
      * Vous ne devez pas supprimer ce bloc de commentaires.
      *
      * La création de ce code est en tres grande partie basée sur le tutoriel de Weaponsb qui a sévi sur le site du zéro:
      * "Envoyer un e-mail en PHP" http://www.siteduzero.com/tutoriel-3-35146-e-mail-envoyer-un-e-mail-en-php.html
      *
      */
     
    /*
      * *** How to use this function ***
      * $fichiersAJoindre peut être:
      * - un string contenant le chemin vers un seul fichier
      * - un array sous la forme array('Chemin/Vers/Fichier1.ext','/chemin/vers/fichiers2', etc...);
      * - un array structuré comme la super variable globale PHP $_FILES:
      * $array('file1' => array('
      * 'name' => ,
      * 'type' => ,
      * 'tmp_name' => ,
      * 'error' => ,
      * 'size' => ),
      * 'file2' => array(
      * (..)etc)
      * )
      * /!\ Aucune vérification sur du directory transversal n'est faite au niveau de cette function.
      * En cas de variables fournies par l'utilisateur, prenez le soin de protéger en amont de cette function.
      * $message_txt (obligatoire contient le message au format txt)
      * $message_html facultatif (envoyez une string vide "" si vous ne souhaitez pas envoyer votre message en html)
      * $destinataire : 'nom@fai.com' ou '"Nom Prenom<nom@fai.com>"' ou '"Nom1 Prenom1<nom1@fai.com>,Nom2 Prenom2<nom2@fai.com>"'
      * $expediteur: idem
      * $replyTo: facultatif, si différent de l'expéditeur.
      */
     
     
    //=== vérifier et préparer les pieces jointes:
    $arrayFiles=array();
    if (is_string($fichiersAJoindre)){
    $lesFichiers[]= FilePathToArray($fichiersAJoindre);
    }
    if (is_array($fichiersAJoindre)){
    //tester si c'est du type $_FILES
    if ((isset($fichiersAJoindre[0])) AND (is_string($fichiersAJoindre[0])) ){
    //un array simple avec des strings
    foreach($fichiersAJoindre as $stringFile){
    $lesFichiers[]= FilePathToArray($stringFile);
    }
    }else{
    //de type $_FILES
    foreach($fichiersAJoindre as $arrayFiles){
    $aboutFile=pathinfo($arrayFiles['name']);
    $lesFichiers[]=array(
    'chemin'	=> getenv('TMP')."/".$arrayFiles['tmp_name'],
    'nom'	=> $aboutFile['filename'],
    'extension'=>$aboutFile['extension'],
    'mimeType'=> mime_content_type(getenv('TMP')."/".$arrayFiles['tmp_name']),// mime_content_type est une function obsolète (je sais), mais bien pratique.
    'contenu'	=> chunk_split(base64_encode(file_get_contents($arrayFiles['tmp_name'])))	//ounch les ressources
    );
    }
    }
    }
     
     
    //===générer les délimiteurs dans l'email ===
    do{
    $leRand=md5(rand());
    $boundary = "-----=".$leRand;
    }while(!strpos($message_txt.$message_html, $leRand) === false); // oui, la vérification là , c'est du zèle.
     
    do{
    $leRand=md5(rand());
    $boundary_alt = "-----=".md5(rand());
    $isOK=true;
    foreach($lesFichiers as $fichier){
    if(!strpos($fichier['contenu'], $leRand) === false){
    $isOK=false;
    }
    }
    }while($isOK==false);//la en plus d'etre du zele, ça bouffe les ressources
     
    //=== le type de retour à la ligne ===
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $destinataire)){
    $passage_ligne = "\r\n";
    }else{
    $passage_ligne = "\n";
    }
     
    //=== header ===
    $headers ="From: ".$expediteur.$passage_ligne;
    if ($replyTo==""){
    $headers.= "Reply-to: ".$expediteur.$passage_ligne;
    }else{
    $headers.= "Reply-to: ".$replyTo.$passage_ligne;
    }
     
    $headers.= "MIME-Version: 1.0".$passage_ligne;
    $headers.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"".$boundary."\"".$passage_ligne;
     
    //=====Création du message.
    $message = $passage_ligne."--".$boundary.$passage_ligne;
    $message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
     
    //=====Ajout du message au format texte.
    if ($message_txt!=""){
    $message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
    $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    }
    //==========
     
    //=====Ajout du message au format HTML.
    if ($message_html!=""){
    $message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
    $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_html.$passage_ligne;
    //On ferme la boundary alternative.
    $message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
    }
    //==========
     
    //pièces jointes
    foreach($lesFichiers as $fileArray)
    {
    $message.= $passage_ligne."--".$boundary.$passage_ligne;
     
    $message.="Content-Type:  name=\"".$fileArray['nom'].".".$fileArray['extension']."\"".$passage_ligne;
    $message.="Content-Transfer-Encoding: base64".$passage_ligne;
    $message.="Content-Disposition: attachment; filename=\"".$fileArray['nom'].".".$fileArray['extension']."\"".$passage_ligne;
    $message.= $passage_ligne.$fileArray['contenu'].$passage_ligne.$passage_ligne;
    }
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    //echo $message;
    //Envoi du mail
    mail($destinataire, $objet, $message, $headers);
    }
    ?>