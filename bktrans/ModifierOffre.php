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
if("$permission[1]"=="Administrateur" || "$permission[6]"=='6'){ 
include ("Connection.php");
$url=$N19.".".$N20.".".$N22;
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
  $N26 = $V26->item(0)->nodeValue;
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

<link type="text/css" href="css/uploader.css" rel="stylesheet" />


<script type="text/javascript">
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

//--------------------------------------------------//
//récupérer le valaur de devise de chaque element   //
//--------------------------------------------------//
function getelement(){
    var xh = null;
        if(window.XMLHttpRequest) 
        xh = new XMLHttpRequest();
        else if(window.ActiveXObject){ 
        try {
        xh = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        xh = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
         else {
          alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    xh= false;
    }
    return xh;
    }
  
    function test(nom){
	
    var xh = getelement();

    xh.onreadystatechange = function(){
	
    if(xh.readyState == 4 && xh.status == 200)
        {
    leselect = xh.responseText;
    for ($i = 1; $i <2; $i++)
        {
	/([0-9]+)/.exec(nom.id);
	
    document.getElementById('devise'+RegExp.$1).value = leselect;

	
    }
	}
    }
	
    // Ici on va voir comment faire du post
    xh.open("POST","verification_donne.php",true);
	
    xh.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
abs=document.getElementById(nom.id).value ;
    xh.send("abs="+abs);
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
	document.getElementById('mn').innerHTML="&nbsp;&nbsp;"+document.getElementById(abr.id).value;
	document.getElementById('mn1').innerHTML="&nbsp;&nbsp;"+document.getElementById(abr.id).value;
	document.getElementById('mn2').innerHTML="&nbsp;&nbsp;"+document.getElementById(abr.id).value;
	
	}
    }
	
    // Ici on va voir comment faire du post
    Monnaiexh.open("POST","verification_donne.php",true);
	
    Monnaiexh.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
abs=document.getElementById(abr.id).value ;
    Monnaiexh.send("Monnaiee="+abs);
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


$('<tr><td><select  id="c'+i+'"  class="form-control select2me"   style="width:70px;"  onchange="getItem(this,'+i+');"><option value="" selected></option><?php  $cl=mysql_query("select * from default_billing   ");while($clt=mysql_fetch_array($cl)){ ?><option value="<?php echo $clt[0]; ?>"><?php echo $clt[5]; ?></option><?php } ?></select></td><td><div class="form-group"><div class="col-md-4"><Textarea  style="width:100px" class="form-control" id=Description'+ i + ' name=Description'+i+' required /></textarea></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0   required class="form-control" style=width:80px; id=qt'+ i +' name=qt' +i+' /></div></div></td><td ><div ><div class="form-group"><div class="col-md-4"><input type=Number required  min=0 id=prix'+ i + ' style=width:80px; name=prix'+ i + ' class="form-control" onMouseOut="valider();" placeholder=0.00  ></div></div></td><td><div class="form-group"><div class="col-md-4"><select id=monnaie'+i+' name=monnaie'+i+' onchange=test(this); required=required style=width:90px; class="form-control select2me"><?php while($Mnn=mysql_fetch_array($Mon)){ if($Mnn[0]==$default_monnaie[0]){ECHO "<option value=".$Mnn[0]." selected>".$Mnn[0]."</option>";}else{ ECHO "<option value=".$Mnn[0]." >".$Mnn[0]."</option>";}} ?></select></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0 name=devise'+ i + ' id=devise'+ i +' value=1  onMouseOut="valider();"  class="form-control " style=width:60px;> </div></div></td><td ><div class="form-group"><div class="col-md-4"><select  id=TVA'+ i +' style=width:85px; name=TVA'+ i +'  onMouseOut="valider();"  class="form-control select2me"  ><option value="0/0">0</option><?php $def_tax = mysql_query("SELECT * FROM  tax");while($def_tx = mysql_fetch_array($def_tax)){echo "<option value=".$def_tx[0]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; } ?></select><select name="Compte'+i+'" required="required" style="width:100px;" class="form-control select2me"  ><option value="" selected><?php echo $N17; ?></option><?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' AND  etat_affiche like '1%'");while($ab=mysql_fetch_array($a)){?><option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option><?php }} $_SESION["'".$i."'"]=$ad[0];}?></select></div></div></td><td ><div id=net'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td ><div id=gross'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td><a href="#" id="remNew" title="suprimer"><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td></tr>').appendTo(addDiv);
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
$nb=0;
$id_Facture=$_GET['id_Facture'];
$_SESSION['id_facture']=$id_Facture;
$facture=mysql_query("select * from offre where id_offre='$id_Facture'");
$element=mysql_query("select * from element_offre where Reference='$id_Facture'"); 
$C=mysql_query("select * from groupe_account");
$s=mysql_query("select * from  custemer ");
$d=mysql_query("select * from files  where etat_dossier='ouvert' ");
$m=mysql_query("select * from currency where Monnaie_utliser='1'");
$monnaie=mysql_query("select Abreviation_Monnai from currency where Monnaie_utliser='1'");
$default_monnaie=mysql_fetch_array($monnaie);
$res=mysql_fetch_array($facture);

$ENV=mysql_query("select * from operation where client='$res[2]'");
$LOG1=mysql_query("select *  from  location where Client='$res[2]'  ");
$LOG2=mysql_query("select *  from  logistics_services where Client='$res[2]' ");
$LOG3=mysql_query("select *  from   magasinage where Client='$res[2]'");
?>
<form method="POST" action="MenuUtilisation.php?valeur=UpdateOffre.php" id="form_sample_2" class="form-horizontal" >
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
						
							
<table >
<tr>
<td>
<div class="form-group"><label class="control-label col-md-8"><?php echo $N9; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="OP" id="OP"  class="form-control select2me" required="required"   style="width:150px" onClick="findoperation(this);" >

<option value=""></option>
<option value="<?php echo $_GET['id']; ?>"><?php echo $_GET['id']; ?></option>


</select></div></div>
</td>
<td><div class="form-group"><label class="control-label col-md-2"><?php echo $N2; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">

												<input type="text" class="form-control"  name="Date"  required  style="width:120px" value="" >
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div></div></div></td>
<td><div class="form-group"><label class="control-label col-md-2"><?php echo $N3; ?>&nbsp;<span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
												<input type="text" class="form-control"  name="Datep"  style="width:120px" required value="" >
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
<input type="text"    class="form-control "   style="width:140px;" name="Ref" value="<?php echo $res[6]; ?>" required="required" >
</div></div>
</td>
</tr>
<tr>
<td>
<div class="form-group"><label class="control-label col-md-2"><?php echo $N6; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="client"  id="client" required="required" class="form-control select2me"  style="width:150px" >
<option value="<?php echo $res[2]; ?>"><?php echo $res[2]; ?></option>
</select></div></div></td>
<td>
<div class="form-group"><label class="control-label col-md-2"><?php echo $N7; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<select name="monnaie" id="monnaie" required="required" style="width:120px;" class="form-control select2me"  onchange="changemonnaie(this);" >

<option  value="<?php echo $res[5]; ?>"><?php echo $res[5]; ?></option>

</select></div></div></td>
<td >
<div class="form-group"><label class="control-label col-md-2"><?php echo $N8; ?><span class="required">* </span></label>
<br><br>
<div class="col-md-4">
<input type="text" id="DFT"   class="form-control "   style="width:140px;" name="DFT"   value="<?php echo $res[9]; ?>" required="required" onchange="findoperation(this);">
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
<table style="width:100%"  >
<tr style="background:#ece7e7;height:30px">
<td><font color="#111" size="1" >&nbsp;&nbsp;<?php echo $N12; ?></font><font color="red">  *</font></td>
<td><font color="#111"size="1" >&nbsp;&nbsp;<?php echo $N13; ?></font><font color="red">  *</font></td>
<td><font color="#111"size="1" >&nbsp;&nbsp;<?php echo $N14; ?></font><font color="red">  *</font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;<?php echo $N7; ?> </font><font color="red">  *</font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;<?php echo $N15; ?> </font><font color="red">  *</font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;&nbsp;<?php echo $N16; ?></font><font color="red" size="2">%</font><br><font color="#111"size="2" >&nbsp;&nbsp;<?php echo $N17; ?></font><font color="red" size="2">  *</font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;&nbsp;Net</font><font color="red">  </font></td>
<td><font color="#111" size="1">&nbsp;&nbsp;&nbsp;Gross</font><font color="red">  </font></td>
<td></td>

</tr>
<?php 
$TT=0;
$TVA=0;
$TS=0;
$nb=0;
while($elem=mysql_fetch_array($element)){ $nb++; ?>
<tr >

<td>
<div class="form-group">
<div class="col-md-3">	
<textarea   name="Description<?php echo $nb; ?>"  class="form-control" id="Description<?php echo $nb; ?>"  required="required" style="width:150px">
<?php echo $elem[1]; ?>

</textarea>

</div>
</div>
 </td>
<td >
<div class="form-group">	
<div class="col-md-3">
<input type="number" min="0" id="qt<?php echo $nb; ?>" style="width:80px;" name="qt<?php echo $nb; ?>"  value="<?php echo $elem[2]; ?>" required="required" class="form-control">
</div>
</div>
</td>
<td ><div class="form-group">	
<div class="col-md-3">
<input type="Number" min="0" id="prix<?php echo $nb; ?>" style="width:80px;" name="prix<?php echo $nb; ?>"   value="<?php echo $elem[3]; ?>" onMouseOut="valider();" placeholder="0.00" required="required" class="form-control" >
</div></td>
</div></td>
<td>
<div class="form-group">	
<div class="col-md-3">
<select name="monnaie<?php echo $nb; ?>" id="monnaie<?php echo $nb; ?>" required="required" style="width:85px;"  onchange="test(this);" class="form-control select2me">
<option  value="<?php echo $elem[5]; ?>"><?php echo $elem[5]; ?></option>

</select>
</div>
</div>
</td>
<td>
<div class="form-group">	
<div class="col-md-3">
<input type="Number" id="devise<?php echo $nb; ?>" name="devise<?php echo $nb; ?>" style="width:60px;"   value="<?php echo $elem[6]; ?>"  min="0"  onMouseOut="valider();"    required="required" class="form-control"> 
</div>
</div>
</td>

<td ><div class="form-group">	
<div class="col-md-3"><select id="TVA<?php echo $nb; ?>" style="width:90px;" name="TVA<?php echo $nb; ?>" onChange="valider();"   class="form-control select2me" >
<?php if($elem[4]=="0") { ?>
<option value="<?php echo $elem[9]."/".$elem[4]; ?>"><?php echo $elem[4]; ?></option>
<?php }else{ ?>
<option value="<?php echo $elem[9]."/".$elem[4]; ?>"><?php echo $elem[9]."/".$elem[4]; ?></option>
<?php } ?>
</select>
<select name="Compte<?php echo $nb; ?>" required="required" style="width:100px;" class="form-control select2me"  ><option value="" selected><?php echo $N17; ?></option><?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' AND  etat_affiche like '1%'");while($ab=mysql_fetch_array($a)){?><option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option><?php }} $_SESION["'".$i."'"]=$ad[0];}?></select>
</div>
</div>
</td>
<td ><div id="net<?php echo $nb; ?>" style="width:100px;">&nbsp;&nbsp;<font size="1">

<?php 
$tt=$elem[2]*$elem[3]*$elem[6];
echo number_format($tt, 2)."&nbsp;".$elem[5]; 


?>

</div></td>
<td ><div id="gross<?php echo $nb; ?>" style="width:100px;">&nbsp;&nbsp;<font size="1">

<?php 
$tt=$elem[2]*$elem[3]*$elem[6];
$TV=$tt*0.01*$elem[4];
$tS=$TV+$tt;
$TT=$TT+$tt;
$TVA=$TVA+$TV;
$TS=$TS+$tS;
echo number_format($tS, 2)."&nbsp;".$elem[5]; 


?>

</div></td>
<td ></td>




</tr>
<?php } ?>
</table>
</div>
	

				<table align="center">
	<tr><td><font size="1"><?php echo $N19; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="NET"><font size="1"><?php echo number_format($TT,2); ?></div></td><td><div id="mn"><?php echo"&nbsp;&nbsp;<font size=1>".$res[5]; ?></div></td></tr>
	<tr><td><font size="1"><?php echo $N20; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="T"><font size="1"><?php echo number_format($TVA,2); ?></div></td><td><div id="mn1"><?php echo"&nbsp;&nbsp;<font size=1>".$res[5]; ?></div></td></tr>
	<tr><td><font size="1"><?php echo $N21; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="TOTAL"><font size="1"><?php echo number_format($TS,2); ?></div></td><td><div id="mn2"><?php echo"&nbsp;&nbsp;<font size=1>".$res[5];?></div></td></tr>
	
	</table>
<font color="#111" >&nbsp;&nbsp;<?php echo $N23; ?></font>
<Textarea style="width:100%" name="textS" class="form-control">
<?php echo $res[0]; ?>

</Textarea>
<input type="hidden" name="payementF" value="15 Jours" hidden><br>
<input type="hidden" value="sauvgarder" name="etat"	>		
<input type="hidden" value="update" name="type"	>	
<input type="hidden" value="" name="Reference"	>	
<input type="hidden" name="ajouterFacture" value="ajouterFacture"> 

<input  type="hidden" value=<?php echo $nb;  ?> id="fieldsCount" name="fieldsCount" placeholder="1"   style="width:130">	
	<?php if($res[10]==""){ ?>
	<div class="form-actions">
									 
									 <div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green" name="SauvgarderOffre" ><?php echo $N26; ?></button>
											
										</div>
									 </div>									
                                    </div>
									
									<?php } ?>
	</div>
	</div>
	</div>
</form>
<?php } }else{ ?>
<script type="text/javascript"> 
document.location.href="extra_404_option3.html";
  </script >

<?php } ?>