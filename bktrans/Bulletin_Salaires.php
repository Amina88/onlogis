<?php
session_start();
	
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Bultin de salaire</title>

<style type="text/css" media="print">
#noimprime{ 
display:none; 
}
</style>
<style type="text/css" >
body{
	font-family:Arial, Helvetica, sans-serif;
	background: url(background.jpg);
	margin:0 auto;
	width:720px;
}
a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
a:visited {
	color: #666;
	font-weight:bold;
	text-decoration:none;
}
a:active,
a:hover {
	color: #bd5a35;
	text-decoration:underline;
}


/*
Table Style - This is what you want
------------------------------------------------------------------ */
table a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;

	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child{
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr{
	text-align: center;
	padding-left:10px;
}
table tr td:first-child{
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table tr td {
 padding:5px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td{
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
	border-bottom:0;
}
table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}

</style>

</head>

<body>
<?php
include ("Connection.php");
$Nom=$_GET['Nom'];
$AN=$_GET['AN'];
$MS=$_GET['MS'];

$s=mysql_query("select * from salaried where CIN='$Nom' AND Mois='$MS' AND annee='$AN'");

$p=mysql_query("select * from personel where CIN='$Nom'");
$PR=mysql_fetch_array($p);
$Ent=mysql_query("select * from entreprise");
$admin=mysql_fetch_array($s);
$ENt=mysql_fetch_array($Ent);

?>

<table cellspacing='0' width="95%"> 
	<tr><th><?php echo $ENt[6];?><BR><?php echo $ENt[1];?><BR><?php echo $ENt[2];?><BR><?php echo $ENt[3];?><BR><?php echo $ENt[4];?><BR><?php echo $ENt[5];?></th><th><b>Bulletin de Salaire</b></th><th>Nom et Prénom&nbsp;:&nbsp;<?php echo $PR[1]; ?><br><br><?php echo $admin[17]; ?>/<?php echo $admin[18]; ?></th>
	<br>
	</tr>
<tr><td>RUBRIQUE</td><td></td><td>Retenues</td></tr>
	<tr><td align="left">Salaire de base</td><td><?php echo number_format($admin[1],2,',','.').' '.$admin[20]; ?></td><td></td></tr>
	<?php if($admin[3]){ ?>
<tr><td align="left">&nbsp;Indemnité de fonction</td><td align="center"><?php echo number_format($admin[3],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } if($admin[4]){ ?>
<tr><td align="left">&nbsp;Indemnité logemen/non logement</td><td align="center"><?php echo number_format($admin[4],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } if($admin[5]){ ?>
<tr><td align="left">&nbsp;Indemnité de transport</td><td align="center"><?php echo number_format($admin[5],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } if($admin[6]){ ?>
<tr><td align="left">&nbsp;Indemnité eau et électricité</td><td align="center"><?php echo number_format($admin[6],2,',','.').' '.$admin[20];  ?></td><td align="center"></td></tr>
<?php } if($admin[2]){ ?>
<tr><td align="left">&nbsp;Augmnetation du salaire</td><td align="center"><?php echo number_format($admin[2],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } if($admin[7]){ ?>
<tr><td align="left">&nbsp;Indemnité de risque</td><td align="center"><?php echo number_format($admin[7],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } if($admin[8]){ ?>
<tr><td align="left">&nbsp;Prime Exception</td><td align="center"><?php echo number_format($admin[8],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } if($admin[9]){ ?>
<tr><td align="left" ><b>&nbsp;TOTAL BRUT</b></td><td align="center"><?php echo number_format($admin[9],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } if($admin[10]){ ?>
<tr><td align="left" >&nbsp;Retenue CNSS</td><td align="center"></td><td align="center"><?php echo number_format($admin[10],2,',','.').' '.$admin[20]; ?></td></tr>
<?php } if($admin[11]){ ?>
<tr><td align="left">&nbsp;Retenue CNAM</td><td align="center"></td><td align="center"><?php echo number_format($admin[11],2,',','.').' '.$admin[20]; ?></td></tr>
<?php } if($admin[12]){ ?>
<tr><td align="left" ><b>&nbsp;Montant imposable</b></td><td align="center"><?php echo number_format($admin[12],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } if($admin[13]){ ?>
<tr><td align="left">&nbsp;Retenue ITS</td><td align="center"></td><td align="center"><?php echo number_format($admin[13],2,',','.').' '.$admin[20]; ?></td></tr>
<?php } if($admin[14]){ ?>
<tr><td align="left"><b>&nbsp;TOTAL RETENUE</b></td><td align="center"></td><td align="center"><?php echo number_format($admin[14],2,',','.').' '.$admin[20]; ?></td></tr>
<?php } if($admin[15]){ ?>
<tr><td align="left">&nbsp;Avance</td><td align="center"></td><td align="center"><?php echo number_format($admin[15],2,',','.').' '.$admin[20]; ?></td></tr>
<?php } if($admin[16]){ ?>
<tr><td align="left"><b>&nbsp;NET A PAYER</b></td><td align="center"><?php echo number_format($admin[16],2,',','.').' '.$admin[20]; ?></td><td align="center"></td></tr>
<?php } ?>
<tr><td colspan="4">
<br><br><br><br>
<br><br><br><br>
Signature et Cachet
<br><br><br><br>
<div id="noimprime"> 
<button onclick="window.print();"><img src="images/imprimante18x18.png"  alt="" title="Imprimer cette page"> 
</button></div> 
 </td>
 </tr>
</table>



</body>
</html>