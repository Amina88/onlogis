<?php
$nameFile="codes";
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.$nameFile.'.xls');
header('Content-Transfer-Encoding: binary');
header('Expires:0');
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header('Content-Type: application/force-download');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header("Cache-Control: private",false);
session_start();
$docs = new DOMDocument(); 
$docs->load($_SESSION['lang']); 
include ("Connection.php");
$employees= $docs->getElementsByTagName("Codes"); 
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
  $N34 = $V34->item(0)->nodeValue;$V35 = $employee->getElementsByTagName( "e35" ); 
  $N35 = $V35->item(0)->nodeValue;$V36 = $employee->getElementsByTagName( "e36" ); 
  $N36 = $V36->item(0)->nodeValue;$V37 = $employee->getElementsByTagName( "e37" ); 
  $N37= $V37->item(0)->nodeValue; $V38 = $employee->getElementsByTagName( "e38" ); 
  $N38 = $V38->item(0)->nodeValue;$V42 = $employee->getElementsByTagName( "e42" ); 
  $N42 = $V42->item(0)->nodeValue;$V43 = $employee->getElementsByTagName( "e43" ); 
  $N43 = $V43->item(0)->nodeValue;

$sql="select * from codes";
$request =mysql_query($sql);

?>
<style >
.features-table {
  width: 100%;
  margin: 0 auto;
  border-collapse: separate;
  border-spacing: 0;
  text-shadow: 0 1px 0 #fff;
  color: #2a2a2a;
  background: #fafafa;  
  background-image: linear-gradient(top, #fff, #eaeaea, #fff);
}

.features-table td {
  height: 25px;
  line-height: 25px;
  padding: 0 20px;
  border-bottom: 1px solid #cdcdcd;
  box-shadow: 0 1px 0 white;
  white-space: nowrap;
  text-align: center;
}

.features-table td{
  text-align: left;
  font: normal 12px Verdana, Arial, Helvetica;
  width: 150px;
}
.features-table thead tr td{
  text-align: Center;
}


.features-table td {
  background: #efefef;
  background: rgba(144,144,144,0.15);
  border-right: 1px solid white;
}




.features-table thead td {
  font: bold 1.3em 'trebuchet MS', 'Lucida Sans', Arial;  
  border-radius-topright: 10px;
  border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}






</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table class="features-table"  ><thead>
<tr>
<td colspan="4"><?php echo $N42;  ?></td>
</tr>
		</thead> 	<thead> 
				<tr rowspan="1"> 
   					 
   					<td ><font size="2" color="#0babf6" ><?php echo $N3;  ?></h4></td> 
   					<td ><font size="2" color="#0babf6"><?php echo $N4;  ?></h4></td> 
   					<td ><font size="2" color="#0babf6"><?php echo $N5;  ?></h4></td> 
   					<td ><font size="2" color="#0babf6"><?php echo $N6;  ?></h4></td> 
   					<td ><font size="2" color="#0babf6"><?php echo $N43;  ?></h4></td> 
    				
					
				</tr> 
			</thead> 
			<?php 
			$j=0;
			while($admina=mysql_fetch_array($request)){
			$j++;
			$nom="NOM".$j;
			$_SESSION["$nom"]=$admina[0];
?><tr> 
			<tfoot> 
				
				<td><font size="1"><?php echo $admina[0];?></td> 
					<td><font size="1"><?php echo $admina[1];?></td> 
						<td><font size="1"><?php echo $admina[2];?></td> 
							<td><font size="1"><?php echo $admina[3];?></td> 
							<td><font size="1"><?php echo $admina[5];?></td> 
				
</tfoot> 	</tr> 
<?PHP
}}
 
?>