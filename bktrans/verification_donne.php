<?php
session_start();

$doc = new DOMDocument(); 
$docs = new DOMDocument(); 
$dcs = new DOMDocument(); 
$doc->load($_SESSION['lang_out_Manu']); 
$docs->load($_SESSION['lang']); 
$employees= $doc->getElementsByTagName("verification_donne"); 
$commande= $docs->getElementsByTagName("AllCommande"); 
$commandeAP= $docs->getElementsByTagName("AllCommandePretApeye"); 
$ALLOP= $docs->getElementsByTagName("AllOperation"); 
$Client= $docs->getElementsByTagName("Allclient"); 
$Financ_periode= $docs->getElementsByTagName("Financ_periode"); 
$Facture= $docs->getElementsByTagName("AllFacture"); 
$Compte= $docs->getElementsByTagName("AllCompte"); 
$Fournisseur= $docs->getElementsByTagName("Fournisseur"); 
$Offre= $docs->getElementsByTagName("AllOffre"); 
$files= $docs->getElementsByTagName("AllDossier"); 
$ALLNC= $docs->getElementsByTagName("AllCommandeNonConfirmer"); 
$detaille_payement= $docs->getElementsByTagName("detaille_payement"); 
$PSalaire= $docs->getElementsByTagName("Paiement_salaire"); 
$TX_Pe= $docs->getElementsByTagName("AllTax"); 
				
$file_Menu =$_SESSION['lang_Manu'];
 
$dcs->load($file_Menu); 
$Menu = $dcs->getElementsByTagName("MenuUtilisation"); 
				
$url=""; 

foreach( $Menu as $Menu_util ) 
{ 
                                  $V19 = $Menu_util->getElementsByTagName( "e19" ); 
  $N19 = $V19->item(0)->nodeValue;$V23 = $Menu_util->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;$V53 = $Menu_util->getElementsByTagName( "e53" ); 
  $N53 = $V53->item(0)->nodeValue;
  $url=$N19.".".$N23.".".$N53; 
  }
foreach( $employees as $employee ) 
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
  $V18 = $employee->getElementsByTagName( "e18" );  $N18 = $V18->item(0)->nodeValue;
  $V19 = $employee->getElementsByTagName( "e19" );  $N19 = $V19->item(0)->nodeValue;
  $V20 = $employee->getElementsByTagName( "e20" );  $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" );  $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" );  $N22 = $V22->item(0)->nodeValue;
  $V23 = $employee->getElementsByTagName( "e23" );  $N23 = $V23->item(0)->nodeValue;
  $V24 = $employee->getElementsByTagName( "e24" );  $N24 = $V24->item(0)->nodeValue;
  $V25 = $employee->getElementsByTagName( "e25" );  $N25 = $V25->item(0)->nodeValue;
  $V26 = $employee->getElementsByTagName( "e26" );  $N26 = $V26->item(0)->nodeValue;
  $V27 = $employee->getElementsByTagName( "e27" );  $N27 = $V27->item(0)->nodeValue;
  $V28 = $employee->getElementsByTagName( "e28" );  $N28 = $V28->item(0)->nodeValue;
  $V29 = $employee->getElementsByTagName( "e29" );  $N29 = $V29->item(0)->nodeValue;
  $V30 = $employee->getElementsByTagName( "e30" );  $N30 = $V30->item(0)->nodeValue;
  $V31 = $employee->getElementsByTagName( "e31" );  $N31 = $V31->item(0)->nodeValue;
  $V32 = $employee->getElementsByTagName( "e32" );  $N32 = $V32->item(0)->nodeValue;
  $V33 = $employee->getElementsByTagName( "e33" );  $N33 = $V33->item(0)->nodeValue;


include ("Connection.php");

if(isset($_POST["Monnaie"])){
$abs=$_POST["Monnaie"];
$s = mysql_query("SELECT Nom_Monnaie FROM currency where Monnaie_utliser='1'");
$r= mysql_fetch_array($s);
$sql = mysql_query("UPDATE  `currency` SET  `Monnaie_utliser` =  '0' ");
$etat_up= mysql_query("UPDATE  `currency` SET  `Monnaie_utliser` =  '1' WHERE  `currency`.`Abreviation_Monnai` =  '$abs'");
ECHO $etat_up;
}

if(isset($_POST["payyer_facture"])){

$abs=$_POST["payyer_facture"];
$ab = explode(',',$abs);
$sql = mysql_query("UPDATE  `invoice` SET  `etat_payement` ='1' ,`Jours_echue`='$ab[1]' WHERE  `invoice`.`id_facture` =  '$ab[0]'"); 
echo $sql;
}
if(isset($_POST["abs"])){
$abs=$_POST["abs"];
$sql = mysql_query("SELECT Valeur_Devise FROM currency where Abreviation_Monnai='$abs'");
$row = mysql_fetch_array($sql);
echo $row[0];
}
if(isset($_POST["code"])){
$group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");
$i=0;$a=0;
$_SESION["'".$a."'"]="text";

while($ad=mysql_fetch_array($group)){
$i++;
$a=$i-1;
if($_SESION["'".$a."'"]!=$ad[0]){
?>
<option value="">Compte</option>
<optgroup label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup>
<?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' AND  etat_affiche like '1%'");
while($ab=mysql_fetch_array($a)){
?>
<option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option>
<?php }}
$_SESION["'".$i."'"]=$ad[0];
}
}
if(isset($_POST["client"])){
$proj=$_POST['projet'];
$cl=$_POST["client"];
$doss=mysql_query("SELECT * FROM  files where Reference='$proj'");
$pr=mysql_fetch_array($doss);
$group=mysql_query("SELECT * FROM  `costs_value` P,  `default_billing` ");
?>
 <option value="" selected>couts </option>
<?php 
while($ab=mysql_fetch_array($group)){
?>
<option value="<?php echo $ab[0];?>"><?php echo $ab[8]; ?></option>

<?php }
}


if(isset($_POST["doss"])){
$proj=$_POST['doss'];
$ad = mysql_query("select Ref_doss,client from operation where id='$proj'");
if(strstr($proj,"MG")) { 
$ad1 = mysql_query("select client,Dossier  from magasinage where reference='$proj'");
while($admi=mysql_fetch_array($ad1)){
$cl = mysql_query("select terme  from custemer where Nom_Soc='$admi[1]'");
$term=mysql_fetch_array($cl);


?>
<option value="<?php echo $admi[0];?>"><?php echo $admi[0];?></option>&&<option value="<?php echo $admi[1];?>"><?php echo $admi[1];?></option>

<?php 
$jrs=$term[0]+1;  echo "&&".date("Y-m-d", strtotime("+$jrs days"));
 }

}elseif(strstr($proj,"LCT")) { 
$ad2 = mysql_query("select client,Dossier  from location where reference='$proj'");
while($admi=mysql_fetch_array($ad2)){
$cl = mysql_query("select terme  from custemer where Nom_Soc='$admi[1]'");
$term=mysql_fetch_array($cl);;
?>
<option value="<?php echo $admi[0];?>"><?php echo $admi[0];?></option>&&<option value="<?php echo $admi[1];?>"><?php echo $admi[1];?></option>

<?php $jrs=$term[0]+1;  echo "&&".date("Y-m-d", strtotime("+$jrs days"));}
}elseif(strstr($proj,"LS")) { 
$ad3 = mysql_query("select client,Dossier  from logistics_services where reference='$proj'");
while($admi=mysql_fetch_array($ad3)){
$cl = mysql_query("select terme  from custemer where Nom_Soc='$admi[1]'");
$term=mysql_fetch_array($cl);
?>
<option value="<?php echo $admi[0];?>"><?php echo $admi[0];?></option>&&<option value="<?php echo $admi[1];?>"><?php echo $admi[1];?></option>

<?php $jrs=$term[0]+1;  echo "&&".date("Y-m-d", strtotime("+$jrs days"));}
}else{

while($admi=mysql_fetch_array($ad)){
$cl = mysql_query("select terme  from custemer where Nom_Soc='$admi[1]'");
$term=mysql_fetch_array($cl);
?>
<option value="<?php echo $admi[1];?>"><?php echo $admi[1];?></option>&&<option value="<?php echo $admi[0];?>"><?php echo $admi[0];?></option>


<?php $jrs=$term[0]+1;  echo "&&".date("Y-m-d", strtotime("+$jrs days"));}}
}
if(isset($_POST["Dech"])){
$four=$_POST["Dech"];
$sup = mysql_query("select terme_paiement from supplier where Nom_Soc='$four'");
$term=mysql_fetch_array($sup);
$jrs=$term[0]+1;  echo date("Y-m-d", strtotime("+$jrs days"));
}
if(isset($_POST["cl"])){

if($_POST["id"]!=Null){
$cl=$_POST["cl"];
$id=$_POST["id"];
$group=mysql_query("SELECT * FROM  `costs_value` P,  `default_billing` S WHERE P.`Numro` = S.nb  AND client =  '$cl'  AND nb=$id");

if($ab=mysql_fetch_array($group)){
echo $ab[2]."&".$ab[5]."&".$ab[7];
}else{
$group=mysql_query("SELECT * FROM    `default_billing` WHERE  nb=$id");
$ab=mysql_fetch_array($group);
echo $ab[2]."&".$ab[1]."&".$ab[3];
}
}else{
$def2 = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser=1 ");
$def_2 = mysql_fetch_array($def2);
$def = mysql_query("SELECT Abreviation_Monnai FROM currency");
while($def_monnaie = mysql_fetch_array($def)){
if($def_2[0]==$def_monnaie[0]){
echo "<option value=".$def_monnaie[0]." selected>".$def_monnaie[0]."</option>";
}else{
echo "<option value=".$def_monnaie[0].">".$def_monnaie[0]."</option>";
}
}
}
 }

 if(isset($_POST["sans"])){
 foreach( $ALLOP as $employee ) 
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
  $N20 = $V20->item(0)->nodeValue;
$V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;$V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;$V23 = $employee->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;$V24 = $employee->getElementsByTagName( "e24" ); 
  $N24 = $V24->item(0)->nodeValue;$V25= $employee->getElementsByTagName( "e25" ); 
  $N25 = $V25->item(0)->nodeValue;$V26 = $employee->getElementsByTagName( "e26" ); 
  $N26 = $V26->item(0)->nodeValue;
  $V27 = $employee->getElementsByTagName( "e27" ); 
  $N27 = $V27->item(0)->nodeValue;$V28 = $employee->getElementsByTagName( "e28" ); 
  $N28 = $V28->item(0)->nodeValue;$V29 = $employee->getElementsByTagName( "e29" ); 
  $N29 = $V29->item(0)->nodeValue;
  $V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue;
  $V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue;$V32 = $employee->getElementsByTagName( "e32" ); 
  $N32 = $V32->item(0)->nodeValue;$V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $employee->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;

$sans=$_POST['sans'];
 $type=$_POST['type'];



 $req = "select * from operation where id LIKE '$sans%' AND type_operation LIKE '$type%'    ";
  
  $admi = mysql_query($req);
?>
							


			
			<?php while($admin=mysql_fetch_array($admi)){
			 $cl=substr ($admin[2], 0,6 );
    				
    				
			$typ=explode(' ',$admin[7]);
			$img='';
			$type='';
			if($typ[0]== 'Road'){
			$img = "<img src=images/Road.png  title=Road width=20 height=18>";
			$type='Road';
			}
			elseif($typ[0]== 'Air'){
			$img = "<img src=images/Air.png title=Air width=20 height=18>";
			$type='Air';
			}
			elseif($typ[0]== 'Ocean' ){
			$img = "<img src=images/Ocean.png title=Ocean width=20 height=18>";
			$type='Ocean';
			}
			$img2='';
			if($admin[8]== 'import'){
			$img2 = "<img src=images/Import.png title=Import width=20 height=18>";
			}
			elseif($admin[8]== 'export'){
			$img2 = "<img src=images/Export.png title=Export width=20 height=18>";
			}
			$titre="";
if($admin[7]=="Air Export"){
$titre="Air freight Export (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Air Import"){
$titre="Air freight Import (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Ocean Export"){
$titre="Ocean freight Export (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Ocean Import"){
$titre="Ocean freight Import (".$admin[0].",".$admin[2].")";
}elseif($admin[7]=="Road Export"){
$titre="Road freight Export (".$admin[0].",".$admin[2].")";
}else{
$titre="Road freight Import (".$admin[0].",".$admin[2].")";
}

$titre = str_replace('&','%26',$titre);
?>
		<?php  $consult=mysql_query("select Consultation from $admin[8] where id='$admin[0]' "); 
                  $etat_consult=mysql_fetch_array($consult);

		?>
				<tr  > 
				
			
    				<?php if($admin[8]=="export"){ ?>
				<td><font size="1"><a href="MenuUtilisation.php?valeur=DetailOperationExport.php&page=<?php echo $type;?>&titre=<?php echo $titre;?> &type_operation=<?php echo $type;?> Export&id=<?php echo $admin[0]; ?>&url=<?php echo $url.".".$N19 ?>" ><?php  echo $admin[0];?> <?php if(!$etat_consult[0]){ ?>
				<span class="badge badge-warning">new</span>
				<?php }  ?></a></td> 
				<?php  }else{ ?>
				<td><font size="1"> <a href="MenuUtilisation.php?valeur=detailleoperation.php&tb=import&type_operation=<?php echo $type;?>&page=<?php echo $type;?>&id=<?php echo $admin[0]; ?>&titre=<?php echo $titre; ?>&url=<?php echo $url.'.'.$N19; ?>" ><?php  echo $admin[0];?> <?php if(!$etat_consult[0]){ ?>
				<span class="badge badge-warning">new</span>
				<?php } ?> </a></td> 
				
				<?php  } ?>
					<td><font size="1"><a href="MenuUtilisation.php?valeur=detailleDossier.php&Ref=<?php echo $admin[1] ; ?>&type=affiche&titre= <?php echo $admin[1] ; ?>  <?php echo  $N15 ; ?>&url=<?php echo $N31; ?>"><?php echo $admin[1];?></a></td> 
    				<td><font size="1"><a  title="<?php echo $admin[2]; ?>" href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $admin[2];?>&titre=<?php echo $admin[2];?> <?php echo  $N15 ; ?>&mdc=1&url=<?php echo $N31?>"><?php echo $cl;?></a></td> 
					<td><font size="1"><?php echo $admin[10];?></td> 
					<td><font size="1"><?php echo $admin[4];?></td> 
    				<td><font size="1"><?php echo $admin[3];?></td>
    				<td><font size="1"><?php echo $admin[5];?></td>
					<td><font size="1"><?php echo $admin[6];?></td>
    				<td><font size="1"><?php echo $admin[7];?></td>
    				<td><?php 
					$rq = "select * from invoice where  Ref_operration='$admin[0]' ";
					
                    $fctr=mysql_query($rq);
					$fct=mysql_fetch_array($fctr);
			 
					
					if(!$fct){
					if($admin[9]=="non"){
					?><span class="label label-sm label-danger">
<?php echo $N25;?></span>
<?php  }else{  ?>
<span class="label label-sm label-info">
<?php echo $N34;?></span>
<?php  }  ?>
<?php }else{
				if($admin[9]=="non"){
                    $fctr=mysql_query("update $admin[8] set Invoicing='oui' where  id='$admin[0]' ");
				}
	if($admin[9]=="oui"){			
?><span class="label label-sm label-success"><?php echo $N24;?></span>
<?php }else{ ?>
<span class="label label-sm label-warning"><?php echo $N33;?></span>
<?php }} ?></td>

					<?php if($admin[8]=="export"){?>
    				<td><a href="MenuUtilisation.php?valeur=Misajouroperation.php&id=<?php echo $admin[0];?>&type=delete&type_operation=<?php echo $type;?> Export&url=<?php echo $url.".".$N18; ?>&titre=<?php  ?>&tb=export" onclick="return confirmLink(this) ;"  title="<?php echo  $N18 ; ?>">
					<i class="fa fa-trash-o"></i>
					</a>
					<a href="MenuUtilisation.php?valeur=formulaire_trans.php&titre=<?php echo  $N29 ; ?>&tb=export&type=<?php echo $type;?>&id=<?php echo $admin[0]; ?>&url=<?php echo $url.".".$N20; ?>" title="<?php echo  $N20 ; ?>" ><i class="fa fa-paste"></i>
				</a></td>				
			         <?php }else{ ?>
					 
					 <td><a href="MenuUtilisation.php?valeur=Misajouroperation.php&id=<?php echo $admin[0];?>&type=delete&tb=import&typeop=<?php echo $type;?>&url=<?php echo $url.".".$N18; ?>&titre=<?php  ?>" onclick="return confirmLink(this) ;"  title="<?php echo  $N18 ; ?>">
					 <i class="fa fa-trash-o"></i></a>
					 <a href="MenuUtilisation.php?valeur=formulaire_trans.php&titre=<?php echo $N29; ?>&tb=import&type=<?php echo $type;?>&id=<?php echo $admin[0]; ?>" title="<?php echo  $N20 ; ?>" ><i class="fa fa-paste"></i></a></td> 
				<?php } ?>
				</tr> 
			<?php } ?>		
			

	
<?php }} 
if(isset($_POST['advenced'])){
$op=$_POST['advenced'];
if($op=='periode'){
?>
<table>
									<tr>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="periode1">
										<?php  $fn=mysql_query("select * from financial_period "); 
										
										while($fin=mysql_fetch_array($fn)){
										?>
											<option value="<?php  echo $fin[0]; ?>"><?php echo $fin[2].'  to  '.$fin[3]; ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									<td><label>&nbsp;&nbsp; And &nbsp;&nbsp;</label></td>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="periode2">
										<?php  $fn=mysql_query("select * from financial_period "); 
										
										while($fin=mysql_fetch_array($fn)){
										?>
											<option value="<?php  echo $fin[0]; ?>"><?php echo $fin[2].'  to  '.$fin[3]; ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									</tr>
									</table>
<?php
}elseif($op=='an'){
?>
<table>
									<tr>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="date1" id="date1">
										<?php  $fn=date('Y');
										
										for($i=2014;$i<=$fn;$i++){
										?>
											<option value="<?php  echo $i; ?>"><?php echo $i; ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									<td><label>&nbsp;&nbsp; And &nbsp;&nbsp;</label></td>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="date2" id="date2">
										<?php  $fn=date('Y');
										
										for($i=2014;$i<=$fn;$i++){
										?>
											<option value="<?php  echo $i; ?>"><?php echo $i; ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									</tr>
									</table>
<?php
}else{ ?>
<table>
									<tr>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="datee1" id="datee1">
										<?php  
										
										for($i=1;$i<=12;$i++){
										?>
											<option value="<?php echo sprintf("%02d",$i); ?>"><?php echo sprintf("%02d",$i); ?></option>
											
										<?php } ?> 	
										</select>
									</div></td><td>&nbsp;</td>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="m1" id="m1">
										<?php  $fn=date('Y');
										
										for($i=2014;$i<=$fn;$i++){
										?>
											<option value="<?php  echo $i; ?>"><?php echo $i; ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									<td><label>&nbsp;&nbsp; And &nbsp;&nbsp;</label></td>
									<td><div class="form-group">
										<select class="form-control input-miduim" name="datee2" id="datee2">
										<?php  
										
										for($i=1;$i<=12;$i++){
										?>
											<option value="<?php echo sprintf("%02d",$i); ?>"><?php echo sprintf("%02d",$i); ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									<td>&nbsp;</td>
									
									<td><div class="form-group">
										<select class="form-control input-miduim" name="m2" id="m2">
										<?php  $fn=date('Y');
										
										for($i=2014;$i<=$fn;$i++){
										?>
											<option value="<?php  echo $i; ?>"><?php echo $i; ?></option>
											
										<?php } ?> 	
										</select>
									</div></td>
									</tr>
									</table>
<?php

}}
if(isset($_POST['opp_det'])){
$req=mysql_query("select * from currency where Monnaie_utliser=1");
$monnaie=mysql_fetch_array($req);

$op=$_POST['opp_det'];
$com=mysql_query("select * from vuepurchasetotale where OperationCommande='$op'");
			$ad=mysql_fetch_array($com);
			$fact=mysql_query("select * from  vueinvoicetotale where operation='$op'");
			
			$fct=mysql_fetch_array($fact);
			if($ad!=NULL || $fct!=NULL){

?>


				
					<!-- BEGIN SAMPLE TABLE PORTLET-->
							<div class="caption">
								
							
							<div class="cont-col1">
															<div class="label label-sm label-success">
																
																<?php echo $N18; ?> :&nbsp;&nbsp; <?php echo $op; ?>
															</div>
														</div>
														</div>
														<br>
														
							<table class="table table-bordered table-hover " >
			
<thead> 
				<tr > 
   <th ><font size="1"><?php echo $N20; ?></th>
    <th ><font size="1"><?php echo $N21; ?> </th>
    <th ><font size="1"><?php echo $N22; ?></th>
	<th ><font size="1"><?php echo $N23; ?> (<?php echo $monnaie[0]; ?>)</th>
    <th ><font size="1"><?php echo $N24; ?> (<?php echo $monnaie[0]; ?>)</th>
    <th ><font size="1"><?php echo $N25; ?> (<?php echo $monnaie[0]; ?>)</th>
				</tr> 
			</thead> 
			<tbody> 
			
 <?php
$com=mysql_query("select * from vuepurchasetotale VP,purchase P  where VP.OperationCommande='$op' and P.reference=VP.BonCommande and P.confirmation='1'");
			$MN_Com="";
			while($ad=mysql_fetch_array($com)){
			
			$tot_com=0;
			$tot_com_dev=0;
			$devise=mysql_query("select * from purchase where Reference='$ad[0]'");
			$a=mysql_fetch_array($devise);
			$tot_com=$tot_com+($a[9]*$ad[3]);
			$tot_com_dev=$tot_com_dev+($ad[3]);
			$MN_Com=$a[7];
			$prf=mysql_query("select * from prefix where element='Avoir' ");
			$prfix=mysql_fetch_array($prf);
			$test=explode("$prfix[0]",$ad[0]);
			if(isset($test[1])){
			?>
				<tr class="success"> 
   					<td ><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $ad[0];?>&titre=<?php echo $N32." :  ".$ad[0]; ?>&url=<?php echo $N30.".".$N31.".".$N32; ?>" target="_link"><?php echo $ad[0]; ?></a></td>
					<td><font size="1"></td>
					<td ><font size="1"><?php echo number_format(-$tot_com_dev,2,',','.')."  ".$MN_Com;?></td>
					<td><font size="1"></td>
					
					<td ><font size="1"><?php echo number_format(-$tot_com,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"><?php echo number_format(-$tot_com,2,',','.')."  ".$monnaie[0];?></td>
				</tr> <?php		
				}else{ ?>
				<tr class="danger"> 
   					<td ><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $ad[0];?>&titre=<?php echo $N32." :  ".$ad[0]; ?>&url=<?php echo $N30.".".$N31.".".$N32; ?>" target="_link"><?php echo $ad[0]; ?></a></td>
					<td ><font size="1"><?php echo number_format(-$tot_com_dev,2,',','.')."  ".$MN_Com;?></td>
					<td><font size="1"></td>
					<td ><font size="1"><?php echo number_format(-$tot_com,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"></td>
					<td><font size="1"><?php echo number_format(-$tot_com,2,',','.')."  ".$monnaie[0];?></td>
				</tr>
			<?php		
				}
			}
			$inv=mysql_query("select * from  invoice where Ref_operration='$op' And draft='1'");
			
			$MN="";
			while($invoice=mysql_fetch_array($inv)){
			$fact=mysql_query("select * from  vueinvoicetotale where facture='$invoice[3]'");
			$fct=mysql_fetch_array($fact);
			$tot_fact=0;
			$tot_fact_dev=0;
			$devisee=mysql_query("select * from invoice where id_facture='$fct[0]'");
			$b=mysql_fetch_array($devisee);
			$prf=mysql_query("select * from prefix where element='Avoir' ");
			$prfix=mysql_fetch_array($prf);
			$tot_fact=$tot_fact+($b[17]*$fct[3]);
			$tot_fact_dev=$tot_fact_dev+($fct[3]);
			$MN=$b[9];
			$test=explode("$prfix[0]",$fct[0]);
			
			if(isset($test[1])){
			?><tr class="danger">
   					<td ><font size="1"><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $fct[0];?>&titre=<?php echo $N32." :  ".$fct[0]; ?>&url=<?php echo $N33.".".$N32; ?>" target="_link"><?php echo $fct[0]; ?></a></td>
					<td><font size="1"><?php echo number_format($tot_fact_dev,2,',','.')."  ".$MN;?></td>
					<td ><font size="1"></td>
					<td><font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$monnaie[0];?></td>
					<td ><font size="1"></td>
					
					<td><font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$monnaie[0];?></td>
				</tr>
		<?php 
		}else{ ?>
			<tr class="success">
   					<td ><font size="1"><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $fct[0];?>&titre=<?php echo $N32." :  ".$fct[0]; ?>&url=<?php echo $N33.".".$N32; ?>" target="_link"><?php echo $fct[0]; ?></a></td>
					<td ><font size="1"></td>
					<td><font size="1"><?php echo number_format($tot_fact_dev,2,',','.')."  ".$MN;?></td>
					<td ><font size="1"></td>
					<td><font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$monnaie[0];?></td>
					<td><font size="1"><?php echo number_format($tot_fact,2,',','.')."  ".$monnaie[0];?></td>
				</tr>
			
			<?php }}
	

}else{
?>
<font color="red" size="2"><?php echo $N26; ?>  :&nbsp;&nbsp; <?php echo $op ; ?>   </font><br><br>
<?php } ?>
 

</tr></tbody></table><?php } 
foreach( $detaille_payement as $employee ) 
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
  $N16 = $V16->item(0)->nodeValue;
if(isset($_POST['det_paiement'])){
$req=mysql_query("select * from currency where Monnaie_utliser=1");
$monnaie=mysql_fetch_array($req);

$ref=$_POST['det_paiement'];
$test=explode("PYMNT",$ref);
if(isset($test[1])){	
			$element=mysql_query("select * from balance_purchase where id_balance='$ref'");
			
?><br>
<font   size="2"> <b><?php echo $ref ; ?> :</b>  </font><br><br>
</br>
<table  class="tablesorter"  style="width:50%;" align="center">
<thead>
				<tr  bgcolor="d5d7dc" style="height:10px;"> 
    				<th><font size="1"><?php echo $N2; ?></h4></th> 
    				<th><font size="1"><?php echo $N7; ?></h4></th> 
					<th><font size="1"><?php echo $N8; ?></h4></th> 
    				
				</tr> 
		</thead>
		<?php 
		$tot=0;
				$i=0;	while($el=mysql_fetch_array($element)){
$i++;$tot=$tot+$el[2]; ?>
<tr >
 <td ><font size="1"><b><?php echo $el[1]; ?></b>  </h5></td>
  <td ><font size="1"><b><?php echo number_format(-$el[2],2,',','.').'  '.$el[3] ?></b></h5></td>
  <td ></td>
  
 </tr>
<?php
}

?>

			<?php		
			$element=mysql_query("select * from balance_invoice where id_balance='$ref'");
			$totf=0;
				$i=0;	while($el=mysql_fetch_array($element)){
$i++;$totf=$totf+$el[2];
?>

<tr >
  <td ><font size="1"><b><?php echo $el[1]; ?></b>  </h5></td>
  <td ></td>
  <td ><font size="1"><b><?php echo number_format($el[2],2,',','.').'  '.$el[3]; ?></b></h5></td>
 
 </tr>
<?php
}
$Mn2=mysql_query("select * from currency where Monnaie_utliser='1'");
$Mn2M=mysql_fetch_array($Mn2);
?><tr >
  <td ><font size="1"><b><?php echo $N10; ?></b>  </h5></td>
  <td ><font size="1"><b><?php echo number_format(-$tot,2,',','.').'  '.$Mn2M[0]; ?></b>  </h5></td>
  <td ><font size="1"><b><?php echo number_format($totf,2,',','.').'  '.$Mn2M[0] ; ?></b>  </h5></td>
 
  
 </tr>
 <tr >
 <?php $def=$totf-$tot;
 if($def>=0){
 $def=0;
 }
 
 ?>
  <td  colspan="2"><font size="1"><b><?php echo $N16; ?></b>  </h5></td>
   <td ><font size="1"><b><?php echo number_format($def,2,',','.').'  '.$Mn2M[0] ;  ?></b>  </h5></td>
   
 
  
 </tr>
</table>


<?php }else{
$element=mysql_query("select * from allocate_paiment_purchase where id_balance='$ref' and valeur!=0");
			?><br>
<font   size="2"> <b><?php echo $ref ; ?> :</b>  </font><br><br>
</br>
<table  class="tablesorter"  style="width:50%;" align="center">
<thead>
				<tr  bgcolor="d5d7dc" style="height:10px;"> 
    				<th><font size="1"><?php echo $N2; ?></h4></th> 
    				<th><font size="1"><?php echo $N7; ?></h4></th> 
					<th><font size="1"><?php echo $N8; ?></h4></th> 
    				
				</tr> 
		</thead>
		<?php $tot=0;
				$i=0;	while($el=mysql_fetch_array($element)){
$i++;$tot=$tot+$el[2];
?>
<tr >
 <td ><font size="1"><b><?php echo $el[1]; ?></b>  </h5></td>
  <td ><font size="1"><b><?php echo number_format(-$el[2],2,',','.').'  '.$el[3] ?></b></h5></td>
  <td ></td>
  
 </tr>
<?php
}

?>

			<?php		
			$element=mysql_query("select * from allocate_paiment_invoice where id_balance='$ref'");
			$totf=0;
				$i=0;	while($el=mysql_fetch_array($element)){
$i++;$totf=$totf+$el[2];
?>

<tr >
  <td ><font size="1"><b><?php echo $el[1]; ?></b>  </h5></td>
  <td ></td>
  <td ><font size="1"><b><?php echo number_format($el[2],2,',','.').'  '.$el[3]; ?></b></h5></td>
 
 </tr>
<?php
}
$Mn2=mysql_query("select * from currency where Monnaie_utliser='1'");
$Mn2M=mysql_fetch_array($Mn2);
?><tr >
  <td ><font size="1"><b><?php echo $N10; ?></b>  </h5></td>
  <td ><font size="1"><b><?php echo number_format(-$tot,2,',','.').'  '.$Mn2M[0]; ?></b>  </h5></td>
  <td ><font size="1"><b><?php echo number_format($totf,2,',','.').'  '.$Mn2M[0] ; ?></b>  </h5></td>
 
  
 </tr>
 <tr >
 <?php $def=$totf-$tot;
 if($def>=0){
 $def=0;
 }
 
 ?>
  <td  colspan="2"><font size="1"><b><?php echo $N16; ?></b>  </h5></td>
   <td ><font size="1"><b><?php echo number_format($def,2,',','.').'  '.$Mn2M[0] ;  ?></b>  </h5></td>
   
 
  
 </tr>
</table>


<?php }}}
if(isset($_POST['com'])){
$com_cmp=$_POST['compte'];
$devisee=mysql_query("select * from  bank_account  where Numero_Compte='$com_cmp'");
			$b=mysql_fetch_array($devisee);
			$devise=$_POST['devise'];
$com=$_POST['com'];
if($devise!=""){
$valeur=$_POST['valeur'];

$val_com=$_POST['valeur_com'];
$vt=$val_com/$devise;
$pp=$devise*$vt;
$rest=$b[6]-$vt;
if($rest >=0){
$devisee=mysql_query("update bank_account set sold='$rest'  where Numero_Compte='$com_cmp'");
$devisee=mysql_query("update purchase set etat_paiement='1',valeur_payer='$pp'  where reference='$com'");
echo "update bank_account set sold='$rest'  where Numero_Compte='$com_cmp'";
echo "update purchase set etat_paiement='1',valeur_payer='$pp'  where Numero_Compte='$com_cmp'";
}else{
echo "<font size=2 color=red>le sold de compte banciare ne pas suffisent pour payée cette commande</font>";
}
}else{
echo "<font size=2 color=red>il faut ajouter un valeur pour le chemps devise</font>";
}}
}
foreach( $commande as $employee ) 
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
  $N29 = $V29->item(0)->nodeValue;

if(isset($_POST['search_commande'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req="";
 $req1="";
 $req2="";
 $etat=$_POST['etat'];
 $pay=$_POST['pay'];
 $max=$_POST['max'];
 if($etat!="2"){
 $req="AND etat_commande='$etat'";
 }if($pay!="2"){
 $req1="AND etat_paiement='$pay'";
 }if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_commande'];
$OP=$_POST['OP'];
$reqq="";
if($OP==""){
$reqq="AND  operation=''";
}else{
$reqq="AND  operation!=''";
}

$COMand = mysql_query("select * from purchase  where confirmation='1' $reqq AND ( reference  LIKE '%$el%' OR	fournisseur  LIKE '%$el%'	OR dossiers LIKE '%$el%'	OR	description	LIKE '%$el%') $req $req1  $crit $req2");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);

?>
<table class="tablesorter" style="width:100%">
			<thead> 
				<tr> 
   					 
    				<th><font size="1"><?php echo $N4; ?></h4> <br><input type="image" id="reference" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('reference','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="reference" title="<?php echo $N2; ?>" onclick="findordr('reference','ASC');" ></th>
					<th><font size="1"><?php echo $N5; ?></h4> <br><input type="image" id="fournisseur" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('fournisseur','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="fournisseur" title="<?php echo $N2; ?>" onclick="findordr('fournisseur','ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h4> <br><input type="image" id="dossiers" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('dossiers','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="dossiers" title="<?php echo $N2; ?>" onclick="findordr('dossiers','ASC');" ></th> 
    				<th><font size="1"><?php echo $N7; ?></h4> <br><input type="image" id="description" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('description','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="description" title="<?php echo $N2; ?>" onclick="findordr('description','ASC');" ></th> 
    				<th><font size="1"><?php echo $N8; ?></h4> <br><input type="image" id="date_commande" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('date_commande','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="date_commande" title="<?php echo $N2; ?>" onclick="findordr('date_commande','ASC');" ></th>
					<th><font size="1"><?php echo $N9; ?></h4> </th>
    				<th><font size="1"><?php echo $N28; ?></h4> </th>
					<th><font size="1"><?php echo $N10; ?></h4></th>
					<th><font size="1"><?php echo $N11; ?></h4> </th>
					<th><font size="1"><?php echo $N29; ?></h4></th>
					
					
    				<th style="width:120px"><font size="1"><?php echo $N12; ?></h4></th> 
				</tr> 
			</thead> 
			<?php while($admin=mysql_fetch_array($COMand)){
			
			$trmp= mysql_query("SELECT terme_paiement  from  `supplier` where Nom_Soc='$admin[1]'");
			 $trmpfour=mysql_fetch_array($trmp);
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3]*$admin[9];
			   $client = str_replace('&','%26',$admin[1]);
			   $Titre = str_replace(' ','%20',$N27);
			   $Titr = str_replace(' ','%20',$N28);
			   $client = str_replace(' ','%20',$client);
			   $date=date("Y-m-d");
			 $Auj = explode('-',$date);
			 $val_echue=0;
			 if($admin[17]!=NULL){
			 $ann=$trmpfour[0]/365;
			 
			 $anne=explode('.',$ann);
			 if(isset($anne[1])){
			 $moi=($anne[1]*365)/30;
			 }else{
			 $moi=0;
			 }
			 $moiss=explode('.',$moi);
			 if(isset($moiss[1])){
			 $jour=$moiss[1]*30;
			 }else{
			 $jour=0.0;
			 }
			 $jours=explode('.',$jour);
			 
			 $DateF = explode('-',$admin[17]);
			 $jours=$jours[0]+$DateF[2];
		
			 if($jours>30){
			 $mois=$moiss[1]+1;
			 $jours=$jours-30;
			 }
			 $mois=$moiss[0]+$DateF[1];
			  $anne=$anne[0]+$DateF[0];
			  if($mois>12){
			 $mois=$mois-12;
			$anne=$anne+1;
			 }
			
			 $j=sprintf("%02d",$jours);
			 $m=sprintf("%02d",$mois);
			 $a=sprintf("%04d",$anne);
			 
			// sprintf('%02d',$mois)/sprintf('%04d',$anne)";
			$anECH=$a-$DateF[0];
			$mECH=$m-$DateF[1];
			$jECH=$j-$DateF[2];
			$val_echue=($anECH*360)+($mECH*30)+($jECH);
			$val_echue=$val_echue*(-1);
			}
			?>		
				<tr  bgcolor="#c77c77;"> 
   					 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $admin[0];?> "><?php echo $admin[0];?></a></font></td> 
    				<td><font size="1"><?php echo $admin[1];?></font></td> 
    				<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo $admin[17];?></font></td>
					<td><font size="1"><?php echo $val_echue;?></font></td> 
					<td><font size="1"><?php  if(isset($a)){ echo "$a/$m/$j" ;}  ?></font></td> 
					

<?php
$finalstate = "";
$etat = $admin[6];
if ($etat == 1){
$finalstate =  "<img src=images/icn_alert_success.png title=$N13>";
}
else{
$finalstate = "<img src=images/icn_alert_warning.png title=$N14>";
}
$fin = "";
$eta = $admin[8];
if ($eta == 1){
$com=mysql_query("select * from  balance_purchase  where commande='$admin[0]'");
$cmd=mysql_fetch_array($com);
$fin = "<a href=MenuUtilisation.php?valeur=detaille_payement.php&titre=$admin[0]&id=$admin[0]><img src=images/icn_alert_success.png title=$N15>";
}
else{
if($etat == 0){
$fin = "<img src=images/icn_alert_warning.png title=$N16>";
}else{
if($admin[19]=="1"){
$fin = "<a href=><img src=images/loader.gif title=$N16></a>";
}else{
$fin = "<a href=><img src=images/icn_alert_warning.png title=$N16></a>";
}}
}

if($admin[17]==NULL){
$recpt="MenuUtilisation.php?valeur=reception_factures.php&&titre=$Titr&id=$admin[0]";
$RcptStat = "<a href=$recpt><img src=images/icn_alert_warning.png title=$N16></a>";

}else{
$recpt="MenuUtilisation.php?valeur=reception_factures.php&&titre=$Titr&id=$admin[0]";
$RcptStat =  "<a href=$recpt><img src=images/icn_alert_success.png title=$N13></a>";
}
?>
					
					<td><font size="2"><?php echo $RcptStat;?></font></td> 
					<td><font size="2"><?php echo $finalstate;?></font></td> 
					
					<td><font size="2"><?php echo $fin;?></font></td> 
					 <td><font size="1"><?php echo number_format($tot1,2,',','.')."&nbsp;".$MN1[0]; ?></font></td> 
					
    				<td>
					<?php if($admin[14]==0){ ?>
					<a href="MenuUtilisation.php?valeur=ModifCommande.php&reference=<?php echo $admin[0];?>&action=modifier&titre=<?php echo $N18; ?><?php echo $admin[0];?>" ><input  type="image" width="15" src="images/icn_edit.png" title="<?php echo $N21; ?>"></a>
					<a href="updateCommande.php?reference=<?php echo $admin[0];?>&action=supprimer"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this);" width="15" title="<?php echo $N17; ?>"></a>
					<?php } ?>
					<a href="finalcom.php?reference=<?php echo $admin[0];?>&four=<?php echo  $client;?>" target="_link"><img src="images/pdf2.png" width="15" title="<?php echo $N19; ?> <?php echo $admin[4];?>"></a>
					<a href="MenuUtilisation.php?valeur=SendMail2.php&reference=<?php echo $admin[0];?>"><img src="images/email.png" width="15" title="<?php echo $N20; ?>"></a>
					
					</td> 
				</tr> 	
<?php  }  ?>
</table>
	<?php
}
}

foreach( $commandeAP as $employee ) 
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
  $N29 = $V29->item(0)->nodeValue;

if(isset($_POST['search_commandeAP'])){
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req="";
 $req1="";
 $req2="";
 $etat="";
 $pay="";
 $max=$_POST['max'];
 if($etat!="2"){
 $req="AND etat_commande='$etat'";
 }if($pay!="2"){
 $req1="AND etat_paiement='$pay'";
 }if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_commandeAP'];
$OP="";
$reqq="";
if($OP==""){
$reqq="AND  operation=''";
}else{
$reqq="AND  operation!=''";
}

$s = mysql_query("select * from purchase  where confirmation='1'  AND etat_paiement='0'  AND confirmation_paiment='1' AND ( reference  LIKE '%$el%' OR	fournisseur  LIKE '%$el%'	OR dossiers LIKE '%$el%'	OR	description	LIKE '%$el%') $crit $req2");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);

?>
<table class="tablesorter" style="width:100%">
			<thead> 
				<tr> 
   					 
    				<th><font size="1"><?php echo $N4; ?></h4> <br><input type="image" id="reference" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('reference','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="reference" title="<?php echo $N2; ?>" onclick="findordr('reference','ASC');" ></th>
					<th><font size="1"><?php echo $N5; ?></h4> <br><input type="image" id="fournisseur" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('fournisseur','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="fournisseur" title="<?php echo $N2; ?>" onclick="findordr('fournisseur','ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h4> <br><input type="image" id="dossiers" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('dossiers','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="dossiers" title="<?php echo $N2; ?>" onclick="findordr('dossiers','ASC');" ></th> 
    				<th><font size="1"><?php echo $N7; ?></h4> <br><input type="image" id="description" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('description','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="description" title="<?php echo $N2; ?>" onclick="findordr('description','ASC');" ></th> 
    				<th><font size="1"><?php echo $N8; ?></h4> <br><input type="image" id="date_commande" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('date_commande','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="date_commande" title="<?php echo $N2; ?>" onclick="findordr('date_commande','ASC');" ></th>
					<th><font size="1"><?php echo $N9; ?></h4> </th>
    				<th><font size="1"><?php echo $N29; ?></h4></th>
					
    				<th style="width:120px"><font size="1"><?php echo $N12; ?></h4></th> 
				</tr> 
			</thead> 
			<?php while($admin=mysql_fetch_array($s)){
			
			$trmp= mysql_query("SELECT terme_paiement  from  `supplier` where Nom_Soc='$admin[1]'");
			 $trmpfour=mysql_fetch_array($trmp);
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3]*$admin[9];
			   $client = str_replace('&','%26',$admin[1]);
			   $Titre = str_replace(' ','%20',$N27);
			   $Titr = str_replace(' ','%20',$N28);
			   $client = str_replace(' ','%20',$client);
			   $date=date("Y-m-d");
			 $Auj = explode('-',$date);
			 $val_echue=0;
			 if($admin[17]!=NULL){
			 $ann=$trmpfour[0]/365;
			 
			 $anne=explode('.',$ann);
			 $moi=($anne[1]*365)/30;
			 $moiss=explode('.',$moi);
			 $jour=$moiss[1]*30;
			 $jours=explode('.',$jour);
			 $DateF = explode('-',$admin[17]);
			 $jours=$jours[0]+$DateF[2];
		
			 if($jours>30){
			 $mois=$moiss[1]+1;
			 $jours=$jours-30;
			 }
			 $mois=$moiss[0]+$DateF[1];
			  $anne=$anne[0]+$DateF[0];
			  if($mois>12){
			 $mois=$mois-12;
			$anne=$anne+1;
			 }
			
			 $j=sprintf("%02d",$jours);
			 $m=sprintf("%02d",$mois);
			 $a=sprintf("%04d",$anne);
			 
			// sprintf('%02d',$mois)/sprintf('%04d',$anne)";
			$anECH=$a-$DateF[0];
			$mECH=$m-$DateF[1];
			$jECH=$j-$DateF[2];
			$val_echue=($anECH*360)+($mECH*30)+($jECH);
			$val_echue=$val_echue*(-1);
			}
			?>		
				<tr  bgcolor="#c77c77;"> 
   					 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $admin[0];?> "><?php echo $admin[0];?></a></font></td> 
    				<td><font size="1"><?php echo $admin[1];?></font></td> 
    				<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo $admin[17];?></font></td>
					<td><font size="1"><?php echo $val_echue;?></font></td> 
					<td><font size="1"><?php  if(isset($a)){ echo "$a/$m/$j" ;}  ?></font></td> 
					

<?php
$finalstate = "";
$etat = $admin[6];
if ($etat == 1){
$finalstate =  "<img src=images/icn_alert_success.png title=$N13>";
}
else{
$finalstate = "<img src=images/icn_alert_warning.png title=$N14>";
}
$fin = "";
$eta = $admin[8];
if ($eta == 1){
$com=mysql_query("select * from  balance_purchase  where commande='$admin[0]'");
$cmd=mysql_fetch_array($com);
$fin = "<a href=MenuUtilisation.php?valeur=detaille_payement.php&titre=d%C3%A9tail%20paiement%$cmd[4]&id=$cmd[4]><img src=images/icn_alert_success.png title=$N15>";
}
else{
if($etat == 0){
$fin = "<img src=images/icn_alert_warning.png title=$N16>";
}else{
$link="MenuUtilisation.php?valeur=allocate_argent_BC.php&Ref=$admin[0]&fournisseur=$client&titre=$Titre";
$fin = "<a href=$link><img src=images/icn_alert_warning.png title=$N16></a>";
}
}

if($admin[17]==NULL){
$recpt="MenuUtilisation.php?valeur=reception_factures.php&&titre=$Titr&id=$admin[0]";
$RcptStat = "<a href=$recpt><img src=images/icn_alert_warning.png title=$N16></a>";

}else{
$recpt="MenuUtilisation.php?valeur=reception_factures.php&&titre=$Titr&id=$admin[0]";
$RcptStat =  "<a href=$recpt><img src=images/icn_alert_success.png title=$N13></a>";
}
?>
					
					
					 <td><font size="1"><?php echo number_format($tot1,2,',','.')."&nbsp;".$MN1[0]; ?></font></td> 
					<td><font size="2"><?php echo $fin;?></font></td> 
					
    				
				</tr> 
<?php  }  ?>
</table>
	<?php
}
}

if(isset($_POST['search_client'])){
foreach( $Client as $employee ) 
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
  $N16 = $V16->item(0)->nodeValue;
  
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $max=$_POST['max'];
  $crite="";
 if($_POST['max']!=2){
 $crite="LIMIT 0,$max";

 }
 
include ("Connection.php");
$el=$_POST['search_client'];
$s = mysql_query("select * from custemer where Nom_Soc  LIKE '%$el%' OR	Nom  LIKE '%$el%'	OR Telephone1 LIKE '%$el%'	OR	AdressMail LIKE '%$el%'  OR type_entreprise LIKE '%$el%' $crit  $crite");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
?>
				<?php 
			

				?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th></th> 
    				<th><font size="1"><?php echo $N1; ?></h5><br><input type="image" id="Nom_Soc" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Nom_Soc" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N2; ?></h5><br><input type="image" id="Nom" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Nom" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N3; ?></h5><br><input type="image" id="AdressMail" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="AdressMail" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				 <th><font size="1"><?php echo $N4; ?></h5><br><input type="image" id="Telephone1" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Telephone1" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N13; ?></h5><br><input type="image" id="type_entreprise" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="type_entreprise" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N5; ?></h5></th> 
				</tr> 
			</thead> 
			<?php while($admin=mysql_fetch_array($s)){
			
$texte = str_replace('&','%26',$admin[0]);
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
   					<td><a href="javascript:PetiteFenetre()" ><input type="checkbox"  ></a></td> 
    				<td><font size="1"><?php echo $admin[0];?></td> 
    				<td><font size="1"><?php echo $admin[3]." ".$admin[2]." ".$admin[4];?></td> 
					<td><font size="1"><?php echo $admin[5];?></td> 
					<td><font size="1"><?php echo $admin[6];?></td> 
					<td><font size="1"><?php echo $admin[8];?></td> 
    				<td><a href="MenuUtilisation.php?valeur=ModifierClient.php&NomSOC=<?php echo $texte;?>&titre=<?php echo $N7; ?>: <?php echo $texte; ?> " ><input  type="image" src="images/icn_edit.png" title="<?php echo $N8; ?>"></a><a href="DeleteClient.php?NomSoc=<?php echo $texte; ?>&type=delete"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N9; ?>"></a><a href="MenuUtilisation.php?valeur=detailleClient.php&Nom_Soc=<?php echo $texte; ?>&titre=<?php echo $N10; ?> <?php echo $texte; ?>" ><input  type="image" src="images/icn_categories.png" title="<?php echo $N11; ?>"></a><a href="MenuUtilisation.php?valeur=AjouterFacture.php&Nom_Soc=<?php echo $admin[0];?>&titre=<?php echo $N12; ?> <?php echo $admin[0];?>" ><input  type="image" src="images/facture.png" title="<?php echo $N12; ?> <?php echo $admin[0];?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }} 
?>
			 </table><br>
	<?php
}


if(isset($_POST['search_periode'])){
foreach( $Financ_periode as $employee ) 
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
  $N18 = $V18->item(0)->nodeValue;
  
  
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $max=$_POST['max'];
  $crite="";
 if($_POST['max']!=2){
 $crite="LIMIT 0,$max";

 }
 
include ("Connection.php");
$el=$_POST['search_periode'];

$s = mysql_query("select * from  financial_period where id  LIKE '%$el%' OR	etat  LIKE '%$el%'	OR date_debut LIKE '%$el%'	OR	date_fin LIKE '%$el%'  $crit  $crite");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);

?>
				<?php 
			

				?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th></th> 
    				<th><font size="1"><?php echo $N1; ?></h5><br><input type="image" id="id" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="id" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N2; ?></h5><br><input type="image" id="date_debut" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="date_debut" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N3; ?></h5><br><input type="image" id="date_fin" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="date_fin" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				 <th><font size="1"><?php echo $N4; ?></h5><br></th> 
    				 <th colspan="2"><font size="1"><?php echo $N5; ?></h5></th> 
    		
				</tr> 
			</thead> 
			
			<?php 
			$tst="";
			while($admin=mysql_fetch_array($s)){
			
			if($admin[1]==0){
			$tst="lock.png";
			}else{
			$tst="unlock.png";
			}
?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
   					<td><a href="javascript:PetiteFenetre()" ><input type="radio" <?php if($admin[1]==1){ echo "checked ";} ?> id="id" name="id" onclick="find_select(this)"  value='<?php echo $admin[0];?>'></a></td> 
    				<td><font size="1"><?php echo $admin[0];?></td>  
    				<td><font size="1"><?php echo $admin[2];?></td> 
					<td><font size="1"><?php echo $admin[3];?></td> 
					<td><a href=#><input type="image" src="images/<?php echo $tst; ?>"  width="15" title="<?php echo $N9; ?>"></td>
    				<td><a href="MenuUtilisation.php?valeur=updatePeriode.php&id=<?php echo $admin[0];?>&titre=<?php echo $N12; ?>: <?php echo $admin[0];?> " ><img src="images/icn_edit.png" title="<?php echo $N14; ?>"></a></td><td><a href="DeletePeriode.php?id=<?php echo $admin[0];?>&type=delete"><img src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N13; ?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br>
			 
			 
			

			<br/>
			<br/>
			<br/>
			 <form action="#" method="POST">
			  <input type="submit" value="<?php echo $N18; ?>" class="alt_btn" name="UPDATE">
			  <input type="hidden" value="" id="Text_id" name="id" >
			 <input type="submit" value="<?php echo $N7; ?>" class="alt_btn" name="AjouterP">
			 <input type="hidden" value="<?php echo $N7; ?> " name="titre"> 
			 </form>
	<?php
}


}
if(isset($_POST['search_facture'])){
foreach( $Facture as $employee ) 
{                          $V1 = $employee->getElementsByTagName("e1"); 
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
  $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;$V23 = $employee->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;
  
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req="";
 $req2="";
 $etat=$_POST['etat'];
 $max=$_POST['max'];
 if($etat!="2"){
 $req="AND etat_payement='$etat'";
 }
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_facture'];
$s = mysql_query("select * from  invoice where (id_facture  LIKE '%$el%' OR	client LIKE '%$el%'	OR Ref LIKE '%$el%'	OR	Date_paiment LIKE '%$el%') $req   $crit $req2");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
?>
<table class="tablesorter" style="width:100%" > 

			<thead> 
				<tr> 
    				<th><font size="1"><?php echo $N4; ?></h4> <br><input type="image" id="id_facture" src="images/dessend.png" width="10" title="<?php echo $N23; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="id_facture" title="<?php echo $N22; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N5; ?></h4> <br><input type="image" id="client" src="images/dessend.png" width="10" title="<?php echo $N23; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="client" title="<?php echo $N22; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N6; ?></h4> <br><input type="image" id="Ref" src="images/dessend.png" width="10" title="<?php echo $N23; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Ref" title="<?php echo $N22; ?>" onclick="findordr(this,'ASC');" ></th> 
    				 <th><font size="1"><?php echo $N9; ?></h4> <br><input type="image" id="Date_paiment" src="images/dessend.png" width="10" title="<?php echo $N23; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Date_paiment" title="<?php echo $N22; ?>" onclick="findordr(this,'ASC');" ></th>
    				  <th><font size="1"><?php echo $N8; ?></h4></th>
					  	 <th><font size="1"><?php echo $N7; ?></h4></th>
					
    				 <th><font size="1"><?php echo $N10; ?></h4></th>
    				<th colspan="4"><font size="1"><?php echo $N11; ?></h4></th> 
				</tr> 
			</thead> 
			<?php $date=date("Y-m-d");
	
			 $Auj = explode('-',$date);
			while($admin=mysql_fetch_array($s)){
			 $DateF = explode('/',$admin[7]);
			 if(!isset($DateF[1])){
			 $DateF = explode('-',$admin[7]);
			 
			 }
			 $val_echue=0;
			if($Auj[0]==$DateF[0]){
			if($Auj[1]==$DateF[1]){
			if($Auj[2]==$DateF[2]){
			$val_echue=0;
			}elseif($Auj[2]<$DateF[2]){$val_echue=0;}else{$val_echue=$Auj[2]-$DateF[2];}
		
			}
			elseif($Auj[1]<$DateF[1]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$val_echue=$J+$M;}
			}elseif($Auj[0]<$DateF[0]){$val_echue=0;}else{$J=$Auj[2]-$DateF[2];$M=($Auj[1]-$DateF[1])*30;$ANN=($Auj[0]-$DateF[0])*12*30;$val_echue=$J+$M+$ANN;}
			
			$factur=mysql_query("select * from invoice where id_facture='$admin[3]'");
			$facture=mysql_fetch_array($factur);
$el=mysql_query("select * from element_invoice where Reference='$facture[3]'");
 $tot=0.00;
  $client = str_replace('&','%26',$admin[5]);
while($element=mysql_fetch_array($el)){
$prix=$element[2]*$element[3];
$devis=$prix*$element[6];
$TVA=$devis*($element[4]*0.01);
$t=$devis+$TVA;
$tot=$tot+$t;
}
$tot=$tot*$facture[17];

         ?>
			 
				<tr  bgcolor="d5d7dc" style="height:10px;"> 
   					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $admin[3];?>&titre=<?php echo $N12; ?> <?php echo $admin[3];?> "><?php echo $admin[3];?></a></font></td> 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=detailleClient.php&Nom_Soc=<?php echo $client;?>"><?php echo $admin[5];?></a></font></td> 
					<td><font size="1"><?php echo $admin[10];?></font></td>				
					<td><font size="1"><?php echo $admin[7];?></font></td>
				<td><?php if($admin[11]==1){?><input  type="image" src="images/icn_alert_success.png"  title="<?php echo $N14; ?>"><?php }else{ ?><a href="MenuUtilisation.php?valeur=AllCompte.php&titre=<?php echo $N13; ?>"><img src="images/icn_alert_error.png" title="<?php echo $N15; ?>"></a> <?php } ?></td> 	
				<td><font size="1"><?php echo number_format($tot,2,',','.');?></font></td> 
				<td><font size="1"><?php if($admin[11]!=1){ echo $val_echue;}else{ echo $admin[15]; }?></font></td> 
    				<td width="10"><font size="1"><a href="MenuUtilisation.php?valeur=ModifierFacture.php&id_Facture=<?php echo $admin[3];?>" ><img  type="image" src="images/icn_edit.png" title="<?php echo $N6; ?>"></a></td><td width="10"><a href="Delete_Facture.php?id_facture=<?php echo $admin[3];?>"><img type="image" src="images/icn_trash.png"onclick="return confirmLink(this) ;"  title="<?php echo $N17; ?>"></a></td><td width="10"><a href="MenuUtilisation.php?valeur=EnvoyerMail.php&id_Facture=<?php echo $admin[3];?>&titre=<?php echo $N18; ?>" ><img  type="image" src="images/email.png" title="<?php echo $N19; ?>"></a></td><td width="5"><a href="finalfac.php?Ref=<?php echo $admin[3];?>&client=<?php echo $client;?>" target="_blank" ><input  type="image" src="images/pdf2.png" title="<?php echo $N20; ?> <?php echo $admin[3];?>"></a></td> 
				</tr> 
				
			
<?php }
?>		 </table><br>
	
	<?php
}
}
if(isset($_POST['search_offre'])){
foreach( $Offre as $employee ) 
{                          $V1 = $employee->getElementsByTagName("e1"); 
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
  $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" ); 
  $N22 = $V22->item(0)->nodeValue;$V23 = $employee->getElementsByTagName( "e23" ); 
  $N23 = $V23->item(0)->nodeValue;
  
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
 $req="";
 $req2="";
 $etat=$_POST['etat'];
 $max=$_POST['max'];
 if($etat!="2"){
 $req="AND validation='$etat'";
 }
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }
include ("Connection.php");
$el=$_POST['search_offre'];
$s = mysql_query("select * from  offre where (id_offre  LIKE '%$el%' OR	client LIKE '%$el%'	OR Ref LIKE '%$el%'	OR	date_lancement LIKE '%$el%' OR	Resume_offre LIKE '%$el%') $req   $crit $req2");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
?>
<table class="tablesorter" style="width:100%" > 

			<thead> 
				<tr> 
    				<th><font size="1"><?php echo $N4; ?></h4> <br><input type="image" id="id_facture" src="images/dessend.png" width="10" title="<?php echo $N23; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="id_facture" title="<?php echo $N22; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N5; ?></h4> <br><input type="image" id="client" src="images/dessend.png" width="10" title="<?php echo $N23; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="client" title="<?php echo $N22; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N6; ?></h4> <br><input type="image" id="Ref" src="images/dessend.png" width="10" title="<?php echo $N23; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Ref" title="<?php echo $N22; ?>" onclick="findordr(this,'ASC');" ></th> 
    				 <th><font size="1"><?php echo $N9; ?></h4> <br><input type="image" id="Date_paiment" src="images/dessend.png" width="10" title="<?php echo $N23; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Date_paiment" title="<?php echo $N22; ?>" onclick="findordr(this,'ASC');" ></th>
    				  <th><font size="1"><?php echo $N8; ?></h4></th>
					  	 <th><font size="1"><?php echo $N7; ?></h4></th>
					
    				 <th><font size="1"><?php echo $N10; ?></h4></th>
    				<th colspan="4"><font size="1"><?php echo $N11; ?></h4></th> 
				</tr> 
			</thead> 
			<?php $date=date("d/m/Y");
	
			 $Auj = explode('-',$date);
			while($admin=mysql_fetch_array($s)){
			
			$factur=mysql_query("select * from offre where id_offre='$admin[3]'");
			$facture=mysql_fetch_array($factur);
$el=mysql_query("select * from element_offre where Reference='$facture[3]'");
 $tot=0.00;
while($element=mysql_fetch_array($el)){
$prix=$element[2]*$element[3];

$devis=$prix*$element[6];
$TVA=$devis*($element[4]*0.01);
$t=$devis+$TVA;
$tot=$tot+$t;
}
$tot=$tot*$facture[15];
 $client = str_replace('&','%26',$admin[5]);

         ?>
			 
				<tr  bgcolor="d5d7dc" style="height:10px;"> 
   					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettails.php&Ref=<?php echo $admin[3];?>&titre=<?php echo $N12; ?> <?php echo $admin[3];?> "><?php echo $admin[3];?></a></font></td> 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=detailleClient.php&Nom_Soc=<?php echo $admin[5];?>"><?php echo $admin[5];?></a></font></td> 
					<td><font size="1"><?php echo $admin[10];?></font></td>				
					<td><font size="1"><?php echo $admin[6];?></font></td>
				<td><?php if($admin[12]==1){?><input  type="image" src="images/icn_alert_success.png"  title="<?php echo $N14; ?>"><?php }else{ ?><a href="MenuUtilisation.php?valeur=AllCompte.php&titre=<?php echo $N13; ?>"><img src="images/icn_alert_error.png" title="<?php echo $N15; ?>"></a> <?php } ?></td> 	
				<td><font size="1"><?php echo number_format($tot,2,',','.').' '. $admin[9];?></font></td> 
				<td><font size="1"><?php echo $admin[0];?></font></td> 
    			<td width="10"><font size="1"><?php if($admin[12]==0){?><a href="MenuUtilisation.php?valeur=ModifierOffre.php&id_Facture=<?php echo $admin[3];?>" ><?php } ?><img  type="image" src="images/icn_edit.png" title="<?php echo $N6; ?>"></a></td><td width="10"><a href="Delete_Offre.php?id_offre=<?php echo $admin[3];?>"><img type="image" src="images/icn_trash.png"onclick="return confirmLink(this) ;"  title="<?php echo $N17; ?>"></a></td><td width="10"><a href="MenuUtilisation.php?valeur=EnvoyerMail.php&id_Facture=<?php echo $admin[3];?>&titre=<?php echo $N18; ?>" ><img  type="image" src="images/email.png" title="<?php echo $N19; ?>"></a></td><td width="5"><a href="finaloffre.php?Ref=<?php echo $admin[3];?>&client=<?php echo $client;?>" target="_blank" ><input  type="image" src="images/pdf2.png" title="<?php echo $N20; ?> <?php echo $admin[3];?>"></a></td> 
				</tr> 
				
			
<?php }
?>
			 </table><br>
	
	<?php
}
}
if(isset($_POST['search_compte'])){
include ("Connection.php");
foreach( $Compte as $employee ) 
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
  $N29 = $V29->item(0)->nodeValue;
  $V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue; $V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue; $V32 = $employee->getElementsByTagName( "e32" ); 
  $N32 = $V32->item(0)->nodeValue;
  
$req1="";

 $req2="";
 $test=0;
$tb_pay=array();
 $FCT=$_POST['FCT'];
 if($FCT!=""){
 $test=1;
 $result= mysql_query("SELECT id_balance from allocate_paiment_invoice where facture='$FCT' ");
 	while($MOUTTT=mysql_fetch_array($result)){
	if(!in_array("$MOUTTT[0]",$tb_pay)){
			   $tb_pay[]=$MOUTTT[0];
	}}
 }

 $CMD=$_POST['CMD'];
 if($CMD!="" ){
 $test=1;
 $result= mysql_query("SELECT id_balance from allocate_paiment_purchase  where facture='$CMD'   ");
 	while($MOUTTT=mysql_fetch_array($result)){
	if(!in_array("$MOUTTT[0]",$tb_pay)){
			   $tb_pay[]=$MOUTTT[0];
	}}
 }

	


$el=$_POST['search_compte'];

?>
<table class="table table-striped table-bordered "  >
							
							<tr > 
   					<td></td> 
   					<td><font size="1"><b><?php echo $N22; ?></td> 
   					<td><font size="1"><b><?php echo $N23; ?></td> 
   					<td><font size="1"><b><?php echo $N24; ?></td> 
   					<td><font size="1"><b><?php echo $N25; ?></td> 
   					<td><font size="1"><b><?php echo $N27; ?></td> 
   					<td><font size="1"><b><?php echo $N28; ?></td> 
   					
</tr> <?php 
if($test!=0){
$t=0;
foreach($tb_pay as $c ){
$moneyOut=mysql_query("select * from money where type='out' AND id='$c' and (id like '%$el%' or Description like '%$el%' or Date like '%$el%' or num_compte like '%$el%' or valeur like '%$el%' or client like '%$el%') order by id desc");
						
						while($MOUT=mysql_fetch_array($moneyOut)){
						$t++;
						$BC=mysql_query("select * from bank_account where Numero_Compte=$MOUT[6]");
		$BNK=mysql_fetch_array($BC)
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo $MOUT[2]; ?></td> 
					<td><font size="1"><?php echo $BNK[1].'('.$BNK[0].')'; ?></td> 
					<td><font size="1"><?php echo $MOUT[9]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[7],2,',','.').' '.$BNK[7]; ?></td> 
					
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N31; ?></th>
				<th><font size="1"><?php echo $N32; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from allocate_paiment_purchase  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select monnaie from vuepurchasetotale   where BonCommande='$cmdtest[1]'");
$Moniee=mysql_fetch_array($MOnie);
				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"><?php echo number_format((-1*$cmdtest[2]),2,',','.').'&nbsp;'.$Moniee[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from allocate_paiment_invoice  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select Monnaie from invoice   where id_facture='$cmdtest[1]'");
$Monieee=mysql_fetch_array($MOnie);
$maxpayAv=mysql_query("select * from  prefix where element='Avoir'");
$maxpayIdAv=mysql_fetch_array($maxpayAv);
$test=explode("$maxpayIdAv[0]",$cmdtest[1]);
$sign=1;
if(isset($test[1])){
$sign=-1;
}

				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($sign*$cmdtest[2]),2,',','.').'&nbsp;'.$Monieee[0]; ?></font></td>
				</tr>
				<?php } ?>
				</tbody>
				</table>
				<table>
				<?php 

$file_att=mysql_query("select *  from attach_envoi where operation='$MOUT[0]'");
if($attache=mysql_fetch_array($file_att)){

								?>
								<tr>
									
									<td>
										<font size="1" ><?php echo $attache[0]; ?></font>
									</td><td>
										&nbsp;<a  href="bktrans_data/<?php echo $attache[1]; ?>" class="btn btn-xs default btn-editable"target="_link" ><i class="fa fa-unlink"></i></a>
									</td>
								
								</tr>
								
					<?php }else{ ?>
					<tr>
									
									<td>
										<form action="MenuUtilisation.php?valeur=attacherexport.php&titre=<?php echo $MOUT[0];?>&id=<?php echo $MOUT[0];?>&url=<?php echo $url.".attacher.".$MOUT[0];?>&type=import" method="POST">
							<button type="submit" class=" green"><i class="fa fa-paperclip"></i></button>
							</form>
									</td>
								
								</tr>	<?php } ?>	
				</table>
				</td>
				<!-- différence -->
				
				</tr>
<?php } }}else{ 

$moneyOut=mysql_query("select * from money where type='out' and (id like '%$el%' or Description like '%$el%' or Date like '%$el%' or num_compte like '%$el%' or valeur like '%$el%' or client like '%$el%') order by id desc");
						$t=0;
						while($MOUT=mysql_fetch_array($moneyOut)){
						$t++;
						$BC=mysql_query("select * from bank_account where Numero_Compte=$MOUT[6]");
		$BNK=mysql_fetch_array($BC)
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo $MOUT[2]; ?></td> 
					<td><font size="1"><?php echo $BNK[1].'('.$BNK[0].')'; ?></td> 
					<td><font size="1"><?php echo $MOUT[9]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[7],2,',','.').' '.$BNK[7]; ?></td> 
					
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N31; ?></th>
				<th><font size="1"><?php echo $N32; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from allocate_paiment_purchase  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select monnaie from vuepurchasetotale   where BonCommande='$cmdtest[1]'");
$Moniee=mysql_fetch_array($MOnie);
				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"><?php echo number_format((-1*$cmdtest[2]),2,',','.').'&nbsp;'.$Moniee[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from allocate_paiment_invoice  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select Monnaie from invoice   where id_facture='$cmdtest[1]'");
$Monieee=mysql_fetch_array($MOnie);
$maxpayAv=mysql_query("select * from  prefix where element='Avoir'");
$maxpayIdAv=mysql_fetch_array($maxpayAv);
$test=explode("$maxpayIdAv[0]",$cmdtest[1]);
$sign=1;
if(isset($test[1])){
$sign=-1;
}

				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($sign*$cmdtest[2]),2,',','.').'&nbsp;'.$Monieee[0]; ?></font></td>
				</tr>
				<?php } ?>
				</tbody>
				</table>
				<table>
				<?php 

$file_att=mysql_query("select *  from attach_envoi where operation='$MOUT[0]'");
if($attache=mysql_fetch_array($file_att)){

								?>
								<tr>
									
									<td>
										<font size="1" ><?php echo $attache[0]; ?></font>
									</td><td>
										&nbsp;<a  href="bktrans_data/<?php echo $attache[1]; ?>" class="btn btn-xs default btn-editable"target="_link" ><i class="fa fa-unlink"></i></a>
									</td>
								
								</tr>
								
					<?php }else{ ?>
					<tr>
									
									<td>
										<form action="MenuUtilisation.php?valeur=attacherexport.php&titre=<?php echo $MOUT[0];?>&id=<?php echo $MOUT[0];?>&url=<?php echo $url.".attacher.".$MOUT[0];?>&type=import" method="POST">
							<button type="submit" class=" green"><i class="fa fa-paperclip"></i></button>
							</form>
									</td>
								
								</tr>	<?php } ?>	
				</table>
				</td>
				<!-- différence -->
				
				</tr>
<?php }} ?>
				</table><br>

	
	<?php
}
}
if(isset($_POST['search_Paiment_S'])){
include ("Connection.php");
foreach( $PSalaire as $employee ) 
{                       
 $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
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
  $V21 = $employee->getElementsByTagName( "e21" ); $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" ); $N22 = $V22->item(0)->nodeValue;
  $V23 = $employee->getElementsByTagName( "e23" ); $N23 = $V23->item(0)->nodeValue;
  $V24 = $employee->getElementsByTagName( "e24" ); $N24 = $V24->item(0)->nodeValue;
  $V25 = $employee->getElementsByTagName( "e25" ); $N25 = $V25->item(0)->nodeValue;
  $V26 = $employee->getElementsByTagName( "e26" ); $N26 = $V26->item(0)->nodeValue;
  $V27 = $employee->getElementsByTagName( "e27" ); $N27 = $V27->item(0)->nodeValue;
$el=$_POST['search_Paiment_S'];
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
$test=0;
 $tb_pay=array();
 $CIN=$_POST['CIN'];
 $max=$_POST['max'];
 $CBk=$_POST['CBk'];
 $url=$_POST['url'];
$max_aff="Limit 0,15";
 $req1="";
 $req2="";
if($CIN!=""){
$req1=" AND CIN='$CIN'";
}
 if($CBk!=""){
$req2=" AND Banque='$CBk'";
}
 if($max!=""){
$max_aff="Limit 0,$max";
}else{
$max_aff="";
}
 ?>
<table class="table  table-bordered table-hover"  >
			<thead> 
				<tr> 
   					<th><font size="1"></th> 
					 <th><font size="1"><?php echo $N11; ?></th>
                      <th><font size="1"><?php echo $N12; ?></th> 					 
					  <th><font size="1"><?php echo $N13; ?></th> 					 
					  <th><font size="1"><?php echo $N14; ?></th> 					 
                       <th><font size="1"><?php echo $N15; ?></th> 
                       <th><font size="1"><?php echo $N16; ?></th> 
				</tr> 
			</thead> 
			<tbody>
			<?php 
$moneyOut=mysql_query("SELECT * FROM salaire_payer SP, paiment_salaire PS WHERE PS.id = SP.id_payment AND (CIN like '%$el%' or  Montant/devise  like '%$el%' or periode_pay like '%$el%' or MN like '%$el%' or Date_paiment like '%$el%' or Banque like '%$el%' ) $req1 $req2  $max_aff")or die(mysql_error());
						$t=0;
						while($MOUT=mysql_fetch_array($moneyOut)){
						$pbc=mysql_query("select * from  paiment_salaire where id='$MOUT[1]' ");
						$pay=mysql_fetch_array($pbc);
						$t++;
						$bnc=mysql_query("select * from bank_account where Numero_Compte='$pay[4]'");
$bq=mysql_fetch_array($bnc);
$s=mysql_query("select * from personel where CIN='$MOUT[0]'");
$admin=mysql_fetch_array($s);
		?>
							<tr > 	
							
					<td  >
					
					
					<input type="checkbox" name="Choix_per<?php echo $t; ?>"  id="Choix_per<?php echo $t; ?>" onclick="getVirement();"></td> 
					<input type="hidden" name="CIN<?php echo $t; ?>"  value="<?php echo $MOUT[0]; ?>">
					<input type="hidden" name="Per<?php echo $t; ?>"  value="<?php echo $MOUT[3]; ?>">
					<td><font size="1"><?php echo $admin[1].'('.$MOUT[0].')'; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[2]/$MOUT[5],2,',','.').' '.$MOUT[4]; ?></td> 
					<td><font size="1"><?php echo $MOUT[3]; ?></font></td>
					<td><font size="1"><?php echo $bq[1].'-'.$bq[0]; ?></font></td>
					<td><font size="1"><?php echo $pay[2]; ?></td> 
					
					<td>
					<?php
$file_att=mysql_query("select *  from attach_envoi where operation='$MOUT[0]$MOUT[1]'");
if($attache=mysql_fetch_array($file_att)){

								?>
							
										<a  href="bktrans_data/<?php echo $attache[1]; ?>" class="btn btn-xs default btn-editable"target="_link" ><?php echo $attache[2]; ?></a>
										
					<?php }else{  ?>
				<a  href="MenuUtilisation.php?valeur=attacherexport.php&titre=<?php echo $MOUT[0];?>&id=<?php echo $MOUT[0].$MOUT[1];?>&url=<?php echo $url.".attacher.".$MOUT[0];?>&type=import" class="btn btn-xs default btn-editable"  ><?php echo $attache[2]; ?></a>
					<?php  } ?>			
				</td>
					
				</tr>
				
<?php } ?></tbody>
<input type="hidden" id="max_per" name="max_per" value="<?php echo $t;  ?>">



			 </table>
			
	<?php		
			
 }}
if(isset($_POST['SearchINV_compte'])){
include ("Connection.php");
foreach( $Compte as $employee ) 
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
  $N29 = $V29->item(0)->nodeValue;
  $V30 = $employee->getElementsByTagName( "e30" ); 
  $N30 = $V30->item(0)->nodeValue; $V31 = $employee->getElementsByTagName( "e31" ); 
  $N31 = $V31->item(0)->nodeValue; $V32 = $employee->getElementsByTagName( "e32" ); 
  $N32 = $V32->item(0)->nodeValue;
  
$req1="";

 $req2="";
 $test=0;
$tb_pay=array();
 $FCT=$_POST['FCT'];
 $t=$_POST['mx'];
 if($FCT!=""){
 $test=1;
 $result= mysql_query("SELECT id_balance from allocate_paiment_invoice where facture='$FCT' ");
 	while($MOUTTT=mysql_fetch_array($result)){
	if(!in_array("$MOUTTT[0]",$tb_pay)){
			   $tb_pay[]=$MOUTTT[0];
	}}
 }


$el=$_POST['SearchINV_compte'];

?>
<table class="table table-striped table-bordered "  >
							
							<tr > 
   					<td></td> 
   					<td><font size="1"><b><?php echo $N22; ?></td> 
   					<td><font size="1"><b><?php echo $N23; ?></td> 
   					<td><font size="1"><b><?php echo $N24; ?></td> 
   					<td><font size="1"><b><?php echo $N25; ?></td> 
   					<td><font size="1"><b><?php echo $N26; ?></td> 
   					<td><font size="1"><b><?php echo $N28; ?></td> 
   					
</tr> <?php 

if($test!=0){

foreach($tb_pay as $c ){
$moneyOut=mysql_query("select * from money where type='in' AND id='$c' and (id like '%$el%' or Description like '%$el%' or Date like '%$el%' or num_compte like '%$el%' or valeur like '%$el%' or client like '%$el%') order by id desc");
						
						while($MOUT=mysql_fetch_array($moneyOut)){
						$t++;
						$BC=mysql_query("select * from bank_account where Numero_Compte=$MOUT[6]");
		$BNK=mysql_fetch_array($BC)
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo $MOUT[2]; ?></td> 
					<td><font size="1"><?php echo $BNK[1].'('.$BNK[0].')'; ?></td> 
					<td><font size="1"><?php echo $MOUT[9]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[7],2,',','.').' '.$BNK[7]; ?></td> 
					
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N31; ?></th>
				<th><font size="1"><?php echo $N32; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from allocate_paiment_purchase  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select monnaie from vuepurchasetotale   where BonCommande='$cmdtest[1]'");
$Moniee=mysql_fetch_array($MOnie);
				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"><?php echo number_format((-1*$cmdtest[2]),2,',','.').'&nbsp;'.$Moniee[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from allocate_paiment_invoice  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select Monnaie from invoice   where id_facture='$cmdtest[1]'");
$Monieee=mysql_fetch_array($MOnie);
$maxpayAv=mysql_query("select * from  prefix where element='Avoir'");
$maxpayIdAv=mysql_fetch_array($maxpayAv);
$test=explode("$maxpayIdAv[0]",$cmdtest[1]);
$sign=1;
if(isset($test[1])){
$sign=-1;
}

				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($sign*$cmdtest[2]),2,',','.').'&nbsp;'.$Monieee[0]; ?></font></td>
				</tr>
				<?php } ?>
				</tbody>
				</table>
				<table>
				<?php 

$file_att=mysql_query("select *  from attach_envoi where operation='$MOUT[0]'");
if($attache=mysql_fetch_array($file_att)){

								?>
								<tr>
									
									<td>
										<font size="1" ><?php echo $attache[0]; ?></font>
									</td><td>
										&nbsp;<a  href="bktrans_data/<?php echo $attache[1]; ?>" class="btn btn-xs default btn-editable"target="_link" ><i class="fa fa-unlink"></i></a>
									</td>
								
								</tr>
								
					<?php }else{ ?>
					<tr>
									
									<td>
										<form action="MenuUtilisation.php?valeur=attacherexport.php&titre=<?php echo $MOUT[0];?>&id=<?php echo $MOUT[0];?>&url=<?php echo $url.".attacher.".$MOUT[0];?>&type=import" method="POST">
							<button type="submit" class=" green"><i class="fa fa-paperclip"></i></button>
							</form>
									</td>
								
								</tr>	<?php } ?>	
				</table>
				</td>
				<!-- différence -->
				
				</tr>
<?php } }}else{ 

$moneyOut=mysql_query("select * from money where type='in' and (id like '%$el%' or Description like '%$el%' or Date like '%$el%' or num_compte like '%$el%' or valeur like '%$el%' or client like '%$el%') order by id desc");
						
						while($MOUT=mysql_fetch_array($moneyOut)){
						$t++;
						$BC=mysql_query("select * from bank_account where Numero_Compte=$MOUT[6]");
		$BNK=mysql_fetch_array($BC)
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo $MOUT[2]; ?></td> 
					<td><font size="1"><?php echo $BNK[1].'('.$BNK[0].')'; ?></td> 
					<td><font size="1"><?php echo $MOUT[9]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[7],2,',','.').' '.$BNK[7]; ?></td> 
					
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N31; ?></th>
				<th><font size="1"><?php echo $N32; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from allocate_paiment_purchase  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select monnaie from vuepurchasetotale   where BonCommande='$cmdtest[1]'");
$Moniee=mysql_fetch_array($MOnie);
				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"><?php echo number_format((-1*$cmdtest[2]),2,',','.').'&nbsp;'.$Moniee[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from allocate_paiment_invoice  where id_balance='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){
$MOnie=mysql_query("select Monnaie from invoice   where id_facture='$cmdtest[1]'");
$Monieee=mysql_fetch_array($MOnie);
$maxpayAv=mysql_query("select * from  prefix where element='Avoir'");
$maxpayIdAv=mysql_fetch_array($maxpayAv);
$test=explode("$maxpayIdAv[0]",$cmdtest[1]);
$sign=1;
if(isset($test[1])){
$sign=-1;
}

				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[1]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($sign*$cmdtest[2]),2,',','.').'&nbsp;'.$Monieee[0]; ?></font></td>
				</tr>
				<?php } ?>
				</tbody>
				</table>
				<table>
				<?php 

$file_att=mysql_query("select *  from attach_envoi where operation='$MOUT[0]'");
if($attache=mysql_fetch_array($file_att)){

								?>
								<tr>
									
									<td>
										<font size="1" ><?php echo $attache[0]; ?></font>
									</td><td>
										&nbsp;<a  href="bktrans_data/<?php echo $attache[1]; ?>" class="btn btn-xs default btn-editable"target="_link" ><i class="fa fa-unlink"></i></a>
									</td>
								
								</tr>
								
					<?php }else{ ?>
					<tr>
									
									<td>
										<form action="MenuUtilisation.php?valeur=attacherexport.php&titre=<?php echo $MOUT[0];?>&id=<?php echo $MOUT[0];?>&url=<?php echo $url.".attacher.".$MOUT[0];?>&type=import" method="POST">
							<button type="submit" class=" green"><i class="fa fa-paperclip"></i></button>
							</form>
									</td>
								
								</tr>	<?php } ?>	
				</table>
				</td>
				<!-- différence -->
				
				</tr>
<?php }} ?>
				</table><br>

	
	<?php
}
}
if(isset($_POST['search_Tax_paye'])){
include ("Connection.php");
foreach( $TX_Pe as $employee ) 
{                       
                                $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
  $V2 = $employee->getElementsByTagName( "e2" ); $N2 = $V2->item(0)->nodeValue;
  $V3 = $employee->getElementsByTagName( "e3" ); $N3 = $V3->item(0)->nodeValue; 
  $V4 = $employee->getElementsByTagName( "e4" ); $N4 = $V4->item(0)->nodeValue; 
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
  $V21 = $employee->getElementsByTagName( "e21" ); $N21 = $V21->item(0)->nodeValue;
  $V22 = $employee->getElementsByTagName( "e22" ); $N22 = $V22->item(0)->nodeValue;
  $V23 = $employee->getElementsByTagName( "e23" ); $N23 = $V23->item(0)->nodeValue;
  $V24 = $employee->getElementsByTagName( "e24" ); $N24 = $V24->item(0)->nodeValue;
  $V25 = $employee->getElementsByTagName( "e25" ); $N25 = $V25->item(0)->nodeValue;
  $V26 = $employee->getElementsByTagName( "e26" ); $N26 = $V26->item(0)->nodeValue;
  $V27 = $employee->getElementsByTagName( "e27" ); $N27 = $V27->item(0)->nodeValue;
$req1="";

 $req2="";
 $test=0;
 $MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
 $urlC=$_POST['urlC'];
$tb_pay=array();
 $FCT=$_POST['FCT'];
 if($FCT!=""){
 $test=1;
 $result= mysql_query("SELECT id_payment from  payment_tax_invoice where Reference='$FCT' ");
 	while($MOUTTT=mysql_fetch_array($result)){
	if(!in_array("$MOUTTT[0]",$tb_pay)){
			   $tb_pay[]=$MOUTTT[0];
	}}
 }

 $CMD=$_POST['CMD'];
 if($CMD!="" ){
 $test=1;
 $result= mysql_query("SELECT id_payment from payment_tax_purchase  where Reference='$CMD'   ");
 	while($MOUTTT=mysql_fetch_array($result)){
	if(!in_array("$MOUTTT[0]",$tb_pay)){
			   $tb_pay[]=$MOUTTT[0];
	}}
 }

	


$el=$_POST['search_Tax_paye'];

?>
<table class="table table-striped table-bordered "  >
							
							<tr > 
   					<td></td> 
					<td><font size="1"><b><?php echo $N22; ?></td> 
   					<td><font size="1"><b><?php echo $N23; ?></td> 
   					<td><font size="1"><b><?php echo $N24; ?></td> 
   					<td><font size="1"><b><?php echo $N25; ?></td> 
   					 
   					
</tr> <?php 
if($test!=0){
$t=0;
foreach($tb_pay as $c ){
$moneyOut=mysql_query("select * from payement_tax where  id='$c' and (id like '%$el%' or Tax like '%$el%' or Montant_peyye like '%$el%' or Date_paiment like '%$el%' or Commande like '%$el%' ) order by id desc");
						
						$t=0;
						while($MOUT=mysql_fetch_array($moneyOut)){
						$t++;
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[2],2,',','.').' '.$MN1[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[3]; ?></td> 
					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $MOUT[4];?>&titre=<?php echo $N16." ".$MOUT[4];?>&url=<?php echo $urlC.$N16;?> "><?php echo $MOUT[4];?></a></font></td> 
    				
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N26; ?></th>
				<th><font size="1"><?php echo $N27; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from payment_tax_invoice  where id_payment='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){

				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[0]; ?></font></td>
					
				<td><font size="1"><?php echo number_format((-$cmdtest[2]),2,',','.').'&nbsp;'.$MN1[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from payment_tax_purchase  where id_payment='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){


				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[0]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($cmdtest[2]),2,',','.').'&nbsp;'.$MN1[0]; ?></font></td>
				</tr>
				<?php } ?>
					
				
				</tbody>
				</table>
				
				</td>
				<!-- différence -->
				
				</tr>
<?php } ?>
				</table>
<?php } }else{ 

$moneyOut=mysql_query("select * from payement_tax where  (id like '%$el%' or Tax like '%$el%' or Montant_peyye like '%$el%' or Date_paiment like '%$el%' or Commande like '%$el%' ) order by id desc");
						
						$t=0;
						$t=0;
						while($MOUT=mysql_fetch_array($moneyOut)){
						$t++;
		?>
							<tr > 	
							
					<td id="dt<?php echo $t; ?>" >
					
					<i id="<?php echo $t; ?>" class="fa fa-plus-square-o" onclick="getdetaille(this);"></i></td> 
					<td><font size="1"><?php echo $MOUT[1]; ?></td> 
					<td><font size="1"><?php echo number_format($MOUT[2],2,',','.').' '.$MN1[0]; ?></td> 
					<td><font size="1"><?php echo $MOUT[3]; ?></td> 
					<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $MOUT[4];?>&titre=<?php echo $N16." ".$MOUT[4];?>&url=<?php echo $urlC.$N16;?> "><?php echo $MOUT[4];?></a></font></td> 
    				
    				
				</tr>
				<tr  id="tr<?php echo $t; ?>" style="display:none">
				
				<td colspan="7">
				<table  class="table  table-bordered "   >
				<thead>
				<th><font size="1">#</th>
				<th><font size="1"><?php echo $N26; ?></th>
				<th><font size="1"><?php echo $N27; ?></th>
				</thead>
				<tbody>
				<?php
				$cmd=mysql_query("select * from payment_tax_invoice  where id_payment='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){

				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[0]; ?></font></td>
					
				<td><font size="1"><?php echo number_format((-$cmdtest[2]),2,',','.').'&nbsp;'.$MN1[0]; ?></font></td>
				<td><font size="1"></font></td>
				</tr>
				<?php 
				} 
				
				$cmd=mysql_query("select * from payment_tax_purchase  where id_payment='$MOUT[0]'");
while($cmdtest=mysql_fetch_array($cmd)){


				
				?>
				
				<tr>
				<td><font size="1"><?php echo $cmdtest[0]; ?></font></td>
				<td><font size="1"></font></td>
				<td><font size="1"><?php echo number_format(($cmdtest[2]),2,',','.').'&nbsp;'.$MN1[0]; ?></font></td>
				</tr>
				<?php } ?>
					
				
				</tbody>
				</table>
				
				</td>
				<!-- différence -->
				
				</tr>
<?php } ?>
				</table><br>

	
	<?php
}
}}
if(isset($_POST['search_fournisseur'])){
foreach( $Fournisseur as $employee ) 
{  $V1 = $employee->getElementsByTagName( "e1" ); $N1 = $V1->item(0)->nodeValue; 
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

  
$crit="";
if(isset($_POST['indice'])){
 $indice=$_POST['indice'];
 $ordre=$_POST['ordre'];
 $crit="ORDER BY  $indice  $ordre";
 }
include ("Connection.php");
$el=$_POST['search_fournisseur'];

$req2="";

 $max=$_POST['max'];
 if($max!="2"){
 $req2="LIMIT 0,$max";
 }
$s = mysql_query("select * from supplier where Nom_Soc  LIKE '%$el%' OR	Nom  LIKE '%$el%'	OR Telephone1 LIKE '%$el%'	OR	AdressMail LIKE '%$el%'  OR type_entreprise LIKE '%$el%' $crit $req2");
$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
?>
<table class="tablesorter" style="width:100%" > 
			<thead> 
				<tr> 
   					<th></th> 
    				<th><font size="1"><?php echo $N2; ?></h5><br><input type="image" id="Nom_Soc" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Nom_Soc" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N3; ?></h5><br><input type="image" id="Nom" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Nom" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
					<th><font size="1"><?php echo $N4; ?></h5><br><input type="image" id="AdressMail" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="AdressMail" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				 <th><font size="1"><?php echo $N5; ?></h5><br><input type="image" id="Telephone1" src="images/dessend.png" width="10" title="<?php echo $N16; ?>" onclick="findordr(this,'DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="Telephone1" title="<?php echo $N15; ?>" onclick="findordr(this,'ASC');" ></th> 
    				<th><font size="1"><?php echo $N6; ?></h5></th> 
				</tr> 
			</thead> 
			<?php while($admin=mysql_fetch_array($s)){
			$texte = str_replace('&','%26',$admin[0]);

?>
			<tbody> 
				<tr  bgcolor="d5d7dc"  height="15"> 
   					<td><a href="javascript:PetiteFenetre()" ><input type="checkbox"  ></a></td> 
    				<td><font size="2"><?php echo $admin[0];?></td> 
    				<td><font size="2"><?php echo $admin[3]." ".$admin[2]." ".$admin[4];?></td> 
					<td><font size="2"><?php echo $admin[5];?></td> 
					<td><font size="2"><?php echo $admin[6];?></td> 
    				<td><a href="MenuUtilisation.php?valeur=ModifierFournisseur.php&NomSOC=<?php echo $texte; ?>&titre=<?php echo $N10; ?>" ><input  type="image" src="images/icn_edit.png" title="Edit"></a><a href="gestionFournisseur.php?NomSoc=<?php echo $texte;?>&type=delete"><input type="image" src="images/icn_trash.png" onclick="return confirmLink(this) ;"  title="<?php echo $N7; ?>"></a><a href="MenuUtilisation.php?valeur=detailleFournisseur.php&Nom_Soc=<?php echo $texte;?>&titre=<?php echo $N11; ?><?php echo $texte;?>" ><input  type="image" src="images/icn_categories.png" title="<?php echo $N8; ?>"></a><a href="MenuUtilisation.php?valeur=Bon_commande.php&Nom_Soc=<?php echo $texte;?>" ><input  type="image" src="images/facture.png" title="<?php echo $N9; ?><?php echo $admin[0];?>"></a></td> 
				</tr> 
				
			</tbody> 
			
<?php }
?>
			 </table><br>
	<?php
}
}

foreach( $ALLNC as $employee ) 
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
  $N13 = $V13->item(0)->nodeValue;
if(isset($_POST['search_commande_novalide'])){
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
$el=$_POST['search_commande_novalide'];
$s = mysql_query("select * from purchase where confirmation='0' AND ( reference  LIKE '%$el%' OR	fournisseur  LIKE '%$el%'	OR dossiers LIKE '%$el%'	OR	description	LIKE '%$el%') $crit $req2");
?>
<table class="tablesorter" style="width:100%">
			<thead> 
				<tr> 
   					 
    				<th><font size="1"><?php echo $N4; ?></h4> <br><input type="image" id="reference" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('reference','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="reference" title="<?php echo $N2; ?>" onclick="findordr('reference','ASC');" ></th>
					<th><font size="1"><?php echo $N5; ?></h4> <br><input type="image" id="fournisseur" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('fournisseur','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="fournisseur" title="<?php echo $N2; ?>" onclick="findordr('fournisseur','ASC');" ></th>
					<th><font size="1"><?php echo $N6; ?></h4> <br><input type="image" id="dossiers" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('dossiers','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="dossiers" title="<?php echo $N2; ?>" onclick="findordr('dossiers','ASC');" ></th> 
    				<th><font size="1"><?php echo $N7; ?></h4> <br><input type="image" id="description" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('description','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="description" title="<?php echo $N2; ?>" onclick="findordr('description','ASC');" ></th> 
    				<th><font size="1"><?php echo $N8; ?></h4> <br><input type="image" id="date_commande" src="images/dessend.png" width="10" title="<?php echo $N3; ?>" onclick="findordr('date_commande','DESC');" ><input type="image" width="10" height="8" src="images/assend.png" id="date_commande" title="<?php echo $N2; ?>" onclick="findordr('date_commande','ASC');" ></th>
					<th><font size="1"><?php echo $N9; ?> </h4></th>
					<th><font size="1">Total </h4></th>
    				<th style="width:120px"><font size="1"><?php echo $N12; ?> </h4></th> 
				</tr> 
			</thead> 
			<?php 
						$MN=mysql_query("select * from currency where Monnaie_utliser='1'");
$MN1=mysql_fetch_array($MN);
while($admin=mysql_fetch_array($s)){
			$get_tot = mysql_query("SELECT * FROM  `vuepurchasetotale` where BonCommande='$admin[0]'");
               $tot=mysql_fetch_array($get_tot);
			   $tot1=$tot[3];
			
?>		 
				<tr  bgcolor="#c77c77;"> 
   					 
    				<td><font size="1"><a href="MenuUtilisation.php?valeur=dettailsCommand.php&Ref=<?php echo $admin[0];?>&titre=<?php echo $admin[0];?> "><?php echo $admin[0];?></a></font></td> 
    				<td><font size="1"><?php echo $admin[1];?></font></td> 
					<td><font size="1"><?php echo $admin[2];?></font></td> 
					<td><font size="1"><?php echo $admin[3];?></font></td>
					<td><font size="1"><?php echo $admin[4];?></font></td> 
					<td><font size="1"><?php echo $admin[5];?></font></td> 
					<td><font size="1"><?php echo number_format($tot1,2,',','.')."&nbsp;".$MN1[0]; ?></font></td> 
					<td><a href="finalcom.php?reference=<?php echo $admin[0];?>&four=<?php echo $admin[1];?>" target="_link"><img src="images/pdf2.png" width="15" title="PDF"></a>
						</td> 
				</tr> 		 			
<?php } echo "</table>";
}}

if(isset($_POST['confirm_delete'])){
include ("Connection.php");
$el=$_POST['confirm_delete'];
			$pass=md5($el);
			$test=false;
			$s = mysql_query("select * from users  where type_acces='Administrateur' ");
		
			while($admin=mysql_fetch_array($s)){
			if($admin[1]=="$pass"){
			$test=true;
			}
			}
			if($test){
			echo "delete_all_information.php/1";
			}else{
				echo "#/0";
		
			}
	

  }

?>
