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
Gross = document.getElementById("gross"+$i);
Net = document.getElementById("net"+$i);
b=donnees*donnees1*Devis;
T1=(TVAA(TVA)*0.01)*b;
T2=b;
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


$('<tr><td><div class="form-group"><div class="col-md-4"><Textarea  style="width:150px;size:4px;" class="form-control" id=Description'+ i + ' name=Description'+i+' required /></textarea></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0   required class="form-control" style=width:80px; id=qt'+ i +' name=qt' +i+' /></div></div></td><td ><div ><div class="form-group"><div class="col-md-4"><input type=Number required  min=0 id=prix'+ i + ' style=width:80px; name=prix'+ i + ' class="form-control" onMouseOut="valider();" placeholder=0.00  ></div></div></td><td><div class="form-group"><div class="col-md-4"><select id=monnaie'+i+' name=monnaie'+i+' onchange=test(this); required=required style=width:90px; class="form-control select2me"><?php while($Mnn=mysql_fetch_array($Mon)){ if($Mnn[0]==$default_monnaie[0]){ECHO "<option value=".$Mnn[0]." selected>".$Mnn[0]."</option>";}else{ ECHO "<option value=".$Mnn[0]." >".$Mnn[0]."</option>";}} ?></select></div></div></td><td><div class="form-group"><div class="col-md-4"><input type=Number min=0 name=devise'+ i + ' id=devise'+ i +' value=1  onMouseOut="valider();"  class="form-control " style=width:60px;> </div></div></td><td ><div class="form-group"><div class="col-md-4"><select  id=TVA'+ i +' style=width:85px; name=TVA'+ i +'  onMouseOut="valider();"  class="form-control select2me"  ><option value="0/0">0</option><?php $def_tax = mysql_query("SELECT * FROM  tax");while($def_tx = mysql_fetch_array($def_tax)){echo "<option value=".$def_tx[0]."/".$def_tx[1].">".$def_tx[0]."/".$def_tx[1]."%</option>"; } ?></select><select name="Compte'+i+'" required="required" style="width:100px;" class="form-control select2me"  ><option value="" selected><?php echo $N17; ?></option><?php $group=mysql_query("SELECT type_Compte FROM `codes` ORDER BY `type_Compte` ASC");$i=0;$a=0;$_SESION["'".$a."'"]="text";while($ad=mysql_fetch_array($group)){$i++;$a=$i-1;if($_SESION["'".$a."'"]!=$ad[0]){?><optgroup  label="<?php echo $ad[0]; ?>" style="font-weight:bolder;" ><?php echo $ad[0]; ?></optgroup><?php  $a=mysql_query("select Nom_Code from  codes where type_Compte='$ad[0]' AND  etat_affiche like '1%'");while($ab=mysql_fetch_array($a)){?><option value="<?php echo $ab[0]; ?>"><?php echo $ab[0]; ?></option><?php }} $_SESION["'".$i."'"]=$ad[0];}?></select></div></div></td><td ><div id=net'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td ><div id=gross'+ i +' style=width:90px;><font size=1>&nbsp;0.00</font></div></td><td><a href="#" id="remNew" title="supprimer"><button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i></button></a></td></tr>').appendTo(addDiv);
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
<form method="POST" action="MenuUtilisation.php?valeur=AjouterBonComm.php" id="form_sample_2" class="form-horizontal" >

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
												<input type="text" class="form-control"  name="Datep"   id="Echd" style="width:120px" required value="" >
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
<select name="Fournisseur"   required="required" class="form-control select2me" onchange="getItem(this);"  style="width:150px" >
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
<td><font color="#111" size="2">&nbsp;&nbsp;&nbsp;Net</font><font color="red">  </font></td>
<td><font color="#111" size="2">&nbsp;&nbsp;&nbsp;Gross</font><font color="red">  </font></td>
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
<select name="monnaie1" id="monnaie1" required="required" style="width:85px;" onchange="test(this);" class="form-control select2me">
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
<td >&nbsp;</td>




</tr>

</table>
	<p style="width:750px">
<a href="#" id="addNew"><?php echo $N18; ?><img src="images/add.png" title="Ajouter Element"></a>
</p>
</div>

				<table align="center"  >
	<tr ><td><font size="1"><?php echo $N19; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="NET"><font size="1">0.00</div></td><td><div id="mn"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N20; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="T"><font size="1">0.00</div></td><td><div id="mn1"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	<tr><td><font size="1"><?php echo $N21; ?></h4></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td><div id="TOTAL"><font size="1">0.00</div></td><td><div id="mn2"><?php echo"&nbsp;&nbsp;<font size=1>".$default_monnaie[0];?></div></td></tr>
	
	</table>
<font color="#111" >&nbsp;&nbsp;<?php echo $N23; ?></font>
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