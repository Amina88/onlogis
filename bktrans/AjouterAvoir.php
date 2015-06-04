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

require'includes/recAvoir.php';
     if($etat){
//--------------------------------------------------//
//Sauvgarde de Facture    //
//--------------------------------------------------//
include ("Connection.php");
$C=mysql_query("select * from groupe_account");
$ENV=mysql_query("select * from operation");
$LOG1=mysql_query("select *  from  location  ");
$LOG2=mysql_query("select *  from  logistics_services ");
$LOG3=mysql_query("select *  from   magasinage");
$s=mysql_query("select * from custemer");
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
   document.getElementById("datep").value=a[2];

  
	}
    }
	
    // Ici on va voir comment faire du post
    op.open("POST","verification_donne.php",true);
	projet = document.getElementById(c.id).value;
    op.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    op.send("doss="+projet);
    }
    // element des couts pardéfault
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
  
    function getItem(n,i){
	
    var getCouts = couts();

    getCouts.onreadystatechange = function(){
	
    if(getCouts.readyState == 4 && getCouts.status == 200)
        {
    leselect = getCouts.responseText;
	// document.getElementById("prob").innerHTML = leselect;
	//([0-9]+)/.exec(n.id);
	var mySplitResult = leselect.split("&");
	if(mySplitResult[2]){
	 document.getElementById("Description"+i).value = mySplitResult[1];
	 document.getElementById("prix"+i).value = mySplitResult[0]*1;
	 document.getElementById("monnaie"+i).innerHTML="<option value="+mySplitResult[2]+">"+mySplitResult[2]+"</option>";
	 document.getElementById("qt"+i).value=1;
    }else{
	 document.getElementById("Description"+i).value ="";
	 document.getElementById("prix"+i).value = 0.00;
	 document.getElementById("monnaie"+i).innerHTML=mySplitResult[0];
	 document.getElementById("qt"+i).value=0;
	}
	}
    }
	
    // Ici on va voir comment faire du post
    getCouts.open("POST","verification_donne.php",true);
	
    getCouts.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
abs=document.getElementById(n.id).value ;
clt=document.getElementById("client").value ;
doss=document.getElementById("doss").value ;
    getCouts.send("cl="+clt+"&id="+abs+"&proj="+doss);

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


$('<tr><td><select  id="c'+i+'"  class="form-control select2me"   style="width:70px;"  onchange="getItem(this,'+i+');"><option value="" selected></option><?php  $cl=mysql_query("select * from default_billing   ");while($clt=mysql_fetch_array($cl)){ ?><option value="<?php echo $clt[0]; ?>"><?php echo $clt[5]; ?></option><?php } ?></select></td><td><div class="form-group"><div class="col-md-4"><Textarea  style="width:100px" class="form-control" id=Description'+ i + ' name=Description'+i+' required /></textarea></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0   required class="form-control" style=width:80px; id=qt'+ i +' name=qt' +i+' /></div></div></td><td ><div ><div class="form-group"><div class="col-md-4"><input type=Number required  min=0 id=prix'+ i + ' style=width:80px; name=prix'+ i + ' class="form-control" onMouseOut="valider();" placeholder=0.00  ></div></div></td><td><div class="form-group"><div class="col-md-4"><select id=monnaie'+i+' name=monnaie'+i+' onchange=changerdevise(this,'+i+'); required=required style=width:90px; class="form-control select2me"><?php while($Mnn=mysql_fetch_array($Mon)){ if($Mnn[0]==$default_monnaie[0]){ECHO "<option value=".$Mnn[0]." selected>".$Mnn[0]."</option>";}else{ ECHO "<option value=".$Mnn[0]." >".$Mnn[0]."</option>";}} ?></select></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0 name=devise'+ i + ' id=devise'+ i +' value=1  onMouseOut="valider();"  class="form-control " style=width:60px;> </div></div></td><td ><div class="form-group"><div class="col-md-4"><select  id=TVA'+ i +' style=width:85px; name=TVA'+ i +'  onMouseOut="valider();"  class="form-control select2me"  ><option value="0/0">0</option><?php $def_tax = mysql_query("SELECT * FROM  tax");while($def_tx = mysql_fetch_array($def_tax)){echo "<option value=".$def_tx[0]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; } ?></select><select name="Compte'+i+'" required="required" style="width:100px;" class="form-control select2me"  ><option value="" selected><?php echo $N17; ?></option><?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' AND  etat_affiche like '1%'");while($ab=mysql_fetch_array($a)){?><option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option><?php }} $_SESION["'".$i."'"]=$ad[0];}?></select></div></div></td><td ><div id=net'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td ><div id=gross'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td><a href="#" id="remNew" title="suprimer"><i class="fa fa-times"  ></i></a></td></tr>').appendTo(addDiv);
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

Gross = document.getElementById("gross"+$i);
b=donnees*donnees1*Devis;
T1=(TVAA(TVA)*0.01)*b;
T=T1+b;

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

if(isset($_POST['ajouterAvoir'])){
$client=$_POST['client'];
$doss=$_POST['Projet'];
$D=$_POST['Date'];
$DP=$_POST['Datep'];
$MN=$_POST['monnaie'];
$OP=$_POST['OP'];
$ETAT=$_POST['SauvgarderOffre'];

$prefx=mysql_query("select * from  prefix where element='Avoir' ");
$pref=mysql_fetch_array($prefx);
$g=mysql_query("select * from currency where Monnaie_utliser=1 ");
$h=mysql_fetch_array($g);


$monnaie=$h[0];
$a=mysql_query("select * from invoice where id_facture like '$pref[0]%' ORDER BY id_facture  DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);
$typ=explode("$pref[0]",$t[3]);

if(isset($typ[1])){
$Cod = sprintf("%07d",$typ[1]+1);
}else{
$Cod = sprintf("%07d",1);

}
$Ref="$pref[0]".$Cod;
$Refer=$_POST['Ref'];
$Max=$_POST['fieldsCount'];
$Maxi=0;
if(isset($_POST['Max'])){
$Maxi=$_POST['Max'];
}
$DFT=$_POST['DFT'];
$Resum=$_POST['textS'];
$Resum= str_replace("'", "''",$Resum);
$payement=$_POST['payementF'];
$Remercie="";
$Remercie= str_replace("'", "''",$Remercie);

$autre_monnaie=$_POST['monnaie'];
$d_monnaie=$_POST['DFT'];


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
$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";
}elseif($dtd[0]==$dtf[0]){
if($dtd[1]>$dtf[1]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";

}elseif($dtd[1]==$dtf[1]){
if($dtd[2]>$dtf[2]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N30&url=$url2.$N31";
}
}}

$PD=explode("-",$PR[2]);
$PF=explode("-",$PR[3]);
//Comparéson date debut *date commande
if($dtd[0]<$PD[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";
}elseif($dtd[0]==$PD[0]){
if($dtd[1]<$PD[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";

}elseif($dtd[1]==$PD[1]){
if($dtd[2] < $PD[2] || $dtd[2] == $PD[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N32&url=$url2.$N31";
}
}}

if($dtd[0]>$PF[0]){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";
}elseif($dtd[0]==$PF[0]){
if($dtd[1]>$PF[1]){
$tst=0;

$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";

}elseif($dtd[1]==$PF[1]){
if($dtd[2] > $PF[2] || $dtd[2] == $PF[2] ){
$tst=0;
$link="MenuUtilisation.php?valeur=AjouterAvoir.php&titre=$N31&etat_up=0&msg=$N33&url=$url2.$N31";
}
}}

if($tst==1){
$etat_up=mysql_query("insert into invoice values ('$Resum','$payement','$Remercie','$Ref','$doss','$client','$D','$DP','','$MN','$Refer','0','$autre_monnaie','$d_monnaie','0','0','$monnaie','$DFT','0','$OP','','','','','$PR[0]',$ETAT)")or die(mysql_error());
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
$etat=mysql_query("insert into element_invoice values ($i,'$desc',$qt,'-$prix','$TVAA[1]','$monnaie',$devis,'$Ref','$compte','$TVAA[0]',0)");;
}
}

$succes="error";
if($etat_up){
 require 'JournalVente.php';
     
$succes=$fct.' : '.$Ref.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");

}

$link="MenuUtilisation.php?valeur=AllFacture.php&titre=$N34&etat_up=$etat_up&url=$url&msg=$succes";
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
require'views/viewAvoir.php';

?>

<?php }} else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>