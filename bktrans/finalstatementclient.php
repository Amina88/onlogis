<?php
if(!isset($_GET['p'])){
 session_start();
 }
include('Connection.php');
$doc = new DOMDocument(); 
$file_Menu =$_SESSION['lang'];
$doc->load($file_Menu); 
$Menu = $doc->getElementsByTagName("finalstatementclient");
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
  $N20 = $V20->item(0)->nodeValue;
  $V21 = $employee->getElementsByTagName( "e21" ); 
  $N21 = $V21->item(0)->nodeValue;

 if(!isset($_GET['p'])){

 require('modelstat.php');
 
}
?>
<?php
if(isset($_GET['cli'])){
$NomSoc=$_GET['cli'];
}

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


$tc=mysql_query("select * from invoice where client='$NomSoc' and etat_payement=0 and draft=1");
$monitab=array();
$monitab2=array();
$totaltab=array();
$totaltab2=array();
 while($ics=mysql_fetch_array($tc)){
  if($ics['Jours_echue']>0){
$f=$ics['id_facture'];
$tfs=mysql_query("select * from vueinvoicetotale where facture='$f'");
$tt=mysql_fetch_array($tfs);
if($tt['TOTAL']<0){
$rest=$tt['TOTAL']+$ics['valeur_payer'] ;
}else{
$rest=$tt['TOTAL']-$ics['valeur_payer'] ;
}
 $mv=$ics['Monnaie_secondaire'];
 if (!in_array("$mv",$monitab)) {
$monitab["$mv"]=$ics['Monnaie_secondaire'];
$totaltab["$mv"]=$rest;
}elseif(in_array("$mv",$monitab)){
 $totaltab[$mv]=$totaltab[$mv]+$rest;
}	
}else{

$f=$ics['id_facture'];
$tfs=mysql_query("select * from vueinvoicetotale where facture='$f'");
$tt=mysql_fetch_array($tfs);
if($tt['TOTAL']<0){
$rest=$tt['TOTAL']+$ics['valeur_payer'] ;
}else{
$rest=$tt['TOTAL']-$ics['valeur_payer'] ;
}
 $mv=$ics['Monnaie_secondaire'];
 if (!in_array("$mv",$monitab2)) {
$monitab2["$mv"]=$ics['Monnaie_secondaire'];
$totaltab2["$mv"]=$rest;
 
}elseif(in_array("$mv",$monitab2)){
 $totaltab2[$mv]=$totaltab2[$mv]+$rest;

}	

}

}






?>
<?php
$pdf = new PDF_Invoice('P','mm','A4');
$pdf->AddPage();
$pdf->fact_dev( "$N21",date("d-m-Y"),$c_nom,$c_adr,$N10,$N5);
$img=$pdf-> Image('bktrans_data/'.$ent_s,9,10,30);

$pdf->addProvider($img."\n",
                  utf8_decode($N3).": ".$ent_pays."\n".
				  utf8_decode($N4).": ".$ent_city."\n".
				  utf8_decode($N5).": ".$ent_adr."\n" .
				  utf8_decode($N6).": ".$ent_tel."\n".
                  utf8_decode($N7).": ".$ent_fax."\n" .
                  utf8_decode($N8).": ".$ent_mail."\n".
				  utf8_decode($N9).": ".$ent_site."\n\n\n");
				

$pdf->AddCol('code',20,utf8_decode($N11),'L');
$pdf->AddCol('date_lancement',30,utf8_decode($N12),'C');
$pdf->AddCol('date_paiement',30,utf8_decode($N13),'C');
$pdf->AddCol('echue',30,utf8_decode($N14),'C');
$pdf->AddCol('monnaie',30,utf8_decode($N15),'C');
$pdf->AddCol('',50,utf8_decode($N16),'C');
$prop=array('HeaderColor'=>array(192,192,192),'color1'=>array(255,255,255), 'color2'=>array(255,255,255), 'padding'=>3);
$pdf->Table($ic,$prop);
for($i=0;$i<10;$i++){
$pdf->Ln();
}


$x = $pdf->x;
$x1 = $pdf->x;
$y = $pdf->y;
$y1 = $pdf->y;
$nln=0;
$push_right = 0;
$nln1=$pdf->NbLines(20,'');
$nln2=$pdf->NbLines(30,'');
$nln3=$pdf->NbLines(30,'');
$nln4=$pdf->NbLines(30,'');
$nln5=$pdf->NbLines(30,'');
$nln6=$pdf->NbLines(50,'');
 $nln=max($nln1,$nln2,$nln3,$nln4,$nln5,$nln6);


$j=0;
foreach ($monitab as $key) {
$push_right=0;
if($totaltab["$key"]>0){
$v=$totaltab["$key"];
$pdf->MultiCell($w = 104,5*$nln,utf8_decode("$N17                 $N18               ".$key),1,'C',6);
}else{
$v=$totaltab["$key"]*-1;
$pdf->MultiCell($w = 104,5*$nln,utf8_decode("$N17                 $N20               ".$key),1,'C',6);
}
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);


$pdf->MultiCell($w = 83,5*$nln,"            ".number_format($v,2,',','.'),1,'C',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);
$pdf->Ln();
$x=$x1;
$y=$y1+5*(1+$j);
$j++;

}
for($i=0;$i<1;$i++){
$pdf->Ln();
}

$x = $pdf->x;
$x1 = $pdf->x;
$y = $pdf->y;
$y1 = $pdf->y;
$nln=0;
$push_right = 0;
$nln1=$pdf->NbLines(20,'');
$nln2=$pdf->NbLines(30,'');
$nln3=$pdf->NbLines(30,'');
$nln4=$pdf->NbLines(30,'');
$nln5=$pdf->NbLines(30,'');
$nln6=$pdf->NbLines(50,'');
 $nln=max($nln1,$nln2,$nln3,$nln4,$nln5,$nln6);
$k=0;
foreach ($monitab2 as $key) {
$push_right=0;

if($totaltab2["$key"]>0){
$val=$totaltab2["$key"];
$pdf->MultiCell($w = 104,5*$nln,utf8_decode(" $N19                                 $N18               ".$key),1,'C',6);
}else{
$val=$totaltab2["$key"]*-1;
$pdf->MultiCell($w = 104,5*$nln,utf8_decode(" $N19                                 $N20               ".$key),1,'C',6);
}
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);

$pdf->MultiCell($w = 83,5*$nln,"            ".number_format($val,2,',','.'),1,'C',6);
$push_right += $w;
$pdf->SetXY($x + $push_right, $y);
$pdf->Ln();
$x=$x1;
$y=$y1+5*(1+$k);
$k++;

}



 if(!isset($_GET['p'])){

 $pdf->Output();
 
 }else{ 
 $ht=date("H-i-s");                      
 $t=date("Y-m-d"); 
 $suffixe= $t.'_'.$ht;
$file="soa".$NomSoc.".pdf";
 $print="F";
$pdf->Output("bktrans_data/$file","$print");
}
}

?>