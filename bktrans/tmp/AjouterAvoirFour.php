<?php
if(!isset($_SESSION['login']) ||  !isset($_SESSION['pwd'])){
?>
<script type="text/javascript"> 
document.location.href="../index.php";
  </script>
  <?php
}
?>

<?php
include ("Connection.php");
$url=$N4.".".$N11.".".$N13;
$url2=$N4.".".$N11;
$tt=$N13;
$com=$N11;
if("$permission[1]"=="Administrateur" || "$permission[4]"=='4'){ 
foreach( $employees as $employee ) 
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
  $N32 = $V32->item(0)->nodeValue;$V33 = $employee->getElementsByTagName( "e33" ); 
  $N33 = $V33->item(0)->nodeValue;$V34 = $employee->getElementsByTagName( "e34" ); 
  $N34 = $V34->item(0)->nodeValue;


//--------------------------------------------------//
//Sauvgarde de Facture    //
//--------------------------------------------------//
include ("Connection.php");
$C=mysql_query("select * from groupe_account");
$ENV=mysql_query("select * from operation");
$LOG1=mysql_query("select *  from  location  ");
$LOG2=mysql_query("select *  from  logistics_services ");
$LOG3=mysql_query("select *  from   magasinage");
$s=mysql_query("select * from supplier");
$d=mysql_query("select * from files where etat_dossier='ouvert'");
$m=mysql_query("select * from currency where choix_monnai='1'");
$Mon=mysql_query("select * from currency ");
$Mn=mysql_query("select * from currency where choix_monnai='1'");
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/uploader.css" rel="stylesheet" />


<script type="text/javascript">

//--------------------------------------------------//
//calcul                                            //
//--------------------------------------------------//
  function valider() {
  var net=0;
  var tva=0;
  var total=0;
   var NET=document.getElementById("NET");
   var TV=document.getElementById("T");
   var TOTAL=document.getElementById("TOTAL");
$fieldCount = document.getElementById("fieldsCount").value;
        for ($i = 1; $i <= $fieldCount; $i++)
        {
		if(document.getElementById("qt"+$i)){
	var donnees = document.getElementById("qt"+$i).value;
	var donnees1 = document.getElementById("prix"+$i).value;
	var TVA = document.getElementById("TVA"+$i).value;
	var Devis = document.getElementById("devise"+$i).value;
function TVAA(number)
{
    x = number.split('/');
	return x[1];
}
Net = document.getElementById("net"+$i);
Gross = document.getElementById("gross"+$i);
b=donnees*donnees1*Devis;
T1=(TVAA(TVA)*0.01)*b;
T=T1+b;
T2=b;
a=b;
net=net+b;
tva=tva+T1;
total=total+T;
function formatNumber(number)
{
    number = number.toFixed(2) + '';
    x = number.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
	
}

   Net.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(T2)+""; 
   Gross.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(T)+""; 
    TOTAL.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(total)+""; 
  TV.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(tva)+""; 
   NET.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(net)+""; 
  


}}

}

//Monnaie
function code(){
    var codexh = null;
        if(window.XMLHttpRequest) 
        codexh = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        codexh = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        codexh = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    codexh= false;
    }
    return codexh;
    }
  
    function listecode(){
	
    var codexh = code();

    codexh.onreadystatechange = function(){
	
    if(codexh.readyState == 4 && codexh.status == 200)
        {
    leselect = codexh.responseText;
	$fieldCount = document.getElementById("fieldsCount").value;
    for ($i = 2; $i <=$fieldCount; $i++)
        {
    document.getElementById('compte'+$i).innerHTML=leselect;
	
    }
	}
    }
	
    // Ici on va voir comment faire du post
    codexh.open("POST","verification_donne.php",true);
    codexh.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    codexh.send("code=liste");
    }
	//-------------------------------------------------//
  //Changer le monnaie par défault                    //
//--------------------------------------------------//
	function Monnaie(){
    var Monnaiexh = null;
        if(window.XMLHttpRequest) 
        Monnaiexh = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        Monnaiexh = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        Monnaiexh = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    Monnaiexh= false;
    }
    return Monnaiexh;
    }
  
    function changemonnaie(abr){
    var Monnaiexh = Monnaie();

    Monnaiexh.onreadystatechange = function(){
	
    if(Monnaiexh.readyState == 4 && Monnaiexh.status == 200)
        {
    leselect = Monnaiexh.responseText;
	document.getElementById('mn').innerHTML="&nbsp;&nbsp;<font size=1>"+document.getElementById(abr.id).value;
	document.getElementById('mn1').innerHTML="&nbsp;&nbsp;<font size=1>"+document.getElementById(abr.id).value;
	document.getElementById('mn2').innerHTML="&nbsp;&nbsp;<font size=1>"+document.getElementById(abr.id).value;
	
	}
    }
	
    // Ici on va voir comment faire du post
    Monnaiexh.open("POST","verification_donne.php",true);
	
    Monnaiexh.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
abs=document.getElementById(abr.id).value ;
    Monnaiexh.send("Monnaiee="+abs);
	mn='<?php echo $default_monnaie[0]; ?>';
	getDesvise(abs,mn,'deviseVerLo');
    }
	


	
	//client
	
	// find operation
	
function operation(){
    var op = null;
        if(window.XMLHttpRequest) 
        op = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        op = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        op = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    op= false;
    }
    return op;
    }
  
    function findoperation(c){
	
    var op = operation();

    op.onreadystatechange = function(){
	
    if(op.readyState == 4 && op.status == 200)
        {
    leselect = op.responseText;
	   //document.getElementById("prob").innerHTML=leselect;
	a=leselect.split('&&');
   document.getElementById("doss").innerHTML=a[1];
   document.getElementById("client").innerHTML=a[0];

  
	}
    }
	
    // Ici on va voir comment faire du post
    op.open("POST","verification_donne.php",true);
	projet = document.getElementById(c.id).value;
    op.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    op.send("doss="+projet);
    }
    // Date de echeance=date d'aujerdhui + terme de paiment
	function couts(){
    var getCouts = null;
        if(window.XMLHttpRequest) 
        getCouts = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        getCouts = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        getCouts = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    getCouts= false;
    }
    return getCouts;
    }
  
    function getItem(n){
	
    var getCouts = couts();

    getCouts.onreadystatechange = function(){
	
    if(getCouts.readyState == 4 && getCouts.status == 200)
        {
    leselect = getCouts.responseText;
	
	document.getElementById("Echd").value=leselect;
	
	}
    }
	
    // Ici on va voir comment faire du post
    getCouts.open("POST","verification_donne.php",true);
	
    getCouts.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	
     clt=n.value;
    getCouts.send("Dech="+clt);
	

    }
</script>
<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput p').size()+2;

$('#addNew').live('click', function() {
var j=document.getElementById("fieldsCount").value;
var i =(1*j)+1;


$('<tr><td><div class="form-group"><div class="col-md-4"><Textarea  style="width:150px;size:4px;" class="form-control" id=Description'+ i + ' name=Description'+i+' required /></textarea></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0   required class="form-control" style=width:80px; id=qt'+ i +' name=qt' +i+' /></div></div></td><td ><div ><div class="form-group"><div class="col-md-4"><input type=Number required  min=0 id=prix'+ i + ' style=width:80px; name=prix'+ i + ' class="form-control" onMouseOut="valider();" placeholder=0.00  ></div></div></td><td><div class="form-group"><div class="col-md-4"><select id=monnaie'+i+' name=monnaie'+i+' onchange=changerdevise(this,'+i+'); required=required style=width:90px; class="form-control select2me"><?php while($Mnn=mysql_fetch_array($Mon)){ if($Mnn[0]==$default_monnaie[0]){ECHO "<option value=".$Mnn[0]." selected>".$Mnn[0]."</option>";}else{ ECHO "<option value=".$Mnn[0]." >".$Mnn[0]."</option>";}} ?></select></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0 name=devise'+ i + ' id=devise'+ i +' value=1  onMouseOut="valider();"  class="form-control " style=width:60px;> </div></div></td><td ><div class="form-group"><div class="col-md-4"><select  id=TVA'+ i +' style=width:85px; name=TVA'+ i +'  onMouseOut="valider();"  class="form-control select2me"  ><option value="0/0">0</option><?php $def_tax = mysql_query("SELECT * FROM  tax");while($def_tx = mysql_fetch_array($def_tax)){echo "<option value=".$def_tx[0]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; } ?></select><select name="Compte'+i+'" required="required" style="width:100px;" class="form-control select2me"  ><option value="" selected><?php echo $N17; ?></option><?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' AND  etat_affiche like '1%'");while($ab=mysql_fetch_array($a)){?><option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option><?php }} $_SESION["'".$i."'"]=$ad[0];}?></select></div></div></td><td ><div id=net'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td ><div id=gross'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td><a href="#" id="remNew" title="suprimer"><i class="fa fa-times"></i></a></td></tr>').appendTo(addDiv);
document.getElementById("fieldsCount").value=i;
i++;

return false;
});

$('#remNew').live('click', function() {
$(this).parents('tr').remove();

i--;
var net=0;
  var tva=0;
  var total=0;
   var NET=document.getElementById("NET");
   var TV=document.getElementById("T");
   var TOTAL=document.getElementById("TOTAL");
$fieldCount = document.getElementById("fieldsCount").value;
        for ($i = 1; $i <= $fieldCount; $i++)
        {
	var donnees = document.getElementById("qt"+$i).value;
	var donnees1 = document.getElementById("prix"+$i).value;
	var TVA = document.getElementById("TVA"+$i).value;
	var Devis = document.getElementById("devise"+$i).value;
function TVAA(number)
{
    x = number.split('/');
	return x[1];
}
Net = document.getElementById("net"+$i);
Gross = document.getElementById("gross"+$i);
b=donnees*donnees1*Devis;
T1=(TVAA(TVA)*0.01)*b;
T=T1+b;
T2=b;
a=b;
net=net+b;
tva=tva+T1;
total=total+T;
function formatNumber(number)
{
    number = number.toFixed(2) + '';
    x = number.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
	
}

   Net.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(T2)+""; 
   Gross.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(T)+""; 
    TOTAL.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(total)+""; 
  TV.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(tva)+""; 
   NET.innerHTML ="&nbsp;&nbsp;<font size=1>"+formatNumber(net)+""; 
  


}


return false;
});
});

</script>

<?php
//--------------------------------------------------//
//Sauvgarde de Facture    //
//--------------------------------------------------//

if(isset($_POST['ajouterCommande'])){

$fournisseur=$_POST['Fournisseur'];
$doss=$_POST['Projet'];
$D=$_POST['Date'];
$DP=$_POST['Datep'];
$MN=$_POST['monnaie'];
$OP=$_POST['OP'];
$login=$_SESSION['login'];

$g=mysql_query("select * from currency where Monnaie_utliser=1 ");
$h=mysql_fetch_array($g);
$monnaie=$h[0];
$prefx=mysql_query("select * from  prefix where element='Avoir' ");
$pref=mysql_fetch_array($prefx);
$a=mysql_query("select  * from  purchase where reference like '$pref[0]%'  ORDER BY reference  DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$typ=explode("$pref[0]",$t[0]);
if(isset($typ[1])){
$Cod = sprintf("%07d",$typ[1]+1);
}else{
$Cod = sprintf("%07d",1);

}
$Ref="$pref[0]".$Cod;
$reference=$_POST['Ref'];
$Max=$_POST['fieldsCount'];
$Maxi=0;
if(isset($_POST['Max'])){
$Maxi=$_POST['Max'];
}
$Resum=$_POST['textS'];
$desc = str_replace("'", "''",$Resum);
$payement=$_POST['payementF'];
$Remercie="";
$Remercie = str_replace("'", "''",$Remercie);
$autre_monnaie=$_POST['monnaie'];
$Change=$_POST['DFT'];


$PRD=mysql_query("select * from financial_period where etat=1 ");
$PR=mysql_fetch_array($PRD);
$dtd=explode('/',$D);
$dtf=explode('/',$DP);
If(!isset($dtd[1])  ){
$dtd=explode('-',$D);

}
If(!isset($dtf[1])  ){
$dtf=explode('-',$DP);

}$tst=1;
if($dtd[0]>$dtf[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";
}elseif($dtd[0]==$dtf[0]){
if($dtd[1]>$dtf[1]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";

}elseif($dtd[1]==$dtf[1]){
if($dtd[2]>$dtf[2]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";
}
}}

$PD=explode("-",$PR[2]);
$PF=explode("-",$PR[3]);
//Comparéson date debut *date commande
if($dtd[0]<$PD[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";
}elseif($dtd[0]==$PD[0]){
if($dtd[1]<$PD[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";

}elseif($dtd[1]==$PD[1]){
if($dtd[2] < $PD[2] || $dtd[2] == $PD[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";
}
}}

if($dtd[0]>$PF[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";
}elseif($dtd[0]==$PF[0]){
if($dtd[1]>$PF[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";

}elseif($dtd[1]==$PF[1]){
if($dtd[2] > $PF[2] || $dtd[2] == $PF[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoirFour.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";
}
}}
if($tst==1){
//Echo "insert into purchase values('$Ref','$fournisseur','$doss','$desc','$D','$DP','0','$MN',0,'$Change',0,'$login','$monnaie','$OP','0','$reference','$PR[0]',NULL,NULL,0)";
$etat_up=mysql_query("insert into purchase values('$Ref','$fournisseur','$doss','$desc','$D','$DP','0','$MN',0,'$Change',0,'$login','$monnaie','$OP','0','$reference','$PR[0]',NULL,NULL,0)");
for($i=1;$i<=$Max;$i++){
if(isset($_POST["Description".$i])){
$desc=$_POST["Description".$i];
$desc = str_replace("'", "''",$desc);
$qt=$_POST["qt".$i];
$prix=$_POST["prix".$i];
$TVA=$_POST["TVA".$i];
$monnaie=$_POST["monnaie".$i];
$devis=$_POST["devise".$i];
$compte=$_POST["Compte".$i];
$TVAA=explode('/',$TVA);
$etat=mysql_query("insert into element_purchase values ('$i','$Ref','$desc',$qt,'-$prix','$monnaie','$devis','$TVAA[1]','$compte','$TVAA[0]',0);");
//echo "insert into element_Facture values ($i,'$desc',$qt,'$prix','$TVA','$monnaie',$devis,'$Ref','$compte')";
}
}
$succes="error";
if($etat_up){    
$succes=$com.' : '.$Ref.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}


$link="MenuUtilisation.php?valeur=AllCommandeNonConfirmer.php&titre=$tt&etat_up=$etat_up&url=$url&msg=$succes";
}
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link; ?>";
  </script>
  <?php
}else{
	
	
//--------------------------------------------------//
//Formulaire de création de Facture et ses elements //
//--------------------------------------------------//


?>
<form method="POST" action="MenuUtilisation.php?valeur=AjouterAvoirFour.php" id="form_sample_2" class="form-horizontal" >
<div class="portlet box blue-hoki">
											<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i><?php echo  $_GET['titre']; ?> 
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
								
							</div>
						</div>
						<div class="portlet-body form">
					<!-- BEGIN FORM-->
							
						
								<div class="form-body">
								<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										<?php echo $error_form; ?>
									</div>
						
						<input  type="hidden" value=1 id="fieldsCount" name="fieldsCount" placeholder="1"   style="width:130"  >		
<table >
<tr>
<td>
<div class="form-group"><label class="control-label col-md-8"><?php echo $N9; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="OP" id="OP"  class="form-control select2me" required="required"   style="width:150px" onchange="findoperation(this);" >
<?php
 if(isset($_GET['projet'])&&isset($_GET['id'])){ ?>
<option value="<?php echo $_GET['id']; ?>"><?php echo $_GET['id']; ?></option>
<?php }else{ ?>
<option value=""></option>
<?php while($ad=mysql_fetch_array($ENV)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }?>
<?php while($ad=mysql_fetch_array($LOG1)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }?>
<?php while($ad=mysql_fetch_array($LOG2)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }?><?php while($ad=mysql_fetch_array($LOG3)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }}?>

</select></div></div>
</td>
<td><div class="form-group"><label class="control-label col-md-2"><?php echo $N2; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">

												<input type="text" class="form-control"  name="Date"  required  style="width:120px" value="<?php echo date("Y-m-d"); ?>" >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div></div></div></td>
<td><div class="form-group"><label class="control-label col-md-2"><?php echo $N3; ?>&nbsp;<span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Datep" id="Echd" style="width:120px" required value="" >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											</div>
											</div>
</td>
<td >
<div class="form-group"><label class="control-label col-md-2"><?php echo $N4; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<input type="text"    class="form-control "   style="width:140px;" name="Ref" value="" required="required" >
</div></div>
</td>
</tr>
<tr>
<td>
<div class="form-group"><label class="control-label col-md-2"><?php echo $N6; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="Fournisseur"   required="required" class="form-control select2me"  onchange="getItem(this);" style="width:150px" >
<option value=""></option>
<?php if(isset($_GET['projet'])&&isset($_GET['id'])){ 
$id=$_GET['id'];
$tb=$_GET['tb'];
$cl=mysql_query("select client from $tb where id='$id' ");
$clt=mysql_fetch_array($cl);
?>
<option value="<?php echo $clt[0]; ?>"><?php echo $clt[0]; ?></option>
<?php } ?>

<?php while($admin=mysql_fetch_array($s)){?>
<option value="<?php echo $admin[0];?>"><?php echo $admin[0];?></option>
<?php }?>
</select></div></div></td>
<td>
<div class="form-group"><label class="control-label col-md-2"><?php echo $N7; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="monnaie" id="monnaie" required="required" style="width:120px;" class="form-control select2me"  onchange="changemonnaie(this);" >
<?php while($M=mysql_fetch_array($m)){
$def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
$def_monnaie = mysql_fetch_array($def);
if($def_monnaie[0]==$M[0]){
?>
<option selected value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php }else{?>
<option  value="<?php echo $M[0];?>"><?php echo $M[0];?></option>
<?php } }?>
</select></div></div></td>
<td >
<div class="form-group"><label class="control-label col-md-2"><?php echo $N8; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<input type="text" id="deviseVerLo"   class="form-control "   style="width:140px;" name="DFT"  value="1" required="required" onchange="findoperation(this);">
</div></div>
</td>
<td >
<div class="form-group"><label class="control-label col-md-2"><?php echo $N1; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="Projet" id="doss" required="required"  class="form-control select2me"  style="width:150px">
<?php if(isset($_GET['projet'])&&isset($_GET['id'])){ ?>
<option value="<?php echo $_GET['projet']; ?>"><?php echo $_GET['projet']; ?></option>
<?php }else{ ?>
<option value=""></option>
<?php while($ad=mysql_fetch_array($d)){?>
<option value="<?php echo $ad[0];?>"><?php echo $ad[0];?></option>
<?php }}?>
</select></div></div>
</td>
</tr>

</table>
<div class="table-scrollable">
<table  id="addinput" style="width:100%" >
<tr style="background:#ece7e7;height:30px">
<td><font color="#111" size="2" >&nbsp;&nbsp;<?php echo $N12; ?></font><font color="red">  *</font></td>
<td><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N13; ?></font><font color="red">  *</font></td>
<td><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N14; ?></font><font color="red">  *</font></td>
<td><font color="#111" size="2">&nbsp;&nbsp;<?php echo $N7; ?> </font><font color="red">  *</font></td>
<td><font color="#111" size="2">&nbsp;&nbsp;<?php echo $N15; ?> </font><font color="red">  *</font></td>
<td><font color="#111" size="2">&nbsp;&nbsp;&nbsp;<?php echo $N16; ?></font><font color="red" size="2">%</font><br><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N17; ?></font><font color="red" size="2">  *</font></td>
<td><font color="#111" size="2">&nbsp;&nbsp;Net</font><font color="red">  </font></td>
<td><font color="#111" size="2">&nbsp;&nbsp;Gross</font><font color="red">  </font></td>
<td></td>

</tr>
<tr >
<td>
<div class="form-group">
<div class="col-md-3">	
<textarea   name="Description1"   class="form-control" id="Description1" required="required" style="width:150px;"></textarea>

</div>
</div>
 </td>
<td >
<div class="form-group">	
<div class="col-md-3">
<input type="number" min="0" id="qt1" style="width:80px;" name="qt1" required="required" class="form-control">
</div>
</div>
</td>
<td ><div class="form-group">	
<div class="col-md-3">
<input type="Number" min="0" id="prix1" style="width:80px;" name="prix1" onMouseOut="valider();" placeholder="0.00" required="required" class="form-control" >
</div></td>
</div></td>
<td>
<div class="form-group">	
<div class="col-md-3">
<select name="monnaie1" id="monnaie1" required="required" style="width:85px;" onchange="changerdevise(this,1);" class="form-control select2me">
<?php 
while($mon=mysql_fetch_array($Mn)){ 
$def = mysql_query("SELECT Abreviation_Monnai FROM currency where Monnaie_utliser='1'");
$def_monnaie = mysql_fetch_array($def);
if($def_monnaie[0]==$mon[0]){
?>
<option selected value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
<?php }else{?>
<option  value="<?php echo $mon[0];?>"><?php echo $mon[0];?></option>
<?php }}?>
</select>
</div>
</div>
</td>
<td>
<div class="form-group">	
<div class="col-md-3">
<input type="Number" id="devise1" name="devise1" style="width:60px;" value="1"  min="0"  onMouseOut="valider();"    required="required" class="form-control"> 
</div>
</div>
</td>
<?php 
$def_tax = mysql_query("SELECT * FROM  tax");

?>
<td ><div class="form-group">	
<div class="col-md-3"><select id="TVA1" style="width:90px;" name="TVA1" onChange="valider();"  class="form-control select2me" >
<option value="0/0">0</option>
<?php while($def_tx = mysql_fetch_array($def_tax)){
echo "<option value=".$def_tx[0]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; 
}
?>
</select>
<select name="Compte1" required="required" style="width:100px;" class="form-control select2me"  ><option value="" selected><?php echo $N17; ?></option><?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' AND  etat_affiche like '1%'");while($ab=mysql_fetch_array($a)){?><option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option><?php }} $_SESION["'".$i."'"]=$ad[0];}?></select>
</div>
</div>
</td>
<td ><div id="net1" style="width:100px;">&nbsp;&nbsp;<font size="1">0.00</div></td>
<td ><div id="gross1" style="width:100px;">&nbsp;&nbsp;<font size="1">0.00</div></td>
<td ></td>




</tr>

</table>
	<p style="width:750px">
<a href="#" id="addNew"><?php echo $N18; ?><img src="images/add.png" title="Ajouter Element"></a>
</p>
</div>

				<table align="center">
	<tr><td><font size="1"><?php echo $N19; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="NET"><font size="1">0.00</div></td><td><div id="mn"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N20; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="T"><font size="1">0.00</div></td><td><div id="mn1"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N21; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="TOTAL"><font size="1">0.00</div></td><td><div id="mn2"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	
	</table>
	
<font color="#111" >&nbsp;&nbsp;<?php echo $N23; ?>
<Textarea style="width:100%" name="textS" class="form-control"></Textarea>
<input type="hidden" name="payementF" value="15 Jours" hidden><br>
<input type="hidden" value="sauvgarder" name="etat"	>		
<input type="hidden" value="update" name="type"	>	
<input type="hidden" value="" name="Reference"	>	
<input type="hidden" name="ajouterCommande" value="ajouterCommande"> 


	<div class="form-actions">
									 
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green"  value="1" name="Sauvgarder" ><?php echo $N29; ?></button>
											
										</div>
											
										
									 </div>									
                                    </div>
	</div>
	</div>
	</div>
</form>
<?php }} }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>
