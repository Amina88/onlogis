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


//--------------------------------------------------//
//Sauvgarde de Facture    //
//--------------------------------------------------//
include ("Connection.php");
$C=mysql_query("select * from groupe_account");
$s=mysql_query("select * from custemer");
$d=mysql_query("select * from files where etat_dossier='ouvert'");
$m=mysql_query("select * from currency where choix_monnai='1'");
$Mon=mysql_query("select * from currency ");
$Mn=mysql_query("select * from currency where choix_monnai='1'");
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);
?>

<META NAME="ROBOTS" CONTENT="NOINDEX, NoFOLLOW" />
<script type="text/javascript" src="js/jquery_1.5.2.js"></script>
<script type="text/javascript" src="js/uploader.js"></script>


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
	function client(){
    var cl = null;
        if(window.XMLHttpRequest) 
        cl = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        cl = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        cl = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    cl= false;
    }
    return cl;
    }
  
    function findclient(c){
	
    var cl = client();

    cl.onreadystatechange = function(){
	
    if(cl.readyState == 4 && cl.status == 200)
        {
    leselect = cl.responseText;
	$fieldCount = document.getElementById("fieldsCount").value;
    for ($i =1; $i <=$fieldCount; $i++)
        {
   document.getElementById("c"+$i).innerHTML=leselect;
  
    }
	}
    }
	
    // Ici on va voir comment faire du post
    cl.open("POST","verification_donne.php",true);
	projet = document.getElementById("doss").value;
	f= document.getElementById("client").value;
    cl.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    cl.send("client="+f+"&projet="+projet);
    }
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
   document.getElementById("OP").innerHTML=leselect;

  
	}
    }
	
    // Ici on va voir comment faire du post
    op.open("POST","verification_donne.php",true);
	projet = document.getElementById(c.id).value;
    op.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    op.send("doss="+projet);

    }
    // element des couts pardéfault

</script>
<script  src="javascript/jquery.min.js"></script>      
<script type="text/javascript">
$(function() {
var addDiv = $('#addinput');
var i = $('#addinput p').size()+2;

$('#addNew').live('click', function() {
var j=document.getElementById("fieldsCount").value;
var i =(1*j)+1;


$('<tr><td><select  id="c'+i+'"  class="form-control select2me"   style="width:70px;"  onchange="getItem(this,'+i+');"><option value="" selected></option><?php  $cl=mysql_query("select * from default_billing   ");while($clt=mysql_fetch_array($cl)){ ?><option value="<?php echo $clt[0]; ?>"><?php echo $clt[5]; ?></option><?php } ?></select></td><td><div class="form-group"><div class="col-md-4"><Textarea  style="width:100px" class="form-control" id=Description'+ i + ' name=Description'+i+' required /></textarea></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0   required class="form-control" style=width:80px; id=qt'+ i +' name=qt' +i+' /></div></div></td><td ><div ><div class="form-group"><div class="col-md-4"><input type=Number required  min=0 id=prix'+ i + ' style=width:80px; name=prix'+ i + ' class="form-control"  onkeyup=valider(); placeholder=0.00  ></div></div></td><td><div class="form-group"><div class="col-md-4"><select id=monnaie'+i+' name=monnaie'+i+' onchange=changerdevise(this,'+i+'); required=required style=width:90px; class="form-control select2me"><?php while($Mnn=mysql_fetch_array($Mon)){ if($Mnn[0]==$default_monnaie[0]){ECHO "<option value=".$Mnn[0]." selected>".$Mnn[0]."</option>";}else{ ECHO "<option value=".$Mnn[0]." >".$Mnn[0]."</option>";}} ?></select></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0 name=devise'+ i + ' id=devise'+ i +' value=1  class="form-control " style=width:60px;> </div></div></td><td ><div class="form-group"><div class="col-md-4"><select  id=TVA'+ i +' style=width:85px; name=TVA'+ i +'  onchange=valider();  class="form-control select2me"  ><option value="0/0">0.00</option><?php $def_tax = mysql_query("SELECT * FROM  tax");while($def_tx = mysql_fetch_array($def_tax)){echo "<option value=".$def_tx[0]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; } ?></select></div></div></td><td ><div id=net'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td><div id=gross'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td><a href="#" id="remNew" title="suprimer"><i class="fa fa-times"></i></a></td></tr>').appendTo(addDiv);
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
T=T2;
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
	 document.getElementById("monnaie"+i).innerHTML="<option   value="+mySplitResult[2]+" selected>"+mySplitResult[2]+"</option>";
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
    getCouts.send("cl="+clt+"&id="+abs+"&proj=dd");
    }
	
function 	Changemnt_typ(a){
//alert(a.value); ;
	if(a.value == "LC" || a.value == "MG" || a.value == "LS"  ){
document.getElementById("changement_type").style.visibility="hidden"; 
	}else{
document.getElementById("changement_type").style.visibility="visible";

	}
	
	}
</script>

<?php
//--------------------------------------------------//
//Sauvgarde de Facture    //
//--------------------------------------------------//
if("$permission[1]"=="Administrateur" || "$permission[6]"=='6'){ 
include ("Connection.php");
if(isset($_POST['SauvgarderOffre'])){

$client=$_POST['client'];
$D=date("Y-m-d");
$MN=$_POST['monnaie'];

$g=mysql_query("select * from currency where Monnaie_utliser=1 ");
$h=mysql_fetch_array($g);
$monnaie=$h[0];
$a=mysql_query("select * from offre ORDER BY id_offre DESC LIMIT 0 , 1");
$t=mysql_fetch_array($a);

$prefx=mysql_query("select * from  prefix where element='Offre' ");
$pref=mysql_fetch_array($prefx);
$id=explode("$pref[0]",$t[1]);

if(isset($id[1])){
$Code = sprintf("%04d",$id[1]+1);
}else{
$Code = sprintf("%04d",1);
}

$Ref="$pref[0]".$Code;

$Refer=$_POST['Ref'];
$Max=$_POST['fieldsCount'];
$NP=$_POST['NPSH'];
$Maxi=0;
if(isset($_POST['Max'])){
$Maxi=$_POST['Max'];
}
$DFT=$_POST['DFT'];
$Type=$_POST['Type'];
$Resum=$_POST['textS'];
$Dest=$_POST['Destination'];
$Orig=$_POST['Origine'];
$Terme="";

$t0=$_POST['Terme0'];
$t1=$_POST['Terme1'];

$Terme=$t0.'&'.$t1;


$etat_up=mysql_query("insert into offre (`Resume_offre`, `id_offre`, `client`, `date_lancement`, `Monnaie`, `Ref`, `validation`, `def_Monnaie`, `Taux`, `destination`, `origine`,`Services`,`Type_offre`)values ('$Resum','$Ref','$client','$D','$MN','$Refer','0','$monnaie','$DFT','$Dest','$Orig','$Terme','$Type')");

if($etat_up==1){
for($i=1;$i<=$Max;$i++){
if(isset($_POST["Description".$i])){
$desc=$_POST["Description".$i];
$desc = str_replace("'", "\'",$desc);
$qt=$_POST["qt".$i];
$prix=$_POST["prix".$i];
$TVA=$_POST["TVA".$i];
$TVAA=explode('/',$TVA);
$monnaie=$_POST["monnaie".$i];
$devis=$_POST["devise".$i];
$etat=mysql_query("insert into element_offre values ($i,'$desc',$qt,'$prix','$TVAA[1]','$monnaie',$devis,'$Ref','','$TVAA[0]')");
}
}
$j=0;
for($i=0;$i<$NP;$i++){

if(isset($_POST["QT$i"])){
$j++;
$pt=$_POST["PT$i"];
$qt=$_POST["QT$i"];
$d1=$_POST["dim1$i"];
$d2=$_POST["dim2$i"];
$d3=$_POST["dim3$i"];
$Objet=$_POST["Objet$i"];
$d6=$_POST["Num$i"];
$d7=$_POST["CP$i"];
$d=$d1.'x'.$d2.'x'.$d3;
$reqq="insert into  piece_offre values($j,'$pt','$d','$qt','$Ref','$d6','$d7','$Objet')"; 
$s=mysql_query($reqq);
}
}
}
$titremsg=$N18;
$pfx=$Ref;
$succes="error";
if($etat_up){    
$succes=$titremsg.' : '.$pfx.'  '.$N107; 
$user=$_SESSION['login'];
$date_time=date("Y-m-d H:i:s");
$c=mysql_query("INSERT INTO  `historic` ( `Email` ,`Message` ,`Date` ,`id`)VALUES ('$user',  '$succes',  '$date_time', NULL)");
}
$link="MenuUtilisation.php?valeur=AllOffre.php&titre=$N64&etat_up=$etat_up&url=$N14.$N18.$N64&msg=$succes";
?>
<script type="text/javascript"> 
document.location.href="<?php echo $link ; ?>";
  </script>

 	
<?php
//--------------------------------------------------// 
}else{
require'includes/recOffre.php';
	
//--------------------------------------------------//
//Formulaire de création de Facture et ses elements //
//--------------------------------------------------//
require'views/viewOffre.php';

?>



<?php }}  else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>