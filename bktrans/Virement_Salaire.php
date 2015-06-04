<?php
session_start();
include('Connection.php');
$doc = new DOMDocument(); 
$file_Menu =$_SESSION['lang'];
 
$doc->load($file_Menu); 
$Menu = $doc->getElementsByTagName("Virement_Salaire");
foreach( $Menu as $employee ) 
{ 
 $V3 = $employee->getElementsByTagName( "e3" ); 
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
  $N22 = $V22->item(0)->nodeValue;

 if(!isset($_GET['p'])){
 require('modelstat_salaire.php');
 
}
?>
<?php
if(isset($_GET['cli'])){
$NomSoc=$_GET['cli'];
}
$NomSoc="med";
$max=$_GET['max_per'];
$CBk=$_GET['CBk'];

$ic="select id_facture as code,date_lancement as date_lancement,Date_paiment as date_paiement,Jours_echue as echue,Monnaie_secondaire as monnaie,valeur_payer as valeur_payer  from invoice where client='$NomSoc' and etat_payement=0 and draft=1";


$req_cli = mysql_query('select * from entreprise');
while($ent = mysql_fetch_array($req_cli)){
$ent_s = $ent[0];$ent_adr = $ent[1];$ent_tel = $ent[2];$ent_fax = $ent[3];$ent_mail = $ent[4];$ent_site = $ent[5];$ent_nom = $ent[6];
$ent_city = $ent[7];
$ent_pays = $ent[8];
}

$req_provider = mysql_query("select * from custemer where Nom_Soc='$NomSoc'");
while($admin= mysql_fetch_array($req_provider)){
$c_nom = $admin[0];$c_mail = $admin[5];$c_t1= $admin[6];$c_t2=$admin[7];$c_fax=$admin[13];$c_adr=$admin[20];
}
$monitab=array();




?>
<?php
$pdf = new PDF_Invoice('P','mm','A4');
$pdf->AddPage();
$cbc=mysql_query("select * from  bank_account where Numero_Compte='$CBk' ");
 $BNK=mysql_fetch_array($cbc);
$pdf->fact_dev( "$N15",date("d-m-Y"),"  $BNK[1]",'',$N10,'');
$img=$pdf-> Image('bktrans_data/'.$ent_s,9,10,30);

$pdf->addProvider($img."\n",
                  utf8_decode($N3).": ".$ent_pays."\n".
				  utf8_decode($N4).": ".$ent_city."\n".
				  utf8_decode($N5).": ".$ent_adr."\n" .
				  utf8_decode($N6).": ".$ent_tel."\n".
                  utf8_decode($N7).": ".$ent_fax."\n" .
                  utf8_decode($N8).": ".$ent_mail."\n".
				  utf8_decode($N9).": ".$ent_site."\n\n\n");
				

$pdf->AddCol('code',20,utf8_decode("NCN"),'L');
$pdf->AddCol('echue',55,utf8_decode($N11),'C');
$pdf->AddCol('date_lancement',40,utf8_decode($N12),'C');
$pdf->AddCol('date_paiement',40,utf8_decode($N13),'C');
$pdf->AddCol('echue',40,utf8_decode($N14),'C');

$prop=array('HeaderColor'=>array(192,192,192),'color1'=>array(255,255,255), 'color2'=>array(99,255,255), 'padding'=>3);

$pdf->Table($ic,$prop);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetFont('times', '', 7);

$x = $pdf->x;
$x1 = $pdf->x;
$y = $pdf->y;
$y1 = $pdf->y;
$nln=0;
$push_right = 0;


$k=0;
$nln=1;
for($i=1;$i<=$max;$i++){
if(isset($_GET["Choix_per$i"])){

$push_right=0;
$CIN=$_GET["CIN$i"];
$perd=$_GET["Per$i"];
$tc=mysql_query("select * from  salaire_payer where CIN='$CIN' and periode_pay='$perd'");
 $ics=mysql_fetch_array($tc);
 $Per=mysql_query("select * from  personel where CIN='$CIN'");
 $SLAR=mysql_fetch_array($Per);
 $pbc=mysql_query("select * from  paiment_salaire where id='$ics[1]' ");
						$pay=mysql_fetch_array($pbc);
 $Slr=$ics[2]/$ics[5];
 $nln1=$pdf->NbLines(20,"$ics[0]");
$nln2=$pdf->NbLines(60,"$SLAR[1]");
$nln3=$pdf->NbLines(35,"$Slr.'  '.$ics[4]");
$nln4=$pdf->NbLines(35,"$SLAR[7]");
$nln5=$pdf->NbLines(35,"$pay[4]");
 $nln=max($nln1,$nln2,$nln3,$nln4,$nln4);
 
$pdf->MultiCell($w = 20,7*$nln,$ics[0],1,'C',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);
$pdf->MultiCell($w = 55,7*$nln,$SLAR[1],1,'C',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);
$pdf->MultiCell($w = 40,7*$nln,$Slr.'  '.$ics[4],1,'C',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);
$pdf->MultiCell($w = 40,7*$nln,$SLAR[7],1,'C',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);
$pdf->MultiCell($w = 40,7*$nln,$pay[4],1,'C',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);


$pdf->Ln();
$x=$x1;
$y=$y1+7*(1+$k)*$nln;
$k++;
 
}}

 $pdf->Output();

}

?>