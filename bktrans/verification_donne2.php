<?php
session_start();
$docs = new DOMDocument(); 
$docs->load($_SESSION['lang']); 
$Configuration_Profil= $docs->getElementsByTagName("Configuration_Profil"); 
$AllUser= $docs->getElementsByTagName("AllUser"); 
$ListePersonels= $docs->getElementsByTagName("ListePersonels"); 
$AllMatriel= $docs->getElementsByTagName("AllMatriel"); 
$Payement_tax= $docs->getElementsByTagName("AllTax"); 
$AllEquipment= $docs->getElementsByTagName("AllEquipment");
$Douane= $docs->getElementsByTagName("Douane");
$AllLocation= $docs->getElementsByTagName("AllLocation");
$AllMagasinage= $docs->getElementsByTagName("AllMagasinage");
$Service_logistique= $docs->getElementsByTagName("Service_logistique");
$Transactionbancaire= $docs->getElementsByTagName("Transactionbancaire");

foreach( $Configuration_Profil as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;$V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;$V15 = $employee->getElementsByTagName( "e15" ); 
  $N15 = $V15->item(0)->nodeValue;$V16 = $employee->getElementsByTagName( "e16" ); 
  $N16 = $V16->item(0)->nodeValue;$V17 = $employee->getElementsByTagName( "e17" ); 
  $N17 = $V17->item(0)->nodeValue;$V18 = $employee->getElementsByTagName( "e18" ); 
  $N18 = $V18->item(0)->nodeValue;$V19 = $employee->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;$V20 = $employee->getElementsByTagName( "e20" ); 
  $N20 = $V20->item(0)->nodeValue;$V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;$V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;$V23 = $employee->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;$V24 = $employee->getElementsByTagName( "e24" ); 
  $N24 = $V24->item(0)->nodeValue;$V25= $employee->getElementsByTagName( "e25" ); 
  $N25 = $V25->item(0)->nodeValue;$V26 = $employee->getElementsByTagName( "e26" ); 
  $N26 = $V26->item(0)->nodeValue;$V27 = $employee->getElementsByTagName( "e27" ); 
  $N27 = $V27->item(0)->nodeValue;$V28 = $employee->getElementsByTagName( "e28" ); 
  $N28 = $V28->item(0)->nodeValue;$V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;$V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;$V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;$V32 = $employee->getElementsByTagName( "e32" );
  $N32 = $V32->item(0)->nodeValue; $V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $employee->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;$V35 = $employee->getElementsByTagName( "e35" ); 
  $N35 = $V35->item(0)->nodeValue;$V36 = $employee->getElementsByTagName( "e36" ); 
  $N36 = $V36->item(0)->nodeValue;
if(isset($_POST['search_Tax'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";

 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_Tax'];
$s = mysql_query("select * from tax where  ( Nom_tax  LIKE '%$el%' OR	valeur  LIKE '%$el%') $crit $req2");
?>
<table class="tablesorter" style="width:70%" > 
			<thead> 
				<tr> <th><font size="1"><?php echo $N10; ?></h4> <br><input type="image" id="reference" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="reference" title="<?php echo $N2; ?>" onclick="findordr('reference','ASC');" ></th>
					<th><font size="1"><?php echo $N11; ?></h4> <br><input type="image" id="fournisseur" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('fournisseur','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="fournisseur" title="<?php echo $N2; ?>" onclick="findordr('fournisseur','ASC');" ></th>
					<th><font size="1"><?php echo $N12; ?></h4> <br><input type="image" id="dossiers" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('dossiers','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="dossiers" title="<?php echo $N2; ?>" onclick="findordr('dossiers','ASC');" ></th> 
    				<th style="width:120px"><font size="1"><?php echo $N13; ?> </h4></th> 
				</tr> 
			</thead> 
			<?php while($admin=mysql_fetch_array($s)){
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1]."%" ;?></td> 
					<td><font size="1"><?php if($admin[2]==1){echo "Client";} if($admin[2]==1 && $admin[3]==1){echo "&nbsp;et&nbsp;";} if($admin[3]==1){echo "Fournisseur";} ?></td> 
    				<td><a href="MenuUtilisation.php?valeur=updateTaxe.php&NT=<?php echo $admin[0];?>&titre=<?php echo $N14; ?>" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N15; ?>"></a> <a href="DeleteTaxe.php?NT=<?php echo $admin[0];?>&type=delete"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N16; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br>
			
                    <li><a href="MenuUtilisation.php?valeur=AjouterTaxe.php&titre=<?php echo $N18; ?> " target="_parent"><input type="submit" value="<?php echo $N17; ?>" class="alt_btn" ></a></li>
                    
<?php } 
if(isset($_POST['search_frais'])){
echo "dd";
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";

 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_frais'];
$s = mysql_query("select * from default_billing  where  ( nb  LIKE '%$el%' OR	description  LIKE '%$el%' OR	Monnaie  LIKE '%$el%' OR	variable  LIKE '%$el%' OR	type  LIKE '%$el%') $crit $req2");

?>
<table class="tablesorter" style="width:70%" > 
			<thead> 
				<tr> 
    				<th><font size="1"><?php echo $N20; ?></h5> <br><input type="image" id="nb" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findfrais('nb','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="nb" title="<?php echo $N2; ?>" onclick="findfrais('nb','ASC');" ></th> 
    				<th><font size="1"><?php echo $N21; ?></h5> <br><input type="image" id="description" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findfrais('description','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="description" title="<?php echo $N2; ?>" onclick="findfrais('description','ASC');" ></th> 
					<th><font size="1"><?php echo $N22; ?></h5> <br><input type="image" id="Monnaie" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findfrais('Monnaie','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Monnaie" title="<?php echo $N2; ?>" onclick="findfrais('Monnaie','ASC');" ></th> 
					<th><font size="1"><?php echo $N23; ?></h5> <br><input type="image" id="variable" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findfrais('variable','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="variable" title="<?php echo $N2; ?>" onclick="findfrais('variable','ASC');" ></th> 
					<th><font size="1"><?php echo $N34; ?></h5> <br><input type="image" id="type" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findfrais('type','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="type" title="<?php echo $N2; ?>" onclick="findfrais('type','ASC');" ></th> 
    				<th colspan="2"><font size="1"><?php echo $N13; ?></h5></th> 
				</tr> 
			</thead> 
			<?php while($admin=mysql_fetch_array($s)){
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1] ;?></td> 
    				<td><font size="1"><?php echo $admin[2] ;?></td> 
    				<td><font size="1"><?php echo $admin[4] ;?></td> 
    				<td><font size="1"><?php echo $admin[3] ;?></td> 
					<td><a href="MenuUtilisation.php?valeur=updateFrais.php&NT=<?php echo $admin[0];?>&titre=<?php echo $N35; ?>" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N15; ?>"></a></td><td><a href="DeleteFrais.php?NT=<?php echo $admin[0];?>&type=delete"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N16; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br>
			
                    <li><a href="MenuUtilisation.php?valeur=Ajouterfrais.php&titre=<?php echo $N24; ?> " target="_parent"><input type="submit" value="<?php echo $N25; ?>" class="alt_btn" ></a></li>
                   
<?php } } 
	foreach( $AllUser as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;$V12 = $employee->getElementsByTagName( "e12" ); 
  $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;
  
 if(isset($_POST['search_user'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";

 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_user'];
$s = mysql_query("select * from users where  ( Email  LIKE '%$el%' OR	type_acces  LIKE '%$el%' OR	Nom_prenom  LIKE '%$el%' OR	CIN  LIKE '%$el%' OR	Telphone  LIKE '%$el%' OR	adress  LIKE '%$el%' ) $crit $req2");
?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
			
				<tr> 
    				<th><font size="1"><?php echo $N2; ?></h5><br><input type="image" id="Email" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Email" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N4; ?></h5><br><input type="image" id="Nom_prenom" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Nom_prenom" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N5; ?></h5><br><input type="image" id="type_acces" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="type_acces" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				 <th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="adress" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="adress" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N3; ?></h5><br><input type="image" id="Telphone" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Telphone" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N7; ?></h5></th> 
				</tr> 
			</thead> 
			<?php while($admin=mysql_fetch_array($s)){
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[3] ;?></td> 
					<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo $admin[5];?></td> 
    				<td><a href="MenuUtilisation.php?valeur=updateUser.php&email=<?php echo $admin[0];?>&titre=<?php echo $N8; ?>" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N9; ?>"></a><a href="DeleteUser.php?email=<?php echo $admin[0];?>&type=delete"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N10; ?>"></a><a href="MenuUtilisation.php?valeur=changerPassword.php&Email=<?php echo $admin[0];?>&titre=<?php echo $N11; ?>" ><input  type="image" src="images/icn_security.png" title="<?php echo $N11; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br>
			 
<?php } }


foreach( $ListePersonels as $employee ) 
{ 
                                  $V1 = $employee->getElementsByTagName("e1"); 
                   $V1 = $employee->getElementsByTagName("e1"); 
  $N1 = $V1->item(0)->nodeValue;  $V2 = $employee->getElementsByTagName("e2"); 
  $N2 = $V2->item(0)->nodeValue;  $V3 = $employee->getElementsByTagName( "e3" ); 
  $N3 = $V3->item(0)->nodeValue;  $V4 = $employee->getElementsByTagName( "e4" ); 
  $N4 = $V4->item(0)->nodeValue;  $V5 = $employee->getElementsByTagName( "e5" ); 
  $N5 = $V5->item(0)->nodeValue;  $V6 = $employee->getElementsByTagName( "e6" ); 
  $N6 = $V6->item(0)->nodeValue;  $V7 = $employee->getElementsByTagName( "e7" ); 
  $N7 = $V7->item(0)->nodeValue;  $V8 = $employee->getElementsByTagName( "e8" ); 
  $N8 = $V8->item(0)->nodeValue;  $V9 = $employee->getElementsByTagName( "e9" ); 
  $N9 = $V9->item(0)->nodeValue;  $V10 = $employee->getElementsByTagName( "e10" ); 
  $N10 = $V10->item(0)->nodeValue;$V11 = $employee->getElementsByTagName( "e11" ); 
  $N11 = $V11->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); 
  $N13 = $V13->item(0)->nodeValue;$V14 = $employee->getElementsByTagName( "e14" ); 
  $N14 = $V14->item(0)->nodeValue;
  
 if(isset($_POST['search_Personel'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";

 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_Personel'];
$s = mysql_query("select * from personel where  ( CIN  LIKE '%$el%' OR	Nom_prenom  LIKE '%$el%' OR	Telphone  LIKE '%$el%' OR	adress  LIKE '%$el%' OR	Sexe  LIKE '%$el%' OR	Email  LIKE '%$el%' OR	Compte_bancaire  LIKE '%$el%' OR	Fonction  LIKE '%$el%') $crit $req2");
?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
			
				<tr> 
    				<th><font size="1"><?php echo $N2; ?></h5><br><input type="image" id="CIN" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="CIN" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N3; ?></h5><br><input type="image" id="Nom_prenom" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Nom_prenom" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N4; ?></h5><br><input type="image" id="Sexe" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Sexe" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				 <th><font size="1"><?php echo $N5; ?></h5><br><input type="image" id="Fonction" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="adress" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="Telphone" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Telphone" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N7; ?></h5><br><input type="image" id="Email" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Email" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N8; ?></h5><br><input type="image" id="Compte_bancaire" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Compte_bancaire" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N11; ?></h5></th> 
				</tr> 
			</thead> 
			<?php while($admin=mysql_fetch_array($s)){
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1] ;?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[5];?></td> 
					<td><font size="1"><?php echo $admin[7];?></td> 
    				<td><a href="MenuUtilisation.php?valeur=updatePersonel.php&CIN=<?php echo $admin[0];?>&titre=<?php echo $N14; ?>&tt=Les Personles" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N9; ?>"></a><a href="DeletePersonel.php?CIN=<?php echo $admin[0];?>&type=delete&titre=Les Personles"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N10; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table>
			 
<?php } }
  foreach( $AllMatriel as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" ); $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" ); $N18 = $V18->item(0)->nodeValue;
  
 if(isset($_POST['search_Matriel'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";

 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_Matriel'];
$s = mysql_query("select * from hardware where  ( id  LIKE '%$el%' OR	Nom  LIKE '%$el%' OR	Designation  LIKE '%$el%' OR	date_achat LIKE '%$el%' OR	Duree_vie  LIKE '%$el%') $crit $req2");
	$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th><font size="1">id</h5><br><input type="image" id="id" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="id" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="Nom" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Nom" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N8; ?></h5><br><input type="image" id="date_achat" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="date_achat" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N11; ?></h5><br><input type="image" id="designation" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="designation" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N10; ?></h5><br><input type="image" id="Telephone1" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Duree_vie" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N14; ?></h5><br></th> 
    				
					<th><font size="1"><?php echo $N16; ?></h5><br></th> 
    				<th><font size="1"><?php echo $N12; ?></h5></th> 
				</tr> 
			</thead> 
			<?php 
			
			$t_dep=0;
			$t_VA=0;
			
			while($admin=mysql_fetch_array($s)){
			$dep=0;
			$D_A=explode('-',$admin[4]);
			$date_now=date('Y-m-d');
			$anne_ex=($D_A[0]+$admin[6]);
			$date_ex=$D_A[2]."/".$D_A[1]."/".$anne_ex;
			$D_N=explode('-',$date_now);
			if($admin[6]!=0 && $admin[6]!=''){
			$mont_ex=$admin[5]/$admin[6];
			$aug=$D_N[0]-$D_A[0];
			if($aug<=$admin[6]){
			$dep=$aug*$mont_ex;
			}
			}
			$val=$admin[5]-$dep;
				$t_dep=$t_dep+$dep;
			$t_VA=$t_VA+$admin[5];
			
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1];?></td> 
    				<td><font size="1"><?php echo $admin[4];?></td> 
    				<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo  number_format($dep,2,',','.')."/".number_format($admin[5],2,',','.')."&nbsp;".$MN1[0]; ?></td> 
					
					<td><font size="1"><?php echo $date_ex;?></td> 
    				<td><a href="MenuUtilisation.php?valeur=UpdateMatriel.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $N15; ?>&val=<?php echo $val; ?>" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N15; ?>"></a><a href="deletematriel.php?NomMat=<?php echo $admin[0];?>"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
<tr  bgcolor="d5d7dc"  height="25"> 
    				<td colspan="5"><h6><?php echo $N18; ?>(<?php echo $N14; ?>)</h6></td> 
    				<td colspan="3"><h6><?php echo  number_format($t_dep,2,',','.')."/".number_format($t_VA,2,',','.')."&nbsp;".$MN1[0]; ?></h6></td> 
					
					</tr>
			 </table><br>
<?php } } 

  foreach( $AllEquipment as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  
 if(isset($_POST['search_Equipment'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";

 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }

include ("Connection.php");
$el=$_POST['search_Equipment'];
$ett=$el;
 if($el=="disponible"){
 $ett=1;
 }
  if($el=="indisponible"){
 $ett=0;
 }
$s = mysql_query("select * from equipment where  ( Num  LIKE '%$el%' OR	Marque  LIKE '%$el%' OR	Etat  LIKE '%$ett%' OR	Kilometrage_Debut LIKE '%$el%' OR	Kilometrage_Fin  LIKE '%$el%' OR	Description  LIKE '%$el%') $crit $req2");

				?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th><font size="1">id</h5><br><input type="image" id="Num" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Num" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="Marque" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Marque" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N8; ?></h5><br><input type="image" id="Kilometrage_Debut" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Kilometrage_Debut" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N9; ?></h5><br><input type="image" id="Kilometrage_Fin" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Kilometrage_Fin" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N10; ?></h5><br><input type="image" id="Description" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Description" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N7; ?></h5><br><input type="image" id="Etat" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Etat" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N12; ?></h5></th> 
				</tr> 
			</thead> 
			
			<?php 

			while($admin=mysql_fetch_array($s)){
			if($admin[2]==1){
			$etat="<input  type=image src=images/ico_ok.png title='$N11'>";
			}else{
			$etat="<input  type=image src=images/ico_cancel.png title='$N14' >";
			
			}
		
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1];?></td> 
    				<td><font size="1"><?php echo $admin[3];?></td> 
    				<td><font size="1"><?php echo $admin[4];?></td> 
					<td><font size="1"><?php echo $admin[5];?></td> 
					<td><font size="1"><?php echo $etat;?></td> 
					<td><a href="MenuUtilisation.php?valeur=UpdateEquipment.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $N15; ?>" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N15; ?>"></a><a href="deleteEquipment.php?NomMat=<?php echo $admin[0];?>"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br>
<?php } }

 foreach( $AllLocation as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" ); $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" ); $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" ); $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" ); $N20 = $V20->item(0)->nodeValue;
  
 if(isset($_POST['search_Location'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";
$req3="";
$stat=$_POST['stat'];
 if($stat!="2"){
 $req3=" Etat=$stat AND";
 }
 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }

include ("Connection.php");
$el=$_POST['search_Location'];
$ett=$el;
 if($el=="disponible"){
 $ett=1;
 }
  if($el=="indisponible"){
 $ett=0;
 }
$s = mysql_query("select * from location where $req3 ( Reference  LIKE '%$el%' OR	Client  LIKE '%$el%' OR	etat  LIKE '%$ett%' OR	Kilometrage_debut LIKE '%$el%' OR	Kilometrage_fin  LIKE '%$el%'  OR	Date_debut LIKE '%$el%' OR	Date_fin  LIKE '%$el%' OR	Equipment  LIKE '%$el%' OR	Description  LIKE '%$el%') $crit $req2");
				?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th><font size="1">id</h5><br><input type="image" id="Reference" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Reference" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="Client" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Client" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N8; ?></h5><br><input type="image" id="Dossier" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Dossier" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N9; ?></h5><br><input type="image" id="Kilometrage_Debut" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Kilometrage_debut" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N10; ?></h5><br><input type="image" id="Kilometrage_Fin" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Kilometrage_fin" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N7; ?></h5><br><input type="image" id="Equipment" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Equipment" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N17; ?></h5><br><input type="image" id="Date_debut" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Date_debut" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N18; ?></h5><br><input type="image" id="Date_debut" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Date_fin" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N11; ?></h5><br><input type="image" id="etat" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="etat" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N12; ?></h5></th> 
				</tr> 
			</thead> 
			
			<?php 

			while($admin=mysql_fetch_array($s)){
			if($admin[7]==1){
			$etat="<input  type=image src=images/ico_ok.png title='$N14'>";
			}else{
			$etat="<input  type=image src=images/ico_cancel.png title='$N19' >";
			
			}
		
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1];?></td> 
    				<td><font size="1"><?php echo $admin[2];?></td> 
    				<td><font size="1"><?php echo $admin[5];?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo $admin[8];?></td> 
					<td><font size="1"><?php echo $admin[3];?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
					<td><font size="1"><?php echo $etat;?></td> 
					<td><a href="MenuUtilisation.php?valeur=UpdateLocation.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $N15; ?>" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N15; ?>"></a><a href="deleteLocation.php?NomMat=<?php echo $admin[0];?>"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br><?php } }
			 
			 foreach( $AllMagasinage as $employee ) 
{ 
 $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" ); $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" ); $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" ); $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" ); $N20 = $V20->item(0)->nodeValue;
  
 if(isset($_POST['search_Magasinage'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";
 $req3="";
$stat=$_POST['stat'];
 if($stat!="2"){
 $req3=" Etat=$stat AND";
 }
 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }

include ("Connection.php");
$el=$_POST['search_Magasinage'];
$ett=$el;
 if($el=="disponible"){
 $ett=1;
 }
  if($el=="indisponible"){
 $ett=0;
 }
$s = mysql_query("select * from magasinage where  $req3 ( Reference  LIKE '%$el%' OR	Client  LIKE '%$el%' OR	etat  LIKE '%$el%' OR	Date_debut LIKE '%$el%' OR	Date_fin  LIKE '%$el%'  OR	Description  LIKE '%$el%') $crit $req2");
				?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th><font size="1">id</h5><br><input type="image" id="Reference" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Reference" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="Client" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Client" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N8; ?></h5><br><input type="image" id="Dossier" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Dossier" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N7; ?></h5><br><input type="image" id="Description" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Description" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N17; ?></h5><br><input type="image" id="Date_debut" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Date_debut" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N18; ?></h5><br><input type="image" id="Date_debut" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Date_fin" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N11; ?></h5><br><input type="image" id="etat" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="etat" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N12; ?></h5></th> 
				</tr> 
			</thead> 
			
			<?php 

			while($admin=mysql_fetch_array($s)){
			if($admin[5]==1){
			$etat="<input  type=image src=images/ico_ok.png title='$N14'>";
			}else{
			$etat="<input  type=image src=images/ico_cancel.png title='$N19' >";
			
			}
		
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1];?></td> 
    				<td><font size="1"><?php echo $admin[2];?></td> 
    				<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo $admin[3];?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
					<td><font size="1"><?php echo $etat;?></td> 
					<td><a href="MenuUtilisation.php?valeur=UpdateMagasinage.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $N15; ?>" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N15; ?>"></a><a href="deleteMagasinage.php?NomMat=<?php echo $admin[0];?>"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br><?php } }


			 			 foreach( $Service_logistique as $employee ) 
{ 
 $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" ); $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" ); $N20 = $V20->item(0)->nodeValue;
 if(isset($_POST['search_logistique'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";
 $req3="";
$stat=$_POST['stat'];
 if($stat!="2"){
 $req3=" Etat=$stat AND";
 }
 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }

include ("Connection.php");
$el=$_POST['search_logistique'];
 
$s = mysql_query("select * from  logistics_services where  $req3  ( Reference  LIKE '%$el%' OR	Client  LIKE '%$el%' OR	etat  LIKE '%$el%'   OR	Description  LIKE '%$el%') $crit $req2");
				?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th><font size="1">id</h5><br><input type="image" id="Reference" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Reference" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="Client" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Client" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N8; ?></h5><br><input type="image" id="Dossier" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Dossier" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N7; ?></h5><br><input type="image" id="Description" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Description" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					 <th><font size="1"><?php echo $N11; ?></h5><br><input type="image" id="etat" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="etat" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N12; ?></h5></th> 
				</tr> 
			</thead> 
			
			<?php 

			while($admin=mysql_fetch_array($s)){
			if($admin[3]==1){
			$etat="<input  type=image src=images/ico_ok.png title='$N14'>";
			}else{
			$etat="<input  type=image src=images/ico_cancel.png title='$N19' >";
			
			}
		
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[1];?></td> 
    				<td><font size="1"><?php echo $admin[2];?></td> 
    				<td><font size="1"><?php echo $admin[4];?></td> 
					
					<td><font size="1"><?php echo $etat;?></td> 
					<td><a href="MenuUtilisation.php?valeur=UpdateLogisticService.php&NomMat=<?php echo $admin[0];?>&titre=<?php echo $N15; ?>" ><input  type="image" src="images/icn_edit.png" title="<?php echo $N15; ?>"></a><a href="deleteLogisticService.php?NomMat=<?php echo $admin[0];?>"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br><?php } }
			 
			 
			 foreach( $Transactionbancaire as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
  $V5 = $employee->getElementsByTagName( "e5" ); $N5 = $V5->item(0)->nodeValue;
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue; 
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" );  $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" );  $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" );  $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" );  $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" );  $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" );  $N17 = $V17->item(0)->nodeValue;

  $valeur="allocate_argent.php";
 if(isset($_POST['search_Trans'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req2="";
 $req3="";
 $req4="";
$stat=$_POST['stat'];
 if($stat=="0"){
 $req3="";
 }else{
 $req3="type='$stat' AND ";
 
 }
 $etat=$_POST['etat'];
 if($etat=="0"){
 $req4="";
 }else{
 $req4=" num_compte='$etat' AND ";
 
 }
 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }

include ("Connection.php");
$el=$_POST['search_Trans'];
 
$s = mysql_query("select * from  money where  $req3  $req4  ( id  LIKE '%$el%' OR	client  LIKE '%$el%' OR	type  LIKE '%$el%'   OR	Description   LIKE '%$el%' OR Date LIKE '%$el%') $crit $req2 ");
				?>
<table class="tablesorter" style="width:100%" > 

			<thead> 
				<tr > 
    				<th><font size="1"><?php echo $N5; ?></h5><br><input type="image" id="id" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="id" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="Description" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Description" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N7; ?></h5><br><input type="image" id="Date" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Date" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				 <th><font size="1"><?php echo $N9; ?></h5><br><input type="image" id="num_compte" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="num_compte" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N10; ?></h5><br><input type="image" id="client" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="client" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N12; ?></h5><br><input type="image" id="valeur" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="valeur" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N13; ?></h5><br><input type="image" id="MN_Non_allue" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="MN_Non_allue" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
				
    				<th colspan="2"><font size="1"><?php echo $N14; ?></h4></th> 
				</tr> 
			</thead> 
			<?php 
			while($admin=mysql_fetch_array($s) ){
$banques=mysql_query("select * from  bank_account where Numero_Compte='$admin[6]' ");
$banquess=mysql_fetch_array($banques);
$pos = strpos($admin[0],'PAY');

         ?>
			 
				<tr  bgcolor="d5d7dc" style="height:10px;"> 
   					<td><font size="1"><?php echo $admin[0];?></font></td> 
    				<td><font size="1"><?php echo $admin[1];?></font></td> 
					<td><font size="1"><?php echo $admin[2];?></font></td>				
					<td><font size="1"><?php echo "$banquess[1]($admin[6])";?></font></td>							
					<td><font size="1"><?php echo $admin[9];?></font></td>				
					<td><font size="1"><?php echo number_format($admin[7],2,',','.');?>&nbsp;<?php echo $banquess[7];?></font></td>				
					<td><font size="1"><?php echo number_format($admin[8],2,',','.');?>&nbsp;<?php echo $banquess[7];?></font></td>				
					<td width="5"><?php if($admin[8]==0){ ?><input  type="image" src="images/nallocate.png" title=""> <?php }else{ ?> 
					<a href="MenuUtilisation.php?valeur=<?php echo $valeur; ?>&ref=<?php echo $admin[0];?>&client=<?php echo $admin[9];?>&compte=<?php echo $admin[6];?>" ><input  type="image" src="images/allocate.png" title=""></a>
					<?php if($admin[3]=='out'){ ?>
					<a href="AjouterAuCaisse.php?ref=<?php echo $admin[0];?>&compte=<?php echo $admin[6];?>" ><input  type="image" src="images/setting.png" title="<?php echo $N16; ?>" onclick="return confirm('<?php echo $N17; ?>')"></a>
					
					<?php } } ?></td>
				</tr> 

				
			
<?php }

?>
			 </table><br><?php } }
			 
	  
			 foreach( $Payement_tax as $employee ) 
{ 
   $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  $V17 = $employee->getElementsByTagName( "e17" ); $N17 = $V17->item(0)->nodeValue;
  $V18 = $employee->getElementsByTagName( "e18" ); $N18 = $V18->item(0)->nodeValue;
  $valeur="allocate_argent.php";
 if(isset($_POST['search_Tax_period'])){
 include ("Connection.php");
 $DD=$_POST['Date1'];
 $DF=$_POST['Date2'];
 $Tax=$_POST['tax'];
 $DDbt=explode('-',$DD);
 $DFF=explode('-',$DF);
 if(!isset($DDbt[1])){
 $DDbt=explode('/',$DD);
 
}
 if(!isset($DDbt[1])){
 $DFF=explode('-',$DF);
 
}
 

$el=$_POST['search_Tax_period'];

 
//$s = mysql_query("select * from invoice"  );
				?>
<?php
				
				$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
				?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th><font size="1"><?php echo $N13; ?></h5><br><input type="image" id="id" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="id" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h5><br><input type="image" id="Nom" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Nom" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N8; ?></h5><br><input type="image" id="date_achat" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="date_achat" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N11; ?></h5><br><input type="image" id="designation" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="designation" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 	
    				<th><font size="1"><?php echo $N9; ?></h5><br><input type="image" id="designation" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="designation" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 	
    				<th><font size="1"><?php echo $N10; ?></h5><br><input type="image" id="designation" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="designation" title="<?php echo $N2; ?>" onclick="findordr(this,'ASC');" ></th> 	
    				<th><font size="1"><?php echo $N12; ?></h5></th> 
				</tr> 
			</thead> 
			<?php 
			$s=mysql_query("select * from tax  where Nom_tax='$Tax' ");
			$i=0;
			$TTC=0;
			$TTINV=0;
			$TTP=0;
			while($admin=mysql_fetch_array($s)){
			$t_TX_INV=0;
			$t_TX_PURCH=0;
			$TT_Pay=0;
			$MDP=0;
			$FPT=mysql_query("select Reference  from element_invoice  where 	Type_tax='$Tax' GROUP BY Reference ");
			
		 while($FPTT=mysql_fetch_array($FPT)){
			$invoices=mysql_query("select * from invoice where  id_facture='$FPTT[0]' AND date_lancement >= '$DD' AND date_lancement <= '$DF'  ");
			
			while($invoice=mysql_fetch_array($invoices)){	
		$inv=mysql_query("select * from element_invoice  where 	Type_tax='$admin[0]' AND Reference='$invoice[3]'");
		 $PFact=mysql_query("SELECT * FROM  `payment_tax_invoice` where Reference='$invoice[3]'   ");
			 if(!($PFactr=mysql_fetch_array( $PFact))){
			
		while($tax1=mysql_fetch_array($inv)){
		
		$TX=$tax1[2]*$tax1[3]*$tax1[4]*$tax1[6]*0.01;
		
		 $TxMNLocal=$TX*$invoice[17];
		$t_TX_INV=$t_TX_INV+$TxMNLocal;
		
		}}
		}}
		$FPT=mysql_query("select reference  from element_purchase  where 	Type_tax='$Tax' GROUP BY reference ");
			
		 while($FPTT=mysql_fetch_array($FPT)){
		$invoices=mysql_query("select * from purchase  where reference='$FPTT[0]' AND date_commande >= '$DD' AND date_commande <= '$DF'  AND 	etat_commande='1' ");
		while($invoice=mysql_fetch_array($invoices)){
	
		$purch=mysql_query("select * from element_purchase  where 	Type_tax='$admin[0]' AND reference='$invoice[0]'");
		$PFact=mysql_query("SELECT * FROM  `payment_tax_purchase` where Reference='$invoice[0]'   ");
			 if(!($PFactr=mysql_fetch_array( $PFact))){
		
		while($tax1=mysql_fetch_array($purch)){
		
		$TX=$tax1[7]*$tax1[3]*$tax1[4]*$tax1[6]*0.01;
		
		 $TxMNLocal=$TX*$invoice[9];
		$t_TX_PURCH=$t_TX_PURCH+$TxMNLocal;
		
		}}}}
			$TT_Pay=$t_TX_INV-$t_TX_PURCH;	
			
			
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $DD."&rarr;&rarr;".$DF;?></td> 
    				<td><font size="1"><?php echo $admin[0].'('.$admin[1]."%&nbsp;)";?></td> 
    				<td><font size="1"><?php echo  number_format($t_TX_INV,2,',','.')."&nbsp;".$MN1[0]; ?></td> 
    				<td><font size="1"><?php echo  number_format($t_TX_PURCH,2,',','.')."&nbsp;".$MN1[0]; ?></td> 
    				<td><font size="1"><?php echo  number_format($TT_Pay,2,',','.')."&nbsp;".$MN1[0]; ?></td> 
    				<td><font size="1"><?php echo  number_format($TT_Pay,2,',','.')."&nbsp;".$MN1[0]; ?></td> 
					<td>
					<?php
					if($TT_Pay >0 ){
					
					?>
					<a href="MenuUtilisation.php?valeur=payee_Tax.php&Tax=<?php echo $admin[0];?>&titre=<?php echo $N15.'('.$admin[0].')'."&nbsp;".$N14."&nbsp;".$DD."&nbsp;".$N16."&nbsp;".$DF;?> &MNPAY=<?php echo $TT_Pay; ?>&DD=<?php echo $DD; ?>&DF=<?php echo $DF; ?>" ><input  type="image" src="images/coutE.png" title="<?php echo $N15; ?>"></a></td> 
				
				<?php 
				}else{
				?>
				<a href="#" ><input  type="image" src="images/NonPay.png" title="<?php echo $N15; ?>"></a>
				<?php
				}
				?>
				
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br>
			 <table><tr>
			 <?php  
			 if($Tax!=""){
			 $FPT=mysql_query("select Reference  from element_invoice  where 	Type_tax='$Tax' GROUP BY Reference ");
			 while($FPTT=mysql_fetch_array($FPT)){
			 
			 $invoices=mysql_query("select * from invoice where id_facture='$FPTT[0]' AND date_lancement >= '$DD' AND date_lancement <= '$DF'  ");

			while($invoice=mysql_fetch_array($invoices)){
			 $PFact=mysql_query("SELECT * FROM  `payment_tax_invoice` where Reference='$invoice[3]'   ");
			
			 if(!($PFactr=mysql_fetch_array( $PFact))){
			  ?>
			 <td><h5><?php echo $invoice[3]; ?>
			<input type="image" src="images/ico_cancel.png" >
			</h5>
			</td>
		<?php	}else{
		?>
		<td><h5><?php echo $invoice[3]; ?>
			<input type="image" src="images/ico_ok.png" title=""></h5>
			</td>
		<?php
		
		}}}
		echo "</tr></table><table><tr>";
		$FPT=mysql_query("select reference  from element_purchase  where 	Type_tax='$Tax' GROUP BY reference ");
			
		 while($FPTT=mysql_fetch_array($FPT)){
$invoices=mysql_query("select * from purchase  where reference='$FPTT[0]' AND date_commande >= '$DD' AND date_commande <= '$DF' AND 	etat_commande='1' ");
		while($invoice=mysql_fetch_array($invoices)){
			 $PFact=mysql_query("SELECT * FROM  `payment_tax_purchase` where Reference='$invoice[0]'   ");
			 if(!($PFactr=mysql_fetch_array( $PFact))){
			 
			?>
			 <td><h5><?php echo $invoice[0]; ?>
			<input type="image" src="images/ico_cancel.png" ></h5>
			</td>
		<?php
			 }else{
			 ?>
			 <td><h5><?php echo $invoice[0]; ?>
			<input type="image" src="images/ico_ok.png" title=""></h5>
			</td>
			 <?php
			 }
			 }}
			 	echo "</tr></table>";
				}
			 }}
			   foreach( $Douane as $employee ) 
{ 
  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V6 = $employee->getElementsByTagName( "e6" ); $N6 = $V6->item(0)->nodeValue;
  $V7 = $employee->getElementsByTagName( "e7" ); $N7 = $V7->item(0)->nodeValue;
  $V8 = $employee->getElementsByTagName( "e8" ); $N8 = $V8->item(0)->nodeValue;
  $V9 = $employee->getElementsByTagName( "e9" ); $N9 = $V9->item(0)->nodeValue;
  $V10 = $employee->getElementsByTagName( "e10" ); $N10 = $V10->item(0)->nodeValue;
  $V11 = $employee->getElementsByTagName( "e11" ); $N11 = $V11->item(0)->nodeValue;
  $V12 = $employee->getElementsByTagName( "e12" ); $N12 = $V12->item(0)->nodeValue;
  $V13 = $employee->getElementsByTagName( "e13" ); $N13 = $V13->item(0)->nodeValue;
  $V14 = $employee->getElementsByTagName( "e14" ); $N14 = $V14->item(0)->nodeValue;
  $V15 = $employee->getElementsByTagName( "e15" ); $N15 = $V15->item(0)->nodeValue;
  $V16 = $employee->getElementsByTagName( "e16" ); $N16 = $V16->item(0)->nodeValue;
  
 if(isset($_POST['OPNOAPP'])){

include ("Connection.php");
$el=$_POST['OPNOAPP'];
$app=$_POST['app'];
$file="1=1";
if($el!=""){
$file="Ref_doss='$el'";
}
$appr="1=1";
if($app=="0"){
$appr="Num_appurement=''";
}elseif($app=="1"){
$appr="Num_appurement!=''";
}else{
$appr="1=1";
}
$ex = mysql_query("select * from export where $file AND  $appr  ");
$ex1 = mysql_query("select * from export where $file AND  $appr  ");
$imp = mysql_query("select * from import where $file  AND $appr");
$imp1 = mysql_query("select * from import where $file  AND $appr");
if(mysql_fetch_array($ex1)|| mysql_fetch_array($imp1)){
				?>
<table class="table table-striped table-bordered table-hover" id="sample_1"   > 
			<thead> 
				<tr> 
   					<th><font size="1"><?php echo $N1; ?></h5></th>
					<th><font size="1"><?php echo $N2; ?></h5></th> 
					<th><font size="1"><?php echo $N3; ?></h5></th> 
    				<th><font size="1"><?php echo $N6; ?></h5></th> 
					 <th><font size="1"><?php echo $N7; ?></h5></th> 
					 <th><font size="1"><?php echo $N8; ?></h5></th> 
    					</tr> 
			</thead> 
			
			<?php 

			while($export=mysql_fetch_array($ex)){
			

	$app = mysql_query("select * from  before_payement  where Num_appurement='$export[29]'");
		$appurment=mysql_fetch_array($app);
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $export[0];?></td> 
    				<td><font size="1"><?php echo $export[31];?></td> 
    				<td><font size="1"><?php echo $export[28];?></td> 
    				<td><font size="1"><?php echo $export[9];?></td> 
					<td><font size="1"><?php  if($export[10]==""){echo "------";}else{ echo $export[10]; } ?></td> 
					<td><font size="1"><?php echo $export[29];?></td> 
						</tr> 
				
			</tbody> 
			
<?php }
		while($export=mysql_fetch_array($imp)){
		
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
    				<td><font size="1"><?php echo $export[11];?></td> 
    				<td><font size="1"><?php echo $export[40];?></td> 
    				<td><font size="1"><?php echo $export[28];?></td> 
    				<td><font size="1"><?php echo $export[8];?></td> 
					<td><font size="1"><?php  if($export[9]==""){echo "------";}else{ echo $export[10]; } ?></td> 
					<td><font size="1"><?php echo $export[29];?></td> 
						</tr> 
				
			</tbody> 
			
<?php }

?>

			 </table><br><?php 
}else{
echo "<font color=red size=2>$N10</font>";

}
} }
 if(isset($_POST['search_Sold'])){
$Num=$_POST['search_Sold'];
include ("Connection.php");
if($Num!=''){
$BQ=mysql_query("select * from bank_account where Numero_Compte='$Num' ");
$BNQ=mysql_fetch_array($BQ);
echo $BNQ[6].'&&&!!!'.$BNQ[7];
}
}


?>
			 
 